<!DOCTYPE html>
<html lang="en">

<head>
    @include('global.css_support')
    @yield('styles')
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>
    <div class="container-fluid">
        @include('layout.sidebar')

        <div class="content">
            @yield('content')
        </div>
        <div class="chat-with-fetchai">
            <img src="{{ asset('svg/message.svg') }}" alt="message">
            <p>Chat With FetchAi</p>
        </div>
    </div>
    @include('global.js_support')
    @yield('scripts')

</body>

</html>
