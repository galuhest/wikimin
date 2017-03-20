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
          <label>Pendapat : </label>
          <textarea class="form-control" name="value[]" rows="5" placeholder="Kutipan langsung (Kasih ... di awal dan akhir)"></textarea>
        </div>
        <div class="form-group">
          <label>Ringkasan Pendapat di atas : </label>
          <input class="form-control" type="text" name="summary[]" placeholder="Maksimal tiga kata">
        </div>
        <div class="form-group">
          <label>URL Sumber : </label>
          <input class="form-control" type="text" name="source_link[]" placeholder="URL ke sumber (sudah di-archive.org-kan)">
        </div>
        <div class="form-group">
          <label>Teks Sumber : </label><input class="form-control" type="text" name="source[]" placeholder="Bagaimana pengguna membaca link di atas">
        </div>
      </div>
      <hr>
    </div>
  </div>
  <div class="inputs">
  </div>
  {{csrf_field()}}
  <button type="submit" class="btn btn-primary btn-sm">submit</button>
</form>
@endsection
