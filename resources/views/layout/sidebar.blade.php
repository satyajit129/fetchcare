<div class="sticky"  id="sidebar">
    <div class="app-logo">
        <img class="app-logo__image" src="{{ asset('images/Logo.png') }}" alt="Logo">
        <img class="app-logo__icon toggleSidebar" src="{{ asset('svg/arrow-circle-left.svg') }}" alt="">
    </div>

    <div class="app-logo_collapsed">
        <img class="app-logo__image_collapsed" src="{{ asset('images/logo_small.png') }}" alt="Logo">
        <img class="app-logo__icon toggleSidebar" src="{{ asset('svg/arrow-circle-left.svg') }}" alt="">
    </div>
    <ul class="side-menu">
        <li class="slide">
            <a class="side-menu__item has-link {{ Route::is('operationalManagement') ? 'active' : '' }}"
                href="{{ route('operationalManagement') }}">

                @if (Route::is('operationalManagement'))
                    <img src="{{ asset('svg/element-3.svg') }}" alt="">
                @else
                    <img src="{{ asset('images/element-3_1.png') }}" alt="">
                @endif
                <span class="side-menu__label">Operational</span>
            </a>
        </li>
        <li class="slide">
            <a class="side-menu__item has-link {{ Route::is('financeManagement') ? 'active' : '' }}"
                href="{{ route('financeManagement') }}">
                @if (Route::is('financeManagement'))
                    <img src="{{ asset('images/dollar-square_1.png') }}" alt="">
                @else
                    <img src="{{ asset('images/dollar-square.png') }}" alt="">
                @endif
                <span class="side-menu__label">Finance</span>
            </a>
        </li>
        <li class="slide">
            <a class="side-menu__item has-link {{ Route::is('clientManagement') ? 'active' : '' }}"
                href="{{ route('clientManagement') }}">
                @if (Route::is('clientManagement'))
                    <img src="{{ asset('images/profile-2user_1.png') }}" alt="">
                @else
                    <img src="{{ asset('images/profile-2user.png') }}" alt="">
                @endif
                <span class="side-menu__label">Client Portal</span>
            </a>
        </li>
        <li class="slide">
            <a class="side-menu__item has-link {{ Route::is('scheduleManagement') ? 'active' : '' }}" href="{{ route('scheduleManagement') }}">
                @if(Route::is('scheduleManagement'))
                    <img src="{{ asset('images/calendar-2_1.png') }}" alt="">
                @else
                    <img src="{{ asset('images/calendar-2.png') }}" alt="">
                @endif
                <span class="side-menu__label">Scheduling</span>
            </a>
        </li>
        <li class="slide">
            <a class="side-menu__item has-link {{ Route::is('marketingManagement') ? 'active' : '' }}" href="{{ route('marketingManagement') }}">
                @if(Route::is('marketingManagement'))
                    <img src="{{ asset('images/trend-up_1.png') }}" alt="">
                @else
                    <img src="{{ asset('images/trend-up.png') }}" alt="">
                @endif
                <span class="side-menu__label">Marketing</span>
            </a>
        </li>
        <li class="slide">
            <a class="side-menu__item has-link" href="{{ route('fetchAI') }}">
                <div class="side-menu__item-content {{ Route::is('fetchAI') ? 'active' : '' }}">
                    <img class="icon-default" src="{{ asset('images/fetch-ai-icon.png') }}" alt="">
                    <img class="icon-active" src="{{ asset('images/fetch-ai-icon_1.png') }}" alt="">
                    
                    <span class="side-menu__label">FetchAI</span>
                </div>
            </a>
        </li>
        <li class="slide">
            <a class="side-menu__item has-link {{ Route::is('settings') ? 'active' : '' }} " href="{{ route('settings') }}">
                @if (Route::is('settings'))
                    <img src="{{ asset('svg/settings_active.svg') }}" alt="">
                @else
                    <img src="{{ asset('images/setting.png') }}" alt="">
                    
                @endif
                <span class="side-menu__label">Settings</span>
            </a>
        </li>
    </ul>
</div>
