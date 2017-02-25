
@foreach($programs as $program)
  <div class="col-md-4">
    <h3>{{$program->id}}</h3>
    <p>visi : {{$program->value}} </p>
    <p>sumber : {{$program->source}} </p>
    <a href='{{url("/program/$program->id/edit")}}' class="btn btn-default">Edit</a>
    <form method="POST" action='{{url("/program/$program->id")}}'>
      <button type="submit" class="btn btn-default">Delete</button>
      <input type="hidden" name="_method" value="DELETE">

      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>
  </div>
@endforeach
