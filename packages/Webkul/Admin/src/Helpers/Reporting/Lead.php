<?php

namespace Webkul\Admin\Helpers\Reporting;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Webkul\Lead\Repositories\LeadRepository;
use Webkul\Lead\Repositories\StageRepository;

class Lead extends AbstractReporting
{
    /**
     * The channel ids.
     */
    protected array $stageIds;

    /**
     * The all stage ids.
     */
    protected array $allStageIds;

    /**
     * The won stage ids.
     */
    protected array $wonStageIds;

    /**
     * The lost stage ids.
     */
    protected array $lostStageIds;

    /**
     * Current pipeline ID for filtering.
     */
    protected ?int $pipelineId = null;

    /**
     * Create a helper instance.
     *
     * @return void
     */
    public function __construct(
        protected LeadRepository $leadRepository,
        protected StageRepository $stageRepository
    ) {
        $this->initializeStageIds();
        parent::__construct();
    }

    /**
     * Initialize stage IDs based on current pipeline filter.
     */
    protected function initializeStageIds(): void
    {
        $baseQuery = $this->stageRepository;
        
        if ($this->pipelineId) {
            $baseQuery = $baseQuery->where('lead_pipeline_id', $this->pipelineId);
        }

        $this->allStageIds = $baseQuery->pluck('id')->toArray();
        
        // Reset query for won stages
        $wonQuery = $this->stageRepository;
        if ($this->pipelineId) {
            $wonQuery = $wonQuery->where('lead_pipeline_id', $this->pipelineId);
        }
        $this->wonStageIds = $wonQuery->where('code', 'won')->pluck('id')->toArray();
        
        // Reset query for lost stages
        $lostQuery = $this->stageRepository;
        if ($this->pipelineId) {
            $lostQuery = $lostQuery->where('lead_pipeline_id', $this->pipelineId);
        }
        $this->lostStageIds = $lostQuery->where('code', 'lost')->pluck('id')->toArray();
    }

    /**
     * Set pipeline ID for filtering.
     *
     * @param int|null $pipelineId
     * @return void
     */
    public function setPipelineId(?int $pipelineId): void
    {
        $this->pipelineId = $pipelineId;
        $this->initializeStageIds();
    }

    /**
     * Add pipeline filter to lead query.
     */
    protected function addPipelineFilter($query)
    {
        if ($this->pipelineId) {
            $query->where('lead_pipeline_id', $this->pipelineId);
        }
        
        return $query;
    }

    /**
     * Returns current customers over time
     *
     * @param  string  $period
     */
    public function getTotalLeadsOverTime($period = 'auto'): array
    {
        $this->stageIds = $this->allStageIds;

        $period = $this->determinePeriod($period);

        return $this->getOverTimeStats($this->startDate, $this->endDate, 'leads.id', 'created_at', $period);
    }

    /**
     * Returns current customers over time
     *
     * @param  string  $period
     */
    public function getTotalWonLeadsOverTime($period = 'auto'): array
    {
        $this->stageIds = $this->wonStageIds;

        $period = $this->determinePeriod($period);

        return $this->getOverTimeStats($this->startDate, $this->endDate, 'leads.id', 'closed_at', $period);
    }

    /**
     * Returns current customers over time
     *
     * @param  string  $period
     */
    public function getTotalLostLeadsOverTime($period = 'auto'): array
    {
        $this->stageIds = $this->lostStageIds;

        $period = $this->determinePeriod($period);

        return $this->getOverTimeStats($this->startDate, $this->endDate, 'leads.id', 'closed_at', $period);
    }

    /**
     * Determine the appropriate period based on date range
     *
     * @param  string  $period
     */
    protected function determinePeriod($period = 'auto'): string
    {
        if ($period !== 'auto') {
            return $period;
        }

        $diffInDays = $this->startDate->diffInDays($this->endDate);
        $diffInMonths = $this->startDate->diffInMonths($this->endDate);
        $diffInYears = $this->startDate->diffInYears($this->endDate);

        if ($diffInYears > 3) {
            return 'year';
        } elseif ($diffInMonths > 6) {
            return 'month';
        } elseif ($diffInDays > 60) {
            return 'week';
        } else {
            return 'day';
        }
    }

    /**
     * Retrieves total leads and their progress.
     */
    public function getTotalLeadsProgress(): array
    {
        return [
            'previous' => $previous = $this->getTotalLeads($this->lastStartDate, $this->lastEndDate),
            'current'  => $current = $this->getTotalLeads($this->startDate, $this->endDate),
            'progress' => $this->getPercentageChange($previous, $current),
        ];
    }

    /**
     * Retrieves total leads by date
     *
     * @param  \Carbon\Carbon  $startDate
     * @param  \Carbon\Carbon  $endDate
     * @return int
     */
    public function getTotalLeads($startDate, $endDate): int
    {
        $query = $this->leadRepository
            ->resetModel()
            ->whereBetween('created_at', [$startDate, $endDate]);
            
        $query = $this->addPipelineFilter($query);

        return $query->count();
    }

