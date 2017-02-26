
@foreach($issues as $issue)
  <div class="col-md-4">
    <h3>{{$issue->id}}</h3>
    <p>topic : {{$issue->topic}} </p>
    <p>isu : {{$issue->value}}</p>
    <p>sumber : {{$issue->source}} </p>
    <a href='{{url("/issue/$issue->id/edit")}}' class="btn btn-default">Edit</a>
    <form method="POST" action='{{url("/issue/$issue->id")}}'>
      <button type="submit" class="btn btn-default">Delete</button>
      <input type="hidden" name="_method" value="DELETE">

      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>
  </div>
@endforeach
