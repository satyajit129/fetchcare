@extends('layout.master')
@section('title', 'Financial Management')

@section('styles')
    <style>
        .revenue_trends__body canvas {
            width: 100% !important;
            /* canvas takes full container width */
            height: 100% !important;
            /* canvas takes full container height */
            display: block;
            /* remove inline spacing */
        }
    </style>
@endsection

@section('content')
    <div class="content__header">
        <h2 class="content__title">Financial Management</h2>
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
    <div class="content__charts">
        <div class="revenue_trends_chart" style="width: 100%;">
            <div class="revenue_trends__header">
                <h2>Revenue Trends</h2>
            </div>

            <div class="revenue_trends__body">
                <div id="revenueChart"></div>
            </div>
        </div>

        <div class="revenue-chart-container">
            <div class="pet_distribution__header">
                <h2>Revenue By Services</h2>
            </div>
            <div class="chart-container_body">
                <canvas id="petChart"></canvas>
            </div>
            <div class="revenue-chart-container_footer">
                <div class="revenue-chart-container_footer-left">
                    <span>General Health Checkup</span>
                    <span>Diagnostic Lab testing</span>
                    <span>Surgery</span>
                </div>
                <div class="revenue-chart-container_footer-right">
                    <span>Dental care</span>
                    <span>Pet Nutrition</span>
                    <span>Others</span>
                </div>
            </div>
        </div>
    </div>
    <div class="recent-transactions">
        <div class="recent-transactions__header">
            <h2>Appointments</h2>
        </div>
        <div class="recent-transactions_body">
            <div class="a__header_row">
                <div class="a__header_col">Client</div>
                <div class="a__header_col">Pet Name</div>
                <div class="a__header_col">Amount</div>
                <div class="a__header_col">Date</div>
                <div class="a__header_col">Service</div>
                <div class="a__header_col">Status</div>
            </div>

            <div class="a__body">
                <div class="a__body_row">
                    <div class="a__body_col">Samuel</div>
                    <div class="a__body_col">Max</div>
                    <div class="a__body_col">$375.00</div>
                    <div class="a__body_col">Jun 14</div>
                    <div class="a__body_col">General</div>
                    <div class="a__body_col">
                        <span class="status-indicator pending"></span>
                        Paid
                    </div>
                </div>

                <div class="a__body_row">
                    <div class="a__body_col">Bella</div>
                    <div class="a__body_col">Bella</div>
                    <div class="a__body_col">$120.00</div>
                    <div class="a__body_col">Jun 14</div>
                    <div class="a__body_col">Vaccination</div>
                    <div class="a__body_col">
                        <span class="status-indicator pending"></span>
                        Pending
                    </div>
                </div>

                <div class="a__body_row">
                    <div class="a__body_col">Charlie</div>
                    <div class="a__body_col">Charlie</div>
                    <div class="a__body_col">$200.00</div>
                    <div class="a__body_col">Jun 14</div>
                    <div class="a__body_col">Dental</div>
                    <div class="a__body_col">
                        <span class="status-indicator cancelled"></span>
                        Cancelled
                    </div>
                </div>
                <div class="a__body_row">
                    <div class="a__body_col">Samuel</div>
                    <div class="a__body_col">Max</div>
                    <div class="a__body_col">$375.00</div>
                    <div class="a__body_col">Jun 14</div>
                    <div class="a__body_col">General</div>
                    <div class="a__body_col">
                        <span class="status-indicator pending"></span>
                        Paid
                    </div>
                </div>

                <div class="a__body_row">
                    <div class="a__body_col">Bella</div>
                    <div class="a__body_col">Bella</div>
                    <div class="a__body_col">$120.00</div>
                    <div class="a__body_col">Jun 14</div>
                    <div class="a__body_col">Vaccination</div>
                    <div class="a__body_col">
                        <span class="status-indicator pending"></span>
                        Pending
                    </div>
                </div>

                <div class="a__body_row">
                    <div class="a__body_col">Charlie</div>
                    <div class="a__body_col">Charlie</div>
                    <div class="a__body_col">$200.00</div>
                    <div class="a__body_col">Jun 14</div>
                    <div class="a__body_col">Dental</div>
                    <div class="a__body_col">
                        <span class="status-indicator cancelled"></span>
                        Cancelled
                    </div>
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

<script>
      var options = {
        chart: {
          type: "area",
          height: 350,
          toolbar: { show: false },
          zoom: { enabled: false },
        },
        series: [
          {
            name: "Revenue",
            data: [
              5000, 12000, 18000, 22000, 28000, 25000, 30000, 27000, 32000,
              35000, 30000, 40000,
            ],
          },
        ],
        xaxis: {
          categories: [
            "Jan",
            "Feb",
            "Mar",
            "Apr",
            "May",
            "Jun",
            "Jul",
            "Aug",
            "Sep",
            "Oct",
            "Nov",
            "Dec",
          ],
          axisTicks: { show: false },
          crosshairs: {
            show: true,
            width: 1,
            stroke: { color: "#999", dashArray: 0 },
          },
        },
        yaxis: {
          min: 0,
          max: 40000,
          tickAmount: 4,
          labels: {
            formatter: function (val) {
              return val / 1000 + "k";
            },
          },
        },
        stroke: { curve: "smooth", width: 5 },
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
          size: 0,
          hover: { size: 0 },
        },
        grid: { borderColor: "#e0e0e0", strokeDashArray: 3 },
        tooltip: {
          enabled: true,
          shared: false, // only show single value
          x: {
            show: false, // ❌ hide month name
          },
          y: {
            formatter: function (val) {
              return "$" + val.toLocaleString();
            },
          },
        },
        dataLabels: { enabled: false },
      };

      var chart = new ApexCharts(
        document.querySelector("#revenueChart"),
        options
      );
      chart.render();
    </script>
@endsection
