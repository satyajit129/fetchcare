@extends('layout.master')
@section('title', 'Marketing Management')

@section('styles')
@endsection

@section('content')
    <div>
        <div class="content__header">
            <h2 class="content__title">Marketing Management</h2>
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
                    <p>Total Ad Costs</p>
                    <img src="{{ asset('svg/Frame_101.svg') }}" alt="">
                </div>
                <div class="card_1__content">
                    <h6>$4,473.37</h6>
                    <div class="card_progress up">
                        <img src=" {{ asset('svg/arrow-up.svg') }}" alt="up arrow" class="arrow-icon">
                        <p>2.7%</p>
                    </div>
                </div>
            </div>
            <div class="card_1">
                <div class="card_1__header">
                    <p>Website Traffic</p>
                    <img src="{{ asset('svg/Frame_102.svg') }}" alt="">
                </div>
                <div class="card_1__content">
                    <h6>16,227</h6>
                    <div class="card_progress up">
                        <img src=" {{ asset('svg/arrow-up.svg') }}" alt="up arrow" class="arrow-icon">
                        <p>+6.7%</p>
                    </div>
                </div>
            </div>
            <div class="card_1">
                <div class="card_1__header">
                    <p>Social Media Engagement</p>
                    <img src="{{ asset('svg/Frame_103.svg') }}" alt="">
                </div>
                <div class="card_1__content">
                    <h6>27,465</h6>
                    <div class="card_progress up">
                        <img src=" {{ asset('svg/arrow-up.svg') }}" alt="up arrow" class="arrow-icon">
                        <p>+1.9%</p>
                    </div>
                </div>
            </div>
            <div class="card_1">
                <div class="card_1__header">
                    <p>Campaign Conversion Rate</p>
                    <img src="{{ asset('svg/Frame_104.svg') }}" alt="">
                </div>
                <div class="card_1__content">
                    <h6>87</h6>
                    <div class="card_progress up">
                        <img src=" {{ asset('svg/arrow-up.svg') }}" alt="up arrow" class="arrow-icon">
                        <p>6.3%</p>
                    </div>
                </div>
            </div>
            <div class="avg_app_dur card_1">
                <div class="card_1__header">
                    <p>Marketing ROI</p>
                    <img src="{{ asset('svg/Frame_105.svg') }}" alt="">
                </div>
                <div class="card_1__content">
                    <h6>131%</h6>
                    <div class="card_progress up">
                        <img src=" {{ asset('svg/arrow-up.svg') }}" alt="up arrow" class="arrow-icon">
                        <p>2.7%</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="ad_chart">
            <div class="ad_spent_chart">
                <div class="ad_spent_header">
                    <h2>Ad Spent</h2>
                </div>
                <div class="ad_spent_body">
                    <div id="lineChart"></div>
                </div>
            </div>
            <div class="add_spent_breakdown">
                <div class="ad_spent_breakdown_header">
                    <h2>Ads Spent Breakdown</h2>
                </div>
                <div class="ad_spent_breakdown_body">
                    <div id="barChart"></div>
                </div>
            </div>
        </div>

        <div class="campaign_lead_content">
            <div class="campaign_content">
                <div class="campaign_content_header">
                    <h2>Campaign Summary</h2>
                </div>
                <div class="campaign_content_body">
                    <table class="campaign_content_table">
                        <thead>
                            <tr>
                                <th>Camp. Name </th>
                                <th>Channel</th>
                                <th>Reach</th>
                                <th>CTR</th>
                                <th>Cost</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Modern Medicine for Four-Legged Friends</td>
                                <td>
                                    <p class="channel-pill">Google</p>
                                </td>
                                <td>123,852</td>
                                <td>73%</td>
                                <td>$375.00</td>
                                <td><button class="campaign-view-btn">View</button></td>
                            </tr>
                            <tr>
                                <td>Care for Every Pet</td>
                                <td>
                                    <p class="channel-pill">Facebook</p>
                                </td>
                                <td>225,745</td>
                                <td>69%</td>
                                <td>$248.70</td>
                                <td><button class="campaign-view-btn">View</button></td>
                            </tr>
                            <tr>
                                <td>Diagnosis to Recover - We’re here</td>
                                <td>
                                    <p class="channel-pill">Facebook</p>
                                </td>
                                <td>176,759</td>
                                <td>47%</td>
                                <td>$556.00</td>
                                <td><button class="campaign-view-btn">View</button></td>
                            </tr>
                            <tr>
                                <td>Clinical Care for Happier Lives</td>
                                <td>
                                    <p class="channel-pill">Google</p>
                                </td>
                                <td>190,761</td>
                                <td>56%</td>
                                <td>$126.50</td>
                                <td><button class="campaign-view-btn">View</button></td>
                            </tr>
                            <tr>
                                <td>Discount Promo</td>
                                <td>
                                    <p class="channel-pill">YouTube</p>
                                </td>
                                <td>301,269</td>
                                <td>71%</td>
                                <td>$180.00</td>
                                <td><button class="campaign-view-btn">View</button></td>
                            </tr>
                            <tr>
                                <td>From Checkup to Cure</td>
                                <td>
                                    <p class="channel-pill">Instagram</p>
                                </td>
                                <td>336,738</td>
                                <td>64%</td>
                                <td>$438.78</td>
                                <td><button class="campaign-view-btn">View</button></td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
            <div class="lead_content">
                <div class="lead_content_header">
                    <h2>Lead Source</h2>
                </div>
                <div class="lead_content_body">
                    <table class="lead_content_table">
                        <thead>
                            <tr>
                                <th>Lead</th>
                                <th>Source</th>
                                <th>Visit Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Mitchel</td>
                                <td>
                                    <p class="lead-pill">Google</p>
                                </td>
                                <td>Aug 28, 2025</td>
                                <td><button class="lead-source-view-btn">View</button></td>
                            </tr>
                            <tr>
                                <td>Shane</td>
                                <td>
                                    <p class="lead-pill">Facebook</p>
                                </td>
                                <td>Aug 28, 2025</td>
                                <td><button class="lead-source-view-btn">View</button></td>
                            </tr>
                            <tr>
                                <td>Emily</td>
                                <td>
                                    <p class="lead-pill">Facebook</p>
                                </td>
                                <td>Aug 28, 2025</td>
                                <td><button class="lead-source-view-btn">View</button></td>
                            </tr>
                            <tr>
                                <td>Jason</td>
                                <td>
                                    <p class="lead-pill">Google</p>
                                </td>
                                <td>Aug 28, 2025</td>
                                <td><button class="lead-source-view-btn">View</button></td>
                            </tr>
                            <tr>
                                <td>Noah</td>
                                <td>
                                    <p class="lead-pill">YouTube</p>
                                </td>
                                <td>Aug 28, 2025</td>
                                <td><button class="lead-source-view-btn">View</button></td>
                            </tr>
                            <tr>
                                <td>Charlie</td>
                                <td>
                                    <p class="lead-pill">Instagram</p>
                                </td>
                                <td>Aug 28, 2025</td>
                                <td><button class="lead-source-view-btn">View</button></td>
                            </tr>
                            <tr>
                                <td>Charlie</td>
                                <td>
                                    <p class="lead-pill">Instagram</p>
                                </td>
                                <td>Aug 28, 2025</td>
                                <td><button class="lead-source-view-btn">View</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div style="height: 2rem;">

        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        var lineOptions = {
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
                name: "Ad Spent",
                data: [40, 50, 70, 65, 85, 95, 100, 90, 120, 130, 150]
            }],
            xaxis: {
                categories: ["Aug 11", "Aug 12", "Aug 13", "Aug 14", "Aug 15", "Aug 16", "Aug 17", "Aug 18", "Aug 19",
                    "Aug 20", "Aug 21"
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
                    },
                },
                axisBorder: {
                    show: false
                },
            },
            yaxis: {
                min: 0,
                max: 200,
                tickAmount: 4,
                labels: {
                    formatter: function(val) {
                        return "$" + val;
                    },
                    style: {
                        colors: "#646464",
                        fontSize: "12px",
                        fontWeight: 400,
                    }
                },
            },
            stroke: {
                curve: 'smooth',
                width: 5,
            },
            fill: {
                type: "gradient",
                gradient: {
                    shadeIntensity: 1,
                    opacityFrom: 0.6,
                    opacityTo: 0.2,
                    stops: [0, 90, 100],
                },
            },
            markers: {
                size: 0
            },
            grid: {
                borderColor: '#e0e0e0',
                strokeDashArray: 3,
                padding: {
                    bottom: 0 // removes extra bottom space
                }
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
            },
        };
        var lineChart = new ApexCharts(document.querySelector("#lineChart"), lineOptions);
        lineChart.render();
    </script>
    <script>
        // 2. Bar Chart (Ads Spent Breakdown)
        var barOptions = {
            chart: {
                type: 'bar',
                height: 271,
                toolbar: {
                    show: false
                }
            },
            series: [{
                name: "Spent",
                data: [180, 100, 150, 190, 160] // Facebook, Google, Instagram, TikTok, YouTube
            }],
            xaxis: {
                categories: ["Facebook", "Google", "Instagram", "TikTok", "YouTube"],
                axisTicks: {
                    show: false
                },
                labels: {
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
                max: 200,
                tickAmount: 4,
                labels: {
                    style: {
                        colors: "#646464",
                        fontSize: "12px",
                        fontWeight: 400,
                    }
                }
            },

            colors: ["#008FFB"],
            plotOptions: {
                bar: {
                    columnWidth: "40%",
                    borderRadius: 4
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
        var barChart = new ApexCharts(document.querySelector("#barChart"), barOptions);
        barChart.render();
    </script>

@endsection
