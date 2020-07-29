<?php
ob_start();
include("connection.php");
session_start();
$user_name=$_SESSION['user'];
 if($user_name=$_SESSION['user'])
 {
     
 }
 else {
header("location:index.php");     
}
$state=$_SESSION['state'];
$dis=$_SESSION['dis'];
$station=$_SESSION['station'];
  if (isset($_GET['b']))
    {
        $b=$_GET['b'];
    }
        
      if (isset($_GET['c']))
    {
        $c=$_GET['c'];
    }
        
      if (isset($_GET['d']))
    {
        $d=$_GET['d'];
    }
        
    if (isset($_GET['star']))
    {
        $star=$_GET['star'];
            if (isset($_GET['shop']))
    {
        $shop=$_GET['shop'];
            if (isset($_GET['name']))
    {
        $name=$_GET['name'];
        $ins9=  mysql_query("insert into rate values('','$star','$shop','$name','0')");
        if($ins9>0)
        {
            $up=  mysql_query("update shop_reg set rat=rat+$star where shop_num='$shop'");
         
        }
            }
    }
    }
?>

<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Railway bazaar</title>
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
									
									
													
														
									<li><a href="cm_port.php">Compliant portal</a></li>
									<li><a href="feed.php">feedback portal</a></li>
                                                                        
								
							<li><a href="Medical.php">Medical shop</a></li>
									<li><a href="Hotal.php">Hotel</a></li>
									<li><a href="supper_Market.php">Super Market</a></li>
                                                                        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>     </nav>
</div>
			</div>
            
		</div>
		<div>
     <?php
    $sel12=mysql_query("select * from user_reg where user_id='$user_name'");
    if(mysql_num_rows($sel12)>0)
    {
       $r7=  mysql_fetch_row($sel12);
       ?>
    
    <span style="float: right;"> <p style="float:left;">  <?php echo $r7[1];?><br />
        </p> <br /><img src="user_dp/<?php echo $r7[10]?>" width="100px" class="img img-responsive img-thumbnail"/><br /></span>
   
    <?php
    }
    ?>
</div>

<div class="clearfix"></div>
<div class="col-lg-3 col-md-3"></div>
<div class="newproducts-w3agile  col-md-7">
 
   <?php
   $sel31=mysql_query("select * from add_cat");
   if(mysql_num_rows($sel31)>0)
   {
       ?>
    <table>
        <tr>
    <?php
       while ($r22=  mysql_fetch_row($sel31))
       {
           
         ?>
  
            <td> <a href="categories.php?a=<?php  echo $r22[2]; ?>&e=<?php echo $station ?>"><?php  echo $r22[2]; ?><br><img style="width: 200px;height: 150px" src="shop_logo/<?php echo $r22[3]?>" class="img img-responsive img-thumbnail" />
      
                </a></td>
    <?php
       }
       ?>
                
        </tr>
    </table>
    
                <?php
   }
   
   ?>
  
    <?php 
   if(isset($_GET['a']))
   {
        if(isset($_GET['e']))
   {
       $e=$_GET['e'];
       $a=$_GET['a'];
       
       $sel32=  mysql_query("select * from shop_reg where shop_typ='$a' and shop_loc='$e' and status='1' order by rat DESC");
       if(mysql_num_rows($sel32)>0)
       {
           while ($r23=  mysql_fetch_row($sel32))
           {
              
               ?>
    <li>
      <a href="categories.php?b=<?php  echo $r23[2]; ?>&c=<?php  echo $r23[5]; ?>&d=<?php  echo $r23[1]; ?>"><?php echo $r23[2] ?></a>
    </li>
 
<?php
   
           }     }
       }
   }
    ?>
</div>

		<?php
                if(isset($_GET['d']))
                {
                    $d=$_GET['d'];
            $sel8=  mysql_query("select * from add_product where shop_num='$d' and st='0'");
                if(mysql_num_rows($sel8)>0)
                {

$sel35=  mysql_query("select * from shop_reg where shop_num='$d'");
if (mysql_num_rows($sel35)>0)
{

    $r26=  mysql_fetch_row($sel35);
        ?>
<a href="chat_user.php?a=<?php echo $r26[2] ?>&b=<?php echo $user_name ?>">chat with 
<?php
    echo $r26[2]."<br />Rate ".$r26[2];
    
    ?>
    <br />
    <a href="categories.php?star=1&shop=<?php echo $d?>&name=<?php echo $user_name?>"><img src="images/star1.png" alt="rate" /></a>
    <a href="categories.php?star=2&shop=<?php echo $d?>&name=<?php echo $user_name?>"><img src="images/star1.png" alt="rate" /></a>
    <a href="categories.php?star=3&shop=<?php echo $d?>&name=<?php echo $user_name?>"><img src="images/star1.png" alt="rate" /></a>
    <a href="categories.php?star=4&shop=<?php echo $d?>&name=<?php echo $user_name?>"><img src="images/star1.png" alt="rate" /></a>
    <a href="categories.php?star=5&shop=<?php echo $d?>&name=<?php echo $user_name?>"><img src="images/star1.png" alt="rate" /></a>
    <?php

    
}



?>


<?php
                    while ($r3=  mysql_fetch_row($sel8))
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
                                                                                          
                                                                                            <a href="single.php?a=<?php echo $user_name ?>&b=<?php echo$r3[1] ?>&c=<?php echo$r3[3] ?>&d=<?php echo$r3[8] ?>&e=<?php echo$r3[9] ?>&f=<?php echo$r7[5] ?>&g=<?php echo$r3[10] ?>"><img style="width: 350px;height: 200px" src="product/<?php echo $r3[2] ?>" 
                                                                                                                      alt=" " class="img-responsive"></a>
												<p><?php echo $r3[1];?></p>
												<h4>$<?php echo $r3[3] ?> <span>$<?php echo $r3[4] ?> </span></h4>
                                                                                                          <p><?php echo $r3[8];?></p>         
                                                                                         <p><?php echo $r3[9];?></p>
                                                                                         
                                                                                      
                                                                                                          <td colspan="2"><a href="me.php?a=<?php echo $user_name ?>&b=<?php echo$r3[1] ?>&c=<?php echo$r3[3] ?>&d=<?php echo$r3[8] ?>&e=<?php echo$r3[9] ?>&f=<?php echo$r7[5] ?>&g=<?php echo$r3[10] ?>" ><span class="btn btn-warning">BUY NOW</span></a>
                                                                                                         
                                                                                                                                            
                                                                                                  
                                                                                                       
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
                }
         
            ?>

<div class="clearfix"> </div>

<div class="footer-copy">
			
				<div class="container">
				<p>© 2017 railway bazar. All rights reserved | Design by <a href="http://Railway bazaar.com/">Railway bazaar</a></p>
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