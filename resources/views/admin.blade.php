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

<h2 class="text center" id="visi-misi-program">
    Visi, Misi, &amp; Program<br>
</h2>
<div class="row">
    <div class="col-sm-3">
        <div class="kotak-putih">
            <h4 class="text center">Visi</h4>
            <p>
                <a href="{{url('vision/1/create')}}">Tambah</a>
            </p>
            <p>
                <a href="{{url('vision/1/')}}">Lihat</a>
            </p>
        </div>
        <div class="kotak-putih">
            <h4 class="text center">Misi</h4>
            <p>
                <a href="{{url('mission/1/create')}}">Tambah</a>
            </p>
            <p>
                <a href="{{url('mission/1/')}}">Lihat</a>
            </p>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="kotak-putih">
            <h4 class="text center">Program</h4>
            <p>
                <a href="{{url('program/1/create')}}">Tambah</a>
            </p>
            <p>
                <a href="{{url('program/1/')}}">Lihat</a>
            </p>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="kotak-putih">
            <h4 class="text center">Program</h4>
            <p>
                <a href="{{url('program/2/create')}}">Tambah</a>
            </p>
            <p>
                <a href="{{url('program/2/')}}">Lihat</a>
            </p>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="kotak-putih">
            <h4 class="text center">Visi</h4>
            <p>
                <a href="{{url('vision/2/create')}}">Tambah</a>
            </p>
            <p>
                <a href="{{url('vision/2/')}}">Lihat</a>
            </p>
        </div>
        <div class="kotak-putih">
            <h4 class="text center">Misi</h4>
            <p>
                <a href="{{url('mission/2/create')}}">Tambah</a>
            </p>
            <p>
                <a href="{{url('mission/2/')}}">Lihat</a>
            </p>
        </div>
    </div>
</div>
<div class="text center">
    <a href="#atas">kembali ke atas</a>
</div>

<h2 class="text center" id="pendapat">
    Pendapat<br>
    <small>
        <a href="{{url('topic/create')}}">Tambah Topik</a> - <a href="{{url('topic/')}}">Lihat Topik</a>
    </small>
</h2>
<div class="row">
    <div class="col-sm-3">
        <div class="kotak-putih">
            <h4 class="text center">Djarot</h4>
            <p>
                <a href="{{url('issue/2/create')}}">Tambah</a>
            </p>
            <p>
                <a href="{{url('issue/2')}}">Lihat</a>
            </p>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="kotak-putih">
            <h4 class="text center">Ahok</h4>
            <p>
                <a href="{{url('issue/1/create')}}">Tambah</a>
            </p>
            <p>
                <a href="{{url('issue/1')}}">Lihat</a>
            </p>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="kotak-putih">
            <h4 class="text center">Anies</h4>
            <p>
                <a href="{{url('issue/3/create')}}">Tambah</a>
            </p>
            <p>
                <a href="{{url('issue/3')}}">Lihat</a>
            </p>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="kotak-putih">
            <h4 class="text center">Sandi</h4>
            <p>
                <a href="{{url('issue/4/create')}}">Tambah</a>
            </p>
            <p>
                <a href="{{url('issue/4')}}">Lihat</a>
            </p>
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
    <div class="col-sm-3">
        <div class="kotak-putih">
            <h4 class="text center">Djarot</h4>
            <p>
                <a href="{{url('testimony/4/create')}}">Tambah</a>
            </p>
            <p>
                <a href="{{url('testimony/4')}}">Lihat</a>
            </p>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="kotak-putih">
            <h4 class="text center">Ahok</h4>
            <p>
                <a href="{{url('testimony/1/create')}}">Tambah</a>
            </p>
            <p>
                <a href="{{url('testimony/1')}}">Lihat</a>
            </p>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="kotak-putih">
            <h4 class="text center">Anies</h4>
            <p>
                <a href="{{url('testimony/3/create')}}">Tambah</a>
            </p>
            <p>
                <a href="{{url('testimony/3')}}">Lihat</a>
            </p>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="kotak-putih">
            <h4 class="text center">Sandi</h4>
            <p>
                <a href="{{url('testimony/4/create')}}">Tambah</a>
            </p>
            <p>
                <a href="{{url('testimony/4')}}">Lihat</a>
            </p>
        </div>
    </div>
