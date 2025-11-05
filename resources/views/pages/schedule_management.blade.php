@extends('layout.master')
@section('title', 'Schedule Management')

@section('styles')
@endsection

@section('content')
    <div>
        <div class="content__header">
            <h2 class="content__title">Schedule Management</h2>
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
            <div class="card_1 total_appointment active">
                <div class="card_1__header">
                    <p>Total Appointments</p>
                    <img src="{{ asset('svg/Frame_95.svg') }}" alt="">
                </div>
                <div class="card_1__content">
                    <h6>2509</h6>
                    <div class="card_progress up">
                        <img src=" {{ asset('svg/arrow-up.svg') }}" alt="up arrow" class="arrow-icon">
                        <p>2.7%</p>
                    </div>
                </div>
            </div>
            <div class="card_1 appointment_utilization">
                <div class="card_1__header">
                    <p>Appointment Utilization</p>
                    <img src="{{ asset('svg/Frame_96.svg') }}" alt="">
                </div>
                <div class="card_1__content">
                    <h6>91.6%</h6>
                    <div class="card_progress up">
                        <img src=" {{ asset('svg/arrow-up.svg') }}" alt="up arrow" class="arrow-icon">
                        <p>2.7%</p>
                    </div>
                </div>
            </div>
            <div class="card_1 avg_booking_lead">
                <div class="card_1__header">
                    <p>Avg. Booking Lead Time</p>
                    <img src="{{ asset('svg/Frame_97.svg') }}" alt="">
                </div>
                <div class="card_1__content">
                    <h6>3.8</h6>
                    <div class="card_progress up">
                        <img src=" {{ asset('svg/arrow-up.svg') }}" alt="up arrow" class="arrow-icon">
                        <p>2.7%</p>
                    </div>
                </div>
            </div>
            <div class="card_1 missed_appointment">
                <div class="card_1__header">
                    <p>Missed Appointments</p>
                    <img src="{{ asset('svg/Frame_98.svg') }}" alt="">
                </div>
                <div class="card_1__content">
                    <h6>231</h6>
                    <div class="card_progress up">
                        <img src=" {{ asset('svg/arrow-up.svg') }}" alt="up arrow" class="arrow-icon">
                        <p>9.7%</p>
                    </div>
                </div>
            </div>
            <div class="card_1 cancellation_rate">
                <div class="card_1__header">
                    <p>Cancellation Rate</p>
                    <img src="{{ asset('svg/Frame_99.svg') }}" alt="">
                </div>
                <div class="card_1__content">
                    <h6>23%</h6>
                    <div class="card_progress down">
                        <img src=" {{ asset('svg/arrow-up_d.svg') }}" alt="up arrow" class="arrow-icon">
                        <p>6.6%</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="schedule_chart">
            <div class="appointment__completed_chart">
                <div class="appointment__header">
                    <h2>Appointments Completed</h2>
                </div>
                <div class="appointment__body">
                    <div id="barChart"></div>
                </div>
            </div>
            <div class="peak_hour_chart">
                <div class="peak_schedule_header">
                    <h2 class="schedule__title">Peak Schedule Hours</h2>
                </div>
                <div style="margin-top: -30px;padding-left: 10px;">

                    <div id="chart"></div>
                </div>

            </div>
        </div>
        <div class="appointment_breakdown">
            <div class="appointment_breakdown_header">
                <h2>Appointments Breakdown</h2>
                <div class="appointment_header_right">
                    <div>
                        <div class="dropdown">
                            <button class="dropbtn">
                                Monthly View <img src="{{ asset('svg/Vector.svg') }}" alt="">
                            </button>
                            <div class="dropdown-content">
                                <a href="#">Today</a>
                                <a href="#">Last 7 Days</a>
                                <a href="#">Last 30 Days</a>
                            </div>
                        </div>
                    </div>
                    <div class="add-appointment" id="openAddAppointmentModal" style="cursor: pointer;">
                        <img src="{{ asset('images/add-circle.png') }}" alt="Add Appointment" />
                        <a href="javascript:void(0)">Add Appointment</a>
                    </div>
                </div>
            </div>
            <div class="appointment_breakdown_filter">
                <div class="appointment_breakdown_filter_month">
                    <img src="{{ asset('svg/arrow-square-left.svg') }}" alt="Left Arrow">
                    <div>
                        Oct-Nov
                    </div>
                    <img src="{{ asset('svg/arrow-square-right.svg') }}" alt="Right Arrow">
                </div>
                <div class="appointment_breakdown_filter_right">
                    <div class="appointment_breakdown_search">
                        <img src="{{ asset('svg/search-normal.svg') }}" alt="Search">
                        <input type="text" placeholder="Search anything here">
                    </div>
                    <div class="appointment_breakdown_view_options">
                        <div class="icon-frame calendar-frame">
                            <img src="{{ asset('svg/calendar.svg') }}" alt="Calendar">
                        </div>
                        <div class="icon-frame document-frame">
                            <img src="{{ asset('svg/document.svg') }}" alt="List View">
                        </div>
                    </div>
                </div>
            </div>
            <div class="appointment_calendar">
                <div class="appointment_calendar_header">
                    <div class="time_zone">
                        <span>UTC-6</span>
                    </div>
                    <div class="appointment_calendar_days">
                        <div class="appointment_calendar_day active">
                            <span>Sun</span>
                            <span>26</span>
                        </div>
                        <div class="appointment_calendar_day">
                            <span>Mon</span>
                            <span>27</span>
                        </div>
                        <div class="appointment_calendar_day">
                            <span>Tue</span>
                            <span>28</span>
                        </div>
                        <div class="appointment_calendar_day">
                            <span>Wed</span>
                            <span>29</span>
                        </div>
                        <div class="appointment_calendar_day">
                            <span>Thu</span>
                            <span>30</span>
                        </div>
                        <div class="appointment_calendar_day">
                            <span>Fri</span>
                            <span>31</span>
                        </div>
                        <div class="appointment_calendar_day">
                            <span>Sat</span>
                            <span>1</span>
                        </div>
                    </div>
                </div>
                <div class="appointment_calendar_body">
                    <div class="appointment_row">
                        <div class="time_slot"></div>
                        <div class="appointment_schedule">
                            <div class="date_time_slot">
                                <div class="schedule_desc s-bg-red">
                                    <p>Routine health check-ups</p>
                                    <p>9 AM</p>
                                </div>
                                <div class="schedule_desc s-bg-pink">
                                    <p>Vaccinations & immunizations</p>
                                    <p>9 AM</p>
                                </div>
                            </div>
                            <div class="date_time_slot">
                                <div class="schedule_desc s-bg-blue">
                                    <p>Deworming & flea/tick prevention</p>
                                    <p>9 AM</p>
                                </div>
                                <div class="schedule_desc s-bg-pink">
                                    <p>Microchipping & pet identification
                                    </p>
                                    <p>9:30 AM</p>
                                </div>
                            </div>
                            <div class="date_time_slot">
                                <div class="schedule_desc s-bg-green">
                                    <p>Health certificates for travel
                                    </p>
                                    <p>9 AM</p>
                                </div>
                                <div class="schedule_desc s-bg-blue">
                                    <p>Allergy & skin testing
                                    </p>
                                    <p>9:30 AM</p>
                                </div>
                            </div>
                            <div class="date_time_slot">
                                <div class="schedule_desc s-bg-pink">
                                    <p>Blood tests & laboratory diagnostics</p>
                                    <p>9 AM</p>
                                </div>
                                <div class="schedule_desc s-bg-green">
                                    <p>X-rays & ultrasound imaging
                                    </p>
                                    <p>9:30 AM</p>
                                </div>
                            </div>
                            <div class="date_time_slot">
                                <div class="schedule_desc s-bg-blue">
                                    <p>Urinalysis & fecal exams</p>
                                    <p>9 AM</p>
                                </div>
                                <div class="schedule_desc s-bg-blue">
                                    <p>Genetic & breed-specific testing
                                    </p>
                                    <p>9:30 AM</p>
                                </div>
                            </div>
                            <div class="date_time_slot">
                                <div class="schedule_desc s-bg-blue">
                                    <p>Chronic disease management 9 AM</p>
                                    <p>9 AM</p>
                                </div>
                            </div>
                            <div class="date_time_slot">
                                <div class="schedule_desc s-bg-blue">
                                    <p>Pain management & rehabilitation therapy</p>
                                    <p>9 AM</p>
                                </div>
                                <div class="schedule_desc s-bg-yellow">
                                    <p>Emergency & critical care </p>
                                    <p>9:30 AM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="appointment_row">
                        <div class="time_slot">10 AM</div>
                        <div class="appointment_schedule">
                            <div class="date_time_slot">
                                <div class="schedule_desc s-bg-yellow">
                                    <p>Spaying & neutering 10 AM</p>
                                    <p>10 AM</p>
                                </div>
                                <div class="schedule_desc s-bg-blue ">
                                    <p>Soft tissue surgery</p>
                                    <p>10:30 AM</p>
                                </div>
                            </div>
                            <div class="date_time_slot">
                                <div class="schedule_desc s-bg-blue">
                                    <p>Dental surgery & tooth extractions</p>
                                    <p>10:30 AM</p>
                                </div>
                            </div>
                            <div class="date_time_slot">
                                <div class="schedule_desc s-bg-green">
                                    <p>Emergency surgical interventions</p>
                                    <p>10 AM</p>
                                </div>
                                <div class="schedule_desc s-bg-blue ">
                                    <p>Dental cleaning & polishing</p>
                                    <p>10:30 AM</p>
                                </div>
                            </div>
                            <div class="date_time_slot">
                                <div class="schedule_desc s-bg-yellow">
                                    <p>Dental X-rays</p>
                                    <p>10 AM</p>
                                </div>
                                <div class="schedule_desc s-bg-blue ">
                                    <p>Gum disease treatment</p>
                                    <p>10:30 AM</p>
                                </div>
                            </div>
                            <div class="date_time_slot ">
                                <div class="schedule_desc s-bg-blue ">
                                    <p>Oral surgery</p>
                                    <p>10 AM</p>
                                </div>
                            </div>
                            <div class="date_time_slot">
                                <div class="schedule_desc s-bg-green">
                                    <p>Routine health check-ups</p>
                                    <p>10 AM</p>
                                </div>
                                <div class="schedule_desc s-bg-blue ">
                                    <p>Nutrition & dietary counseling</p>
                                    <p>10:30 AM</p>
                                </div>
                            </div>
                            <div class="date_time_slot">
                                <div class="schedule_desc s-bg-blue ">
                                    <p>Behavior consultation</p>
                                    <p>10 AM</p>
                                </div>
                                <div class="schedule_desc s-bg-blue ">
                                    <p>Allergy & skin testing</p>
                                    <p>10:30 AM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="appointment_row">
                        <div class="time_slot border_bottom">11 AM</div>
                        <div class="appointment_schedule">
                            <div class="date_time_slot">
                                
                                <div class="schedule_desc s-bg-blue ">
                                    <p>Puppy & kitten wellness packages</p>
                                    <p>11:30 AM</p>
                                </div>
                            </div>
                            <div class="date_time_slot">
                                <div class="schedule_desc s-bg-blue">
                                    <p>Dermatology</p>
                                    <p>10:30 AM</p>
                                </div>
                                <div class="schedule_desc s-bg-green">
                                    <p>Cardiology</p>
                                    <p>11:30 AM</p>
                                </div>
                            </div>
                            <div class="date_time_slot">
                                <div class="schedule_desc s-bg-blue">
                                    <p>Ophthalmology (eye care)</p>
                                    <p>10 AM</p>
                                </div>
                                <div class="schedule_desc s-bg-pink ">
                                    <p>Neurology</p>
                                    <p>11:30 AM</p>
                                </div>
                            </div>
                            <div class="date_time_slot">
                                <div class="schedule_desc s-bg-green">
                                    <p>Bathing & coat care</p>
                                    <p>10 AM</p>
                                </div>
                                <div class="schedule_desc s-bg-blue ">
                                    <p>Nail trimming & ear cleaning</p>
                                    <p>11:30 AM</p>
                                </div>
                            </div>
                            <div class="date_time_slot ">
                                <div class="schedule_desc s-bg-blue ">
                                    <p>Tick & flea baths</p>
                                    <p>10 AM</p>
                                </div>
                                <div class="schedule_desc s-bg-pink ">
                                    <p>Breed-specific grooming styles</p>
                                    <p>11:30 AM</p>
                                </div>
                            </div>
                            <div class="date_time_slot">
                                <div class="schedule_desc s-bg-pink">
                                    <p>Short-term & long-term boarding</p>
                                    <p>10 AM</p>
                                </div>
                                <div class="schedule_desc s-bg-blue ">
                                    <p>Playtime & socialization</p>
                                    <p>11:30 AM</p>
                                </div>
                            </div>
                            <div class="date_time_slot">
                                <div class="schedule_desc s-bg-blue ">
                                    <p>Individual and group exercise sessions</p>
                                    <p>10 AM</p>
                                </div>
                                <div class="schedule_desc s-bg-green ">
                                    <p>Herbal & natural medicine</p>
                                    <p>11:30 AM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="appointment_breakdown_table">
            <div class="appointment_breakdown_table_header">

                <!-- Header -->
                <div class="appointments-row appointment_breakdown_header-row">
                    <div class="appointments-cell">Client</div>
                    <div class="appointments-cell">Pet Name</div>
                    <div class="appointments-cell">Vet Name</div>
                    <div class="appointments-cell">Booked Date</div>
                    <div class="appointments-cell">Visit Date/Time</div>
                    <div class="appointments-cell">Clinic Name</div>
                    <div class="appointments-cell">Status</div>
                    <div class="appointments-cell">Source</div>
                    <div class="appointments-cell">Action</div>
                </div>
            </div>
            <div class="appointment_breakdown_body">

                <!-- Rows -->
                <div class="appointments-row">
                    <div class="appointments-cell">Mitchel</div>
                    <div class="appointments-cell">Oliver</div>
                    <div class="appointments-cell">Dr. Lee</div>
                    <div class="appointments-cell">Consultation</div>
                    <div class="appointments-cell">
                        Aug 14, 2025
                        <p>10:00 AM</p>
                    </div>
                    <div class="appointments-cell">Newtown Clinic</div>
                    <div class="appointments-cell">
                        <p class="appointments-status progress">In Progress</p>
                    </div>
                    <div class="appointments-cell rating">Online</div>
                    <div class="appointments-cell appointments-actions">
                        <button class="appointments-view-btn">View</button>
                        <img src="{{ asset('svg/Frame_100.svg') }}" alt="">
                    </div>
                </div>

                <div class="appointments-row">
                    <div class="appointments-cell">Samuel</div>
                    <div class="appointments-cell">Max</div>
                    <div class="appointments-cell">Dr. Smith</div>
                    <div class="appointments-cell">Consultation</div>
                    <div class="appointments-cell">
                        Aug 14, 2025
                        <p>10:30 AM</p>
                    </div>
                    <div class="appointments-cell">Uptown Clinic</div>
                    <div class="appointments-cell">
                        <p class="appointments-status active">Active</p>
                    </div>
                    <div class="appointments-cell rating">Online</div>
                    <div class="appointments-cell appointments-actions">
                        <button class="appointments-view-btn">View</button>
                        <img src="{{ asset('svg/Frame_100.svg') }}" alt="">
                    </div>
                </div>

                <div class="appointments-row">
                    <div class="appointments-cell">Jake</div>
                    <div class="appointments-cell">Kai</div>
                    <div class="appointments-cell">Dr. Johnson</div>
                    <div class="appointments-cell">Surgery</div>
                    <div class="appointments-cell">
                        Aug 14, 2025
                        <p>11:00 AM</p>
                    </div>
                    <div class="appointments-cell">Uptown Clinic</div>
                    <div class="appointments-cell">
                        <p class="appointments-status active">Active</p>
                    </div>
                    <div class="appointments-cell rating">Phone</div>
                    <div class="appointments-cell appointments-actions">
                        <button class="appointments-view-btn">View</button>
                        <img src="{{ asset('svg/Frame_100.svg') }}" alt="">
                    </div>
                </div>

                <div class="appointments-row">
                    <div class="appointments-cell">Skyler</div>
                    <div class="appointments-cell">Makai</div>
                    <div class="appointments-cell">Dr. Lee</div>
                    <div class="appointments-cell">Vaccination</div>
                    <div class="appointments-cell">
                        Aug 14, 2025
                        <p>11:30 AM</p>
                    </div>
                    <div class="appointments-cell">Oldtown Clinic</div>
                    <div class="appointments-cell">
                        <p class="appointments-status cancelled">Cancelled</p>
                    </div>
                    <div class="appointments-cell rating">Online</div>
                    <div class="appointments-cell appointments-actions">
                        <button class="appointments-view-btn">View</button>
                        <img src="{{ asset('svg/Frame_100.svg') }}" alt="">
                    </div>
                </div>

                <div class="appointments-row">
                    <div class="appointments-cell">Olivia</div>
                    <div class="appointments-cell">Larry</div>
                    <div class="appointments-cell">Dr. Johnson</div>
                    <div class="appointments-cell">Check Up</div>
                    <div class="appointments-cell">
                        Aug 14, 2025
                        <p>12:00 AM</p>
                    </div>
                    <div class="appointments-cell">Downtown Clinic</div>
                    <div class="appointments-cell">
                        <p class="appointments-status active">Active</p>
                    </div>
                    <div class="appointments-cell rating">Online</div>
                    <div class="appointments-cell appointments-actions">
                        <button class="appointments-view-btn">View</button>
                        <img src="{{ asset('svg/Frame_100.svg') }}" alt="">
                    </div>
                </div>

                <div class="appointments-row">
                    <div class="appointments-cell">Stephen</div>
                    <div class="appointments-cell">Jack</div>
                    <div class="appointments-cell">Dr. Samuel</div>
                    <div class="appointments-cell">Surgery</div>
                    <div class="appointments-cell">
                        Aug 14, 2025
                        <p>12:30 AM</p>
                    </div>
                    <div class="appointments-cell">Newtown Clinic</div>
                    <div class="appointments-cell">
                        <p class="appointments-status missed">Missed</p>
                    </div>
                    <div class="appointments-cell rating">Phone</div>
                    <div class="appointments-cell appointments-actions">
                        <button class="appointments-view-btn">View</button>
                        <img src="{{ asset('svg/Frame_100.svg') }}" alt="">
                    </div>
                </div>

            </div>

        </div> --}}
    </div>
    <div style="height: 2rem;">

    </div>
    </div>
    <!-- Modal -->
    <div id="addAppointmentModal" class="appointment-modal">
        <div class="appointment-modal-content">
            <div class="modal-header">
                <h2>Add New Appointments</h2>
                <span class="close-modal"><img src="{{ asset('svg/close.svg') }}" alt=""></span>
            </div>

            <form class="appointment-form">
                <div class="form-grid">
                    <div class="input-bx">
                        <input type="text" required="required" />
                        <span>Client Name</span>
                    </div>

                    <div class="input-bx">
                        <input type="text" required="required" />
                        <span>Pet Name</span>
                    </div>
                    <div class="input-bx">
                        <input type="text" required="required" />
                        <span>Phone</span>
                    </div>
                    <div class="input-bx">
                        <input type="text" required="required" />
                        <span>Date & Time</span>
                        <img src="{{ asset('svg/calendar.svg') }}" alt="">
                    </div>
                    <div class="input-bx">
                        <input type="text" required="required" />
                        <span>Necessity</span>
                    </div>
                    <div class="input-bx">
                        <input type="text" required="required" />
                        <span>Appointment With</span>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="modal_btn cancel close-modal"
                        id="closeAddAppointmentModal">Cancel</button>
                    <button type="submit" class="modal_btn save">Save</button>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <script>
        var options = {
            chart: {
                type: 'bar',
                height: 330,
                toolbar: {
                    show: false
                }
            },
            series: [{
                name: 'Visits',
                data: [112, 60, 88, 117, 95, 50, 105, 110, 75, 70, 119, 35]
            }],
            plotOptions: {
                bar: {
                    columnWidth: '35%',
                    borderRadius: 4,

                }
            },
            xaxis: {
                categories: ['Aug 11', 'Aug 12', 'Aug 13', 'Aug 14', 'Aug 15', 'Aug 16', 'Aug 17', 'Aug 18', 'Aug 19',
                    'Aug 20', 'Aug 21', 'Aug 22'
                ],
                labels: {
                    rotate: -45,
                    style: {
                        colors: "#646464",
                        fontSize: "12px",
                        fontWeight: 400,
                    }
                },
                axisBorder: {
                    show: false
                },
                axisTicks: {
                    show: false
                }
            },
            yaxis: {
                min: 0,
                max: 120,
                tickAmount: 4,
                labels: {
                    style: {
                        colors: "#646464",
                        fontSize: "12px",
                        fontWeight: 400,
                    }
                }
            },
            dataLabels: {
                enabled: false
            },
            grid: {
                borderColor: '#E7E7E7',
                strokeDashArray: 3
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

    <script>
        var timeSlots = [
            "09AM",
            "10AM",
            "11AM",
            "12PM",
            "01PM",
            "02PM",
            "03PM",
            "04PM",
        ];
        var weekdays = [
            "Fri",
            "Thu",
            "Wed",
            "Tue",
            "Mon",
            "Sun",
            "Sat",
        ];

        // 🔹 Static data (values decide colors)
        // You can adjust numbers to control colors based on ranges
        var series = [{
                name: "Fri",
                data: [10, 10, 10, 10, 10, 10, 10, 10]
            }, // always light
            {
                name: "Thu",
                data: [10, 80, 10, 10, 60, 10, 10, 10]
            },
            {
                name: "Wed",
                data: [10, 10, 40, 40, 40, 40, 40, 10]
            },
            {
                name: "Tue",
                data: [10, 60, 40, 80, 80, 60, 40, 10]
            },
            {
                name: "Mon",
                data: [10, 60, 40, 80, 80, 60, 40, 10]
            },
            {
                name: "Sun",
                data: [10, 10, 40, 80, 80, 60, 40, 10]
            },
            {
                name: "Sat",
                data: [10, 10, 40, 80, 80, 60, 40, 10]
            },
        ];

        var options = {
            series: series,
            chart: {
                type: "heatmap",
                height: 340,
                toolbar: {
                    show: false
                },
            },
            plotOptions: {
                heatmap: {
                    radius: 0,
                    enableShades: false,
                    distributed: true,
                    useFillColorAsStroke: false,
                    colorScale: {
                        ranges: [{
                                from: 0,
                                to: 25,
                                color: "#CCE4F5"
                            },
                            {
                                from: 26,
                                to: 50,
                                color: "#3391D8"
                            },
                            {
                                from: 51,
                                to: 75,
                                color: "#0076CE"
                            },
                            {
                                from: 76,
                                to: 100,
                                color: "#005EA5"
                            } // dark
                        ],
                    },
                },
            },
            legend: {
                show: false
            },
            stroke: {
                width: 8,
                colors: ["#ffffff"],
            },
            dataLabels: {
                enabled: false
            },
            xaxis: {
                categories: timeSlots,
                labels: {
                    rotate: -45,
                    style: {
                        colors: "#646464",
                        fontSize: "12px",
                        fontWeight: 400,
                    }
                }
            },
            yaxis: {
                reversed: true,
                labels: {
                    style: {
                        colors: "#646464",
                        fontSize: "12px",
                        fontWeight: 400,
                    }
                }
            },
            tooltip: {
                y: {
                    formatter: (val) => `${val}%`
                }
            },
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
    </script>

    <script>
        $(document).ready(function() {
            // Open modal
            $("#openAddAppointmentModal").on("click", function() {
                $("#addAppointmentModal").fadeIn().css("display", "flex");
            });

            // Close modal when clicking X
            $(".close-modal").on("click", function() {
                $("#addAppointmentModal").fadeOut();
            });

            // Close modal when clicking outside
            $(window).on("click", function(e) {
                if ($(e.target).is("#addAppointmentModal")) {
                    $("#addAppointmentModal").fadeOut();
                }
            });
        });
    </script>



@endsection
