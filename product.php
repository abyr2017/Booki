<?php session_start();
$db= mysqli_connect('35.160.127.179:3306','fake','true7102','fake');
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
<title>Bookshelf</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
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
					<li class="active"><a href="product.php" >BookShelf</a></li>
					<li class="grid"><a href="contact.php">Add a book</a></li>
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
</div>
<!---->
<!---->
<div class="back">
	<h2>Available Books</h2>
</div>
		<!---->
		<div class="product">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="gif" style="line-break:break all">
	  					<iframe  id ="thisImg" src="https://giphy.com/gifs/128MHrlrHNwwU0/html5" width="270" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/128MHrlrHNwwU0/html5"></a></p>
						</div>
					</div>



			<!---->

				<!---->
				<div class="col-md-9 product-price1">
					<div class="mens-toolbar">
						<p class="showing">Showing 1–9 of 21 results</p>
	                 <div class="sort">
			            <select id="sorting">
										<option  value="random">Sorting Random </option>
			                <option value="rate"> Sorting By Rate</option>
											<option value="name">Sorting By Name </option>
			                <option value="author">Sorting By Author </option>
			                 <option value="editor">Sorting By Publish House </option>
			            </select>

	    		     </div>

                	<div class="clearfix"></div>
		        </div>
						<!--*****************separating the pics of the books from the bellow*************************-->
						<?php

							$db = mysqli_connect('35.160.127.179','fake','true7102','fake');
							/* mysqli_connect(sever,username,password,database)*/

							$sorting = "random";
							if (isset($_GET['sorting'])) {
								$sorting = $_GET['sorting'];
							}


							if($db) {
								switch ($sorting) {
									case 'random':
										$result = $db->query("SELECT * FROM BookShelf ORDER BY RAND() ");
										break;

									case 'rate':
										$result = $db->query("SELECT bk.*, tab.avg FROM BookShelf as bk, (SELECT Avg(rate) as avg,book_id FROM rate group by book_id) as tab where bk.id=tab.book_id");
										break;
										case 'name':
											$result = $db->query("SELECT * FROM BookShelf ORDER BY name ");
											break;
											case 'author':
												$result = $db->query("SELECT * FROM BookShelf ORDER BY 	auteur ");
												break;
												case 'editor':
													$result = $db->query("SELECT * FROM BookShelf ORDER BY 	editeur ");
													break;
								}
							}
						 ?>
<div class='product-right-top'>
	<div class='top-product'>
		<?php while($row = mysqli_fetch_array($result)) : ?>
			<div class='col-md-4 chain-grid  simpleCart_shelfIte'>
		        	<div class='grid-span-1'
	   		     		<a  href='single.html'><img class='img-responsive' style=' width:160px ; height:200px ' src='books_img/<?=$row['image']?>' alt='<?=$row['name']?>'>
	   		     			<div class='link'>
	   		     			<ul >
										<li><i class='glyphicon glyphicon-search'> </i></li>

							</ul>
	   		     		</div>
	   		     		</a>
	   		     	</div>
		  <div class='clearfix'> </div>
		  <div class='grid-chain-bottom'>
                          <a href='single.html'><?=$row['name']?></a>
                          <div class='star-price'>
	   		     				<div class='price-at'>
		   		     				<ul class='star-footer'>
										<li><a href='#'><i> </i></a></li>
										<li><a href='#'><i> </i></a></li>
										<li><a href='#'><i> </i></a></li>
										<li><a href='#'><i> </i></a></li>
										<li><a href='#'><i> </i></a></li>
									</ul>
									</div>
									
	   		     				<div class='clearfi'> </div>
							</div>
							
							<div class='cart-add'>
							
								<a class='add1 item_ad book_list <?php if( $row['owner'] == $_SESSION['id'] ): ?> not-active <?php endif ?>'  book-id="<?=$row['id']?>" href='#' style='margin-bottom:5px' >My next on the list </a>

								<div class='clearfix'> </div>
								<?php
								$res = $db->query("SELECT *  FROM favoris WHERE book_id ={$row['id']} and user_id = {$_SESSION['id']}");
								if(mysqli_num_rows($res) <=0 )  :?>
								
								 <a><i class="fa fa-heart-o heart" book-id="<?=$row['id']?>" aria-hidden="true"></i></a>
								
								<?php else : ?>
								<a><i class='fa fa-heart' style="color: red" aria-hidden='true'></i></a>
								<?php endif ?>
								
								
							</div>
							</div>
							<div class='clearfix'> </div>
					
					  	</div>
					

							<!--**************caution*************-->
					<?php endwhile; ?>
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

		$("#sorting").on('change', function() {
			window.location.href = "?sorting=" + $("#sorting").val();
		});
});
</script>
<script>
                       $(document).ready(function () {
                           $(".heart").click(function () {
				var heart = $(this);
                               $.post('favorits.php',{user_id : <?=$_SESSION['id']?>, book_id: $(this).attr("book-id")},function(d){
                                   if(d>0)
                                   {
                                      // alert('this book is already on your favorits list');
				      heart.attr("class","fa fa-heart");
				      heart.css('color','red');

                                   }else{
                                       alert('an error has occured');
                                   }
                               });
                           });
                       });
                   </script>
<script>
                       $(document).ready(function () {
                           $(".book_list").click(function () {
				
                               $.post('addBook.php',{user_id : <?=$_SESSION['id']?>, book_id: $(this).attr("book-id")},function(d){
					if(d > 0)
					{
						window.location = 'product.php';
					}
					else
					{
						alert('An error has occured');
					}
				});
                           });
                       });
                   </script>

<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</body>
</html>
