@extends('layout.master')
@section('title', 'Operational Management')
@section('content')
    <div class="content__header">
        <h2 class="content__title">Operational Management</h2>
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
        <div class="completed_visits card_1 active">
            <div class="card_1__header">
                <p>Completed Visits</p>
                <img src="{{ asset('svg/Frame_78.svg') }}" alt="">
            </div>
            <div class="card_1__content">
                <h6>2,275</h6>
                <p>
                    <img src="{{ asset('svg/arrow-up.svg') }}" alt="up arrow" class="arrow-icon">
                    2.7%
                </p>
            </div>
        </div>
        <div class="providers_utilizitions card_1">
            <div class="card_1__header">
                <p>Providers Utilization</p>
                <img src="{{ asset('svg/Frame_79.svg') }}" alt="">
            </div>
            <div class="card_1__content">
                <h6>89.8%</h6>
                <p>
                    <img src="{{ asset('svg/arrow-up.svg') }}" alt="up arrow" class="arrow-icon">
                    2.7%
                </p>
            </div>
        </div>
        <div class="technician_unilizition card_1">
            <div class="card_1__header">
                <p>Technician Utilization</p>
                <img src="{{ asset('svg/Frame_80.svg') }}" alt="">
            </div>
            <div class="card_1__content">
                <h6>3.7%</h6>
                <p>
                    <img src="{{ asset('svg/arrow-up.svg') }}" alt="up arrow" class="arrow-icon">
                    2.7%
                </p>
            </div>
        </div>
        <div class="stuff_to_patient_ratio card_1">
            <div class="card_1__header">
                <p>Staff to Patient Ratio</p>
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
        <!-- Line Chart -->
        <!-- Line Chart -->
        <div class="visit_trends_chart">
            <div class="visit_trends__header">
                <h2>Visit Trends</h2>
            </div>

            <div class="visit_trends__body">
                <div class="visit_trends__grid">
                    <!-- Horizontal grid lines with aligned Y labels -->
                    <div class="visit_trends__y-label">2000</div>
                    <div class="visit_trends__grid-line"></div>
                </div>

                <div class="visit_trends__grid">
                    <!-- Horizontal grid lines with aligned Y labels -->
                    <div class="visit_trends__y-label">1500</div>
                    <div class="visit_trends__grid-line"></div>
                </div>
                <div class="visit_trends__grid">
                    <!-- Horizontal grid lines with aligned Y labels -->
                    <div class="visit_trends__y-label">1000</div>
                    <div class="visit_trends__grid-line"></div>
                </div>
                <div class="visit_trends__grid">
                    <!-- Horizontal grid lines with aligned Y labels -->
                    <div class="visit_trends__y-label">500</div>
                    <div class="visit_trends__grid-line"></div>
                </div>
                <div class="visit_trends__grid">
                    <!-- Horizontal grid lines with aligned Y labels -->
                    <div class="visit_trends__y-label">0</div>
                    <div class="visit_trends__grid-line"></div>
                </div>
            </div>
            <div class="visit_trends__x-labels">
                <div class="visit_trends__x-label-left"></div>
                <div class="visit_trends__x-label-right">
                    <span>Jan</span><span>Feb</span><span>Mar</span><span>Apr</span>
                    <span>May</span><span>Jun</span><span>Jul</span><span>Aug</span>
                    <span>Sep</span><span>Oct</span><span>Nov</span><span>Dec</span>
                </div>
            </div>

        </div>


        <!-- Pie Chart -->
        <div class="pet_distribution_chart">
            <div class="pet_distribution__header">
                <h2>Pet Distribution</h2>
            </div>
            <canvas id="pieChart"></canvas>
        </div>
    </div>

@endsection


@section('scripts')
    <script>
        $(function() {
            const $canvas = $('#lineChart');
            const ctx = $canvas[0].getContext('2d');

            // Gradient for fill below the line
            const gradient = ctx.createLinearGradient(0, 0, 0, $canvas.height());
            gradient.addColorStop(0, 'rgba(0,118,206,0.2)');
            gradient.addColorStop(1, 'rgba(0,118,206,0)');

            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov',
                        'Dec'
                    ],
                    datasets: [{
                        label: 'Visits',
                        data: [750, 950, 1400, 1050, 1150, 1650, 1100, 1400, 900, 1250, 1300, 1150],
                        borderColor: '#0076CE',
                        borderWidth: 3,
                        backgroundColor: gradient,
                        fill: true,
                        tension: 0.4, // smooth mountain curve
                        pointRadius: 0 // remove dots
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        x: {
                            grid: {
                                display: false
                            },
                            ticks: {
                                font: {
                                    family: 'Inter',
                                    size: 12
                                },
                                color: '#646464'
                            }
                        },
                        y: {
                            min: 0,
                            max: 2000,
                            ticks: {
                                stepSize: 500,
                                font: {
                                    family: 'Inter',
                                    size: 12
                                },
                                color: '#646464'
                            },
                            grid: {
                                drawTicks: false,
                                color: '#E7E7E7',
                                borderDash: [4, 4], // all horizontal lines dotted
                                drawBorder: false // removes vertical line on left
                            }
                        }
                    }
                }
            });
        });
    </script>
    <script>
        // Pie Chart
        const ctxPie = document.getElementById('pieChart').getContext('2d');
        const pieChart = new Chart(ctxPie, {
            type: 'pie',
            data: {
                labels: ['Dogs', 'Cats', 'Birds', 'Others'],
                datasets: [{
                    data: [45, 30, 15, 10],
                    backgroundColor: ['#198754', '#0d6efd', '#ffc107', '#dc3545']
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom'
                    }
                }
            }
        });
    </script>
@endsection
