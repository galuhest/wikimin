@foreach($awards as $award)
  <div class="col-md-4">
    <h3>{{$award->id}}</h3>
    <p>Penghargaan : {{$award->award}} </p>
    <p>tahun : {{$award->year_given}} </p>
    <p>sumber : {{$award->source}} </p>
    <a href='{{url("/award/$award->id/edit")}}' class="btn btn-default">Edit</a>
    <form method="POST" action='{{url("/award/$award->id")}}'>
      <button type="submit" class="btn btn-default">Delete</button>
      <input type="hidden" name="_method" value="DELETE">

      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>
  </div>
@endforeach
