@extends('template.app')
@section('content')
<a href='{{url("/career/".$person_id."/create")}}' class="btn btn-default">Tambah Karir</a>
<hr>
<h3>Lihat Karir</h3>
@foreach($careers as $career)
  <div class="col-md-4">
    <h3>{{$career->id}}</h3>
    <p>Institusi : {{$career->institution}} </p>
    <p>Tahun : {{$career->year_start}} {{(isset($career->year_end)? " - ".$career->year_end : "")}}</p>
    <p>Posisi : {{isset($career->position)? $career->position : ""}}</p>
    <p>Sumber : <a href="{{$career->source_link}}">{{$career->source}}</a> </p>
    <!--<a href='{{url("/career/$career->id/edit")}}' class="btn btn-default">Edit</a>-->
    <form method="POST" action='{{url("/career/$career->id")}}'>
      <button type="submit" class="btn btn-default">Delete</button>
      <input type="hidden" name="_method" value="DELETE">

      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>
  </div>
@endforeach
@endsection
