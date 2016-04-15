<?php
ob_start();
        session_start();
        if(isset($_SESSION["user_id"])) 
        {
            header("Location:user/home.php");
        }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>FIXMYCAR</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

   <script src="asset/js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="asset/signup/js/jquery.leanModal.min.js"></script>
    
    <link type="text/css" rel="stylesheet" href="asset/signup/css/style3.css" />
    
	<link href="css/bootstrap.css" rel="stylesheet" media="screen">
	<link href="css/owl.theme.css" rel="stylesheet" media="screen">
	<link href="css/owl.carousel.css" rel="stylesheet" media="screen">
	<link href="css/style-dark-col2.css" rel="stylesheet" media="screen">
	<link href="css/animate.css" rel="stylesheet" media="screen">
	<link href="css/ionicons.css" rel="stylesheet" media="screen">
	<link href="css/mechastyle.css" rel="stylesheet" media="screen">
	<link href="css/font.css" rel="stylesheet" media="screen">
   
	<link rel="stylesheet" href="css/nivo-lightbox.css" type="text/css" />
	<link rel="stylesheet" href="css/nivo-themes/default/default.css" type="text/css" />

	<link href="img/favicon.png" rel="shortcut icon">

	<link href='https://www.google.com/fonts#UsePlace:use/Collection:Lato:300,400,700,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Merriweather:300italic' rel='stylesheet' type='text/css'>

</head>
<body class='android'>

	<!--HEADER-->
	<header id='header'>
		<div id='menu-bar' class='animated fadeIn'>
			<div class='container'>
			<div class="row">
				<div class='logo'>
					<img src="img/logo.png" alt>
				</div>
				<nav  id="nav" class='nav '>
					<ul class='nav-inner'>
						<li class='current'><a href="#header">Home</a></li>
						<li><a href="#about">About</a></li>
						<li><a href="#features">Features</a></li>
						<li><a href="#screenshots">Screens</a></li>
						<li><a href="#reviews">Reviews</a></li>
						<li><a href="http://shop.fixmycar.ng/">Buy Parts</a></li>
					</ul>
				</nav>
                </div>
			</div>
		</div>
		<div class="container">
			<div class='row headerry'>
			<div class='col-lg-6 col-md-7 col-sm-7 col-xs-6'>
					<img src="img/iPhone-header.png" id='header-img' class='img-responsive animated fadeIn' alt>
				</div>

				<div class='col-lg-6 col-md-5 col-sm-5 col-xs-6 animated fadeInRight'>
					<h1>Give your engine the treatment and care it deserves</h1>
                    <h3>Complete diagnosis ,servicing and repair.</h3>
					<div id='header-btn'>
						<a class='btn btn-secondary scrollTo-about' style="width:150px; text-align:center">Learn More</a>
						<a id="modal_trigger2" href="#modal" class='btn btn-primary scrollTo' style="width:150px; text-align:center">Join Us</a>
                        </div>
				</div>
<!--<a  href="../home/user/login/" class="btn btn-secondary" style="color:white;padding-top:15px; width:150px; margin-left:-5px;"  > -->
					
			</div>
		</div>
		<div id='menu-bar-fixed'>
			<div class='container'>
				<a class='logo scrollTo-header'><img src="img/logo2.png" alt></a>
				<nav  id="nav-fixed" class='nav'>
					<a id="show-nav" title="Show navigation"><div></div></a>
    				<a id="hide-nav" title="Hide navigation"><div></div></a>
					<ul id='nav-ul' class='nav-inner'>
						<li><a href="#header">Home</a></li>
						<li class='current'><a href="#about">About</a></li>
						<li><a href="#features">Features</a></li>
						<li><a href="#screenshots">Screens</a></li>
						<li><a href="#reviews">Reviews</a></li>
						<li><a href="http://shop.fixmycar.ng/">Buy Parts</a></li>						
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
						<div class='icon'><span class="icon-monitor_car"></span></div>
					</div>
					<div class='text'>
						<h3>Consult</h3>
						<p>  Subscribe</a>Is your car faulty or just not running smooth enough? Take advantage of the deep knowledge of our experts with your issue.</p>
                        <div class="container">

    
    </div>
					</div>
				</div>
				<div class='col-sm-6 col-md-3 col-lg-3'>
					<div class='circle-icon-lg'>
						<div class='icon'><span class="icon-hand_spanner"></span></div>
					</div>
					<div class='text'>
						<h3>Maintenance</h3>
						<p>With a growing list of service centres in and around Lagos, Nigeria. Fixmycar.ng is closer to you than you can imagine.
</p>
					</div>
				</div>
				<div class='col-sm-6 col-md-3 col-lg-3'>
					<div class='circle-icon-lg'>
						<div class='icon'><span class="icon-gears"></span></div>
					</div>
					<div class='text'>
						<h3>Repairs</h3>
						<p>Let the best trained mechanics and engineer repair and tune up your car at the cheapest possible rate.
