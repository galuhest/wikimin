
<form action="{{action('AwardController@store')}}" method="POST" class="form-horizontal">
  <div class="col-md-4">
    <input hidden type="text" value="{{$id}}" name="id">
    <div class="form-group">
      <label>Penghargaan : </label><input class="form-control" type="text" name="award[]" placeholder="testimoni">
      <label>Tahun : </label><input type="numeric" name="year_given[]" placeholder="YYYY">
      <label> Sumber : </label><input class="form-control" type="text" name="source[]" placeholder="sumber">
    </div>
    <div class="form-group">
      <label>Penghargaan : </label><input class="form-control" type="text" name="award[]" placeholder="testimoni">
      <label>Tahun : </label><input type="numeric" name="year_given[]" placeholder="YYYY">
      <label> Sumber : </label><input class="form-control" type="text" name="source[]" placeholder="sumber">
  </div>
  <button type="button" class="btn btn-default">more </button>
  {{csrf_field()}}
  <button type="submit" class="btn btn-default">submit</button>
</form>
