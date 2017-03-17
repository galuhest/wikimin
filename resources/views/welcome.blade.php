@extends('template.app')
@section('content')
<h1 class="text center" id="atas">Ahok atau Anies?</h1>
<div class="col-md-4 col-md-offset-4">
  <div class="owl-carousel owl-theme">
      <div class="item"><h4>1</h4></div>
      <div class="item"><h4>2</h4></div>
      <div class="item"><h4>3</h4></div>
      <div class="item"><h4>4</h4></div>
      <div class="item"><h4>5</h4></div>
  </div>
</div>
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

<h2 class="text center" id="visi-misi-program">
    Visi, Misi, &amp; Program
</h2>
<div class="row">
    <div class="col-sm-3">
        <div class="kotak-putih">
            <h4 class="text center">Visi</h4>
            @forelse ($candidates[0]["visions"] as $vision)
                <p>{{ $vision->value }}</p>
            @empty
                <p>No visions</p>
            @endforelse
        </div>
        <div class="kotak-putih">
            <h4 class="text center">Misi</h4>
            @forelse ($candidates[0]["missions"] as $mission)
                <p>{{ $mission->value }}</p>
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
                    <strong>{{$t->topic}}</strong><br>
                    @foreach($program as $i)
                        <p>
                            {{$loop->iteration}}. "{!!$i->value!!}", <a href="{{$i->source_link}}">{{$i->source}}</a>
                        </p>
                    @endforeach
                @endif
            @empty
                Belum ada topik. Tambah dulu sebelum tambah pendapat.
            @endforelse
        </div>
    </div>
    <div class="col-sm-3">
        <div class="kotak-putih">
            <h4 class="text center">Program</h4>
            @forelse($topics as $t)
                @php
                  $program = App\Program::where("candidate_id", 1)->where("topic_id", $t->id)->get();
                @endphp
                @if($program->count() != 0)
                    <strong>{{$t->topic}}</strong><br>
                    @foreach($program as $i)
                        <p>
                            {{$loop->iteration}}. "{!!$i->value!!}", <a href="{{$i->source_link}}">{{$i->source}}</a>
                        </p>
                    @endforeach
                @endif
            @empty
                Belum ada topik. Tambah dulu sebelum tambah pendapat.
            @endforelse
        </div>
    </div>
    <div class="col-sm-3">
        <div class="kotak-putih">
            <h4 class="text center">Visi</h4>
            @forelse ($candidates[1]["visions"] as $vision)
                <p>{{ $vision->value }}</p>
            @empty
                <p>No visions</p>
            @endforelse
        </div>
        <div class="kotak-putih">
            <h4 class="text center">Misi</h4>
            @forelse ($candidates[1]["missions"] as $mission)
                <p>{{ $mission->value }}</p>
            @empty
                <p>No missions</p>
            @endforelse
        </div>
    </div>
</div>
<div class="text center">
    <a href="#atas">kembali ke atas</a>
</div>

<h2 class="text center" id="pendapat">
    Pendapat
