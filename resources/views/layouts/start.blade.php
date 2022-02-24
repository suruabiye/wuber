<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title', 'Wuber Delivery and Vehicle Services')</title>
    <meta name="description" content="Wuber is a fleet management and dispatch delivery logistics firm which provides one-stop solution to fulfil our daily needs via digital technology.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!-- <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png"> -->

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="apple-touch-icon" href="{{ asset('icon.png') }}">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/OwlCarousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="theme-1">

<header class="theme-1">
    <section class="header__upper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="header__upper--left">
                        <div class="logo">
                            <a href="{{ route('start') }}">
                                <img src="{{ asset('assets/images/logo-main.png') }}" alt="Wuber Logo">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="header__upper--right">
                        <nav class="navigation">
                            <ul>
{{--                                <li><a href="{{ route('faq') }}">Faq</a></li>--}}
                            </ul>
                        </nav>
                        <a href="{{ route('contact') }}" class="button button-dark">Enquiry</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="header__lower">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('start') }}">
                                        <i class="fas fa-home"></i>Home <span class="sr-only">(current)</span>
                                    </a>
                                </li>
                                <li class="nav-item {{ request()->routeIs('about') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('about') }}">
                                        <i class="fas fa-exclamation-circle"></i>About
                                    </a>
                                </li>
                                <li class="nav-item {{ request()->routeIs('service') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('service') }}">
                                        <i class="fas fa-taxi"></i>Our Services
                                    </a>
                                </li>
                                <li class="nav-item {{ request()->routeIs('service.vehicle') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('service.vehicle') }}">
                                        <i class="fas fa-taxi"></i>Our Vehicles
                                    </a>
                                </li>
                                <li class="nav-item {{ request()->routeIs('packages') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('packages') }}">
                                        <i class="fas fa-cube"></i>Packages
                                    </a>
                                </li>
                                <li class="nav-item {{ request()->routeIs('contact') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('contact') }}">
                                        <i class="fas fa-map-marker-alt"></i>Contacts
                                    </a>
                                </li>
                            </ul>
                            <div class="my-2 my-lg-0">
                                <a href="{{  route('become-a-drive') }}" class="button button-light big">Become a Wuber Driver</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>
</header>

@yield('content')

<footer class="footer-section theme-1">

    <section class="footer-nav-section section-padding theme-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-brand">
                        <a href="{{ route('start') }}">
                            <img src="{{ asset('assets/images/logo.png') }}" alt="Logo">
                        </a>
                    </div>
                    <div class="footer-text">
                        <p>Wuber is a fleet management and dispatch delivery logistics firm which provides one-stop solution to fulfil our daily needs via digital technology.</p>
                    </div>
                    <div class="helpline">
                        <h4><span>Helpline</span></h4>
                        <p><a href="tel:+23481182391119"></a>+234 (0) 811 8239 1119</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h4>Useful links</h4>
                    <nav class="footer-navigation">
                        <ul>
                            <li><a href="{{ route('start') }}">Home</a></li>
                            <li><a href="{{ route('about') }}">About</a></li>
                            <li><a href="{{ route('service') }}">Our Services</a></li>
                            <li><a href="{{ route('service.vehicle') }}">Our Vehicles</a></li>
                            <li><a href="{{ route('packages') }}">Packages</a></li>
                            <li><a href="{{ route('contact') }}">Be a Wuber Driver</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="{{ route('contact') }}">Help</a></li>
                            <li><a href="#">Privacy policy</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h4>Head Office</h4>
                    <address class="company-address">
                        <p class="m-b-20">SW8/518, Alafia Street Ososanmi, Ibadan </p>
                        <p class="m-b-8">Phone Number: +234(0)811 8239 1119</p>
                        <p class="m-b-8">Email Address: contact@wuber.com.ng</p>
                    </address>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h4>Download Our Mobile App</h4>
                    <div class="app-download-box">
                        <a href="#"><img src="../assets/images/icon/google-play.jpg" alt="Google play"></a>
                    </div>
                    <div class="cta-button">
                        <a href="{{ route('register') }}" class="button button-dark">Become a Driver</a>
                        <a href="ride-with-cabgo.html" class="button button-dark">Ride with Wuber</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="copyright-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <p>&copy; Copyright 2021 by Wuber. All Right Reserved.</p>
                </div>
                <div class="col-lg-6">
                    <ul class="social-nav">
                        <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" class="instagram"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--
            <section class="map-section">
                <div class="google-map">
                    <div id="map-canvas"></div>
                </div>
            </section>
    -->
</footer>

<!-- jQuery -->
<script src="{{ asset('assets/plugins/OwlCarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/plugins/common/common.min.js') }}"></script>
<script src="{{ asset('assets/plugins/counterup/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/plugins/counterup/jquery.counterup.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB16sGmIekuGIvYOfNoW9T44377IU2d2Es&sensor=true"></script>
<script src="{{ asset('assets/plugins/gmap3/gmap3.min.js') }}"></script>
<!-- custom scripts -->
<script src="{{ asset('js/scripts.js') }}"></script>


</body>

</html>
