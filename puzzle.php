<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Diamond Bank - Puzzle</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="inc/css/bootstrap.min.css" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="inc/css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="inc/css/owl.theme.default.css" />

	<!-- Magnific Popup -->
	<link type="text/css" rel="stylesheet" href="inc/css/magnific-popup.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="inc/css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="inc/css/style.css" />

  <!-- Puzzle stlylesheet -->
  <link type="text/css" rel="stylesheet" href="inc/css/puzzle.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body onload="checkBrowser();">

	<!-- Header -->
	<header>

		<!-- Nav -->
		<nav id="nav" class="navbar">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a href="index.html">
							<img class="logo" src="inc/img/logo.png" alt="logo">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Collapse nav button -->
					<div class="nav-collapse">
						<span></span>
					</div>
					<!-- /Collapse nav button -->
				</div>

				<!--  Main navigation  -->
				<!-- <ul class="main-nav nav navbar-nav navbar-right">
					<li><a href="index.html#home">Home</a></li>
					<li><a href="index.html#about">About</a></li>
					<li><a href="index.html#portfolio">Portfolio</a></li>
					<li><a href="index.html#service">Services</a></li>
					<li><a href="index.html#pricing">Prices</a></li>
					<li><a href="index.html#team">Team</a></li>
					<li class="has-dropdown"><a>Blog</a>
						<ul class="dropdown">
							<li><a href="#">blog post</a></li>
						</ul>
					</li>
					<li><a href="index.html#contact">Contact</a></li>
				</ul> -->
				<!-- /Main navigation -->

			</div>
		</nav>
		<!-- /Nav -->

	</header>
	<!-- /Header -->

  <!-- About -->
  <div id="about" class="section md-padding">

    <!-- Container -->
    <div class="container">

      <!-- Row -->
      <div class="row">

        <div class="col-md-3"></div>

        <div class="col-md-6">

        <section id="DiamondPuzzle">
          <div id="DiamondPuzzleInnerleft" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)">
            <img id="puzzle1" src="inc/img/1.png" alt="1" draggable="true" ondragstart="start(event)" ondragend="end(event)">
            <img id="puzzle2" src="inc/img/2.png" alt="2" draggable="true" ondragstart="start(event)" ondragend="end(event)">
            <img id="puzzle3" src="inc/img/3.png" alt="3" draggable="true" ondragstart="start(event)" ondragend="end(event)">
            <img id="puzzle4" src="inc/img/4.png" alt="4" draggable="true" ondragstart="start(event)" ondragend="end(event)">
            <img id="puzzle5" src="inc/img/5.png" alt="5" draggable="true" ondragstart="start(event)" ondragend="end(event)">
            <img id="puzzle6" src="inc/img/6.png" alt="6" draggable="true" ondragstart="start(event)" ondragend="end(event)">
          </div>
          <div id="DiamondPuzzleInnerRight">
            <div class="DiamondFinalPuzzle" id="one" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
            <div class="DiamondFinalPuzzle" id="two" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
            <div class="DiamondFinalPuzzle" id="three" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
            <div class="DiamondFinalPuzzle" id="four" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
            <div class="DiamondFinalPuzzle" id="five" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
            <div class="DiamondFinalPuzzle" id="six" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
          </div>  
        </section>

        </div>


        <div class="col-md-3"></div> 
      </div>
      <!-- /Row -->

    </div>
    <!-- /Container -->

  </div>
  <!-- /About -->

  


	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->

	<!-- Preloader -->
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- /Preloader -->

	<!-- jQuery Plugins -->
	<script type="text/javascript" src="inc/js/jquery.min.js"></script>
	<script type="text/javascript" src="inc/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="inc/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="inc/js/jquery.magnific-popup.js"></script>
	<script type="text/javascript" src="inc/js/main.js"></script>
  <!-- Puzzle JS-->
  <script src="inc/js/puzzle.js"></script>

</body>

</html>