    /**
     * Retrieves total won lead value and their progress.
     */
    public function getTotalWonLeadValueProgress(): array
    {
        return [
            'previous' => $previous = $this->getTotalWonLeadValue($this->lastStartDate, $this->lastEndDate),
            'current'  => $current = $this->getTotalWonLeadValue($this->startDate, $this->endDate),
            'progress' => $this->getPercentageChange($previous, $current),
        ];
    }

    /**
     * Retrieves total won lead value by date
     *
     * @param  \Carbon\Carbon  $startDate
     * @param  \Carbon\Carbon  $endDate
     * @return float
     */
    public function getTotalWonLeadValue($startDate, $endDate): float
    {
        $query = $this->leadRepository
            ->resetModel()
            ->whereIn('lead_pipeline_stage_id', $this->wonStageIds)
            ->whereBetween('closed_at', [$startDate, $endDate]);
            
        $query = $this->addPipelineFilter($query);

        return $query->sum('lead_value') ?: 0;
    }

    /**
     * Retrieves total lost lead value and their progress.
     */
    public function getTotalLostLeadValueProgress(): array
    {
        return [
            'previous' => $previous = $this->getTotalLostLeadValue($this->lastStartDate, $this->lastEndDate),
            'current'  => $current = $this->getTotalLostLeadValue($this->startDate, $this->endDate),
            'progress' => $this->getPercentageChange($previous, $current),
        ];
    }

    /**
     * Retrieves total lost lead value by date
     *
     * @param  \Carbon\Carbon  $startDate
     * @param  \Carbon\Carbon  $endDate
     * @return float
     */
    public function getTotalLostLeadValue($startDate, $endDate): float
    {
        $query = $this->leadRepository
            ->resetModel()
            ->whereIn('lead_pipeline_stage_id', $this->lostStageIds)
            ->whereBetween('closed_at', [$startDate, $endDate]);
            
        $query = $this->addPipelineFilter($query);

        return $query->sum('lead_value') ?: 0;
    }

    /**
     * Retrieves average lead value and their progress.
     */
    public function getAverageLeadValueProgress(): array
    {
        return [
            'previous' => $previous = $this->getAverageLeadValue($this->lastStartDate, $this->lastEndDate),
            'current'  => $current = $this->getAverageLeadValue($this->startDate, $this->endDate),
            'progress' => $this->getPercentageChange($previous, $current),
        ];
    }

    /**
     * Retrieves average lead value by date
     *
     * @param  \Carbon\Carbon  $startDate
     * @param  \Carbon\Carbon  $endDate
     * @return float
     */
    public function getAverageLeadValue($startDate, $endDate): float
    {
        $query = $this->leadRepository
            ->resetModel()
            ->whereBetween('created_at', [$startDate, $endDate]);
            
        $query = $this->addPipelineFilter($query);

        return $query->avg('lead_value') ?: 0;
    }

    /**
     * Retrieves average leads per day and their progress.
     */
    public function getAverageLeadsPerDayProgress(): array
    {
        return [
            'previous' => $previous = $this->getAverageLeadsPerDay($this->lastStartDate, $this->lastEndDate),
            'current'  => $current = $this->getAverageLeadsPerDay($this->startDate, $this->endDate),
            'progress' => $this->getPercentageChange($previous, $current),
        ];
    }

    /**
     * Retrieves average leads per day by date
     *
     * @param  \Carbon\Carbon  $startDate
     * @param  \Carbon\Carbon  $endDate
     * @return float
     */
    public function getAverageLeadsPerDay($startDate, $endDate): float
    {
        $totalDays = $startDate->diffInDays($endDate) ?: 1;
        
        $query = $this->leadRepository
            ->resetModel()
            ->whereBetween('created_at', [$startDate, $endDate]);
            
        $query = $this->addPipelineFilter($query);

        $totalLeads = $query->count();

        return $totalLeads / $totalDays;
    }

    /**
     * Retrieves total lead value by sources.
     */
    public function getTotalWonLeadValueBySources()
    {
        $query = $this->leadRepository
            ->resetModel()
            ->select(
                'lead_sources.name',
                DB::raw('SUM(lead_value) as total')
            )
            ->leftJoin('lead_sources', 'leads.lead_source_id', '=', 'lead_sources.id')
            ->whereIn('lead_pipeline_stage_id', $this->wonStageIds)
            ->whereBetween('leads.created_at', [$this->startDate, $this->endDate])
            ->groupBy('lead_source_id');
            
        $query = $this->addPipelineFilter($query);

        return $query->get();
    }

    /**
     * Retrieves total lead value by types.
     */
    public function getTotalWonLeadValueByTypes()
    {
        $query = $this->leadRepository
            ->resetModel()
            ->select(
                'lead_types.name',
                DB::raw('SUM(lead_value) as total')
            )
            ->leftJoin('lead_types', 'leads.lead_type_id', '=', 'lead_types.id')
            ->whereIn('lead_pipeline_stage_id', $this->wonStageIds)
            ->whereBetween('leads.created_at', [$this->startDate, $this->endDate])
            ->groupBy('lead_type_id');
            
        $query = $this->addPipelineFilter($query);

        return $query->get();
    }

