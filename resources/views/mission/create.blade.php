@extends('template.app')
@section('content')

@component('component.petunjuk-tulis-html')
@endcomponent

<form action="{{action('MissionController@store')}}" method="POST" class="form-horizontal">
  <div class="col-md-12">
    <div class="col-md-4">
      <input hidden type="text" value="{{$id}}" name="id">
      <div class="form-group">
        <label>Misi Kandidat :</label>
        <textarea class="form-control" name="misi[]" rows="5"></textarea>
      </div>
      <div class="form-group">
        <label>URL Sumber : </label>
        <textarea class="form-control" name="source_link[]" rows="3" placeholder="Link URL (kalau alamat website, harus di-archive.org-kan dulu)..."></textarea>
      </div>
      <div class="form-group">  
        <label>Sumber : </label>
        <input class="form-control" type="text" name="source[]" placeholder="sumber">
      </div>
    </div>
  </div>
  {{csrf_field()}}
  <button type="submit" class="btn btn-default">submit</button>
</form>
@endsection
@section('js')
