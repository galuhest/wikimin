<?php
    $secure = App::environment('production') ? true : NULL;
?>
@extends('template.app')

@section('head')
    <style type="text/css">
        img[data-toggle="modal"]{
            margin-top: 5px;
            margin-right: 3px;
            cursor: pointer;
        }
        .btn-primary.btn-small{
            margin-top: 0px;
        }

    </style>
@endsection

@section('content')

<h1 class="text center" id="atas">Ahok atau Anies?</h1>
<div class="row">
    <div class="col-sm-6">
        <div class="couple-avatar-paslon-main">
            <div class="avatar">
              <img src="{{asset('images/Djarot.jpg', $secure)}}" alt="Foto Jarot">
            </div>
            <div class="avatar" style="z-index: 3;">
              <img src="{{asset('images/Ahok.jpg', $secure)}}" alt="Foto Ahok">
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="couple-avatar-paslon-main">
            <div class="avatar">
              <img src="{{asset('images/Anies.jpg', $secure)}}" alt="Foto Anies">
            </div>
            <div class="avatar">
              <img src="{{asset('images/Sandi.jpg', $secure)}}" alt="Foto Sandi">
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

<h2 class="text center" id="visi-misi-program">
    Visi, Misi, &amp; Program
</h2>
<div class="row">
    <div class="col-sm-3">
        <div class="kotak-putih">
            <h4 class="text center">Visi</h4>
            @forelse ($candidates[0]["visions"] as $vision)
                <p>{!! $vision->value !!} ~ <a href="{{$vision->source_link}}">{{$vision->source}}</a></p>
            @empty
                <p>No visions</p>
            @endforelse
        </div>
        <div class="kotak-putih">
            <h4 class="text center">Misi</h4>
            @forelse ($candidates[0]["missions"] as $mission)
                <p>{!! $mission->value !!} ~ <a href="{{$mission->source_link}}">{{$mission->source}}</a></p>
            @empty
                <p>No missions</p>
            @endforelse
        </div>
    </div>

    @php
        $topics = App\Topic::all();
    @endphp
    <div class="col-sm-3">
        <div class="kotak-putih">
            <h4 class="text center">Program</h4>
            @forelse($topics as $t)
                @php
                  $program = App\Program::where("candidate_id", 1)->where("topic_id", $t->id)->get();
                @endphp
                @if($program->count() != 0)
                    <div class="text-center"><em style="color:#e85454;"><strong>{{$t->topic}}</strong></em></div>
                    @foreach($program as $p)
                        <p>
                            <a class="pull-right" href="https://www.facebook.com/sharer/sharer.php?u=http://staging.wikikandidat.com&title={{$p->title}}&description={{$p->value}}&picture={{asset('images/Ahok.jpg', $secure)}}" target="_blank"><img width="15px" height="15px" src="{{asset('images/fb.jpg', $secure)}}" alt=""></a>
                            <img class="pull-right" data-toggle="modal" data-target="#programModal{{$p->id}}" src="{{asset('images/checklist.png', $secure)}}" width="15px" height="15px" alt="">
                            <strong>{{$p->title}}</strong><br>
                            {!!$p->value!!}
                        </p>
                    @endforeach
                @endif
            @empty
                Belum ada topik. Tambah dulu sebelum tambah pendapat.
            @endforelse
            <div class="text-center">
                <a href="{{url('program/1/kontribusi-data')}}" target="_blank" class="btn btn-primary btn-small">Lengkapi Data Program Ahok-Djarot</a>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="kotak-putih">
            <h4 class="text center">Program</h4>
            @forelse($topics as $t)
                @php
                  $program = App\Program::where("candidate_id", 2)->where("topic_id", $t->id)->get();
                @endphp
                @if($program->count() != 0)
                    <div class="text-center"><strong><em style="color:#e85454;">{{$t->topic}}</strong></em></div>
                    @foreach($program as $p)
                        <p>
                            <a class="pull-right" href="https://www.facebook.com/sharer/sharer.php?u=http://staging.wikikandidat.com&title={{$p->title}}&description={{$p->value}}&picture={{asset('images/Anies.jpg', $secure)}}" target="_blank"><img width="15px" height="15px" src="{{asset('images/fb.jpg', $secure)}}" alt=""></a>
                            <img class="pull-right" data-toggle="modal" data-target="#programModal{{$p->id}}" src="{{asset('images/checklist.png', $secure)}}" width="15px" height="15px" alt="">
                            <strong>{{$p->title}}</strong><br>
                            {!!$p->value!!}
                        </p>
                    @endforeach
                @endif
            @empty
                Belum ada topik. Tambah dulu sebelum tambah pendapat.
            @endforelse
            <div class="text-center">
                <a href="{{url('program/2/kontribusi-data')}}" target="_blank" class="btn btn-primary btn-small">Lengkapi Data Program Anies-Sandi</a>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="kotak-putih">
            <h4 class="text center">Visi</h4>
            @forelse ($candidates[1]["visions"] as $vision)
                <p>{!! $vision->value !!} ~ <a href="{{$vision->source_link}}">{{$vision->source}}</a></p>
            @empty
                <p>No visions</p>
            @endforelse
        </div>
        <div class="kotak-putih">
            <h4 class="text center">Misi</h4>
            @forelse ($candidates[1]["missions"] as $mission)
                <p>{!! $mission->value !!} ~ <a href="{{$mission->source_link}}">{{$mission->source}}</a></p>
            @empty
                <p>No missions</p>
            @endforelse
        </div>
    </div>