</h2>
<div class="row">
    <div class="col-sm-3">
        <div class="kotak-putih">
            <h4 class="text center">Djarot</h4>
            @forelse($topics as $t)
                @php
                    $issues = App\Issue::where("person_id", 2)->where("topic_id", $t->id)->get();
                @endphp
                @if($issues->count() != 0)
                    <strong>{{$t->topic}}</strong><br>
                    @foreach($issues as $i)
                        <p>
                            {{$loop->iteration}}. "{!!$i->value!!}", <a href="{{$i->source_link}}">{{$i->source}}</a>
                        </p>
                    @endforeach
                @endif
            @empty
                Belum ada topik. Tambah dulu sebelum tambah pendapat.
            @endforelse
        </div>
    </div>
    <div class="col-sm-3">
        <div class="kotak-putih">
            <h4 class="text center">Ahok</h4>
            @forelse($topics as $t)
                @php
                    $issues = App\Issue::where("person_id", 1)->where("topic_id", $t->id)->get();
                @endphp
                @if($issues->count() != 0)
                    <strong>{{$t->topic}}</strong><br>
                    @foreach($issues as $i)
                        <p>
                            {{$loop->iteration}}. "{!!$i->value!!}", <a href="{{$i->source_link}}">{{$i->source}}</a>
                        </p>
                    @endforeach
                @endif
            @empty
                Belum ada topik. Tambah dulu sebelum tambah pendapat.
            @endforelse
        </div>
    </div>
    <div class="col-sm-3">
        <div class="kotak-putih">
            <h4 class="text center">Anies</h4>
            @forelse($topics as $t)
                @php
                    $issues = App\Issue::where("person_id", 3)->where("topic_id", $t->id)->get();
                @endphp
                @if($issues->count() != 0)
                    <strong>{{$t->topic}}</strong><br>
                    @foreach($issues as $i)
                        <p>
                            {{$loop->iteration}}. "{!!$i->value!!}", <a href="{{$i->source_link}}">{{$i->source}}</a>
                        </p>
                    @endforeach
                @endif
            @empty
                Belum ada topik. Tambah dulu sebelum tambah pendapat.
            @endforelse
        </div>
    </div>
    <div class="col-sm-3">
        <div class="kotak-putih">
            <h4 class="text center">Sandi</h4>
            @forelse($topics as $t)
                @php
                    $issues = App\Issue::where("person_id", 4)->where("topic_id", $t->id)->get();
                @endphp
                @if($issues->count() != 0)
                    <strong>{{$t->topic}}</strong><br>
                    @foreach($issues as $i)
                        <p>
                            {{$loop->iteration}}. "{!!$i->value!!}", <a href="{{$i->source_link}}">{{$i->source}}</a>
                        </p>
                    @endforeach
                @endif
            @empty
                Belum ada topik. Tambah dulu sebelum tambah pendapat.
            @endforelse
        </div>
    </div>
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
                <strong>{{$t->voucher}} ({{$t->year_given}})</strong><br>
                @if($t->testimony)
                    <em>"{!!$t->testimony!!}"</em><br>
                @endif
                <a href="{{$t->source_link}}">{{$t->source}}</a><br>
            @empty
                <p>No testimonies</p>
            @endforelse
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
            @forelse ($person["educations"] as $education)
                <p>
                    <span class="glyphicon glyphicon-book pull-right" data-toggle="modal" data-target="#eduModal{{$education->id}}" aria-hidden="true" style="cursor: target;"></span>
                    <b>{{$education->year_start}}-{{$education->year_end}}</b><br>
                    {{$education->institution}} {{isset($education->degree) ? '&mdash; ('.$education->degree.')' : ''}}
                </p>
            @empty
                <p>No educations</p>
            @endforelse
            <hr>
            <div class="text center">
                <a href="#">Tambah/Koreksi Informasi Pendidikan Djarot?</a>
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
    Karir
</h2>
<div class="row">
    @foreach($persons as $person)
    <div class="col-sm-3">
        <div class="kotak-putih">
            <h4 class="text center">{{$person["name"]}}</h4>
            @forelse ($person["careers"] as $c)
                <p>
                    <span class="glyphicon glyphicon-book pull-right" data-toggle="modal" data-target="#careerModal{{$c->id}}" aria-hidden="true" style="cursor: target;"></span>
                    <b>{{$c->year_start}}-{{$c->year_end}}</b><br>
                    {{$c->position}}, {{$c->institution}}
                </p>
            @empty
                <p>No educations</p>
            @endforelse
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
                    <b>{{$a->year_given}}</b><br>
                    {{$a->award}}, <a href="{{$a->source_link}}">{{$a->source}}</a>
                </p>
            @empty
                <p>No awards</p>
            @endforelse
        </div>
    </div>
    @endforeach
</div>
<div class="text center">
    <a href="#atas">kembali ke atas</a>
</div>

@endsection
@section('js')
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
@endsection
