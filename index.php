<?php
	include("connection.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Railway bazar</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Super Market Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
</head>
<body>
<div class="agileits_header">
		<div class="container">
			<div class="w3l_offers">
                            <p>SALE UP TO 70% OFF. USE CODE "SALE70%" . <a href="index.php">SHOP NOW</a></p>
			</div>
			<div class="agile-login">
				<ul>
					<li><a href="registered.php"> Create Account </a></li>
                                        <li><a href="shop_registered.php"> Shop Account </a></li>
					<li><a href="login.php">Login</a></li>
					
				</ul>
			</div>
		
			<div class="clearfix"> </div>
		</div>
	</div>

	<div class="logo_products">
		<div class="container">
		<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i>Order online or call us : (+0123) 234 599</li>
				</ul>
			</div>
			<div class="w3ls_logo_products_left">
				<h1><a href="index.php">Railway Bazaar</a></h1>
			</div>
		
			
			<div class="clearfix"> </div>
		</div>
	</div>

	<div class="navigation-agileits">
		<div class="container">
			<nav class="navbar navbar-default">
							
							<div class="navbar-header nav_2">
								<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div> 
							<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
								
							</div>
							</nav>
			</div>
		</div>
		

		<ul id="demo1">
                         <li>
				<img src="images/ban1.jpg" alt="" />
				
				<div class="slide-desc">
					<h3>Online Railway Shopping Port.</h3>
				</div>
			</li>
                    
			<li>
				<img src="images/11.jpg" alt="" />
				
				<div class="slide-desc">
					<h3>Buy rice Products Are Now On Line With Us</h3>
				</div>
			</li>
                        <li>
				<img src="images/a.png" alt="" />
				
				<div class="slide-desc">
					<h3>Buy Vegetable Products Are Now On Line With Us</h3>
				</div>
			</li>
                         <li>
				<img src="images/s1.jpg" alt="" />
				
				<div class="slide-desc">
					<h3>Buy food Products Are Now On Line With Us</h3>
				</div>
			</li>
                        <li>
				<img src="images/ban3.jpg" alt="" />
				
				<div class="slide-desc">
					<h3>Buy Medical Products Are Now On Line With Us</h3>
				</div>
			</li>
			<li>
				<img src="images/22.jpg" alt="" />
				  <div class="slide-desc">
					<h3>Whole Spices Products Are Now On Line With Us</h3>
				</div>
			</li>
		</ul>
<div class="col-lg-12 col-md-12">
      <?php
      $sel=  mysql_query("select * from add_product where st='0' ORDER BY RAND() limit 8");
      if(mysql_num_rows($sel)>0)
      {
          while ($r=  mysql_fetch_row($sel))
          {
              ?>
    <div class="col-md-3 top_brand_left">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid">
								<div class="agile_top_brand_left_grid_pos">
									<img src="images/offer.png" alt=" " class="img-responsive">
								</div>
								<div class="agile_top_brand_left_grid_pos">
									<img src="images/offer.png" alt=" " class="img-responsive">
								</div>
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb">
                                                                                          
                                                                                 <img style="width: 250px;height: 200px" src="product/<?php echo $r[2] ?>" >
                                                                                                                      
												<p><?php echo $r[1];?></p>
												<h4>$<?php echo $r[3] ?> <span>$<?php echo $r[4] ?> </span></h4>
                                                                                                          <p><?php echo $r[8];?></p>         
                                                                                         <p><?php echo $r[9];?></p>
                                                                                         
                                                                                         <a href="login.php"><span class="btn btn-warning">BUY NOW</span></a>    
											</div>
											<div class="snipcart-details top_brand_home_details">
											
                                                                                            
                                                                                               
                                                                                                      </table>
                                                                                               
                                                                                                     
                                                                                            </form>
                                                                                        </div>
											</div>
									
									</figure>
								</div>
							</div>
              
						</div>
					</div>
    <?php
          }
      }
      ?>
</div>
<div class="clearfix"></div>
<div class="footer">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-md-6 w3_footer_grid">
					<h3>Contact</h3>
					
					<ul class="address">
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Railway Bazaar <span>TRVM City.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:railwaybazaar@gmail.com">railwaybazaar@gmail.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
					</ul>
				</div>
				
				<div class="col-md-6 w3_footer_grid">
					
					<h3>Profile</h3>
					<ul class="info"> 
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="login.php">Store</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="login.php">My Cart</a></li>
                                                  
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="login.php">Login</a></li>
                                                <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="registered.php">Create Account</a></li>
                                             
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		
		<div class="footer-copy">
			
			<div class="container">
				<p>© 2017 Railway Bazaar. All rights reserved | Design by <a href="http://railway_bazaar.com/">Railway bazaar</a></p>
			</div>
		</div>
		
	</div>	
	<div class="footer-botm">
			<div class="container">
				<div class="w3layouts-foot">
					<ul>
						<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="payment-w3ls">	
					<img src="images/card.png" alt=" " class="img-responsive">
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>

<script src="js/bootstrap.min.js"></script>


	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>
<!-- main slider-banner -->
<script src="js/skdslider.min.js"></script>
<link href="css/skdslider.css" rel="stylesheet">
<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});
						
			jQuery('#responsive').change(function(){
			  $('#responsive_wrapper').width(jQuery(this).val());
			});
			
		});
</script>	
<!-- //main slider-banner --> 
</body>
</html>