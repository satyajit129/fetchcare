@extends('layout.master')
@section('title', 'Fetch AI')

@section('styles')
@endsection

@section('content')
    <div>
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
                                <div id="stroked_radialbar" data-colors='["--vz-success"]' class="apex-charts"
                                    dir="ltr">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clinic_health_right">
                        <h6>91% score indicating a Healthy operational status.</h6>
                        <p>Key contributing factors include a Client Satisfaction rate of 97% and Operational Efficiency at
                            87%.
                            Minor variability observed in Revenue Stability and Marketing ROI may warrant attention to
                            maintain
                            optimal performance benchmarks.</p>
                    </div>
                </div>
                <div class="clinic__health_score_footer">
                    <p class="clinic__health_overview_title">Clinic Health Insights</p>
                    <div class="clinic__health_overview">
                        <div class="client_satisfaction card_2  background_color_1">
                            <div class="card_2__content">
                                <h6>97%</h6>
                                <div class="card_progress up">
                                    <img src=" {{ asset('svg/arrow-up.svg') }}" alt="up arrow" class="arrow-icon">
                                    <p>4.8%</p>
                                </div>
                            </div>
                            <div class="card_2__footer">
                                <p>Client Satisfaction</p>
                            </div>
                        </div>
                        <div class="operational_efficiency card_2  background_color_1">
                            <div class="card_2__content">
                                <h6>78%</h6>
                                <div class="card_progress down">
                                    <img src=" {{ asset('svg/arrow-bottom_d.svg') }}" alt="up arrow" class="arrow-icon">
                                    <p>2.9%</p>
                                </div>
                            </div>
                            <div class="card_2__footer">
                                <p>Operational Efficiency</p>
                            </div>
                        </div>
                        <div class="revenue_performance card_2  background_color_1">
                            <div class="card_2__content">
                                <h6>87%</h6>
                                <div class="card_progress up">
                                    <img src=" {{ asset('svg/arrow-up.svg') }}" alt="up arrow" class="arrow-icon">
                                    <p>3.5%</p>
                                </div>
                            </div>
                            <div class="card_2__footer">
                                <p>Revenue Performance</p>
                            </div>
                        </div>
                        <div class="schedule_quality card_2  background_color_1">
                            <div class="card_2__content">
                                <h6>83%</h6>
                                <div class="card_progress up">
                                    <img src=" {{ asset('svg/arrow-up.svg') }}" alt="up arrow" class="arrow-icon">
                                    <p>1.8%</p>
                                </div>
                            </div>
                            <div class="card_2__footer">
                                <p>Schedule Quality</p>
                            </div>
                        </div>
                        <div class="marketing_effectivenes card_2  background_color_1">
                            <div class="card_2__content">
                                <h6>64%</h6>
                                <div class="card_progress down">
                                    <img src=" {{ asset('svg/arrow-bottom_d.svg') }}" alt="up arrow" class="arrow-icon">
                                    <p>2.7%</p>
                                </div>
                            </div>
                            <div class="card_2__footer">
                                <p>Marketing Effectiveness</p>
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
                        <img src="{{ asset('svg/Frame_106.svg') }}" alt="clinic overview" class="clinic_overview_image">
                        <div>
                            <h6>54 Appointment Schedule</h6>
                            <p>3 cancellations, 2 walk-ins</p>
                        </div>
                    </div>

                    <!-- 2nd Item -->
                    <div class="clinic_overview_body">
                        <img src="{{ asset('svg/Frame_107.svg') }}" alt="clinic overview" class="clinic_overview_image">
                        <div>
                            <h6>120 Patients Treated</h6>
                            <p>15 new patients this week</p>
                        </div>
                    </div>

                    <!-- 3rd Item -->
                    <div class="clinic_overview_body">
                        <img src="{{ asset('svg/Frame_108.svg') }}" alt="clinic overview" class="clinic_overview_image">
                        <div>
                            <h6>32 Lab Reports Delivered</h6>
                            <p>5 pending reports</p>
                        </div>
                    </div>

                    <!-- 4th Item -->
                    <div class="clinic_overview_body">
                        <img src="{{ asset('svg/Frame_109.svg') }}" alt="clinic overview" class="clinic_overview_image">
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
                <p>3 new insights detected</p>
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
                        <p class="insight_body_content_item_description">67% of recent wellness visits could benefit from
                            dental care recommendations. Implementing
                            dental suggestions could increase revenue
                            15%.
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

                <div class="client_insight_body_card card_3 yellow">
                    <div class="insight_body_header">
                        <p class="insight__pill yellow">Trend</p>
                        <p class="insight_right">High Priority</p>
                    </div>
                    <div class="insight_body_content">
                        <div class="insight_body_content_item_1">
                            <img src="{{ asset('svg/Frame_110.svg') }}" alt="">
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

                <div class="client_insight_body_card card_3 red">
                    <div class="insight_body_header">
                        <p class="insight__pill red">Anomaly</p>
                        <p class="insight_right">High Priority</p>
                    </div>
                    <div class="insight_body_content">
                        <div class="insight_body_content_item_1">
                            <img src="{{ asset('svg/Frame_111.svg') }}" alt="">
                            <p>Vision Care Upselling</p>
                        </div>
                        <p class="insight_body_content_item_description">
                            30% of patients could benefit from vision care products and services. Implementing
                            recommendations
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
            <div class="insight_section_header">
                <h2 class="impact__section__title">Suggested Actions</h2>
                <p>4 actions recommended</p>
            </div>

            <div class="impact_card_container">
                <div class="impact_card">
                    <div class="impact"><span>High Impact</span></div>
                    <div class="impact_title">
                        <span>Schedule Vaccination</span>
                    </div>
                    <div class="impact_description">
                        Create vaccination time slots on Tuesdays and Thursdays to handle the 45% increase in vaccination
                        appointments more efficiently.
                    </div>
                    <div class="impact_buttons">
                        <button class="review">Review</button>
                        <button class="dismiss">Dismiss</button>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="impact_card">
                    <div class="impact yellow"><span>Medium Impact</span></div>
                    <div class="impact_title">
                        <span>Send Reminder Emails</span>
                    </div>
                    <div class="impact_description">
                        Send automated reminder emails to patients who have upcoming vaccination appointments to reduce
                        no-shows.
                    </div>
                    <div class="impact_buttons">
                        <button class="review">Review</button>
                        <button class="dismiss">Dismiss</button>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="impact_card">
                    <div class="impact"><span>High Impact</span></div>
                    <div class="impact_title">
                        <span>Increase Staff Availability</span>
                    </div>
                    <div class="impact_description">
                        Assign additional healthcare staff on peak days to efficiently manage the increased number of
                        vaccination appointments.
                    </div>
                    <div class="impact_buttons">
                        <button class="review">Review</button>
                        <button class="dismiss">Dismiss</button>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="impact_card">
                    <div class="impact low"><span>Low Impact</span></div>
                    <div class="impact_title">
                        <span>Update Instructional Materials</span>
                    </div>
                    <div class="impact_description">
                        Revise and update training materials for staff to streamline the vaccination process and ensure all
                        procedures are followed correctly.
                    </div>
                    <div class="impact_buttons">
                        <button class="review">Review</button>
                        <button class="dismiss">Dismiss</button>
                    </div>
                </div>
            </div>
        </div>
        <div style="height: 2rem;">
        </div>
    </div>
@endsection

@section('scripts')
    <!-- ApexCharts CDN -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <script>
        var options = {
            series: [91],
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
                        size: '70%',
                        background: 'rgba(0, 0, 0, 0.4)',
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
