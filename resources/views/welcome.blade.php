@extends('template.app')
@section('content')
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
    @foreach ($candidates as $candidate)
    <div class="col-sm-3">
        <div class="kotak-putih">
            <h4 class="text center">Program</h4>
            @forelse ($candidate["programs"] as $program)
                <p>{{ $program->value }}</p>
            @empty
                <p>No programs</p>
            @endforelse
        </div>
    </div>
    <div class="col-sm-3">
        <div class="kotak-putih">
            <h4 class="text center">Visi</h4>
            @forelse ($candidate["visions"] as $vision)
                <p>{{ $vision->value }}</p>
            @empty
                <p>No visions</p>
            @endforelse
        </div>
        <div class="kotak-putih">
            <h4 class="text center">Misi</h4>
            @forelse ($candidate["missions"] as $mission)
                <p>{{ $mission->value }}</p>
            @empty
                <p>No missions</p>
            @endforelse
        </div>
    </div>
    @endforeach
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
    @foreach($persons as $person)
    <div class="col-sm-3">
        <div class="kotak-putih">
            <h4 class="text center">{{$person["name"]}}</h4>
            @forelse ($person["testimonies"] as $testimony)
                <p>{{ $testimony->value }}</p>
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

<h2 class="text center" id="pendidikan">Pendidikan<sup><a href="#atas"><span class="glyphicon glyphicon-arrow-up"></span></a></sup></h2>
<div class="row">
    @foreach($persons as $person)
    <div class="col-sm-3">
        <div class="kotak-putih">
            <h4 class="text center">{{$person["name"]}}</h4>
            <span class="glyphicon glyphicon-book pull-right" data-toggle="modal" data-target="#buktiModal" aria-hidden="true" style="cursor: target;"></span>
            @forelse ($person["educations"] as $education)
            <b>{{$education->year_start}}-{{$education->year_end}}</b><br>{{$education->institution}}<br>{{$education->degree}}
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
    @foreach($persons as $person)
    <div class="col-sm-3">
        <div class="kotak-putih">
            <h4 class="text center">{{$person["name"]}}</h4>
            @forelse ($person["careers"] as $career)
                <p>{{ $career->value }}</p>
            @empty
                <p>No careers</p>
            @endforelse
        </div>
    </div>
    @endforeach
</div>

<h2 class="text center" id="penghargaan">Penghargaan<sup><a href="#atas"><span class="glyphicon glyphicon-arrow-up"></span></a></sup></h2>
<div class="row">
    @foreach($persons as $person)
    <div class="col-sm-3">
        <div class="kotak-putih">
            <h4 class="text center">{{$person["name"]}}</h4>
            @forelse ($person["awards"] as $award)
                <p>{{ $award->value }}</p>
            @empty
                <p>No careers</p>
            @endforelse
        </div>
    </div>
    @endforeach
</div>
@endsection
