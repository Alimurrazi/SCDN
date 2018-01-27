@extends('layouts.default')
 @section('announcement_specific')
 <style type="text/css">
 h1,h2,h3,h4,h5,h6,p
 {
 	font-family: Open Sans, sans-serif;
    font-weight: normal;
 }
 	h2
 	{
 		text-align: center;
 		font-family:  serif;
        margin-top: 10px;
        margin-bottom: 10px;
        color:  #428bca
 	}
 	h3
 	{
 		text-align: justify;
 		font-size: 22px;
 		margin-bottom: 20px;
 	}
 	h4
 	{
 		margin-bottom: 20px;
 		font-size: 15px;
 	}
 	p
 	{
 		margin: 0 0 10px;
 	}
 	.btn-primary
 	{
 		margin-bottom: 10px;
 		background-color: #428bca;
 		border-color: #357ebd;
 	}
 </style>
 @endsection
 @section('content')
 <div class="container">
 	<h2>Announcement</h2>
 	<h3>{{$data->title}}</h3>
 	<h4>Date: {{$data->date}}</h4>
    <p>{{$data->content}}</p>
    <div>
    	<!--
    	<button class="btn btn-primary" style="background-color: #428bca;border-color: #357ebd"><a href="www.google.com"></a> View Attachment</button>
        -->
 
    <!--	<a href="/attachment/{{$data->id}}" class="btn btn-primary">View Attachment</a> -->
         @if($data->dir!="null")
    	<a href="{{URL::asset($data->dir)}}" class="btn btn-primary">View Attachment</a>
        @endif
    </div>
 </div>

<script type="text/javascript">
  $(document).ready(function(){
    //$('#thumbnails a').lightBox();
    //$(this).removeAttr( ".active" ); 
    $('a').removeClass("active");
    $('#news').addClass("active");
});
</script>

 @endsection
