 @extends('layouts.default')



 
@section('content')

@section('gallery')


   <link rel="stylesheet" href="{{ URL::asset('gallery_asset/css/jquery.lightbox-0.5.css') }}" type="text/css">
   <link rel="stylesheet" href="{{ URL::asset('gallery_asset/css/styles.css') }}" type="text/css">
     <script src="{{ URL::asset('gallery_asset/js/jquery-1.10.1.min.js') }}"></script>                                      
    <script src="{{ URL::asset('gallery_asset/js/jquery.lightbox-0.5.min.js') }}"></script>   
 
@endsection

  <div id="w">
    <div id="content">
      <h1 id="gallery_title" style="font-size: 40px;">Gallery</h1>
      <p>Welcome to watch sample of our activity</p>
      
      <div id="thumbnails">
        <ul class="clearfix">
          <!-- source: http://dribbble.com/shots/1115721-Turntable -->
          <li><a href="images/photos/01-turntable-illustration-graphic.png" title="Turntable by Jens Kappelmann"><img src="images/photos/01-turntable-illustration-graphic-thumbnail.png" alt="turntable"></a></li>
          
          <!-- source: http://dribbble.com/shots/1115776-DIY-Robot-Kit -->
          <li><a href="images/photos/02-robot-diy-kit.png" title="DIY Robot by Jory Raphael"><img src="images/photos/02-robot-diy-kit-thumbnail.png" alt="DIY Robot Kit"></a></li>
          
          <!-- source: http://dribbble.com/shots/1115794-Todly -->
          <li><a href="images/photos/03-todly-green-monster.png" title="Todly by Scott Wetterschneider"><img src="images/photos/03-todly-green-monster-thumbnail.png" alt="Todly"></a></li>
          
          <!-- source: http://dribbble.com/shots/1115299-Legend-of-Zelda-Tea-Party -->
          <li><a href="images/photos/04-loz-tea-party.png" title="LoZ Tea Party by Joseph Le"><img src="images/photos/04-loz-tea-party-thumbnail.png" alt="legend of zelda tea party"></a></li>
          
          <!-- source: http://dribbble.com/shots/1116121-klaxon-Icon -->
          <li><a href="images/photos/05-klaxon-air-horn.png" title="Klaxon Icon by John Khester"><img src="images/photos/05-klaxon-air-horn-thumbnail.png" alt="airhorn icon"></a></li>
          
          <!-- source: http://dribbble.com/shots/1116241-Flat-Coffee -->
          <li><a href="images/photos/06-flat-coffee.png" title="Flat Coffee by Baglan Dosmagambetov"><img src="images/photos/06-flat-coffee-thumbnail.png" alt="flat coffee"></a></li>
          
          <!-- source: http://dribbble.com/shots/1116392-Creative-player-Retina -->
          <li><a href="images/photos/07-ipad-music-player.png" title="iPad Music Player by Angel Bartolli"><img src="images/photos/07-ipad-music-player-thumbnail.png" alt="player ui"></a></li>
          
          <!-- source: http://dribbble.com/shots/1115350-Extreme-Fish-Bowl -->
          <li><a href="images/photos/08-extreme-fish-bowl.png" title="Extreme Fish Bowl by Brian Franco"><img src="images/photos/08-extreme-fish-bowl-thumbnail.png" alt="extreme skateboarding fish bowl"></a></li>
          
          <!-- source: http://dribbble.com/shots/1116637-Typographic-Illustration-detail-1 -->
          <li><a href="images/photos/09-city-building-illustration.png" title="Illustration by Brandon Ancone"><img src="images/photos/09-city-building-illustration-thumbnail.png" alt="city illustration"></a></li>
          
          <!-- source: http://dribbble.com/shots/1116442-Restaurant-illustration -->
          <li><a href="images/photos/10-big-restaurant.png" title="Restaurant Illustration by Dury"><img src="images/photos/10-big-restaurant-thumbnail.png" alt="restaurant illustration"></a></li>
        </ul>
      </div>
    </div><!-- @end #content -->
  </div><!-- @end #w -->
<script type="text/javascript">
$(function() {
    $('#thumbnails a').lightBox();
});
</script>
@endsection