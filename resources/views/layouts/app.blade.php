<!DOCTYPE html>
<html lang="en">
<!-- head-->
    <head>
        <!-- Title -->
        <title>Alpha | @yield('pagename')</title>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">
        <meta name="description" content="Responsive Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />
        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="{{ asset('source/assets/plugins/materialize/css/materialize.min.css') }}"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="{{ asset('source/assets/plugins/metrojs/MetroJs.min.css') }}" rel="stylesheet">
        <link href="{{ asset('source/assets/plugins/weather-icons-master/css/weather-icons.min.css') }}" rel="stylesheet">
        <!-- Theme Styles -->
        <link href="{{ asset('source/assets/css/alpha.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('source/assets/css/custom.css') }}" rel="stylesheet" type="text/css"/>

    </head>

<!-- body -->
    <body>
        <div class="loader-bg"></div>
        @include('layouts.loader')
        <div class="mn-content fixed-sidebar">
            @include('layouts.header')
            @include('layouts.search-results')
            @include('layouts.chat-sidebar')
            @include('layouts.chat-messages')

            <!-- side bar menu code -->
            @include('layouts.sidebar')
            <main class="mn-inner inner-active-sidebar">
              @yield('content')
            </main>
            @include('layouts.footer')
        </div>
        <div class="left-sidebar-hover"></div>

        <!-- Javascripts -->
        <script src="{{ asset('source/assets/plugins/jquery/jquery-2.2.0.min.js') }}"></script>
        <script src="{{ asset('source/assets/plugins/materialize/js/materialize.min.js') }}"></script>
        <script src="{{ asset('source/assets/plugins/material-preloader/js/materialPreloader.min.js') }}"></script>
        <script src="{{ asset('source/assets/plugins/jquery-blockui/jquery.blockui.js') }}"></script>
        <script src="{{ asset('source/assets/plugins/waypoints/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('source/assets/plugins/counter-up-master/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('source/assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
        <script src="{{ asset('source/assets/plugins/chart.js/chart.min.js') }}"></script>
        <script src="{{ asset('source/assets/plugins/flot/jquery.flot.min.js') }}"></script>
        <script src="{{ asset('source/assets/plugins/flot/jquery.flot.time.min.js') }}"></script>
        <script src="{{ asset('source/assets/plugins/flot/jquery.flot.symbol.min.js') }}"></script>
        <script src="{{ asset('source/assets/plugins/flot/jquery.flot.resize.min.js') }}"></script>
        <script src="{{ asset('source/assets/plugins/flot/jquery.flot.tooltip.min.js') }}"></script>
        <script src="{{ asset('source/assets/plugins/curvedlines/curvedLines.js') }}"></script>
        <script src="{{ asset('source/assets/plugins/peity/jquery.peity.min.js') }}"></script>
        <script src="{{ asset('source/assets/js/alpha.min.js') }}"></script>
        <script src="{{ asset('source/assets/js/pages/dashboard.js') }}"></script>

    </body>
</html>
