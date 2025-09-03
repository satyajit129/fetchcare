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
        <div class="client__management_left">
            <div class="content__overview">
                <div class="card_1 client_retention active">
                    <div class="card_1__header">
                        <p>Client Retention</p>
                        <img src="{{ asset('svg/Frame_91.svg') }}" alt="">
                    </div>
                    <div class="card_1__content">
                        <h6>47.5%</h6>
                        <div class="card_progress up">
                            <img src=" {{ asset('svg/arrow-up.svg') }}" alt="up arrow" class="arrow-icon">
                            <p>2.7%</p>
                        </div>
                    </div>
                </div>
                <div class="card_1 new_client_aquistion">
                    <div class="card_1__header">
                        <p>New Client Acquisition</p>
                        <img src="{{ asset('svg/Frame_92.svg') }}" alt="">
                    </div>
                    <div class="card_1__content">
                        <h6>24.6%</h6>
                        <div class="card_progress up">
                            <img src=" {{ asset('svg/arrow-up.svg') }}" alt="up arrow" class="arrow-icon">
                            <p>2.7%</p>
                        </div>
                    </div>
                </div>
                <div class="card_1 client_satisfaction_score">
                    <div class="card_1__header">
                        <p>Client Satisfaction Score</p>
                        <img src="{{ asset('svg/Frame_93.svg') }}" alt="">
                    </div>
                    <div class="card_1__content">
                        <h6>4.8</h6>
                        <div class="card_progress up">
                            <img src=" {{ asset('svg/arrow-up.svg') }}" alt="up arrow" class="arrow-icon">
                            <p>2.7%</p>
                        </div>
                    </div>
                </div>
                <div class="card_1 active_client">
                    <div class="card_1__header">
                        <p>Active Clients</p>
                        <img src="{{ asset('svg/Frame_94.svg') }}" alt="">
                    </div>
                    <div class="card_1__content">
                        <h6>123</h6>
                        <div class="card_progress up">
                            <img src=" {{ asset('svg/arrow-up.svg') }}" alt="up arrow" class="arrow-icon">
                            <p>2.7%</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content__charts">
                <div class="client_trands_chart">
                    <div class="client_trands__header">
                        <h2>Client Trends</h2>
                    </div>
                    <div class="client_trands__body">
                        <div id="chart"></div>
                    </div>
                    <div class="client_trands_footer">
                        <div class="legend-item">
                            <span class="legend-dot" style="background:#EF69DE;"></span>
                            <span class="legend_item_label">New Client</span>
                        </div>
                        <div class="legend-item">
                            <span class="legend-dot" style="background:#0076CE;"></span>
                            <span class="legend_item_label">Previous Client</span>
                        </div>
                    </div>
                </div>
                <div class="retention_trends_chart">
                    <div class="retention_trends__header">
                        <h2>Retention Trends</h2>
                    </div>
                    <div id="barChart"></div>
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
                <h2>Client Breakdown</h2>

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
                            <td>Samuel</td>
                            <td>Oliver</td>
                            <td>Dr. Lee</td>
                            <td>$3375.00</td>
                            <td>Jun 14, 2025</td>
                            <td>Newtown Clinic</td>
                            <td>
                                <p class="status-pill">New</p>
                            </td>
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
                            <td>Samuel</td>
                            <td>Max</td>
                            <td>Dr. Smith</td>
                            <td>$3362.00</td>
                            <td>Jun 14, 2025</td>
                            <td>Uptown Clinic</td>
                            <td>
                                <p class="status-pill active">Active</p>
                            </td>
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
                            <td>Samuel</td>
                            <td>Kai</td>
                            <td>Dr. Johnson</td>
                            <td>$3100.00</td>
                            <td>Jun 14, 2025</td>
                            <td>Uptown Clinic</td>
                            <td>
                                <p class="status-pill active">Active</p>
                            </td>
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
                            <td>Samuel</td>
                            <td>Makai</td>
                            <td>Dr. Lee</td>
                            <td>$3075.00</td>
                            <td>Jun 14, 2025</td>
                            <td>Oldtown Clinic</td>
                            <td>
                                <p class="status-pill active">Active</p>
                            </td>
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
                            <td>Samuel</td>
                            <td>Larry</td>
                            <td>Dr. Johnson</td>
                            <td>$3020.00</td>
                            <td>Jun 14, 2025</td>
                            <td>Downtown Clinic</td>
                            <td>
                                <p class="status-pill">New</p>
                            </td>
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
                            <td>Samuel</td>
                            <td>Jack</td>
                            <td>Dr. Samuel</td>
                            <td>$2905.00</td>
                            <td>Jun 14, 2025</td>
                            <td>Newtown Clinic</td>
                            <td>
                                <p class="status-pill active">Active</p>
                            </td>
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
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        var options = {
            chart: {
                type: 'area',
                height: 263,
                toolbar: {
                    show: false
                },
                zoom: {
                    enabled: false
                },
            },
            series: [{
                    name: 'New Client',
                    data: [100, 300, 500, 200, 400, 600, 700, 350, 450, 650, 550, 800],
                    color: '#EF69DE',
                    fill: {
                        type: 'gradient',
                        gradient: {
                            shadeIntensity: 1,
                            opacityFrom: 0.5,
                            opacityTo: 0.1,
                            stops: [0, 90, 100]
                        }
                    }
                },
                {
                    name: 'Previous Client',
                    data: [50, 250, 450, 150, 350, 550, 650, 300, 400, 600, 500, 750],
                    color: '#0076CE',
                    fill: {
                        type: 'gradient',
                        gradient: {
                            shadeIntensity: 1,
                            opacityFrom: 0.5,
                            opacityTo: 0.1,
                            stops: [0, 90, 100]
                        }
                    }
                }
            ],
            xaxis: {
                categories: [
                    'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                    'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'
                ],
                axisTicks: {
                    show: false
                },
                labels: {
                    trim: false
                },
            },
            yaxis: {
                min: 0,
                max: 800,
                tickAmount: 4
            },
            stroke: {
                curve: 'smooth',
                width: 5
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shadeIntensity: 1,
                    opacityFrom: 0.6,
                    opacityTo: 0.2,
                    stops: [0, 90, 100]
                }
            },
            markers: {
                size: 0
            },
            legend: {
                show: false
            },

            grid: {
                borderColor: '#e0e0e0',
                strokeDashArray: 3,
            },
            tooltip: {
                enabled: true,
                shared: false,
                x: {
                    show: false,
                },
                y: {
                    formatter: function(val) {
                        return "$" + val.toLocaleString();
                    },
                },
            },
            dataLabels: {
                enabled: false
            }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
    </script>

    <script>
        var options = {
            chart: {
                type: 'bar',
                height: 299,
                toolbar: {
                    show: false
                }
            },
            series: [{
                name: 'Visitors',
                data: [450, 300, 600, 700]
            }],
            xaxis: {
                categories: ['1st Visit', '2nd Visit', '3rd Visit', 'Loyal'],
                axisTicks: {
                    show: false
                },
                axisBorder: {
                    show: false
                },

            },
            yaxis: {
                min: 0,
                max: 800,
                tickAmount: 4
            },
            plotOptions: {
                bar: {
                    columnWidth: '40%',
                    borderRadius: 3,
                }
            },
            dataLabels: {
                enabled: false
            },
            grid: {
                borderColor: '#e0e0e0',
                strokeDashArray: 3,
                padding: {
                    bottom: 0 // removes extra bottom space
                }
            },
            fill: {
                colors: ['#0076CE']
            },
            tooltip: {
                x: {
                    show: false
                },
                y: {
                    formatter: function(val) {
                        return val;
                    }
                }
            }
        };

        var chart = new ApexCharts(document.querySelector("#barChart"), options);
        chart.render();
    </script>


@endsection
