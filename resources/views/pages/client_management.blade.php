@extends('layout.master')
@section('title', 'Client Management')

@section('styles')
@endsection

@section('content')
    <div class="content__header">
        <h2 class="content__title">Client Management</h2>
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
    <div class="client__management_container">
        <div>
            <div class="content__overview">
                <div class="card_1 active">
                    <div class="card_1__header">
                        <p>Client Retention</p>
                        <img src="{{ asset('svg/Frame_86.svg') }}" alt="">
                    </div>
                    <div class="card_1__content">
                        <h6>47.5%</h6>
                        <p>
                            <img src="{{ asset('svg/arrow-up.svg') }}" alt="up arrow" class="arrow-icon">
                            2.7%
                        </p>
                    </div>
                </div>
                <div class="card_1">
                    <div class="card_1__header">
                        <p>New Client Acquisition</p>
                        <img src="{{ asset('svg/Frame_84.svg') }}" alt="">
                    </div>
                    <div class="card_1__content">
                        <h6>24.6%</h6>
                        <p>
                            <img src="{{ asset('svg/arrow-up.svg') }}" alt="up arrow" class="arrow-icon">
                            2.7%
                        </p>
                    </div>
                </div>
                <div class="card_1">
                    <div class="card_1__header">
                        <p>Client Satisfy Score</p>
                        <img src="{{ asset('svg/Frame_85.svg') }}" alt="">
                    </div>
                    <div class="card_1__content">
                        <h6>4.8</h6>
                        <p>
                            <img src="{{ asset('svg/arrow-up.svg') }}" alt="up arrow" class="arrow-icon">
                            2.7%
                        </p>
                    </div>
                </div>
                <div class="card_1" style="width: 164px">
                    <div class="card_1__header">
                        <p>Active Clients</p>
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
            </div>
            <div class="content__charts">
                <div class="client_trands_chart">
                    <div class="client_trands__header">
                        <h2>Revenue Trends</h2>
                    </div>

                    <div class="client_trands__body" style="position: relative; height: 264px;">
                        <!-- This will be the canvas for Chart.js -->
                        <canvas id="clientTrendsChart"
                            style="position: absolute; top:0; left:50%; transform: translateX(-50%); width: 100%; height: 260px;"></canvas>
                    </div>

                    <div class="client_trands__x-labels">
                        <div class="client_trands__x-label-left" style="width: 18px;"></div>
                        <div class="client_trands__x-label-right">
                            <span>Jan</span><span>Feb</span><span>Mar</span><span>Apr</span>
                            <span>May</span><span>Jun</span><span>Jul</span><span>Aug</span>
                            <span>Sep</span><span>Oct</span><span>Nov</span><span>Dec</span>
                        </div>
                    </div>
                    <div class="client_trands__footer">
                        <span>New Clients</span>
                        <span>Previous Client</span>
                    </div>
                </div>
                <div class="retention_trends_chart">
                    <div class="retention_trends__header">
                        <h2>Retention Trends</h2>
                    </div>
                    <div class="retention_trends__body" style="position: relative; height: 296px;">
                        <canvas id="retentionTrendsChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="filters__container">
            <div class="filter__header">
                <h2>Filters</h2>
            </div>
            <div style="padding: 0 12px">

            <div class="filter__straight_line"></div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="{{ asset('js/chartjs-plugin-datalabels.js') }}"></script>
    <script>
        const ctx_1 = document.getElementById('clientTrendsChart').getContext('2d');
        const gradient1 = ctx_1.createLinearGradient(0, 0, 0, 300);
        gradient1.addColorStop(0, 'rgba(239,105,222,0.7)');
        gradient1.addColorStop(1, 'rgba(239,105,222,0)');
        const gradient2 = ctx_1.createLinearGradient(0, 0, 0, 300);
        gradient2.addColorStop(0, 'rgba(0,118,206,0.7)');
        gradient2.addColorStop(1, 'rgba(0,118,206,0)');
        new Chart(ctx_1, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                        label: 'Revenue',
                        data: [230, 190, 165, 310, 540, 600, 469, 580, 546, 492, 610, 690],
                        borderColor: '#EF69DE',
                        borderWidth: 5,
                        pointRadius: 0,
                        fill: true,
                        backgroundColor: gradient1,
                        tension: 0.4
                    },
                    {
                        label: 'Expenses',
                        data: [260, 150, 200, 280, 400, 500, 390, 480, 490, 650, 500, 550],
                        borderColor: '#0076CE',
                        borderWidth: 5,
                        pointRadius: 0,
                        fill: true,
                        backgroundColor: gradient2,
                        tension: 0.4
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    },
                    tooltip: {
                        enabled: true
                    }
                },
                scales: {
                    x: {
                        grid: {
                            display: false
                        },
                        ticks: {
                            display: false
                        }
                    },
                    y: {
                        min: 0,
                        max: 800,
                        ticks: {
                            stepSize: 200
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
    <script>
        const ctxRetention = document.getElementById('retentionTrendsChart').getContext('2d');

        new Chart(ctxRetention, {
            type: 'bar',
            data: {
                labels: ['1st Visit', '2nd Visit', '3rd Visit', 'Loyal'],
                datasets: [{
                    label: 'Clients',
                    data: [600, 540, 150, 70], // sample values (replace with real data)
                    backgroundColor: '#0076CE',
                    borderRadius: 6, // rounded top corners
                    barThickness: 40
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
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
                            color: '#646464',
                            font: {
                                family: 'Inter',
                                size: 12
                            }
                        }
                    },
                    y: {
                        beginAtZero: true,
                        min: 0,
                        max: 800,
                        ticks: {
                            stepSize: 200,
                            color: '#646464',
                            font: {
                                family: 'Inter',
                                size: 12
                            }
                        },
                        grid: {
                            color: function(context) {
                                return context.tick.value === 0 ? '#E7E7E7' : '#E7E7E7AA';
                            },
                            borderDash: function(context) {
                                return context.tick.value === 0 ? [] : [5, 5];
                            },
                            drawBorder: false
                        }
                    }
                }
            }
        });
    </script>
@endsection
