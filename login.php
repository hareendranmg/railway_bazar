<?php
include "connection.php";
if (isset($_POST['login'])) {

    $user_name = $_POST['user_name'];
    $p = $_POST['p'];
    $sel1 = mysql_query("select * from user_reg where user_id='$user_name' and user_pass='$p'");
    if (mysql_num_rows($sel1) > 0) {
        $r = mysql_fetch_row($sel1);

        session_start();

        if ($r[13] == "admin") {

            $_SESSION['admin'] = $user_name;
            header("location:adminhome.php");
        } elseif ($r[13] == "user") {
            if ($r[14] == "1") {
                $_SESSION['user'] = $user_name;
                header("location:userhome.php");
            }
            if ($r[14] == "0") {

                header("location:login.php?error=2");
            }
        } else {
            header("location:login.php?error='1'");
        }
    }
    $sel6 = mysql_query("select * from shop_reg where user_id='$user_name' and passwd='$p'");
    if (mysql_num_rows($sel6) > 0) {
        session_start();
        $r1 = mysql_fetch_row($sel6);
        if ($r1[10] == "shop_admin") {

            $_SESSION['shop_admin'] = $user_name;
            header("location:shopadminhome.php");
        }
        if ($r1[10] == "shop") {
            if ($r1[11] == "1") {
                $_SESSION['shop'] = $user_name;
                header("location:shophome.php");
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
    <script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
    <!-- //for-mobile-apps -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- font-awesome icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- js -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- //js -->
    <link
        href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic'
        rel='stylesheet' type='text/css'>
    <link
        href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
        rel='stylesheet' type='text/css'>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
    </script>
    <style>
    body {
        background: url("images/ban1.jpg");
        background-size: cover;
    }
    </style>
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

        </div>

        <div class="clearfix"> </div>
    </div>

    <div class="navigation-agileits">

    </div>

    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
                <li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li style="color: #F19E1F">Login Page</li>
            </ol>
        </div>
    </div>

    <div class="login">
        <div class="container">
            <h2 style="color : #F19E1F">Login Form</h2>

            <div class="login-form-grids animated wow  slideInUp" data-wow-delay=".5s" style="float:left">
                <form method="post">
                    <input type="text" placeholder="User Name" name="user_name" required=" ">
                    <input type="password" placeholder="Password" name="p" required=" ">

                    <input type="submit" name="login" value="Login">
                    <h4 style="color :  #F19E1F">For New People</h4>
                    <p style="color :  #000"><a href="registered.php">Register Here</a> (Or) go back to <a
                            href="index.php">Home<span class="glyphicon glyphicon-menu-right"
                                aria-hidden="true"></span></a></p>
            </div>
            </form>
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

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

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
    jQuery(document).ready(function() {
        jQuery('#demo1').skdslider({
            'delay': 5000,
            'animationSpeed': 2000,
            'showNextPrev': true,
            'showPlayButton': true,
            'autoSlide': true,
            'animationType': 'fading'
        });

        jQuery('#responsive').change(function() {
            $('#responsive_wrapper').width(jQuery(this).val());
        });

    });
    </script>
    <!-- //main slider-banner -->

</body>

</html>
