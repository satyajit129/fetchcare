@extends('layout.master')
@section('title', 'Financial Management')

@section('styles')
    <style>
        .revenue_trends__body canvas {
            width: 100% !important;
            /* canvas takes full container width */
            height: 100% !important;
            /* canvas takes full container height */
            display: block;
            /* remove inline spacing */
        }
    </style>
@endsection

@section('content')
    <div class="content__header">
        <h2 class="content__title">Financial Management</h2>
        <div class="dropdown__container">
            <!-- Dropdown 1 -->
            <div class="dropdown">
                <button class="dropbtn">
                    Vet Name <img src="{{ asset('svg/Vector.svg') }}" alt="">
                </button>
                <div class="dropdown-content">
                    <a href="#">Dr. Smith</a>
                    <a href="#">Dr. Johnson</a>
                    <a href="#">Dr. Brown</a>
                </div>
            </div>

            <!-- Dropdown 2 -->
            <div class="dropdown">
                <button class="dropbtn">
                    Last 30 days <img src="{{ asset('svg/Vector.svg') }}" alt="">
                </button>
                <div class="dropdown-content">
                    <a href="#">Today</a>
                    <a href="#">Last 7 Days</a>
                    <a href="#">Last 30 Days</a>
                </div>
            </div>
        </div>
    </div>
    <div class="content__overview">
        <div class="card_1 active">
            <div class="card_1__header">
                <p>Total Revenue</p>
                <img src="{{ asset('svg/Frame_83.svg') }}" alt="">
            </div>
            <div class="card_1__content">
                <h6>$17,365.00</h6>
                <p>
                    <img src="{{ asset('svg/arrow-up.svg') }}" alt="up arrow" class="arrow-icon">
                    2.7%
                </p>
            </div>
        </div>
        <div class="card_1">
            <div class="card_1__header">
                <p>Avg Transaction</p>
                <img src="{{ asset('svg/Frame_84.svg') }}" alt="">
            </div>
            <div class="card_1__content">
                <h6>$370.00</h6>
                <p>
                    <img src="{{ asset('svg/arrow-up.svg') }}" alt="up arrow" class="arrow-icon">
                    2.7%
                </p>
            </div>
        </div>
        <div class="card_1">
            <div class="card_1__header">
                <p>Revenue per Vet</p>
                <img src="{{ asset('svg/Frame_85.svg') }}" alt="">
            </div>
            <div class="card_1__content">
                <h6>$370.00</h6>
                <p>
                    <img src="{{ asset('svg/arrow-up.svg') }}" alt="up arrow" class="arrow-icon">
                    2.7%
                </p>
            </div>
        </div>
        <div class="card_1">
            <div class="card_1__header">
                <p>Invoice Collection</p>
                <img src="{{ asset('svg/Frame_82.svg') }}" alt="">
            </div>
            <div class="card_1__content">
                <h6>87</h6>
                <p>
                    <img src="{{ asset('svg/arrow-bottom.svg') }}" alt="up arrow" class="arrow-icon">
                    2.7%
                </p>
            </div>
        </div>
        <div class="avg_app_dur card_1">
            <div class="card_1__header">
                <p>Avg. Appoint Duration</p>
                <img src="{{ asset('svg/Frame_81.svg') }}" alt="">
            </div>
            <div class="card_1__content">
                <h6>41.7 min</h6>
                <p>
                    <img src="{{ asset('svg/arrow-bottom.svg') }}" alt="up arrow" class="arrow-icon">
                    2.7%
                </p>
            </div>
        </div>
    </div>
    <div class="content__charts">
        <div class="revenue_trends_chart" style="width: 100%;">
            <div class="revenue_trends__header">
                <h2>Revenue Trends</h2>
            </div>

            <div class="revenue_trends__body" style="position: relative; width: 100%; height: 290px;">
                <canvas id="revenueTrendsChart"></canvas>
            </div>
        </div>

        <div class="revenue-chart-container">
            <div class="pet_distribution__header">
                <h2>Revenue By Services</h2>
            </div>
            <div class="chart-container_body">
                <canvas id="petChart"></canvas>
            </div>
            <div class="revenue-chart-container_footer">
                <div class="revenue-chart-container_footer-left">
                    <span>General Health Checkup</span>
                    <span>Diagnostic Lab testing</span>
                    <span>Surgery</span>
                </div>
                <div class="revenue-chart-container_footer-right">
                    <span>Dental care</span>
                    <span>Pet Nutrition</span>
                    <span>Others</span>
                </div>
            </div>
        </div>
    </div>
    <div class="recent-transactions">
        <div class="recent-transactions__header">
            <h2>Appointments</h2>
        </div>
        <div class="recent-transactions_body">
            <div class="a__header_row">
                <div class="a__header_col">Client</div>
                <div class="a__header_col">Pet Name</div>
                <div class="a__header_col">Amount</div>
                <div class="a__header_col">Date</div>
                <div class="a__header_col">Service</div>
                <div class="a__header_col">Status</div>
            </div>

            <div class="a__body">
                <div class="a__body_row">
                    <div class="a__body_col">Samuel</div>
                    <div class="a__body_col">Max</div>
                    <div class="a__body_col">$375.00</div>
                    <div class="a__body_col">Jun 14</div>
                    <div class="a__body_col">General</div>
                    <div class="a__body_col">
                        <span class="status-indicator pending"></span>
                        Paid
                    </div>
                </div>

                <div class="a__body_row">
                    <div class="a__body_col">Bella</div>
                    <div class="a__body_col">Bella</div>
                    <div class="a__body_col">$120.00</div>
                    <div class="a__body_col">Jun 14</div>
                    <div class="a__body_col">Vaccination</div>
                    <div class="a__body_col">
                        <span class="status-indicator pending"></span>
                        Pending
                    </div>
                </div>

                <div class="a__body_row">
                    <div class="a__body_col">Charlie</div>
                    <div class="a__body_col">Charlie</div>
                    <div class="a__body_col">$200.00</div>
                    <div class="a__body_col">Jun 14</div>
                    <div class="a__body_col">Dental</div>
                    <div class="a__body_col">
                        <span class="status-indicator cancelled"></span>
                        Cancelled
                    </div>
                </div>
                <div class="a__body_row">
                    <div class="a__body_col">Samuel</div>
                    <div class="a__body_col">Max</div>
                    <div class="a__body_col">$375.00</div>
                    <div class="a__body_col">Jun 14</div>
                    <div class="a__body_col">General</div>
                    <div class="a__body_col">
                        <span class="status-indicator pending"></span>
                        Paid
                    </div>
                </div>

                <div class="a__body_row">
                    <div class="a__body_col">Bella</div>
                    <div class="a__body_col">Bella</div>
                    <div class="a__body_col">$120.00</div>
                    <div class="a__body_col">Jun 14</div>
                    <div class="a__body_col">Vaccination</div>
                    <div class="a__body_col">
                        <span class="status-indicator pending"></span>
                        Pending
                    </div>
                </div>

                <div class="a__body_row">
                    <div class="a__body_col">Charlie</div>
                    <div class="a__body_col">Charlie</div>
                    <div class="a__body_col">$200.00</div>
                    <div class="a__body_col">Jun 14</div>
                    <div class="a__body_col">Dental</div>
                    <div class="a__body_col">
                        <span class="status-indicator cancelled"></span>
                        Cancelled
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/chartjs-plugin-datalabels.js') }}"></script>
    <script>
        const ctx = document.getElementById('petChart').getContext('2d');

        new Chart(ctx, {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: [12, 13, 24, 20, 21, 10], // your 6 slice values
                    backgroundColor: [
                        '#FF6384',
                        '#36A2EB',
                        '#FFCE56',
                        '#4BC0C0',
                        '#9966FF',
                        '#FF9F40'
                    ],
                    borderRadius: 7,
                    borderWidth: 0,
                    borderColor: '#fff'
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            usePointStyle: true,
                            pointStyle: 'circle'
                        }
                    },
                    datalabels: {
                        color: '#fff',
                        font: {
                            size: 12,
                            weight: 'bold'
                        },
                        anchor: 'end',
                        align: 'start',
                        offset: 10,
                        formatter: (value, ctx) => {
                            let sum = ctx.chart.data.datasets[0].data.reduce((a, b) => a + b, 0);
                            return (value * 100 / sum).toFixed(0) + "%";
                        }
                    }
                },
                cutout: '0%'
            },
            plugins: [ChartDataLabels]
        });
    </script>

    <script>
        const revenueCtx = document.getElementById('revenueTrendsChart').getContext('2d');

        const gradient = revenueCtx.createLinearGradient(0, 0, 0, 400);
        gradient.addColorStop(0, 'rgba(25,135,84,0.2)');
        gradient.addColorStop(1, 'rgba(25,135,84,0)');

        new Chart(revenueCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                    label: 'Revenue',
                    data: [0, 3000, 6000, 9000, 25000, 31000, 16000, 14000, 18000, 17000, 27000, 39000],
                    borderColor: '#0076CE',
                    borderWidth: 5,
                    pointRadius: 0,
                    pointHoverRadius: 4,
                    pointBackgroundColor: '#0076CE',
                    pointHitRadius: 20,
                    fill: true,
                    backgroundColor: gradient,
                    tension: 0.4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        enabled: false,
                        external: function(context) {
                            let tooltipEl = document.getElementById('chartjs-tooltip');
                            if (!tooltipEl) {
                                tooltipEl = document.createElement('div');
                                tooltipEl.id = 'chartjs-tooltip';
                                tooltipEl.style.position = 'absolute';
                                tooltipEl.style.pointerEvents = 'none';
                                tooltipEl.style.width = '106px';
                                tooltipEl.style.height = '44px';
                                tooltipEl.style.background = '#292929';
                                tooltipEl.style.borderRadius = '7px';
                                tooltipEl.style.display = 'flex';
                                tooltipEl.style.alignItems = 'center';
                                tooltipEl.style.gap = '6px';
                                tooltipEl.style.padding = '6px';
                                tooltipEl.style.boxShadow = '0px 14px 14px rgba(0,0,0,0.25)';
                                tooltipEl.style.fontFamily = 'Inter, sans-serif';
                                tooltipEl.style.fontWeight = '600';
                                tooltipEl.style.fontSize = '14px';
                                tooltipEl.style.color = '#fff';
                                document.body.appendChild(tooltipEl);

                                const dot = document.createElement('div');
                                dot.style.width = '8px';
                                dot.style.height = '8px';
                                dot.style.borderRadius = '50%';
                                dot.style.backgroundColor = '#0076CE';
                                dot.id = 'tooltip-dot';
                                tooltipEl.appendChild(dot);

                                const value = document.createElement('span');
                                value.id = 'tooltip-value';
                                tooltipEl.appendChild(value);
                            }

                            const tooltipModel = context.tooltip;
                            const tooltipDot = document.getElementById('tooltip-dot');
                            const tooltipValue = document.getElementById('tooltip-value');

                            if (tooltipModel.opacity === 0) {
                                tooltipEl.style.display = 'none';
                                return;
                            }

                            tooltipEl.style.display = 'flex';
                            const position = context.chart.canvas.getBoundingClientRect();
                            const body = tooltipModel.dataPoints[0].raw;

                            tooltipValue.innerText = '$' + body.toLocaleString(undefined, {
                                minimumFractionDigits: 2,
                                maximumFractionDigits: 2
                            });

                            tooltipEl.style.left = position.left + window.pageXOffset + tooltipModel.caretX -
                                tooltipEl.offsetWidth / 2 + 'px';
                            tooltipEl.style.top = position.top + window.pageYOffset + tooltipModel.caretY -
                                tooltipEl.offsetHeight - 10 + 'px';
                        }
                    }
                },
                scales: {
                    x: {
                        grid: {
                            display: false
                        },
                        offset: false, // line touches edges
                        ticks: {
                            display: true,
                            padding: 10, // push labels a bit from edges
                            font: {
                                family: 'Inter',
                                size: 12,
                                weight: '500'
                            },
                            color: '#646464'
                        }
                    },
                    y: {
                        min: 0,
                        max: 40000,
                        ticks: {
                            stepSize: 10000,
                            callback: value => value / 1000 + 'k'
                        },
                        grid: {
                            drawTicks: false,
                            drawOnChartArea: true,
                            drawBorder: false,
                            color: '#E7E7E7',
                            borderDash: [5, 5]
                        }
                    }
                }
            }
        });
    </script>
@endsection
