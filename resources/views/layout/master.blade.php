<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>MediBulk a Medical Category Bootstrap Responsive Website Template | Home :: w3layouts</title>
<!-- for-mobile-apps -->
<!--/metadata -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta name="keywords" content="MediBulk Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<!-- for banner css -->
 
<!-- //for banner css -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />  <!-- time-picker-CSS -->
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

<!-- jquery,popper,bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
@yield("content0")

<!--//fonts-->


</head>
<body>
<div class="banner-top">
	<div class="banner-header">
		<!--header-->
		<div class="header">
		<div class="container-fluid">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="w3_navigation_pos">
						<h1><a href="index.html">WebLinik</a></h1>
					</div>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav>
						<ul class="nav navbar-nav">
							<li class="active"><a href="index.html">Home</a></li>
							<li><a href="about.html">About Us</a></li>
							<li><a href="services.html">Our Services</a></li>
							<li><a href="/register">Register</a></li>
							<li><a href="/login">Login</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</nav>
				</div>
			</nav>	
		</div>
	</div>
		<!--//header-->
</div>

<!-- slider -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			<li data-target="#myCarousel" data-slide-to="3" class=""></li>
			<li data-target="#myCarousel" data-slide-to="4" class=""></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active"> 
				<div class="banner-dott">
				<div class="container">
					<div class="carousel-caption">
						<h3>We provide best medical services</h3>
						<div class="contrast">
							  <p> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.</p>
						 </div>
					</div>
				</div>
				</div>
			</div>
			<div class="item item1"> 
				<div class="banner-dott">
				<div class="container">
					<div class="carousel-caption">
						<h3>We provide best dental services</h3>
						<div class="contrast">
							  <p> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.</p>
						 </div>
					</div>
				</div>
				</div>
			</div>
			<div class="item item2"> 
				<div class="banner-dott">
				<div class="container">
					<div class="carousel-caption">
						<h3>We provide best baby services </h3>
						  <div class="contrast">
							  <p> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.</p>
						  </div>
					</div>
				</div>
				</div>
			</div>
			<div class="item item3"> 
				<div class="banner-dott">
				<div class="container">
					<div class="carousel-caption">
						 <h3>We provide top doctors</h3>
						 
						  <div class="contrast">
							  <p> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.</p>
						  </div>
					</div>
				</div>
				</div>
			</div>
			
			<div class="item item4"> 
				<div class="banner-dott">
				<div class="container">
					<div class="carousel-caption">
						 <h3>Food is our common ground </h3>
						  
						  <div class="contrast">
							  <p> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.</p>
						  </div>
					</div>
				</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
    </div> 
	<div class="agileits_reservation">
		@yield("content1")		
	</div>
 </div>
	<!-- //slider -->
<!-- // banner -->

	<!-- /About -->
	@yield("content2")
	<!-- //About -->

<!-- /services -->
@include("layout.services")
<!-- //services -->
<!-- testimonials -->
@include("layout.testimonials")
<!-- //testimonials -->
<!-- footer -->
@include("layout.footer")
<!-- //footer -->
<!-- js -->
@include("layout.js")
<!-- //js -->
</body>
</html>