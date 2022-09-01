<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="./assets/img/favicon.png" />
    <title>Miss Universe - Dashboard</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Flag icons -->
    <link href="../node_modules/flag-icons/css/flag-icons.min.css" rel="stylesheet" />
    <!-- Main Styling -->
    <link href="./assets/css/soft-ui-dashboard-tailwind.css?v=1.0.4" rel="stylesheet" />
    @if (url()->current() == "http://localhost/miss-universe/public/carrousel")
    <link href="./assets/css/carousel.css" rel="stylesheet" />
    @endif
    @vite(['resources/css/fontawesome-free/css/fontawesome.css', 'resources/js/app.js'])

</head>

<body class="m-0 font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">
    @if (Route::has('login'))
        @auth
            @include('dashboard.fragment.sidebar')
            <input type="hidden" name="alternative" id="alternative" value="0">
            <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
                @include('dashboard.fragment.navegation')
                @yield('content')
                {{--<div class="content">
                    <div class="container mx-auto">
                        @yield('content')
                    </div>
                </div>--}}
            </main>
        @endauth
    @else
        @php
            redirect ('/');
        @endphp
    @endif

</body>
<!-- plugin for charts  -->
<script src="./assets/js/plugins/chartjs.min.js" async></script>
<!-- plugin for scrollbar  -->
<script src="./assets/js/plugins/perfect-scrollbar.min.js" async></script>
<!-- github button -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- main script file  -->
<script src="./assets/js/jquery.js"></script>
@if (url()->current() == "http://localhost/miss-universe/public/carrousel")
<script src="./assets/js/bootstrap.min.js"></script>
@endif
<script src="./assets/js/soft-ui-dashboard-tailwind.js?v=1.0.4" async></script>

</html>
