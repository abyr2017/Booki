<?php
session_start();
$db= mysqli_connect('35.160.127.179','fake','true7102','fake');
if($db && isset($_POST['submit']))
{
	$result=$db->query(" insert into BookShelf ( name , Description , auteur , editeur , owner , client ) values ( '{$_POST['name']}' , $'{_POST['Description']}' , '{$_POST['auteur']}' , '{$_SESSION['id']}' )");
	$tmp_name = $_FILES['photo']['tmp_name'];
    $file_name = time() . ".png";
    if (move_uploaded_file($tmp_name, $file_name)) {
      $query = "INSERT INTO BookShelf (image) VALUE ('$file_name')";
      mysqli_query($db, $query);
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>I-wear A Ecommerce Category Flat Bootstarp Resposive Website Template | Contact :: w3layouts</title>
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
					<h1><a href="index.html">I-<span>wear</span></a></h1>
				</div>

			<div class="top-nav">
				<ul class="memenu skyblue"><li><a href="index.html">Home</a></li>
					<li class="grid"><a href="#">Men</a>
						<div class="mepanel">
							<div class="row">
								<div class="col1 me-one">
									<h4>Shop</h4>
									<ul>
										<li><a href="about.html">About</a></li>
										<li><a href="product.html">Men</a></li>
										<li><a href="product.html">Women</a></li>
										<li><a href="product.html">Accessories</a></li>
										<li><a href="product.html">Kids</a></li>
										<li><a href="product.html">login</a></li>
										<li><a href="product.html">Brands</a></li>
										<li><a href="product.html">My Shopping Bag</a></li>
									</ul>
								</div>
								<div class="col1 me-one">
									<h4>Style Zone</h4>
									<ul>
										<li><a href="product.html">Men</a></li>
										<li><a href="product.html">Women</a></li>
										<li><a href="product.html">Brands</a></li>
										<li><a href="product.html">Kids</a></li>
										<li><a href="product.html">Accessories</a></li>
										<li><a href="product.html">Style Videos</a></li>
									</ul>
								</div>
								<div class="col1 me-one">
									<h4>Popular Brands</h4>
									<ul>
										<li><a href="product.html">Levis</a></li>
										<li><a href="product.html">Persol</a></li>
										<li><a href="product.html">Nike</a></li>
										<li><a href="product.html">Edwin</a></li>
										<li><a href="product.html">New Balance</a></li>
										<li><a href="product.html">Jack & Jones</a></li>
										<li><a href="product.html">Paul Smith</a></li>
										<li><a href="product.html">Ray-Ban</a></li>
										<li><a href="product.html">Wood Wood</a></li>
									</ul>
								</div>
							</div>
						</div>
					</li>
					<li class="grid"><a href="#">Women</a>
						<div class="mepanel">
							<div class="row">
								<div class="col1 me-one">
									<h4>Shop</h4>
									<ul>
										<li><a href="about.html">About</a></li>
										<li><a href="product.html">Men</a></li>
										<li><a href="product.html">Women</a></li>
										<li><a href="product.html">Accessories</a></li>
										<li><a href="product.html">Kids</a></li>
										<li><a href="product.html">login</a></li>
										<li><a href="product.html">Brands</a></li>
										<li><a href="product.html">My Shopping Bag</a></li>
									</ul>
								</div>
								<div class="col1 me-one">
									<h4>Style Zone</h4>
									<ul>
										<li><a href="product.html">Men</a></li>
										<li><a href="product.html">Women</a></li>
										<li><a href="product.html">Brands</a></li>
										<li><a href="product.html">Kids</a></li>
										<li><a href="product.html">Accessories</a></li>
										<li><a href="product.html">Style Videos</a></li>
									</ul>
								</div>
								<div class="col1 me-one">
									<h4>Popular Brands</h4>
									<ul>
										<li><a href="product.html">Levis</a></li>
										<li><a href="product.html">Persol</a></li>
										<li><a href="product.html">Nike</a></li>
										<li><a href="product.html">Edwin</a></li>
										<li><a href="product.html">New Balance</a></li>
										<li><a href="product.html">Jack & Jones</a></li>
										<li><a href="product.html">Paul Smith</a></li>
										<li><a href="product.html">Ray-Ban</a></li>
										<li><a href="product.html">Wood Wood</a></li>
									</ul>
								</div>
							</div>
						</div>
					</li>
					<li class="grid"><a href="#">Kids</a>
						<div class="mepanel">
							<div class="row">
								<div class="col1 me-one">
									<h4>Shop</h4>
									<ul>
										<li><a href="about.html">About</a></li>
										<li><a href="product.html">Men</a></li>
										<li><a href="product.html">Women</a></li>
										<li><a href="product.html">Accessories</a></li>
										<li><a href="product.html">Kids</a></li>
										<li><a href="product.html">login</a></li>
										<li><a href="product.html">Brands</a></li>
										<li><a href="product.html">My Shopping Bag</a></li>
									</ul>
								</div>
								<div class="col1 me-one">
									<h4>Style Zone</h4>
									<ul>
										<li><a href="product.html">Men</a></li>
										<li><a href="product.html">Women</a></li>
										<li><a href="product.html">Brands</a></li>
										<li><a href="product.html">Kids</a></li>
										<li><a href="product.html">Accessories</a></li>
										<li><a href="product.html">Style Videos</a></li>
									</ul>
								</div>
								<div class="col1 me-one">
									<h4>Popular Brands</h4>
									<ul>
										<li><a href="product.html">Levis</a></li>
										<li><a href="product.html">Persol</a></li>
										<li><a href="product.html">Nike</a></li>
										<li><a href="product.html">Edwin</a></li>
										<li><a href="product.html">New Balance</a></li>
										<li><a href="product.html">Jack & Jones</a></li>
										<li><a href="product.html">Paul Smith</a></li>
										<li><a href="product.html">Ray-Ban</a></li>
										<li><a href="product.html">Wood Wood</a></li>
									</ul>
								</div>
							</div>
						</div>
					</li>
					<li class="grid"><a href="typography.html">Typo</a>

					</li>
					<li  class="active" class="grid"><a href="contact.html">Contact</a>

					</li>
				</ul>
				<div class="clearfix"> </div>
			</div>
					<!---->
					<div class="cart box_1">
						<a href="checkout.html">
						<h3> <div class="total">
							<span class="simpleCart_total"> </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> </span>)</div>
							<img src="images/cart2-2.png" alt=""/></h3>
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
							<span>Picture</span>
							<input type="file" name="image" value="upload">

						</div>
						
						<input type="submit" value="SEND" method="POST" >
						</form>
						<?php endif ?>
						<p> <a href ="account.php">Log in</a> or <a href="register.php">Create an account </a></p>
				</div>

		</div>
	</div>
<div class="bottom-grid1">

					<div class="fit1">
						<h3>HAPPY SHOPPING</h3>
						<p>Lorem Ipsum sit amet consectuer adipiscing elit
sed diam nonummy nibh euismod</p>
					</div>
				</div>
<!---->
	<div class="footer">
		<div class="container">
			<div class="col-md-4 footer-top">
				<h3>Quick Contact</h3>
				<form>

						<input type="text" value="ENTER YOUR NAME*" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='ENTER YOUR NAME*';}">

						<input type="text" value="ENTER YOUR EMAIL*" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='ENTER YOUR EMAIL*';}">

						<input type="text" value="ENTER YOUR PHONE" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='ENTER YOUR PHONE';}">

						<textarea cols="77" rows="6" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'ENTER YOUR MESSAGE*';}">ENTER YOUR MESSAGE*</textarea>

							<input type="submit" value="SEND MESSAGE" >

					</form>

			</div>
			<div class="col-md-4 footer-middle">
				<h3>Top Rated Products</h3>
					<div class="product-go">
							<div class="grid-product">
								<h6><a href="#" >Winter Combo Style</a></h6>
								<div class="rating">
									<span>☆</span>
									<span>☆</span>
									<span>☆</span>
									<span>☆</span>
									<span>☆</span>
								</div>
								<span class=" price-in"><small>$70.00</small> $40.00</span>
							</div>
								<div class="fashion">
									<a href="#"><img class="img-responsive " src="images/f1.jpg" alt="">
									<p>SALE</p></a>
								</div>
							<div class="clearfix"> </div>
							</div>
								<div class="product-go">
							<div class="grid-product">
								<h6><a href="#" >Winter Combo Style</a></h6>
								<div class="rating">
									<span>☆</span>
									<span>☆</span>
									<span>☆</span>
									<span>☆</span>
									<span>☆</span>
								</div>
								<span class=" price-in"><small>$70.00</small> $40.00</span>
							</div>
								<div class="fashion">
									<a href="#"><img class="img-responsive " src="images/f2.jpg" alt="">
									<p class="new1">NEW</p></a>
								</div>
							<div class="clearfix"> </div>
							</div>
								<div class="product-go">
							<div class="grid-product">
								<h6><a href="#" >Winter Combo Style</a></h6>
								<div class="rating">
									<span>☆</span>
									<span>☆</span>
									<span>☆</span>
									<span>☆</span>
									<span>☆</span>
								</div>
								<span class=" price-in"><small>$70.00</small> $40.00</span>
							</div>
								<div class="fashion">
									<a href="#"><img class="img-responsive " src="images/f3.jpg" alt="">
									<p class="new1">NEW</p></a>
								</div>
							<div class="clearfix"> </div>
							</div>

			</div>
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
			<p class="footer-class">Copyrights © 2015 I Wear. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
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
