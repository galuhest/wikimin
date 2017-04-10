@extends('template.app')
@section('content')

<a href='{{url("/program/".$program->candidate_id)}}' class="btn btn-primary btn-sm">Lihat Program Pasangan</a>
<hr>
<h2>Edit Program Pasangan</h2>

<div class="row">
  <div class="col-md-6">
    <form action="{{url('program/'.$program->id."/edit")}}" method="POST" class="form-horizontal">
      <div class="col-md-12">
          <input hidden type="text" value="{{$program->id}}" name="program_id">
          <div class="form-group">
            <label>Topik : </label>
            <select name="topic_id" class="form-control">
              @foreach(\App\Topic::get() as $topic)
                <option value="{{$topic->id}}" class="form-control">{{$topic->topic}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label>Judul Program:</label>
            <input class="form-control" type="text" name="title" value="{{$program->title}}">
          </div>
          <div class="form-group">
            <label>Deskripsi Program:</label>
            <textarea class="form-control" name="value" rows="5">{{$program->value}}</textarea>
          </div>
          <div class="form-group">
            <label>Sumber :</label>
            <textarea class="form-control" name="source" rows="3">{{$program->source}}</textarea>
          </div>
          <hr>
      </div>
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

@section('js')
@endsection