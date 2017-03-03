@extends('template.app')
@section('content')
<form action="{{action('TestimonyController@store')}}" method="POST" class="form-horizontal">
  <div class="col-md-4">
    <input hidden type="text" value="{{$id}}" name="id">
    <div class="form-group">
      <label>Voucher : </label><input class="form-control" type="text" name="voucher[]" placeholder="testimoni">
      <label>Tahun : </label><input type="numeric" name="year_given[]" placeholder="YYYY">
      <label>Testimoni :  <input type="text" name="testimony[]">
      <label> Sumber : </label><input class="form-control" type="text" name="source[]" placeholder="sumber">
    </div>
    <div class="form-group">
      <label>Voucher : </label><input class="form-control" type="text" name="voucher[]" placeholder="testimoni">
      <label>Tahun : </label><input type="numeric" name="year_given[]" placeholder="YYYY">
      <label>Testimoni :  <input type="text" name="testimony[]">
      <label> Sumber : </label><input class="form-control" type="text" name="source[]" placeholder="sumber">    </div>
  </div>
  <button type="button" class="btn btn-default">more </button>
  {{csrf_field()}}
  <button type="submit" class="btn btn-default">submit</button>
</form>
@endsection
@section('js')
<script>
  $('#more').click(function() {
    input = $('.form-horizontal').find('div.inputs');
    input.html($(".inputs").html()+$(".template").html());
    input.attr('class','ex')
  });
</script>
@endsection
