<v-charts-bar {{ $attributes }}></v-charts-bar>

@pushOnce('scripts')
    <!-- SEO Vue Component Template -->
    <script
        type="text/x-template"
        id="v-charts-bar-template"
    >
        <canvas
            :id="chartId"
            class="flex w-full max-w-full items-end"
            :style="'aspect-ratio:' + aspectRatio + '/1'"
            style=""
        ></canvas>
    </script>

    <script type="module">
        app.component('v-charts-bar', {
            template: '#v-charts-bar-template',

            props: {
                labels: {
                    type: Array,
                    default: [],
                },

                datasets: {
                    type: Array,
                    default: [],
                },

                aspectRatio: {
                    type: Number,
                    default: 3.23,
                },
            },

            data() {
                return {
                    chart: undefined,
                    chartId: `bar-chart-${Math.random().toString(36).substr(2, 9)}`,
                }
            },

            mounted() {
                this.prepare();
            },

            methods: {
                prepare() {
                    const barCount = this.datasets.length;
                    
                    this.datasets.forEach((dataset) => {
                        dataset.barThickness = Math.max(4, 36 / barCount);
                    });
        
                    if (this.chart) {
                        this.chart.destroy();
                    }

                    const canvasElement = document.getElementById(this.chartId);
                    if (!canvasElement) {
                        console.error('Bar chart canvas element not found');
                        return;
                    }
                    const ctx = canvasElement.getContext('2d');
                    this.chart = new Chart(ctx, {
                        type: 'bar',
                        
                        data: {
                            labels: this.labels,

                            datasets: this.datasets,
                        },

                        options: {
                            aspectRatio: this.aspectRatio,
                            
                            plugins: {
                                legend: {
                                    display: false
                                },
                            },
                            
                            scales: {
                                x: {
                                    beginAtZero: true,

                                    border: {
                                        dash: [8, 4],
                                    }
                                },

                                y: {
                                    beginAtZero: true,
                                    border: {
                                        dash: [8, 4],
                                    }
                                }
                            }
                        }
                    });
                }
            }
        });
    </script>
@endPushOnce