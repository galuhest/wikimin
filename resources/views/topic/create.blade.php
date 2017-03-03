@extends('template.app')
@section('content')
<form action="{{action('TopicController@store')}}" method="POST" class="form-horizontal">
  <div class="col-md-4">
    <div class="form-group">
      <label>Topic : </label><input class="form-control" type="text" name="topic[]" placeholder="topic">
    </div>
    <div class="form-group">
      <label>Topic : </label><input class="form-control" type="text" name="topic[]" placeholder="topic">
  </div>
  <button type="button" class="btn btn-default">more </button>
  {{csrf_field()}}
  <button type="submit" class="btn btn-default">submit</button>
</form>
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
