<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ cache('app_name') }} | @yield('title')</title>
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
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.5.0/css/lightgallery-bundle.min.css"
          integrity="sha512-lgRFGedXdci5Ykc5Wbgd8QCzt3lBmnkWcMRAS8myln2eMCDwQBrHmjqvUj9rBcKOyWMC+EYJnvEppggw1v+m8Q=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.swipebox/1.4.4/css/swipebox.css"
          integrity="sha512-aiphM8HYk085AcAAQwRkx5AcM9HvzCMjsaUirRoLEIdFCj6pkXgUgz73UNcG8Rr4CdvMOo7ApDDVNjpZOKx+CA=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    @livewireStyles

    <style>
        .page-link {
            border-radius: 0;
            height: 100%;
            font-size: 10px;
            color: #dd1f1f;
            padding: 0.25rem 0.5rem;
            font-weight: 500
        }

        .page-item.active .page-link {
            background-color: #dd1f1f;
            border-color: #dd1f1f;
        }

        .page-link:focus {
            box-shadow: none
        }

        .sticky {
            position: -webkit-sticky;
            position: sticky;
            top: 120px;
        }

        article ul.meta-post li.views:before {
            content: "\f06e"
        }
    </style>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.5.0/plugins/video/lg-video.umd.min.js"
            integrity="sha512-8LEWq+IeGiCmv1c0dc/2BB6DwLpsPr4XW1WXMbGst9491vtBnQibiYmYnrTyBupmnUcJajDQFujcxlw4okbh5A=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.5.0/lightgallery.min.js"
            integrity="sha512-FDbnUqS6P7md6VfBoH57otIQB3rwZKvvs/kQ080nmpK876/q4rycGB0KZ/yzlNIDuNc+ybpu0HV3ePdUYfT5cA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.5.0/plugins/thumbnail/lg-thumbnail.umd.min.js"
            integrity="sha512-hdzLQVAURjMzysJVkWaKWA2nD+V6CcBx6wH0aWytFnlmgIdTx/n5rDWoruSvK6ghnPaeIgwKuUESlpUhat2X+Q=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.5.0/plugins/zoom/lg-zoom.umd.min.js"
            integrity="sha512-oOspW2sEY/O+m/gN9szknLElkcJQuxtF1HWEM65aLM3/yBfa92BIWof9YqeYTmRfrkuP+zlUGHhjA2A+rNEKyA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.swipebox/1.4.4/js/jquery.swipebox.min.js"
            integrity="sha512-RcpE0ybOapw3Pl77Nz/la9grsKWw3MQXBoeiCg1y+psaqTNcSIQ8JYn4p3wG5XakxdyEYl/r22NLp3EYsX4SXg=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @livewireScripts

    @stack('script')
</body>

</html>
