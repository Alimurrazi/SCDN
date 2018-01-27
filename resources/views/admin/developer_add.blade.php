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
 <form method="post" action="/admin/developer/add" class="form" accept-charset="UTF-8" enctype="multipart/form-data" style="margin-top: 0">
 <div class="row">
 	<div class="col-md-6">
 	 <h3>Basic</h3>
 	 <img src=" " id="img" style="width: 150px; height: 150px; margin-right: 25px;">
 	 <input type="file" id="file" name="avatar" style="margin-bottom: 5px" required>
 	<label>Name</label> <input type="text" name="name" placeholder="Name"><br>
 	<div class="specialty">
 	<label>Specialty</label> <br>
 	<input type="radio" name="specialty" value="Web Developer"><span class="s_option">Web Developer</span><br>
 	<input type="radio" name="specialty" value="Android Developer"><span class="s_option">Android Developer</span><br>
 	<input type="radio" name="specialty" value="IOS Developer"><span class="s_option">IOS Developer</span><br>
 		<input type="radio" name="specialty" value="Game Developer"><span class="s_option">Game Developer</span><br>
 			<input type="radio" name="specialty" value="Python Developer"><span class="s_option">Python Developer</span><br>
 				<input type="radio" name="specialty" value="Java Developer"><span class="s_option">Java Developer</span><br>
 				<input type="radio" name="specialty" value="All rounder"><span class="s_option">All  Rounder</span><br>

    </div>
 	<label>Email</label> <input type="email" name="email" placeholder="Email">
 	</div>
 	<div class="col-md-6">
 	 <h3>Contact</h3>
 	 <label>Website</label><input type="text" name="website" placeholder="Website"><br>
 	 <label>Facebook</label><input type="text" name="facebook" placeholder="Facebook"><br>
 	 <label>Twitter</label><input type="text" name="twitter" placeholder="Twitter"><br>
 	 <label>Linkedin</label><input type="text" name="linkedin" placeholder="Linkedin"><br>
 	 <label>Github</label><input type="text" name="github" placeholder="Github"><br>	
 	</div>

 </div>	

   <div class="row">
    
     	<div class="col-md-6">
 		<h3>Experience</h3>
 	<div class="experience">	
 	<input type="text" name="experience[]" placeholder="Experience"><br>
 	<input type="text" name="duration[]" placeholder="duration"><br>
 	</div>	
 	<label id="new_experience" onclick="addExperience()">add new</label>	
 	</div>

  	<div class="col-md-6">
  		<h3>Skill</h3>
  		<div class="skill">
  			<input type="text" name="skill[]" placeholder="skill"><br>
  		</div>
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