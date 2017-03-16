@extends('template.app')
@section('content')
  <a href='{{url("/testimony/".$person_id."/create")}}' class="btn btn-default">Tambah Testimoni</a>
  <hr>
  <h3>Lihat Testimoni</h3>
@foreach($testimonys as $testimony)
  <div class="col-md-4">
    <h3>{{$testimony->id}}</h3>
    <p>Voucher : {{$testimony->voucher}} </p>
    <p>Tahun : {{$testimony->year_given}} </p>
    <p>Testimoni : {{$testimony->testimony}} </p>
    <p>Sumber &amp; URL-nya : <a href="{{$testimony->source_link}}">{{$testimony->source}}</a> </p>
    <!--<a href='{{url("/testimony/$testimony->id/edit")}}' class="btn btn-default">Edit</a>-->
    <form method="POST" action='{{url("/testimony/$testimony->id")}}'>
      <button type="submit" class="btn btn-default">Delete</button>
      <input type="hidden" name="_method" value="DELETE">

      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>
  </div>
@endforeach
@endsection
