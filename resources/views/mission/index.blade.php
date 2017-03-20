@extends('template.app')
@section('content')

@foreach($missions as $mission)
  <div class="col-md-4">
    <h3>{{$mission->id}}</h3>
    <p>Misi : {{$mission->value}} </p>
    <p>Sumber : <a href="{{$mission->source_link}}">{{$mission->source}}</a> </p>
    <a href='{{url("/mission/$mission->id/edit")}}' class="btn btn-default">Edit</a>
    <form method="POST" action='{{url("/mission/$mission->id")}}'>
      <button type="submit" class="btn btn-default">Delete</button>
      <input type="hidden" name="_method" value="DELETE">

      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>
  </div>
@endforeach
@endsection