</div>
@php
    $program = App\Program::all();
@endphp
@foreach($program as $p)
<div class="modal fade" id="programModal{{$p->id}}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="buktiModalLabel">Bukti</h4>
          </div>
          <div class="modal-body">
            {!!$p->source!!}
          </div>
        </div>
    </div>
</div>
@endforeach
<div class="text center">
    <a href="#atas">kembali ke atas</a>
</div>

<h2 class="text center" id="pendapat">
    Pendapat
</h2>
<div class="row">

    @foreach($persons as $person)
    <div class="col-sm-3">
        <div class="kotak-putih">
            <h4 class="text center">{{$person["name"]}}</h4>
            @forelse($topics as $t)
                @php
                    $issues = App\Issue::where("person_id", $person["id"])->where("topic_id", $t->id)->get();
                @endphp
                @if($issues->count() != 0)
                    <div class="text-center"><strong><em style="color:#e85454;">{{$t->topic}}</strong></em></div>
                    @foreach($issues as $i)
                        <p>
                            <a class="pull-right" href="https://www.facebook.com/sharer/sharer.php?u=http://staging.wikikandidat.com&title={{$i->summary}}&description=%22{{$i->value}}%22, kata {{$person["name"]}} di {{$i->source}}&picture={{asset('images/'.$person["name"].'.jpg', $secure)}}" target="_blank"><img width="15px" height="15px" src="{{asset('images/fb.jpg', $secure)}}" alt=""></a>
                            <strong>{{$i->summary}}</strong><br>
                            "{!!$i->value!!}", <a href="{{$i->source_link}}">{{$i->source}}</a>
                        </p>
                    @endforeach
                @endif
            @empty
                Belum ada topik. Tambah dulu sebelum tambah pendapat.
            @endforelse
            <div class="text-center">
                <a href="{{url('issue/'.$person['id'].'/kontribusi-data')}}" target="_blank" class="btn btn-primary btn-small">Lengkapi Data Pendapat {{$person["name"]}}</a>
            </div>
        </div>
    </div>
    @endforeach

</div>

<div class="text center">
    <a href="#atas">kembali ke atas</a>
</div>

<h2 class="text center" id="testimoni">
    Testimoni<br>
    <small>Pengakuan Mereka yang Pernah Berkerja Langsung dengan Kandidat</small>
</h2>
<div class="row">

    @foreach($persons as $person)
    <div class="col-sm-3">
        <div class="kotak-putih">
            <h4 class="text center">{{$person["name"]}}</h4>
            @forelse ($person["testimonies"] as $t)
                <p>
                    <a class="pull-right" href="https://www.facebook.com/sharer/sharer.php?u=http://staging.wikikandidat.com&title=Pendapat {{$t->voucher}} tentang {{$person["name"]}}&description=%22{{$t->testimony}}%22&picture={{asset('images/'.$person["name"].'.jpg', $secure)}}" target="_blank"><img width="15px" height="15px" src="{{asset('images/fb.jpg', $secure)}}" alt=""></a>
                    <strong>{{$t->voucher}} ({{$t->year_given}})</strong><br>
                    @if($t->testimony)
                        <em>"{!!$t->testimony!!}"</em><br>
                    @endif
                    <a href="{{$t->source_link}}">{{$t->source}}</a>
                </p>
            @empty
                <p>No testimonies</p>
            @endforelse
            <div class="text-center">
                <a href="{{url('testimony/'.$person['id'].'/kontribusi-data')}}" target="_blank" class="btn btn-primary btn-small">Lengkapi Data Testimoni {{$person["name"]}}</a>
            </div>
        </div>
    </div>
    @endforeach

</div>
<div class="text center">
    <a href="#atas">kembali ke atas</a>
</div>

<h2 class="text center" id="testimoni">
    Pendidikan
