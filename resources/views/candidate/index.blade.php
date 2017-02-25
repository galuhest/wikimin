
@foreach($candidates as $candidate)
  <div class="col-md-6">
    <form method="POST" action='{{url("/candidate/$candidate->id")}}'>
      <button type="submit" class="btn btn-default">Delete</button>
      <input type="hidden" name="_method" value="DELETE">

      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>
    <a class="btn btn-default" href='{{url("/candidate/$candidate->id/edit")}}'>Edit</a>
    <!-- <img src='{{asset("app/photo/$candidate->name_head")}}'>
    <img src='{{asset("app/photo/$candidate->name_vice")}}'> -->
    <div class="col-md-6">
      <p>{{\App\Person::where('id','=',$candidate->head_id)->first()->name}}</p>
    </div>
    <div class="col-md-6">
      <p>Nama Calon Wakil : {{\App\Person::where('id','=',$candidate->vice_id)->first()->name}}</p>
    </div>
    <div class="row">
      <h3>Visi</h3>
      <a class="btn" href="{{url('/visi/$candidate->id/create')}}">Tambah</a>
      <a class="btn" href="{{url('visi/$candidate->id/edit')}}">Edit</a>
      <a class="btn" href="{{url('visi/$candidate->id/')}}">Lihat</a>
    </div>
    <div class="row">
      <h3>Program</h3>
      <a class="btn" href="{{url('program/$candidate->id/create')}}">Tambah</a>
      <a class="btn" href="{{url('program/$candidate->id/edit')}}">Edit</a>
      <a class="btn" href="{{url('program/$candidate->id/')}}">Lihat</a>
    </div>
    <div class="row">
      <h3>Pendidikan</h3>
      <div class="col-md-6">
        <a class="btn" href="{{url('education/$candidate->head_id/create')}}">Tambah</a>
        <a class="btn" href="{{url('education/$candidate->head_id/')}}">Lihat</a>
      </div>
      <div class="col-md-6">
        <a class="btn" href="{{url('education/$candidate->vice_id/create')}}">Tambah</a>
        <a class="btn" href="{{url('education/$candidate->vice_id/')}}">Lihat</a>
      </div>
    </div>
    <div class="row">
      <h3>Karir</h3>
      <div class="col-md-6">
        <a class="btn" href="{{url('career/$candidate->head_id/create')}}">Tambah</a>
        <a class="btn" href="{{url('career/$candidate->head_id/')}}">Lihat</a>
      </div>
      <div class="col-md-6">
        <a class="btn" href="{{url('career/$candidate->vice_id/create')}}">Tambah</a>
        <a class="btn" href="{{url('career/$candidate->vice_id/')}}">Lihat</a>
      </div>
    </div>
    <div class="row">
      <h3>Testimoni</h3>
      <div class="col-md-6">
        <a class="btn" href="{{url('testimony/$candidate->head_id/create')}}">Tambah</a>
        <a class="btn" href="{{url('testimony/$candidate->head_id/')}}">Lihat</a>
      </div>
      <div class="col-md-6">
        <a class="btn" href="{{url('testomony/$candidate->vice_id/create')}}">Tambah</a>
        <a class="btn" href="{{url('testimony/$candidate->vice_id/')}}">Lihat</a>
      </div>
    </div>
    <div class="row">
      <h3>Kontroversi</h3>
      <div class="col-md-6">
        <a class="btn" href="{{url('controversy/$candidate->head_id/create')}}">Tambah</a>
        <a class="btn" href="{{url('controversy/$candidate->head_id/')}}">Lihat</a>
      </div>
      <div class="col-md-6">
        <a class="btn" href="{{url('controversy/$candidate->vice_id/create')}}">Tambah</a>
        <a class="btn" href="{{url('controversy/$candidate->vice_id/')}}">Lihat</a>
      </div>
    </div>
  </div>
@endforeach