</div>
<div class="text center">
    <a href="#atas">kembali ke atas</a>
</div>

<h2 class="text center" id="testimoni">
    Pendidikan<br>
</h2>
<div class="row">
    <div class="col-sm-3">
        <div class="kotak-putih">
            <h4 class="text center">Djarot</h4>
            <p>
                <a href="{{url('education/4/create')}}">Tambah</a>
            </p>
            <p>
                <a href="{{url('education/4')}}">Lihat</a>
            </p>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="kotak-putih">
            <h4 class="text center">Ahok</h4>
            <p>
                <a href="{{url('education/1/create')}}">Tambah</a>
            </p>
            <p>
                <a href="{{url('education/1')}}">Lihat</a>
            </p>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="kotak-putih">
            <h4 class="text center">Anies</h4>
            <p>
                <a href="{{url('education/3/create')}}">Tambah</a>
            </p>
            <p>
                <a href="{{url('education/3')}}">Lihat</a>
            </p>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="kotak-putih">
            <h4 class="text center">Sandi</h4>
            <p>
                <a href="{{url('education/4/create')}}">Tambah</a>
            </p>
            <p>
                <a href="{{url('education/4')}}">Lihat</a>
            </p>
        </div>
    </div>
</div>
<div class="text center">
    <a href="#atas">kembali ke atas</a>
</div>


<h2 class="text center" id="karir">
    Karir<br>
</h2>
<div class="row">
    <div class="col-sm-3">
        <div class="kotak-putih">
            <h4 class="text center">Djarot</h4>
            <p>
                <a href="{{url('career/4/create')}}">Tambah</a>
            </p>
            <p>
                <a href="{{url('career/4')}}">Lihat</a>
            </p>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="kotak-putih">
            <h4 class="text center">Ahok</h4>
            <p>
                <a href="{{url('career/1/create')}}">Tambah</a>
            </p>
            <p>
                <a href="{{url('career/1')}}">Lihat</a>
            </p>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="kotak-putih">
            <h4 class="text center">Anies</h4>
            <p>
                <a href="{{url('career/3/create')}}">Tambah</a>
            </p>
            <p>
                <a href="{{url('career/3')}}">Lihat</a>
            </p>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="kotak-putih">
            <h4 class="text center">Sandi</h4>
            <p>
                <a href="{{url('career/4/create')}}">Tambah</a>
            </p>
            <p>
                <a href="{{url('career/4')}}">Lihat</a>
            </p>
        </div>
    </div>
</div>

<div class="text center">
    <a href="#atas">kembali ke atas</a>
</div>

<h2 class="text center" id="penghargaan">
    Penghargaan<br>
</h2>
<div class="row">
    <div class="col-sm-3">
        <div class="kotak-putih">
            <h4 class="text center">Djarot</h4>
            <p>
                <a href="{{url('award/4/create')}}">Tambah</a>
            </p>
            <p>
                <a href="{{url('award/4')}}">Lihat</a>
            </p>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="kotak-putih">
            <h4 class="text center">Ahok</h4>
            <p>
                <a href="{{url('award/1/create')}}">Tambah</a>
            </p>
            <p>
                <a href="{{url('award/1')}}">Lihat</a>
            </p>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="kotak-putih">
            <h4 class="text center">Anies</h4>
            <p>
                <a href="{{url('award/3/create')}}">Tambah</a>
            </p>
            <p>
                <a href="{{url('award/3')}}">Lihat</a>
            </p>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="kotak-putih">
            <h4 class="text center">Sandi</h4>
            <p>
                <a href="{{url('award/4/create')}}">Tambah</a>
            </p>
            <p>
                <a href="{{url('award/4')}}">Lihat</a>
            </p>
        </div>
    </div>
</div>
<div class="text center">
    <a href="#atas">kembali ke atas</a>
</div>

@endsection

