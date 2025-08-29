@extends('layout.master')
@section('title', 'Fetch AI')

@section('styles')
@endsection

@section('content')
    <div class="content__header">
        <h2 class="content__title">AI Assistant</h2>
        <div class="content__header-elements">
            <p>Last Update today 07:33 am</p>
            <div class="dropdown__container">

                <!-- Dropdown 2 -->
                <div class="dropdown">
                    <button class="dropbtn">
                        Clinic Name <img src="{{ asset('svg/Vector.svg') }}" alt="">
                    </button>
                    <div class="dropdown-content">
                        <a href="#">Today</a>
                        <a href="#">Last 7 Days</a>
                        <a href="#">Last 30 Days</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clinic__heanth_container">
        <div class="clinic__health_score">
            <div class="clinic__health_score_header">
                <h2>Clinic Health Score</h2>
            </div>
            <div class="clinic__health_score_body">
                <div class="progress-ring-container">
                    <div class="card">
                        <div class="card-body">
                            <div id="stroked_radialbar" data-colors='["--vz-success"]' class="apex-charts" dir="ltr">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clinic_health_right">
                    <h6>91% score indicating a Healthy operational status.</h6>
                    <p>Key contributing factors include a Client Satisfaction rate of 97% and Operational Efficiency at 87%.
                        Minor variability observed in Revenue Stability and Marketing ROI may warrant attention to maintain
                        optimal performance benchmarks.</p>
                </div>
            </div>
            <div class="clinic__health_score_footer">
                <p class="clinic__health_overview_title">Client Health Score</p>
                <div class="clinic__health_overview">
                    <div class="completed_visits card_2  background_color_1">
                        <div class="card_2__content">
                            <h6>97%</h6>
                            <p>
                                <img src="{{ asset('svg/arrow-up.svg') }}" alt="up arrow" class="arrow-icon">
                                2.7%
                            </p>
                        </div>
                        <div class="card_2__footer">
                            <p>Completed Visits</p>
                        </div>
                    </div>
                    <div class="completed_visits card_2  background_color_1">
                        <div class="card_2__content">
                            <h6>97%</h6>
                            <p>
                                <img src="{{ asset('svg/arrow-up.svg') }}" alt="up arrow" class="arrow-icon">
                                2.7%
                            </p>
                        </div>
                        <div class="card_2__footer">
                            <p>Completed Visits</p>
                        </div>
                    </div>
                    <div class="completed_visits card_2  background_color_1">
                        <div class="card_2__content">
                            <h6>97%</h6>
                            <p>
                                <img src="{{ asset('svg/arrow-up.svg') }}" alt="up arrow" class="arrow-icon">
                                2.7%
                            </p>
                        </div>
                        <div class="card_2__footer">
                            <p>Completed Visits</p>
                        </div>
                    </div>
                    <div class="completed_visits card_2  background_color_1">
                        <div class="card_2__content">
                            <h6>97%</h6>
                            <p>
                                <img src="{{ asset('svg/arrow-up.svg') }}" alt="up arrow" class="arrow-icon">
                                2.7%
                            </p>
                        </div>
                        <div class="card_2__footer">
                            <p>Completed Visits</p>
                        </div>
                    </div>
                    <div class="completed_visits card_2  background_color_1">
                        <div class="card_2__content">
                            <h6>97%</h6>
                            <p>
                                <img src="{{ asset('svg/arrow-up.svg') }}" alt="up arrow" class="arrow-icon">
                                2.7%
                            </p>
                        </div>
                        <div class="card_2__footer">
                            <p>Completed Visits</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clinic_overview">
            <div class="clinic_overview_header">
                <h2>Today Clinic Overview</h2>
            </div>
            <div class="clinic_overview_body_content">
                <!-- 1st Item -->
                <div class="clinic_overview_body">
                    <img src="{{ asset('svg/white21.svg') }}" alt="clinic overview" class="clinic_overview_image">
                    <div>
                        <h6>54 Appointment Schedule</h6>
                        <p>3 cancellations, 2 walk-ins</p>
                    </div>
                </div>

                <!-- 2nd Item -->
                <div class="clinic_overview_body">
                    <img src="{{ asset('svg/white21.svg') }}" alt="clinic overview" class="clinic_overview_image">
                    <div>
                        <h6>120 Patients Treated</h6>
                        <p>15 new patients this week</p>
                    </div>
                </div>

                <!-- 3rd Item -->
                <div class="clinic_overview_body">
                    <img src="{{ asset('svg/white21.svg') }}" alt="clinic overview" class="clinic_overview_image">
                    <div>
                        <h6>32 Lab Reports Delivered</h6>
                        <p>5 pending reports</p>
                    </div>
                </div>

                <!-- 4th Item -->
                <div class="clinic_overview_body">
                    <img src="{{ asset('svg/white21.svg') }}" alt="clinic overview" class="clinic_overview_image">
                    <div>
                        <h6>18 Surgeries Scheduled</h6>
                        <p>2 postponed, 1 emergency</p>
                    </div>
                </div>
                <div class="clinic_overview_body">
                    <img src="{{ asset('svg/white21.svg') }}" alt="clinic overview" class="clinic_overview_image">
                    <div>
                        <h6>18 Surgeries Scheduled</h6>
                        <p>2 postponed, 1 emergency</p>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <div class="client__insight">
        <div class="client__insight_header">
            <h2>AI Insight</h2>
        </div>
        <div class="client__insight_body">
            <div class="client_insight_body_card card_3">
                <div class="insight_body_header">
                    <p class="insight__pill green">Opportunity</p>
                    <p class="insight_right">High Priority</p>
                </div>
                <div class="insight_body_content">
                    <div class="insight_body_content_item_1">
                        <img src="{{ asset('svg/dental-tooth.svg') }}" alt="">
                        <p>Dental Care Upselling Potential</p>
                    </div>
                    <p class="insight_body_content_item_description">
                        67% of recent wellness visits could benefit from dental care recommendations. Implementing dental
                        suggestions could increase revenue by 15%.
                    </p>
                </div>
                <div class="insight_body_content_footer">
                    <div>
                        <h6 class="insight_footer_percentages">67%</h6>
                        <p class="insight_footer_description">Opportunity</p>
                    </div>
                    <div>
                        <h6 class="insight_footer_percentages">$1,020/mo</h6>
                        <p class="insight_footer_description">Potential Revenue</p>
                    </div>
                    <div>
                        <h6 class="insight_footer_percentages">+15%</h6>
                        <p class="insight_footer_description">Growth</p>
                    </div>
                </div>
            </div>

            <div class="client_insight_body_card card_3">
                <div class="insight_body_header">
                    <p class="insight__pill yellow">Opportunity</p>
                    <p class="insight_right">Medium Priority</p>
                </div>
                <div class="insight_body_content">
                    <div class="insight_body_content_item_1">
                        <img src="{{ asset('svg/dental-tooth.svg') }}" alt="">
                        <p>Cardiology Checkup Upselling</p>
                    </div>
                    <p class="insight_body_content_item_description">
                        45% of patients with previous visits may require cardiology follow-ups. Promoting heart health
                        packages could increase revenue by 10%.
                    </p>
                </div>
                <div class="insight_body_content_footer">
                    <div>
                        <h6 class="insight_footer_percentages">45%</h6>
                        <p class="insight_footer_description">Opportunity</p>
                    </div>
                    <div>
                        <h6 class="insight_footer_percentages">$750/mo</h6>
                        <p class="insight_footer_description">Potential Revenue</p>
                    </div>
                    <div>
                        <h6 class="insight_footer_percentages">+10%</h6>
                        <p class="insight_footer_description">Growth</p>
                    </div>
                </div>
            </div>

            <div class="client_insight_body_card card_3">
                <div class="insight_body_header">
                    <p class="insight__pill red">Opportunity</p>
                    <p class="insight_right">Low Priority</p>
                </div>
                <div class="insight_body_content">
                    <div class="insight_body_content_item_1">
                        <img src="{{ asset('svg/dental-tooth.svg') }}" alt="">
                        <p>Vision Care Upselling</p>
                    </div>
                    <p class="insight_body_content_item_description">
                        30% of patients could benefit from vision care products and services. Implementing recommendations
                        could increase revenue by 8%.
                    </p>
                </div>
                <div class="insight_body_content_footer">
                    <div>
                        <h6 class="insight_footer_percentages">30%</h6>
                        <p class="insight_footer_description">Opportunity</p>
                    </div>
                    <div>
                        <h6 class="insight_footer_percentages">$420/mo</h6>
                        <p class="insight_footer_description">Potential Revenue</p>
                    </div>
                    <div>
                        <h6 class="insight_footer_percentages">+8%</h6>
                        <p class="insight_footer_description">Growth</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

