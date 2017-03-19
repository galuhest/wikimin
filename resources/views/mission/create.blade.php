@extends('template.app')
@section('content')
<form action="{{action('MissionController@store')}}" method="POST" class="form-horizontal">
  <div class="col-md-12">
    <div class="col-md-4">
      <input hidden type="text" value="{{$id}}" name="id">
      <div class="form-group">
        <label>Misi Kandidat :</label>
        <textarea class="form-control" name="misi[]" rows="5"></textarea>
      </div>
      <div class="form-group">
        <label>Sumber :</label>
        <textarea class="form-control" name="source[]" rows="3"></textarea>
      </div>
    </div>
  </div>
  {{csrf_field()}}
  <button type="submit" class="btn btn-default">submit</button>
</form>
@endsection
@section('js')
