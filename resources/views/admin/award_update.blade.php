  @extends('home')

@section('content')
 <head>

 </head>
 <body>
 	<img src="{{URL::asset($data->dir)}}" id="img" style="width: 150px; height: 150px; margin-right: 25px;">
   <form method="post" action="/admin/award/update/{{$data->id}}" class="form" accept-charset="UTF-8" enctype="multipart/form-data" style="margin-top: 0"> 
   <input type="file" id="file" name="avatar" style="margin-bottom: 5px"><br>
   <div style="margin-bottom: 5px">
   	<input type="text" name="title" placeholder="give a title" value="{{$data->title}}">
   </div><br>
   <textarea type="text" name="description">{{$data->description}}</textarea>
   <br>
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

 </body>
@endsection