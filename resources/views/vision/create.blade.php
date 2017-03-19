@extends('template.app')
@section('content')
<strong>Panduan menulis</strong>:
<p>
  <code>ini &lt;strong&gt;huruf&lt;/strong&gt; tebal</code> &rarr; ini <strong>huruf</strong> tebal.
</p>
<p>
  <code>ini &lt;a href="http://tes" target="_blank"&gt;link&lt;/b&gt;</code> &rarr; ini <a href="http://tes" target="_blank">link</a></b>.
</p>
<form action="{{action('VisionController@store')}}" method="POST" class="form-horizontal">
  <div class="col-md-12">
    <div class="col-md-4">
      <input hidden type="text" value="{{$id}}" name="id">
      <div class="form-group">
        <label>Visi kandidat : </label>
        <textarea class="form-control" name="visi[]" rows="5"></textarea>
        <label>Sumber : </label>
        <textarea class="form-control" name="source[]" rows="3"></textarea>
      </div>
    </div>
  </div>
  {{csrf_field()}}
  <button type="submit" class="btn btn-default">submit</button>
</form>
@endsection