</p>
					</div>
				</div>
				<div class='col-sm-6 col-md-3 col-lg-3'>
					<div class='circle-icon-lg'>
						<div class='icon'><span class="icon-mechanic"></span></div>
					</div>
					<div class='text'>
						<h3>Sales</h3>
						<p>Buy new and used OEM parts that best fit your car to guarantee top performance.
</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--FEATURES-->
	<section id='features'>
		<div class="container">
			<div class='wow fadeInDown'>
				<h2>Remarkable Benefits</h2>
				<p class='subtitle'>Our 6-Points Agenda that guarantees top performance of your automobile.</p>
			</div>
			<div class='row'>
				<div class='col-sm-4 col-md-4 col-lg-4 left wow fadeInLeft'>
					<div class='row'>
						<div class='col-sm-12 col-md-9 col-lg-9'>
							<h4>Free Diagnosis</h4>
							<p>Take advantage of our on-site & off-site FREE vehicle diagnosis to find out the true status of your car.
</p>
						</div>
						<div class='col-sm-3 col-md-3 col-lg-3'>
							<div class='circle-icon-rspv'><div class='icon ion-ios7-eye-outline'></div></div>
						</div>
					</div>
					<div class='row'>
						<div class='col-sm-12 col-md-9 col-lg-9'>
							<h4>Preventive maintenance</h4>
							<p>We are focused on preventive maintenance to enable our customers speed less and save more without compromising the health of their car.</p>
						</div>
						<div class='col-sm-3 col-md-3 col-lg-3'>
							<div class='circle-icon-rspv'><div class='icon ion-ios7-checkmark-empty'></div></div>
						</div>
					</div>
					<div class='row'>
						<div class='col-sm-12 col-md-9 col-lg-9'>
							<h4>Trusted & Certified Technicians</h4>
							<p>Fixmycar.ng Certified Technicians have the skills to diagnose, maintain and repair all popular brands of automobile.
</p>
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
							<h4>24/7 Auto Recovery</h4>
							<p>As much as we work round the clock to prevent a vehicle breakdown, unforeseen conditions make this avoidable, but not to worry, our 24/7 auto recovery service is our back-up plan.</p>
						</div>
					</div>
					<div class='row'>
						<div class='col-sm-3 col-md-3 col-lg-3'>
							<div class='circle-icon-rspv'><div class='icon ion-ios7-heart-outline'></div></div>
						</div>
						<div class='col-sm-12 col-md-9 col-lg-9'>
							<h4>Guaranteed Quality Service</h4>
							<p>We take quality controls serious, this is the only way we are able to guarantee quality service delivery.
</p>
						</div>
					</div>
					<div class='row'>
						<div class='col-sm-3 col-md-3 col-lg-3'>
							<div class='circle-icon-rspv'><div class='icon ion-ios7-box-outline'></div></div>
						</div>
						<div class='col-sm-12 col-md-9 col-lg-9'>
							<h4>Affordable Prices</h4>
							<p>We offer low prices without compromising quality.</p>
						</div>
					</div>
				</div>
				<div class='col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-sm-pull-4 col-md-4 col-md-pull-4 col-lg-4 col-lg-pull-4'>
					<img src="img/HTC-One.jpg" class='img-responsive wow fadeInUp' alt>
				</div>
			</div>
		</div>
	</section>

	<!--DETAILED INFO-->
	<section id='detailed'>
		<div class="container">
			<div class='row'>
				<div class='col-sm-12 col-md-7 col-lg-7 wow fadeInLeft'>
					<h2>Our Core Focus</h2>
					<p class='subtitle'>While we are focused on preventive maintenance, quality service delivery is at the centre of our daily activities.</p>
				</div>
				<div class='col-sm-6 col-md-6 col-lg-6 wow fadeInLeft'>
					<div class='row'>
						<div class='col-sm-2 col-md-2 col-lg-2'>
							<div class='icon ion-ios7-loop-strong'></div>
						</div>
						<div class='col-sm-10 col-md-10 col-lg-10'>
							<h4>Preventive Maintenance</h4>
							<p>Our focus is on preventive maintenance procedures that keep your automobile on the road longer.</p>
						</div>
					</div>
					<div class='row'>
						<div class='col-sm-2 col-md-2 col-lg-2'>
							<div class='icon ion-ios7-stopwatch-outline'></div>
						</div>
						<div class='col-sm-10 col-md-10 col-lg-10'>
							<h4>Quality Service Delivery</h4>
							<p>We follow safety & quality control protocols when carrying carrying out repairs and other services.
