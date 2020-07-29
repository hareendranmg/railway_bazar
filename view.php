<?php
include("connection.php");
 session_start();
$u=$_SESSION['bank'];
if(isset($_GET['a']))
{
    $a=$_GET['a'];
}
if(isset($_GET['b']))
{
    $b=$_GET['b'];
}
?>

<!DOCTYPE html>
<html>
<head>
<title>railway</title>
<meta name="viewport" content="width=device-width, initial-scale=1">	
<meta name="keywords" content="Bootstrap Responsive Templates, Iphone Compatible Templates, Smartphone Compatible Templates, Ipad Compatible Templates, Flat Responsive Templates"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<script src="js/jquery.min.js"></script>  
<!---- start-smoth-scrolling---->
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

<!---- start-smoth-scrolling---->
</head>
<body>
	<div class="banner1" id="home">
		<div class="container">
			<div class="header">
				<div class="menu">
                                     <a class="toggleMenu" href="#"><img src="images/menu-icon.png" alt="" /> </a>
					<ul class="nav" id="nav">
					<li><a href="new_bank.php">Home</a></li>
					<li><a href="new_bank.php">New Account</a></li>
					<li><a href="dep_bank.php">Deposite</a></li>
					<li><a href="logout.php">Logout</a></li>
					</ul>
                                  <!----start-top-nav-script---->
		                      <script type="text/javascript" src="js/responsive-nav.js"></script>
					<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
					</script>
		<!----//End-top-nav-script---->
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--start-admissions-->
	<div class="admission">
		<div class="container">
			<div class="admi-top">
                          
				<div class="admi-main">
					<div class="col-md-7 admi-main-left">
						<div  id="top" class="callbacks_container">
			      		<ul class="rslides" id="slider4">
			        	<?php
                                       $sel23=  mysql_query("select * from bank");
                                       if(mysql_num_rows($sel23)>0)
                                       {
                                         $r1=  mysql_fetch_row($sel23);
                                         ?>
                                            
                                            <table class="table table-responsive table-condensed table-bordered table-hover table-striped">
                                                <tr>
                                                    <td colspan="2"><img src="user/<?php echo $r1[4] ?>"</td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>Name</td>
                                                    <td><?php echo $r1[1] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Address</td>
                                                    <td><?php echo $r1[2] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Contact</td>
                                                    <td><?php echo $r1[3] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Ac number</td>
                                                    <td><?php echo $r1[6] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Aadar number</td>
                                                    <td><?php echo $r1[7] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Ammount</td>
                                                    <td><?php echo $r1[8] ?><span class="fa  fa-inr"></span></td>
                                                </tr>
                                            </table>
                                            
                                            <?php
                                       }
                                        ?>
						
			      </ul>
			    </div>
			    <div class="clearfix"> </div>
					</div>
					<div class="col-md-3 admin-bottom-left">
                                  
				<div class="clearfix"></div>
			</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="admin-bottom">
				                                  <script>
    
     function checkadhar(){
     
     var adar=document.getElementById("adar").value;
     var len=adar.length;
     if(len==4)
     {
         document.getElementById("adar").value=adar+"-";
     }
      if(len==9)
     {
         document.getElementById("adar").value=adar+"-";
     }
      if(len==14)
     {
         document.getElementById("adar").value=adar+"-";
     }
 }
    </script>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--end-admissions-->
	<!--Slider-Starts-Here-->
			<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
			<!--End-slider-script-->
	<!--start-footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-main">
				<div class="col-md-6 footer-left">
					<ul>
						<li><a href="#"><span class="fb"> </span></a></li>
						<li><a href="#"><span class="twit"> </span></a></li>
						<li><a href="#"><span class="in"> </span></a></li>
					</ul>
				</div>
				<div class="col-md-6 footer-right">
				
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
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
					<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
	<!--end-footer-->
</body>
</html>