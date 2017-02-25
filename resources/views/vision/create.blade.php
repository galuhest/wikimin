
<form action="{{action('VisionController@store')}}" method="POST" class="form-horizontal">
  <div class="col-md-4">
    <div class="form-group">
      <label>Visi kandidat : </label><input class="form-control" type="text" name="visi[]" placeholder="visi">
    </div>
  </div>
  <button type="button" class="btn btn-default">more </button>
  {{csrf_field()}}
  <button type="submit" class="btn btn-default">submit</button>
</form>