</p>
						</div>
					</div>
				</div>
				<div class='col-sm-6 col-md-6 col-lg-6 img wow fadeInRight delay-sm'>
					<img src="img/3Phones.png" class='img-responsive' alt>
				</div>
			</div>
		<div></div>
	</section>

	<!--BANNER-DOWNLOAD--->
	<section id='download-banner'>
		<div class="container">
			<p>
				<span class='text wow fadeInLeft'>
					<span class='bold'>Like what you see? </span><span class='normal'>Book your FREE automobile diagnosis now</span>
				</span>
				<a class='btn btn-primary scrollTo-download wow pulse delay-1s'>Free Diagnosis</a>
			</p>
		</div>
	</section>

	<!--SCREENSHOTS-->
	<section id='screenshots'>
		<div class="container">
			<div class='row wow fadeInDown'>
              <div class='col-lg-6 col-md-7 col-sm-7 col-xs-6'>
					<img src="img/chasis.png" id='chasis-img' class='img-responsive animated fadeIn' alt>
				</div>

				<div class='time row col-lg-6 col-md-5 col-sm-5 col-xs-6 animated fadeInRight'>
					<h1 class="time ">About Us</h1>
                   <h2>Customer is King</h2>
                    <h3> It breaks our heart each time we see an automobile breakdown by the roadside. This enforces our daily focus on preventive maintenance and quality service delivery. It is the empathy that get when we see people struggle with their automobile that fuels our compassion to build the biggest Autocare brand in Africa.</h3>
					
				</div>
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

	<!--Newsletter-->
	<section id='newsletter'>
		<div class="container">
			<div class='wow fadeInDown'>
				<h2 class ='dsdsd'>Subscribe to our newsletter</h2>
				<p class='subtitle'>Get the latest autocare tips and find quick solutions to your automobile challenges.</p>
			</div>
			<div id='newsletter-form'>
				<input type="email" name="email" class="subscribe-input" placeholder="Enter your e-mail address..." required>
				<button class='newsy subscribe-submit' type="submit">Subscribe</button>
			</div>
		</div>
	</section>

		<div id="modal" class="popupContainer" style="display:none; padding:20px;">
            <!--<header class="popupHeader" style="max-height:10px !important;">
                <span class="header_title"> Subscribe to a service </span>
                <span class="modal_close"><i class="fa fa-time">X</i></span>
            </header>
-->
         
            <section class="popupBody">
 <script >
    
    function error(name)
    {
        $("#modal_trigger2").leanModal({top : 100, overlay : 0.6, closeButton: ".modal_close" });
    
     $("#modal_trigger2").trigger("click");
        $(document).ready(function(){
       
    
  $(".result").append(name);
  $(".result").css({"color":"red","padding":"10px"});
  $("#username").addClass("login user error");
  $("#pass").addClass("login user error");
  });

    }
    
    
  
  
    
</script>

    
<form method="post" id="loginform" autocomplete="off">
                
               <!-- Box Start-->

<div id="box_bg">
<div id="content">
   
	<h1>Sign In</h1>
	
	
	<!-- Login Fields -->
	<div id="login">Sign in using your registered account:<br/><br/>
        <span class="result"></span>
	<input required id="username" type="text" placeholder="Username" style="form" value="" name="User_name" class="login user"/><br/><br/>
	<input required type='password' id="pass" name='password' placeholder="Password" value='' class="login password"/>
	</div>
	
	<!-- Green Button -->
    <button class="btn btn-primary"  type="submit" name="submit" value="" >Sign In</button>
    <a class="btn btn-success" href="user/login/Register.php">Sign Up</a>
	

	

</div>
</div>
                
    </form><?php if(isset($_POST['submit']))
{ 
    require_once('core/function.php');
    
    $data = new User_function('asset/social_login/config/pdodbconfig.php');
        
    
    if($data->login($_POST["User_name"], $_POST["password"]) == TRUE)
    {
        header('location: user/home.php'); 
    }
     
}

?>                

            </section>

        </div>
	<!--FOOTER-->
	<footer id='footer'>
		<div class="container">
			<div id='footer-content'>
				<h2><img src="img/logo2.png" alt></h2>
				<p id='social-links'>
					<a href="" class='icon ion-social-facebook'></a>
					<a href="" class='icon ion-social-twitter'></a>
					<a href="" class='icon ion-social-googleplus-outline'></a>
					<a href="" class='icon ion-social-instagram'></a>
				</p>
				<p class='copyright'>Copyright © 2014 fixmycar.ng</p>
			</div>
		</div>
	</footer>
	<div id='static-footer'></div>
<script type="text/javascript">
	$("#modal_trigger").leanModal({top : 200, overlay : 0.6, closeButton: ".modal_close" });
    $("#modal_trigger2").leanModal({top : 100, overlay : 0.6, closeButton: ".modal_close" });
    
     //$("#modal_trigger2").trigger("click");
    

</script>




	<script src="js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/retina.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/wow.js"></script>
	<script src="js/jquery.nav.js"></script>
	<script src="js/jquery.scrollTo.min.js"></script>
	<script src="js/nivo-lightbox.min.js"></script>
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
		/*if (windowHeight>=900) {
			header.css('height', windowHeight - 250)
		}
		else{
			header.css('height', windowHeight)
		}*/

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
<?php ob_end_flush(); ?>