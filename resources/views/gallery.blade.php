 @extends('layouts.default')

@section('content')

@section('gallery')


   <link rel="stylesheet" href="{{ URL::asset('gallery_asset/css/jquery.lightbox-0.5.css') }}" type="text/css">
   <link rel="stylesheet" href="{{ URL::asset('gallery_asset/css/styles.css') }}" type="text/css">
     <script src="{{ URL::asset('gallery_asset/js/jquery-1.10.1.min.js') }}"></script>                                      
    <script src="{{ URL::asset('gallery_asset/js/jquery.lightbox-0.5.min.js') }}"></script>   
 
@endsection

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
          <li><a href="{{URL::asset($data->dir)}}" title="{{$data->description}}"><img src="{{URL::asset($data->dir)}}" alt="{{$data->description}}"></a></li>
          </div>
        @endforeach
    </div>
          <!-- 
          <li><a href="images/photos/02-robot-diy-kit.png" title="DIY Robot by Jory Raphael"><img src="images/photos/02-robot-diy-kit.png" alt="DIY Robot Kit"></a></li>
          
          <li><a href="images/photos/03-todly-green-monster.png" title="Todly by Scott Wetterschneider"><img src="images/photos/03-todly-green-monster-thumbnail.png" alt="Todly"></a></li>
          
          <li><a href="images/photos/04-loz-tea-party.png" title="LoZ Tea Party by Joseph Le"><img src="images/photos/04-loz-tea-party-thumbnail.png" alt="legend of zelda tea party"></a></li>
          
          <li><a href="images/photos/05-klaxon-air-horn.png" title="Klaxon Icon by John Khester"><img src="images/photos/05-klaxon-air-horn-thumbnail.png" alt="airhorn icon"></a></li>
          
           -->
          <!-- 
          <li><a href="images/photos/06-flat-coffee.png" title="Flat Coffee by Baglan Dosmagambetov"><img src="images/photos/06-flat-coffee-thumbnail.png" alt="flat coffee"></a></li>
          -->
          <!-- 
          <li><a href="images/photos/07-ipad-music-player.png" title="iPad Music Player by Angel Bartolli"><img src="images/photos/07-ipad-music-player-thumbnail.png" alt="player ui"></a></li>
          
          
          <li><a href="images/photos/08-extreme-fish-bowl.png" title="Extreme Fish Bowl by Brian Franco"><img src="images/photos/08-extreme-fish-bowl-thumbnail.png" alt="extreme skateboarding fish bowl"></a></li>
          
        
          <li><a href="images/photos/09-city-building-illustration.png" title="Illustration by Brandon Ancone"><img src="images/photos/09-city-building-illustration-thumbnail.png" alt="city illustration"></a></li>
          
                     <li><a href="images/photos/10-big-restaurant.png" title="Restaurant Illustration by Dury"><img src="images/photos/10-big-restaurant-thumbnail.png" alt="restaurant illustration"></a></li>
               -->
      

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