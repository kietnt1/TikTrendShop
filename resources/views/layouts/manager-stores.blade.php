<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Poco admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Poco admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="pixelstrap">
        <link rel="icon" href="" type="image/x-icon">
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fontawesome.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/icofont.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/themify.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/feather-icon.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chartist.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/prism.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pe7-icon.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
        <link id="color" rel="stylesheet" href="{{ asset('assets/css/color-1.css') }}" media="screen">
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>

    <body>
        <div class="page-wrapper">
            <x-header.header-manager-shop />
            <div class="page-body-wrapper">
                <div class="row">
                    <div class="col-3">
                        <x-sidebar.sidebar-manager-stores-menus />
                    </div>
                    <div class="col-12">
                        <div class="page-body">
                            @yield('content')
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <script src=" {{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
        <script src=" {{ asset('assets/js/bootstrap/popper.min.js') }}"></script>
        <script src=" {{ asset('assets/js/bootstrap/bootstrap.js') }}"></script>
        <script src=" {{ asset('assets/js/icons/feather-icon/feather.min.js') }}"></script>
        <script src=" {{ asset('assets/js/icons/feather-icon/feather-icon.js') }}"></script>
        <script src=" {{ asset('assets/js/sidebar-menu.js') }}"></script>
        <script src=" {{ asset('assets/js/config.js') }}"></script>
        <script src=" {{ asset('assets/js/chart/chartist/chartist.js') }}"></script>
        <script src=" {{ asset('assets/js/chart/chartist/chartist-plugin-tooltip.js') }}"></script>
        <script src=" {{ asset('assets/js/chart/apex-chart/apex-chart.js') }}"></script>
        <script src=" {{ asset('assets/js/chart/apex-chart/stock-prices.js') }}"></script>
        <script src=" {{ asset('assets/js/prism/prism.min.js') }}"></script>
        <script src=" {{ asset('assets/js/clipboard/clipboard.min.js') }}"></script>
        <script src=" {{ asset('assets/js/counter/jquery.waypoints.min.js') }}"></script>
        <script src=" {{ asset('assets/js/counter/jquery.counterup.min.js') }}"></script>
        <script src=" {{ asset('assets/js/counter/counter-custom.js') }}"></script>
        <script src=" {{ asset('assets/js/custom-card/custom-card.js') }}"></script>
        <script src=" {{ asset('assets/js/dashboard/ecommerce-custom.js') }}"></script>
        <script src=" {{ asset('assets/js/chat-menu.js') }}"></script>
        <script src=" {{ asset('assets/js/script.js') }}"></script>
        <script src=" {{ asset('assets/js/theme-customizer/customizer.j') }}s"></script>
        @stack('scripts')
    </body>

</html>
