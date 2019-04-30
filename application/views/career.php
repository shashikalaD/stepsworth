<style type="text/css">
	h3 {
    border-bottom: 2px solid #099044;;
}

h3:after{
content: '';
  display: block;
  border-bottom: 2px solid #27387d;
  margin-bottom: -2px;
  max-width: 50%;
}
li{
	font-size: 16px;
}

ul{
	padding-left: 35px;
}
</style>

<div class="about" id="about">
	<div class="container">
		<div class="w3-head-all text-center ">
			<h3>Career</h3>
		</div>	
		<div class="about-bottom-grid2">
			<div class="col-md-12">
				
				<h3 style="color:#099044">English Trainer ( Full Time / Part Time )</h3>
				<div style="padding-left: 30px">
						<h2 style="text-align: justify; color: #000; font-size: 16pt; font-weight: bold" class="w3-head-all text-center">Job Description</h2>
						<ul>
							<li>Educate students and make them aware of Communication skills</li>
							<li>Excellent Communications Skills & Good command over English language</li>
							<li>Should have command on subject</li>
							<li>Should be result oriented</li>
						</ul>
						 <br/>
						<h2 style="text-align: justify; color: #000; font-size: 16pt;; font-weight: bold" class="w3-head-all text-center">Desired Profile</h2>
						<ul>
							<li>Graduate / Post Graduate in English</li>
							<li>Work Experience: Min 3 Yrs</li>	
						</ul>

						<input type="button" class="btn btn-primary btn-lg" value="APPLY" onclick="careers('1')">

				</div>	

			</div>
			<div class="clearfix"></div>
		</div> <br/>

		<div class="about-bottom-grid2">
			<div class="col-md-12">
				
				<h3 style="color:#099044">Tele-callers / Interns</h3> 
				<div style="padding-left: 30px">
					<h2 style="text-align: justify; color: #000; font-size: 16pt;; font-weight: bold">Job Description</h2>
					<p style="text-align: justify; color: #000; font-size: 16px;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;We are looking for Tele-callers who make telephonic calls and schedule appointments on lead data generated from various sources with an aim to increase the sales of the branch and positively contribute to achieve sales targets.</p>

					<h2 style="text-align: justify; color: #000; font-size: 16pt;; font-weight: bold" class="w3-head-all text-center">Desired Profile</h2>
					<ul>
						<li>Candidate shall be Graduate / under graduate / +2 with or without experience.</li>
						<li>Job will be generating more walk-ins for business development</li>	
						<li>Should have good communication skills</li>
					</ul>
					<input type="button" class="btn btn-primary btn-lg" onclick="careers('2')"  value="APPLY">

				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<br/>
		<div class="about-bottom-grid2">
			<div class="col-md-12">
				
				<h3 style="color:#099044">Business Associates</h3> 
				<div style="padding-left: 30px">
					<h2 style="text-align: justify; color: #000; font-size: 16pt;; font-weight: bold">Job Description</h2>
					<p style="text-align: justify; color: #000; font-size: 16px;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;We are looking for Business Associates who can be part of us or can work individually, who is responsible for meeting potential people and schedule appointments on lead data generated from various sources with an aim to increase the sales of the branch.</p>

					<h2 style="text-align: justify; color: #000; font-size: 16pt;; font-weight: bold" class="w3-head-all text-center">Desired Profile</h2>
					<ul>
						<li>Candidate shall be Graduate / under graduate / +2 with or without experience.</li>
						<li>Job will be generating more walk-ins for business development</li>	
						<li>Should have good communication skills</li>
					</ul>
					<input type="button" class="btn btn-primary btn-lg" value="APPLY" onclick="careers('3')">

				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header btn-info">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Application</h4>
      </div>
      <div class="modal-body">
       <form class="form-horizontal">
       	<div class="form-group">
	<label for="profile" class="col-sm-2 control-label">Profile</label>
	<div class="col-sm-10">
  	<select class="form-control" id="profile">
  		<option value="1">Position Applied For</option>
		  <option value="2">English Trainer</option>
		  <option value="3">Tele-Callers / Interns</option>
		  <option value="4">Business Associates</option>
	</select>
	<small class="help-block">Select what position your applying </small>
