@extends('layout.master')
@section('title', 'Client Management')

@section('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
@endsection

@section('content')
    <div>

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
                    <h2>Client History</h2>

                </div>
                <div class="client__history_body">
                    <div class="client-history_table_header">

                        <!-- Header -->
                        <div class="table-header-row table-header">
                            <div class="table-cell">Client</div>
                            <div class="table-cell">Pet Name</div>
                            <div class="table-cell">Vet Name</div>
                            <div class="table-cell">Amount</div>
                            <div class="table-cell">Date</div>
                            <div class="table-cell">Clinic Name</div>
                            <div class="table-cell">Client Type</div>
                            <div class="table-cell">Rating</div>
                            <div class="table-cell">Actions</div>
                        </div>
                    </div>
                    <div class="client-history_table_body">

                        <!-- Rows -->
                        <div class="table-data-row">
                            <div class="table-data-cell">Samuel</div>
                            <div class="table-data-cell">Oliver</div>
                            <div class="table-data-cell">Dr. Lee</div>
                            <div class="table-data-cell">$3375.00</div>
                            <div class="table-data-cell">Jun 14, 2025</div>
                            <div class="table-data-cell">Newtown Clinic</div>
                            <div class="table-data-cell">
                                <p class="status-pill">New</p>
                            </div>
                            <div class="table-data-cell rating">
                                <span class="star">
                                    <img src="{{ asset('images/star.png') }}" alt="">
                                </span>
                                <span>1.2</span>
                            </div>
                            <div class="table-data-cell action_btn">
                                <button class="view_btn">View</button>
                                <a href=""><img src="{{ asset('svg/edit.svg') }}" alt=""></a>
                            </div>
                        </div>

                        <div class="table-data-row">
                            <div class="table-data-cell">Samuel</div>
                            <div class="table-data-cell">Max</div>
                            <div class="table-data-cell">Dr. Smith</div>
                            <div class="table-data-cell">$3362.00</div>
                            <div class="table-data-cell">Jun 14, 2025</div>
                            <div class="table-data-cell">Uptown Clinic</div>
                            <div class="table-data-cell">
                                <p class="status-pill active">Active</p>
                            </div>
                            <div class="table-data-cell rating">
                                <span class="star">
                                    <img src="{{ asset('images/star.png') }}" alt="">
                                </span>
                                <span>1.2</span>
                            </div>
                            <div class="table-data-cell action_btn">
                                <button class="view_btn">View</button>
                                <a href=""><img src="{{ asset('svg/edit.svg') }}" alt=""></a>
                            </div>
                        </div>

                        <div class="table-data-row">
                            <div class="table-data-cell">Samuel</div>
                            <div class="table-data-cell">Kai</div>
                            <div class="table-data-cell">Dr. Johnson</div>
                            <div class="table-data-cell">$3100.00</div>
                            <div class="table-data-cell">Jun 14, 2025</div>
                            <div class="table-data-cell">Uptown Clinic</div>
                            <div class="table-data-cell">
                                <p class="status-pill active">Active</p>
                            </div>
                            <div class="table-data-cell rating">
                                <span class="star">
                                    <img src="{{ asset('images/star.png') }}" alt="">
                                </span>
                                <span>1.5</span>
                            </div>
                            <div class="table-data-cell action_btn">
                                <button class="view_btn">View</button>
                                <a href=""><img src="{{ asset('svg/edit.svg') }}" alt=""></a>
                            </div>
                        </div>

                        <div class="table-data-row">
                            <div class="table-data-cell">Samuel</div>
                            <div class="table-data-cell">Makai</div>
                            <div class="table-data-cell">Dr. Lee</div>
                            <div class="table-data-cell">$3075.00</div>
                            <div class="table-data-cell">Jun 14, 2025</div>
                            <div class="table-data-cell">Oldtown Clinic</div>
                            <div class="table-data-cell">
                                <p class="status-pill active">Active</p>
                            </div>
                            <div class="table-data-cell rating"><span class="star">
                                <img src="{{ asset('images/star.png') }}" alt="">
                            </span>
                            <span>2.0</span></div>
                            <div class="table-data-cell action_btn">
                                <button class="view_btn">View</button>
                                <a href=""><img src="{{ asset('svg/edit.svg') }}" alt=""></a>
                            </div>
                        </div>

                        <div class="table-data-row">
                            <div class="table-data-cell">Samuel</div>
                            <div class="table-data-cell">Larry</div>
                            <div class="table-data-cell">Dr. Johnson</div>
                            <div class="table-data-cell">$3020.00</div>
                            <div class="table-data-cell">Jun 14, 2025</div>
                            <div class="table-data-cell">Downtown Clinic</div>
                            <div class="table-data-cell">
                                <p class="status-pill">New</p>
                            </div>
                            <div class="table-data-cell rating">
                                <span class="star">
                                    <img src="{{ asset('images/star.png') }}" alt="">
                                </span>
                                <span>2.5</span>
                            </div>
                            <div class="table-data-cell action_btn">
                                <button class="view_btn">View</button>
                                <a href=""><img src="{{ asset('svg/edit.svg') }}" alt=""></a>
                            </div>
                        </div>

                        <div class="table-data-row">
                            <div class="table-data-cell">Samuel</div>
                            <div class="table-data-cell">Jack</div>
                            <div class="table-data-cell">Dr. Samuel</div>
                            <div class="table-data-cell">$2905.00</div>
                            <div class="table-data-cell">Jun 14, 2025</div>
                            <div class="table-data-cell">Newtown Clinic</div>
                            <div class="table-data-cell">
                                <p class="status-pill active">Active</p>
                            </div>
                            <div class="table-data-cell rating"><span class="star">
                                <img src="{{ asset('images/star.png') }}" alt="">
                            </span>
                            <span>3.0</span>
                        </div>
                            <div class="table-data-cell action_btn">
                                <button class="view_btn">View</button>
                                <a href=""><img src="{{ asset('svg/edit.svg') }}" alt=""></a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div style="height: 2rem;">

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
series: [
    {
        name: 'New Client',
        data: [150, 420, 300, 520, 610, 450, 700, 380, 720, 410, 680, 560],
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
        data: [300, 280, 500, 400, 480, 620, 550, 460, 600, 500, 720, 480],
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
]
,
            xaxis: {
                categories: [
                    'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                    'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'
                ],
                axisTicks: {
                    show: false
                },
                labels: {
                    trim: false,
                    style: {
                        colors: "#646464",
                        fontSize: "12px",
                        fontWeight: 400,
                    }
                },
                axisBorder: {
                    show: false
                },
            },
            yaxis: {
                min: 0,
                max: 800,
                tickAmount: 4,
                labels: {
                    style: {
                        colors: "#646464",
                        fontSize: "12px",
                        fontWeight: 400,
                    }
                }
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
                shared: true,   // ✅ show both series on hover
                intersect: false, // ✅ allows hover even if you’re not exactly on a point
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
                labels: {
                    trim: false,
                    style: {
                        colors: "#646464",
                        fontSize: "12px",
                        fontWeight: 400,
                    },
                },

            },
            yaxis: {
                min: 0,
                max: 800,
                tickAmount: 4,
                labels: {
                    trim: false,
                    style: {
                        colors: "#646464",
                        fontSize: "12px",
                        fontWeight: 400,
                    },
                },
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
                    bottom: 0
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
