@extends('home')
@section('content')
     <head>
	<style type="text/css">
		label
		{
			margin-left: 5px;
		}
	</style>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<body>   
	<form method="post" action="/admin/announcement/update/{{$data[0]->id}}" class="form" accept-charset="UTF-8" enctype="multipart/form-data" style="margin-top: 0"> 
   <input type="text" name="title" placeholder="Title" value="{{$data[0]->title}}"><br>
   <input type="text" name="content" placeholder="Content" value="{{$data[0]->content}}">
   <p>Date: <input type="text" name="date" id="datepicker" value="{{$data[0]->date}}"></p>
   <br>
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
   @if($data[0]->dir!="null")
   <a href="{{URL::asset($data[0]->dir)}}">See attachment</a>
   @endif
   <p>Change attachment: <input type="file" name="file"></p>
   <input type="submit" class="btn btn-sm btn-primary">	
   </form>

  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>

</body>

@endsection