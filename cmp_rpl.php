<?php
ob_start();
include("connection.php");
session_start();
$user_name=$_SESSION['shop'];

 if($user_name=$_SESSION['shop'])
 {
     
 }
 else {
header("location:index.php");     
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
	
<!--//brands-->
<!-- new -->
	<div class="newproducts-w3agile col-lg-10 col-md-10">
            <h2 style="color: #ec971f; " align="center">Complaints-Replay</h2>
           <?php
           if(isset($_GET['a']))
           {
               $a=$_GET['a'];
               ?>
            <form method="post">
                <table class="table table-responsive">
                    <tr>
                        <td style="width: 100%">
                            <textarea rows="6" cols="6" name="c" placeholder="Replay Message Here..." class="form-control"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td><input  type="submit" name="c1" value="Replay Message" class="btn btn-warning" />
                        </td>
                    </tr>
                </table>
                    
            </form>
            
            <?php
if(isset($_POST['c1']))
{   
    $c=$_POST['c'];
    $cc=  addslashes($c);
    $ccc=  nl2br($cc);
       $a=$_GET['a'];
       $sel_msg=  mysql_query("select * from post_complient where id='$a'");
       $qf=  mysql_fetch_row($sel_msg);
           
    $rply_msg=  mysql_query("insert into rply_msg values('','$qf[0]','$qf[1]','$qf[2]','$ccc','0')");
    if($rply_msg>0)
    {
        header("location:shop_compliants.php");
    }
 else {
     
    }
}

?>
            <?php
           }
           
           
           ?>
             <?php
           $u=  mysql_query("select * from shop_reg  where user_id='$user_name'");
           $data=  mysql_fetch_row($u);
            
              $a=$_GET['a'];
          $sel15=  mysql_query("select * from post_complient where shop='$data[2]' and id='$a' ");
          if(mysql_num_rows($sel15)>0)
          {
              ?>
                <table class="table table-responsive table-bordered table-striped table-condensed table-hover">
                    <tr>
                        <td>#</td>
                        <td>Complaint By</td>
                        
                        <td>shop gets Complaint</td>
                         <td>shop station</td>
                        <td>Complaint</td>
                     
                    </tr>
                <?php
                $i=0;
              while ($r10=  mysql_fetch_row($sel15))
              {
                  $i++;
                ?>
                    
                     <tr>
                        <td><?php echo $i ?></td>
                        <td> <?php echo $r10[1] ?></td>
                        
                        <td><?php echo $r10[2]  ?></td>
                         <td><?php echo $r10[3]  ?></td>
                        <td><?php echo $r10[4]  ?></td>
                       
                    </tr>
                    <?php
              }
              ?>
                    
                </table>
            <div>
                <?php
                $sel=  mysql_query("select * from rply_msg where cmp_id='$a'");
                while ($ms=  mysql_fetch_row($sel))
                {
                   ?>
                <div class="col-lg-12 col-md-12" style="float: right;background: #ffffff ">
                    <b> <?php echo $ms[4] ?></b>
                </div>
                <?php
                    
                }
                ?>
            </div>
                    <?php
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