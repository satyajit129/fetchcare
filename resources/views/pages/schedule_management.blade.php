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

    <div class="schedule_chart">
        <div class="appointment__completed_chart">
            <div class="appointment__header">
                <h2>Appointment Completeds</h2>
            </div>
            <div class="appointment__body">
                <div id="barChart"></div>
            </div>
        </div>
        <div class="peak_hour_chart">
            <div class="peak_schedule_header">
                <h2 class="schedule__title">Peak Schedule Hours</h2>
            </div>
            <div style="margin-top: -30px;">
                
                <div id="chart"></div>
            </div>
            
        </div>
    </div>
    <div class="recent-transactions">
        <div class="client-history">
            <div class="client__history_header">
                <h2>Client History</h2>
                <div class="add-appointment">
                    <img src="{{ asset('images/add-circle.png') }}" alt="">
                    <a href="">Add Appointment</a>
                </div>
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
                            <td>
                                <div style="display: flex; align-items: center; gap: 8px;">
                                    <button class="btn btn-primary view_btn">View</button>
                                    <i class="fas fa-edit" style="font-size: 20px; cursor: pointer;"></i>
                                </div>
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
                            <td>
                                <div style="display: flex; align-items: center; gap: 8px;">
                                    <button class="btn btn-primary view_btn">View</button>
                                    <i class="fas fa-edit" style="font-size: 20px; cursor: pointer;"></i>
                                </div>
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
                            <td>
                                <div style="display: flex; align-items: center; gap: 8px;">
                                    <button class="btn btn-primary view_btn">View</button>
                                    <i class="fas fa-edit" style="font-size: 20px; cursor: pointer;"></i>
                                </div>
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
                            <td>
                                <div style="display: flex; align-items: center; gap: 8px;">
                                    <button class="btn btn-primary view_btn">View</button>
                                    <i class="fas fa-edit" style="font-size: 20px; cursor: pointer;"></i>
                                </div>
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
                            <td>
                                <div style="display: flex; align-items: center; gap: 8px;">
                                    <button class="btn btn-primary view_btn">View</button>
                                    <i class="fas fa-edit" style="font-size: 20px; cursor: pointer;"></i>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <script>
        var options = {
            chart: {
                type: 'bar',
                height: 350,
                toolbar: {
                    show: false
                }
            },
            series: [{
                name: 'Visits',
                data: [30, 45, 40, 65, 90, 110, 115, 90, 45, 60, 75, 80]
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
                        fontSize: '12px',
                        colors: '#646464'
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
                        colors: '#646464',
                        fontSize: '12px'
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
      function generateData(count, yrange) {
        var series = [];
        for (var i = 0; i < count; i++) {
          series.push(
            Math.floor(Math.random() * (yrange.max - yrange.min + 1)) +
              yrange.min
          );
        }
        return series;
      }

      var timeSlots = [
        "9 AM",
        "10 AM",
        "11 AM",
        "12 PM",
        "1 PM",
        "2 PM",
        "3 PM",
        "4 PM",
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

      var series = weekdays.map((day) => ({
        name: day,
        data: generateData(timeSlots.length, { min: 0, max: 100 }),
      }));

      var options = {
        series: series,
        chart: {
          type: "heatmap",
          height: 400,
          toolbar: { show: false },
        },
        plotOptions: {
          heatmap: {
            radius: 8,
            enableShades: false,
            distributed: true,
            useFillColorAsStroke: false,
            colorScale: {
              ranges: [
                {
                  from: 0,
                  to: 25,
                  color: "#d6e9ff", // very light blue
                },
                {
                  from: 26,
                  to: 50,
                  color: "#99ccff", // light blue
                },
                {
                  from: 51,
                  to: 75,
                  color: "#3399ff", // medium blue
                },
                {
                  from: 76,
                  to: 100,
                  color: "#0066cc", // dark blue
                },
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
        dataLabels: { enabled: false },
        colors: ["#008FFB"],
        xaxis: {
          categories: timeSlots,
          labels: { rotate: -45, style: { fontSize: "12px", colors: "#333" } }
        },
        yaxis: {
          reversed: true,
          labels: { style: { fontSize: "12px", colors: "#333" } }
        },
        tooltip: { y: { formatter: (val) => val } },
      };

      var chart = new ApexCharts(document.querySelector("#chart"), options);
      chart.render();
    </script>


@endsection
