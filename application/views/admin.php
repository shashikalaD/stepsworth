<div class="container">
<div class="contact" id="contact">
    <div class="col-md-8 w3agile_contact_left con-lef-content">
        <h3>Admin Login</h3>
        <p>
          Login And Access All the Authority.
        </p>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header btn-warning">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color: #FFF">Login</h4>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="row">
            <div class="col-md-2"><span style="color: #000;font-weight: bold;font-size: 14px;">User Name</span></div>
            <div class="col-md-4"><input type="text" name="username" class="form-control" id="username"></div>
        </div>
        <div class="row">
            <div class="col-md-2"><span style="color: #000;font-weight: bold;font-size: 14px;">Password</span></div>
            <div class="col-md-4"><input type="password" name="password" class="form-control" id="password"></div>
        </div>
      </div>
      <br><br>
      <div class="modal-footer">
        <input type="button" id="login" value="Login" class="btn btn-success" onclick="Login()">
        <input type="button" id="refresh" value="Refresh" class="btn btn-info">
        <input type="button" id="close" value="Close" class="btn btn-danger" data-dismiss="modal">
      </div>
    </div>

  </div>
</div>
</div>
<input type="hidden" id="user" value="<?php echo $_SESSION['username'];?>">
    </div>
    <div class="clearfix"> </div>
  </div>
  <br/>
</div>
<script type="text/javascript">
 $(window).load(function(){  
 if($("#user").val()=='')
 {
   $('#myModal').modal('show');
 }      
  
    }); 
 function Login()
    {
      btnval=$("#login").val();
      username = $('#username').val();
      password = $('#password').val();
      if(username=='')
      {
        alert("UserName should not be blank.");
        return;
      }
      if(password=='')
      {
        alert("Password should not be blank.");
        return;
      }
      
      $.ajax({    
          url: "<?php echo base_url();?>" + "index.php/Stepsworth/admin",
          data:"login="+btnval+"&username="+username+"&password="+password,
          type:"POST",
          success:function(output){
            if(output==1)
            {
              alert("Successfully Login");
              $("#user").val(username);
              window.location="<?php echo base_url();?>" + "index.php/Stepsworth/placement";
            }
            else
            {
              alert("Username and Password Wrong.")
            }
          location.reload();
          }
          
        });
    }
</script>