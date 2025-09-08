    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FetchCare | @yield('title', 'Home')</title>
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    @vite(['resources/css/app.css'])



    <style>
        /* Fullscreen overlay, ALWAYS flex; hide via opacity/visibility */
        #preloader {
            position: fixed;
            inset: 0;
            /* top:0; right:0; bottom:0; left:0 */
            display: flex;
            /* keep flex so centering works */
            align-items: center;
            justify-content: center;
            background: #ffffff;
            z-index: 9999;
            opacity: 0;
            visibility: hidden;
            transition: opacity .3s ease, visibility .3s ease;
        }

        #preloader.is-visible {
            opacity: 1;
            visibility: visible;
        }

        .spinner {
            width: 50px;
            height: 50px;
            border: 5px solid #f3f3f3;
            border-top: 5px solid #198754;
            border-radius: 50%;
            animation: spin .8s linear infinite;
        }

        @keyframes spin {
            100% {
                transform: rotate(360deg);
            }
        }
    </style>
