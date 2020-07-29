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
	<div class="newproducts-w3agile col-lg-4 col-md-4">
            <form method="post" enctype="multipart/form-data">
                <h1 style="color: #F19E1F;">Station manegment
                </h1>
                <table class="table table-responsive table-striped table-condensed table-hover table-bordered">
                    <tr>
                        <td>Station id</td>
                        <td><input type="text" name="stid" id="stid" class="form-control" />      
                        </td>
                    </tr> 
                    <tr>
                        <td>State</td>
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
                        <td>District</td>
                       <td>
                                    <span id="dis">
                                        <select name="dist" class="form-control" required="required">
                                        <option value="">Choose District</option>
                                        </select>
                                    </span>
                                </td>
                    </tr> 
                    <tr>
                        <td>Station name</td>
                        <td><input type="text" name="stname" id="stname" class="form-control" />      
                        </td>
                    </tr> 
                    <tr>
                        <td>Station code</td>
                        <td><input type="text" name="stcd" id="stcd" class="form-control" />      
                        </td>
                    </tr> 
                      <tr>
                          <td colspan="2" align="center"><input type="submit" name="mngTrain" value="Manage it" class="btn btn-danger btn-sm"/></td>
                    </tr>
                </table>
                <?php
                if(isset($_POST['mngTrain']))
{
  $stid=$_POST['stid'];
  $state=$_POST['stat'];
  $dis=$_POST['dist'];
  $stname=$_POST['stname'];
  $stcd=$_POST['stcd'];
     
      $ins7=  mysql_query("insert into train_mangmt values('','$stid','$state','$dis','$stname','$stcd')");
      
}
?>
            </form>
	</div>
<div class=" col-lg-4 col-md-4">
    <h2 style="color:  #F19E1F;" align="center">Avaiable stations</h2>
    <?php 
    $sel11=  mysql_query("select * from train_mangmt");
    if (mysql_num_rows($sel11)>0)
    {
           ?>
    <table class="table table-responsive table-bordered table-striped table-hover table-condensed">
        <tr>
            <td>#</td>
            <td>station id</td>
             <td>state</td>
              
               <td>District</td>
                <td>station</td>
                 <td>code</td>
                 
        </tr>
    
    <?php
    $i=0;
        while($r6=  mysql_fetch_row($sel11))
        {
            $i++;
           ?>
 
        <tr>
            <td><?php echo $i ?></td>
             <td><?php echo $r6[1] ?></td>
              <td><?php 
              $sel41=  mysql_query("select * from state where StCode='$r6[2]'");
              if(mysql_num_rows($sel41)>0)
              {
                  $r30=  mysql_fetch_row($sel41);
                  echo $r30[1];
              }
              
              ?></td>
               <td><?php 
              $sel42=  mysql_query("select * from district where DistCode='$r6[3]'");
              if(mysql_num_rows($sel42)>0)
              {
                  $r30=  mysql_fetch_row($sel42);
                  echo $r30[2];
              }
              ?></td>
                <td><?php echo $r6[4] ?></td>
                 <td><?php echo $r6[5] ?></td>
       
        </tr>
    
    <?php
        }
        ?>
    </table>
        <?php
    }
    
    
    ?>
</div>
<div class="clearfix"> </div>
<!-- //new -->
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