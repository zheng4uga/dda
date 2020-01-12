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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
        <link rel="stylesheet" href="{{url('formstone/dist/css/themes/light.css')}}" type="text/css">        

        <link rel="stylesheet" href="{{url('formstone/dist/css/carousel.css')}}" type="text/css">        

        <link href="{{ url('css/fontawesome/all.min.css') }}" rel="stylesheet" type="text/css">  
        <link href="{{url('css/jquery.typeahead.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ url('css/common.css') }}" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Abel|Gupter|Ibarra+Real+Nova|Oswald&display=swap" rel="stylesheet">
  
        
        <script src="{{ url('js/jquery.min.js')}}" type="text/javascript" ></script>
        <script src="{{ url('js/jquery.typeahead.min.js')}}" type="text/javascript" ></script>
        <script src="{{ url('formstone/dist/js/core.js')}}" type="text/javascript"></script>
        <script src="{{ url('formstone/dist/js/mediaquery.js')}}" type="text/javascript"></script>
        <script src="{{ url('formstone/dist/js/touch.js')}}" type="text/javascript"></script>

        <script src="{{ url('formstone/dist/js/carousel.js')}}" type="text/javascript"></script>

        <script src="{{ url('js/home.js')}}" type="text/javascript" ></script>

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

        <script>
            $(document).ready(function(){
                $("#details").toggle();
                $("#toggle-electrical").on("click", function (){
                   $("#details").toggle(500);
                         
                });

                $("#details2").toggle();
                $("#toggle-gas").on("click", function (){
                   $("#details2").toggle(500);
                         
                });

                $("#details3").toggle();
                $("#toggle-endless").on("click", function (){
                   $("#details3").toggle(500);
                         
                });

                $("#details4").toggle();
                $("#toggle-water").on("click", function (){
                   $("#details4").toggle(500);
                         
                });

                $("#step1").click(function(){
                    $("#para1").removeClass("is-hidden");
                    $("#para2").addClass("is-hidden");
                    $("#para3").addClass("is-hidden");
                    $("#para4").addClass("is-hidden");
                        
                });

                $("#step2").click(function(){
                    $("#para2").removeClass("is-hidden");
                    $("#para1").addClass("is-hidden");
                    $("#para3").addClass("is-hidden");
                    $("#para4").addClass("is-hidden");
                  
                      
                });

                $("#step3").click(function(){
                    $("#para3").removeClass("is-hidden");
                    $("#para1").addClass("is-hidden");
                    $("#para2").addClass("is-hidden");
                    $("#para4").addClass("is-hidden");
                     
                });
                $("#step4").click(function(){
                    $("#para4").removeClass("is-hidden");
                    $("#para1").addClass("is-hidden");
                    $("#para2").addClass("is-hidden");
                    $("#para3").addClass("is-hidden"); 
                });

            
            });
        </script>
    </body>
</html>