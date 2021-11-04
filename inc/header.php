<?php 
require_once 'db.php';
session_start();

$file_url = $_SERVER['PHP_SELF'];
$url_explode = explode('/',$file_url);
$url = end($url_explode);


$general_settings_select = "SELECT * FROM general_settings WHERE status = 'active'";
$general_settings_query= mysqli_query($db,$general_settings_select);
$settings_assoc = mysqli_fetch_assoc($general_settings_query);

$home_banner_select = "SELECT * FROM home_banner WHERE status = 'active' ORDER BY id DESC limit 1";
$home_banner_query= mysqli_query($db,$home_banner_select);
$home_banner_assoc = mysqli_fetch_assoc($home_banner_query);

$socials_select = "SELECT * FROM socials WHERE status = 'active'";
$socials_query= mysqli_query($db,$socials_select);

$about_select = "SELECT * FROM about WHERE status = 'active' ORDER BY id DESC limit 1";
$about_query= mysqli_query($db,$about_select);
$about_assoc = mysqli_fetch_assoc($about_query);

$qualification_select = "SELECT * FROM qualification WHERE status = 'active' ORDER BY year DESC limit 4";
$qualification_query= mysqli_query($db,$qualification_select);
$qualification_assoc = mysqli_fetch_assoc($qualification_query);

$services_select = "SELECT * FROM services WHERE status = 'active' ORDER BY id DESC limit 4";
$services_query= mysqli_query($db,$services_select);

$portfolio_select = "SELECT * FROM portfolio WHERE status = 'active' ORDER BY id DESC limit 9";
$portfolio_query= mysqli_query($db,$portfolio_select);

$quote_select = "SELECT * FROM client_quotes WHERE status = 'active' ORDER BY id";
$quote_query= mysqli_query($db,$quote_select);

$contact_select = "SELECT * FROM contact WHERE status = 'active'";
$contact_query= mysqli_query($db,$contact_select);
$contact_assoc = mysqli_fetch_assoc($contact_query);


?>

<!doctype html>
	<html lang="en">

	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="icon" href="img/<?=$settings_assoc['logo'] ;?>" type="image/png">
		<title><?=$settings_assoc['website_title'] ;?> : <?=$settings_assoc['website_subtitle'];?></title>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="vendors/linericon/style.css">
		<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
		<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
		<link rel="stylesheet" href="css/animate.min.css"/>
		<!-- main css -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<!--================ Start Header Area =================-->
		<header class="header_area">
			<div class="main_menu">
				<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="index.php"><img src="img/<?=$settings_assoc['logo'] ;?>" alt="logo here"></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
						aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav justify-content-end">
							<li class="nav-item <?= $url == 'index.php' ? 'active' : ''?>"><a class="nav-link" href="index.php">Home</a></li>
							<li class="nav-item <?= $url == 'about.php' ? 'active' : ''?>"><a class="nav-link" href="about.php">About</a></li>
							<li class="nav-item <?= $url == 'services.php' ? 'active' : ''?>"><a class="nav-link" href="services.php">Services</a></li>
							<li class="nav-item <?= $url == 'portfolio.php' ? 'active' : ''?>"><a class="nav-link" href="portfolio.php">Portfolio</a></li>
							<!-- <li class="nav-item <?= $url == 'about.php' ? 'active' : ''?>"><a class="nav-link" href="blog.php">Blog</a></li> -->
							<li class="nav-item <?= $url == 'contact.php' ? 'active' : ''?>"><a class="nav-link" href="contact.php">Contact</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================ End Header Area =================-->