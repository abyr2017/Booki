<?php
session_start();
$db= mysqli_connect('35.160.127.179','fake','true7102','fake');
if($db && isset($_POST['submit']))
{
	$result=$db->query("select * FROM Users where Name='{$_POST['name']}' AND pass='{$_POST['pass']}'");
	echo $db->error;
	if (mysqli_num_rows($result) >0) {
		$row = $result->fetch_array();
		$id = $row['id'];
		$_SESSION['signed-in'] = true;
		$_SESSION['id'] = $id ;
		$_SESSION['name'] =  $row['Name'] ;


		echo " <script type='text/javascript'>
		 	alert('Connected');
		 </script>";
	} else {
		echo " <script type='text/javascript'>
		 	alert('Wrong Name Or Password');
		 </script>";
	}
}
 ?>

<!DOCTYPE html>
<html>
<head>
<title>I-wear A Ecommerce Category Flat Bootstarp Resposive Website Template | Account :: w3layouts</title>
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

								<div class="dropdown-content">
									<a href="#">Link 1</a>
									<a href="#">Link 2</a>
									<a href="#">Link 3</a>
								</div>
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
	 			<li ><a href="index.html">BookShelf</a></li>
	 			<li ><a href="#">Add a book</a></li>
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
	<h2>Login</h2>
</div>
		<!---->
		<div class="container">
		<div class="account_grid">
			   <div class=" login-right">
			  	<h3>REGISTERED CUSTOMERS</h3>
				<p>If you have an account with us, please log in.</p>
				<form action="account.php" method="post">
				  <div>
					<span>Email Address</span>
					<input type="text" name="name">
				  </div>
				  <div>
					<span>Password</span>
					<input type="text" name="pass">
				  </div>
				  <a class="forgot" href="#">Forgot Your Password?</a>
				  <input type="submit" name='submit' value="Login">
			    </form>
			   </div>
			    <div class=" login-left">
			  	 <h3>NEW CUSTOMERS</h3>
				 <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
				 <a class="acount-btn" href="register.php">Create an Account</a>
			   </div>

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
			<p class="footer-class">Copyrights © 2017 BOOKI. All rights reserved | Design by FAKE-W4I </p>
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
