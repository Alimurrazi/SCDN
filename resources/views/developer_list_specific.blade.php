 @extends('layouts.default')
 @section('developer_list_specific')
 <style type="text/css">
.list-group-item
{
  border:0px;
  border-top: 1px solid #ddd;
}
.col-md-4 h3
{
   margin-bottom: 10px;
   text-align: center;
}
  </style>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 @endsection

 @section('content')
 <!--
<div class="container">
  <div class="row">
    <div class="col-md-6" id="pro-pic">
    	  <img src="{{URL::asset('img\developer_list\c.png')}}" style="width: 100%">
    	  <figcaption>Mr. XYZ</figcaption>
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
      <i class="fa fa-flask fa-3x"></i><h3 class="sub-title">Skill</h3>
      <h5><i class="fa fa-circle-o"></i>HTML</h5>
      <h5><i class="fa fa-circle-o"></i>CSS</h5>
      <h5><i class="fa fa-circle-o"></i>Javascript</h5>
      <h5><i class="fa fa-circle-o"></i>Laravel</h5>
    </div>
  </div>
  <div class="row">

  </div>
</div>
-->  

            <div class="container">    
                  <div class="row">
                      <div class="panel panel-default">
                       <div class="panel-body">
                      <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                       <img alt="User Pic" src="{{URL::asset($data[0]->image)}}" id="profile-image1" class="img-circle img-responsive"> 
                     
                 
                      </div>
                      <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8" >
                          <div class="container" >
                            <h2>{{$data[0]->name}}</h2>
                           
                          </div>
                           <hr>
                          <ul class="container details" >
                            <li><p><span class="glyphicon glyphicon-user one" style="width:50px;"></span><a href="{{$data[0]->website}}">{{$data[0]->website}}</a></p></li>
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span>{{$data[0]->email}}</p></li>
                          </ul>
                          <hr>
                      </div>
                </div>
            </div>
            </div>

 <div class="row">
  <div class="col-md-4">
     <h3>Experience</h3>
  <ul class="list-group list-group-flush">
  @foreach($data as $data_ex)
  <li class="list-group-item"><span>{{$data_ex->experience}}</span><br>{{$data_ex->duration}}</li>
  @endforeach
</ul>
</div>
  <div class="col-md-4">

  </div>

    <div class="col-md-4">
      <h3>Skill</h3>
      <ul class="list-group list-group-flush">
    @foreach($data_skill as $data_skill)     
  <li class="list-group-item"><span>{{$data_skill->skill}}</span></li>
  @endforeach
</ul>
  </div>

</div>

{{-- $data_blog empty naki ta check kora hoiche --}}
@if(isset($data_blog->title))  
 <div class="row">
  <div class="col-md-4">
      <h3>Blog</h3>
  <ul class="list-group list-group-flush">
  @foreach($data_blog as $data_blog)
  <li class="list-group-item"><span><a href="/blog/{{$data_blog->id}}">{{$data_blog->title}}</a></span></li>
  @endforeach
</ul>
</div>
</div>
@endif

</div>
<script src="{{ URL::asset('gallery_asset/js/jquery-1.10.1.min.js') }}"></script>

<script type="text/javascript">
  $(document).ready(function(){
    //$('#thumbnails a').lightBox();
    //$(this).removeAttr( ".active" ); 
    $('a').removeClass("active");
    $('#nav_developer').addClass("active");
});
</script>

 @endsection