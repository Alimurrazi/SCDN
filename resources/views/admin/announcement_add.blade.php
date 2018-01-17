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
	<div class="container">
 <form method="post" action="/admin/announcement/add" class="form" accept-charset="UTF-8" enctype="multipart/form-data" style="margin-top: 0">
   <label>Title</label><input type="text" name="title" placeholder="Title"><br>
   <label>Content</label><input type="text" name="content" placeholder="Content"><br>
   <label>Attacement</label><input type="file" name="file[]">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
   <button type="submit">Submit</button>
 </form>
</div>
</body>
@endsection