<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<!-- Title  -->
	<title>Intro</title>

	<!-- Favicon  -->
	<link rel="icon" href="<?php echo THEME_IMG_PATH; ?>/favicon.png">

	<!-- ***** All CSS Files ***** -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Iceland&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=MuseoModerno:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Overlock:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&display=swap" rel="stylesheet">
	<!-- Style css -->
	<link rel="stylesheet" href="<?php echo THEME_CSSSHEET_PATH; ?>style.css">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<div class="main">
		<!-- ***** Preloader Start ***** -->
		<!-- <div class="preloader-main">
			<div class="preloader-wapper">
				<svg class="preloader" xmlns="http://www.w3.org/2000/svg" version="1.1" width="600" height="200">
					<defs>
						<filter id="goo" x="-40%" y="-40%" height="200%" width="400%">
							<feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
							<feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -8" result="goo" />
						</filter>
					</defs>
					<g filter="url(#goo)">
						<circle class="dot" cx="50" cy="50" r="25" fill="#8731E8" />
						<circle class="dot" cx="50" cy="50" r="25" fill="#8731E8" />
					</g>
				</svg>
				<div>
					<div class="loader-section section-left"></div>
					<div class="loader-section section-right"></div>
				</div>
			</div>
		</div> -->
		<!-- ***** Preloader End ***** -->

		<!-- ***** Header Start ***** -->
		<header id="header">
			<!-- Navbar -->
			<nav data-aos="zoom-out" data-aos-delay="800" class="navbar gameon-navbar navbar-expand">
				<div class="container header">

					<!-- Logo -->
					<a class="navbar-brand" href="">
						<img src="<?php echo THEME_IMG_PATH; ?>/logo.png" alt="Brand Logo" />
					</a>

					<div class="ms-auto"></div>

					<!-- Navbar Nav -->
					<ul class="navbar-nav items mx-auto">
						<li class="nav-item dropdown">
							<a href="#header" class="nav-link smooth-anchor">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link smooth-anchor" href="#features">Features</a>
						</li>
						<li class="nav-item">
							<a class="nav-link smooth-anchor" href="#screenshots">Screenshots</a>
						</li>
						<li class="nav-item">
							<a class="nav-link smooth-anchor" href="#faq">FAQ</a>
						</li>
						<li class="nav-item">
							<a class="nav-link smooth-anchor" href="#subscribe">Subscribe</a>
						</li>
					</ul>

					<!-- Navbar Icons -->
					<!-- <ul class="navbar-nav icons">
						<li class="nav-item">
							<a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#search">
								<i class="icon-magnifier"></i>
							</a>
						</li>
					</ul> -->

					<!-- Navbar Toggler -->
					<ul class="navbar-nav toggle">
						<li class="nav-item">
							<a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#menu">
								<i class="icon-menu m-0"></i>
							</a>
						</li>
					</ul>

				</div>
			</nav>
		</header>
		<!-- ***** Header End ***** -->

		<!-- ***** Hero Section Start ***** -->
		<section id="home" class="hero-section layout-1 has-overlay overlay-gradient">
			<div class="container">
				<div class="row justify-content-center align-items-center">
					<div class="col-12 col-md-7 col-lg-6">
						<!-- Hero Content -->
						<div class="hero-content">
							<h2 class="text-white">Connect people you know to one another anytime, anywhere</h2>
							<p class="sub-heading text-white my-4">We’re making introducing people easier than ever before, from friends and colleagues, to relationships, dating, and more.</p>

							<!-- Download Button -->
							<div class="button-group download-button">
								<a href="#">
									<img src="<?php echo THEME_IMG_PATH; ?>/google-play.png" alt="">
								</a>
								<a href="#">
									<img src="<?php echo THEME_IMG_PATH; ?>/app-store.png" alt="">
								</a>
							</div>
							<span class="d-block fst-italic fw-light text-white mt-3">* Available on iPhone, iPad and all Android devices</span>
						</div>
					</div>
					<div class="col-12 col-md-5 col-lg-6">
						<!-- Hero Thumb -->
						<div class="hero-thumb mx-auto" data-aos="fade-left" data-aos-delay="500" data-aos-duration="1000">
							<img src="<?php echo THEME_IMG_PATH; ?>/hero-thumbnail.png" alt="">
						</div>
					</div>
				</div>
			</div>

			<!-- Shape Bottom -->
			<div class="shape-bottom">
				<svg viewBox="0 0 1920 310" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="svg replaced-svg">
					<title>sApp Shape</title>
					<desc>Created with Sketch</desc>
					<defs></defs>
					<g id="sApp-Landing-Page" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<g id="sApp-v1.0" transform="translate(0.000000, -554.000000)" fill="#FFFFFF">
							<path d="M-3,551 C186.257589,757.321118 319.044414,856.322454 395.360475,848.004007 C509.834566,835.526337 561.525143,796.329212 637.731734,765.961549 C713.938325,735.593886 816.980646,681.910577 1035.72208,733.065469 C1254.46351,784.220361 1511.54925,678.92359 1539.40808,662.398665 C1567.2669,645.87374 1660.9143,591.478574 1773.19378,597.641868 C1848.04677,601.75073 1901.75645,588.357675 1934.32284,557.462704 L1934.32284,863.183395 L-3,863.183395" id="sApp-v1.0"></path>
						</g>
					</g>
				</svg>
			</div>
		</section>
		<!-- ***** Hero Section End ***** -->

<?php include 'page.php'; ?>
