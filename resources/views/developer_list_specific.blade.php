 @extends('layouts.default')
 @section('developer_list_specific')
 <style type="text/css">
  .container
  {
  	margin-top: 5px;
  	margin-bottom: 10px;
  }
  #about
  {
  	margin-top: 10%;
  }
  .fa-circle-o
  {
  	padding-right: 5px;
  	color: green;
  }
  #pro-pic
  {
  	margin-bottom: 15px;
  }
  .sub-title
  {
  	margin-bottom: 5px;
  }
  .sub-section
  {
  	margin-bottom: 5px;
  }
  figcaption
  {
  	text-align: center;
  	size: 15px;
  }
 </style>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 @endsection

 @section('content')
<div class="container">
  <div class="row">
    <div class="col-md-6" id="pro-pic">
    	  <img src="{{URL::asset('img\developer_list\rana.jpg')}}" style="width: 100%">
    	  <figcaption>Alimur Razi Rana</figcaption>
    </div>
    <div class="col-md-6" id="about">
      <p><h5>Email:</h5> alimurrazi570@gmail.com</p>
      <p><h5>Website:</h5> www.alimurraziblog.wordpress.com</p>
      <p><h5>interests:</h5> reading book</p>
    </div>
  </div>
  <div class="row">
  	<div class="col-md-6">
  	  <i class="fa fa-file-text fa-3x"></i><h3 class="sub-title">Experience</h3>
  	  <div class="sub-section">
  	  <h5><i class="fa fa-circle-o"></i>Internship at RDM</h5>
  	  <h6>2013-2014</h6>
  	  </div>
  	</div>
  	<div class="col-md-6">
  		<i class="fa fa-graduation-cap fa-3x"></i><h3 class="sub-title">Education</h3>
  		<div class="sub-section">
        <h5><i class="fa fa-circle-o"></i>Study Honors at SUST</h5>
  		<h6>2013-</h6>
  	    </div>
  	    <div class="sub-section">
  		<h5><i class="fa fa-circle-o"></i>Complete LICT Programme</h5>
  		<h6>2015-2016</h6>
  	    </div>
  	</div>
  </div>
  <div class="row">
  	<div class="col-md-6">
  		<i class="fa fa-flask fa-3x"></i><h3 class="sub-title">Skill</h3>
  		<h5><i class="fa fa-circle-o"></i>HTML</h5>
  		<h5><i class="fa fa-circle-o"></i>CSS</h5>
  		<h5><i class="fa fa-circle-o"></i>Javascript</h5>
  		<h5><i class="fa fa-circle-o"></i>Laravel</h5>
  	</div>
  </div>
</div>
  

<!--
  <div class="container">
  	<div class="row">
  		<div class="col-md-6" id="profile_pic">
  			<img src="{{URL::asset('img\developer_list\rana.jpg')}}">
  		</div>
  		<div class="col-md-6" id="about">
  			<p>Email:</p>
  			<p>Website:</p>
  			<p>interests:</p>
  		</div>

  	</div>
  	
  </div>
-->
<script type="text/javascript">
	    $('a').removeClass("active");
    $('#nav_developer').addClass("active");
</script>
 @endsection