</div>
</div>
  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" placeholder="Full Name">
      <small class="help-block">Enter Your Full Name</small>
    </div>
  </div>
  <div class="form-group">
    <label for="emails" class="col-sm-2 control-label">E-mail</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="emails" placeholder="Enter Email">
      <small class="help-block">Please Provide your valid E-mail Id for later communication</small>
    </div>
  </div>
  <div class="form-group">
    <label for="qualification" class="col-sm-2 control-label">Qualification</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="qualification" placeholder="Enter Qualification">
      <small class="help-block">Mention your heighest Qualification</small>
    </div>
  </div>
  <div class="form-group">
    <label for="phone" class="col-sm-2 control-label">Contact No.</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="mobile" placeholder="Enter Contact Number" maxlength="10" onclick="chk_phoneno(this)" onkeypress="chk_phoneno(this)">
					<span id="valid_mobile" class="text-red"></span>
      <small class="help-block">Please Provide your valid contact number for later communication</small>
    </div>
  </div>
<input type="hidden" id="profiledata">
  <div class="form-group">
	<label for="status" class="col-sm-2 control-label"> Status </label>
	<div class="col-sm-10">
  	<select class="form-control" id="status">
  		<option value="0">What Is your Current Status?</option>
		  <option value="1">Student</option>
		  <option value="2">Unemployed </option>
		  <option value="3">Employed</option>
		  <option value="4">Self-Employed</option>
	</select>
	<small class="help-block">Mention your Current Employment status</small>
</div>
</div>

  <div class="form-group">
    <label for="experience" class="col-sm-2 control-label">Experience</label>
    <div class="row"><div class="col-sm-3"><select class="form-control" id="experienceY">
    	<?php for($i=0;$i<60;$i++)
    	{
    		?><option value="<?php echo $i;?>"><?php echo $i;?></option><?php 
    	}?></select></div><div class="col-sm-1">Years</div>
    	<div class="col-sm-3"> <select class="form-control" id="experienceM">
    	<?php for($i=0;$i<60;$i++)
    	{
    		?><option value="<?php echo $i;?>"><?php echo $i;?></option><?php 
    	}?></select> </div><div class="col-sm-1">Months</div>
      
  <!-- <small class="help-block">If Fresher enter "None / 0"</small> -->
    </div>
  </div>


  <div class="form-group">
  <label for="exampleInputFile" class="col-sm-2 control-label">Upload Resume</label>
  <div class="col-sm-10">
    <input type="file" id="exampleInputFile">
    <small class="help-block">Upload your updated Resume Here</small>
</div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
    	<span id="msgs" class="text-red1"></span>
    	<input type="button" value="Send" class="btn btn-primary" id="save" onclick="AddorUpdateFun()">
    </div>
  </div>
</form>
      </div>
      <div class="modal-footer">
       <p> please drop your Resume here <a href="#"> career@stepsworth.in </a></p>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
	function AddorUpdateFun()
		{
			var formData = new FormData();
			btnval=$("#save").val();
			profile = $('#profile').val();
			name = $('#name').val();
			emails = $('#emails').val();
			qualification = $('#qualification').val();
			mobile = $('#mobile').val();
			status = $('#status').val();
			experienceY = $('#experienceY').val();
			experienceM = $('#experienceM').val();
			profiledata = $('#profiledata').val();
			exampleInputFile = $('#exampleInputFile').val();
			if(profile=='')
			{
				alert("Select Profile");
				return;
			}
			if(mobile=='Mobile' || mobile.length<=9)
			{
				alert("Mobile number Should Not Blank");
				if(mobile.length<=9)
				{
					alert("Enter 10 digit Phone Number..");
					return;
				}
				return;
			}
			if(name=='')
			{
				alert("Name should not be blank.");
				return;
			}
			if(emails=='')
			{
				alert("Email should not be blank.");
				return;
			}
			if(qualification=='')
			{
				alert("Qualification should not be blank.");
				return;
			}
			var attaddfile = $('#exampleInputFile').prop('files')[0];
			if(jQuery.type(attaddfile) != 'undefined' ){
				formData.append('exampleInputFile', attaddfile);	
			}
			
			formData.append('profile', profile);
			formData.append('profiledata', profiledata);
			formData.append('name', name);
			formData.append('emails', emails);
			formData.append('save', 'save');
			formData.append('qualification', qualification);
			formData.append('mobile', mobile);
			formData.append('status', status);
			formData.append('experience', experienceY+' Years and '+experienceM + ' Months');
			formData.append('exampleInputFile', exampleInputFile);
			$("#msgs").html("Loading Please Wait ..");
			$("#save").hide(700);
			$.ajax({        
				        url: "<?php echo base_url(); ?>" + "index.php/Stepsworth/career",     				
        				data : formData,
        				processData: false, 
						contentType: false,  
        				type:"POST",
        				success:function(output){
							alert(output);
							console.log(output);
        					location.reload(true);
        				}
						});
		}
	function careers(data1)
	{
		$('#myModal').modal('show');
		$("#profiledata").val(data1);
	}
</script>