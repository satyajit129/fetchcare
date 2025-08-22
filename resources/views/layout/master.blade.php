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
    </div>
    @include('global.js_support')
    @yield('scripts')

</body>

</html>
