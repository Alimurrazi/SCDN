 @extends('home')

@section('content')

   <img src="{{URL::asset($data->image)}}" id="img" style="width: 50%; height: 50%; margin-right: 25px;">
   <form method="post" action="/admin/project/update/{{$data->id}}" class="form" accept-charset="UTF-8" enctype="multipart/form-data" style="margin-top: 0"> 
   <input type="file" id="file" name="avatar" style="margin-bottom: 5px"><br><br>
   <input type="text" name="title" value="{{$data->title}}"><br><br>
   <input type="text" name="description" placeholder="write about the photo" value="{{$data->description}}"><br><br>
   <input type="text" name="url" placeholder="URL" value="{{$data->url}}">
   <br><br>
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
   <input type="submit" class="btn btn-sm btn-primary">	
   </form>

  <script type="text/javascript">
  function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      $('#img').attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
  }
}
$("#file").change(function() {
  readURL(this);
});
</script>

@endsection