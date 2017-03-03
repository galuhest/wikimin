@extends('template.app')
@section('content')
<form action="{{action('ProgramController@store')}}" method="POST" class="form-horizontal">
  <div class="col-md-12">
    <div class="col-md-4">
      <input hidden type="text" value="{{$id}}" name="id">
      <div class="form-group">
        <div class="form-group">
          <label>Program kandidat : </label><input class="form-control" type="text" name="program[]" placeholder="program">
        </div>
        <div class="form-group">
          <label> Sumber : </label><input class="form-control" type="text" name="source[]" placeholder="sumber">
        </div>
      </div>
      <hr>
    </div>
  </div>
  <div class="inputs">
  </div>
  <button type="button" class="btn btn-default" id="more">more </button>
  {{csrf_field()}}
  <button type="submit" class="btn btn-default">submit</button>
</form>
<div class="template" hidden>
  <div class="col-md-12">
    <div class="col-md-4">
      <input hidden type="text" value="{{$id}}" name="id">
      <div class="form-group">
        <div class="form-group">
          <label>Program kandidat : </label><input class="form-control" type="text" name="program[]" placeholder="program">
        </div>
        <div class="form-group">
          <label> Sumber : </label><input class="form-control" type="text" name="source[]" placeholder="sumber">
        </div>
      </div>
      <hr>
    </div>
  </div>
  <div class="inputs">
  </div>
</div>
@endsection
@section('js')
<script>
  $('#more').click(function() {
    input = $('.form-horizontal').find('div.inputs');
    input.html($(".inputs").html()+$(".template").html());
    input.attr('class','ex')
  });
</script>
@endsection
