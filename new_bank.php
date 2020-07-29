<?php
include "connection.php";
if (isset($_POST['bank'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $c = $_POST['c'];
    $dp = $_FILES['dp']['name'];

    $idp = $_FILES['idp']['name'];
    $ac_num = $_POST['ac_num'];
    $adar = $_POST['adar'];
    $ndp = $adar . "" . substr($dp, strrpos($dp, "."));
    // print_r(getcwd()."/user/$ndp");exit;
    move_uploaded_file($_FILES['dp']['tmp_name'], getcwd() . "/user/$ndp");
    $nidp = $ac_num . "" . substr($idp, strrpos($idp, "."));
	move_uploaded_file($_FILES['idp']['tmp_name'], getcwd() . "/proof/$nidp");
	// $sql = "INSERT INTO bank(name, addr, cont, ph, id_proof, acnt, aadar, amount) VALUES ('$name','$address','$c','$ndp','$nidp','$ac_num','$adar',0)");
	$sql = "insert into bank (name, addr, cont, ph, id_proof, acnt, aadar) 
			values ('".$name."','".$address."','".$c."','".$ndp."','".$nidp."','".$ac_num."','".$adar."')";
    $ins1 = mysql_query($sql);
	if ($ins1 > 0) {
        echo "Account created";
    }
}
session_start();
$u = $_SESSION['bank'];
?>

<!DOCTYPE html>
<html>

<head>

    <title>bank</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="Bootstrap Responsive Templates, Iphone Compatible Templates, Smartphone Compatible Templates, Ipad Compatible Templates, Flat Responsive Templates" />
    <script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link
        href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
        rel='stylesheet' type='text/css'>
    <script src="js/jquery.min.js"></script>
    <!---- start-smoth-scrolling---->
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
                        $(".scroll").click(function(event) {
                            event.preventDefault();
                            $('html,body').animate({
                                scrollTop: $(this.hash).offset().top
                            }, 1000);
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
                <h3 style="color: blue;" align="center">New Account</h3>
                <div class="admi-main">
                    <div class="col-md-7 admi-main-left">
                        <div id="top" class="callbacks_container">
                            <ul class="rslides" id="slider4">
                                <li>
                                    <img src="images/admi-1.jpg" alt="">
                                </li>
                                <li>
                                    <img src="images/admi-2.jpg" alt="">
                                </li>

                            </ul>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="col-md-3 admin-bottom-left">
                        <form method="post" enctype="multipart/form-data" name="bank">
                            <table class="table table-condensed table-responsive table-striped">
                                <tr>
                                    <td>Name</td>
                                    <td><input type="text" name="name" class="form-control" /></td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td><textarea name="address" class="form-control"></textarea></td>
                                </tr>
                                <tr>
                                    <td>Contact</td>
                                    <td><input type="text" name="c" maxlength="10" class="form-control" /></td>
                                </tr>
                                <tr>
                                    <td>Photo</td>
                                    <td><input type="file" name="dp" class="form-control" /></td>
                                </tr>
                                <tr>
                                    <td>Id proof</td>
                                    <td><input type="file" name="idp" class="form-control" /></td>
                                </tr>
                                <tr>
                                    <td>A/c number</td>
                                    <td><input type="text" name="ac_num" class="form-control" /></td>
                                </tr>
                                <tr>
                                    <td>Adar number</td>
                                    <td><input type="text" name="adar" id="adar" maxlength="19" class="form-control"
                                            onkeyup="checkadhar()" /></td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center">
                                        <input type="submit" name="bank" value="Done" class="btn btn-warning" /></td>
                                </tr>
                            </table>

                        </form>
                        <div class="clearfix"></div>
                        <script>
                        function checkadhar() {

                            var adar = document.getElementById("adar").value;
                            var len = adar.length;
                            if (len == 4) {
                                document.getElementById("adar").value = adar + "-";
                            }
                            if (len == 9) {
                                document.getElementById("adar").value = adar + "-";
                            }
                            if (len == 14) {
                                document.getElementById("adar").value = adar + "-";
                            }
                        }
                        </script>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="admin-bottom">

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--end-admissions-->
    <!--Slider-Starts-Here-->
    <script src="js/responsiveslides.min.js"></script>
    <script>
    // You can also use "$(window).load(function() {"
    $(function() {
        // Slideshow 4
        $("#slider4").responsiveSlides({
            auto: true,
            pager: true,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            before: function() {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function() {
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
                    <p>Design by <a href="http://w3layouts.com/">W3layouts</a></p>
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

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
        </script>
        <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;">
            </span></a>
    </div>
    <!--end-footer-->
</body>

</html>
