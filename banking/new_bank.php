<?php

include("connection.php");
session_start();
$u=$_SESSION['bank'];
 if($u=$_SESSION['bank'])
 {
     
 }
 else {
header("location:index.php");     
}
?>
<html>
<head>
<title>bank</title>

                             
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />


<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

<link href="css/font-awesome.css" rel="stylesheet"> 

<script src="js/jquery-1.11.1.min.js"></script>
<link href="css/slider.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
    <style>
        body{
            background: url("jpeg.jpg");
            background-size: cover;
        }
    </style>
    <style>
          


.wrap {
  width: 100%;
  height: 100%;
  min-height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  z-index: 99;
}

p.form-title {
  font-family: 'Open Sans' , sans-serif;
  font-size: 30px;
  font-weight: 600;
  text-align: center;
  color: #FFFFFF;
  margin-top: 5%;
  text-transform: uppercase;
  letter-spacing: 4px;
}

form {
  width: 500px;
  margin: 0 auto;
}

form input[type="text"], form input[type="password"]  {
  width: 100%;
  margin: 0;
  padding: 5px 10px;
  background: 0;
  border: 0;
  border-bottom: 1px solid #FFFFFF;
  outline: 0;
  font-style: italic;
  font-size: 16px;
  font-weight: 400;
  letter-spacing: 1px;
  margin-bottom: 5px;
  color: #FFFFFF;
  outline: 0;
}

form input[type="submit"] {
  width: 100%;
  font-size: 16px;
  text-transform: uppercase;
  font-weight: 500;
  margin-top: 16px;
  
  outline: 0;
  cursor: pointer;
  letter-spacing: 1px;
}
.textarea {
   width: 100%;
  margin: 0;
  padding: 5px 10px;
  background: 0;
  border: 0;
  border-bottom: 1px solid #FFFFFF;
  outline: 0;
  font-style: italic;
  font-size: 12px;
  font-weight: 400;
  letter-spacing: 1px;
  margin-bottom: 5px;
  color: #FFFFFF;
  outline: 0;
}
form  input[type="submit"]:hover {
  transition: background-color 0.5s ease;
}

form .remember-forgot {
  float: left;
  width: 100%;
  margin: 10px 0 0 0;
}

form .forgot-pass-content {
  min-height: 20px;
  margin-top: 10px;
  margin-bottom: 10px;
}

form label, form.login a {
  font-size: 12px;
  font-weight: 400;
  color: #FFFFFF;
}

form a {
  transition: color 0.5s ease;
}

form a:hover {
  color: #2ecc71;
}

.pr-wrap {
  width: 100%;
  height: 100%;
  min-height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  z-index: 999;
  display: none;
}


        </style>
        <link href="css/font-awesome.css" rel="stylesheet"> 
</head>
<body>
<div class="btm_border">

<div class="wrap">
	<div class="header">
		<div class="logo">
		
		</div>
		<div class="social-icons">
			<ul>
			     <li><a class="facebook" href="#" target="_blank"> </a></li>
			     <li><a class="twitter" href="#" target="_blank"></a></li>
			     <li><a class="googleplus" href="#" target="_blank"></a></li>
			     <li><a class="pinterest" href="#" target="_blank"></a></li>
			     <li><a class="dribbble" href="#" target="_blank"></a></li>
			     <li><a class="vimeo" href="#" target="_blank"></a></li>
		   </ul>
		</div>	
		<div class="clear"></div>
        </div>
	<div class='h_btm'>
		<div class='cssmenu'>
			<ul>
                            <li><a href="new_bank.php">Home</a></li>
					<li><a href="new_bank.php">New Account</a></li>
					<li><a href="dep_bank.php">Credit</a></li>
                                        <li><a href="logout.php">Logout</a></li>
			 </ul>
	</div>

            
	<div class="clear"></div>
</div>
    <div class="col-lg-2 col-md-2"></div>
    <div class="col-lg-8 col-md-8">
    <form method="post" name="login" enctype="multipart/form-data">
        <h3 style="color:  #FFFFFF"><p align="center"><b>New User</b></p></h3>
                                        <table >
                                            <tr>
                                                <td><b>Name</b></td>
                                                <td><input type="text" name="name" class="form-control" /></td>
                                            </tr>
                                             <tr>
                                                 <td><b>Address</b></td>
                                                 <td><textarea rows="5" cols="5" name="address" class="textarea form-control"></textarea></td>
                                            </tr>
                                            <tr>
                                                <td><b>Contact</b></td>
                                                 <td><input type="text" name="c" maxlength="10" class="form-control" /></td>
                                            </tr>
                                            <tr>
                                                <td><b>Photo</b></td>
                                                 <td><input type="file" name="dp"  /></td>
                                            </tr>
                                             <tr>
                                                 <td><b>Id proof</b></td>
                                                 <td><input type="file"  name="idp" /></td>
                                            </tr>
                                            <tr>
                                                <td><b>A/c number</b></td>
                                                 <td><input type="text" name="ac_num" class="form-control" /></td>
                                            </tr>
                                            <tr>
                                                <td><b>Aadar number</b></td>
                                                 <td><input type="text" name="adar" id="adar" maxlength="19" class="form-control" onkeyup="checkadhar()"/></td>
                                            </tr>
                                             <tr>
                                                 <td colspan="2" align="center"><input type="submit" name="bank" value="done" class="btn btn-default"/></td>
                                            </tr>
                                        </table>
                                        
                                       
                                     
    </form>
                                         <?php
                                      if (isset($_POST['bank']))
                                        { 
                                            $name=$_POST['name'];
                                            $address=$_POST['address'];
                                            $c=$_POST['c'];
                                            $dp=$_FILES['dp']['name']; 
                                            $idp=$_FILES['idp']['name']; 
                                            $ac_num=$_POST['ac_num'];
                                            $adar=$_POST['adar'];
                                            $ndp=$adar."".substr($dp,strrpos($dp,"."));
                                            move_uploaded_file($_FILES['dp']['tmp_name'],getcwd()."\\user\\$ndp");
                                            $nidp=$ac_num."".substr($idp,strrpos($idp,"."));
                                            move_uploaded_file($_FILES['idp']['tmp_name'],getcwd()."\\proof\\$nidp");
                                            $ins1=  mysql_query("insert into bank values('','$name','$address','$c','$ndp','$nidp','$ac_num','$adar','0')");
                                            if($ins1>0)
                                            {
                                               echo "Account created";
                                            }  else 
                                                {
                                               echo "sorry";    
                                                }
                                        }
                                        ?> 
    </div>
				
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
			</div>
</div>
</div>
    <div class="clear"></div>
    

</body>
</html>