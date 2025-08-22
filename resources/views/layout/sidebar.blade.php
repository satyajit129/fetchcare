<div class="sticky">
            <div class="app-logo">
                <img class="app-logo__image" src="{{ asset('images/Logo.png') }}" alt="Logo">
                <img class="app-logo__icon" src="{{ asset('svg/arrow-circle-left.svg') }}" alt="">
            </div>
            <ul class="side-menu">
                <li class="slide">
                    <a class="side-menu__item has-link {{ Route::is('operationalManagement') ? 'active' : '' }}" href="{{ route('operationalManagement') }}">

                        @if(Route::is('operationalManagement'))
                            <img src="{{ asset('images/element-3.png') }}" alt="">
                        @else
                            <img src="{{ asset('images/element-3_1.png') }}" alt="">
                        @endif
                        <span class="side-menu__label">Operational</span>
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link {{ Route::is('financeManagement') ? 'active' : '' }}" href="{{ route('financeManagement') }}">
                        @if(Route::is('financeManagement'))
                            <img src="{{ asset('images/dollar-square_1.png') }}" alt="">
                        @else
                            <img src="{{ asset('images/dollar-square.png') }}" alt="">
                        @endif
                        <span class="side-menu__label">Finance</span>
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" href="#">
                        <img src="{{ asset('images/profile-2user.png') }}" alt="">
                        <span class="side-menu__label">Client Portal</span>
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" href="#">
                        <img src="{{ asset('images/calendar-2.png') }}" alt="">
                        <span class="side-menu__label">Scheduling</span>
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" href="#">
                        <img src="{{ asset('images/trend-up.png') }}" alt="">
                        <span class="side-menu__label">Marketing</span>
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" href="#">
                        <div class="side-menu__item-content">
                            <img src="{{ asset('images/fetch-ai-icon.png') }}" alt="">
                            <span class="side-menu__label">FetchAI</span>
                        </div>
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" href="#">
                        <img src="{{ asset('images/setting.png') }}" alt="">
                        <span class="side-menu__label">Settings</span>
                    </a>
                </li>
            </ul>
        </div>
