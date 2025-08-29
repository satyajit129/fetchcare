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
    <div class="campaign_lead_content">
        <div class="campaign_content">
            <div class="campaign_content_header">
                <h2>Campaign Content</h2>
            </div>
            <div class="campaign_content_body">
                <table class="campaign_content_table">
                    <thead>
                        <tr>
                            <th>Campain Name</th>
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
                            <td>3201</td>
                            <td>73%</td>
                            <td>$375.00</td>
                            <td><button class="btn btn-primary campaign_view_btn">View</button></td>
                        </tr>
                        <tr>
                            <td>Healthy Pets Campaign</td>
                            <td>
                                <p class="channel-pill">Facebook</p>
                            </td>
                            <td>4100</td>
                            <td>65%</td>
                            <td>$420.00</td>
                            <td><button class="btn btn-primary campaign_view_btn">View</button></td>
                        </tr>
                        <tr>
                            <td>Vaccination Drive 2025</td>
                            <td>
                                <p class="channel-pill">Instagram</p>
                            </td>
                            <td>2890</td>
                            <td>58%</td>
                            <td>$300.00</td>
                            <td><button class="btn btn-primary campaign_view_btn">View</button></td>
                        </tr>
                        <tr>
                            <td>Pet Nutrition Awareness</td>
                            <td>
                                <p class="channel-pill">LinkedIn</p>
                            </td>
                            <td>1520</td>
                            <td>49%</td>
                            <td>$220.00</td>
                            <td><button class="btn btn-primary campaign_view_btn">View</button></td>
                        </tr>
                        <tr>
                            <td>Emergency Care Tips</td>
                            <td>
                                <p class="channel-pill">Twitter</p>
                            </td>
                            <td>2310</td>
                            <td>55%</td>
                            <td>$310.00</td>
                            <td><button class="btn btn-primary campaign_view_btn">View</button></td>
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
                    <td>John Doe</td>
                    <td>
                        <p class="lead-pill">Online</p>
                    </td>
                    <td>Aug 25, 2025</td>
                    <td><button class="btn btn-primary lead_view_btn">View</button></td>
                </tr>
                <tr>
                    <td>Jane Smith</td>
                    <td>
                        <p class="lead-pill">Phone</p>
                    </td>
                    <td>Aug 24, 2025</td>
                    <td><button class="btn btn-primary lead_view_btn">View</button></td>
                </tr>
                <tr>
                    <td>Michael Johnson</td>
                    <td>
                        <p class="lead-pill">Email</p>
                    </td>
                    <td>Aug 23, 2025</td>
                    <td><button class="btn btn-primary lead_view_btn">View</button></td>
                </tr>
                <tr>
                    <td>Emily Davis</td>
                    <td>
                        <p class="lead-pill">Referral</p>
                    </td>
                    <td>Aug 22, 2025</td>
                    <td><button class="btn btn-primary lead_view_btn">View</button></td>
                </tr>
                <tr>
                    <td>Robert Wilson</td>
                    <td>
                        <p class="lead-pill">Social Media</p>
                    </td>
                    <td>Aug 21, 2025</td>
                    <td><button class="btn btn-primary lead_view_btn">View</button></td>
                </tr>
            </tbody>
        </table>
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
