<!doctype html>
<!--
COPYRIGHT by HighHay/Mivfx
Before using this theme, you should accept themeforest licenses terms.
http://themeforest.net/licenses
-->

<html class="no-js" lang="en">

<!-- Mirrored from demo.highhay.com/timex/index-video.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Apr 2022 09:21:51 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">

        <!-- Page Title Here -->
        <title>Bright & Marv Wedding Site</title>

        <!-- Page Description Here -->
		<meta name="description" content="A responsive coming soon template, un template HTML pour une page en cours de construction">

        <!-- Disable screen scaling-->
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, user-scalable=0">

        <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->

        <!-- Initializer -->
        <link rel="stylesheet" href="{{asset('coming_soon/css/normalize.css')}}">

        <!-- Web fonts and Web Icons -->
        <link rel="stylesheet" href="{{asset('coming_soon/css/pageloader.css')}}">
        <link rel="stylesheet" href="{{asset('coming_soon/fonts/opensans/stylesheet.css')}}">
        <link rel="stylesheet" href="{{asset('coming_soon/fonts/asap/stylesheet.css')}}">
        <link rel="stylesheet" href="{{asset('coming_soon/css/ionicons.min.css')}}">

        <!-- Vendor CSS style -->
        <link rel="stylesheet" href="{{asset('coming_soon/css/foundation.min.css')}}">
        <link rel="stylesheet" href="{{asset('coming_soon/js/vendor/jquery.fullPage.css')}}">
        <link rel="stylesheet" href="{{asset('coming_soon/js/vegas/vegas.min.css')}}">

		<!-- Main CSS files -->
        <link rel="stylesheet" href="{{asset('coming_soon/css/main.css')}}">
        <link rel="stylesheet" href="{{asset('coming_soon/css/main_responsive.css')}}">
        <link rel="stylesheet" href="{{asset('coming_soon/css/style-color1.css')}}">

        <script src="{{asset('coming_soon/js/vendor/modernizr-2.7.1.min.js')}}"></script>
    </head>
    <body id="menu" class="alt-bg">
        <!--[if lt IE 8]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Page Loader -->
        <div class="page-loader" id="page-loader">
            <div><i class="ion ion-loading-d"></i><p>loading</p></div>
        </div>

        <!-- BEGIN OF site header Menu -->
		<!-- Add "material" class for a material design style -->
		<header class="header-top">

            <div class="menu clearfix">
                <a href="#about-us">about</a>

                <!--<div class="menu-cont">
					<p class="text">Menu cont</p>
					<ul class="sub-menu">
						<li><a href="htp://page">My Page</a></li>
					</ul>
				</div>-->
				<!-- Add other menu similar to "about" here -->
                <a href="#contact">contact</a>
            </div>
		</header>
        <!-- END OF site header Menu-->

        <!-- BEGIN OF Quick nav icons at left -->
		<nav class="quick-link count-4 nav-left">
			<div class="logo">
				<a href="#home">
{{--					<img src="{{asset('coming_soon/img/logo_only.png')}}" alt="Logo Brand">--}}
				</a>
			</div>
			<ul id="qmenu" class="qmenu">
				<li data-menuanchor="home">
					<a href="#home" class=""><i class="icon ion ion-home"></i>
					</a>
					<span class="title">Home page</span>
				</li>
				<li data-menuanchor="register">
					<a href="#register"><i class="icon ion ion-compose"></i>
					</a>
					<span class="title">Stay in touch</span>
				</li>
				<li data-menuanchor="about-us">
					<a href="#about-us"><i class="icon ion ion-android-information"></i>
					</a>
					<span class="title">About Us</span>
				</li>
				<!--<li data-menuanchor="contact">
					<a href="#contact"><i class="icon ion ion-android-call"></i>
					</a>
					<span class="title">Contact</span>
				</li>-->
				<li data-menuanchor="contact">
					<a href="#contact"><i class="icon ion ion-email"></i>
					</a>
					<span class="title">Contact</span>
				</li>
			</ul>
		</nav>
        <!-- END OF Quick nav icons at left -->



        <!-- BEGIN OF site cover -->
        <div class="page-cover" id="s-cover">
            <!-- Cover Background -->
{{--            <div class="cover-bg pos-abs full-size bg-img" data-image-src="{{asset('coming_soon/img/bg-default.jpg')}}"></div>--}}

            <!-- BEGIN OF Slideshow Background -->
            <!--<div class="cover-bg pos-abs full-size slide-show">
				<i class='img' data-src='./img/bg-slide1.jpg'></i>
				<i class='img' data-src='./img/bg-slide2.jpg'></i>
				<i class='img' data-src='./img/bg-slide3.jpg'></i>
				<i class='img' data-src='./img/bg-slide4.jpg'></i>
			</div>-->
            <!-- END OF Slideshow Background -->

            <!--BEGIN OF Static video bg  - uncomment below to use Video as Background-->
            <div id="container" class="video-container show-for-medium-up">
                <video autoplay="autoplay" loop="loop" autobuffer="autobuffer" muted="muted"
                       width="640" height="360">
                    <source src="{{asset('coming_soon/vid/flower_loop.mp4')}}" type="video/mp4">
                </video>
            </div>
            <!--END OF Static video bg-->

			<!-- Solid color as background -->
