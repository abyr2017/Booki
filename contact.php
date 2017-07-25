<?php
session_start();
$db= mysqli_connect('35.160.127.179','fake','true7102','fake');
if($db && isset($_POST['submit']))
{
	$tmp_name = $_FILES['image']['tmp_name'];
    $file_name = time() . ".png";
    if (move_uploaded_file($tmp_name, $file_name)) {
			$result=$db->query("INSERT INTO BookShelf ( name , Description , auteur , editeur , owner  ,image ) VALUES( '{$_POST['name']}' , '{$_POST['Description']}' , '{$_POST['auteur']}' ,'{$_POST['editeur']}' ,'{$_SESSION['id']}'  ,'{$file_name}')");
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Add a Book</title>
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
<script src="js/simpleCart.min.js"> </script>
<!-- start menu -->
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<!-- /start menu -->
		  		 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<!-- js -->
		 <script src="js/bootstrap.js"></script>
	<!-- js -->
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
					<h1><a href="product.php"><img src="images/logo-01.png" alt=""></a></h1>
				</div>

				<div class="top-nav">
					<ul class="memenu skyblue">
						<li ><a href="product.php" >BookShelf</a></li>
						<li class="active"><a href="contact.php">Add a book</a></li>
					</ul>
					<div class="clearfix"> </div>
				</div>
					<!---->
					<div class="cart box_1">
						<a href="checkout.html">
						<h3> <div class="total">
							<span class="simpleCart_total"> </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> </span>)</div>
							<img src="images/cart.png" alt=""/></h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
						<div class="clearfix"> </div>
					</div>

<div class="clearfix"> </div>
					<!---->
				</div>
				</div>
				</div>
					</div>
<!---->
<div class="back">
	<h2>Contact</h2>
</div>
		<!---->
		<div class="container">
			<div class="contact">

				<div class=" contact-top-in">
					<h3>View On Map</h3>
					<div class="map">
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1675115.8258740564!2d-98.4671417929578!3d34.91371150021706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1434956093308" frameborder="0" style="border:0" allowfullscreen></iframe>

					</div>

					<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas.
						At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas.At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas. </p>

				</div>
				<div class=" contact-top">
					<h3>Want to add a book to our bookshelf ?</h3>

							<?php if (isset($_SESSION['name'])):?>

						<form method ="POST"  action="contact.php" enctype="multipart/form-data">
							<div>
							<span>book name </span>
							<input type="text" value="" name="name" >
						</div>
						<div>
							<span>description </span>
							<textarea type="text" value="" name="Description" placeholder="tell us about your book"> </textarea>
						</div>
						<div>
							<span>Author</span>
							<input type="text" value="" name="auteur" >
						</div>
						<div>
							<div>
							<span>Editeur</span>
							<input type="text" value="" name="editeur" >
						</div>
						<div>
							<span>Picture</span>
							<input type="file" name="image" value="upload">

						</div>

						<input type="submit" value="SEND" name="submit" >
						</form>
						<?php endif ?>
						<p> <a href ="account.php">Log in</a> or <a href="register.php">Create an account </a></p>
				</div>

		</div>
	</div>
<div class="bottom-grid1">

					<div class="fit1">
						<h3>Meet your next favourite book</h3>
						<p>We are part of everything that we have read</p>
					</div>
				</div>
<!---->
<div class="footer">
		<div class="container ">
			<div class="col-md-4">

			</div>

			<div class="col-md-4 footer-bottom text-center">
				<h3 class="text-center">Get In Touch</h3>
				<div class="logo-footer text-center">
					<ul class="social text-center">
												<li><a href="https://www.facebook.com/booki2017/"><i class="fb"> </i> </a></li>
												<li><a href="https://twitter.com/Booki2017"><i class="twitter"></i></a></li>

												<div class="clearfix"></div>
										</ul>
					<div class="clearfix"> </div>
				</div>
				<div class="indo">
					<ul class="social-footer ">
						<li><span><i class="glyphicon glyphicon-earphone"> </i>+216 52 639 120 </span></li>
						<li><a href="mailto:info@example.com"><i class="glyphicon glyphicon-envelope" class="mes"> </i>info.booki.com@gmail.com</a></li>
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
