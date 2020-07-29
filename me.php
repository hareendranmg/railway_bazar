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
if (isset($_GET['a']))
{
    $a=$_GET['a'];
}
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
if (isset($_GET['e']))
{
    $e=$_GET['e'];
}

if (isset($_GET['f']))
{
    $f=$_GET['f'];
}
if (isset($_GET['g']))
{
    $g=$_GET['g'];
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
									<li><a href="chat.php">Communication</a></li>
								
							<li><a href="Medical.php">Medical shop</a></li>
									<li><a href="Hotal.php">Hotal</a></li>
									<li><a href="supper_Market.php">Super Market</a></li>
                                                                        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>         
							</nav>
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
        </p> <br /><img src="user_dp/<?php echo $r7[10]?>" width="200px" class="img img-responsive img-thumbnail"/><br /></span>
   
    <?php
    }
    ?>
</div>
<div class="newproducts-w3agile col-md-2"></div>
<div class="newproducts-w3agile col-md-8">
    <h1 style="color: #843534;" align="center">Request for this item.</h1>
    <span class="alert alert-danger"> <font style="color: #d9534f" >* see below notification after cart it</font></span>
    <div class="clearfix"> </div>
    <form method="post">
        <table class="table table-striped table-bordered table-responsive">
            <tr>
                <td>Name</td>
                <td><input type="text" value="<?php echo $a ?>" class="form-control" /></td>
            </tr>
            <tr>
                <td>Product Name</td>
                <td><input type="text" value="<?php echo $b ?>"class="form-control" /></td>
            </tr>
            <tr>
                <td>Price</td>
                 <td><input type="text" value="<?php echo $c ?>" class="form-control"/></td>
            </tr>
            <tr>
                <td>Nearest shop</td>
                 <td><input type="text" value="<?php echo $d ?>" class="form-control"/></td>
            </tr>
            <tr>
                <td>Shop Name</td>
                <td><input type="text" value="<?php echo $e ?>" class="form-control"/></td>
            </tr>
              <tr>
                <td>Train Number</td>
                <td><input type="number" name="t_num" maxlength="6" class="form-control" required="required" />
                              </td>
            </tr>
              <tr>
                <td>Coach Number</td>
                <td><input type="text" name="c_num" maxlength="6" class="form-control" required="required" />
                              </td>
            </tr>
              <tr>
                <td>Seat Number</td>
                <td><input type="number" name="s_num" maxlength="6" class="form-control" required="required" />
                              </td>
            </tr>
            <tr>
                <td>Quantity</td>
                <td><input type="number" name="q_num" maxlength="6" class="form-control" required="required" />
                              </td>
            </tr>
            <tr>
                <td>A/C number</td>
                <td><input type="text" value="<?php echo $f ?>" class="form-control"/></td>
            </tr>
             <tr>
                <td>Shop  Ac number</td>
                <td><input type="text" value="<?php echo $g ?>" class="form-control"/></td>
            </tr>
             <tr>
               
                 <td colspan="2" align="center"><input type="submit" name="cart" value="BUY" class="btn btn-warning"/></td>
            </tr>
        </table>
        <i style="color: #d9534f">*</i>
        <?php
        if(isset($_POST['cart'])){
            $t_num=$_POST['t_num'];
            $c_num=$_POST['c_num'];
            $s_num=$_POST['s_num'];
             $q_num=$_POST['q_num'];
              date_default_timezone_set('Asia/Calcutta');
                $time = date('H:i:s');
                $date = date('Y-m-d');
                $day= date('l');
            $sel26=  mysql_query("select * from bank where acnt='$f'");
            if(mysql_num_rows($sel26)>0)
            {
               $r15=mysql_fetch_row($sel26);
               if($r15[8]>=$c)
               {
                     $ins6=mysql_query("insert into cart1 values('','$a','$b','$c','$d','$e','$t_num','$c_num','$q_num','$s_num','0','$f','$g','$date','$day','$time')");  
          if($ins6>0)
          {
              echo "Request send";
              $amnt=$q_num*$c;
             $rt=$amnt/10;
              $up7=mysql_query("update bank set amount=amount-$amnt where acnt='$f'");
              
                  $up1=mysql_query("update bank set amount=amount+($amnt-$rt) where acnt='$g'"); 
                  $adm=0;
                  
                  $up2=mysql_query("update bank set amount=amount+$rt where acnt='$adm'");
            
          }
               }
 else {
     ?>
        <font style="color: #d9534f" align="center">
        <?php
     echo "Insufficient amount in your account, so you can not able to purchase this product";
      ?>
        </font>
        <?php
 }
            }
        
        }
        ?>
    </form>
    
</div>
<div>
					
         
            
</div>
<div class="clearfix"> </div>
<!-- //new -->
<!-- //footer -->

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