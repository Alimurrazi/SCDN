 <head>
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<style type="text/css">
	.list-unstyled a
	{
		color: white;
	}
	img
	{
	  
	}
</style>
</head>

<body>

 <div class="container">
 	<div class="panel panel-default">
 		<div class="panel-heading"> 
             <h2>New Blog</h2> 			
 		</div>
 		<div class="panel-body">

 <form method="post" action="/admin/blog/update/{data[0]->id}" class="form" accept-charset="UTF-8" enctype="multipart/form-data" style="margin-top: 0">

 				<div class="form-group">
 					<label for="title">
 						Title
 					</label>
 			<input type="text" name="title" id="title" class="form-control" value="{{$data[0]->title}}">
 				</div>
 				
 				 <div class="form-group">
 					<label for="author">
 						Author
 					</label>
 			<!-- <input type="text" name="title" id="title" class="form-control"> <select name="tag_id[]" id="users" class="form-control" multiple="multiple">-->
 					<select name="author" id="author" class="form-control" value="{{$data[0]->author_id}}">
               </select>
 				</div>


 				<div class="form-group">
 					<label for="preview">
 						Preview
 					</label>
 					<input type="text" name="preview" id="preview" class="form-control" value="{{$data[0]->preview}}">
 				</div>
 				<div class="form-group">
 		<textarea id="summernote" name="summernote" class="form-control">
 						 {!!$data[0]->content!!}
 					</textarea>
 				</div>

            <div class="form-group">
                    <label for="author">
                        Tag
                    </label>
            <!-- <input type="text" name="title" id="title" class="form-control"> <select name="tag_id[]" id="users" class="form-control" multiple="multiple">-->
                    <select name="tag_id[]" id="tag" class="form-control" multiple="multiple" value="{{$data[0]->tag_id}}">
               </select>
            </div>


 	<input type="hidden" name="_token" value="{{ csrf_token() }}">
   <input type="submit" class="btn btn-sm btn-primary">

 			</form>
 			
 		</div>
 	</div>
 </div>

 <script type="text/javascript">
        $(document).ready(function() {
            $('#summernote').summernote({
            	height: '250px'
            })
        });

  $(document).ready(function(){
            $('#author').select2({
                placeholder : "Author's Name",
                tags:true,
                ajax : {
                    url : '/api/author',
                    dataType : 'json',
                    delay : 200,
                    data : function(params){
                        return {
                            q : params.term,
                            page : params.page
                        };
                    },
                    processResults : function(data, params){
                        params.page = params.page || 1;
                        return {
                            results : data.data,
                            pagination: {
                                more : (params.page  * 10) < data.total
                            }
                        };
                    }
                },
                minimumInputLength : 1,
                templateResult : function (repo){
                    if(repo.loading) return repo.name;
                    var markup = repo.name;
                    return markup;
                },
                templateSelection : function(repo)
                {
                    return repo.name;
                },
                escapeMarkup : function(markup){ return markup; }
            });
        });

  $(document).ready(function(){
            $('#tag').select2({
                placeholder : "add Tag",
                tags:true,
                ajax : {
                    url : '/api/tag',
                    dataType : 'json',
                    delay : 200,
                    data : function(params){
                        return {
                            q : params.term,
                            page : params.page
                        };
                    },
                    processResults : function(data, params){
                        params.page = params.page || 1;
                        return {
                            results : data.data,
                            pagination: {
                                more : (params.page  * 10) < data.total
                            }
                        };
                    }
                },
                minimumInputLength : 1,
                templateResult : function (repo){
                    if(repo.loading) return repo.name;
                    var markup = repo.name;
                    return markup;
                },
                templateSelection : function(repo)
                {
                    return repo.name;
                },
                escapeMarkup : function(markup){ return markup; }
            });
        });



 </script>
</body>