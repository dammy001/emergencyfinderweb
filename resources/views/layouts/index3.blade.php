
<!DOCTYPE html>
<html lang="en">
<head>
<title>Single Listing</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="DirectoryPlus template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../styles/listing.css">
<link rel="stylesheet" type="text/css" href="../styles/listing_responsive.css">
</head>
<body>

<!-- Menu -->

<div class="menu">
	<div class="menu_container text-right">
		<div class="menu_close">close</div>
		<nav class="menu_nav">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="#">About us</a></li>
				<li><a href="listings.html">Listings</a></li>
				<li><a href="blog.html">News</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</nav>
		<div class="menu_link">
			<a href="#">+Add Listing</a>
		</div>
	</div>
</div>

<div class="super_container">

	<!-- Header -->

    <header class="header">
            <div class="header_background"><div class="background_image" style="background-image:url(images/header.jpg)"></div></div>
            <div class="header_overlay"></div>
            <div class="header_content d-flex flex-row align-items-center justify-content-start">

                <!-- Logo -->
                <div class="logo"><a href="#">Emergency<span>Finder</span><span>+</span></a></div>

                <!-- Header Nav -->
                <div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
                    <nav class="main_nav">
                        <ul class="d-flex flex-row align-items-center justify-content-start">
                            <li class="active"><a href="/">Home</a></li>
                            <li><a href="#">About us</a></li>
                        <li><a href="{{route('service')}}">Service Providers</a></li>
                            <li><a href="blog.html">News</a></li>
                            <li><a href="{{route('contact')}}">Contact</a></li>
                        </ul>
                    </nav>
                <div class="add_listing text-center trans_200"><a href="{{route('addservice')}}">+Add Service</a></div>

                    <div class="log_reg">
                        <ul class="d-flex flex-row align-items-center justify-content-start">
                        @guest
                                <li><a href="{{ route('login') }}">Login</a></li>
                            @if (Route::has('register'))
                                <li><a href="{{route('register')}}">Register</a></li>
                            @endif
                        @else
                            <li class="dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                            </li>
                        @endguest
                        </ul>
                    </div>
                    <div class="hamburger">
                        <i class="fa fa-bars trans_200"></i>
                    </div>
                </div>

            </div>
        </header>


        @yield('content')


        <footer class="footer container_custom">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="footer_container d-flex flex-md-row flex-column align-items-center justify-content-md-start justify-content-center">
                                <div class="copyright order-md-1 order-2">
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Emergency Finder+
    </div>
                                <nav class="footer_nav ml-md-auto order-md-2 order-1">
                                    <ul class="d-flex flex-row align-items-center justify-content-start">
                                        <li class="active"><a href="index.html">Home</a></li>
                                        <li><a href="#">About us</a></li>
                                    <li><a href="{{route('service')}}">Service Providers</a></li>
                                        <li><a href="blog.html">News</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
	</div>

</div>

<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../styles/bootstrap-4.1.2/popper.js"></script>
<script src="../styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="../plugins/greensock/TweenMax.min.js"></script>
<script src="../plugins/greensock/TimelineMax.min.js"></script>
<script src="../plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="../plugins/greensock/animation.gsap.min.js"></script>
<script src="../plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="../plugins/easing/easing.js"></script>
<script src="../plugins/progressbar/progressbar.min.js"></script>
<script src="../plugins/parallax-js-master/parallax.min.js"></script>
<script src="../plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="../js/listing.js"></script>
</body>
</html>
