@extends('template.app')
@section('content')
<a href='{{url("/education/".$person_id."/create")}}' class="btn btn-default">Tambah Pendidikan</a>
<hr>
<h3>Lihat Pendidikan</h3>
@foreach($educations as $education)
  <div class="col-md-4">
    <h3>{{$education->id}}</h3>
    <p>institusi : {{$education->institution}} </p>
    <p>tahun : {{$education->year_start}} {{(isset($education->year_end)? " - ".$education->year_end : "")}}</p>
    <p>gelar/jurusan : {{isset($education->degree)? $education->degree : ""}}</p>
    <p>sumber : <a href="{{$education->source_link}}">{{$education->source}}</a> </p>
    <a href='{{url("/education/$education->id/edit")}}' class="btn btn-default">Edit</a>
    <form method="POST" action='{{url("/education/$education->id")}}'>
      <button type="submit" class="btn btn-default">Delete</button>
      <input type="hidden" name="_method" value="DELETE">

      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>
  </div>
@endforeach
@endsection
