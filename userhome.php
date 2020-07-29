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
                            <p>SALE UP TO 70% OFF. USE CODE "SALE70%" . <a href="userhome.php">SHOP NOW</a></p>
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
                                                                        
								
							<li><a href="Medical.php">Medical shop</a></li>
									<li><a href="Hotal.php">Hotal</a></li>
									<li><a href="supper_Market.php">Super Market</a></li>
                                                                        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>         
							</nav>
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
<div class="col-lg-4 col-md-4"></div>
<div class="newproducts-w3agile col-lg-4 col-md-4">
 
    <form method="post" >
         <table class="table table-bordered table-striped table-hover table-responsive">
                            <tr>
                                <td>
                                    <select name="stat" id="stat" class="form-control" required="required" onchange="loaddistrict(this.value);loadst_hos(this.value)">
                                        <option value="">Choose State</option>
                                        <?php
                                        $sel_state=mysql_query("select * from state");
                                        while($r_state=mysql_fetch_row($sel_state))
                                        {
                                            ?>
                                        <option value="<?php echo $r_state[0] ?>"><?php echo $r_state[1] ?></option>
                                       <?php
                                        }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <script type="text/javascript">
                               function loaddistrict(x)
                               {
                                   var xmlhttp = new XMLHttpRequest();
                                    xmlhttp.onreadystatechange = function() {
                                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

                                            document.getElementById("dis").innerHTML = xmlhttp.responseText;
                                        }
                                    };
                                    xmlhttp.open("GET", "load_districtindex.php?x=" + x, true);
                                    xmlhttp.send();
                               }
                               
                            </script>
                            <tr>
                                <td>
                                    <span id="dis">
                                        <select name="dist" class="form-control" required="required">
                                        <option value="">Choose District</option>
                                        </select>
                                    </span>
                                </td>
                            </tr> 
                             <script>
                            function loadstation(x)
                               {
                                   var st=document.getElementById("stat").value;
                                   var xmlhttp = new XMLHttpRequest();
                                    xmlhttp.onreadystatechange = function() {
                                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

                                            document.getElementById("sta").innerHTML = xmlhttp.responseText;
                                        }
                                    };
                                    xmlhttp.open("GET", "load_station.php?x="+ x, true);
                                    xmlhttp.send();
                               }
                               </script>
                            
            <tr>
                                <td>
                                    <span id="sta">
                                        <select name="station" class="form-control" required="required">
                                        <option value="">Choose Station</option>
                                        </select>
                                    </span>
                                </td>
                            </tr>  
                           
                <td  align="center"><input type="submit" name="search" value="search" class="btn btn-warning" /></td>
            </tr>
        </table>
        
        <?php
                    if (isset($_POST['search']))
                    {
                        session_start();
                        $state=$_POST['state'];
                        $_SESSION['state']=$state;
                        $dis=$_POST['dis'];
                         $_SESSION['dis']=$dis;
                        $station=$_POST['station'];
                         $_SESSION['station']=$station;
                         
                          header("location:categories.php");
                    }
        ?>
    </form>
</div>
<div class="clearfix"></div>

<div class="clearfix"> </div>
<!-- //new -->
<!-- //footer -->
<div class="footer">
		<div class="container">
	
		</div>
		
		<div class="footer-copy">
			
			<div class="container">
				<p>© 2017 railway bazar. All rights reserved | Design by <a href="http://railwaybazar.com/">Railway Bazaar</a></p>
			</div>
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