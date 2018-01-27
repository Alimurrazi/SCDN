 @extends('layouts.default')

@section('blog_specific')

<style type="text/css">

body {
  font-size: 20px;
  color: #212529;
  font-family: 'Lora', 'Times New Roman', serif;
  line-height: 1.5;
}

p {
  line-height: 1.5;
  margin: 30px 0;
  color: #000;
}

header.masthead {
  margin-bottom: 50px;
  background: no-repeat center center;
  background-color: #868e96;
  background-attachment: scroll;
  position: relative;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

header.masthead .overlay {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background-color: #212529;
  opacity: 0.5;
}

header.masthead .page-heading,
header.masthead .post-heading,
header.masthead .site-heading {
  padding: 200px 0 150px;
  color: white;
}

@media only screen and (min-width: 768px) {
  header.masthead .page-heading,
  header.masthead .post-heading,
  header.masthead .site-heading {
    padding: 200px 0;
  }
}

header.masthead .page-heading,
header.masthead .site-heading {
  text-align: center;
}

header.masthead .page-heading h1,
header.masthead .site-heading h1 {
  font-size: 50px;
  margin-top: 0;
}

header.masthead .page-heading .subheading,
header.masthead .site-heading .subheading {
  font-size: 24px;
  font-weight: 300;
  line-height: 1.1;
  display: block;
  margin: 10px 0 0;
  font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
}

@media only screen and (min-width: 768px) {
  header.masthead .page-heading h1,
  header.masthead .site-heading h1 {
    font-size: 80px;
  }
}

header.masthead .post-heading h1 {
  font-size: 35px;
}

header.masthead .post-heading .meta,
header.masthead .post-heading .subheading {
  line-height: 1.1;
  display: block;
}

header.masthead .post-heading .subheading {
  font-size: 24px;
  font-weight: 600;
  margin: 10px 0 30px;
  font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
}

header.masthead .post-heading .meta {
  font-size: 20px;
  font-weight: 300;
  font-style: italic;
  font-family: 'Lora', 'Times New Roman', serif;
}

header.masthead .post-heading .meta a {
  color: #fff;
}

@media only screen and (min-width: 768px) {
  header.masthead .post-heading h1 {
    font-size: 55px;
  }
  header.masthead .post-heading .subheading {
    font-size: 30px;
  }
}	

h1,
h2,
h3,
h4,
h5,
h6 {
  font-weight: 800;
  font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
}

.share
{
	margin-bottom: 20px;
}

.fb-comments
{
  text-align: center;
}

</style>

@endsection

@section('content')
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>





    <header class="masthead" style="background-image: url('img/post-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h1>{{$data->title}}</h1>
              <h2 class="subheading"></h2> 
              <span class="meta">Posted by
                <a href="{{URL::asset('/developer_list/specific/'.$data->author_id)}}" style="color: orange">{{$data->author_name}}</a> 
                on {{$data->created_at}}</span>
            </div>
          </div>
        </div>
      </div>
    </header>

<article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">

   <p> {!! $data->content !!} </p>
        
        </div>
        </div>
      </div>
</article>
<hr>
 
      <div class="share">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 col-md-3 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
              	<a href="#">
              	 <span class="twitter-share" data-js="twitter-share">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
              </span>
          </a>
              </li>
              <li class="list-inline-item">
              	<a href="#">
                <span class="facebook-share" data-js="facebook-share">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
               </span>
           </a>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
  </div>
<hr>

<div class="row">
<div class="col-md-2 col-md-offset-3">
<div class="fb-comments" data-href="{{URL::asset('SCDN/blog/'.$data->id)}}" data-numposts="5"></div>
</div>
</div>


<script type="text/javascript">
  $(document).ready(function(){
    //$(this).removeAttr( ".active" ); 
    $('a').removeClass("active");
    $('#blog').addClass("active");
});

var twitterShare = document.querySelector('[data-js="twitter-share"]');

twitterShare.onclick = function(e) {
  e.preventDefault();
  var twitterWindow = window.open('https://twitter.com/share?url=' + document.URL, 'twitter-popup', 'height=350,width=600');
  if(twitterWindow.focus) { twitterWindow.focus(); }
    return false;
  }

var facebookShare = document.querySelector('[data-js="facebook-share"]');

facebookShare.onclick = function(e) {
  e.preventDefault();
  var facebookWindow = window.open('https://www.facebook.com/sharer/sharer.php?u=' + document.URL, 'facebook-popup', 'height=350,width=600');
  if(facebookWindow.focus) { facebookWindow.focus(); }
    return false;
}

</script>
@endsection    
