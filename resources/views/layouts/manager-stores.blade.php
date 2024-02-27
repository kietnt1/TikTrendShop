<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="dns-prefetch" href="//fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
        @vite(['resources/sass/app.scss', 'resources/css/manager-store/main.css', 'resources/js/app.js'])
    </head>

    <body>
        <div id="app">
            <x-header.header-manager-shop />
            <div class="row">
                <div class="col-2">
                    <x-sidebar.sidebar-manager-stores-menus />
                </div>
                <div class="col-8 mt-4">
                    @yield('content')
                </div>
            </div>
        </div>
    </body>
    <script src=" {{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
    @stack('scripts')

</html>
