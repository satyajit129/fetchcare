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
    {{-- <div class="visit_trends">
        <div class="visit_trends__header">
            <h2>Visit Trends</h2>
        </div>
        <canvas id="mountainChart"></canvas>
    </div> --}}
@endsection


@section('scripts')
    <script>
        $(document).ready(function() {
            const ctx = $('#mountainChart')[0].getContext('2d');
            const mountainChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov',
                        'Dec'
                    ],
                    datasets: [{
                        label: 'Visits',
                        data: [
                            600, 1200, 800, 1500, 700, 1600, 900, 1400, 1000, 1700,
                            1100, 1300, 1200, 1500, 900, 1600, 800, 1400, 1000, 1500,
                            700, 1200, 950, 1350, 850, 1400, 900, 1300, 1000, 1450,
                            1100, 1200, 1050, 1300, 1250
                        ],
                        fill: true,
                        backgroundColor: 'rgba(0, 118, 206, 0.2)',
                        borderColor: '#0076CE',
                        borderWidth: 6,
                        tension: 0.4,
                        pointRadius: 0,

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
                        y: {
                            beginAtZero: true,
                            suggestedMin: 0,
                            suggestedMax: 2000,
                            ticks: {
                                stepSize: 500,
                                color: '#646464'
                            },
                            grid: {
                                color: '#E7E7E7',
                                borderDash: [5, 5],
                                drawTicks: false
                            }
                        },
                        x: {
                            ticks: {
                                color: '#646464'
                            },
                            grid: {
                                display: false
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            suggestedMin: 0,
                            suggestedMax: 2000,
                            ticks: {
                                stepSize: 500,
                                color: '#646464'
                            },
                            grid: {
                                color: '#E7E7E7',
                                drawTicks: false,

                            },
                        },
                        x: {
                            ticks: {
                                color: '#646464'
                            },
                            grid: {
                                display: false
                            }
                        }
                    }
                }
            });
        });
    </script>
@endsection
