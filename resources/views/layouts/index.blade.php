<!doctype html>
<html class="has-navbar-fixed-top" lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <meta name="description" content="@yield('page-description')">
        <meta name="keywords" content="@yield('keywords')" >
        <meta name="og:title" content="@yield('og-title')">
        <meta name="og:description" content="@yield('og-description')">
        <meta name="og:url" content="@yield('og-url')">
        <meta name="og:type" content="@yield('og-type')">
        <meta name="og:site_name" content="@yield('og-sitename')">
        <link rel="apple-touch-icon" sizes="57x57" href="{{url('images/favicons/apple-icon-57x57.png')}}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{url('images/favicons/apple-icon-60x60.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{url('images/favicons/apple-icon-72x72.png')}}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{url('images/favicons/apple-icon-76x76.png')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{url('images/favicons/apple-icon-114x114.png')}}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{url('images/favicons/apple-icon-120x120.png')}}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{url('images/favicons/apple-icon-144x144.png')}}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{url('images/favicons/apple-icon-152x152.png')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{url('images/favicons/apple-icon-180x180.png')}}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{url('images/favicons/android-icon-192x192.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{url('images/favicons/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{url('images/favicons/favicon-96x96.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{url('images/favicons/favicon-16x16.png')}}">
        <link rel="manifest" href="{{url('images/favicons/manifest.json')}}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <title>@yield('page-title')</title>
        <link href="{{url('bulmaswatch/default/bulmaswatch.min.css')}}" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
        <link rel="stylesheet" href="{{url('formstone/dist/css/themes/light.css')}}" type="text/css">        

        <link rel="stylesheet" href="{{url('formstone/dist/css/carousel.css')}}" type="text/css">        

        <link href="{{ url('css/fontawesome/all.min.css') }}" rel="stylesheet" type="text/css">  
        <link href="{{url('css/jquery.typeahead.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ url('css/common.css') }}" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Abel|Gupter|Ibarra+Real+Nova|Oswald&display=swap" rel="stylesheet">
        @yield('other-css')

        
        <script src="{{ url('js/jquery.min.js')}}" type="text/javascript" ></script>
        <script src="{{ url('js/jquery.typeahead.min.js')}}" type="text/javascript" ></script>
        <script src="{{ url('formstone/dist/js/core.js')}}" type="text/javascript"></script>
        <script src="{{ url('formstone/dist/js/mediaquery.js')}}" type="text/javascript"></script>
        <script src="{{ url('formstone/dist/js/touch.js')}}" type="text/javascript"></script>

        <script src="{{ url('formstone/dist/js/carousel.js')}}" type="text/javascript"></script>

        <script src="{{ url('js/home.js')}}" type="text/javascript" ></script>
        @yield('other-script')

    </head>
    <body>
        <header>
            @include('common.nav')
        </header>
        <section>
            @yield('content')
        </section>
        <footer class="footer">
            @include('common.footer')
        </footer>
        @include('common.modal')
    </body>
</html>