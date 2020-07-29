<?php
include("connection.php");

if(isset($_POST['shop']))
{
    $shop_num=$_POST['shop_num'];
    $shop_nme=$_POST['shop_nme'];
    $shop_owner=$_POST['shop_owner'];
    $shop_cat=$_POST['shop_cat'];
    $shop_ns=$_POST['shop_ns'];
    $shop_pic=$_FILES['shop_pic']['name']; 
    $shop_cont=$_POST['shop_cont'];
    $shopp=$_POST['shopp'];
    $shopuid=$_POST['shopuid'];
    $ac=$_POST['ac'];
    $sel4=  mysql_query("select * from shop_reg");
    $count=  mysql_num_rows($sel4);
    $count1=$count+1;
$npic=$count1."".substr($shop_pic,strrpos($shop_pic,"."));
move_uploaded_file($_FILES['shop_pic']['tmp_name'],getcwd()."\\shop\\$npic");
$sel24=  mysql_query("select * from bank where acnt='$ac'");
if(mysql_num_rows($sel24)>0)
{
   $ins3=  mysql_query("insert into shop_reg values('','$shop_num','$shop_nme','$shop_owner','$shop_cat','$shop_ns','$npic','$shop_cont','$shopuid','$shopp','shop','0','$ac','0') "); 
   
}

        
        
        
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Railway</title>
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
<!-- start-smoth-scrolling -->
</head>
	
<body>
<!-- header -->
	<div class="agileits_header">
		<div class="container">
			<div class="w3l_offers">
				<p>SALE UP TO 70% OFF. USE CODE "SALE70%" . <a href="">SHOP NOW</a></p>
			</div>
			<div class="agile-login">
				<ul>
					<li><a href="registered.php"> Create Account </a></li>
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
					<li><i class="fa fa-phone" aria-hidden="true"></i>Order online or call us : (+0123) 234 567</li>
					
				</ul>
			</div>
			<div class="w3ls_logo_products_left">
				<h1><a href="index.php">Railway bazaar</a></h1>
			</div>
		
			
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
<!-- navigation -->
	<div class="navigation-agileits">
		<div class="container">
			<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header nav_2">
								<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div> 
						
							</nav>
			</div>
		</div>
		
<!-- //navigation -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Shop Register Page</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- register -->
	<div class="register">
		<div class="container">
			<h2>Shop  Register Here</h2>
			<div class="login-form-grids">
				
                                   <form method="post" enctype="multipart/form-data" name="myForm" onsubmit="return validateForm()">
                                                 
                                                  <table class="table table-striped table-responsive table-hover table-condensed tab-content tab-pane">
                                                      <tr>
                                                          <td>Shop Number</td>
                                                          <td><input type="text" name="shop_num" required="required" /> </td>
                                                      </tr>
                                              <tr>
                                                          <td>Shop Name</td>
                                                          <td><input type="text" name="shop_nme" required="required" /> </td>
                                                      </tr>
                                              <tr>
                                                          <td>Owner ship (Name)</td>
                                                          <td><input type="text" name="shop_owner" required="required"/> </td>
                                                      </tr>
                                                      <tr>
                                                          <td>Shop Category</td>
                                                          <td><select name="shop_cat" class="form-control" required="required"> 
                                                                  <option value="-1">--choose one--</option>\
                                                                  <?php
                                                                  $sel30=  mysql_query("select * from add_cat");
                                                                  while ($r21=  mysql_fetch_row($sel30))
                                                                  {
                                                                      ?>
                                                                  <option value="<?php echo $r21[2]  ?>"><?php echo $r21[2]  ?></option>
                                                                  <?php
                                                                  }
                                                                  
                                                                  ?>
                                                              </select></td>
                                                      </tr>
                                                      <tr>
                                                          <td>Shop's Nearest Station</td>
                                                          <td><select name="shop_ns" class="form-control" required="required" > 
                                                                     <option>---choose one---</option>
                                                                      <?php
                                                                  $sel30=  mysql_query("select * from train_mangmt");
                                                                  while ($r21=  mysql_fetch_row($sel30))
                                                                  {
                                                                      ?>
                                                                  <option value="<?php echo $r21[0] ?>"><?php echo $r21[4]."-".$r21[5]   ?></option>
                                                                  <?php
                                                                  }
                                                                  
                                                                  ?>
                                                              </select></td>
                                                      </tr>
                                                      <tr>
                                                          <td>Shop image</td>
                                                          <td><input type="file" name="shop_pic" required="required"/> </td>
                                                      </tr>
                                                       <tr>
                                                          <td> Contact with Shop</td>
                                                          <td><input type="number" name="shop_cont" maxlength="10" required="required" class="form-control"/> </td>
                                                      </tr>
                                                       <tr>
                                                          <td> User id</td>
                                                          <td><input type="text" name="shopuid" required="required" /> </td>
                                                      </tr>
                                                       <tr>
                                                          <td> Password</td>
                                                          <td><input type="password" name="shopp" required="required"/> </td>
                                                      </tr>
                                                      <tr>
                                                          <td> Account number</td>
                                                          <td><input type="text" name="ac" required="required"/> </td>
                                                      </tr>
                                                    
                                                       <tr>
                                                          
                                                           <td colspan="2" align="center"><input type="submit" name="shop"  value="shop Register"/> </td>
                                                      </tr> 
                                          </table>
                                          
                                          
                                      </form>  
                            <h4>New user </h4>
			<p><a href="registered.php">For  Registration</a> (Or) go back to <a href="index.html">Home<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></p>
			</div>
			
		</div>
	</div>
<!-- //register -->
<!-- //footer -->
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
				<p>© 2017 Railway Bazaar. All rights reserved | Design by <a href="http://railway_bazaar.com/">Railway_bazaar</a></p>
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
<!-- //footer -->	
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- top-header and slider -->
<!-- here stars scrolling icon -->
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