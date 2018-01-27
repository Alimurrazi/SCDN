@extends('home')
@section('content')
<head>
	<style type="text/css">
		label
		{
			margin-right: 5px;
		}
		#submit
		{
			margin-top: 10px;
		}
		.s_option
		{
			margin-left: 5px;
		}
		.specialty
		{
			margin: 5px;
		}
		#new_experience,#new_skill
		{
			cursor: pointer;
		}
	</style>
</head>
<body>
 
 <div class="container">
 <form method="post" action="/admin/developer/update/{{$data1->id}}" class="form" accept-charset="UTF-8" enctype="multipart/form-data" style="margin-top: 0">
 <div class="row">
 	<div class="col-md-6">
 	 <h3>Basic</h3>
 	 <img src="{{URL::asset($data1->image)}}" id="img" style="width: 150px; height: 150px; margin-right: 25px;">
 	 <input type="file" id="file" name="avatar" style="margin-bottom: 5px">
 	<label>Name</label> <input type="text" name="name" placeholder="Name" value="{{$data1->name}}"><br>

 	<div class="specialty">
 	<label>Specialty</label> <br>
 	<input type="radio" name="specialty" value="Web Developer"><span class="s_option">Web Developer</span><br>
 	<input type="radio" name="specialty" value="Android Developer"><span class="s_option">Android Developer</span><br>
 	<input type="radio" name="specialty" value="IOS Developer"><span class="s_option">IOS Developer</span><br>
 			<input type="radio" name="specialty" value="Game Developer"><span class="s_option">Game Developer</span><br>
 			<input type="radio" name="specialty" value="Python Developer"><span class="s_option">Python Developer</span><br>
 				<input type="radio" name="specialty" value="Java Developer"><span class="s_option">Java Developer</span><br>
 				<input type="radio" name="specialty" value="All rounder"><span class="s_option">All  Rounder</span><br>
 		<input type="hidden" id="initial_specialty" value="{{$data1->specialty}}">
    </div>

 	<label>Email</label> <input type="email" name="email" placeholder="Email" value="{{$data1->email}}">
 	</div>
 	<div class="col-md-6">
 	 <h3>Contact</h3>
 	 <label>Website</label><input type="text" name="website" placeholder="Website" value="{{$data1->website}}"><br>
 	 <label>Facebook</label><input type="text" name="facebook" placeholder="Facebook" value="{{$data1->facebook}}"><br>
 	 <label>Twitter</label><input type="text" name="twitter" placeholder="Twitter" value="{{$data1->twitter}}"><br>
 	 <label>Linkedin</label><input type="text" name="linkedin" placeholder="Linkedin" value="{{$data1->linkedin}}"><br>
 	 <label>Github</label><input type="text" name="github" placeholder="Github" value="{{$data1->github}}"><br>	
 	</div>

 </div>	

   <div class="row">
    
     	<div class="col-md-6">
 		<h3>Experience</h3>
@foreach($data2 as $data2)
 	<div class="experience">	
 	<input type="text" name="experience[]" value="{{$data2->experience}}" placeholder="Experience"><br>
 	<input type="text" name="duration[]" value="{{$data2->duration}}" placeholder="duration"><br>
 	</div>
@endforeach 	

 	<label id="new_experience" onclick="addExperience()">add new</label>	
 	</div>

  	<div class="col-md-6">
  		<h3>Skill</h3>
  @foreach($data3 as $data3)		
  		<div class="skill">
  			<input type="text" name="skill[]" value="{{$data3->skill}}" placeholder="skill"><br>
  		</div>
  @endforeach		
       <label id="new_skill" onclick="addSkill()">add new</label>
  	</div>
  	
  </div>
     <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button type="submit" id="submit">Submit</button>
</form>
 	
 </div>
<script type="text/javascript">

  function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      $('#img').attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
  }
}
$("#file").change(function() {
  readURL(this);
});
 
   var initial_value=$("#initial_specialty").val();
    $('input[value="'+initial_value+'"]').attr('checked', 'checked');

	function addExperience()
	{
		var experience=' 	<div class="experience"><input type="text" name="experience[]" placeholder="Experience"><br> <input type="text" name="duration[]" placeholder="duration"><br></div> '
		$("#new_experience").before(experience);
	}
	function addSkill()
	{
		var skill= '<div class="skill"><input type="text" name="skill[]" placeholder="skill"><br></div>'
		$("#new_skill").before(skill);
	}

</script>
</body>
@endsection