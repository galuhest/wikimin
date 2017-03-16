@extends('template.app')
@section('content')
<a href='{{url("/issue/".$person_id."/create")}}' class="btn btn-default">Tambah Issue</a>
<hr>
<h3>Lihat Pendapat</h3>
@foreach($issues as $issue)
  <div class="col-md-4">
    <h3>{{$issue->id}}</h3>
    <p>Topic : {{App\Topic::find($issue->topic_id)->topic}} </p>
    <p>Isu : {{$issue->value}}</p>
    <p>Sumber &amp; URL-nya : <a href="{{$issue->source_link}}">{{$issue->source}}</a> </p>
    <!-- <a href='{{url("/issue/$issue->id/edit")}}' class="btn btn-default">Edit</a> -->
    <form method="POST" action='{{url("/issue/$issue->id")}}'>
      <button type="submit" class="btn btn-default">Delete</button>
      <input type="hidden" name="_method" value="DELETE">

      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>
  </div>
@endforeach
@endsection