<!--            <div class="cover-bg pos-abs full-size bg-color" data-bgcolor="rgb(59, 59, 59)"></div>-->

			<!-- Solid color as filter -->
            <div class="cover-bg-mask pos-abs full-size bg-color" data-bgcolor="rgba(0, 0, 0, 0.41)"></div>

        </div>
        <!--END OF site Cover -->

		<!-- Begin of timer pane -->
		<div class="pane-when " id="s-when">
			<div class="content">
				<!-- Clock -->
				<div class="clock clock-countdown">
					<div class="site-config"
						 data-date="4/05/2022 00:00:00"
						 data-date-timezone="+2"
						 >

                    </div>
					<div class="elem-center">
						<div class="digit">
							<span class="days">{{$daysRemaining}}</span>
							<span class="txt">days</span>
						</div>
					</div>
					<!-- Logo instead -->
<!--
					<div class="logo">
						<a href="#">
							<img src="img/logo_only.png">
						</a>
					</div>
-->

					<div class="elem-bottom">
						<div class="deco"></div>
                        <span>5 May 2022</span>
					</div>
				</div>


				<footer>
					<p>Before we launch our <strong>RSVP Site.</strong></p>
				</footer>
			</div>
		</div>
		<!-- End of timer pane -->

        <!-- BEGIN OF site main content content here -->
        <main class="page-main" id="mainpage">

			@yield('content')

        </main>

        <!-- END OF site main content content here -->

		<!-- Begin of site footer -->
		<footer class="page-footer">
			<div>
				<a href="http://www.facebook.com/" target="_blank"><i class="ion icon ion-social-facebook"></i></a>
				<a href="http://www.instagram.com/" target="_blank"><i class="ion icon ion-social-instagram"></i></a>
				<a href="http://twitter.com/" target="_blank"><i class="ion icon ion-social-twitter"></i></a>
			</div>
		</footer>
		<!-- End of site footer -->


<!--        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->

        <!-- All Javascript plugins goes here -->
<!--		<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>-->
        <script src="{{asset('coming_soon/js/vendor/jquery-1.11.2.min.js')}}"></script>
		<!-- All vendor scripts -->
        <script src="{{asset('coming_soon/js/vendor/all.js')}}"></script>

		<!-- Detailed vendor scripts -->
        <!--<script src="./js/vendor/jquery.fullPage.min.js"></script>
        <script src="./js/vendor/jquery.slimscroll.min.js"></script>
        <script src="./js/vendor/jquery.knob.min.js"></script>
        <script src="./js/vegas/vegas.min.js"></script>
        <script src="./js/jquery.maximage.js"></script>
        <script src="./js/okvideo.min.js"></script>-->

		<!-- Downcount JS -->
        <script src="{{asset('coming_soon/js/jquery.downCount.js')}}"></script>

		<!-- Form script -->
{{--        <script src="{{asset('coming_soon/js/form_script.js')}}"></script>--}}

		<!-- Javascript main files -->
        <script src="{{asset('coming_soon/js/main.js')}}"></script>


        <!-- Google Analytics: Uncomment and change UA-XXXXX-X to be your site"s ID. -->
        <!--<script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src="//www.google-analytics.com/analytics.js";
            r.parentNode.insertBefore(e,r)}(window,document,"script","ga"));
            ga("create","UA-XXXXX-X");ga("send","pageview");
        </script>-->
    </body>

<!-- Mirrored from demo.highhay.com/timex/index-video.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Apr 2022 09:21:52 GMT -->
</html>
