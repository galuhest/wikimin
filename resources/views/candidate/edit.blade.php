
<form action='{{url("/candidate/$candidate->id")}}' method="POST" enctype="multipart/form-data" class="form-horizontal">
  <div class="col-md-4">
    <div class="form-group">
      <label>Nama Calon Gubernur : </label><input class="form-control" type="text" name="head" value="{{\App\Person::where('id','=',$candidate->head_id)->first()->name}}">
    </div>
    <div class="form-group">
      <label>Nama calon Wakil : </label><input class="form-control" type="text" name="vice" value="{{\App\Person::where('id','=',$candidate->vice_id)->first()->name}}">
    </div>
  </div>
  <input type="hidden" name="_method" value="PUT">
{{csrf_field()}}
  <button type="submit" class="btn btn-default">submit</button>
</form>
