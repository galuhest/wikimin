@extends('template.app')
@section('content')
<form action="{{action('AwardController@store')}}" method="POST" class="form-horizontal">
  <div class="col-md-12">
    <div class="col-md-4">
      <input hidden type="text" value="{{$id}}" name="id">
      <div class="form-group">
        <div class="form-group">
          <label>Penghargaan : </label><input class="form-control" type="text" name="award[]" placeholder="testimoni">
        </div>
        <div class="form-group">
          <label>Tahun : </label><input class="form-control" type="numeric" name="year_given[]" placeholder="YYYY">
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
<div hidden class="template">
  <div class="col-md-12">
    <div class="col-md-4">
      <input hidden type="text" value="{{$id}}" name="id">
      <div class="form-group">
        <div class="form-group">
          <label>Penghargaan : </label><input class="form-control" type="text" name="award[]" placeholder="testimoni">
        </div>
        <div class="form-group">
          <label>Tahun : </label><input class="form-control" type="numeric" name="year_given[]" placeholder="YYYY">
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
