 @extends('layouts.default')
 
 <style type="text/css">
     body
     {
        font-size: 20px;
    color: black;
  /*  font-family: 'Lora', 'Times New Roman', serif; */
     }
     p
     {
          font-size: 15px;
  color: #212529;
 /* font-family: 'Lora', 'Times New Roman', serif;*/
  line-height: 1.5;
     }
 </style>

@section('content')

 <div class="container">
            <div class="row">
                <!-- Start Blog Body Section -->
                <div class="col-md-8 blog-body">
                    
                    <!-- Start Blog post -->
                    @foreach($data as $data)
                    <div class="blog-post">
                        <h1 class="post-title" style="color: black"><a href="#">{{$data->title}}</a></h1>
                        <ul class="post-meta">
							<li><i class="fa fa-clock-o"></i>{{$data->created_at}}</li>
							<li><i class="fa fa-user"></i><a href="{{URL::asset('developer_list/specific/'.$data->author_id)}}">{{$data->author_name}}</a></li>
							<li><i class="fa fa-file"></i><a href="#">Blog</a></li>
                            <li><i class="fa fa-tags"></i><a href="#">{{$data->tag_name}}</a></li>
				<!--			<li><i class="fa fa-comments"></i><a href="#">4 Comments</a></li>  -->
						</ul>
                        
                        <p>{{$data->preview}}</p>
                        <a href="/blog/{{$data->id}}" class="btn btn-primary readmore">Read more...<i class="fa fa-angle-right"></i></a>
                    </div>
                    @endforeach
                    <!-- End Blog Post -->
                    
 
                    
                    
                    <!-- Start Pagination -->
                    <!-- End Pagination -->
                    
                </div>
                <!-- End Blog Body Section -->
                
                <!-- Start Sidebar Section -->
                <div class="col-md-4 sidebar right-sidebar">
                    
                              

                    <!-- Start Recent Post Widget -->
                    <!-- End Recent Post Widget -->
                    
                    
                    <!-- Start Blog categories widget -->
                    <div class="widget widget-categories" style="margin-top: 10px">
                        
                        <div class="section-heading-2">
                            <h3 class="section-title">
                                <span>Blog Categories</span>
                            </h3>
                        </div>
                        
                        <ul>
                         @foreach($ara as $ara)

                            <li>
                                <i class="fa fa-angle-double-right"></i>
                                <a href="{{URL::asset('/blog/tag/'.$ara->id)}}">{{$ara->name}}</a>
                                <a href="{{URL::asset('/blog/tag/'.$ara->id)}}" class="cat-counter">({{$ara->number}})</a>
                            </li>

                         @endforeach
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