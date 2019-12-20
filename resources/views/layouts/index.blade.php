<!doctype html>
<html  lang="{{ app()->getLocale() }}"><head>
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
        <title>@yield('page-title')</title>
        <link href="{{url('bulmaswatch/default/bulmaswatch.min.css')}}" rel="stylesheet" type="text/css" >
        <link href="{{ url('css/fontawesome/all.min.css') }}" rel="stylesheet" type="text/css">  
        <link href="{{ url('css/common.css') }}" rel="stylesheet" type="text/css">  

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
    </body>
</html>