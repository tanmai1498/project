<!DOCTYPE html>
<html>
<head>
	<title> Mobile shopping</title>

	<!-- Bootstrap CDN -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


	<!-- owl carousel cdn -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />

	<!-- font awesome icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

	<!-- custom css file -->
	<link rel="stylesheet" type="text/css" href="style.css">


	<?php
	   //Require functions.php file
	   require('functions.php');
	?>


</head>
<body>

	<!--start #header-->
	<header id="header">
		<div class="strip d-flex justify-content-between px-4 py-1 bg-light">
			<p class="font-raleway font-size-12 text-black-50 m-0"> 123 Main Street, New York, NY 10030
			</p>
			<div class="font-raleway font-size-14">
				<a href="#" class="px-3 border-right border-left text-dark">Login</a>
				<a href="#" class="px-3 border-right  text-dark">wishlist (0)</a>

			</div>
		</div>

		<!--primary Navigation -->
		<nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
			<a class="navbar-brand" href="#">Mobile Shopping</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav m-auto font-rubik">
					<li class="nav-item active">
						<a class="nav-link" href="#">On Sale</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Category</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Products <i class="fas fa-chevron-down"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Blog</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Category <i class="fas fa-chevron-down"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Coming Soon</a>
					</li>

				</ul>
				<form action=""  class="font-raleway font-size-14">
					<a href="#" class="py-2 rounded-pill color-primary-bg">
						<span class="font-size-16 px-2 text-white"><i class="fa fa-shopping-cart"></i></span>
						<span class="px-3 py-2 rounded-pill text-dark bg-light">0</span>
					</a>
				</form>
			</div>
		</nav>
		<!--!primary Navigation -->

	</header>

	<!--!start #header-->

	<!--start #main-site-->
	<main id="main-site">