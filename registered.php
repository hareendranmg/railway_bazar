<?php
include "connection.php";
if (isset($_POST['reg'])) {
    $nme = $_POST['nme'];
    $addr = $_POST['addr'];
    $mobno = $_POST['mobno'];
    $adhr_no = $_POST['adr_no'];
    $ac_no = $_POST['ac_no'];
    $gender = $_POST['gender'];
    $em = $_POST['em'];
    $dob = $_POST['dob'];
    $selloc = $_POST['stat'];
    $dist = $_POST['dist'];
    $updp = $_FILES['updp']['name'];
    $unme = $_POST['unme'];
    $p = $_POST['p'];
    $nupdp = $unme . "" . substr($updp, strrpos($updp, "."));
    move_uploaded_file($_FILES['updp']['tmp_name'], getcwd() . "\\user_dp\\$nupdp");
    $sel24 = mysql_query("select * from bank where acnt='$ac_no'");
    if (mysql_num_rows($sel24) > 0) {
        $r = mysql_fetch_row($sel24);
        $sql = "insert into user_reg (user_name, user_adrs, user_mobno, user_adhar_no, user_ac_no, user_em, gender, user_dob, stat, user_dp, user_id, user_pass, user_type, dist)
                            values('".$nme."','".$addr."','".$mobno."','".$adhr_no."','".$ac_no."','".$em."','".$gender."','".$dob."','".$selloc."','".$nupdp."','".$unme."','".$p."','user','".$dist."')";
        $ins = mysql_query($sql);
        print_r($ins);
        if ($ins > 0) {
            header("location:registered.php");
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
 function validateForm() {

       var a=/([a-zA-z.,0-9])$/;
       var b=/([a-zA-z])$/;
       var c=/([0-9])$/;
    var x = document.forms["myForm"]["name1"].value;
    if (x == "") {
        alert("Name must be filled out");
        document.forms["myForm"]["name1"].focus();
        return false;

                }
                if(b.test(x)==false)
                {
                    alert("Enter a valid name");
                     document.forms["myForm"]["name1"].value="";
                     document.forms["myForm"]["name1"].focus();
                     return false;

                }

         var addr = document.forms["myForm"]["addr"].value;
    if (addr == "") {
        alert("Address must be filled out");
        return false;


        }
         if(a.test(addr)==false)
                {
                    alert("Enter a valid Addres");
                     document.forms["myForm"]["addr"].value="";
                     document.forms["myForm"]["addr"].focus();
                     return false;
                }
        var mobno = document.forms["myForm"]["mobno"].value;
    if (mobno==" ") {
        alert("Contact must be filled out");
        return false;


        }

        var selloc = document.forms["myForm"]["selloc"].value;
    if (selloc == "-1") {
        alert("Locality must be filled out");
        return false;


        }
         var unme = document.forms["myForm"]["unme"].value;
    if (unme == "") {
        alert("User id must be filled out");
        return false;


        }
         if(a.test(unme)==false)
                {
                    alert("Enter a valid User User ID");
                     document.forms["myForm"]["unme"].value="";
                     document.forms["myForm"]["unme"].focus();
                     return false;
                }
                 var p = document.forms["myForm"]["p"].value;
    if (p == "") {
        alert("Password id must be filled out");
        return false;


        }
         if(a.test(p)==false)
                {
                    alert("Enter a valid User Password");
                     document.forms["myForm"]["p"].value="";
                     document.forms["myForm"]["p"].focus();
                     return false;
                }
                 var cp = document.forms["myForm"]["cp"].value;
                   var p = document.forms["myForm"]["p"].value;
    if (cp == "") {
        alert("confirmation must be filled out");
        return false;


        }
        if (cp!=p) {

     alert("confirmation must be filled out");
        return false;


        }
         var wrkdes = document.forms["myForm"]["wrkdes"].value;
    if (wrkdes == "") {
        alert("Work description must be filled out");
        return false;


        }


    }

        </script>
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
					<li><a href="registered.php"> Create Account </a></li>
					<li><a href="login.php">Login</a></li>


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
				<h1><a href="index.php">Railway bazaar</a></h1>
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

							</nav>
			</div>
		</div>

<!-- //navigation -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php "><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Register Page</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- register -->
	<div class="register">
		<div class="container">
			<h2>User  Register Here</h2>
			<div class="login-form-grids">

                                   <form method="post" enctype="multipart/form-data" name="myForm" onsubmit="return validateForm()">

                                                  <table class="table table-striped table-responsive table-bordered table-hover table-condensed tab-content tab-pane">
                                              <tr>
                                                  <td>Name </td>
                                                  <td><input type="text" name="nme" id="name1" class="form-control" /></td>
                                              </tr>


                                                <tr>
                                                  <td>Address </td>
                                                  <td><textarea name="addr" id="addr" class="form-control"></textarea></td>
                                              </tr>
                                                <tr>
                                                  <td>Contact</td>
                                                  <td><input type="text" name="mobno" id="adr_no" maxlength="10" class="form-control"/></td>
                                              </tr>
                                            <tr>
                                                  <td>Adhar Number</td>
                                                  <td><input type="text" name="adr_no" id="adar" maxlength="19" onkeyup="return checkadhar()" class="form-control"/></td>
                                              </tr>

                                              <tr>
                                                  <td>Bank A/C Number</td>
                                                  <td><input type="number" name="ac_no" id="bank" maxlength="16" class="form-control"/></td>
                                              </tr>


                                                <tr>
                                                    <td>mail</td>
                                                    <td><input type="email" name="em" id="em" class="form-control"/></td>
                                              </tr>
                                                <tr>
                                                  <td>Gender</td>
                                                  <td><input type="radio" name="gender" id="gender" value="female">Female </br/><input type="radio" name="gender"  id="gender" value="male">Male </br/></td>
                                              </tr>
                                              <tr>
                                                  <td>date of birth </td>
                                                  <td><input type="date" name="dob" id="dob" class="form-control"/></td>
                                              </tr>

                                                <tr>
                        <td>State</td>
                         <td>
                                    <select name="stat" id="stat" class="form-control" required="required" onchange="loaddistrict(this.value);loadst_hos(this.value)">
                                        <option value="">Choose State</option>
                                        <?php
$sel_state = mysql_query("select * from state");
while ($r_state = mysql_fetch_row($sel_state)) {
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
                                                  <td>Update profile </td>
                                                  <td><input type="file" name="updp" id="updp" class="form-control"/></td>
                                              </tr>
                                                <tr>
                                                  <td>User name </td>
                                                  <td><input type="text" name="unme" id="unme" class="form-control"/></td>
                                              </tr>
                                                <tr>
                                                  <td>Password</td>
                                                  <td><input type="password" name="p" id="p" class="form-control"/></td>
                                              </tr>  <tr>
                                                  <td>Confirm Password </td>
                                                  <td><input type="password" name="cp" id="cp" class="form-control"/></td>
                                              </tr>



                                                <tr>

                                                    <td colspan="2" align="center"><input type="submit" name="reg" value="register"  class="btn btn-danger btn-block"/></td>
                                              </tr>


                                          </table>


                                      </form>
                            <h4>Shops Port</h4>
			<p><a href="shop_registered.php">For a shop Registration</a> (Or) go back to <a href="index.html">Home<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></p>
			</div>

		</div>
	</div>
<!-- //register -->
<!-- //footer -->
<div class="footer">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-md-6 w3_footer_grid">
					<h3>Contact</h3>

					<ul class="address">
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Railway Bazaar <span>TRVM City.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:railwaybazaar@gmail.com">railwaybazaar@gmail.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
					</ul>
				</div>

				<div class="col-md-6 w3_footer_grid">

					<h3>Profile</h3>
					<ul class="info">
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="login.php">Store</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="login.php">My Cart</a></li>

						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="login.php">Login</a></li>
                                                <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="registered.php">Create Account</a></li>

					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>

		<div class="footer-copy">

			<div class="container">
				<p>© 2017 Railway Bazaar. All rights reserved | Design by <a href="http://railway_bazaar.com/">Railway bazaar</a></p>
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