
<form action="{{action('CandidateController@store')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
  <div class="col-md-4">
    <div class="form-group">
      <label>Nama Calon Gubernur : </label><input class="form-control" type="text" name="head" placeholder="nama calon gubernur">
    </div>
    <div class="form-group">
            <label for="exampleInputFile" class="control-label">Photo input</label>
            <input type="file" id="exampleInputFile" name="photo-head">
    </div>
    <div class="form-group">
      <label>Nama calon Wakil : </label><input class="form-control" type="text" name="vice" placeholder="nama calon wakil">
    </div>
    <div class="form-group">
            <label for="exampleInputFile" class="control-label">Photo input</label>
            <input type="file" id="exampleInputFile" name="photo-vice">
    </div>
  </div>
{{csrf_field()}}
  <button type="submit" class="btn btn-default">submit</button>
</form>
