@extends('template.app')
@section('content')

<a href='{{url("/program/".$id)}}' class="btn btn-primary btn-sm">Lihat Program Pasangan</a>
<hr>
<h2>Tambah Program Pasangan</h2>

<div class="row">
  <div class="col-md-6">
    <form action="{{action('ProgramController@store')}}" method="POST" class="form-horizontal">
        <input hidden type="text" value="{{$id}}" name="id">
        <div class="form-group">
          <label class="control-label">Topik : </label>
          <select name="topic[]" class="form-control">
            @foreach(\App\Topic::get() as $topic)
              <option value="{{$topic->id}}" class="form-control">{{$topic->topic}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label>Judul Program:</label>
          <input class="form-control" type="text" name="title[]">
        </div>
        <div class="form-group">
          <label>Deskripsi Program (Jangan tulis judul lagi):</label>
          <textarea class="form-control" name="program[]" rows="5"></textarea>
        </div>
        <div class="form-group">
          <label>Sumber :</label>
          <textarea class="form-control" name="source[]" rows="3"></textarea>
        </div>
        <hr>
          {{csrf_field()}}
      <button type="submit" class="btn btn-primary btn-sm">submit</button>
    </form>
  </div>
  <div class="col-md-6">
    @component('component.petunjuk-tulis-html')
    @endcomponent
  </div>
</div>
@endsection

