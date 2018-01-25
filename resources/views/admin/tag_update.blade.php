 @extends('home')
@section('content')
     <head>
	<style type="text/css">
		label
		{
			margin-left: 5px;
		}
	</style>
</head>

<body>   
	<form method="post" action="/admin/tag/update/{{$data->id}}" class="form" accept-charset="UTF-8" enctype="multipart/form-data" style="margin-top: 0"> 
   <input type="text" name="name" placeholder="Name" value="{{$data->name}}"><br>
   <input type="text" name="content" placeholder="Content" value="{{$data->content}}">
   <br>
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
   <input type="submit" class="btn btn-sm btn-primary">	
   </form>

</body>

@endsection