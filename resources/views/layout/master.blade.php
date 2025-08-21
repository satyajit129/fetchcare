<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>fatchCare</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body>
    <div class="container-fluid">
        <div class="sticky">
            <div class="app-logo">
                <img class="app-logo__image" src="{{ asset('images/Logo.png') }}" alt="Logo">
                <img class="app-logo__icon" src="{{ asset('svg/arrow-circle-left.svg') }}" alt="">
            </div>
            <ul class="side-menu">
                <li class="slide">
                    <a class="side-menu__item has-link active" href="#">
                        <img src="{{ asset('svg/element-3.svg') }}" alt="">
                        <span class="side-menu__label">Operational</span>
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" href="#">
                        <img src="{{ asset('images/dollar-square.png') }}" alt="">
                        <span class="side-menu__label">Finance</span>
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" href="#">
                        <img src="{{ asset('images/profile-2user.png') }}" alt="">
                        <span class="side-menu__label">Client Portal</span>
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" href="#">
                        <img src="{{ asset('images/calendar-2.png') }}" alt="">
                        <span class="side-menu__label">Scheduling</span>
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" href="#">
                        <img src="{{ asset('images/trend-up.png') }}" alt="">
                        <span class="side-menu__label">Marketing</span>
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" href="#">
                        <div class="side-menu__item-content">
                            <img src="{{ asset('images/fetch-ai-icon.png') }}" alt="">
                            <span class="side-menu__label">FetchAI</span>
                        </div>
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" href="#">
                        <img src="{{ asset('images/setting.png') }}" alt="">
                        <span class="side-menu__label">Settings</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="content">
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
            <div class="visit_trends">
                <div class="visit_trends__header">
                    <h2>Visit Trends</h2>
                </div>
                <canvas id="mountainChart"></canvas>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
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
            borderDash: [5, 5], // makes the horizontal lines dotted
            drawTicks: false
        }
    },
    x: {
        ticks: { color: '#646464' },
        grid: { display: false } // optional, hide vertical grid
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
</body>

</html>
