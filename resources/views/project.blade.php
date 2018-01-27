 @extends('layouts.default')

 @section('project')
 <style type="text/css">
 	.row
 	{
 		margin-top: 10px;
 	}
 	img
 	{
 	  max-width: 500px;
 	}
 	h3
 	{
 		margin-bottom: 10px;
 		text-align: center;
 	}
 </style>
 @endsection

 @section('content')
  
      <div class="container">

      <!-- Page Heading -->
      <!-- Project One -->
      @foreach($data as $data)
      <div class="row">
        <div class="col-md-7">
          <a href="#">
            <img src="{{URL::asset($data->image)}}" alt="">
          </a>
        </div>
        <div class="col-md-5">
          <h3>{{$data->title}}</h3>
          <p>{{$data->description}}</p>
          <a class="btn btn-primary" href="{{$data->url}}">View Project</a>
        </div>
      </div>
      <hr>
      @endforeach
      <!-- /.row -->

      <hr>

    </div>
<script type="text/javascript">
      $(document).ready(function(){
    $('a').removeClass("active");
    $('#project').addClass("active");
});

</script>

 @endsection 