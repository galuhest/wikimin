<?php
    $secure = App::environment('production') ? true : NULL;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <meta name="robots" content="index,nofollow" />
    <meta name="copyright" content="Copyright © Wikikandidat 2017" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Wikikandidat</title>

    <meta name="twitter:description" content="adalah 'Wikipedia' yang independen & spesialis pemilihan pejabat. Buatan mahasiswa UI. Visi: Meritokrasi Indonesia.">
    <meta property="og:description" content="adalah 'Wikipedia' yang independen & spesialis pemilihan pejabat. Buatan mahasiswa UI. Visi: Meritokrasi Indonesia." />

    <meta name="twitter:image" content="{{asset("images/ahok-atau-anies.png", $secure)}}">
    <meta property="og:image" content="{{asset("images/ahok-atau-anies.png", $secure)}}"/>

    <!--<meta name="keywords" content="#" />
    <meta name="url" content="#" />
    <meta name="description" content="#" />

    <meta name="twitter:card" content="app">
    <meta name="twitter:site" content="@#" />
    <meta name="twitter:creator" content="@#" />
    <meta name="twitter:url" content="#">
    <meta name="twitter:title" content="#">
    <meta name="twitter:description" content="#">
    

    <meta property="og:url" content="#" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="#" />
    
    <meta name="author" content="#">
    <meta name="csrf-token" content="#" />
    <meta name="image:Logo" content="#"/>
    

    <link rel="canonical" href="#" />

    <link rel="apple-touch-icon" sizes="57x57" href="'images/fav/apple-icon-57x57.png'">
    <link rel="apple-touch-icon" sizes="60x60" href="'images/fav/apple-icon-57x57.png'">
    <link rel="apple-touch-icon" sizes="72x72" href="'images/fav/apple-icon-72x72.png'">
    <link rel="apple-touch-icon" sizes="76x76" href="'images/fav/apple-icon-76x76.png'">
    <link rel="apple-touch-icon" sizes="114x114" href="'images/fav/apple-icon-114x114.png'">
    <link rel="apple-touch-icon" sizes="120x120" href="'images/fav/apple-icon-120x120.png'">
    <link rel="apple-touch-icon" sizes="144x144" href="'images/fav/apple-icon-144x144.png'">
    <link rel="apple-touch-icon" sizes="152x152" href="'images/fav/apple-icon-152x152.png'">
    <link rel="apple-touch-icon" sizes="180x180" href="'images/fav/apple-icon-180x180.png'">
    <link rel="icon" type="image/png" sizes="192x192"  href="'images/fav/android-icon-192x192.png'">
    <link rel="icon" type="image/png" sizes="32x32" href="'images/fav/favicon-32x32.png'">
    <link rel="icon" type="image/png" sizes="96x96" href="'images/fav/favicon-96x96.png'">
    <link rel="icon" type="image/png" sizes="16x16" href="'images/fav/favicon-16x16.png'">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="'images//ms-icon-144x144.png'">
    <meta name="theme-color" content="#ffffff"> -->

    <meta property="og:site_name" content="Wikikandidat" />
    <meta property="og:locale" content="id_ID" />

    <meta property="fb:app_id" content="1412350799013815">

    <link rel="stylesheet" href="{{asset('css/app.css', $secure)}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css', $secure)}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css', $secure)}}">
    <style type="text/css">
        body{
        }
        /*no collapse*/

        .navbar-collapse.collapse.off {
            display: block!important;
        }
        .navbar-collapse.collapse.off ul {
            margin: 0;
            padding: 0;
        }

        .navbar-nav.no-collapse>li,
        .navbar-nav.no-collapse {
            float: left !important;
        }

        .navbar-right.no-collapse {
            float: right!important;
        }
        .navbar{
            margin-bottom: 0px;
        }
        .form-horizontal .form-group {
            margin-left: 0px;
        }
        .btn{
            white-space: normal;
        }
    </style>
    @yield('head')
    </head>
    <body>
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <a class="navbar-brand" href="{{url('/')}}">
                <img alt="Brand" src="{{asset("images/logo.png", $secure)}}">
              </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse off" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav no-collapse">
                <li>
                    <p class="navbar-text">
                        Hasil Kolaborasi dari -> 
                    </p>
                </li>
                <li>
                    <p class="navbar-text">
                        <a href="https://www.instagram.com/sks_ui/" target="_blank">SKS UI</a>
                    </p>
                </li>
                <li>
                    <p class="navbar-text">
                        <a href="http://ristek.cs.ui.ac.id/" target="_blank">Ristek FASILKOM UI</a>
                    </p>
                </li>
                <li>
                    <p class="navbar-text">Suka? Sebarkan! -> </p>
                </li>
                <li>
                    <p class="navbar-text">
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{url()->current()}}" target="_blank">    Facebook
                        </a>
                    </p>
                </li>
                <li>
                    <p class="navbar-text">
                        <a href="https://twitter.com/intent/tweet?text={{url()->current()}}" target="_blank">
                            Twitter
                        </a>
                    </p>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        @if(Request::path() == "/")
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSeboNYyqt4ZK-h8K3ra3JkRxhhJ4_CxcPJ_SqfVPvjad04Duw/viewform?usp=sf_link" target="_blank">
                <img src="{{asset("images/banner-1.png", $secure)}}" alt="" width="100%">
            </a>
<!--        <div class="owl-carousel owl-theme" >
            <div class="item">
                <div style="width: 1280px; height: 230px; background-color: pink;">
                    
                </div>
            </div>
            <div class="item">
                <div style="width: 1280px; height: 230px; background-color: pink;">slide nomor 2</div>
            </div>
            <div class="item">
                <div style="width: 1280px; height: 230px; background-color: pink;">slide nomor 3</div>
            </div>
            <div class="item">
                <div style="width: 1280px; height: 230px; background-color: pink;">slide nomor 4</div>
            </div>
        </div>
-->
        @endif

        <div class="container-fluid">
          @yield('content')
        </div>

        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-8256551-6', 'auto');
          ga('send', 'pageview');
        </script>
        <script
		  src="https://code.jquery.com/jquery-3.2.0.min.js"
		  integrity="sha256-JAW99MJVpJBGcbzEuXk4Az05s/XyDdBomFqNlM3ic+I="
		  crossorigin="anonymous"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script type="text/javascript" src="{{asset('js/owl.carousel.min.js', $secure)}}"></script>
        <script>
          $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
              loop:true,
              items:1,
              nav:true,
              center:true,
            });
          });
        </script>
        @yield('js')

    </body>
</html>
