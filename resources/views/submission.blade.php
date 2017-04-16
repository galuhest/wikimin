@extends('template.app')
@section('content')

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=1412350799013815";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php
    if($type == "education")
        $type = "Pendidikan";
    elseif($type == "testimony")
        $type = "Testimoni";
    elseif($type == "issue")
        $type = "Pendapat";
    elseif($type == "career")
        $type = "Karir";
    elseif($type == "award")
        $type = "Penghargaan";
    elseif($type == "program")
        $type = "Program";
?>

<h1 class="text center" id="atas">Bantu Lengkapi Data {{$type}} {{$person}}</h1>



    <div style="max-width: 400px; text-align: left; margin:0 auto; ">
        <strong>Panduan Umum:</strong><br>
        <ol>
            <li>Bukti sahih adalah wajib.</li>
            <li>Bukti berbentuk publikasi media massa online diterima&mdash;tapi hanya yang memiliki identitas dan kontak redaksi yang jelas.</li>
            <li>Merevisi konten atau bukti data yang sudah ada di Wikikandidat dibolehkan.</li>
        </ol>
        @if($type == "Testimoni")
            <strong>Panduan Khusus Data Testimoni:</strong>
            <ol>
                <li>Hanya dari konteks "pernah berkerja bersama secara langsung".</li>
                <li>Khusus untuk tipe data ini, blog dibolehkan.</li>
            </ol>
        @elseif($type == "Pendapat")
            <strong>Panduan Khusus Data Pendapat:</strong>
            <ol>
                <li>Karena keterbatasan tempat, Wikikandidat tidak bisa menampilkan semua pendapat. Hanya yang punya nilai jurnalistik tertinggi yang akan ditampilkan.</li>
            </ol>
        @elseif($type == "Penghargaan")
            <strong>Panduan Khusus Data Penghargaan:</strong>
            <ol>
                <li>Penghargaan harus dirilis oleh organisasi resmi.</li>
            </ol>
        @endif
        </ol>
    </div>
<div class="text-center">
    <div class="fb-comments" data-href="{{Request::fullUrl()}}" data-width="550" data-numposts="7"></div>
</div>


@endsection

