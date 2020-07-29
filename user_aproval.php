<?php
include("connection.php");
session_start();
$user_name=$_SESSION['admin'];

 if($user_name=$_SESSION['admin'])
 {
     
 }
 else {
header("location:index.php");     
}
if(isset($_GET['a']))
{
    $a=$_GET['a'];
    $up=  mysql_query("update user_reg set status='1' where user_em='$a'");
}
if(isset($_GET['b']))
{
    $b=$_GET['b'];
    $up=  mysql_query("update user_reg set status='2' where user_em='$b'");
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
                            <h1><a href="adminhome.php">Railway Bazaar</a></h1>
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
                                                                    <li class="active"><a href="adminhome.php" class="act">Home</a></li>	
									<!-- Mega Menu -->
									
									<li><a href="manege_station.php">Manege station</a></li>
                                                                        <li><a href="shop_aproval.php">Shops </a></li>
                                                                         <li><a href="user_aproval.php">User List</a></li>
                                                                        <li><a href="products.php">Products </a></li>
                                                                          <li><a href="complient.php">Complients </a></li>
                                                                           <li><a href="feedback.php">Feedback </a></li>
                                                                           <li><a href="cart_1.php">cart update</a></li>
								
							
                                                                                
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
    <img src="images/admin.jpg" class="img img-responsive" width="100px">
                    </div> 
<!--banner-bottom-->
<!--brands-->
	
<!--//brands-->
<!-- new -->
	<div class="newproducts-w3agile col-lg-10 col-md-10">
            <h2 style="color: #ec971f; " align="center">New Users</h2>
            <?php
            $sel5=mysql_query("select * from user_reg where user_type='user' and status=0");
            if(mysql_num_rows($sel5)>0)
            {
                ?>
            
            <table class="table table-responsive table-bordered table-hover table-striped">
                        <tr>
                            
                            <td>#</td>
                            <td>Name</td>
                            <td>Address</td>
                            <td>Contact Number</td>
                            <td>E-mail</td>
                            <td>profile</td>
                            
                               <td>Option</td>
                                 <td>Status</td>
                            
                        </tr>
            <?php
            $l=0;
                while ($r2=  mysql_fetch_row($sel5))
                {
                    $l++;
                    ?>
                        
                        <tr>
                            
                            <td><?php echo $l; ?></td>
                            <td><?php echo $r2[1]; ?></td>
                            
                            <td><?php echo $r2[2]; ?></td>
                            <td><?php echo $r2[3]; ?></td>
                          
                            <td><?php echo $r2[6]; ?></td>
                          
                            <td><img src="user_dp/<?php echo $r2[10]; ?>" width="100px"></td>
                            <td><a href="user_aproval.php?a=<?php echo $r2[6]; ?>">Approve</a>/<a href="user_aproval.php?b=<?php echo $r2[6]; ?>">Deny</a></td>
                            <td>
                                <?php
                                if($r2[14]=="1")
                                {
                                    echo "<font color='green'>Approved</font>";
                                }
                                if($r2[14]=="2")
                                {
                                    echo "<font color='red'>Denied</font>";
                                }
                                ?>
                            </td>
                        </tr>
                        <?php
                }
                ?>
                    </table>
                        <?php
            }
 else {
     
     echo "No New Request";
 }
            ?>
            
             <h2 style="color: #ec971f; " align="center">Approved Users</h2>
            <?php
            $sel5=mysql_query("select * from user_reg where user_type='user' and status=1");
            if(mysql_num_rows($sel5)>0)
            {
                ?>
            
            <table class="table table-responsive table-bordered table-hover table-striped">
                        <tr>
                            
                            <td>#</td>
                            <td>Name</td>
                            <td>Address</td>
                            <td>Contact Number</td>
                            <td>E-mail</td>
                            <td>profile</td>
                            
                               <td>Option</td>
                                 <td>Status</td>
                            
                        </tr>
            <?php
            $l=0;
                while ($r2=  mysql_fetch_row($sel5))
                {
                    $l++;
                    ?>
                        
                        <tr>
                            
                            <td><?php echo $l; ?></td>
                            <td><?php echo $r2[1]; ?></td>
                            
                            <td><?php echo $r2[2]; ?></td>
                            <td><?php echo $r2[3]; ?></td>
                          
                            <td><?php echo $r2[6]; ?></td>
                          
                            <td><img src="user_dp/<?php echo $r2[10]; ?>" width="100px"></td>
                            <td><a href="user_aproval.php?b=<?php echo $r2[6]; ?>">Deny</a></td>
                            <td>
                                <?php
                                if($r2[14]=="1")
                                {
                                    echo "<font color='green'>Approved</font>";
                                }
                                if($r2[14]=="2")
                                {
                                    echo "<font color='red'>Denied</font>";
                                }
                                ?>
                            </td>
                        </tr>
                        <?php
                }
                ?>
                    </table>
                        <?php
            }
             else {
     
     echo "No Approved Users";
 }
            ?>
            
             
              <h2 style="color: #ec971f; " align="center">Denied Users</h2>
            <?php
            $sel5=mysql_query("select * from user_reg where user_type='user' and status=2");
            if(mysql_num_rows($sel5)>0)
            {
                ?>
            
            <table class="table table-responsive table-bordered table-hover table-striped">
                        <tr>
                            
                            <td>#</td>
                            <td>Name</td>
                            <td>Address</td>
                            <td>Contact Number</td>
                            <td>E-mail</td>
                            <td>profile</td>
                            
                               <td>Option</td>
                                 <td>Status</td>
                            
                        </tr>
            <?php
            $l=0;
                while ($r2=  mysql_fetch_row($sel5))
                {
                    $l++;
                    ?>
                        
                        <tr>
                            
                            <td><?php echo $l; ?></td>
                            <td><?php echo $r2[1]; ?></td>
                           
                            <td><?php echo $r2[2]; ?></td>
                            <td><?php echo $r2[3]; ?></td>
                          
                            <td><?php echo $r2[6]; ?></td>
                          
                            <td><img src="user_dp/<?php echo $r2[10]; ?>" width="100px"></td>
                            <td><a href="user_aproval.php?a=<?php echo $r2[6]; ?>">Approve</a></td>
                            <td>
                                <?php
                                if($r2[14]=="1")
                                {
                                    echo "<font color='green'>Approved</font>";
                                }
                                if($r2[14]=="2")
                                {
                                    echo "<font color='red'>Denied</font>";
                                }
                                ?>
                            </td>
                        </tr>
                        <?php
                }
                ?>
                    </table>
                        <?php
            }
             else {
     
     echo "No Denied Users";
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