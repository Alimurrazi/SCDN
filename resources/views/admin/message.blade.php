 @extends('home')

@section('content')

<!DOCTYPE html>
<html>
<head>
	.<style type="text/css">
		.col-md-8
		{
			color: black;
			font-color: black;
			background-color: white;
			margin-top: 30px;
		}
		.email
		{
			margin-left: 50px;
		}
		p
		{
			color: #131010;
		}
	</style>
</head>
<body>
	@foreach($data as $data)
	<div class="container">
	<div class="row">
  <div class="col-md-2">
  </div>
  <div class="col-md-8">
  	<p class="content">{{$data->content}}</p>
  	<p class="email">- {{$data->email}}</p>
  </div>
  <div class="col-md-2">
  </div>
</div>
  <hr>
</div>
  @endforeach
</body>
</html>

@endsection