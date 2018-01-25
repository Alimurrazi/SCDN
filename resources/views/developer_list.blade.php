 @extends('layouts.default')
 
 @section('developer_list')
 <style type="text/css">
 	

 html,
body {
  width: 100%;
  height: 100%;
}

body {
  font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-weight: 300;
  color: #999; 
  background-color: #fff;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  margin: 0 0 20px 0;
  text-transform: none;
  /*color: rgba(254, 82, 76, 1); */
  color: #0c769d;
  font-family: "Raleway", "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-weight: 600;
  letter-spacing: 1px;
  line-height: 1.5;
}

a:link,
a:active,
a:visited{
  color:rgba(255,255,255,1); 
/*  color: #0c769d; */
}
 
a:hover{
  color:rgba(255,255,255,0.6); 
/*  color: #0c769d; */
}

.gray {
  color: #a5a5a5;
}

.team{
  margin:40px;
}

.team-member {
  margin: 15px 0;
  padding: 0;
}

.team-member figure {
  position: relative;
  overflow: hidden;
  padding: 0;
  margin: 0;
}

.team-member figure img {
  min-width: 100%;
}

.team-member figcaption p {
  font-size: 16px;
}

.team-member figcaption ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

.team-member figcaption ul {
  visibility: visible;
  -webkit-transition: all 0.1s ease-in-out;
  -moz-transition: all 0.1s ease-in-out;
  -o-transition: all 0.1s ease-in-out;
  transition: all 0.1s ease-in-out;
}

.team-member figcaption ul li {
  display: inline-block;
  padding: 10px;
}

.team-member h4 {
  margin: 10px 0 0;
  padding: 0;
}

.team-member figcaption {
  padding: 50px;
  color: transparent;
  background-color: transparent;
  position: absolute;
  z-index: 996;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 0;
  overflow: hidden;
  visibility: hidden;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

.team-member figure:hover figcaption {
  visibility: visible;
  color: #fff;
  /*background: rgba(230, 78, 62, 0.9); */
  background: #0c769d;
  /* Primary color, can be changed via colors.css */
  
  height: 100%;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

.team-member figure:hover figcaption ul li a:hover {
  color: rgba(49, 49, 49, .97);
}

.team-member figure img {
  -webkit-transform: scale(1) rotate(0) translateY(0);
  -moz-transform: scale(1) rotate(0) translateY(0);
  -o-transform: scale(1) rotate(0) translateY(0);
  -ms-transform: scale(1) rotate(0) translateY(0);
  transform: scale(1) rotate(0) translateY(0);
  -webkit-transition: all 0.4s ease-in-out;
  -moz-transition: all 0.4s ease-in-out;
  -o-transition: all 0.4s ease-in-out;
  transition: all 0.4s ease-in-out;
}

.team-member figure:hover img {
  -webkit-transform: scale(1.1) rotate(1deg) translateY(12px);
  -moz-transform: scale(1.1) rotate(1deg) translateY(12px);
  -o-transform: scale(1.1) rotate(1deg) translateY(12px);
  -ms-transform: scale(1.1) rotate(1deg) translateY(12px);
  transform: scale(1.1) rotate(1deg) translateY(12px);
  -webkit-transition: all 0.4s ease-in-out;
  -moz-transition: all 0.4s ease-in-out;
  -o-transition: all 0.4s ease-in-out;
  transition: all 0.4s ease-in-out;
}

 </style>

 @endsection

@section('content')

<!-- Our team Section -->
<section id="team" class="team content-section">
  <div class="container">
    <div class="row text-center">
      <div class="col-md-12">
        <h2>Our Team</h2>
        <h3 class="caption gray">Meet the people who make awesome stuffs</h3>
      </div><!-- /.col-md-12 -->

      <div class="container">
        <div class="row">
          
          @foreach($data as $data)
          <div class="col-md-4">
            <div class="team-member">
              <figure>
                <img src="{{URL::asset($data->image)}}" alt="" class="img-responsive">
                <figcaption>
                  <ul>
                    <li><a href="{{$data->facebook}}"><i class="fa fa-facebook fa-2x"></i></a></li>
                    <li><a href="{{$data->twitter}}"><i class="fa fa-twitter fa-2x"></i></a></li>
                    <li><a href="{{$data->linkedin}}"><i class="fa fa-linkedin fa-2x"></i></a></li>
                  </ul>
                </figcaption>
              </figure>
        <a href="{{URL::asset('/developer_list/specific/1')}}"><h4>{$data->name}}</</h4></a>
              <p>{{$data->specialty}}</p>
            </div><!-- /.team-member-->
          </div><!-- /.col-md-4 -->
         @endforeach 


        </div><!-- /.row -->
      </div><!-- /.container -->

    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.our-team -->

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