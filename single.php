<?php
  session_start();
    $db = mysqli_connect('35.160.127.179','fake','true7102','fake');
    $id = $_GET["id"];
    $result = $db->query("SELECT * FROM BookShelf where id=$id");
		$row = mysqli_fetch_array($result);

    ?>
<!DOCTYPE html>
<html>
<head>
<title> Book Details</title>

<link rel="stylesheet" href="css/rating.css">
<title> Book Details </title>
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

           <?php
							$range = mysqli_fetch_array($db->query("SELECT *  FROM Users WHERE id = '{$_SESSION['id']}' "));

							echo"<div class='dropdown-content'>
										<a href='#'>" . $range['Books given'] . " books given </a>
										<a href='#'>" . $range['books token'] . " books taken</a>
									  <a href='#'>  card number :" . $range['num carte'] . "</a>
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
					<li class="active"><a href="product.php">BookShelf</a></li>
					<li ><a href="contact.php">Add a Book</a></li>
				</ul>
				<div class="clearfix"> </div>
			</div>
					<!---->

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
        <div class="row">


        <div class="col-md-3">
          
        </div>
				<!---->
				<div class="col-md-9 product-price1">
				<div class="col-md-5 single-top">
          
            <div class="bookimg"> <img src="books_img/<?=$row['image']?>" /></div>

        



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
                  

								</div>

							<div class="clearfix"> </div>
							</div>


								
                <?php if (isset($_SESSION['name'])):?>
                  <p><?php
                  $result=$db->query("SELECT Avg(rate) AS Average,book_id FROM rate GROUP BY(book_id) ORDER BY(Average) DESC");
                  while($row=$result->fetch_array())
                  {
                    echo 'Average Rating:'.round($row['Average']);
                  }

                  ?></p>
                  <fieldset id='demo1' class="rating">
                     <input class="stars" type="radio" id="star5" name="rating" value="5" />
                     <label class = "full" for="star5" title="Awesome - 5 stars"></label>
                     <input class="stars" type="radio" id="star4" name="rating" value="4" />
                     <label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                     <input class="stars" type="radio" id="star3" name="rating" value="3" />
                     <label class = "full" for="star3" title="Meh - 3 stars"></label>
                     <input class="stars" type="radio" id="star2" name="rating" value="2" />
                     <label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                     <input class="stars" type="radio" id="star1" name="rating" value="1" />
                     <label class = "full" for="star1" title="Sucks big time - 1 star"></label>

                 </fieldset>

              <?php endif ?>

						</div>
					</div>
				<div class="clearfix"> </div>
			<!---->
					<div class="cd-tabs">
			<nav>'
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
<script>
                       $(document).ready(function () {
                           $("#demo1 .stars").click(function () {

                               $.post('rating.php',{rate:$(this).val(), book_id: <?=$row['id']?>},function(d){
                                   if(d>0)
                                   {
                                       alert('You already rated');
                                   }else{<
                                       alert('Thanks For Rating');
                                   }
                               });
                               $(this).attr("checked");
                           });
                       });
                   </script>
<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!---->
<!---->
</body>
</html>
