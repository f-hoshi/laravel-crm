<?php

namespace Webkul\Admin\Http\Controllers\Lead;

use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;
use Prettus\Repository\Criteria\RequestCriteria;
use Webkul\Admin\DataGrids\Lead\LeadDataGrid;
use Webkul\Admin\Http\Controllers\Controller;
use Webkul\Admin\Http\Requests\LeadForm;
use Webkul\Admin\Http\Requests\MassDestroyRequest;
use Webkul\Admin\Http\Requests\MassUpdateRequest;
use Webkul\Admin\Http\Resources\LeadResource;
use Webkul\Admin\Http\Resources\StageResource;
use Webkul\Attribute\Repositories\AttributeRepository;
use Webkul\Contact\Repositories\PersonRepository;
use Webkul\Lead\Helpers\MagicAI;
use Webkul\Lead\Repositories\LeadRepository;
use Webkul\Lead\Repositories\PipelineRepository;
use Webkul\Lead\Repositories\ProductRepository;
use Webkul\Lead\Repositories\SourceRepository;
use Webkul\Lead\Repositories\StageRepository;
use Webkul\Lead\Repositories\TypeRepository;
use Webkul\Lead\Services\MagicAIService;
use Webkul\Tag\Repositories\TagRepository;
use Webkul\User\Repositories\UserRepository;

class LeadController extends Controller
{
    /**
     * Const variable for supported types.
     */
    const SUPPORTED_TYPES = 'pdf,bmp,jpeg,jpg,png,webp';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        protected UserRepository $userRepository,
        protected AttributeRepository $attributeRepository,
        protected SourceRepository $sourceRepository,
        protected TypeRepository $typeRepository,
        protected PipelineRepository $pipelineRepository,
        protected StageRepository $stageRepository,
        protected LeadRepository $leadRepository,
        protected ProductRepository $productRepository,
        protected PersonRepository $personRepository
    ) {
        request()->request->add(['entity_type' => 'leads']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            return datagrid(LeadDataGrid::class)->process();
        }

        if (request('pipeline_id')) {
            $pipeline = $this->pipelineRepository->find(request('pipeline_id'));
