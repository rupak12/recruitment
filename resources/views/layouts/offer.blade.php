<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>{{ $pageTitle }}</title>

    <style>
        :root {
            --main-color: {{ $frontTheme->primary_color }};
        }

        {!! $frontTheme->front_custom_css !!}
    </style>

    <!-- Styles -->
    <link href="{{ asset('froiden-helper/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/node_modules/toast-master/css/jquery.toast.css') }}" rel="stylesheet">

    <link href="{{ asset('front/assets/css/core.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/assets/css/thesaas.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('front/assets/css/custom.css') }}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="icon" href="{{$companySetting->favicon_url}}" type="image/x-icon" />
    <link rel="manifest" href="{{ asset('favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('favicon/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
    @stack('head-style')
</head>

<body>


<!-- Topbar -->
<nav class="topbar topbar-inverse topbar-expand-md">
    <div class="container">

        <div class="topbar-left">
            {{-- <button class="topbar-toggler">&#9776;</button> --}}
            <a class="topbar-brand" href="{{ url('/') }}">
                <img src="{{ $global->logo_url }}" class="logo-inverse" alt="home" />
            </a>
        </div>


        {{--<div class="topbar-right">--}}
            {{--<div class="d-inline-flex ml-30">--}}
                {{--<a class="btn btn-sm btn-primary mr-4" href="page-login.html">@lang('modules.front.visitMainWebsite') <i class="fa fa-arrow-right"></i></a>--}}
            {{--</div>--}}
        {{--</div>--}}

    </div>
</nav>
<!-- END Topbar -->



<!-- Header -->
<header class="offer-header header-inverse" style="background-image: url({{ $frontTheme->background_image_url }});padding: 80px 100px;" data-overlay="8">
</header>
<!-- END Header -->




<!-- Main container -->
<main class="main-content">

    @yield('content')

</main>
<!-- END Main container -->






<!-- Footer -->
<footer class="site-footer">
    <div class="container">
        <div class="row gap-y align-items-center">
            <div class="col-12 col-lg-3">
                &copy; {{ \Carbon\Carbon::today()->year }} @lang('app.by') {{ $companyName }}

            </div>
        </div>
    </div>
</footer>
<!-- END Footer -->



<!-- Scripts -->
<script src="{{ asset('front/assets/js/core.min.js') }}"></script>
<script src="{{ asset('front/assets/js/thesaas.min.js') }}"></script>
<script src="{{ asset('front/assets/js/script.js') }}"></script>
<script src="{{ asset('froiden-helper/helper.js') }}"></script>
<script src="{{ asset('assets/node_modules/toast-master/js/jquery.toast.js') }}"></script>

@stack('footer-script')

</body>
</html>