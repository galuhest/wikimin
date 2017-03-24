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
?>

<h1 class="text center" id="atas">Bantu Lengkapi Data {{$type}} {{$person->name}}</h1>

<div class="text-center" >

    <div>
        @if($type == "Pendidikan")
            tes 
        @elseif($type == "Testimoni")
            tes 2
        @elseif($type == "Pendapat")
            tes 3
        @elseif($type == "Karir")
            tes 4
        @elseif($type == "Penghargaan")
            tes 5
        @endif
    </div>
    <div class="fb-comments" data-href="{{Request::fullUrl()}}" data-width="550" data-numposts="7"></div>
</div>


@endsection

