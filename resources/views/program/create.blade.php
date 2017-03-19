@extends('template.app')
@section('content')
<strong>Panduan menulis</strong>:
<p>
  <code>ini &lt;strong&gt;huruf&lt;/strong&gt; tebal</code> &rarr; ini <strong>huruf</strong> tebal.
</p>
<p>
  <code>ini &lt;a href="http://tes" target="_blank"&gt;link&lt;/b&gt;</code> &rarr; ini <a href="http://tes" target="_blank">link</a></b>.
</p>
<form action="{{action('ProgramController@store')}}" method="POST" class="form-horizontal">
  <div class="col-md-12">
    <div class="col-md-4">
      <input hidden type="text" value="{{$id}}" name="id">
      <label>Topik : </label>
      <div class="form-group">
        <select name="topic[]" class="form-control">
          @foreach(\App\Topic::get() as $topic)
            <option value="{{$topic->id}}" class="form-control">{{$topic->topic}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label>Program Kandidat :</label>
        <textarea class="form-control" name="program[]" rows="5"></textarea>
      </div>
      <div class="form-group">
        <label>Sumber :</label>
        <textarea class="form-control" name="source[]" rows="3"></textarea>
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
        <label>Program Kandidat :</label>
        <textarea class="form-control" name="program[]" rows="5"></textarea>
      </div>
      <div class="form-group">
        <label>Sumber :</label>
        <textarea class="form-control" name="source[]" rows="3"></textarea>
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
