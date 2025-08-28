@extends('layout.master')
@section('title', 'Schedule Management')

@section('styles')
@endsection

@section('content')
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
        <div class="card_1 active">
            <div class="card_1__header">
                <p>Total Revenue</p>
                <img src="{{ asset('svg/Frame_83.svg') }}" alt="">
            </div>
            <div class="card_1__content">
                <h6>$17,365.00</h6>
                <p>
                    <img src="{{ asset('svg/arrow-up.svg') }}" alt="up arrow" class="arrow-icon">
                    2.7%
                </p>
            </div>
        </div>
        <div class="card_1">
            <div class="card_1__header">
                <p>Avg Transaction</p>
                <img src="{{ asset('svg/Frame_84.svg') }}" alt="">
            </div>
            <div class="card_1__content">
                <h6>$370.00</h6>
                <p>
                    <img src="{{ asset('svg/arrow-up.svg') }}" alt="up arrow" class="arrow-icon">
                    2.7%
                </p>
            </div>
        </div>
        <div class="card_1">
            <div class="card_1__header">
                <p>Revenue per Vet</p>
                <img src="{{ asset('svg/Frame_85.svg') }}" alt="">
            </div>
            <div class="card_1__content">
                <h6>$370.00</h6>
                <p>
                    <img src="{{ asset('svg/arrow-up.svg') }}" alt="up arrow" class="arrow-icon">
                    2.7%
                </p>
            </div>
        </div>
        <div class="card_1">
            <div class="card_1__header">
                <p>Invoice Collection</p>
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
<div class="peak_hour_chart">
    <div class="peak_schedule_header">
        <h2 class="schedule__title">Peak Schedule Hours</h2>
    </div>

    <div class="heatmap-container">
        <!-- Y-axis -->
        <div class="peak_y_axis" id="yAxis">
            <div>Sun</div>
            <div>Mon</div>
            <div>Tue</div>
            <div>Wed</div>
            <div>Thu</div>
            <div>Fri</div>
            <div>Sat</div>
        </div>

        <!-- Heatmap -->
        <div class="peak_schedule__body" id="peakBody"></div>
    </div>

    <!-- X-axis -->
    <div class="peak_x_axis" id="xAxis">
        <div>9 AM</div>
        <div>10 AM</div>
        <div>11 AM</div>
        <div>12 PM</div>
        <div>1 PM</div>
        <div>2 PM</div>
        <div>3 PM</div>
        <div>4 PM</div>
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
                            <th>Booked Date</th>
                            <th>Visit Date/Time</th>
                            <th>Clinic Name</th>
                            <th>Status</th>
                            <th>Source</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Doe</td>
                            <td>Buddy</td>
                            <td>Dr. Smith</td>
                            <td>10-02-2025</td>
                            <td>Aug 14, 2025 <p>10:10AM</p>
                            </td>
                            <td>Newtown Clinic</td>
                            <td>
                                <p class="status-pill">Regular</p>
                            </td>
                            <td class="rating">online</td>
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
                            <td>10-02-2025</td>
                            <td>Feb 15, 2023 <p>11:30AM</p>
                            </td>
                            <td>Happy Pets Clinic</td>
                            <td>
                                <p class="status-pill">Regular</p>
                            </td>
                            <td class="rating">phone</td>
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
                            <td>10-03-2025</td>
                            <td>Mar 10, 2023 <p>02:15PM</p>
                            </td>
                            <td>City Vet Clinic</td>
                            <td>
                                <p class="status-pill">Regular</p>
                            </td>
                            <td class="rating">online</td>
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
                            <td>10-04-2025</td>
                            <td>Apr 05, 2023 <p>09:45AM</p>
                            </td>
                            <td>Greenfield Clinic</td>
                            <td>
                                <p class="status-pill">Regular</p>
                            </td>
                            <td class="rating">phone</td>
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
                            <td>10-01-2025</td>
                            <td>Jan 01, 2023 <p>08:00AM</p>
                            </td>
                            <td>Newtown Clinic</td>
                            <td>
                                <p class="status-pill">Regular</p>
                            </td>
                            <td class="rating">online</td>
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
    <script script src="{{ asset('js/chartjs-plugin-datalabels.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-chart-matrix@1.3.0/dist/chartjs-chart-matrix.min.js"></script>

    <script>
        const ctx = document.getElementById('appointmentsChart').getContext('2d');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Aug 11', 'Aug 12', 'Aug 13', 'Aug 14', 'Aug 15', 'Aug 16', 'Aug 17', 'Aug 18', 'Aug 19',
                    'Aug 20', 'Aug 21',
                    'Aug 22'
                ],
                datasets: [{
                    label: 'Appointments',
                    data: [110, 90, 60, 30, 45, 55, 100, 103, 60, 40, 55,
                        76
                    ], // values from your Figma
                    backgroundColor: '#0076CE',
                    borderRadius: {
                        topLeft: 4,
                        topRight: 4,
                        bottomLeft: 0,
                        bottomRight: 0
                    },
                    barThickness: 24,
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        min: 0,
                        max: 120,
                        grid: {
                            borderColor: '#E7E7E7',
                            borderWidth: 1,
                            drawBorder: true,
                            color: function(context) {
                                return context.tick.value === 0 ? '#E7E7E7' : '#E7E7E7aa';
                            },
                            borderDash: function(context) {
                                return context.tick.value === 0 ? [] : [4, 4];
                            }
                        },
                        ticks: {
                            stepSize: 30,
                            color: '#646464',
                            font: {
                                family: 'Inter',
                                size: 12
                            }
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        },
                        ticks: {
                            color: '#646464',
                            font: {
                                family: 'Inter',
                                size: 12,

                            }
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    </script>

<script>
// DOM elements
const peakBody = document.getElementById('peakBody');
const xAxis = document.getElementById('xAxis');
const yAxis = document.getElementById('yAxis');

const rows = 7; // weekdays
const cols = 8; // hours

// Generate demo values
const heatValues = Array.from({length: rows*cols}, () => Math.floor(Math.random()*100));

// Function to convert value to color
function getColor(value) {
    if(value > 70) return '#FF4C4C'; // high
    if(value > 40) return '#FFB74D'; // medium
    return '#4CAF50';               // low
}

// Generate boxes
heatValues.forEach(value => {
    const box = document.createElement('div');
    box.classList.add('box');
    box.style.backgroundColor = getColor(value);
    peakBody.appendChild(box);
});

// Align X-axis under the grid considering Y-axis width
function alignXAxis() {
    const yAxisWidth = yAxis.offsetWidth;
    xAxis.style.marginLeft = yAxisWidth + 4 + 'px'; // 4px gap
}

// Initial alignment
alignXAxis();

// Adjust on window resize
window.addEventListener('resize', alignXAxis);
</script>


@endsection
