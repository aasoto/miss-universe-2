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
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    @if (isset($edit))
    <!-- Nucleo Icons -->
    <link href="../../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />

    <link href="../../../node_modules/flag-icons/css/flag-icons.min.css" rel="stylesheet" />
    <!-- Main Styling -->
    <link href="../../assets/css/soft-ui-dashboard-tailwind.css?v=1.0.4" rel="stylesheet" />
    @else
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />

    <link href="../../node_modules/flag-icons/css/flag-icons.min.css" rel="stylesheet" />
    <!-- Main Styling -->
    <link href="../assets/css/soft-ui-dashboard-tailwind.css?v=1.0.4" rel="stylesheet" />
    @endif
    @vite(['resources/css/fontawesome-free/css/fontawesome.css', 'resources/js/app.js'])

</head>

<body class="m-0 font-sans antialiased font-normal bg-white text-start text-base leading-default text-slate-500">
    @include('dashboard.fragment.alternative-navigation')

    <main class="mt-0 transition-all duration-200 ease-soft-in-out">
        @yield('content')
    </main>

</body>
@if (isset($edit))
<!-- plugin for scrollbar  -->
<script src="../../assets/js/plugins/perfect-scrollbar.min.js" async></script>
<!-- main script file  -->
<script src="../../assets/js/soft-ui-dashboard-tailwind.js?v=1.0.4" async></script>
@else
<!-- plugin for scrollbar  -->
<script src="../assets/js/plugins/perfect-scrollbar.min.js" async></script>
<!-- main script file  -->
<script src="../assets/js/soft-ui-dashboard-tailwind.js?v=1.0.4" async></script>
@endif


</html>
