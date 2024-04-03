<!DOCTYPE html>
<html>

<head>
	<?php
	$page = isset($page) ? $page : ''; // fixes $page undefined error
	?>

	<?php if ($page == "meet-us") { ?>
		<title>Meet Us | Kids on the Grow - Enriching Your Child's Development</title>
	<?php } else if ($page == "about-us") { ?>
			<title>About Us | Kids on the Grow - Enriching Your Child's Development</title>
	<?php } else if ($page == "services") { ?>
				<title>Our Services | Kids on the Grow - Enriching Your Child's Development</title>
	<?php } else if ($page == "space") { ?>
					<title>Our Space | Kids on the Grow - Enriching Your Child's Development</title>
	<?php } else if ($page == "contact") { ?>
						<title>Contact Us | Kids on the Grow - Enriching Your Child's Development</title>
	<?php } else { ?>
						<title>Kids on the Grow - Empowering Your Child's Development</title>
	<?php } ?>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
	<link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
		integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"
		integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Custom Files -->
	<link href="assets/css/style.css" rel="stylesheet">
	<link href="assets/css/responsive-hacks.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/lightbox2-master/dist/css/lightbox.min.css" type="text/css" media="screen" />

</head>

<body>
	<div class="header">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<a href="index.php"><img src="assets/img-new/kotg-logo.png" alt="Kids on the Grow"
							class="logo" /></a>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-7 col-xs-12">
					<div class="additional-links">
						<a href="policies.php">Policies</a> &#8226; <a href="employment-opportunities.php">Employment
							Opportunities</a>
					</div>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 hidden-sm hidden-xs hidden-md">
					<?php if ($page == "meet-us") { ?>
						<img src="assets/img/meet-us-kids.png" alt="" class="kids inner" />
					<?php } else if ($page == "about-us") { ?>
							<img src="assets/img/about-us-kids.png" alt="" class="kids inner" />
					<?php } else if ($page == "services") { ?>
								<img src="assets/img/services-kids.png" alt="" class="kids inner" />
					<?php } else if ($page == "space") { ?>
									<img src="assets/img/space-kids.png" alt="" class="kids inner" style="width:210px;" />
					<?php } else if ($page == "contact") { ?>
										<img src="assets/img/contact-kids.png" alt="" class="kids inner" />
					<?php } else { ?>
										<img src="assets/img/headerimage_home_new.png" alt="" class="kids" />
					<?php } ?>
				</div>
			</div>
		</div>
	</div>

	<!-- Static navbar -->
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
					aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<div id="navbar" class="navbar-collapse collapse">
				<div class="container">
					<ul class="nav navbar-nav">
						<li><a href="index.php"><i class="glyphicon glyphicon-home"></i></a></li>
						<li><a href="meet-us.php">Meet Us</a></li>
						<li><a href="about-us.php">About Us</a></li>

						<li class="dropdown">
							<a href="our-services.php" class="dropdown-toggle hidden-sm hidden-xs disabled"
								data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Our
								Services <span class="caret"></span></a>
							<a href="our-services.php" class="dropdown-toggle hidden-lg hidden-md"
								data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Our
								Services <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="our-services.php#speech">Speech-Language Therapy</a></li>
								<li><a href="our-services.php#occupational">Occupational Therapy</a></li>
								<li><a href="our-services.php#physical">Physical Therapy</a></li>
								<li><a href="our-services.php#feeding">Feeding Therapy</a></li>
							</ul>
						</li>
						<li><a href="our-space.php">Our Space</a></li>
						<li><a href="contact-us.php">Contact Us</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right hidden">
						<li class="active"><a href="./">Default <span class="sr-only">(current)</span></a></li>
						<li><a href="../navbar-static-top/">Static top</a></li>
						<li><a href="../navbar-fixed-top/">Fixed top</a></li>
					</ul>
				</div>
			</div><!--/.nav-collapse -->
		</div><!--/.container-fluid -->
	</nav>
	<div class="nav-shadow"></div>