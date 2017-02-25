
@foreach($candidates as $candidate)
  <div class="col-md-6">
    <form method="POST" action='{{url("/candidate/$candidate->id")}}'>
      <button type="submit" class="btn btn-default">Delete</button>
      <input type="hidden" name="_method" value="DELETE">

      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>
    <a class="btn btn-default" href='{{url("/candidate/$candidate->id/edit")}}'>Edit</a>
    <!-- <img src='{{asset("app/photo/$candidate->name_head")}}'>
    <img src='{{asset("app/photo/$candidate->name_vice")}}'> -->
    <p>Nama Calon Gubernur : {{\App\Person::where('id','=',$candidate->head_id)->first()->name}}</p>
    <p>Nama Calon Wakil : {{\App\Person::where('id','=',$candidate->vice_id)->first()->name}}</p>

  </div>
@endforeach
