<v-charts-doughnut {{ $attributes }}></v-charts-doughnut>

@pushOnce('scripts')
    <!-- SEO Vue Component Template -->
    <script
        type="text/x-template"
        id="v-charts-doughnut-template"
    >
        <canvas
            :id="chartId"
            class="flex w-full max-w-full items-end"
        ></canvas>
    </script>

    <script type="module">
        app.component('v-charts-doughnut', {
            template: '#v-charts-doughnut-template',

            props: {
                labels: {
                    type: Array, 
                    default: [],
                },

                datasets: {
                    type: Array, 
                    default: true,
                },
            },

            data() {
                return {
                    chart: undefined,
                    chartId: `doughnut-chart-${Math.random().toString(36).substr(2, 9)}`,
                }
            },

            mounted() {
                this.prepare();
            },

            methods: {
                prepare() {
                    if (this.chart) {
                        this.chart.destroy();
                    }

                    const canvasElement = document.getElementById(this.chartId);
                    if (!canvasElement) {
                        console.error('Doughnut chart canvas element not found');
                        return;
                    }
                    const ctx = canvasElement.getContext('2d');
                    this.chart = new Chart(ctx, {
                        type: 'doughnut',
                        
                        data: {
                            labels: this.labels,

                            datasets: this.datasets,
                        },
                
                        options: {
                            plugins: {
                                legend: {
                                    display: false
                                },
                            },
                        }
                    });
                }
            }
        });
    </script>
@endPushOnce