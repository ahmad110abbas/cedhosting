<?php 
$link = $_SERVER['REQUEST_URI'];
// print_r($link);
// die();
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Planet Hosting a Hosting Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Planet Hosting Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.js"></script>

	<link href='//fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>


	<script src="js/modernizr.custom.97074.js"></script>
	<script src="js/jquery.chocolat.js"></script>
	<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">

	<script type="text/javascript">
		$(function() {
			$('.team a').Chocolat();
		});
	</script>	
	<script type="text/javascript" src="js/jquery.hoverdir.js"></script>	
	<script type="text/javascript">
		$(function() {

			$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );

		});
	</script>						



	<style type="text/css">
		.logocolor{
			color: #e7663f;
		}
	</style>




</head>
<body>

	<div class="header">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="container-fluid">

					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<i class="sr-only">Toggle navigation</i>
							<i class="icon-bar"></i>
							<i class="icon-bar"></i>
							<i class="icon-bar"></i>
						</button>				  
						<div class="navbar-brand">
							<h1><a href="index.php"><span class="logocolor">Ced</span> Hosting</a></h1>
						</div>
					</div>

					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li <?php if ($link=="/task/cedhosting/web/index.php") {
								echo 'class="active"';
							}else {echo "";} ?>><a href="index.php">Home <i class="sr-only">(current)</i></a></li>
							<li <?php if ($link=="/task/cedhosting/web/about.php") {
								echo 'class="active"';
							}else {echo "";} ?>><a href="about.php">About</a></li>
							<li <?php if ($link=="/task/cedhosting/web/services.php") {
								echo 'class="active"';
							}else {echo "";} ?>>
							<a href="services.php">Services</a>
							<ul >

							</li>
						</ul>
					</li>
					<li  <?php if (($link=="/task/cedhosting/web/linuxhosting.php")||($link=="/task/cedhosting/web/wordpresshosting.php")||($link=="/task/cedhosting/web/windowshosting.php")||($link=="/task/cedhosting/web/cmshosting.php")) {
								echo 'class="dropdown active"';
							}else {echo 'class="dropdown"';} ?>>
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hosting<i class="caret"></i></a>
						<ul class="dropdown-menu">
							<li><a href="linuxhosting.php">Linux hosting</a></li>
							<li><a href="wordpresshosting.php">WordPress Hosting</a></li>
							<li><a href="windowshosting.php">Windows Hosting</a></li>
							<li><a href="cmshosting.php">CMS Hosting</a></li>
						</ul>			
					</li>
					<li <?php if ($link=="/task/cedhosting/web/pricing.php") {
						echo 'class="active"';
					}else {echo "";} ?>><a href="pricing.php">Pricing</a></li>

					<li <?php if ($link=="/task/cedhosting/web/blog.php") {
						echo 'class="active"';
					}else {echo "";} ?>><a href="blog.php">Blog</a></li>
					<li <?php if ($link=="/task/cedhosting/web/contact.php") {
						echo 'class="active"';
					}else {echo "";} ?>><a href="contact.php">Contact</a></li>
					<li <?php if ($link=="/task/cedhosting/web/cart.php") {
						echo 'class="active"';
					}else {echo "";} ?>><a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
					<li <?php if (($link=="/task/cedhosting/web/login.php")||($link=="/task/cedhosting/web/account.php")) {
						echo 'class="active"';
					}else {echo "";} ?>><a href="login.php">login</a></li>
				</ul>

			</div>
		</div>
	</nav>
</div>
</div>

		 <!-- #585CA7; -->

		 