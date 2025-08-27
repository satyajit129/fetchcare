@extends('layout.master')
@section('title', 'Client Management')

@section('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
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
            <div class="filter_body">
                <span class="filter__label">Clinic Branch</span>
                <div class="filter__branches">
                    <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                    <p>All Branches</p>
                </div>
                <div class="filter__branches">
                    <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                    <p>Newtown Clinic</p>
                </div>
                <div class="filter__branches">
                    <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
                    <p>Uptown Clinic</p>
                </div>
                <div class="filter__branches">
                    <input type="checkbox" class="btn-check" id="btncheck4" autocomplete="off">
                    <p>Oldtown Clinic</p>
                </div>
                <div class="filter__branches">
                    <input type="checkbox" class="btn-check" id="btncheck5" autocomplete="off">
                    <p>Downtown Clinic</p>
                </div>
            </div>
            <div class="client_status">
                <span class="client_status__label">Client Status</span>
                <div class="filter_checkboxes">
                    <label class="filter_checkbox-container">
                        <input type="checkbox" id="btncheck6" checked>
                        <i class="bi bi-check-lg"></i>
                        <p>Active</p>
                    </label>

                    <label class="filter_checkbox-container">
                        <input type="checkbox" id="btncheck7">
                        <i class="bi bi-check-lg"></i>
                        <p>New</p>
                    </label>

                    <label class="filter_checkbox-container">
                        <input type="checkbox" id="btncheck8">
                        <i class="bi bi-check-lg"></i>
                        <p>At Risk</p>
                    </label>
                </div>
            </div>
            <div class="feedback__score">
                <span class="feedback__score__label">Feedback Score</span>
                <div class="feedback__score__value">
                    <label class="star-option">
                        <input type="checkbox" name="feedback_score[]" value="1">
                        <div class="stars"><i class="bi bi-star-fill"></i></div>
                    </label>

                    <label class="star-option">
                        <input type="checkbox" name="feedback_score[]" value="2">
                        <div class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                    </label>

                    <label class="star-option">
                        <input type="checkbox" name="feedback_score[]" value="3">
                        <div class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i></div>
                    </label>

                    <label class="star-option">
                        <input type="checkbox" name="feedback_score[]" value="4">
                        <div class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                    </label>

                    <label class="star-option">
                        <input type="checkbox" name="feedback_score[]" value="5">
                        <div class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i></div>
                    </label>
                </div>
            </div>
            <div class="filter__buttons">
                <p class="filter__reset__button">Reset all Filters</button>
            </div>
        </div>
    </div>

    <div class="recent-transactions">
        <div class="client-history">
            <div class="client__history_header">
                <h2>Client History</h2>
            </div>
            <div class="client__history_body">
                <table class="client-history_table">
                    <thead>
                        <tr>
                            <th>Client</th>
                            <th>Pet Name</th>
                            <th>Vet Name</th>
                            <th>Amount</th>
                            <th>Date</th>
                            <th>Clinic Name</th>
                            <th>Client Type</th>
                            <th>Rating</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Doe</td>
                            <td>Buddy</td>
                            <td>Dr. Smith</td>
                            <td>$100</td>
                            <td>2023-01-01</td>
                            <td>Newtown Clinic</td>
                            <td><p class="status-pill">Regular</p></td>
                            <td class="rating">
                                <span class="star"><i class="bi bi-star-fill"></i></span><span class="rating_point">
                                    1.2</span>
                            </td>
                            <td class="action_btn">
                                <button class="btn btn-primary view_btn">View</button>
                                <a href="">
                                    <img src="{{ asset('svg/edit.svg') }}" alt="">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Jane Roe</td>
                            <td>Charlie</td>
                            <td>Dr. Brown</td>
                            <td>$150</td>
                            <td>2023-02-15</td>
                            <td>Happy Pets Clinic</td>
                             <td><p class="status-pill">Regular</p></td>
                            <td class="rating">
                                <span class="star"><i class="bi bi-star-fill"></i></span><span class="rating_point">
                                    1.2</span>
                            </td>
                            <td class="action_btn">
                                <button class="btn btn-primary view_btn">View</button>
                                <a href="">
                                    <img src="{{ asset('svg/edit.svg') }}" alt="">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Mark Twain</td>
                            <td>Max</td>
                            <td>Dr. Green</td>
                            <td>$200</td>
                            <td>2023-03-10</td>
                            <td>City Vet Clinic</td>
                             <td><p class="status-pill">Regular</p></td>
                            <td class="rating">
                                <span class="star"><i class="bi bi-star-fill"></i></span><span class="rating_point">
                                    1.2</span>
                            </td>
                            <td class="action_btn">
                                <button class="btn btn-primary view_btn">View</button>
                                <a href="">
                                    <img src="{{ asset('svg/edit.svg') }}" alt="">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Emily Davis</td>
                            <td>Rocky</td>
                            <td>Dr. Wilson</td>
                            <td>$250</td>
                            <td>2023-04-05</td>
                            <td>Greenfield Clinic</td>
                             <td><p class="status-pill">Regular</p></td>
                            <td class="rating">
                                <span class="star"><i class="bi bi-star-fill"></i></span><span class="rating_point">
                                    1.2</span>
                            </td>
                            <td class="action_btn">
                                <button class="btn btn-primary view_btn">View</button>
                                <a href="">
                                    <img src="{{ asset('svg/edit.svg') }}" alt="">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Michael Johnson</td>
                            <td>Buddy</td>
                            <td>Dr. Smith</td>
                            <td>$100</td>
                            <td>2023-01-01</td>
                            <td>Newtown Clinic</td>
                            <td><p class="status-pill">Regular</p></td>
                            <td class="rating">
                                <span class="star"><i class="bi bi-star-fill"></i></span><span class="rating_point">
                                    1.2</span>
                            </td>
                            <td class="action_btn">
                                <button class="btn btn-primary view_btn">View</button>
                                <a href="">
                                    <img src="{{ asset('svg/edit.svg') }}" alt="">
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection

@section('scripts')
    <script src="{{ asset('js/chartjs-plugin-datalabels.js') }}"></script>
    <!-- Retention Trends Bar Chart -->
    <script>
        const ctxRetention = document.getElementById('retentionTrendsChart').getContext('2d');

        new Chart(ctxRetention, {
            type: 'bar',
            data: {
                labels: ['1st Visit', '2nd Visit', '3rd Visit', 'Loyal'],
                datasets: [{
                    label: 'Clients',
                    data: [600, 540, 150, 70],
                    backgroundColor: '#0076CE',
                    borderRadius: 6,
                    barThickness: 40,
                    maxBarThickness: 50
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                layout: {
                    padding: {
                        left: 15,
                        right: 15
                    }
                },
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    x: {
                        offset: true, // keep bars fully visible
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
                            drawTicks: false,
                            drawOnChartArea: true,
                            drawBorder: true,
                            color: function(context) {
                                return context.tick.value === 0 ? '#E7E7E7' : '#E7E7E7';
                            },
                            borderDash: []
                        }
                    }
                }
            }
        });
    </script>


    <!-- Client Trends Line Chart -->
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
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov',
                    'Dec'
                ], // required for chart.js
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
                            display: false // hides the month labels
                        }
                    },
                    y: {
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
