 @extends('layouts.default')

@section('gallery')

   <link rel="stylesheet" href="{{ URL::asset('gallery_asset/css/jquery.lightbox-0.5.css') }}" type="text/css">
   <link rel="stylesheet" href="{{ URL::asset('gallery_asset/css/styles.css') }}" type="text/css">
     <script src="{{ URL::asset('gallery_asset/js/jquery-1.10.1.min.js') }}"></script>                                      
    <script src="{{ URL::asset('gallery_asset/js/jquery.lightbox-0.5.min.js') }}"></script>   
 
@endsection

@section('content')

  <div id="w" class="container">
    <div id="content"> 
      <h1 id="gallery_title" style="font-size: 40px;">Gallery</h1>
      <p style="font-size: 20px;text-align: center;">Welcome to watch sample of our activity</p>
      
      <div id="thumbnails">
                <ul class="clearfix">
        <div class="row">
        @foreach($data as $data)
        <div class="col-sm-4">
          <!-- source: http://dribbble.com/shots/1115721-Turntable -->
          <li><a href="{{URL::asset($data->dir)}}" title="{{$data->description}}"><img class="gallery_image" src="{{URL::asset($data->dir)}}" alt="{{$data->description}}"></a></li>
          </div>
        @endforeach
    </div>

        </ul>
      </div>
    </div><!-- @end #content -->
  </div><!-- @end #w -->
<script type="text/javascript">
  $(document).ready(function(){
    $('#thumbnails a').lightBox();
    //$(this).removeAttr( ".active" ); 
    $('a').removeClass("active");
    $('#nav_gallery').addClass("active");
    $('.gallery_image').click(function(){
       console.log("hello");
       document.body.scrollTop = document.body.scrollHeight
       //window.scrollTo(0,document.body.scrollHeight);
    });
});

</script>
@endsection