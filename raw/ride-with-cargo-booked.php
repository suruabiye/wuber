<?php require_once('layouts/header.php'); ?>

    <section class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <ol class="breadcrumb">
                        <li><a href="ride-with-cabgo.php">Ride with Cabgo</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding our-vehicles-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="booking-form">
                        <form action="#">
                            <div class="from-group destination">
                                <label for="">From</label>
                                <i class="fas fa-map-marker-alt"></i>
                                <input type="text" name="" placeholder="Select Desgination" id="" class="form-control">
                            </div>
                            <div class="from-group destination">
                                <label for="">Where to?</label>
                                <i class="fas fa-map-marker-alt"></i>
                                <input type="text" name="" placeholder="Select Desgination" id="" class="form-control">
                            </div>
                            <div class="payment-options-wrapper">
                                <label for="">Payment Method</label>
                                <div class="from-group payment-options">
                                    <div class="form-check form-check-inline">
                                        <input checked class="form-check-input" type="radio" name="payment-opts" id="cash-pay" value="option1">
                                        <label class="form-check-label" for="cash-pay">Cash</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="payment-opts" id="banking-pay" value="option2">
                                        <label class="form-check-label" for="banking-pay">Net Banking</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="payment-opts" id="card-pay" value="option3">
                                        <label class="form-check-label" for="card-pay">Debit Card</label>
                                    </div>
                                </div>
                            </div>

                            <div class="select-car-wrapper">
                                <h2>Selected Car</h2>
                                <div class="selected-car">
                                    <div class="from-group car-options">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="car-opts" id="scooter" value="option1">
                                            <label class="form-check-label" for="scooter">
                                                <img src="assets/images/dashboard/car-1.png" alt="car">
                                            </label>
                                            <div class="car-details">
                                                <h4>1x</h4>
                                                <p>Scooter</p>
                                            </div>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input checked class="form-check-input" type="radio" name="car-opts" id="alto" value="option2">
                                            <label class="form-check-label" for="alto">
                                                <img src="assets/images/dashboard/car-2.png" alt="Car">
                                            </label>
                                            <div class="car-details">
                                                <h4>2x</h4>
                                                <p>Alto</p>
                                            </div>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="car-opts" id="swift" value="option3">
                                            <label class="form-check-label" for="swift">
                                                <img src="assets/images/dashboard/car-3.png" alt="Car">
                                            </label>
                                            <div class="car-details">
                                                <h4>3x</h4>
                                                <p>Swift dzire</p>
                                            </div>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="car-opts" id="luxury" value="option3">
                                            <label class="form-check-label" for="luxury">
                                                <img src="assets/images/dashboard/car-4.png" alt="Car">
                                            </label>
                                            <div class="car-details">
                                                <h4>4x</h4>
                                                <p>Luxury</p>
                                            </div>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="car-opts" id="tourist" value="option3">
                                            <label class="form-check-label" for="tourist">
                                                <img src="assets/images/dashboard/car-5.png" alt="Car">
                                            </label>
                                            <div class="car-details">
                                                <h4>5x</h4>
                                                <p>Tourist</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="button button-dark tiny">Booked</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ride-map-area">
                        <div id="ride-map"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="driver-carousel">
                        <div id="driver-carousel" class="driver-carousel-wrapper owl-carousel">
                            <div class="single-driver-info">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media">
                                            <img class="mr-3" src="assets/images/dashboard/driver-1.png" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h4>Simon William</h4>
                                                <p>$5.06
                                                    <a href="#"><i class="fas fa-info-circle"></i></a>
                                                </p>
                                                <a href="#">View profile</a>
                                            </div>
                                        </div>
                                        <div class="contact-number">
                                            <i class="fas fa-mobile-alt"></i>
                                            (+1) 123 456 7890
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-driver-info">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media">
                                            <img class="mr-3" src="assets/images/dashboard/driver-1.png" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h4>Simon William</h4>
                                                <p>$5.06
                                                    <a href="#"><i class="fas fa-info-circle"></i></a>
                                                </p>
                                                <a href="#">View profile</a>
                                            </div>
                                        </div>
                                        <div class="contact-number">
                                            <i class="fas fa-mobile-alt"></i>
                                            (+1) 123 456 7890
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-driver-info">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media">
                                            <img class="mr-3" src="assets/images/dashboard/driver-1.png" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h4>Simon William</h4>
                                                <p>$5.06
                                                    <a href="#"><i class="fas fa-info-circle"></i></a>
                                                </p>
                                                <a href="#">View profile</a>
                                            </div>
                                        </div>
                                        <div class="contact-number">
                                            <i class="fas fa-mobile-alt"></i>
                                            (+1) 123 456 7890
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-driver-info">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media">
                                            <img class="mr-3" src="assets/images/dashboard/driver-1.png" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h4>Simon William</h4>
                                                <p>$5.06
                                                    <a href="#"><i class="fas fa-info-circle"></i></a>
                                                </p>
                                                <a href="#">View profile</a>
                                            </div>
                                        </div>
                                        <div class="contact-number">
                                            <i class="fas fa-mobile-alt"></i>
                                            (+1) 123 456 7890
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-driver-info">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media">
                                            <img class="mr-3" src="assets/images/dashboard/driver-1.png" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h4>Simon William</h4>
                                                <p>$5.06
                                                    <a href="#"><i class="fas fa-info-circle"></i></a>
                                                </p>
                                                <a href="#">View profile</a>
                                            </div>
                                        </div>
                                        <div class="contact-number">
                                            <i class="fas fa-mobile-alt"></i>
                                            (+1) 123 456 7890
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-driver-info">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media">
                                            <img class="mr-3" src="assets/images/dashboard/driver-1.png" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h4>Simon William</h4>
                                                <p>$5.06
                                                    <a href="#"><i class="fas fa-info-circle"></i></a>
                                                </p>
                                                <a href="#">View profile</a>
                                            </div>
                                        </div>
                                        <div class="contact-number">
                                            <i class="fas fa-mobile-alt"></i>
                                            (+1) 123 456 7890
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="theme-2">

        <section class="footer-nav-section section-padding theme-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="footer-brand">
                            <a href="index.html"><img src="assets/images/logo.png" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="social-nav">
                            <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" class="instagram"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#" class="google-p"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#" class="pinterest"><i class="fab fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <div class="app-download-box">
                            <a href="#"><img src="assets/images/icon/google-play.jpg" alt="Google play"></a>
                            <a href="#"><img src="assets/images/icon/apple-store.jpg" alt="Apple store"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="copyright-section theme-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p>&copy; Copyright 2018 by Tortoiz. All Right Reserved.</p>
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
    <script src="assets/plugins/common/common.min.js"></script>
    <script src="assets/plugins/OwlCarousel/owl.carousel.min.js"></script>
    <script src="assets/plugins/counterup/waypoints.min.js"></script>
    <script src="assets/plugins/counterup/jquery.counterup.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB16sGmIekuGIvYOfNoW9T44377IU2d2Es&sensor=true"></script>
    <script src="assets/plugins/gmap3/gmap3.min.js"></script>
    <!-- custom scripts -->
    <script src="js/scripts.js"></script>


</body>

</html>