@extends('template.app')
@section('content')
<form action="{{action('VisionController@store')}}" method="POST" class="form-horizontal">
  <div class="col-md-12">
    <div class="col-md-4">
      <input hidden type="text" value="{{$id}}" name="id">
      <div class="form-group">
        <label>Visi kandidat : </label><input class="form-control" type="text" name="visi[]" placeholder="visi">
        <label>Sumber : </label><input class="form-control" type="text" name="source[]" placeholder="sumber">
      </div>
    </div>
  </div>
  {{csrf_field()}}
  <button type="submit" class="btn btn-default">submit</button>
</form>
@endsection
