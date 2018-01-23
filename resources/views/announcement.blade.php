@extends('layouts.default')
@section('announcement')
<style type="text/css">
 .time
 {
 	border-style: solid;
 	border-width: 2px;
 	border-color: red;
 	display: inline-block;
 	margin-right: 5px;
 	padding: 2px;

 }
 .title
 {
 	vertical-align: top;
 }
 .date
 {
 	text-align: center;
 }
 ul
 {
 	list-style-type: none;
 }
 .announcement-ul li a
 {
 	vertical-align: top;
 }
 li
 {
 	margin-top: 5px;
 	margin-bottom: 5px;
 }
</style>
@endsection

@section('content')
<div class="container">

@foreach($data as $data)

        <ul class="announcement-ul">
	 <li>
	 		 <div class="time">
 	<div class="date">10</div>
 	<div class="month">Jan 18</div>
 </div>
 <a href="/announcement/{{$data->id}}">{{$data->title}}</a>
	 </li>	
	</ul>


@endforeach

<!--
	<ul class="announcement-ul">
	 <li>
	 		 <div class="time">
 	<div class="date">04</div>
 	<div class="month">Jan 18</div>
 </div>
 <a href="www.google.com">Workshop for '14 batch</a>
	 </li>	
	</ul>

		<ul class="announcement-ul">
	 <li>
	 		 <div class="time">
 	<div class="date">04</div>
 	<div class="month">Dec 17</div>
 </div>
 <a href="www.google.com">Workshop for '13 batch</a>
	 </li>	
	</ul>

	<ul class="announcement-ul">
	 <li>
	 		 <div class="time">
 	<div class="date">24</div>
 	<div class="month">Oct 17</div>
 </div>
 <a href="www.google.com">Workshop for '13 batch</a>
	 </li>	
	</ul>
-->
</div>

<script src="{{ URL::asset('gallery_asset/js/jquery-1.10.1.min.js') }}"></script>

<script type="text/javascript">
  $(document).ready(function(){
    //$('#thumbnails a').lightBox();
    //$(this).removeAttr( ".active" ); 
    $('a').removeClass("active");
    $('#news').addClass("active");
});
</script>


@endsection