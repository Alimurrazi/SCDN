<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="{{ URL::asset('asset/bootstrap/css/bootstrap.min.css') }}" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/summernote.css')}}">
	<script type="text/javascript" src={{URL::asset('js/summernote.min.js')}}></script>
	</head>
<body>

 <form>
 <div class="box-body">
 <div class="form-group">
 <label>Title</label>
 <input type="text" name="title" class="form-control">
 </div>
 <div class="form-group">
 	<textarea class="form-control" placeholder="Content" id="technig">
 		
 	</textarea>
 </div>
 <div class="form-group">
 	<button class="btn btn-primary btn-sm">Submit</button>
  </div>
 </form>
 <script type="text/javascript">
        $(document).ready(function() {
            $('#technig').summernote({
              height:300,
            });
        });
 </script>
</body>
</html>