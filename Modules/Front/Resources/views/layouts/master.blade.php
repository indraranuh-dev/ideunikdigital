<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ cache('app_name') }} | @yield(' title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ cache('favicon') }}" type="image/png" />

    @stack('meta')

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-v4-grid-only@1.0.0/dist/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/responsive.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/colors/color1.css') }}" id="colors" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/animate.css') }}" />

    @livewireStyles

    @stack('style')
</head>

<body class="header_sticky">
    {{-- <x-front.sidebar /> --}}

    <div class="boxed">
        <x-front.navbar />

        <div>
            @yield('content')
        </div>

        <x-front.footer />
    </div>


    <!-- Javascript -->
    <script type="text/javascript" src="{{ asset('assets/front/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/front/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/front/js/jquery.easing.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/front/js/jquery-waypoints.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/front/js/jquery.cookie.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/front/js/jquery.fitvids.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/front/js/parallax.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/front/js/jquery.magnific-popup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/front/js/owl.carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/front/js/jquery.flexslider-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/front/js/jquery-validate.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/front/js/main.js') }}"></script>

    <!-- Revolution Slider -->
    <script type="text/javascript" src="{{ asset('assets/front/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/front/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/front/js/slider.js') }}"></script>
    @livewireScripts

    @stack('script')
</body>

</html>
