<?php session_start(); ?>

<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>I-wear A Ecommerce Category Flat Bootstarp Resposive Website Template | Product :: w3layouts</title>
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




			<div class="top-nav">
				<ul class="memenu skyblue">
					<li class="active"><a href="index.html" >BookShelf</a></li>
					<li class="grid"><a href="contact.html">Add a book</a></li>
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
			<div class="clearfix"> </div>
		</div>
		</div>
</div>
<!---->
<!---->
<div class="back">
	<h2>Produts</h2>
</div>
		<!---->
		<div class="product">
			<div class="container">
				<div class="col-md-3 product-price">

				<div class=" rsidebar span_1_of_left">
					<div class="of-left">
						<h3 class="cate">CATEGORIES</h3>
					</div>
		 <ul class="menu">
		<li class="item1"><a href="#">Men </a></li>
		<li class="item2"><a href="#">Women </a></li>
		<li class="item3"><a href="#">Kids</a></li>
		<li class="item4"><a href="#">Accesories</a></li>
		<li class="item4"><a href="#">Shoes</a></li>
		</ul>
					</div>
				<!--initiate accordion-->
		<script type="text/javascript">
			$(function() {
			    var menu_ul = $('.menu > li > ul'),
			           menu_a  = $('.menu > li > a');
			    menu_ul.hide();
			    menu_a.click(function(e) {
			        e.preventDefault();
			        if(!$(this).hasClass('active')) {
			            menu_a.removeClass('active');
			            menu_ul.filter(':visible').slideUp('normal');
			            $(this).addClass('active').next().stop(true,true).slideDown('normal');
			        } else {
			            $(this).removeClass('active');
			            $(this).next().stop(true,true).slideUp('normal');
			        }
			    });

			});
		</script>


				</div>


			<!---->

				<!---->
				<div class="col-md-9 product-price1">
					<div class="mens-toolbar">
						<p class="showing">Showing 1–9 of 21 results</p>
	                 <div class="sort">
			            <select>
			                  <option value=""> Sorting By Rate</option>
			                    <option value="">Sorting By Color </option>
			                    <option value="">Sorting By Price </option>
			            </select>

	    		     </div>

                	<div class="clearfix"></div>
		        </div>
						<!--*****************separating the pics of the books from the bellow*************************-->
						<?php

							$db = mysqli_connect('35.160.127.179','fake','true7102','fake');
							/* mysqli_connect(sever,username,password,database)*/


							if($db) {

										$result = $db->query("SELECT * FROM BookShelf ORDER BY RAND() ");
										}
						 ?>
<div class='product-right-top'>
	<div class='top-product'>

							<?php
                while($row = mysqli_fetch_array($result)) {

                  echo "

		        		<div class='col-md-4 chain-grid  simpleCart_shelfIte'>
		        			<div class='grid-span-1'
	   		     		<a  href='single.html'><img class='img-responsive ' src='images/n1.jpg' alt=' '>
	   		     			<div class='link'>
	   		     			<ul >
										<li><i class='glyphicon glyphicon-search'> </i></li>

							</ul>
	   		     		</div>
	   		     		</a>
	   		     	</div>
		  <div class='clearfix'> </div>
		  <div class='grid-chain-bottom'>" .
                          "<a href='single.html'>" . $row['name'] ."</a>" .
                          "<div class='star-price'>
	   		     				<div class='price-at'>
		   		     				<ul class='star-footer'>
										<li><a href='#'><i> </i></a></li>
										<li><a href='#'><i> </i></a></li>
										<li><a href='#'><i> </i></a></li>
										<li><a href='#'><i> </i></a></li>
										<li><a href='#'><i> </i></a></li>
									</ul>
									</div>
									<div class='price-at-bottom '>
										<span class='item_price'>this is wher you should add the price</span>
									</div>
	   		     				<div class='clearfi'> </div>
							</div>
							<div class='cart-add'>
								<a class='add1 item_ad' href='#' style='margin-bottom:5px'>ADD TO MY MY BOOKSHELF <i> </i></a>
								<a class='add2' href='#'><i class='glyphicon glyphicon-heart-empt'> </i></a>
								<div class='clearfix'> </div>
							</div>
	   		     		</div>
					<div class='clearfix'> </div>

	   		     	</div>

							<!--**************caution*************-->
		        	";
             }
						 ?>
						 </div>
						 </div>



								<div class='clearfix'> </div>


		        <ul class="start">
					<li><a href="#"><i> </i></a></li>
					<li><span>1</span></li>
					<li class="arrow"><a href="#">2</a></li>
					<li class="arrow"><a href="#">3</a></li>


					<li><a href="#"><i class="next"> </i></a></li>
				</ul>
				<div class="clearfix"> </div>
				</div>

			<div class="clearfix"> </div>
<!--*******************-->


				</div>

			<!---->

		</div>

		<!--*************************************bottom separation/ABYR********************************************************************-->
		<div class="bottom-grid1">

					<div class="fit1">
						<h3>meet your next favourite book</h3>
						<p>We are part of everything that we have read</p>
					</div>
				</div>

<!---->

<script src="js/simpleCart.min.js"> </script>
<!---->
<div class="footer">
		<div class="container ">
			<div class="col-md-4">

			</div>

			<div class="col-md-4 footer-bottom text-center">
				<h3 class="text-center">Get In Touch</h3>
				<div class="logo-footer text-center">
					<ul class="social text-center">
		                    <li><a href="#"><i class="fb"> </i> </a></li>
		                    <li><a href="#"><i class="twitter"></i></a></li>

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
</body>
</html>
