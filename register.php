<?php
session_start();
$db= mysqli_connect('35.160.127.179:3306','fake','true7102','fake');
if ($_POST) {

  $name=$_POST['name'];
  $pass=$_POST['pass'];
  $carte=$_POST['carte'];
  $result= $db->query("INSERT INTO Users (`Name`,`Pass`,`num carte`) VALUES ('$name','$pass','$carte')");

  $success = FALSE;
  if ($result) $success = TRUE;

}
 ?>


<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>I-wear A Ecommerce Category Flat Bootstarp Resposive Website Template | Register :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="I-wear Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Montez' rel='stylesheet' type='text/css'>
<!--//fonts-->
<!-- start menu -->

<!--//slider-script-->

<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });

          <?php if (isset($success) && $success == TRUE) echo "alert('success')"; ?>
</script>
		  		 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<!-- js -->
		 <script src="js/bootstrap.js"></script>
	<!-- js -->

<script src="js/simpleCart.min.js"> </script>
<!-- start menu -->
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<!-- /start menu -->
</head>
<body>
<!--header-->
		<div class="header-info">
			<div class="container">
        <div class="header-top-in">

          <ul class="support">
              <?php if (isset($_SESSION['name'])):?>
            <div class="dropdown">

            <button class="dropbtn"><li><a href="#"><i class="glyphicon glyphicon-user"> </i><?php  echo $_SESSION['name']; ?></a></li></button>
						<?php
							$row = mysqli_fetch_array($db->query("SELECT *  FROM Users WHERE id = '{$_SESSION['id']}' "));

							echo"<div class='dropdown-content'>
										<a href='#'>" . $row['Books given'] . " books given </a>
										<a href='#'>" . $row['books token'] . " books taken</a>
									  <a href='#'>  card number :" . $row['num carte'] . "</a>
										</div>
								 ";
						?>
              </div>
            <?php endif ?>
          </ul>
          <ul class=" support-right">
            <?php if (isset($_SESSION['name'])): ?>
            <li><a href="logout.php"><i class="glyphicon glyphicon-user" class="men"> </i>LogOut</a></li>
          <?php else: ?>
              <li><a href="account.php"><i class="glyphicon glyphicon-user" class="men"> </i>Login</a></li>
            <?php endif; ?>
            <li><a href="register.php"><i class="glyphicon glyphicon-lock" class="tele"> </i>Create an Account</a></li>
          </ul>
          <div class="clearfix"> </div>
        </div>
				</div>
			</div>
<div class="header header5">
	<div class="header-top">

			<div class="header-bottom">
			<div class="container">
				<div class="logo">
					<h1><a href="index.html"><img src="images/logo-01.png" alt=""></a></h1>
				</div>
		 <!---->

     <div class="top-nav">
       <ul class="memenu skyblue">
         <li class="active"><a href="index.html" >BookShelf</a></li>
         <li class="grid"><a href="contact.html">Add a book</a></li>
       </ul>
       <div class="clearfix"> </div>
     </div>
					<!---->


<div class="clearfix"> </div>
					<!---->
				</div>
			<div class="clearfix"> </div>
		</div>
		</div>
 				<div class="clearfix"> </div>
			</div>
<!---->
<div class="back">
	<h2>Register</h2>
</div>
		<!---->
		<div class="container">
		<div class="register">
		<h3>PERSONAL INFORMATION</h3>
		  	  <form method="post" action="register.php">


					<div class="mation">
					<div>
						<span>Name</span>
						<input type="text" name="name" placeholder="ENter your Name">
					</div>
					 <div>
						 <span>Num Carte</span>
						 <input type="text" name="carte" placeholder="ENter your Card Number">
						 </div>
						 <div>
							<span>Password</span>
								<input type="password" name="pass">
					</div>
					 </div>
				     <input type="submit" value="submit">
				</form>


		   </div>
			</div>
			<!---->
					<div class="bottom-grid1">

					<div class="fit1">
						<h3>meet your next favourite book</h3>
						<p>We are part of everything that we have read</p>
					</div>
				</div>
<!---->
	<!---->
	<div class="footer">
		<div class="container">


			<div class="col-md-4 footer-bottom">
				<h3>Get In Touch</h3>
				<div class="logo-footer">
					<ul class="social">
		                    <li><a href="#"><i class="fb"> </i> </a></li>
		                    <li><a href="#"><i class="rss"></i></a></li>
		                    <li><a href="#"><i class="twitter"></i></a></li>
		                    <li><a href="#"><i class="dribble"></i></a></li>
		                    <div class="clearfix"></div>
		                </ul>
					<div class="clearfix"> </div>
				</div>
				<div class="indo">
					<ul class="social-footer ">
						<li><span><i class="glyphicon glyphicon-earphone"> </i>+62 226759804 </span></li>
						<li><a href="mailto:info@example.com"><i class="glyphicon glyphicon-envelope" class="mes"> </i>info@example.com</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-link" class="mes-in"> </i>http://example.com</a></li>
					</ul>
					<a href="#"><img src="images/pa.png" alt=""></a>
					</div>
			</div>
			<div class="clearfix"> </div>
			<p class="footer-class">Copyrights © 2017 BOOKI. All rights reserved | Design by FAKE-W4I</p>
		</div>
	</div>
				 <!---->
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
<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!---->
<!---->
</body>
</html>
