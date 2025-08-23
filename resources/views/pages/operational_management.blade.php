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
        <div class="visit_trends_chart">
            <div class="visit_trends__header">
                <h2>Visit Trends</h2>
            </div>

            <div class="visit_trends__body">
                <!-- Horizontal grid with y-labels -->
                <div class="visit_trends__grid">
                    <div class="visit_trends__y-label">2000</div>
                    <div class="visit_trends__grid-line"></div>
                </div>
                <div class="visit_trends__grid">
                    <div class="visit_trends__y-label">1500</div>
                    <div class="visit_trends__grid-line"></div>
                </div>
                <div class="visit_trends__grid">
                    <div class="visit_trends__y-label">1000</div>
                    <div class="visit_trends__grid-line"></div>
                </div>
                <div class="visit_trends__grid">
                    <div class="visit_trends__y-label">500</div>
                    <div class="visit_trends__grid-line"></div>
                </div>
                <div class="visit_trends__grid">
                    <div class="visit_trends__y-label">0</div>
                    <div class="visit_trends__grid-line"></div>
                </div>

                <!-- Area chart -->
                <!-- Mountain line with shaded area -->
                <svg class="visit_trends__line-chart" viewBox="0 0 711 378" preserveAspectRatio="none">
                    <!-- Fill area under curve -->
                    <path d="
                                        M0,320
                                        C60,250 120,300 180,200
                                        C240,100 300,150 360,180
                                        C420,220 480,120 540,150
                                        C600,250 660,180 711,50
                                        L711,350
                                        L0,350
                                        Z
                                        " fill="rgba(25,135,84,0.2)" stroke="none" />
                    <!-- Stroke line only -->
                    <path d="
                                        M0,320
                                        C60,250 120,300 180,200
                                        C240,100 300,150 360,180
                                        C420,220 480,120 540,150
                                        C600,250 660,180 711,50
                                        " fill="none" stroke="#0076CE" stroke-width="8" />
                </svg>
            </div>
            <div class="visit_trends__x-labels">
                <div class="visit_trends__x-label-left"></div>
                <div class="visit_trends__x-label-right">
                    <span>Jan</span><span>Feb</span><span>Mar</span><span>Apr</span>
                    <span>May</span><span>Jun</span><span>Jul</span><span>Aug</span>
                    <span>Sep</span><span>Oct</span><span>Nov</span><span>Dec</span>
                </div>
            </div>
            <!-- Line Chart Overlay -->

        </div>
        <div class="chart-container">
            <div class="pet_distribution__header">
                <h2>Pets Distributions</h2>
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
    @endsection
