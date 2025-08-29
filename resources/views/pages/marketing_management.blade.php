@extends('layout.master')
@section('title', 'Marketing Management')

@section('styles')
@endsection

@section('content')
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

    <div class="ad_chart">
        <div class="ad_spent_chart">
            <div class="ad_spent_header">
                <h2>Ad Spent</h2>
            </div>
            <div class="ad_spent_body">
                <canvas id="adSpentChart"></canvas>
            </div>
        </div>
        <div class="add_spent_breakdown">
            <div class="ad_spent_breakdown_header">
                <h2>Ads Spent Breakdown</h2>
            </div>
            <div class="ad_spent_breakdown_body">
                <canvas id="adSpentBreakdownChart"></canvas>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        const ctx = document.getElementById('adSpentChart').getContext('2d');

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: [
                    'Aug 11', 'Aug 12', 'Aug 13', 'Aug 14', 'Aug 15',
                    'Aug 16', 'Aug 17', 'Aug 18', 'Aug 19', 'Aug 20', 'Aug 21'
                ],
                datasets: [{
                    label: 'Ad Spent ($)',
                    data: [50, 120, 380, 200, 480, 600, 410, 370, 510, 360, 730],
                    borderColor: '#0076CE',
                    backgroundColor: 'rgba(0, 118, 206, 0.3)',
                    fill: true,
                    tension: 0.4,
                    borderWidth: 4,
                    pointRadius: 0,
                    pointHoverRadius: 0
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                layout: {
                    padding: {
                        bottom: 20
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        min: 0,
                        max: 800,
                        grid: {
                            borderDash: [5, 5],
                            color: '#E7E7E7'
                        },
                        ticks: {
                            callback: function(value) {
                                return '$' + value;
                            },
                            stepSize: 200,
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        },
                        ticks: {
                            padding: 10 // increase this value for more margin top
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
        const ctxBreakdown = document.getElementById('adSpentBreakdownChart').getContext('2d');

        new Chart(ctxBreakdown, {
            type: 'bar',
            data: {
                labels: ['Facebook', 'Google', 'Instagram', 'TikTok', 'YouTube'],
                datasets: [{
                    label: 'Ad Spent ($)',
                    data: [140, 130, 180, 50, 190], // adjust these values to your real data
                    backgroundColor: '#0076CE',
                    borderRadius: 4,
                    // Control bar width
                    barPercentage: 0.6,
                    categoryPercentage: 0.7
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 200,
                        ticks: {
                            stepSize: 50,
                            callback: value => '$' + value
                        },
                        grid: {
                            color: ctx => (ctx.tick.value === 0 ? '#E7E7E7' : '#E7E7E7'),
                            borderDash: ctx => (ctx.tick.value === 0 ? [] : [5, 5]) // solid at 0, dashed otherwise
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        },
                        ticks: {
                            color: '#646464'
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

@endsection
