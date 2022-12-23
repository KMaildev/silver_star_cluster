<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SILVER STAR CLUSTER COMPANY LIMITED</title>
    <meta content="" name="SILVER STAR CLUSTER COMPANY LIMITED">
    <meta name="keywords" content="SILVER STAR CLUSTER COMPANY LIMITED" />
    <meta property="og:title" content="SILVER STAR CLUSTER COMPANY LIMITED" />
    <meta property="og:image" content="{{ asset('data/logo.jpg') }}" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="SILVER STAR CLUSTER COMPANY LIMITED" />
    <link rel="icon" href="{{ asset('data/logo.jpg') }}" type="image/gif" sizes="20x20">

    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('assets/css/animate-2.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/flaticon/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/icon.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/flags.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/progresscircle.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body>
    <div class="page-wrapper">
        @include('layouts.menu')

        @if (URL::current() == route('welcome'))
            @include('layouts.slider')
        @endif
        @yield('content')

        @include('layouts.footer')
    </div>

    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.flagstrap.min.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.appear.min.js') }}"></script>

    <script src="{{ asset('assets/js/odometer.min.js') }}"></script>

    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel2.thumbs.min.js') }}"></script>

    <script src="{{ asset('assets/js/jquery-modal-video.min.js') }}"></script>

    <script src="{{ asset('assets/js/slick.min.js') }}"></script>

    <script src="{{ asset('assets/js/progresscircle.js') }}"></script>

    <script src="{{ asset('assets/js/simple-rating.js') }}"></script>

    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>

    <script src="{{ asset('assets/js/popper.min.js') }}"></script>

    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js') }}"></script>

    @yield('script')
    <script>
     
    </script>
</body>

</html>
