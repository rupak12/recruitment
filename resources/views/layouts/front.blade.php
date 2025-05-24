<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ !empty($metaDescription) ? $metaDescription : '' }}">

    <meta property="og:url" content="{{ !empty($pageUrl) ? $pageUrl : '' }}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ !empty($metaTitle) ? $metaTitle : '' }}" />
    <meta property="og:description" content="{{ !empty($metaDescription) ? $metaDescription : '' }}" />
    <meta property="og:image" content="{{ !empty($metaImage) ? $metaImage : '' }}" />
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="600" />

    <meta itemprop="name" content="{{ !empty($metaTitle) ? $metaTitle : '' }}">
    <meta itemprop="description" content="{{ !empty($metaDescription) ? $metaDescription : '' }}">
    <meta itemprop="image" content="{{ !empty($metaImage) ? $metaImage : '' }}">

    <meta property="title" content="{{ !empty($metaTitle) ? $metaTitle : '' }}">
    <meta property="description" content="{{ !empty($metaDescription) ? $metaDescription : '' }}">

    <title>{{ $pageTitle }}</title>
    <style>

    </style>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <style>
        :root {
            --main-color: {{ $frontTheme->primary_color }};
        }

        {!! $frontTheme->front_custom_css !!} :root {
            --primary-color: #101820;
            --secondary-color: #f8c000;
            --text-color: #ffffff;
            --text-muted: #cccccc;
            --hover-color: #ffffff;
        }

        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9f9f9;
        }

        .footer {
            background-color: var(--primary-color);
            color: var(--text-color);
            padding: 70px 20px 30px;
            position: relative;
            overflow: hidden;
        }

        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, var(--secondary-color), #ff6b00, var(--secondary-color));
            background-size: 200% auto;
            animation: gradient 3s linear infinite;
        }

        @keyframes gradient {
            0% {
                background-position: 0% center;
            }

            100% {
                background-position: 200% center;
            }
        }

        .footer-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            max-width: 1200px;
            margin: auto;
            gap: 40px;
            position: relative;
            z-index: 1;
        }

        .footer-logo {
            position: relative;
        }

        .footer-logo img {
            width: 180px;
            transition: transform 0.3s ease;
        }

        .footer-logo:hover img {
            transform: scale(1.05);
        }

        .footer-logo::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 0;
            width: 50px;
            height: 3px;
            background-color: var(--secondary-color);
            transition: width 0.3s ease;
        }

        .footer-logo:hover::after {
            width: 100px;
        }

        .footer-section {
            flex: 1;
            min-width: 250px;
            transition: transform 0.3s ease;
        }

        .footer-section:hover {
            transform: translateY(-5px);
        }

        .footer-section h3 {
            font-size: 18px;
            margin-bottom: 20px;
            color: var(--secondary-color);
            position: relative;
            display: inline-block;
        }

        .footer-section h3::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 40px;
            height: 2px;
            background-color: var(--secondary-color);
            transition: width 0.3s ease;
        }

        .footer-section:hover h3::after {
            width: 70px;
        }

        .footer-section p,
        .footer-section a {
            font-size: 15px;
            line-height: 1.7;
            color: var(--text-muted);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .footer-section a:hover {
            color: var(--hover-color);
            padding-left: 5px;
        }

        .footer-icons i {
            margin-right: 15px;
            color: var(--secondary-color);
            width: 20px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .footer-icons a:hover i {
            transform: scale(1.2);
        }

        .footer-bottom {
            text-align: center;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 25px;
            margin-top: 50px;
            font-size: 14px;
            color: var(--text-muted);
            position: relative;
        }

        .footer-bottom::before {
            content: '';
            position: absolute;
            top: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 20px;
            background: radial-gradient(ellipse at center, rgba(248, 192, 0, 0.4) 0%, rgba(248, 192, 0, 0) 70%);
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: var(--text-muted);
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background-color: var(--secondary-color);
            color: var(--primary-color);
            transform: translateY(-3px);
        }

        .newsletter {
            margin-top: 20px;
        }

        .newsletter input {
            width: 100%;
            padding: 10px 15px;
            background-color: rgba(255, 255, 255, 0.1);
            border: none;
            border-radius: 4px;
            color: white;
            margin-bottom: 10px;
        }

        .newsletter button {
            background-color: var(--secondary-color);
            color: var(--primary-color);
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .newsletter button:hover {
            background-color: #ffd700;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(248, 192, 0, 0.3);
        }

        @media (max-width: 768px) {
            .footer-container {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .footer-section {
                margin-bottom: 30px;
                align-items: center;
            }

            .footer-section h3::after {
                left: 50%;
                transform: translateX(-50%);
            }

            .social-links {
                justify-content: center;
            }
        }
    </style>

    <!-- Styles -->
    <link href="{{ asset('froiden-helper/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/node_modules/toast-master/css/jquery.toast.css') }}" rel="stylesheet">

    <link href="{{ asset('front/assets/css/core.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/assets/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/assets/css/thesaas.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('front/assets/css/custom.css') }}" rel="stylesheet">
    @stack('header-css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <link rel='stylesheet prefetch' href='//cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css'>
    <link href="{{ asset('assets/node_modules/sweetalert/sweetalert.css') }}" rel="stylesheet">

    <!-- Favicons -->
    {{-- <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}"> --}}
    <link rel="icon" href="{{ $companySetting->favicon_url }}" type="image/x-icon" />
    <link rel="manifest" href="{{ asset('favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('favicon/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
    @stack('style')
    <style>
        .dropdown-toggle::after {
            right: 22px !important;
        }
    </style>
</head>

<body>


    @if (!request()->is('/'))
        <header class="bg-img-shape">
            <div class="header inner-header" style="background-image: url({{ $frontTheme->background_image_url }})"
                data-overlay="8">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-12 col-lg-8 offset-lg-2">
                            @yield('header-text')
                        </div>
                    </div>
                </div>
            </div>
        </header>
    @endif

    <!-- END Header -->

    <!-- Main container -->

    @yield('content')

    {{-- Ajax Modal Start for --}}
    <div class="modal fade bs-modal-md in" id="addJobAlert" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" id="modal-data-application">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><i class="icon-plus"></i> @lang('app.department')</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i
                            class="fa fa-times"></i></button>
                </div>
                <div class="modal-body">
                    Loading...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn blue">Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    {{-- Ajax Modal Ends --}}
    <!-- END Main container -->

    <!-- Footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="row text-center">
                <div class="col-12 col-lg-12 mb-10">
                    @forelse($customPages as $customPage)
                        <a class="px-5 fw-400"
                            href="{{ route('jobs.custom-page', $customPage->slug) }}"><span>{{ $customPage->name }}</span></a>
                    @empty
                    @endforelse

                </div>
                <div class="col-12 col-lg-12 fw-400">
                    <p>&copy; {{ \Carbon\Carbon::today()->year }} @lang('app.by') {{ $companyName }}</p>

                </div>
            </div>
        </div>
    </footer>
    <!-- END Footer -->



    <!-- Scripts -->
    <script src="{{ asset('front/assets/js/core.min.js') }}"></script>
    {{-- <script src="{{ asset('front/assets/js/thesaas.min.js') }}"></script> --}}
    <script src="{{ asset('front/assets/js/script_new.js') }}"></script>
    <script src="{{ asset('front/assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('froiden-helper/helper.js') }}"></script>
    <script src="{{ asset('assets/node_modules/toast-master/js/jquery.toast.js') }}"></script>
    <script src="{{ asset('assets/node_modules/sweetalert/sweetalert.min.js') }}"></script>
    <script>
        setActiveClassToLanguage();
        $('.language-drop .dropdown-item').click(function() {
            let code = $(this).data('lang-code');

            let url = '{{ route('jobs.changeLanguage', ':code') }}';
            url = url.replace(':code', code);

            if (!$(this).hasClass('active')) {
                $.easyAjax({
                    url: url,
                    type: 'POST',
                    container: 'body',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.status == 'success') {
                            location.reload();
                            setActiveClassToLanguage();
                        }
                    }
                })
            }
        })
        @if (isset($alertId) && !is_null($alertId))
            $('body').on('click', '.disable-job-alert', function(event) {
                var id = {{ $alertId }};

                swal({
                    title: "@stack('header-css')",
                    text: "@stack('style')",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "@lang('modules.front.disableJobAlert')",
                    cancelButtonText: "@lang('modules.front.jobAlert')",
                    closeOnConfirm: true,
                    closeOnCancel: true
                }, function(isConfirm) {
                    if (isConfirm) {

                        var url = "{{ route('jobs.disableJobAlert', ':id') }}";
                        url = url.replace(':id', id);

                        var token = "{{ csrf_token() }}";

                        $.easyAjax({
                            type: 'POST',
                            url: url,
                            data: {
                                '_token': token
                            },
                            success: function(response) {
                                if (response.status == "success") {
                                    $.unblockUI();
                                    table._fnDraw();
                                }
                            }
                        });
                    }
                });
            });
        @endif
        function setActiveClassToLanguage() {
            // language switcher
            if ('{{ \Cookie::has('language_code') }}') {
                $('.language-drop .dropdown-item').filter(function() {
                    return $(this).data('lang-code') === '{{ \Cookie::get('language_code') }}'
                }).addClass('active');
            } else {
                $('.language-drop .dropdown-item').filter(function() {
                    return $(this).data('lang-code') === '{{ $global->locale }}'
                }).addClass('active');
            }
        }
        $(document).ready(function() {


            $('#job-alert').click(function() {
                var url = "{{ route('jobs.jobAlert') }}";
                console.log(url);
                $('.modal-title').html("<i class='icon-plus'></i> @yield('header-text')");
                $.ajaxModal('#addJobAlert', url);
            });



        });
    </script>
    @stack('footer-script')

</body>

</html>
