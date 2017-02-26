
<form action="{{action('IssueController@store')}}" method="POST" class="form-horizontal">
  <div class="col-md-4">
    <input hidden type="text" value="{{$id}}" name="id">
    <div class="form-group">
      <label>Topic : </label>
      <select name="topic[]">
        @foreach(\App\Topic::get() as $topic)
          <option value="{{$topic->id}}">{{$topic->topic}}</option>
        @endforeach
      </select>
      <labell> Isu : </label> <input type="text" placeholder="isu" name="value[]">
      <label> Sumber : </label><input class="form-control" type="text" name="source[]" placeholder="sumber">
    </div>
    <div class="form-group">
      <label>Topic : </label>
      <select name="topic[]">
        @foreach(\App\Topic::get() as $topic)
          <option value="{{$topic->id}}">{{$topic->topic}}</option>
        @endforeach
      </select>
      <labell> Isu : </label> <input type="text" placeholder="isu" name="value[]">
      <label> Sumber : </label><input class="form-control" type="text" name="source[]" placeholder="sumber">
    </div>
  </div>
  <button type="button" class="btn btn-default">more </button>
  {{csrf_field()}}
  <button type="submit" class="btn btn-default">submit</button>
</form>
