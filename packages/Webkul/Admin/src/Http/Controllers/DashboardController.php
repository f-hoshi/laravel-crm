<?php

namespace Webkul\Admin\Http\Controllers;

use Webkul\Admin\Helpers\Dashboard;
use Webkul\Lead\Repositories\PipelineRepository;

class DashboardController extends Controller
{
    /**
     * Request param functions
     *
     * @var array
     */
    protected $typeFunctions = [
        'over-all'             => 'getOverAllStats',
        'revenue-stats'        => 'getRevenueStats',
        'total-leads'          => 'getTotalLeadsStats',
        'revenue-by-sources'   => 'getLeadsStatsBySources',
        'revenue-by-types'     => 'getLeadsStatsByTypes',
        'top-selling-products' => 'getTopSellingProducts',
        'top-persons'          => 'getTopPersons',
        'open-leads-by-states' => 'getOpenLeadsByStates',
    ];

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        protected Dashboard $dashboardHelper,
        protected PipelineRepository $pipelineRepository
    ) {}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $pipelines = $this->pipelineRepository->all();
        $defaultPipeline = $this->pipelineRepository->getDefaultPipeline();

        return view('admin::dashboard.index')->with([
            'startDate' => $this->dashboardHelper->getStartDate(),
            'endDate'   => $this->dashboardHelper->getEndDate(),
            'pipelines' => $pipelines,
            'defaultPipeline' => $defaultPipeline,
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function stats()
    {
        // パイプラインIDをダッシュボードヘルパーに設定
        if ($pipelineId = request()->query('pipeline_id')) {
            $this->dashboardHelper->setPipelineId($pipelineId);
        }

        $stats = $this->dashboardHelper->{$this->typeFunctions[request()->query('type')]}();

        return response()->json([
            'statistics' => $stats,
            'date_range' => $this->dashboardHelper->getDateRange(),
        ]);
    }

    /**
     * Get all pipelines for frontend.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function pipelines()
    {
        $pipelines = $this->pipelineRepository->all();
        $defaultPipeline = $this->pipelineRepository->getDefaultPipeline();

        return response()->json([
            'pipelines' => $pipelines,
            'default_pipeline' => $defaultPipeline,
        ]);
    }
}
