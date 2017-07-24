<?php
  session_start();
    $db = mysqli_connect('35.160.127.179','fake','true7102','fake');
    $id = $_GET['id'];
    $result = $db->query("SELECT * FROM BookShelf where id=$id");
    $row = $result->fetch_array();
    ?>
<!DOCTYPE html>
<html>
<head>
<title> Single :: w3layouts</title>
<link href="http://demo.phpjabbers.com/1500908579_865/index.php?controller=pjFront&action=pjActionLoadCss&layout=layout1" type="text/css" rel="stylesheet" />
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
<!-- start menu -->
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<!-- /start menu -->
<!--//slider-script-->
<script src="js/main.js"></script> <!-- Resource jQuery -->
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  	ga('create', 'UA-48014931-1', 'codyhouse.co');
  	ga('send', 'pageview');

  	jQuery(document).ready(function($){
  		$('.close-carbon-adv').on('click', function(){
  			$('#carbonads-container').hide();
  		});
  	});
</script>
<script src="js/simpleCart.min.js"> </script>
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
					<h1><a href="product.php"><img src="images/logo-01.png" alt=""></a></h1>
				</div>




			<div class="top-nav">
				<ul class="memenu skyblue">
					<li class="active"><a href="product.php">BookShelf</a></li>
					<li ><a href="contact.php">Add a Book</a></li>
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

<!---->
<!---->
<div class="back">
	<h2>Book Details</h2>
</div>
		<!---->
		<div class="product">
			<div class="container">
				<div class="col-md-3 product-price">


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
				<div class="col-md-9 product-price1">
				<div class="col-md-5 single-top">
          <?php
            echo '<div class="bookimg">'. $row["image"] .'</div>' ;

          ?>



						<div class="flexslider">

						</div>
<!-- FlexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

	<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
			</div>
					<div class="col-md-7 single-top-in simpleCart_shelfItem">
						<div class="single-para ">
						<h4><?php
              echo '<div class="bookimg">'. $row["name"] .'</div>' ;
                ?>
            </h4>
							<div class="star-on">

								<div class="review">
									<ul> Author:
                    <?php
                      echo '<div class="bookimg">'. $row["auteur"] .'</div>' ;
                    ?>
									</ul> <br>
                  <ul> Editor:
                    <?php
                      echo '<div class="bookimg">'. $row["editeur"] .'</div>' ;
                    ?>
									</ul> <br>
                  <ul> owner:
                    <?php
                      echo '<div class="bookimg">'. $row["owner"] .'</div>' ;
                    ?>
									</ul> <br>
                  <script type="text/javascript" src="http://demo.phpjabbers.com/1500908579_865/index.php?controller=pjFront&action=pjActionLoad&id=2&instance_id=0&layout=layout1"></script>

								</div>
							<div class="clearfix"> </div>
							</div>


								<a href="#" class="add-cart item_add">ADD TO CART</a>

						</div>
					</div>
				<div class="clearfix"> </div>
			<!---->
					<div class="cd-tabs">
			<nav>
				<ul class="cd-tabs-navigation">
					<li><a data-content="fashion"  href="#0" class="selected ">Description </a></li>


				</ul>
			</nav>
	<ul class="cd-tabs-content">
		<li data-content="fashion" class="selected" >
		<div class="facts">
      <?php
        echo '<div class="bookimg">'. $row["Description"] .'</div>' ;
      ?>
		</div>

</li>

<div class="clearfix"></div>
	</ul>
</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
    <div class="bottom-grid1">

          <div class="fit1">
            <h3>Meet your next favourite book</h3>
            <p>We are part of everything that we have read</p>
          </div>
        </div>

    <!---->

    <script src="js/simpleCart.min.js"> </script>
    <!---->
    <div class="footer ">
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
