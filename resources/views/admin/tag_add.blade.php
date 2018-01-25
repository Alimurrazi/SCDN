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
 <form method="post" action="/admin/tag/add" class="form" accept-charset="UTF-8" enctype="multipart/form-data" style="margin-top: 0">
   <label>Name</label><input type="text" name="name" placeholder="Name"><br>
   <label>Content</label><input type="text" name="content" placeholder="Content"><br>
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
   <button type="submit">Submit</button>
 </form>
</div>

</body>
@endsection