@extends('template.app')
@section('content')
<form action="{{action('EducationController@store')}}" method="POST" class="form-horizontal">
  <div class="col-md-4">
    <input hidden type="text" value="{{$id}}" name="id">
    <div class="form-group">
      <label>Institusi : </label><input class="form-control" type="text" name="institution[]" placeholder="education">
      <label>Tahun : </label><input type="numeric" name="year_start[]" placeholder="YYYY"> - <input type="numeric" name="year_end[]" placeholder="YYYY">
      <label>Jurusan/Gelar <input type="text" name="degree[]"> (kosongkan jika tidak dapat diaplikasikan)
      <label> Sumber : </label><input class="form-control" type="text" name="source[]" placeholder="sumber">
    </div>
    <div class="form-group">
      <label>Institusi : </label><input class="form-control" type="text" name="institution[]" placeholder="education">
      <label>Tahun : </label><input type="date" name="year_start[]" placeholder="YYYY"> - <input type="date" name="year_end[]" placeholder="YYYY">
      <label>Jurusan/Gelar <input type="text" name="degree[]"> (kosongkan jika tidak dapat diaplikasikan)
      <label> Sumber : </label><input class="form-control" type="text" name="source[]" placeholder="sumber">
    </div>
  </div>
  <button type="button" class="btn btn-default">more </button>
  {{csrf_field()}}
  <button type="submit" class="btn btn-default">submit</button>
</form>
@endsection
