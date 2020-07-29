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
                                                                        <li><a href="shop_compliants.php">Compliants</a></li>
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
    <span><img src="shop/<?php echo $r8[6] ?>" class="img img-responsive img-thumbnail" width="150px"/></span>
    <?php
   }
   ?>
                    </div> 
<!--banner-bottom-->
<!--brands-->
<div>
    
</div>
<!--//brands-->
<!-- new -->
	<div class="newproducts-vw3agile col-lg-10 col-md-10">
            <h2 style="color: #ec971f; " align="center"><?php echo strtoupper($user_name); ?> Manegment portal</h2>
           <h4 style="color: #ec971f; " align="center">chat with</h4>
           <?php
  $sel37=  mysql_query("select distinct user_name from communication");

  if(mysql_num_rows($sel37)>0)
  {
      $sel38=mysql_query("select * from shop_reg where user_id='$user_name'");
      if (mysql_num_rows($sel38)>0)
      {
          while ($r28=  mysql_fetch_row($sel37))
          {
              ?><a href="chat.php?a=<?php echo $r28[0] ?>"><?php echo strtoupper($r28[0]); ?></a>
              <br/>
              <?php
          }
      }
  }
  ?>
	</div>
     
<div class="clearfix"> </div>
<!-- //new -->

<!-- //footer -->
<div class="col-lg-2 col-md-2"></div>
<div class="col-lg-7 col-md-7">
 
             
              <div  style="width:500px; height: 400px; overflow-y: scroll; border: 10px groove #fab005; background: url('images/loading.gif');background-size: cover;">
               <?php
                if(isset($_GET['a']))
            {
                    $a=$_GET['a'];
  $sel39=  mysql_query("select * from communication");

  if(mysql_num_rows($sel39)>0)
  {
      $sel38=mysql_query("select * from shop_reg where user_id='$user_name'");
      if (mysql_num_rows($sel38)>0)
      {
           $r29=  mysql_fetch_row($sel38);
                
        if(isset($_POST['msg']))
        {
           
                $a=$_GET['a'];
         
              
                 $m=$_POST['m'];
                 $ins8=  mysql_query("insert into communication values('','$r29[2]','$a','$m','0')");
                 if ($ins8>0)
                 {
                     echo "msg send";
                   
                 }
            
           
            
        
        }
           $sel40=  mysql_query("select * from communication where (shop_name='$r29[2]' and user_name='$a') or(shop_name='$a' and user_name='$r29[2]') order by id DESC");
             while ($r27=  mysql_fetch_row($sel40)) 
        {
        if($r27[1]=="$a")
        {
           ?>
    <br /><br /><br /><br />
    <p style="float:left; background-color: #A9A9A9;" class="well"><?php echo $r27[3]; ?></p>
               <?php
        }
        else
        {
           ?> 
    <br /><br /><br /><br />
    <p style="float:right; background-color: #EDEDED;" class="well"> <?php echo $r27[3]; ?></p>  
          <?php
        }
    }
          ?>
    
              </div> 
    <div class="clearfix"></div>
           <form method="post">
               <table class="table table-striped table-responsive table-hover table-condensed table-bordered" style="width:500px;">
                   <tr style="border: 4px solid #fab005">
                <td><p style="width: 400px ;float: left "><textarea name="m" class="form-control"  placeholder="start/ continue a chat"></textarea></p>
                    <span style="float:right;padding: 8px"><input type="submit"  name="msg" value="send" class="btn btn-warning"/></span></td>
            </tr>
        </table>
               <?php
          while ($r28=  mysql_fetch_row($sel39))
          {
             ?>
              
       
    </form>
              
              
              <?php
          }
      }
  }
            }
  ?>
</div>

<div class="col-lg-2 col-md-2"></div>
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