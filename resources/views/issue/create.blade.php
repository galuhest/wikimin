@extends('template.app')
@section('content')
<form action="{{action('IssueController@store')}}" method="POST" class="form-horizontal">
  <div class="col-md-12">
    <div class="col-md-4">
      <input hidden type="text" value="{{$id}}" name="id">
      <div class="form-group">
        <label>Topik : </label>
        <div class="form-group">
          <select name="topic[]" class="form-control">
            @foreach(\App\Topic::get() as $topic)
              <option value="{{$topic->id}}" class="form-control">{{$topic->topic}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label> Pendapat : </label> <input type="text" placeholder="Tuliskan kutipan langsung orang tersebut" name="value[]" class="form-control">
        </div>
        <div class="form-group">
          <label> URL Sumber : </label><input class="form-control" type="text" name="source_link[]" placeholder="URL ke sumber (sudah di-archive.org-kan)">
        </div>
        <div class="form-group">
          <label> Teks Sumber : </label><input class="form-control" type="text" name="source[]" placeholder="Bagaimana pengguna membaca link di atas">
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
        <label>Topik : </label>
        <div class="form-group">
          <select name="topic[]" class="form-control">
            @foreach(\App\Topic::get() as $topic)
              <option value="{{$topic->id}}" class="form-control">{{$topic->topic}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label> Pendapat : </label> <input type="text" placeholder="Tuliskan kutipan langsung orang tersebut" name="value[]" class="form-control">
        </div>
        <div class="form-group">
          <label> URL Sumber : </label><input class="form-control" type="text" name="source_link[]" placeholder="URL ke sumber (sudah di-archive.org-kan)">
        </div>
        <div class="form-group">
          <label> Teks Sumber : </label><input class="form-control" type="text" name="source[]" placeholder="Bagaimana pengguna membaca link di atas">
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
