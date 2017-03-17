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

    <!--<meta name="keywords" content="#" />
    <meta name="url" content="#" />
    <meta name="description" content="#" />

    <meta name="twitter:card" content="app">
    <meta name="twitter:site" content="@#" />
    <meta name="twitter:creator" content="@#" />
    <meta name="twitter:url" content="#">
    <meta name="twitter:title" content="#">
    <meta name="twitter:description" content="#">
    <meta name="twitter:image" content="##">

    <meta property="og:url" content="#" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="#" />
    <meta property="og:description" content="#" />
    <meta name="author" content="#">
    <meta name="csrf-token" content="#" />
    <meta name="image:Logo" content="#"/>
    <meta property="og:image" content="#"/>

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
            padding-top: 70px;
        }
    </style>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="{{url('/')}}">
                <img alt="Brand" src="https://wikikandidat.com/img/logo.png">
              </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li>
                    <a href="https://medium.com/indonesia-raya/golput-bukan-solusi-argumen-singkat-be2b8046d26c#.76lijp679" target="_blank">Golput Bukan Solusi: Argumen Singkat</a>
                </li>
                <li>
                    <a href="http://wikikandidat.tumblr.com/post/157096787108/kontributor-versi-pilkada-2017" target="_blank">Kontributor</a>
                </li>
                <li>
                    <p class="navbar-text">Suka? Sebarkan! -> </p>
                </li>
                <li>
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{url()->current()}}" target="_blank">Facebook</a>
                </li>
                <li>
                    <a href="https://twitter.com/intent/tweet?text={{url()->current()}}" target="_blank">Twitter</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <div class="container-fluid">
          @yield('content')
        </div>

        <footer class="footer">
          <div class="container-fluid">
            <p class="text-muted">Place sticky footer content here.</p>
          </div>
        </footer>
        <script
        			  src="https://code.jquery.com/jquery-3.2.0.min.js"
        			  integrity="sha256-JAW99MJVpJBGcbzEuXk4Az05s/XyDdBomFqNlM3ic+I="
        			  crossorigin="anonymous"></script>
        <script type="text/javascript" src="{{asset('js/owl.carousel.min.js', $secure)}}"></script>
        @yield('js')
    </body>
</html>
