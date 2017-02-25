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
              <a class="navbar-brand" href="#">
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

            <h1 class="text center" id="atas">Ahok atau Anies?</h1>
            
            <div class="row">
                <div class="col-sm-6">
                    <div class="couple-avatar-paslon-main">
                        <div class="avatar">
                          <img src="https://pilkada2017.kpu.go.id/img/paslon//2931/2931_foto-wkd_1_.jpg" alt="Foto Jarot">
                        </div>
                        <div class="avatar" style="z-index: 3;">
                          <img src="https://pilkada2017.kpu.go.id/img/paslon//2931/2931_foto-kd_1_.jpg" alt="Foto Ahok">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="couple-avatar-paslon-main">
                        <div class="avatar">
                          <img src="https://pilkada2017.kpu.go.id/img/paslon//3203/3203_foto-kd_1_.jpg" alt="Foto Anies">
                        </div>
                        <div class="avatar">
                          <img src="https://pilkada2017.kpu.go.id/img/paslon//3203/3203_foto-wkd_1_.jpg" alt="Foto Sandi">
                        </div>
                    </div>      
                </div>
            </div>

            <div class="text center">
                <a href="#visi-misi-program" class="btn btn-primary">
                  Visi, Misi, Program
                </a>
                <a href="#pendapat" class="btn btn-primary">
                  Pendapat
                </a>
                <a href="#testimoni" class="btn btn-primary">
                  Testimoni
                </a>
                <a href="#pendidikan" class="btn btn-primary">
                  Pendidikan
                </a>
                <a href="#karir" class="btn btn-primary">
                  Karir
                </a>
                <a href="#penghargaan" class="btn btn-primary">
                  Penghargaan
                </a>
            </div>

            <h2 class="text center" id="visi-misi-program">Visi, Misi, Program<sup><a href="#atas"><span class="glyphicon glyphicon-arrow-up"></span></a></sup></h2>
            <div class="row">
                <div class="col-sm-3">
                    <div class="kotak-putih">
                        <h4 class="text center">Program</h4>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="kotak-putih">
                        <h4 class="text center">Visi</h4>
                    </div>
                    <div class="kotak-putih">
                        <h4 class="text center">Misi</h4>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="kotak-putih">
                        <h4 class="text center">Visi</h4>
                    </div>
                    <div class="kotak-putih">
                        <h4 class="text center">Misi</h4>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="kotak-putih">
                        <h4 class="text center">Program</h4>
                    </div>
                </div>
            </div>

            <h2 class="text center" id="pendapat">Pendapat<sup><a href="#atas"><span class="glyphicon glyphicon-arrow-up"></span></a></sup></h2>
            <div class="row">
                <div class="col-sm-3">
                    <div class="kotak-putih">
                        <h4 class="text center">Djarot</h4>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="kotak-putih">
                        <h4 class="text center">Ahok</h4>
                        <strong>Lingkungan</strong>
                        <ul>
                            <li>"Tes satu dua tiga" ~ <a href="#">Kompas.com</a></li>
                            <li></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="kotak-putih">
                        <h4 class="text center">Anies</h4>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="kotak-putih">
                        <h4 class="text center">Sandi</h4>
                    </div>
                </div>
            </div>

            <h2 class="text center" id="testimoni">
                Testimoni<br>
                <small>Tes</small>
            </h2>
            <div class="row">
                <div class="col-sm-3">
                    <div class="kotak-putih">
                        <h4 class="text center">Djarot</h4>

                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="kotak-putih">
                        <h4 class="text center">Ahok</h4>
                        <div>
                            <span class="glyphicon glyphicon-book pull-right" data-toggle="modal" data-target="#buktiModal" aria-hidden="true" style="cursor: target;"></span>
                            <strong>Rian Ernest</strong><br>
                            <a href="http://www.kompasiana.com/rianernest/catatan-jongos-dua-cagub-dki_58a19bcadf22bd10091f6c7b">Catatan "Jongos" Dua Cagub DKI</a> 
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="kotak-putih">
                        <div>
                            <span class="glyphicon glyphicon-book pull-right" data-toggle="modal" data-target="#buktiModal" aria-hidden="true" style="cursor: target;"></span>
                            <strong>Rian Ernest</strong><br>
                            <a href="http://www.kompasiana.com/rianernest/catatan-jongos-dua-cagub-dki_58a19bcadf22bd10091f6c7b">Catatan "Jongos" Dua Cagub DKI</a> 
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="kotak-putih">
                        <h4 class="text center">Sandi</h4>
                    </div>
                </div>
            </div>
            <div class="text center">
                <a href="#atas">kembali ke atas</a>
            </div>

            <h2 class="text center" id="pendidikan">Pendidikan<sup><a href="#atas"><span class="glyphicon glyphicon-arrow-up"></span></a></sup></h2>
            <div class="row">
                <div class="col-sm-3">
                    <div class="kotak-putih">
                        <h4 class="text center">Djarot</h4>
                        <span class="glyphicon glyphicon-book pull-right" data-toggle="modal" data-target="#buktiModal" aria-hidden="true" style="cursor: target;"></span>
                        <b>1977</b><br>SMP N 4 Surabaya<br><br><b>1981</b><br>SMA Taruna Nusa Harapan<br><br><b>1986</b><br>Sarjana Administrasi Pemerintahan Umum, Universitas Brawijaya, Malang<br><br><b>1991</b><br>Pasca Sarjana, Administrasi Negara, Universitas Gadjah Mada, Yogyakarta
                        <hr>
                        <div class="text center">
                            <a href="#">Tambah/Koreksi Informasi Pendidikan Djarot?</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="kotak-putih">
                        <h4 class="text center">Ahok</h4>
                        <b>1977</b><br>SD N 3 Gantung, Belitung<br><br><b>1981</b><br>SMP Negeri Gantung<br><br><b>1984</b><br>SMA Swasta III PSKD, Jakarta<br><br><b>1990</b><br>Teknik Geologi, Universitas Trisakti, Jakarta.<br><br><b>1994<br></b>Magister Manajemen, Sekolah Tinggi Manajemen Prasetya Mulya
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="kotak-putih">
                        <h4 class="text center">Anies</h4>
                        <b>1992</b><br>SMA N 2 Yogyakarta<br><br><b>1995</b><br>Ilmu Manajemen, Universitas Gadjah Mada<br><br><b>1998</b><br>Master of Public Management, University of Maryland, USA<br><br><b>2007</b><br>Doctor of Philosophy, Political Science, Northern Illinois University
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="kotak-putih">
                        <h4 class="text center">Sandi</h4>
                        <b>1987</b><br>SMA Swasta Pangudi Luhur<br><br><b>1990</b><br>Bachelor of Business Administration, Wichita State University, USA<br><br><b>1992</b><br>Master of Business Administration, George Washington University
                    </div>
                </div>
            </div>
        
            <div class="modal fade" id="buktiModal" tabindex="-1" role="dialog" aria-labelledby="buktiModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="buktiModalLabel">Bukti</h4>
                      </div>
                      <div class="modal-body">
                        Scan Ijazah (KPU) : <a href="https://pilkada2017.kpu.go.id/download/calon/2931/2931_FC-Ijazah-Legalisir_1_.pdf/" target="_blank">https://pilkada2017.kpu.go.id/download/calon/2931/2931_FC-Ijazah-Legalisir_1_.pdf/</a>
                      </div>
                    </div>
                </div>
            </div>

            <h2 class="text center" id="karir">Karir<sup><a href="#atas"><span class="glyphicon glyphicon-arrow-up"></span></a></sup></h2>
            <div class="row">
                <div class="col-sm-3">
                    <div class="kotak-putih">
                        <h4 class="text center">Djarot</h4>    
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="kotak-putih">
                        <h4 class="text center">Ahok</h4>    
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="kotak-putih">
                        <h4 class="text center">Anies</h4>    
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="kotak-putih">
                        <h4 class="text center">Sandi</h4>
                    </div>
                </div>
            </div>

            <h2 class="text center" id="penghargaan">Penghargaan<sup><a href="#atas"><span class="glyphicon glyphicon-arrow-up"></span></a></sup></h2>
            <div class="row">
                <div class="col-sm-3">
                    <div class="kotak-putih">
                        <h4 class="text center">Djarot</h4>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="kotak-putih">
                        <h4 class="text center">Ahok</h4>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="kotak-putih">
                        <h4 class="text center">Anies</h4>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="kotak-putih">
                        <h4 class="text center">Sandi</h4>
                    </div>
                </div>
            </div>

        </div>

        <footer class="footer">
          <div class="container-fluid">
            <p class="text-muted">Place sticky footer content here.</p>
          </div>
        </footer>

        <script type="text/javascript" src="{{asset('js/app.js', $secure)}}"></script>
    </body>
</html>
