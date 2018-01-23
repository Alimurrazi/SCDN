 @extends('layouts.default')

@section('content')

        <div class="container">
            <div class="row">
                 
                <!-- Start Blog Body Section -->
                <div class="col-md-8 blog-body">
                    
                    <!-- Start Blog post -->
                    <div class="single-blog-post">
                        <h1 class="post-title"><a href="#">{{$data->title}}</a></h1>
                        

                    <div class="blog-post">
                        
                        <ul class="post-meta">
							<li><i class="fa fa-clock-o"></i>{{$data->created_at}}</li>
							<li><i class="fa fa-user"></i><a href="#">{{$data->author_name}}</a></li>
                            <li><i class="fa fa-tags"></i><a href="#">{{$data->tag_name}}</a></li>
				<!--			<li><i class="fa fa-comments"></i><a href="#">4 Comments</a></li>  -->
						</ul>
                        
                    </div>
                        
                        
                        <p class="post-content">{!! $data->content !!}</p>
                        
                        <div class="item-content-footer">
                            <ul>
                                <li>Read 286 times</li>
                                <li class="rating">
                                    Rate this item 
                                    <span class="active"><i class="fa fa-star-o"></i></span>
                                    <span class="active"><i class="fa fa-star-o"></i></span>
                                    <span class="active"><i class="fa fa-star-o"></i></span>
                                    <span><i class="fa fa-star-o"></i></span>
                                    <span><i class="fa fa-star-o"></i></span>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                    <!-- End Blog Post -->
                    
                    
                    <!-- Start Blog Author Section -->

                    <!-- End Blog Author Section -->
                    
                    <!-- End Comments Section -->
                    
                    
                    
                    
                </div>

<script src="https://apis.google.com/js/plusone.js"></script>
<div id="comments"></div>
<script>
gapi.comments.render('comments', {
    href: window.location,
    width: '624',
    first_party_property: 'BLOGGER',
    view_type: 'FILTERED_POSTMOD'
});
</script>

                <!-- End Blog Body Section -->                
            </div>
        </div>

<script type="text/javascript">
  $(document).ready(function(){
    //$(this).removeAttr( ".active" ); 
    $('a').removeClass("active");
    $('#blog').addClass("active");
});
</script>


@endsection