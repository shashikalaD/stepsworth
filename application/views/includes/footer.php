<script src="<?php echo base_url()?>assets/js/responsiveslides.min.js"></script>
<script>
// You can also use "$(window).load(function() {"
$(function () {
  // Slider◘
  $("#slider4").responsiveSlides({
	auto:false,
	pager: false,
	nav: true,
	speed: 500,
	namespace: "callbacks",
	before: function () {
	  $('.events').append("<li>before event fired.</li>");
	},
	after: function () {
	  $('.events').append("<li>after event fired.</li>");
	}
  });

});
</script>
<!-- //Banner-plugin -->
<!-- flexSlider -->
	<script defer src="<?php echo base_url()?>assets/js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	</script>
<!-- //flexSlider -->

<div class="footer">
	<div class="container">
	<div class="footer_agile_inner_info_w3l">
		<div class="col-md-4 footer-left">
			<h2><a href="index.html">STEPSWORTH</a></h2>
			<p>Your Career Path Begins Here</p>
			<ul class="social-nav model-3d-0 footer-social w3_agile_social two">
															<li><a class="whatsapp" href="https://api.whatsapp.com/send?phone=916363716384&text=Hello"style="background-color:#25D366">
																  <div class="front"><i class="fa fa-whatsapp" aria-hidden="true" ></i></div>
																  <div class="back"><i class="fa fa-whatsapp" aria-hidden="true"></i></div></a></li>
															<li><a href="www.facebook.com/stepsworth.ins" class="facebook" target="_blank">
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
		<div class="col-md-4 footer-right">
			<div class="sign-grds">
				<div class="sign-gd">
					<h4>Information </h4>
					<ul>
						 <li><a href="href="<?php echo base_url()?>" class="">Home</a></li>
        <li><a href="<?php echo base_url()?>about">About Us</a></li>
        <li><a href="<?php echo base_url()?>what-we-do">What We Do</a></li>
		<li><a href="<?php echo base_url()?>placement">Placement</a></li>
		<li><a href="#test" class="scroll">Career</a></li>
		<li><a href="<?php echo base_url()?>contact">Contact Us</a></li>
						
					</ul>
				</div>
				</div>
			</div>
				<div class="col-md-4 sign-gd-two" >
					<h4>Address</h4>
					<div class="w3-address">
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-phone" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h4>Phone Number</h4>
								<p style="font-size: 16px;">+91 636-371-6384<br> +91 934-447-5949</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h4>Email Address</h4>
								<p style="font-size: 16px;">Email :<a href="mailto:info@stepsworth.in">info@stepsworth.in</a></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h4>Location</h4>
								<p style="font-size: 16px;">100, Infantry Road, 3rd Floor, Above Kaveri Emporium, Bhaarath Complex, Bangalore 560001
								
								</p>
							</div>
							
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
				
		
		<div class="clearfix"></div>
			
		<p class="copy-right">&copy;2019 Stepsworth All rights reserved | Design by <a href="http://www.webcreintors.com">WebCreintors </a></p>
	</div>
</div>
</div>
<!-- //footer -->


<script type="text/javascript" src="<?php echo base_url()?>assets/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smooth-scrolling -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="<?php echo base_url()?>assets/js/bootstrap.js"></script>
<script src="<?php echo base_url()?>assets/js/SmoothScroll.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

</body>
</html>