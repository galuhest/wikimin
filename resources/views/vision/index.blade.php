
@foreach($visions as $vision)
  <div class="col-md-4">
    <h3>{{$vision->id}}</h3>
    <p>visi : {{$vision->value}} </p>
    <p>sumber : {{$vision->source}} </p>
    <a href='{{url("/vision/$vision->id/edit")}}' class="btn btn-default">Edit</a>
    <form method="POST" action='{{url("/vision/$vision->id")}}'>
      <button type="submit" class="btn btn-default">Delete</button>
      <input type="hidden" name="_method" value="DELETE">

      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>
  </div>
@endforeach
