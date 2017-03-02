@extends('template.app')
@section('content')
@foreach($topics as $topic)
  <div class="col-md-4">
    <h3>{{$topic->id}}</h3>
    <p>voucher : {{$topic->topic}} </p>
    <a href='{{url("/topic/$topic->id/edit")}}' class="btn btn-default">Edit</a>
    <form method="POST" action='{{url("/topic/$topic->id")}}'>
      <button type="submit" class="btn btn-default">Delete</button>
      <input type="hidden" name="_method" value="DELETE">

      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>
  </div>
@endforeach
@endsection
