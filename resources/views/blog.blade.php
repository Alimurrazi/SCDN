 @extends('layouts.default')

@section('content')

 <div class="container">
            <div class="row">
                
                <!-- Start Blog Body Section -->
                <div class="col-md-8 blog-body">
                    
                    <!-- Start Blog post -->
                    @foreach($data as $data)
                    <div class="blog-post">
                        <h1 class="post-title"><a href="#">{{$data->title}}</a></h1>
                        
                        <ul class="post-meta">
							<li><i class="fa fa-clock-o"></i>{{$data->created_at}}</li>
							<li><i class="fa fa-user"></i><a href="#">{{$data->author_name}}</a></li>
							<li><i class="fa fa-file"></i><a href="#">Blog</a></li>
                            <li><i class="fa fa-tags"></i><a href="#">{{$data->tag_name}}</a></li>
				<!--			<li><i class="fa fa-comments"></i><a href="#">4 Comments</a></li>  -->
						</ul>
                        
                        <p class="post-content">{{$data->preview}}</p>
                        <a href="/blog/{{$data->id}}" class="btn btn-primary readmore">Read more...<i class="fa fa-angle-right"></i></a>
                    </div>
                    @endforeach
                    <!-- End Blog Post -->
                    
 
                    
                    
                    <!-- Start Pagination -->
                    <nav>
                        <ul class="pagination">
                            <li class="disabled"><a href="#" aria-label="Start">Start</a></li>
                            <li class="disabled"><a href="#" aria-label="Previous">Prev</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">Next</a></li>
                            <li><a href="#">End</a></li>
                        </ul>
                    </nav>
                    <!-- End Pagination -->
                    
                </div>
                <!-- End Blog Body Section -->
                
                <!-- Start Sidebar Section -->
                <div class="col-md-4 sidebar right-sidebar">
                    
                              

                    <!-- Start Recent Post Widget -->
                    <div class="widget widget-recent-post">
                        
                        <div class="section-heading-2">
                            <h3 class="section-title">
                                <span>Recent Post</span>
                            </h3>
                        </div>
                        
                        <div class="media">
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#">Nulla facilisi integer lacinia sollicitudin massa</a></h4>
                                <ul>
                                    <li><a href="#">Super User</a></li>
                                    <li>15 October 2014</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="media">
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#">Quisque cursus metus vitae pharetra auctor sem massa</a></h4>
                                <ul>
                                    <li><a href="#">Super User</a></li>
                                    <li>15 October 2014</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="media">
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#">Praesent libero sed cursus ante dapibus diam</a></h4>
                                <ul>
                                    <li><a href="#">Super User</a></li>
                                    <li>15 October 2014</li>
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                    <!-- End Recent Post Widget -->
                    
                    
                    <!-- Start Blog categories widget -->
                    <div class="widget widget-categories">
                        
                        <div class="section-heading-2">
                            <h3 class="section-title">
                                <span>Blog Categories</span>
                            </h3>
                        </div>
                        
                        <ul>
                            <li>
                                <i class="fa fa-angle-double-right"></i>
                                <a href="#">Blog</a>
                                <a href="#" class="cat-counter">(4)</a>
                            </li>
                            <li>
                                <i class="fa fa-angle-double-right"></i>
                                <a href="#">News</a>
                                <a href="#" class="cat-counter">(0)</a>
                            </li>
                            <li>
                                <i class="fa fa-angle-double-right"></i>
                                <a href="#">Charity</a>
                                <a href="#" class="cat-counter">(0)</a>
                            </li>
                            <li>
                                <i class="fa fa-angle-double-right"></i>
                                <a href="#">Fashion</a>
                                <a href="#" class="cat-counter">(0)</a>
                            </li>
                        </ul>
                        
                    </div>
                    <!-- End Blog categories widget -->                    
                    
                    
                </div>
                <!-- End Sidebar Section -->
                
            </div>
        </div>
        <!-- End Blog Page Section -->

<script type="text/javascript">
  $(document).ready(function(){
    //$(this).removeAttr( ".active" ); 
    $('a').removeClass("active");
    $('#blog').addClass("active");
});
</script>

@endsection