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
                                                                        <li><a href="products.html">Products </a></li>
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
<div class="col-lg-12 col-md-12">
    <h2 style="color: #ec971f;" align="center"> Cart Updates</h2>
      <?php
    $sel20=  mysql_query("select * from cart1");
    if(mysql_num_rows($sel20)>0)
    {
        ?>
    <table class="table table-bordered table-responsive">
        <tr>
            <td>#</td>
              <td>Name</td>
                <td>Product</td>
                  <td>Price</td>
                <td>Nearest Railway</td>
              <td> shop</td>
                <td>Train number</td>
                  <td>A/c of buyer</td>  
                  <td>A/c of seller</td>
                  <td>Date</td>
                  <td>Time</td>
             
               
        </tr>
    
    
    <?php
    $i=0;
        while ($r14=  mysql_fetch_row($sel20))
                
        {
            $i++;
            ?>
        <tr>
            <td><?php echo $i; ?></td>
              <td><?php echo $r14[1] ?></td>
                <td><?php echo $r14[2] ?></td>
                  <td><?php echo $r14[3] ?></td>
                <td><?php echo $r14[4] ?></td>
              <td><?php echo $r14[5] ?></td>
                <td><?php echo $r14[6] ?></td>
                  <td><?php echo $r14[11] ?></td>  
                  <td><?php echo $r14[12] ?></td>
                  <td><?php echo $r14[13] ?></td>
                  <td><?php echo $r14[15] ?></td>
          
                
        </tr>
        <?php
        }
    }
    ?>
    
</div>
<div class="clearfix"> </div><div class="clearfix"> </div>
	
<!--//brands-->
<!-- new -->
	


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