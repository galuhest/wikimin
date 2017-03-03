@extends('template.app')
@section('content')
<form action="{{action('IssueController@store')}}" method="POST" class="form-horizontal">
  <div class="col-md-12">
    <div class="col-md-4">
      <input hidden type="text" value="{{$id}}" name="id">
      <div class="form-group">
        <label>Topic : </label>
        <div class="form-group">
          <select name="topic[]" class="form-control">
            @foreach(\App\Topic::get() as $topic)
              <option value="{{$topic->id}}" class="form-control">{{$topic->topic}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <labell> Isu : </label> <input type="text" placeholder="isu" name="value[]" class="form-control">
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
        <label>Topic : </label>
        <div class="form-group">
          <select name="topic[]" class="form-control">
            @foreach(\App\Topic::get() as $topic)
              <option value="{{$topic->id}}" class="form-control">{{$topic->topic}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <labell> Isu : </label> <input type="text" placeholder="isu" name="value[]" class="form-control">
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
