<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>@yield('title', 'Grand Hotel')</title>

    {{-- ASET DARI TEMPLATE --}}
    <link rel="shortcut icon" href="{{ asset('assets/images/hotel-booking/favicon.html') }}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendor/bootstrap-theme.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendor/font-awesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendor/magnific/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendor/datepicker.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom/style.css') }}">

    {{-- CSS Swiper JS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body class="content-ff-1" data-spy="scroll" data-target=".navbar-fixed-top" data-offset="100">

    @include('includes.navbar')

    <main>
        @yield('content')
    </main>

    @include('includes.footer')

    {{-- SCRIPT DARI TEMPLATE (YANG DIPERLUKAN) --}}
    <script type="text/javascript" src="{{ asset('assets/js/vendor/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/vendor/magnific/jquery.magnific-popup.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/vendor/validate/jquery.validate.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/vendor/datepicker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/custom/custom.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets/js/custom-swiper.js') }}"></script>

</body>
</html>