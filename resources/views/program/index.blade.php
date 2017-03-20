@extends('template.app')
@section('content')
<a href='{{url("/program/".$candidate_id."/create")}}' class="btn btn-primary btn-sm">Tambah Program Pasangan</a>
<hr>
<h2>Lihat Program Pasangan</h2>
@foreach($programs as $program)
  <div class="col-md-4 kotak-putih">
    <h3>{{$program->id}}</h3>
    <p>Topik : {{App\Topic::find($program->topic_id)->topic}} </p>
    <strong>{{$program->title}}</strong>
    <p>Deskripsi : {{$program->value}} </p>
    <p>Sumber : {!!$program->source!!} </p>
    <a href='{{url("/program/$program->id/edit")}}' class="btn btn-primary btn-sm">Edit</a>
    <form method="POST" action='{{url("/program/$program->id")}}'>
      <button type="submit" class="btn btn-primary btn-sm">Delete</button>
      <input type="hidden" name="_method" value="DELETE">

      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>
  </div>
@endforeach
@endsection
