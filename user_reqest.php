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
    $a=$_GET['a'];
}
if(isset($_GET['b']))
{
    $b=$_GET['b'];
}
if(isset($_GET['c']))
{
    $c=$_GET['c'];
    if(isset($_GET['d']))
{
    $d=$_GET['d'];
    if ($c=="1")
{
    $up3=  mysql_query("update cart1 set st='1' where nme='$a' and prdt='$b' and id='$d'");
     header("location:user_reqest.php?sucess='2'");
   
}


if ($c=="2")
{
    $up4=  mysql_query("update cart1 set st='2' where nme='$a' and prdt='$b'");
    if ($up4>0)
    {
       $sel25=  mysql_query("select * from cart1 where shp_nme='$user_name'");
   
       $r8=  mysql_fetch_row($sel25);
       $amnt=$r8[3]*$r8[8];
         $up5=  mysql_query("update bank set amount=amount-$amnt where acnt='$r8[9]'");
         $up6=  mysql_query("update bank set amount=amount+$amnt where acnt='$r8[8]'");
         
         header("location:user_reqest.php?sucess='1'");
    }
    
   
}
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
	
<!--//brands-->
<!-- new -->
	<div class="newproducts-w3agile col-lg-10 col-md-10">
            <h2 style="color: #ec971f; " align="center"><?php echo strtoupper($user_name); ?> Manegment portal</h2>
           <h4 style="color: #ec971f; " align="center">user request</h4>
          
	</div>
     
<div class="clearfix"> </div>
<!-- //new -->
<!-- //footer -->
  <h2 style="color: #ec971f;" align="center"> Cart Updates</h2>
  <div class="col-lg-2 col-md-2"></div>
      <?php
    $sel20=  mysql_query("select distinct ac_num  from cart1 where shp_nme='$user_name'");
    if(mysql_num_rows($sel20)>0)
    {
        while ($r1=  mysql_fetch_row($sel20))
        {
            ?>
  
  <div class="col-lg-2 col-md-2">
      <?php                 
      $sel33=  mysql_query("select distinct nme from cart1 where ac_num='$r1[0]'");
      if(mysql_num_rows($sel33)>0)
      {
          while ($r24=  mysql_fetch_row($sel33))
          {
              ?>
      <a href="user_reqest.php?x=<?php echo $r24[0]?>&y=<?php echo $r1[0]?>"><img style="width:150px;height: 100px" src="shop_logo/rqst.jpg" /></a> 
      <a href="user_reqest.php?x=<?php echo $r24[0]?>&y=<?php echo $r1[0]?>"><?php echo strtoupper($r24[0]); ?></a> 
              <?php
          }
      }

      ?></div>
  <?php
        }
    }
    ?>
  <div class="clearfix"></div>
   <h2 style="color: #204d74;" align="center"></h2>
  <div class="col-lg-2 col-md-2"></div>
      <?php
      if(isset($_GET['x']))
{
    $x=$_GET['x'];

if(isset($_GET['y']))
{
    $y=$_GET['y'];

  $sel34=  mysql_query("select * from cart1 where ac_num='$y'");
  if(mysql_num_rows($sel34)>0)
  {
      while ($r25=  mysql_fetch_row($sel34))
      {
          ?>
  <div class="col-lg-2 col-md-2">
      <table class="table table-striped table-responsive table-bordered table-condensed table-hover">
   
      <tr>
          <td>Product </td>
          <td><?php echo $r25[2] ?></td>
      </tr><tr>
          <td>Price</td>
          <td><?php echo $r25[3] ?></td>
      </tr><tr>
          <td>Station code</td>
          <td><?php echo $r25[4] ?></td>
      </tr><tr>
          <td>Train no</td>
          <td><?php echo $r25[6] ?></td>
      </tr><tr>
          <td>coach no</td>
          <td><?php echo $r25[7] ?></td>
      </tr><tr>
          <td>Quantity</td>
          <td><?php echo $r25[8] ?></td>
      </tr><tr>
          <td>Seat no</td>
          <td><?php echo $r25[9] ?></td>
      </tr><tr>
          <td>Ac_no</td>
          <td><?php echo $r25[11] ?></td>
      </tr>
      <tr rowspan="2">
          <td>Ordered on</td>
      
          <td><?php echo $r25[13]."\n".$r25[14]."\n".$r25[15] ?></td>
      </tr>
      <tr>
       
          <td colspan="2" align="center">
              <?php
                        if ($r25[10]=='0')
                        {
                           ?>
              <p style="color: #ed9c28">Waiting</p>
              <?php
                        }
                        if ($r25[10]=='1')
                        {
                             ?>
              <p style="color: #1dcd00">Approved</p>
              <?php
                        }
                        if ($r25[10]=='2')
                        {
                             ?>
              <p style="color: #eb5055">Denyed</p>
              <?php
                        }
              ?>
          </td>
      </tr>
      <tr>
          <td><a href="user_reqest.php?a=<?php echo $r25[1] ?>&b=<?php echo $r25[2] ?>&c=1&d=<?php echo $r25[0] ?>">Approve</a></td>
          <td><a href="user_reqest.php?a=<?php echo $r25[1] ?>&b=<?php echo $r25[2] ?>&c=2&d=<?php echo $r25[0] ?>">Deny</a></td>
      </tr>
      
  </table>
  </div>
  <?php
      }
  }
}
}
    ?>
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