</h2>
<div class="row">
    @foreach($persons as $person)
    <div class="col-sm-3">
        <div class="kotak-putih">
            <h4 class="text center">{{$person["name"]}}</h4>
            @forelse ($person["educations"] as $e)
                <p>
                    <a class="pull-right" href="https://www.facebook.com/sharer/sharer.php?u=http://staging.wikikandidat.com&title=Pendidikan {{$person["name"]}}&description={{$e->institution}}, {{$e->year_start}} @if($e->year_start && $e->year_end)-@endif {{$e->year_end}} @if(!$e->year_start) (lulus) @endif&picture={{asset('images/'.$person["name"].'.jpg', $secure)}}" target="_blank"><img width="15px" height="15px" src="{{asset('images/fb.jpg', $secure)}}" alt=""></a>
                    <img class="pull-right" data-toggle="modal" data-target="#eduModal{{$e->id}}" src="{{asset('images/checklist.png', $secure)}}" width="15px" height="15px" alt="">
                    <b>{{$e->year_start}} @if($e->year_start && $e->year_end)-@endif {{$e->year_end}} @if(!$e->year_start) (lulus) @endif</b><br>
                    {{$e->institution}} {{isset($e->degree) ? '&mdash; ('.$e->degree.')' : ''}}
                </p>
            @empty
                <p>No educations</p>
            @endforelse
            <div class="text-center">
                <a href="{{url('education/'.$person['id'].'/kontribusi-data')}}" target="_blank" class="btn btn-primary btn-small">Lengkapi Data Pendidikan {{$person["name"]}}</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="text center">
    <a href="#atas">kembali ke atas</a>
</div>

@foreach($persons as $person)
@foreach ($person["educations"] as $education)
<div class="modal fade" id="eduModal{{$education->id}}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="buktiModalLabel">Bukti</h4>
          </div>
          <div class="modal-body">
            {{$education->source}}: <a href="{{$education->source_link}}" target="_blank">{{$education->source_link}}</a>
          </div>
        </div>
    </div>
</div>
@endforeach
@endforeach

<h2 class="text center" id="karir">
    Karir &amp; Organisasi
</h2>
<div class="row">
    @foreach($persons as $person)
    <div class="col-sm-3">
        <div class="kotak-putih">
            <h4 class="text center">{{$person["name"]}}</h4>
            @forelse ($person["careers"] as $c)
                <p>
                    <a class="pull-right" href="https://www.facebook.com/sharer/sharer.php?u=http://staging.wikikandidat.com&title=Karir {{$person["name"]}}&description={{$c->institution}}, {{$c->year_start}} @if(!$c->year_end)(mulai)@endif @if($c->year_start && $c->year_end)-@endif {{$c->year_end}} @if(!$c->year_start)(selesai)@endif&picture={{asset('images/'.$person["name"].'.jpg', $secure)}}" target="_blank"><img width="15px" height="15px" src="{{asset('images/fb.jpg', $secure)}}" alt=""></a>
                    <img class="pull-right" data-toggle="modal" data-target="#careerModal{{$c->id}}" src="{{asset('images/checklist.png', $secure)}}" width="15px" height="15px" alt="">
                    <b>{{$c->year_start}} @if($c->year_start && $c->year_end)-@endif {{$c->year_end}}</b><br>
                    {{$c->position}}@if($c->position), @endif{{$c->institution}}
                </p>
            @empty
                <p>No educations</p>
            @endforelse
            <div class="text-center">
                <a href="{{url('career/'.$person['id'].'/kontribusi-data')}}" target="_blank" class="btn btn-primary btn-small">Lengkapi Data Karir {{$person["name"]}}</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="text center">
    <a href="#atas">kembali ke atas</a>
</div>

@foreach($persons as $person)
@foreach ($person["careers"] as $c)
<div class="modal fade" id="careerModal{{$c->id}}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="buktiModalLabel">Bukti</h4>
          </div>
          <div class="modal-body">
            {{$c->source}}: <a href="{{$c->source_link}}" target="_blank">{{$c->source_link}}</a>
          </div>
        </div>
    </div>
</div>
@endforeach
@endforeach

<h2 class="text center" id="penghargaan">
    Penghargaan
</h2>
<div class="row">
    @foreach($persons as $person)
    <div class="col-sm-3">
        <div class="kotak-putih">
            <h4 class="text center">{{$person["name"]}}</h4>
            @forelse ($person["awards"] as $a)
                <p>
                    <a class="pull-right" href="https://www.facebook.com/sharer/sharer.php?u=http://staging.wikikandidat.com&title=Penghargaan {{$person["name"]}}&description={{$a->award}} tahun {{$a->year_given}}&picture={{asset('images/'.$person["name"].'.jpg', $secure)}}" target="_blank"><img width="15px" height="15px" src="{{asset('images/fb.jpg', $secure)}}" alt=""></a>
                    <b>{{$a->year_given}}</b><br>
                    {{$a->award}}, dari {{$a->institution}}<br><a href="{{$a->source_link}}">{{$a->source}}</a>
                </p>
            @empty
                <p>No awards</p>
            @endforelse
            <div class="text-center">
                <a href="{{url('award/'.$person['id'].'/kontribusi-data')}}" target="_blank" class="btn btn-primary btn-small">Lengkapi Data Penghargaan {{$person["name"]}}</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="text center">
    <a href="#atas">kembali ke atas</a>
</div>

@endsection
