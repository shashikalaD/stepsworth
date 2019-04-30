<!DOCTYPE html>
<html lang="en">
<head>
<title>Steps Worth </title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="E-services Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<!--stylesheet-->
<link href="<?php echo base_url()?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/flexslider.css" type="text/css" media="screen" property="" />
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/lightbox.css"> <!-- lightbox css -->

<!--stylesheet-->
<!-- js -->
<script src="<?php echo base_url()?>assets/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url()?>assets/js/validation.js"></script>
<!-- //js -->
<!-- font-awesome-icons -->
<link href="<?php echo base_url()?>assets/css/font-awesome.css" type="text/css" rel="stylesheet"> 
<link href="<?php echo base_url()?>assets/css/validation.css" type="text/css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<!--online fonts-->
<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<!--//online fonts-->
<style type="text/css">
  .slides1{
    width:1200px; 
    height:300px;
  }
</style>

</head>
<body>
<!--Header section starts here-->
<nav class="navbar navbar-default ">
  <div class="container-fluid header-section w3l">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header w3">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	 <a class="navbar-brand logo w3-layouts" href="<?php echo base_url()?>">
	  <!-- <h1><span class="head w3l"><i class="fa fa-mobile" aria-hidden="true"></i><sup><i class="fa fa-cog" aria-hidden="true"></i></sup></span>E-services</h1> -->
	  <img src="<?php echo base_url()?>assets/images/logo.png" alt="home" class="head w3l" style="height: 94px; margin-top: -21px;" />

	 </a>
	 </div>
	 <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse header" id="bs-example-navbar-collapse-1" style="margin-left: -100px;">

      <ul class="nav navbar-nav list w3" >

      <?php if($_SESSION['username']=='')
      {?>
        <li><a href="<?php echo base_url()?>">Home</a></li>
        <li><a href="<?php echo base_url()?>about">About Us</a></li>
        <li><a href="<?php echo base_url()?>what-we-do">What We Do</a></li>
		<li><a href="<?php echo base_url()?>placement">Placement</a></li>
		<li><a href="<?php echo base_url()?>career">Career</a></li>
		<li><a href="<?php echo base_url()?>contact">Contact Us</a></li>
    <!-- <li><a href="<?php echo base_url()?>admin">Login</a></li> -->
  <?php }
  else
  {
    ?>
     <li><a href="<?php echo base_url()?>placementdetail">PlaceMent Details</a></li>
     <li><a href="<?php echo base_url()?>contactdetail">Contact Details</a></li>
     <li><a href="<?php echo base_url()?>">Logout</a></li>
   <?php
  }?>
	 </ul>
				<div class="w3ls-social-icons" style="margin-left: -200px;">
					<ul class="social-nav model-3d-0 footer-social w3_agile_social two" >
														  <li><a class="whatsapp" href="https://api.whatsapp.com/send?phone=916363716384&text=Hello" style="background-color:#25D366">
                                  <div class="front"><i class="fa fa-whatsapp" aria-hidden="true"></i></div>

                                  <div class="back"><i class="fa fa-whatsapp" aria-hidden="true"></i></div></a></li>
                              <li><a href="https://www.facebook.com/stepsworth.ins" class="facebook" target="_blank">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="https://twitter.com/stepsworth1" class="twitter" target="_blank"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="https://www.instagram.com/stepsworth_bangalore/" class="instagram" target="_blank">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															
														</ul>
				</div>
  
<!-- /.navbar-collapse -->
  </div>
   </div>
  <!-- /.container-fluid -->
</nav>
<?php
    if(isset($keep_slider)){
  ?>
<!--//banner section starts here-->
    <!-- Slider  -->
   
 <div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="6"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="7"></li>
    </ol>
    <div class="carousel-inner">
      <div class="item active" align="center">
        <img src="<?php echo base_url()?>assets/images/slides/Home1.jpg"  alt="..." style='width:1200px;height: 500px;'>
        <!-- <div class="carousel-caption d-none d-md-block">
          <h1 style=" background: linear-gradient(to bottom, #000099 0%, #0099ff 100%); font-size: 48px;" ><b>“Fly to Live. Live to Fly.”</b></h1>
        </div> -->
      </div>
      <div class="item" align="center">
        <img src="<?php echo base_url()?>assets/images/slides/Home2.jpg" alt="..."  style='width:1200px;height: 500px;'>
        <!-- <div class="carousel-caption d-none d-md-block">
			<h1 style=" background: linear-gradient(to bottom, #000099 0%, #0099ff 100%); font-size: 48px;"><b>“Hospitality is simply an opportunity to show love and care”</b></h1>
        </div> -->
      </div>
      <div class="item" align="center">
        <img src="<?php echo base_url()?>assets/images/slides/Home3.jpg" alt="..." style='width:1200px;height: 500px;'>
        <!-- <div class="carousel-caption d-none d-md-block">
			<h3 style="color:#ff0066;font-size: 48px;"><b>“Don’t tell people your dreams. Show them”</b></h3>
        </div> -->
      </div>
       <div class="item" align="center">
        <img src="<?php echo base_url()?>assets/images/slides/Home4.jpg" alt="..." style='width:1200px;height: 500px;'>
      </div>
       <div class="item" align="center">
        <img src="<?php echo base_url()?>assets/images/slides/Home5.jpg" alt="..." style='width:1200px;height: 500px;'>
      </div>
       <div class="item" align="center">
        <img src="<?php echo base_url()?>assets/images/slides/Home6.jpg" alt="..." style='width:1200px;height: 500px;'>
      </div>

       <div class="item" align="center">
        <img src="<?php echo base_url()?>assets/images/slides/Home7.jpg" alt="..." style='width:1200px;height: 450px;'>
      </div>
       <div class="item" align="center">
        <img src="<?php echo base_url()?>assets/images/slides/Home8.jpg" alt="..." style='width:1200px;height: 500px;'>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<h3 align="center" style="color:blue">New Beginnings, Endless Opportunities </h3> <br>
    
			<?php } ?><!-- 
      <script type="text/javascript">
        function logout()
        {
          btnval=$("#login").val();
      $.ajax({    
          url: "<?php echo base_url(); ?>" + "index.php/Stepsworth/logout",
          data:"login="+btnval,
          type:"POST",
          success:function(output){
            alert(output);
          window.open="<?php echo base_url(); ?>" + "stepsworth/";
          }
          
        });
    }
      </script> -->