<div class="impact__section">
    <h2 class="impact__section__title">Suggested Actions</h2>

    <!-- Card 1 -->
    <div class="impact_card_container">
        <div class="impact_card">
        <div class="impact">High Impact</div>
        <div class="impact_title">
            <span>Schedule Vaccination</span>
            <span>Block Times</span>
        </div>
        <div class="impact_description">
            Create vaccination time slots on Tuesdays and Thursdays to handle the 45% increase in vaccination appointments more efficiently.
        </div>
        <div class="impact_buttons">
            <button class="review">Review</button>
            <button class="dismiss">Dismiss</button>
        </div>
    </div>

    <!-- Card 2 -->
    <div class="impact_card">
        <div class="impact">Medium Impact</div>
        <div class="impact_title">
            <span>Send Reminder Emails</span>
            <span>Notify Patients</span>
        </div>
        <div class="impact_description">
            Send automated reminder emails to patients who have upcoming vaccination appointments to reduce no-shows.
        </div>
        <div class="impact_buttons">
            <button class="review">Review</button>
            <button class="dismiss">Dismiss</button>
        </div>
    </div>

    <!-- Card 3 -->
    <div class="impact_card">
        <div class="impact">High Impact</div>
        <div class="impact_title">
            <span>Increase Staff Availability</span>
            <span>Adjust Shifts</span>
        </div>
        <div class="impact_description">
            Assign additional healthcare staff on peak days to efficiently manage the increased number of vaccination appointments.
        </div>
        <div class="impact_buttons">
            <button class="review">Review</button>
            <button class="dismiss">Dismiss</button>
        </div>
    </div>

    <!-- Card 4 -->
    <div class="impact_card">
        <div class="impact">Low Impact</div>
        <div class="impact_title">
            <span>Update Instructional Materials</span>
            <span>Guidance for Staff</span>
        </div>
        <div class="impact_description">
            Revise and update training materials for staff to streamline the vaccination process and ensure all procedures are followed correctly.
        </div>
        <div class="impact_buttons">
            <button class="review">Review</button>
            <button class="dismiss">Dismiss</button>
        </div>
    </div>
    </div>
    
</div>


@endsection

@section('scripts')
    <!-- ApexCharts CDN -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <script>
        var options = {
            series: [76],
            chart: {
                height: 200,
                width: 200,
                type: 'radialBar',
                offsetY: -15,
                offsetX: -15
            },
            plotOptions: {
                radialBar: {
                    startAngle: -135,
                    endAngle: 135,
                    hollow: {
                        margin: 7,
                        size: '65%',
                        background: '#FFFFFF33',
                    },
                    track: {
                        background: '#FFFFFF33',
                        strokeWidth: '100%',
                    },
                    dataLabels: {
                        show: true,
                        name: {
                            show: false
                        },
                        value: {
                            fontSize: '36px',
                            fontWeight: 600,
                            color: '#ffffff',
                            show: true,
                            offsetY: 10, // vertical centering
                            offsetX: 0, // horizontal centering
                            formatter: function(val) {
                                return val + "%";
                            }
                        }
                    }

                }
            },
            fill: {
                colors: ['#ffffff'],
            },
            stroke: {
                lineCap: "round",
            }
        };

        var chart = new ApexCharts(document.querySelector("#stroked_radialbar"), options);
        chart.render();
    </script>



@endsection
