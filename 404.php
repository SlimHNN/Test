  <?php
        session_start();
        if(isset($_SESSION["user_id"])) 
        {
            header("Location:user/home.php");
        }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Page Not Found</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="asset/css/bootstrap.css" rel="stylesheet" media="screen">
	<link href="asset/css/owl.theme.css" rel="stylesheet" media="screen">
	<link href="asset/css/owl.carousel.css" rel="stylesheet" media="screen">
	<link href="asset/css/style.css" rel="stylesheet" media="screen">
	<link href="asset/css/animate.css" rel="stylesheet" media="screen">
	<link href="asset/css/ionicons.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="asset/css/nivo-lightbox.css" type="text/css" />
	<link rel="stylesheet" href="asset/css/nivo-themes/default/default.css" type="text/css" />

	<link href="asset/img/favicon.png" rel="shortcut icon">

	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Merriweather:300italic' rel='stylesheet' type='text/css'>
	
</head>
<body class='android'>

	<!--HEADER-->
	<header id='header'>
		<div id='menu-bar' class='animated fadeIn'>
			<div class='container'>
				<div class='logo'>
					<img src="asset/img/logo.png" alt style="left: 0px; top: 4px">
                    
				</div>
				<nav  id="nav" class='nav'>
					<ul class='nav-inner'>
						<li class='current'><a href="#header">Home</a></li>
						<li><a href="#about"><strong>Services</strong></a></li>
						<li><a href="#features">Features</a></li>
						<li><a href="#screenshots">Screens</a></li>
						<li><a href="#reviews">Reviews</a></li>
						<li><a href="#download">Download</a></li>
					</ul>
				</nav>
			</div>
		</div>
		<div class="container">
			<div class='row'>					
				<div class='col-sm-10 col-sm-offset-1 col-md-7 col-md-offset-0 col-md-push-5 col-lg-6 col-lg-push-6 animated fadeInRight'>
					<h1>Present your app to the world with Rego.</h1>
					<div id='header-btn'>
						<a class='btn btn-secondary scrollTo-about'>Learn More</a>
						<a class='btn btn-primary scrollTo-download'>Register Now</a>
					</div>
				</div>
				<div class='col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-5 col-md-offset-0 col-md-pull-7 col-lg-5 col-lg-pull-6 col-lg-offset-1'>
					<img src="asset/img/OnePlus-One.png" id='header-img' class='img-responsive animated fadeInUp' alt>
				</div>
			</div>
		</div>
		<svg id='svg-header'>
			<defs>
				<linearGradient id="grad" x1="0%" y1="100%" x2="100%" y2="30%">
					<stop offset="8%" style="stop-color:rgb(245,76,84);stop-opacity:0.1" />
					<stop offset="50%" style="stop-color:rgb(245,76,84);stop-opacity:1" />
				</linearGradient>
			</defs>
			<rect id='svg-rect' width="3000" height="1050" fill="url(#grad)"/>
		</svg>
		<div id='menu-bar-fixed'>
			<div class='container'>
				<a class='logo scrollTo-header'><img src="asset/img/logo-sm.png" alt></a>
				<nav  id="nav-fixed" class='nav'>
					<a id="show-nav" title="Show navigation"><div></div></a>
    				<a id="hide-nav" title="Hide navigation"><div></div></a>
					<ul id='nav-ul' class='nav-inner'>
						<li><a href="#header">Home</a></li>
						<li class='current'><a href="#about">About</a></li>
						<li><a href="#features">Features</a></li>
						<li><a href="#screenshots">Screens</a></li>
						<li><a href="#reviews">Reviews</a></li>
						<li><a href="#download">Download</a></li>
						<li id='off-nav'></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>

	<!--ABOUT-->
	<section id='about'>
		<div class="container">
			<div class='row wow fadeInUp'>	
				<div class='col-sm-6 col-md-3 col-lg-3'>
					<div class='circle-icon-lg'>
						<div class='icon ion-ios7-ionic-outline'></div>
					</div>
					<div class='text'>
						<h3>Consult</h3>
						<p>Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur. Donec id elit non mi porta.</p>
					</div>
				</div>
				<div class='col-sm-6 col-md-3 col-lg-3'>
					<div class='circle-icon-lg'>
						<div class='icon ion-ios7-gear-outline'></div>
					</div>
					<div class='text'>
						<h3>Maintenance</h3>
						<p>Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur. Donec id elit non mi porta.</p>
					</div>
				</div>
				<div class='col-sm-6 col-md-3 col-lg-3'>
					<div class='circle-icon-lg'>
						<div class='icon ion-ios7-chatboxes-outline'></div>
					</div>
					<div class='text'>
						<h3>Repairs</h3>
						<p>Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur. Donec id elit non mi porta.</p>
					</div>
				</div>
				<div class='col-sm-6 col-md-3 col-lg-3'>
					<div class='circle-icon-lg'>
						<div class='icon ion-ios7-speedometer-outline'></div>
					</div>
					<div class='text'>
						<h3>Sales</h3>
						<p>Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur. Donec id elit non mi porta.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--FEATURES-->
	<section id='features'>
		<div class="container">
			<div class='wow fadeInDown'>
				<h2>Remarkable Features</h2>
				<p class='subtitle'>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
			</div>
			<div class='row'>	
				<div class='col-sm-4 col-md-4 col-lg-4 left wow fadeInLeft'>
					<div class='row'>
						<div class='col-sm-12 col-md-9 col-lg-9'>
							<h4>Unique Design</h4>
							<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Aenean lacinia bibendum nulla sed consectetur fringilla.</p>
						</div>
						<div class='col-sm-3 col-md-3 col-lg-3'>
							<div class='circle-icon-rspv'><div class='icon ion-ios7-eye-outline'></div></div>
						</div>
					</div>
					<div class='row'>
						<div class='col-sm-12 col-md-9 col-lg-9'>
							<h4>Valid HTML5 & CSS3</h4>
							<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Aenean lacinia bibendum nulla sed consectetur fringilla.</p>
						</div>
						<div class='col-sm-3 col-md-3 col-lg-3'>
							<div class='circle-icon-rspv'><div class='icon ion-ios7-checkmark-empty'></div></div>
						</div>
					</div>
					<div class='row'>
						<div class='col-sm-12 col-md-9 col-lg-9'>
							<h4>Lightning Fast</h4>
							<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Aenean lacinia bibendum nulla sed consectetur fringilla.</p>
						</div>
						<div class='col-sm-3 col-md-3 col-lg-3'>
							<div class='circle-icon-rspv'><div class='icon ion-ios7-bolt-outline'></div></div>
						</div>
					</div>
				</div>
				<div class='col-sm-4 col-sm-push-4 col-md-4 col-md-push-4 col-lg-4 col-lg-push-4 right wow fadeInRight'>
					<div class='row'>
						<div class='col-sm-3 col-md-3 col-lg-3'>
							<div class='circle-icon-rspv'><div class='icon ion-ios7-folder-outline'></div></div>
						</div>
						<div class='col-sm-12 col-md-9 col-lg-9'>
							<h4>Layered PSDs included</h4>
							<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Aenean lacinia bibendum nulla sed consectetur fringilla.</p>
						</div>
					</div>
					<div class='row'>
						<div class='col-sm-3 col-md-3 col-lg-3'>
							<div class='circle-icon-rspv'><div class='icon ion-ios7-heart-outline'></div></div>
						</div>
						<div class='col-sm-12 col-md-9 col-lg-9'>
							<h4>You’re going to love it</h4>
							<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Aenean lacinia bibendum nulla sed consectetur fringilla.</p>
						</div>
					</div>
					<div class='row'>
						<div class='col-sm-3 col-md-3 col-lg-3'>
							<div class='circle-icon-rspv'><div class='icon ion-ios7-box-outline'></div></div>
						</div>
						<div class='col-sm-12 col-md-9 col-lg-9'>
							<h4>Many other features</h4>
							<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Aenean lacinia bibendum nulla sed consectetur fringilla.</p>
						</div>
					</div>
				</div>
				<div class='col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-sm-pull-4 col-md-4 col-md-pull-4 col-lg-4 col-lg-pull-4'>
					<img src="asset/img/HTC-One.png" class='img-responsive wow fadeInUp' alt>
				</div>
			</div>
		</div>
	</section>

	<!--DETAILED INFO-->
	<section id='detailed'>
		<div class="container">
			<div class='row'>
				<div class='col-sm-12 col-md-7 col-lg-7 wow fadeInLeft'>
					<h2>Detailed Information</h2>
					<p class='subtitle'>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
				</div>
				<div class='col-sm-6 col-md-6 col-lg-6 wow fadeInLeft'>
					<div class='row'>
						<div class='col-sm-2 col-md-2 col-lg-2'>
							<div class='icon ion-ios7-loop-strong'></div>
						</div>
						<div class='col-sm-10 col-md-10 col-lg-10'>
							<h4>Beautiful Animations</h4>
							<p>Donec ullamcorper nulla non metus auctor fringilla. Maecenas faucibus mollis interdum. Maecenas faucibus mollis interdum.</p>
						</div>
					</div>
					<div class='row'>
						<div class='col-sm-2 col-md-2 col-lg-2'>
							<div class='icon ion-ios7-stopwatch-outline'></div>
						</div>
						<div class='col-sm-10 col-md-10 col-lg-10'>
							<h4>Huge Time Saver</h4>
							<p>Donec ullamcorper nulla non metus auctor fringilla. Maecenas faucibus mollis interdum. Maecenas faucibus mollis interdum.</p>
						</div>
					</div>
				</div>
				<div class='col-sm-6 col-md-6 col-lg-6 img wow fadeInRight delay-sm'>
					<img src="asset/img/3Phones.png" class='img-responsive' alt>
				</div>
			</div>
		<div></div>
	</section>
	
	<!--BANNER-DOWNLOAD-->
	<section id='download-banner'>
		<div class="container">
			<p>
				<span class='text wow fadeInLeft'>
					<span class='bold'>Like what you see?</span><span class='normal'>Download the app right now</span>
				</span>
				<a class='btn btn-primary scrollTo-download wow pulse delay-1s'>Download Now</a>
			</p>
		</div>
	</section>

	<!--SCREENSHOTS-->
	<section id='screenshots'>
		<div class="container">
			<div class='wow fadeInDown'>
				<h2>Screenshots</h2>
				<p class='subtitle'>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
			</div>
			<div id="screens-carousel" class="owl-carousel wow fadeInUp">
				<a href='asset/img/screen1.jpg' class='item' data-lightbox-gallery="gallery1">
					<img src="asset/img/screen1.jpg" class='img-responsive' alt>
				</a>
				<a href='asset/img/screen2.jpg' class='item' data-lightbox-gallery="gallery1">
					<img src="asset/img/screen2.jpg" class='img-responsive' alt>
				</a>
				<a href='asset/img/screen3.jpg' class='item' data-lightbox-gallery="gallery1">
					<img src="asset/img/screen3.jpg" class='img-responsive' alt>
				</a>
				<a href='asset/img/screen1.jpg' class='item' data-lightbox-gallery="gallery1">
					<img src="asset/img/screen1.jpg" class='img-responsive' alt>
				</a>
				<a href='asset/img/screen2.jpg' class='item' data-lightbox-gallery="gallery1">
					<img src="asset/img/screen2.jpg" class='img-responsive' alt>
				</a>
				<a href='asset/img/screen3.jpg' class='item' data-lightbox-gallery="gallery1">
					<img src="asset/img/screen3.jpg" class='img-responsive' alt>
				</a>
			</div>
		</div>
	</section>

	<!--REVIEWS-->
	<section id='reviews'>
		<div class="container">
			<div id="reviews-carousel" class="owl-carousel">
				<div class='item'>
					<div class='avatar'></div>
					<p class='quote'>The path of the righteous man is beset on all sides by the inequities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother's keeper and the finder of lost children.</p>
					<div class='author'>
						<div class='name'>Jules Winnfield</div>
						<div class='position'>CEO, Foot Massage Paradise</div>
					</div>
				</div>
				<div class='item'>
					<div class='avatar'></div>
					<p class='quote'>Welcome to Fight Club. The first rule of Fight Club is: you do not talk about Fight Club. The second rule of Fight Club is: you DO NOT talk about Fight Club! Third rule of Fight Club: someone yells "stop!", goes limp, taps out, the fight is over. Fourth rule: only two guys to a fight. Fifth rule: one fight at a time, fellas.</p>
					<div class='author'>
						<div class='name'>Tyler Durden</div>
						<div class='position'>CEO, Fight Club</div>
					</div>
				</div>
				<div class='item'>
					<div class='avatar'></div>
					<p class='quote'>The path of the righteous man is beset on all sides by the inequities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother's keeper and the finder of lost children.</p>
					<div class='author'>
						<div class='name'>Jules Winnfield</div>
						<div class='position'>CEO, Foot Massage Paradise</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--DOWNLOAD-->
	<section id='download'>
		<div class="container">
			<div class='wow fadeInDown'>
				<h2>Download the app</h2>
				<p class='subtitle'>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
			</div>
			<p class='download-buttons'>
				<a class='btn btn-icon btn-secondary' href="user/login/Register.php">Register</a>
				<a class='btn btn-icon btn-primary' href="user/login/">Login</a>
			</p>
			<div class='floating-phone wow fadeInRightBig'></div>
		</div>
	</section>

	<!--Newsletter-->
	<section id='newsletter'>
		<div class="container">
			<div class='wow fadeInDown'>
				<h2>Subscribe to our newsletter</h2>
				<p class='subtitle'>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
			</div>
			<div id='newsletter-form'>
				<input type="email" name="email" class="subscribe-input" placeholder="Enter your e-mail address..." required>
				<button class='btn btn-primary subscribe-submit' type="submit">Subscribe</button>
			</div>
		</div>
	</section>

	<!--FOOTER-->
	<footer id='footer'>
		<div class="container">
			<div id='footer-content'>
				<h2><img src="asset/img/logo.png" alt></h2>
				<p id='social-links'>
					<a href="" class='icon ion-social-facebook'></a>
					<a href="" class='icon ion-social-twitter'></a>
					<a href="" class='icon ion-social-googleplus-outline'></a>
					<a href="" class='icon ion-social-instagram'></a>
				</p>
				<p class='copyright'>Copyright © 2014 Rego</p>
			</div>
		</div>
	</footer>
	<div id='static-footer'></div>

	<script src="asset/js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="asset/js/retina.min.js"></script>
	<script src="asset/js/owl.carousel.min.js"></script>
	<script src="asset/js/wow.js"></script>
	<script src="asset/js/jquery.nav.js"></script>
	<script src="asset/js/jquery.scrollTo.min.js"></script>
	<script src="asset/js/nivo-lightbox.min.js"></script>
	<script type="text/javascript">
		// general variables
		myWindow = $(window)
		windowHeight = myWindow.height()
		header = $('#header')
		svgRect = $('#svg-rect')
		showNav = $('#show-nav')
		hideNav = $('#hide-nav')
		navUl = $('#nav-ul')

		// set header height
		if (windowHeight>=900) {
			header.css('height', windowHeight - 250)
		}
		else{
			header.css('height', windowHeight)
		}

		headerHeight = header.outerHeight()
		headerWidth = header.outerWidth()

		$(document).ready(function() {

			// header animation svg
			var svgHeader = $('#svg-header')

			svgRect.attr('height', 1.5*headerHeight)
			svgRect.attr('width', 2*headerWidth)
			svgHeader.css('transform', 'rotate(-55deg)')
			svgHeader.css('-webkit-transform', 'rotate(-55deg)')
			svgHeader.css('ms-transform', 'rotate(-55deg)')

			// wow.js initialization
			if (myWindow.width()>530) {
				new WOW().init();
			};

			// jquery.nav.js initialization
			$('.nav-inner', '#header').onePageNav();

			// Nivo Lightbox initialization
			$('#screenshots a').nivoLightbox({
				effect: 'fadeScale',
				keyboardNav: true,
			});

			// owl.carousel.js initialization
			$("#screens-carousel").owlCarousel({
				items : 4,
				itemsDesktop : [1199,4],
				itemsDesktopSmall : [980,3],
				itemsTablet: [768,2],
				itemsMobile : [480,1],
			});
			$("#reviews-carousel").owlCarousel({
				items : 1,
				itemsDesktop : [1199,1],
				itemsDesktopSmall : [980,1],
				itemsTablet: [768,1],
				itemsMobile : [480,1],
				autoPlay: 8000,
			});
		});
		// Responsive navigation show/hide
		function showNavig() {
			navUl.css('display','block')
			hideNav.css('display','block')
			showNav.css('display','none')
		}
		function hideNavig() {
			navUl.css('display','none')
			showNav.css('display','block')
			hideNav.css('display','none')
		}
		showNav.click(function() {
			showNavig();
		});
		hideNav.click(function() {
			hideNavig();
		});
		$( "#off-nav" ).click(function() {
			hideNavig();
		});
		$( "#nav-ul > li" ).click(function() {
			if (myWindow.width()<=767) {
				hideNavig();
			};
		});

		// Resize event handler
		myWindow.resize(function() {
			// show/hide responsive navigation
			if (myWindow.width()>767) {
				navUl.css('display','block')
			}
			else{
				navUl.css('display','none')
			}

			// resize SVG rectangle in header
			headerWidth = header.outerWidth()
			svgRect.attr('height', 1.5*headerHeight)
			svgRect.attr('width', 2*headerWidth)
		});

		// scrollTo buttons
		menuBarHeight = $('#menu-bar-fixed').outerHeight();

		$('.scrollTo-download').click(function(){
			$.scrollTo( $('#download').offset().top-menuBarHeight+'px' , 800 );
		});
		$('.scrollTo-about').click(function(){
			$.scrollTo( $('#about').offset().top-menuBarHeight+'px' , 800 );
		});
		$('.scrollTo-header').click(function(){
			$.scrollTo( header , 800 );
		});


		footerHeight = $('footer').outerHeight();
		$('#static-footer').css('margin-top', footerHeight+'px');

		// scroll event
		window.onscroll = scroll;
		
		function scroll () {

			var wScrollTop = $(window).scrollTop();
			var wScrollBot = wScrollTop + $(window).height();
			var pageHeight = $(document).height();
			var footerContent = $("#footer-content")

			// fixed footer opacity change onscroll
			if(wScrollBot>pageHeight-(footerHeight/2)){
				var newOpacity = (0.99/(footerHeight/2)) * (wScrollBot-(pageHeight-(footerHeight/2)))
				footerContent.css('opacity', newOpacity);
			}
			else{
				footerContent.css('opacity','0');
			}
			
			// fixed navigation show/hide
			var menuBarFixed = $('#menu-bar-fixed')

			if (wScrollTop >= headerHeight - menuBarFixed.outerHeight()) {
				menuBarFixed.css('top','0');
				menuBarFixed.css('opacity','1');
			}
			else{
				menuBarFixed.css('top',-menuBarFixed.outerHeight()+'px');
				menuBarFixed.css('opacity','0');
			};
		}

	</script>

</body>
</html>