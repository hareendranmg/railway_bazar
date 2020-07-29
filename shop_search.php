<?php
include("connection.php");
session_start();
$user_name=$_SESSION['user'];
 if($user_name=$_SESSION['user'])
 {
     
 }
 else {
header("location:index.php");     
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
					<li><i class="fa fa-phone" aria-hidden="true"></i>Order online or call us : (+0123) 234 567</li>
					
				</ul>
			</div>
			<div class="w3ls_logo_products_left">
                            <h1><a href="userhome.php">Railway Bazaar</a></h1>
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
                                                               <li class="active"><a href="userhome.php" class="act">Home</a></li>	
									<!-- Mega Menu -->
									
									
													
														
									<li><a href="cm_port.php">Complients portal</a></li>
									<li><a href="feed.php">feedback portal</a></li>
                                                                        <li><a href="shop_search.php">Search shop</a></li>
									<li><a href="chat_user.php">Communication</a></li>
								
							
                                                                        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>         
							
                                                                                
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
		
				
<!--banner-bottom-->
<!--brands-->
	
<!--//brands-->
<!-- new -->
<div class="newproducts-w3tagile col-md-5">
    
      <?php
                if(isset($_POST['search']))
                {
                    $shop_cat=$_POST['shop_cat'];
                   $shop_ns=$_POST['shop_ns'];
                    $sel9=  mysql_query("select * from add_product where type='$shop_cat' and loc='$shop_ns'");
                    if(mysql_num_rows($sel9)>0)
                    {
                        ?>
    <table class="table table-responsive table-bordered"><tr>
                    <td>#</td>
                    <td>Product Name</td>
                     <td>Product Image</td>
                     <td>Product price</td>
                      <td>Discount Price</td>
                      <td>Added shop</td>
                       <td>Option</td>
        </tr>
    <?php
    $i=0;
                        while ($r4=  mysql_fetch_row($sel9))
                        {
                           $i++;
                            ?>
    
                            <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $r4[1] ?></td>
                    <td><img src="product/<?php echo $r4[2] ?>" width="100px"></td>
                     <td><?php echo $r4[3] ?>$</td>
                      <td><?php echo $r4[4] ?>$</td>
                      <td><?php echo $r4[9] ?></td>
                      <td><a href="">BUY</a></td>
        </tr>
    <?php
                        }
             
                        ?>
            </table>
    
        <?php
                        
                    }
                }
                
                ?>
    

</div>
	<div class="newproducts-w3agile col-md-3">
            <h1 align="center" style="color: #00e58b;">Search shops</h1>
            <form method="post">
                <table class="table table-responsive table-bordered">
                    <tr>
                        <td>Category</td>
                        <td><select name="shop_cat" class="form-control"> 
                                                                  <option value="-1">--choose one--</option>\
                                                                   <option value="hotal">HOTAL</option>
                                                                    <option value="medical shop">MEDICAL SHOP</option>
                                                                     <option value="super market">SUPPER MARKET</option>
                                                              </select></td>
                    </tr>
                      <tr>
                        <td>Station</td>
                     <td><select name="shop_ns" class="form-control" > 
                                                                     <option>---choose one---</option>
                                <option value="TRIVANDRUM CENTRAL-TVC">TRIVANDRUM CENTRAL-TVC</option>
                                 <option value="VARKALA-VAK">VARKALA-VAK</option>
                                 <option value="NAGARCOIL JUNCTION-NCJ">NAGARCOIL JUNCTION-NCJ</option>
                                  <option value="KANYAKUMARI-CAPE">KANYAKUMARI-CAPE</option>
                                   <option value="CHENNAI CENTRAL-MAS">CHENNAI CENTRAL-MAS</option>
                                    <option value="PUNALUR-PUU">PUNALUR-PUU</option>
                                     <option value="GURUVAYUR-GUV">GURUVAYUR-GUV</option>
                                      <option value="ERNAKULAM JUNCTION-ERS">ERNAKULAM JUNCTION-ERS</option>
                                       <option value="KOLLAM JUNCTION-QLN">KOLLAM JUNCTIONQLN</option>
                                        <option value="MANGLALORE-BAN">MANGLALORE-BAN</option>
                                                              </select></td>
                    </tr>
                      <tr>
                          <td colspan="2" align="center"><input type="submit" name="search" value="search" class="btn btn-warning"/></td>
                        
                    </tr>
                </table>
                
              
            </form>
	</div>
<div class="newproducts-w3tagile col-md-3">
    
    
      <?php
                if(isset($_POST['search']))
                {
                    $shop_cat=$_POST['shop_cat'];
                   $shop_ns=$_POST['shop_ns'];
                    $sel9=  mysql_query("select * from shop_reg where shop_typ='$shop_cat' and shop_loc='$shop_ns'");
                    if(mysql_num_rows($sel9)>0)
                    {
                        ?>
    <table class="table table-responsive table-bordered"><tr>
                    <td>#</td>
                    <td>Shop Name</td>
                     <td>Shop Image</td>
                     <td>Contact</td>
                    
                       
        </tr>
    <?php
    $i=0;
                        while ($r4=  mysql_fetch_row($sel9))
                        {
                           $i++;
                            ?>
    
                            <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $r4[2] ?></td>
                    <td><img src="shop/<?php echo $r4[6] ?>" width="100px"></td>
                    <td><?php echo $r4[7] ?></td>
                     
        </tr>
    <?php
                        }
             
                        ?>
            </table>
    
        <?php
                        
                    }
                }
                
                ?>
    
</div>
<div class="clearfix"> </div><div class="clearfix"> </div>

<div class="footer-copy">
			
				<div class="container">
				<p>© 2017 railway bazar. All rights reserved | Design by <a href="http://trinitytechnologies.com/">Trinity Technologies</a></p>
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