@foreach($testimonys as $testimony)
  <div class="col-md-4">
    <h3>{{$testimony->id}}</h3>
    <p>voucher : {{$testimony->voucher}} </p>
    <p>tahun : {{$testimony->year_given}} </p>
    <p>testimoni : {{$testimony->testimony}} </p>
    <p>sumber : {{$testimony->source}} </p>
    <a href='{{url("/testimony/$testimony->id/edit")}}' class="btn btn-default">Edit</a>
    <form method="POST" action='{{url("/testimony/$testimony->id")}}'>
      <button type="submit" class="btn btn-default">Delete</button>
      <input type="hidden" name="_method" value="DELETE">

      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>
  </div>
@endforeach
