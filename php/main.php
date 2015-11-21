<!DOCTYPE html>

<html lang="en">
	<head>
		<?php include 'index_headers.php';?>
		<title> Sweet Treats </title>
	</head>
	<body>
		<div class="myContainer">
		    <div class="leftGutter"></div>
		    <div class="centralColumn">
		    	<div id="header"><?php include 'header.php';?></div>
		 		<div  class="carouselContentWrapper">

					<div class="container">
					
						<div id="myCarousel" class="carousel slide" data-ride="carousel">
							<!-- Indicators -->
							<ol class="carousel-indicators">
								<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
								<li data-target="#myCarousel" data-slide-to="1" ></li>
								<li data-target="#myCarousel" data-slide-to="2" ></li>
								<li data-target="#myCarousel" data-slide-to="3" ></li>
								<li data-target="#myCarousel" data-slide-to="4" ></li>
							</ol>
				
							<!-- Wrapper for slides -->
							<div class="carousel-inner" role="listbox">
							
								<div class="item active">
									<img src="images/princess.jpg" alt="Princess cake" width="1518" height="865">
									<div class="carousel-caption">
										<h3 class="caption"><strong> Princess Cake</strong> </h3>
									</div>
								</div>
							
								<div class="item">
									<img src="images/booties.jpg" alt="Cute Omber Pink Cake" width="1518" height="865">
									<div class="carousel-caption">
										<h3 class="caption"><strong> Cute Omber Pink Cake</strong> </h3>
									</div>
								</div>
								
								<div class="item">
									<img src="images/cupcakes.jpg" alt="Daisies Cupcakes" width="1518" height="865">
									<div class="carousel-caption">
										<h3 class="caption"><strong> Daisies Cupcakes</strong> </h3>
									</div>
								</div>
								
								<div class="item">
									<img src="images/minions.jpg" alt="Minions Cookies" width="1518" height="865">
									<div class="carousel-caption">
										<h3 class="caption"><strong> Minions Cookies</strong></h3>
									</div>
								</div>
							

								<div class="item">
									<img src="images/vineyard.jpg" alt="wine bottle in a box cake" width="1518" height="865" class="tales">
									<div class="carousel-caption ">
										<h3 class="caption"><strong>Wine bottle cake</strong></h3>
									</div>
								</div>

							</div>
		
							<!-- Left and Right controls -->
							
							<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
		
						</div><!--myCarousel ends-->
					</div><!--container ends-->
</div><!--content ends-->
	




		<div id="footer"><?php include 'footer.php';?></div>
	</div>
		<div class="rightGutter"></div>
	</div>
		<?php include 'index_scripts.php';?>
</body>
</html>
	