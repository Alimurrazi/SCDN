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
	<div class="container">
 <form method="post" action="/admin/announcement/add" class="form" accept-charset="UTF-8" enctype="multipart/form-data" style="margin-top: 0">
   <label>Title</label><input type="text" name="title" placeholder="Title"><br>
   <label>Content</label><input type="text" name="content" placeholder="Content"><br>
   <p>Date: <input type="text" name="date" id="datepicker"></p>
   <label>Attacement</label><input type="file" name="file">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
   <button type="submit">Submit</button>
 </form>
</div>

  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>

</body>
@endsection