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
    <svg class="progress-ring" width="150" height="150">
        <circle class="progress-ring__bg" stroke="#d6e4ff" stroke-width="12" fill="transparent" r="65" cx="75" cy="75"/>
        <circle class="progress-ring__circle" stroke="#0066ff" stroke-width="12" fill="transparent" r="65" cx="75" cy="75"/>
    </svg>
    <div class="percentage-text">91%</div>
</div>



            </div>

        </div>
        <div class="clinic_overview">
            <div class="clinic_overview_header">
                <h2>Clinic Overview</h2>
            </div>
        </div>
    </div>
    
@endsection

@section('scripts')
<script>
    const circle = document.querySelector('.progress-ring__circle');
const radius = circle.r.baseVal.value;
const circumference = 2 * Math.PI * radius;
const progress = 91; // your percentage

circle.style.strokeDasharray = `${circumference} ${circumference}`;
circle.style.strokeDashoffset = circumference;

const offset = circumference - (progress / 100) * circumference;
circle.style.strokeDashoffset = offset;

</script>
@endsection
