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
if(isset($_POST['addcat']))
{
    $num=$_POST['num'];
            $type=$_POST['type'];
            $up=$_FILES['up']['name'];
            $nup=$type."".substr($up,strrpos($up,"."));
move_uploaded_file($_FILES['up']['tmp_name'],getcwd()."\\shop_logo\\$nup");
           
             $ins1=mysql_query("insert into add_cat values('','$num','$type','$nup')");
             
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
							
                                                                           <li><a href="cat_shp.php">shop cat.</a></li>
                                                                                
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
<div class="col-lg-3 col-md-3">
          <form method="post" enctype="multipart/form-data">
              <h1>shop category</h1>
              <table class="table table-responsive">
                    <tr>
                        <td>cat. id</td>
                        <td><input type="text" maxlength="7" name="num" class="form-control"/></td>
                    </tr>
                    <tr>
                        <td>type</td>
                        <td><input type="text" name="type" class="form-control"/></td>
                    </tr>
                    <tr>
                        <td>logo</td>
                        <td><input type="file" name="up" class="form-control"/></td>
                    </tr>
                    <tr>
                       
                        <td colspan="2" align="center"><input type="submit" name="addcat" value="ADD" class="btn btn-warning"/></td>
                    </tr>
                </table>
                
            </form>
	</div>
<div class="col-lg-5 col-md-5">
    <h2 align="center" style="color: #737373;">Registered categories</h2>
    <?php
    $sel2=mysql_query("select * from add_cat");
    if(mysql_num_rows($sel2)>0)
    {
        ?>
    <table class="table table-responsive table-bordered table-striped table-condensed table-hover"><tr>
                    <td>#</td>
                    <td>cat. id</td>
                    <td>category</td>
                   
        </tr>
    <?php
        $i=0;
        while ($r1=  mysql_fetch_row($sel2))
        {
            $i++;
            ?>
        <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $r1[1]; ?></td>
                    <td><?php echo $r1[2]; ?></td>
                 
        </tr>
        <?php
           
        }
        ?>
            </table>
        <?php
    }
    ?>
    
    
    
</div>
<!--brands--><div class="clearfix"> </div><div class="clearfix"> </div>
	
<!--//brands-->
<!-- new -->
	

<!-- //new -->
<!-- //footer -->
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