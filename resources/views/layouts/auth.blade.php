<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Join | Wuber Delivery and Vehicle Services</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png"> -->

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/OwlCarousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="striped-bg theme-3">

<header class="theme-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="logo">
                    <a href="{{ url('/') }}"><img src="{{ asset('assets/images/logo-main.png') }}" alt="Wuber"></a>
                </div>
            </div>
        </div>
    </div>
</header>

@yield('content')

<footer class="theme-2">

    <section class="footer-nav-section section-padding theme-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-brand">
                        <a href="{{ url('/') }}"><img src="{{ asset('assets/images/logo.png') }}" alt="logo"></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="social-nav">
                        <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" class="instagram"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <div class="app-download-box">
                        <a href="#"><img src="{{ asset('assets/images/icon/google-play.jpg') }}" alt="Google play"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="copyright-section theme-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <p>&copy; Copyright 2021 by Wuber. All Right Reserved.</p>
                </div>
                <div class="col-lg-6">
                    <ul class="social-nav">
                        <li><a href="#">Privecy</a></li>
                        <li><a href="#">Terms</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

</footer>


<!-- jQuery -->
<script src="{{ asset('assets/plugins/common/common.min.js') }}"></script>
<script src="{{ asset('assets/plugins/OwlCarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/plugins/counterup/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/plugins/counterup/jquery.counterup.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB16sGmIekuGIvYOfNoW9T44377IU2d2Es&sensor=true"></script>
<script src="{{ asset('assets/plugins/gmap3/gmap3.min.js') }}"></script>
<!-- custom scripts -->
@yield('js')
<script src="{{ asset('js/scripts.js') }}"></script>

</body>

</html>