    /**
     * Retrieves open leads by states.
     */
    public function getOpenLeadsByStates()
    {
        $query = $this->leadRepository
            ->resetModel()
            ->select(
                'lead_pipeline_stages.name',
                DB::raw('COUNT(lead_value) as total')
            )
            ->leftJoin('lead_pipeline_stages', 'leads.lead_pipeline_stage_id', '=', 'lead_pipeline_stages.id')
            ->whereNotIn('lead_pipeline_stage_id', $this->wonStageIds)
            ->whereNotIn('lead_pipeline_stage_id', $this->lostStageIds)
            ->whereBetween('leads.created_at', [$this->startDate, $this->endDate]);
            
        // Apply pipeline filter to both leads and stages tables
        if ($this->pipelineId) {
            $query->where('leads.lead_pipeline_id', $this->pipelineId)
                  ->where('lead_pipeline_stages.lead_pipeline_id', $this->pipelineId);
        }
        
        $query->groupBy('lead_pipeline_stage_id')
              ->orderByDesc('total');

        return $query->get();
    }

    /**
     * Returns over time stats.
     *
     * @param  \Carbon\Carbon  $startDate
     * @param  \Carbon\Carbon  $endDate
     * @param  string  $valueColumn
     * @param  string  $dateColumn
     * @param  string  $period
     */
    public function getOverTimeStats($startDate, $endDate, $valueColumn, $dateColumn = 'created_at', $period = 'auto'): array
    {
        $period = $this->determinePeriod($period);

        $intervals = $this->generateTimeIntervals($startDate, $endDate, $period);

        $groupColumn = $this->getGroupColumn($dateColumn, $period);

        $query = $this->leadRepository
            ->resetModel()
            ->select(
                DB::raw("$groupColumn AS date"),
                DB::raw('COUNT(DISTINCT id) AS count'),
                DB::raw("SUM($valueColumn) AS total")
            )
            ->whereIn('lead_pipeline_stage_id', $this->stageIds)
            ->whereBetween($dateColumn, [$startDate, $endDate])
            ->groupBy(DB::raw($groupColumn))
            ->orderBy(DB::raw($groupColumn));

        $query = $this->addPipelineFilter($query);


        if (! empty($stageIds)) {
            $query->whereIn('lead_pipeline_stage_id', $stageIds);
        }

        $results = $query->get();
        $resultLookup = $results->keyBy('date');

        $stats = [];

        foreach ($intervals as $interval) {
            $result = $resultLookup->get($interval['key']);

            $stats[] = [
                'label' => $interval['label'],
                'count' => $result ? (int) $result->count : 0,
                'total' => $result ? (float) $result->total : 0,
            ];
        }

        return $stats;
    }

    /**
     * Generate time intervals based on period
     */
    protected function generateTimeIntervals(Carbon $startDate, Carbon $endDate, string $period): array
    {
        $intervals = [];
        $current = $startDate->copy();

        while ($current <= $endDate) {
            $interval = [
                'key'   => $this->formatDateForGrouping($current, $period),
                'label' => $this->formatDateForLabel($current, $period),
            ];

            $intervals[] = $interval;

            switch ($period) {
                case 'day':
                    $current->addDay();

                    break;
                case 'week':
                    $current->addWeek();

                    break;
                case 'month':
                    $current->addMonth();

                    break;
                case 'year':
                    $current->addYear();

                    break;
            }
        }

        return $intervals;
    }

    /**
     * Get the SQL group column based on period
     */
    protected function getGroupColumn(string $dateColumn, string $period): string
    {
        switch ($period) {
            case 'day':
                return "DATE($dateColumn)";
            case 'week':
                return "DATE_FORMAT($dateColumn, '%Y-%u')";
            case 'month':
                return "DATE_FORMAT($dateColumn, '%Y-%m')";
            case 'year':
                return "YEAR($dateColumn)";
            default:
                return "DATE($dateColumn)";
        }
    }

    /**
     * Format date for grouping key
     */
    protected function formatDateForGrouping(Carbon $date, string $period): string
    {
        switch ($period) {
            case 'day':
                return $date->format('Y-m-d');
            case 'week':
                return $date->format('Y-W');
            case 'month':
                return $date->format('Y-m');
            case 'year':
                return $date->format('Y');
            default:
                return $date->format('Y-m-d');
        }
    }

    /**
     * Format date for display label
     */
    protected function formatDateForLabel(Carbon $date, string $period): string
    {
        switch ($period) {
            case 'day':
                return $date->format('M d');
            case 'week':
                return 'Week '.$date->format('W, Y');
            case 'month':
                return $date->format('M Y');
            case 'year':
                return $date->format('Y');
            default:
                return $date->format('M d');
        }
    }
}
