<div class="container">
<div class="contact" id="contact">
		<div class="col-md-8 w3agile_contact_left con-lef-content">
				<h3>Contact Us</h3>
				
				<form action="#" method="post">
					<input type="text" name="name" id='name' value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
					<input type="text" name="mobile" id="mobile" value="Mobile" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile';}" required="" maxlength="10" onclick="chk_phoneno(this)" onkeypress="chk_phoneno(this)">
					<span id="valid_mobile" class="text-red"></span>
					<textarea name="message" id="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
					<input type="button" value="Send" class="btn btn-primary" id="save" onclick="AddorUpdateFun()">
					<span class="text-red1" id='msg'></span>
				</form>
		</div>
		<div class="col-md-4 w3agile_contact_right" style="padding-left: 20px">
	
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d485.98471849549486!2d77.60478641339766!3d12.979670212211316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1662d78543c5%3A0x8f579bb643cfc20b!2s3rd+Floor%2C+101%2C+Infantry+Road%2C+Tasker+Town%2C+Sampangi+Rama+Nagar%2C+Bengaluru%2C+Karnataka+560001!5e0!3m2!1sen!2sin!4v1554367382374!5m2!1sen!2sin" allowfullscreen></iframe>

	<!-- //map -->

		</div>
		<div class="clearfix"> </div>
	</div>
	<br/>
</div>
<script type="text/javascript">
	function AddorUpdateFun()
		{
			btnval=$("#save").val();
			name = $('#name').val();
			mobile = $('#mobile').val();
			message = $('#message').val();
			if(name=='Name' || name=='')
			{
				alert("Name should not be blank.");
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
			if(message=='Message...' || message=='')
			{
				alert("Message should not be blank.");
				return;
			}
			
			$.ajax({		
					url: "<?php echo base_url(); ?>" + "index.php/Stepsworth/contact",
					data:"save="+btnval+"&name="+name+"&mobile="+mobile+"&message="+message,
					type:"POST",
					success:function(output){
						$("#msg").html(output);
						$("#save").hide(500);
						alert(output);
						$('#name').val('Name');
						$('#mobile').val('Mobile');
						$('#message').val('Message...');
					//location.reload();
					}
					
				});
		}
</script>