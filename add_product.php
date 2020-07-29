<?php
include("connection.php");
session_start();
$user_name=$_SESSION['shop'];
 if($user_name=$_SESSION['shop'])
 {
     
 }
 else {
header("location:index.php");     
}
if(isset($_POST['Add_Product']))
{
    $pro_name=$_POST['pro_name'];
    $pro_pic=$_FILES['pro_pic']['name'];
    $pro_price=$_POST['pro_price'];
    $pro_price2=$_POST['pro_price2'];
    $pro_des=$_POST['pro_des'];

    $shop_ns=$_POST['shop_ns'];
    $sel7=  mysql_query("select * from add_product");
    $c=  mysql_num_rows($sel7);
    $c1=$c+1;
    $np=$c1."".substr($pro_pic,strrpos($pro_pic,"."));
move_uploaded_file($_FILES['pro_pic']['tmp_name'],getcwd()."\\product\\$np");

$sel14=mysql_query("select * from shop_reg where user_id='$user_name'");
$r9=mysql_fetch_row($sel14);
   $ins4=  mysql_query("insert into add_product values('','$pro_name','$np','$pro_price','$pro_price2','$pro_des','0','$r9[4]','$shop_ns','$user_name','$r9[12]','$r9[5]','$r9[1]')");
}
?>


<!DOCTYPE html>
<html>
<head>
<title>Super Market an Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
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
					<li><a href="logout.php">Logout</a></li>
					
					
				</ul>
			</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>

	<div class="logo_products">
		<div class="container">
		<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
                                    
				</ul>
			</div>
			<div class="w3ls_logo_products_left">
                            <h1><a href="shophome.php">Railway Bazaar</a></h1>
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
							<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
								<ul class="nav navbar-nav">
                                                                      <li class="active"><a href="shophome.php" class="act">Home</a></li>	
									<!-- Mega Menu -->
									
									
													
										      <li><a href="update.php">update profile</a></li>				
									
                                                                        <li><a href="add_product.php">Add Product</a></li>
                                                                        <li><a href="user_reqest.php">User Request</a></li>
                                                                      <li><a href="chat.php">Chat</a></li>
                                                                        <li><a href="feed_back.php">Feedback</a></li>
                                                                         <li><a href="shop_compliants.php">Compliants</a></li>
                                                                        <li><a href="daily.php">Daily Updates</a></li>
                                                                    
                                                                           
								
							
                                                                                
							</nav>
			</div>
                 
		</div>
		
<!-- //navigation -->
	<!-- main-slider -->
		
	<!-- //main-slider -->
	<!-- //top-header and slider -->
	<!-- top-brands -->
	
<!-- //top-brands -->
 <!-- Carousel
    ================================================== -->
    <!-- /.carousel -->	
<!--banner-bottom-->
<div style="float:left;">
   <?php
   $sel13=  mysql_query("select * from shop_reg where user_id='$user_name'");
   {
       $r8=  mysql_fetch_row($sel13);
       ?>
    <span><img src="shop/<?php echo $r8[6] ?>" class="img img-responsive img-thumbnail" width="150px"/></span>
    <?php
   }
   ?>
                    </div> 
<!--banner-bottom-->
<!--brands-->
<div class="clearfix"></div>
	
<!--//brands-->
<!-- new -->
	<div class="col-lg-10 col-md-10">
            <h2 style="color: #ec971f; " align="center"><?php echo strtoupper($user_name); ?> Manegment portal</h2>
           <h4 style="color: #ec971f; " align="center">Add product</h4>
           <div class="col-lg-5 col-md-5" ></div>
           <div class="col-lg-5 col-md-5" style="color: #F19E1F;background-color: #666666;" >
           <form method="post" enctype="multipart/form-data">
               <p align="center"> 
             
                 
                 <table class="table table-responsive table-bordered table-condensed">
                  <tr>
                      <td>Product Name :</td>
                      <td> <input type="text" name="pro_name" class="form-control"></td>
                   </tr>
                   <tr>
                      <td>Product Image :</td>
                      <td> <input type="file" name="pro_pic" class="form-control"></td>
                   </tr>
                   <tr>
                      <td>Discount Price :</td>
                      <td> <input type="text" name="pro_price" class="form-control"></td>
                   </tr>
                    <tr>
                      <td>Original Price :</td>
                      <td> <input type="text" name="pro_price2" class="form-control"></td>
                   </tr>
                   <tr>
                      <td>Product Description:</td>
                      <td> <textarea name="pro_des" class="form-control"></textarea></td>
                   </tr>
                      <tr>
                      <td>Product ID:</td>
                      <td> <input type="number" maxlength="4" name="shop_ns" class="form-control"></td>
                   </tr>
                     <tr>
                     
                         <td colspan="2" align="center"> <input type="submit" name="Add_Product" value="Add Product" class="btn btn-warning"></td>
                   </tr>
               </table>
                     
             
           </form>
	</div>
        </div>
<div class="clearfix"> </div>
<!-- //new -->
<!-- //footer -->
<div class="footer-copy">
			
				<div class="container">
				<p>© 2017 railway bazar. All rights reserved | Design by <a href="http://railwaybazaar.com/">Railway Bazaar</a></p>
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