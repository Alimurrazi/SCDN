 @extends('layouts.default')

 @section('gallery') 
    <!-- stylesheets --> 
        <link media="all" type="text/css" rel="stylesheet" href="assets/css/base.css">

    <!--<link media="all" type="text/css" rel="stylesheet" href="carnival_assets/css/bootstrap.min.css"> -->

    <link media="all" type="text/css" rel="stylesheet" href="carnival_assets/css/font-awesome.min.css">

    <link media="all" type="text/css" rel="stylesheet" href="carnival_assets/css/owl.carousel.css">

    <link media="all" type="text/css" rel="stylesheet" href="carnival_assets/css/owl.theme.css">

    <link media="all" type="text/css" rel="stylesheet" href="carnival_assets/css/jquery.fancybox.min.css">

   <!-- <link media="all" type="text/css" rel="stylesheet" href="carnival_assets/css/style.css"> -->

    
    <!-- scripts -->
   <!-- <script src="https://maps.googleapis.com/maps/api/js"></script> -->

    <style type="text/css">
      .navbar-default .navbar-nav > li > a.active, 
.navbar-default .navbar-nav > li:hover > a {
  border-top: 2px solid #0c769d; /* #FF432E; */
    color: #fff;
   /* background: #FF432E; */
    background: #0c769d;
    //padding: 25px 15px 30px;
}
    
    .gallery-header
    {
      text-align: center;
    }
    .gallery-header h2
    {
      font-size: 50px;
      color: #0c769d;
    }
    .gallery-header h4
    {
      color: #0c769d;
    }
    
    .page-main
    {
      margin-bottom: 10px;
    }

    </style>

@endsection

@section('content')
    <div class="container">
           <div class="gallery-header">
             <h2 id="title">Gallery</h2>
             <h5 id="sub-title">Welcome to see our activity</h5>
           </div>
    <div >
      <div class="page-main no-side">
        <!-- Gallery wrapper -->  
        <div class="grid-portfolio tj-lightbox-gallery no-padding same-ratio-items">


          <!-- Gallery Item --> 
          @foreach($data as $data)
          <div class="gp-item tj-hover-5 reverse">
            <a href="{{URL::asset($data->dir)}}"  class="lightbox-gallery-item">
              <img src="{{URL::asset($data->dir)}}" alt="alt" class="img-responsive">
              <!-- Item Overlay --> 
              <div class="tj-overlay"></div>
              <!-- /Item Overlay -->  
            </a>
          </div>
          @endforeach
          <!-- /Gallery Item -->


            
        



        </div>
        <!-- /Gallery wrapper --> 
      </div>
    </div>
  </div>



  <!-- jquery core -->
  <script type="text/javascript" src="assets/js/vendors/jquery-1.11.0.min.js"></script>

  <!-- imagesLoaded jquery plugin -->
  <script type="text/javascript" src="assets/js/vendors/imagesloaded.pkgd.min.js"></script>

  <!-- jquery isotop plugin -->
  <script type="text/javascript" src="assets/js/vendors/isotope.pkgd.min.js"></script>

  <!-- jquery history neede for ajax pages -->
  <script type="text/javascript" src="assets/js/vendors/jquery.history.js"></script>

  <!-- owwwlab jquery kenburn slider plugin -->
  <script type="text/javascript" src="assets/js/jquery.owwwlab-kenburns.js"></script>

  <!-- owwwlab jquery double carousel plugin -->
  <script type="text/javascript" src="assets/js/jquery.owwwlab-DoubleCarousel.js"></script>

  <!-- owwwwlab jquery video background plugin -->
  <script type="text/javascript" src="assets/js/jquery.owwwlab-video.js"></script>

  <!-- tweenmax animation framework -->
  <script type="text/javascript" src="assets/js/vendors/TweenMax.min.js"></script>

  <!-- jquery nice scroll plugin needed for vertical portfolio page -->
  <script type="text/javascript" src="assets/js/vendors/jquery.nicescroll.min.js"></script>

  <!-- jquery magnific popup needed for ligh-boxes -->
  <script type="text/javascript" src="assets/js/vendors/jquery.magnific-popup.js"></script>

  <!-- html5 media player -->
  <script type="text/javascript" src="assets/js/vendors/mediaelement-and-player.min.js"></script>

  <!-- jquery inview plugin -->
  <script type="text/javascript" src="assets/js/vendors/jquery.inview.min.js"></script>

  <!-- smooth scroll -->
  <script type="text/javascript" src="assets/js/vendors/smoothscroll.js"></script>



  <!-- Master Slider -->
  <script src="assets/masterslider/jquery.easing.min.js"></script>
  <script src="assets/masterslider/masterslider.min.js"></script>

  <!-- theme custom scripts -->
  <script type="text/javascript" src="assets/js/custom.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
    //$('#thumbnails a').lightBox();
    //$(this).removeAttr( ".active" ); 
    $('a').removeClass("active");
    $('#nav_gallery').addClass("active");
});
</script>

@endsection