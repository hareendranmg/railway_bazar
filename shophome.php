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
if(isset($_GET['a']))
{
    if (isset($_GET['b']))
    {
        $a=$_GET['a'];
        $b=$_GET['b'];
       
        $del1=mysql_query("update add_product set st='1' where prdt_id='$b' and name='$a'");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Railway</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Super Market Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery-1.11.1.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
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
										
										      <li><a href="update.php">update profile</a></li>				
									
                                                                        <li><a href="add_product.php">Add Product</a></li>
                                                                        <li><a href="user_reqest.php">User Request</a></li>
                                                                      <li><a href="chat.php">Chat</a></li>
                                                                        <li><a href="feed_back.php">Feedback</a></li>
                                                                        <li><a href="shop_compliants.php">Complaints</a></li>
                                                                         <li><a href="daily.php">Daily Updates</a></li>
                                     
							</nav>
			</div>
                 
		</div>
		

<div style="float:left;">
   <?php
   $sel13=  mysql_query("select * from shop_reg where user_id='$user_name'");
   {
       $r8=  mysql_fetch_row($sel13);
       ?>
    <span><img src="shop/<?php echo $r8[6] ?>" class="img img-responsive img-thumbnail" width="150px"/>
    
        <p>
              Rating
              
              <?php
              if($r8[13]<5)
              {
                  ?>
              <img src="images/star1.png" />
              <img src="images/star.png" />
              <img src="images/star.png" />
              <img src="images/star.png" />
              <img src="images/star.png" />
              <?php
              }
               elseif($r8[13]<10)
              {
                  ?>
                <img src="images/star1.png" />
              <img src="images/star1.png" />
              <img src="images/star.png" />
              <img src="images/star.png" />
              <img src="images/star.png" />
              <?php
              }
               elseif($r8[13]<20)
              {
                  ?>
               <img src="images/star1.png" />
                <img src="images/star1.png" />
              <img src="images/star1.png" />
               <img src="images/star.png" />
              <img src="images/star.png" />
              <?php
              }
              elseif($r8[13]<25)
              {
                  ?>
              <img src="images/star1.png" />
               <img src="images/star1.png" />
                <img src="images/star1.png" />
              <img src="images/star1.png" />
              <img src="images/star.png" />
              <?php
              }
               else
              {
                  ?>
              <img src="images/star1.png" />
              <img src="images/star1.png" />
               <img src="images/star1.png" />
                <img src="images/star1.png" />
              <img src="images/star1.png" />
              <?php
              }
              ?>
              
              
              
              
        </p>    </span>
  
    <?php
   }
   ?>
                    </div> 

	<div class="newprogducts-w3agile col-lg-10 col-md-10">
            <h2 style="color: #ec971f; " align="center"><?php echo strtoupper($user_name); ?> Manegment portal</h2>
           
	</div>
<div class="clearfix"> </div>
<div class="col-lg-12 col-md-12">
      <?php
      $sel=  mysql_query("select * from add_product where name='$user_name' and st='0' ORDER BY RAND() limit 8");
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
												<h4>Rs<?php echo $r[3] ?> <span>$<?php echo $r[4] ?> </span></h4>
                                                                                                          <p><?php echo $r[8];?></p>         
                                                                                         <p><?php echo $r[9];?></p>
                                                                                         
                                                                                         <a href="shophome.php?a=<?php echo $r[9];?>&b=<?php echo $r[8];?>"><span class="btn btn-warning">REMOVE</span></a>    
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
<div class="clearfix"> </div>

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