@extends('layout.master')
@section('title', 'Operational Management')

@section('styles')
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
                <div class="card_progress up">
                    <img src=" {{ asset('svg/arrow-up.svg') }}" alt="up arrow" class="arrow-icon">
                    <p>9.3%</p>
                </div>
            </div>
        </div>
        <div class="providers_utilizitions card_1">
            <div class="card_1__header">
                <p>Providers Utilization</p>
                <img src="{{ asset('svg/Frame_79.svg') }}" alt="">
            </div>
            <div class="card_1__content">
                <h6>89.8%</h6>
                <div class="card_progress up">
                    <img src=" {{ asset('svg/arrow-up.svg') }}" alt="up arrow" class="arrow-icon">
                    <p>2.7%</p>
                </div>
            </div>
        </div>
        <div class="technician_unilizition card_1">
            <div class="card_1__header">
                <p>Technician Utilization</p>
                <img src="{{ asset('svg/Frame_80.svg') }}" alt="">
            </div>
            <div class="card_1__content">
                <h6>3.7%</h6>
                <div class="card_progress up">
                    <img src=" {{ asset('svg/arrow-up.svg') }}" alt="up arrow" class="arrow-icon">
                    <p>2.7%</p>
                </div>
            </div>
        </div>
        <div class="stuff_to_patient_ratio card_1">
            <div class="card_1__header">
                <p>Staff to Patient Ratio</p>
                <img src="{{ asset('svg/Frame_82.svg') }}" alt="">
            </div>
            <div class="card_1__content">
                <h6>87</h6>
                <div class="card_progress up">
                    <img src=" {{ asset('svg/arrow-up.svg') }}" alt="up arrow" class="arrow-icon">
                    <p>2.7%</p>
                </div>
            </div>
        </div>
        <div class="avg_app_dur card_1">
            <div class="card_1__header">
                <p>Avg. Appointment Duration</p>
                <img src="{{ asset('svg/Frame_81.svg') }}" alt="">
            </div>
            <div class="card_1__content">
                <h6>41.7 min</h6>
                <div class="card_progress up">
                    <img src=" {{ asset('svg/arrow-up.svg') }}" alt="up arrow" class="arrow-icon">
                    <p>2.7%</p>
                </div>
            </div>
        </div>
    </div>
    <div class="content__charts">
        <div class="visit_trends_chart">
            <div class="visit_trends__header">
                <h2>Visit Trends</h2>
            </div>
            <div>

                <div id="chart"></div>
            </div>
        </div>
        <div class="chart-container">
            <div class="pet_distribution__header">
                <h2>Pets Distributions</h2>
            </div>
            <div class="pet_distribution_data">
                <p>
                    Total 2,275 pets
                </p>
                <div class="pet_distribution_progress">
                    <img src=" {{ asset('svg/arrow-up.svg') }}" alt="up arrow" class="arrow-icon">
                    <p>9.3%</p>
                </div>
            </div>
            <div class="chart-container_body">
                <canvas id="petChart"></canvas>
            </div>
            <div class="chart-container_footer">
                <div class="chart-container_footer-left">
                    <span>Cat</span>
                    <span>Dog</span>
                    <span>Bird</span>
                </div>
                <div class="chart-container_footer-right">
                    <span>Cow</span>
                    <span>Horse</span>
                    <span>Others</span>
                </div>
            </div>
        </div>
    </div>
    <div class="appointment">
        <div class="appointment_list">
            <div class="appointment_header">
                <h2>Appointments</h2>
            </div>
            <div class="appointment_body">
                <div class="a__header_row">
                    <div class="a__header_col">Pet Name</div>
                    <div class="a__header_col">Time</div>
                    <div class="a__header_col">Vet Name</div>
                    <div class="a__header_col">Service</div>
                    <div class="a__header_col">Duration</div>
                    <div class="a__header_col">Status</div>
                </div>

                <div class="a__body">
                    <div class="a__body_row">
                        <div class="a__body_col">Max</div>
                        <div class="a__body_col">10:00 AM</div>
                        <div class="a__body_col">Dr. Smith</div>
                        <div class="a__body_col">Checkup</div>
                        <div class="a__body_col">30 mins</div>
                        <div class="a__body_col">
                            <span class="status-indicator completed"></span>
                            Completed
                        </div>
                    </div>
                    <div class="a__body_row">
                        <div class="a__body_col">Bella</div>
                        <div class="a__body_col">11:00 AM</div>
                        <div class="a__body_col">Dr. Jones</div>
                        <div class="a__body_col">Vaccination</div>
                        <div class="a__body_col">20 mins</div>
                        <div class="a__body_col">
                            <span class="status-indicator pending"></span>
                            Pending
                        </div>
                    </div>
                    <div class="a__body_row">
                        <div class="a__body_col">Charlie</div>
                        <div class="a__body_col">01:00 PM</div>
                        <div class="a__body_col">Dr. Brown</div>
                        <div class="a__body_col">Dental Cleaning</div>
                        <div class="a__body_col">45 mins</div>
                        <div class="a__body_col">
                            <span class="status-indicator cancelled"></span>
                            Cancelled
                        </div>
                    </div>
                    <div class="a__body_row">
                        <div class="a__body_col">Max</div>
                        <div class="a__body_col">10:00 AM</div>
                        <div class="a__body_col">Dr. Smith</div>
                        <div class="a__body_col">Checkup</div>
                        <div class="a__body_col">30 mins</div>
                        <div class="a__body_col">
                            <span class="status-indicator completed"></span>
                            Completed
                        </div>
                    </div>
                    <div class="a__body_row">
                        <div class="a__body_col">Bella</div>
                        <div class="a__body_col">11:00 AM</div>
                        <div class="a__body_col">Dr. Jones</div>
                        <div class="a__body_col">Vaccination</div>
                        <div class="a__body_col">20 mins</div>
                        <div class="a__body_col">
                            <span class="status-indicator pending"></span>
                            Pending
                        </div>
                    </div>
                    <div class="a__body_row">
                        <div class="a__body_col">Charlie</div>
                        <div class="a__body_col">01:00 PM</div>
                        <div class="a__body_col">Dr. Brown</div>
                        <div class="a__body_col">Dental Cleaning</div>
                        <div class="a__body_col">45 mins</div>
                        <div class="a__body_col">
                            <span class="status-indicator cancelled"></span>
                            Cancelled
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="upcoming_appointment">
            <div class="upcoming_appointment_header">
                <h2>Upcoming Appointments</h2>
            </div>
            <div class="upcoming_follow_up">
                <p>Pending Follow-Ups</p>
            </div>
            <div class="upcoming_follow_up_body">
                <div class="u__f__row">
                    <div class="u__f__row_col">Max</div>
                    <div class="u__f__row_col">Dr. Lee</div>
                    <div class="u__f__row_col">Ear Infection</div>
                </div>
                <div class="u__f__row">
                    <div class="u__f__row_col">Pussy</div>
                    <div class="u__f__row_col">Dr. Smith</div>
                    <div class="u__f__row_col">Vaccine booster</div>
                </div>
                <div class="u__f__row">
                    <div class="u__f__row_col">Bella</div>
                    <div class="u__f__row_col">Dr. Doe</div>
                    <div class="u__f__row_col">Surgery checkup</div>
                </div>
                <div class="u__f__row">
                    <div class="u__f__row_col">Max</div>
                    <div class="u__f__row_col">Dr. Lee</div>
                    <div class="u__f__row_col">Ear Infection</div>
                </div>
                <div class="u__f__row">
                    <div class="u__f__row_col">Max</div>
                    <div class="u__f__row_col">Dr. Lee</div>
                    <div class="u__f__row_col">Ear Infection</div>
                </div>
                <div class="u__f__row">
                    <div class="u__f__row_col">Max</div>
                    <div class="u__f__row_col">Dr. Lee</div>
                    <div class="u__f__row_col">Ear Infection</div>
                </div>
                <div class="u__f__row">
                    <div class="u__f__row_col">Max</div>
                    <div class="u__f__row_col">Dr. Lee</div>
                    <div class="u__f__row_col">Ear Infection</div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    <script src="{{ asset('js/chartjs-plugin-datalabels.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        const ctx = document.getElementById('petChart').getContext('2d');

        new Chart(ctx, {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: [13, 24, 20, 21, 10, 12, ],
                    backgroundColor: [
                        '#A1E92C',
                        '#66ADE2',
                        '#F4BE05',
                        '#9166F4',
                        '#EF69DE',
                        '#2DE39A'
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
                            weight: 'thin',
                            fontFamily: 'Inter',
                            fontSize: '12px',
                            fontWeight: 400,
                            lineHeight: '19px',
                            letterSpacing: '-0.02em'
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
        var options = {
            chart: {
                type: 'area',
                height: 299,
                toolbar: {
                    show: false
                },
                zoom: {
                    enabled: false
                },
            },
            series: [{
                name: 'Visitors',
                data: [750, 900, 1000, 1200, 1800, 1500, 1700, 1300, 1600, 1900, 1400, 2000]
            }],
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
                max: 2000,
                tickAmount: 4,
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

@endsection
