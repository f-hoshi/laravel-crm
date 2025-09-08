<x-admin::layouts>
    <x-slot:title>
        @lang('admin::app.dashboard.index.title')
    </x-slot>

    <!-- Head Details Section -->
    {!! view_render_event('admin.dashboard.index.header.before') !!}

    <div class="mb-5 flex items-center justify-between gap-4 max-sm:flex-wrap">
        {!! view_render_event('admin.dashboard.index.header.left.before') !!}

        <div class="grid gap-1.5">
            <p class="text-2xl font-semibold dark:text-white">
                @lang('admin::app.dashboard.index.title')
            </p>
        </div>

        {!! view_render_event('admin.dashboard.index.header.left.after') !!}

        <!-- Actions -->
        {!! view_render_event('admin.dashboard.index.header.right.before') !!}

        <v-dashboard-filters>
            <!-- Shimmer -->
            <div class="flex gap-1.5">
                <div class="light-shimmer-bg dark:shimmer h-[39px] w-[140px] rounded-md"></div>
                <div class="light-shimmer-bg dark:shimmer h-[39px] w-[140px] rounded-md"></div>
                <div class="light-shimmer-bg dark:shimmer h-[39px] w-[140px] rounded-md"></div>
            </div>
        </v-dashboard-filters>

        {!! view_render_event('admin.dashboard.index.header.right.after') !!}
    </div>

    {!! view_render_event('admin.dashboard.index.header.after') !!}

    <!-- Body Component -->
    {!! view_render_event('admin.dashboard.index.content.before') !!}

    <div class="mt-3.5 flex gap-4 max-xl:flex-wrap">
        <!-- Left Section -->
        {!! view_render_event('admin.dashboard.index.content.left.before') !!}

        <div class="flex flex-1 flex-col gap-4 max-xl:flex-auto">
            <!-- Revenue Stats -->
            @include('admin::dashboard.index.revenue')

            <!-- Over All Stats -->
            @include('admin::dashboard.index.over-all')

            <!-- Total Leads Stats -->
            @include('admin::dashboard.index.total-leads')
        </div>

        {!! view_render_event('admin.dashboard.index.content.left.after') !!}

        <!-- Right Section -->
        {!! view_render_event('admin.dashboard.index.content.right.before') !!}

        <div class="flex w-[360px] max-w-full flex-col gap-4 max-md:w-full">
            <!-- Revenue by sources -->
            @include('admin::dashboard.index.revenue-by-sources')

            <!-- Revenue by types -->
            @include('admin::dashboard.index.revenue-by-types')

            <!-- Top Selling Products -->
            @include('admin::dashboard.index.top-selling-products')

            <!-- Top Persons -->
            @include('admin::dashboard.index.top-persons')

            <!-- Open Leads by States -->
            @include('admin::dashboard.index.open-leads-by-states')
        </div>

        {!! view_render_event('admin.dashboard.index.content.right.after') !!}
    </div>

    {!! view_render_event('admin.dashboard.index.content.after') !!}

    @pushOnce('scripts')

        <script
            type="module"
            src="{{ vite()->asset('js/chart.js') }}"
        >
        </script>

        <script
            type="module"
            src="https://cdn.jsdelivr.net/npm/chartjs-chart-funnel@4.2.1/build/index.umd.min.js"
        >
        </script>

        <script
            type="text/x-template"
            id="v-dashboard-filters-template"
        >
            {!! view_render_event('admin.dashboard.index.date_filters.before') !!}

            <div class="flex gap-1.5">
                <!-- Pipeline Filter -->
                <x-admin::dropdown>
                    <x-slot:toggle>
                        <button
                            type="button"
                            class="flex cursor-pointer appearance-none items-center justify-between gap-x-2 rounded-md border bg-white px-2.5 py-[7px] text-center leading-6 text-gray-600 transition-all marker:shadow hover:border-gray-400 focus:border-gray-400 dark:border-gray-800 dark:bg-gray-900 dark:text-gray-300 dark:hover:border-gray-400 dark:focus:border-gray-400"
                        >
                            <span class="whitespace-nowrap">
                                @{{ selectedPipeline?.name || '@lang('admin::app.dashboard.index.all-pipelines')' }}
                            </span>
                            
                            <span class="icon-down-arrow text-2xl"></span>
                        </button>
                    </x-slot>

                    <x-slot:content class="!p-0">
                        <!-- All Pipelines -->
                        <a
                            href="#"
                            @click.prevent="selectPipeline(null)"
                            class="block px-3 py-2.5 pl-4 text-gray-600 transition-all hover:bg-gray-100 dark:hover:bg-gray-950 dark:text-gray-300"
                            :class="{ 'bg-gray-100 dark:bg-gray-950': !filters.pipeline_id }"
                        >
                            @lang('admin::app.dashboard.index.all-pipelines')
                        </a>

                        <!-- Individual Pipelines -->
                        <a
                            v-for="pipeline in pipelines"
                            :key="pipeline.id"
                            href="#"
                            @click.prevent="selectPipeline(pipeline)"
                            class="block px-3 py-2.5 pl-4 text-gray-600 transition-all hover:bg-gray-100 dark:hover:bg-gray-950 dark:text-gray-300"
                            :class="{ 'bg-gray-100 dark:bg-gray-950': filters.pipeline_id == pipeline.id }"
                            v-text="pipeline.name"
                        >
                        </a>
                    </x-slot>
                </x-admin::dropdown>

                <x-admin::flat-picker.date class="!w-[140px]" ::allow-input="false">
                    <input
                        class="flex min-h-[39px] w-full rounded-md border px-3 py-2 text-sm text-gray-600 transition-all hover:border-gray-400 dark:border-gray-800 dark:bg-gray-900 dark:text-gray-300 dark:hover:border-gray-400"
                        v-model="filters.start"
                        placeholder="@lang('admin::app.dashboard.index.start-date')"
                    />
                </x-admin::flat-picker.date>

                <x-admin::flat-picker.date class="!w-[140px]" ::allow-input="false">
                    <input
                        class="flex min-h-[39px] w-full rounded-md border px-3 py-2 text-sm text-gray-600 transition-all hover:border-gray-400 dark:border-gray-800 dark:bg-gray-900 dark:text-gray-300 dark:hover:border-gray-400"
                        v-model="filters.end"
                        placeholder="@lang('admin::app.dashboard.index.end-date')"
                    />
                </x-admin::flat-picker.date>
            </div>

            {!! view_render_event('admin.dashboard.index.date_filters.after') !!}
        </script>

        <script type="module">
            app.component('v-dashboard-filters', {
                template: '#v-dashboard-filters-template',

                data() {
                    return {
                        pipelines: [],
                        selectedPipeline: null,
                        
                        filters: {
                            pipeline_id: null,
                            start: "{{ $startDate->format('Y-m-d') }}",
                            end: "{{ $endDate->format('Y-m-d') }}",
                        }
                    }
                },

                mounted() {
                    this.loadPipelines();
                },

                watch: {
                watch: {
                    filters: {
                        handler(newFilters, oldFilters) {
                            console.log('Dashboard filters updated:', newFilters);
                            this.$emitter.emit('reporting-filter-updated', newFilters);
                        },
                        deep: true
                    }
                },
                            .then(response => {
                                this.pipelines = response.data.pipelines;
                                
                                // Set default pipeline
                                if (response.data.default_pipeline) {
                                    this.selectPipeline(response.data.default_pipeline);
                                }
                            })
                            .catch(error => {
                                console.error('Failed to load pipelines:', error);
                            });
                    },

                    selectPipeline(pipeline) {
                    selectPipeline(pipeline) {
                        console.log('Selecting pipeline:', pipeline);
                        this.selectedPipeline = pipeline;
                        this.filters.pipeline_id = pipeline ? pipeline.id : null;
                        console.log('Updated filters:', this.filters);
                    }
            });
        </script>
    @endPushOnce
</x-admin::layouts>
