<?php require_once('layouts/header.php'); ?>

    <section class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="partner-profile.php">Other partner profile</a></li>
                    </ol>
                </div>
                <div class="col-6">
                    <div class="text-right">
                        <h2>John Smith</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding personal-information-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="passanger-name">
                        <div class="media">
                            <img class="mr-3" src="assets/images/partner-img.png" alt="partner-img">
                            <div class="media-body">
                                <h2 class="mt-0">Johnson Smith</h2>
                                <p>ID 1234567890</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="#" class="button button-dark tiny">Message</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-dashboard">
                        <ul class="nav nav-tabs tab-navigation" role="tablist">
                            <li role="presentation" class="active">
                                <a class="active" href="#info" aria-controls="info" role="tab" data-toggle="tab">Personal Information</a>
                            </li>
                            <li role="presentation">
                                <a href="#vehicles" aria-controls="vehicles" role="tab" data-toggle="tab">Vehicles</a>
                            </li>
                            <li role="presentation">
                                <a href="#drivers" aria-controls="drivers" role="tab" data-toggle="tab">Drivers</a>
                            </li>
                        </ul>
                        
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="info">
                                <div class="personal-info">
                                    <h4>Personal Information</h4>
                                    <div class="personal-details">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">First Name</label>
                                                    <input type="text" class="form-control text-muted" readonly value="John">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Last Name</label>
                                                    <input type="text" class="form-control text-muted" readonly value="Doe">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Your Email</label>
                                                    <input type="text" class="form-control text-muted" readonly value="johndoe@gmail.com">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Your Website</label>
                                                    <input type="text" class="form-control text-muted" readonly value="www.johndoe.com">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Your Birthday</label>
                                                    <input type="text" class="form-control text-muted" readonly value="01 June 1984">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Your Phone Number</label>
                                                    <input type="text" class="form-control text-muted" readonly value="+91 - 123 456 7890">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Your Gender</label>
                                                    <input type="text" class="form-control text-muted" readonly value="Male">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Status</label>
                                                    <input type="text" class="form-control text-muted" readonly value="Married">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="">Write a little description about you</label>
                                                    <textarea class="form-control text-muted" readonly>Vestibulum suscipit faucibus dolor, vitae mollis justo consequat vel. Vestibulum in nisi ut neque tristique accumsan vel eu eros. Quisque pellentesque urna et hendrerit lacinia. Mauris vitae tellus neque. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec in placerat tortor, sit amet dictum sem. Donec et orci condimentum eros pulvinar maximus. Suspendisse accumsan imperdiet mauris vitae tincidunt. Donec imperdiet purus eget diam tristique vestibulum. Vestibulum posuere placerat lacus commodo sollicitudin. Nullam eget justo fermentum, rhoncus leo eget, viverra augue. Fusce odio odio, egestas id turpis at, faucibus consectetur nulla. Sed vel volutpat ligula, quis vulputate odio. Sed condimentum, neque nec aliquam sodales, dolor erat euismod erat, porta venenatis odio leo non dolor. Donec ut lacus non quam convallis sodales.</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="vehicles">
                                <div class="vahicles-container">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h4>My vehicles</h4>
                                        </div>
                                        <div class="col-lg-6 text-right">
                                            <a href="#" class="button button-dark">Register New Vehicle</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="single-vehicle-container">
                                                <img src="assets/images/dashboard/vehicle-1.png" alt="Vehicle">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="single-vehicle-container">
                                                <img src="assets/images/dashboard/vehicle-1.png" alt="Vehicle">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="single-vehicle-container">
                                                <img src="assets/images/dashboard/vehicle-1.png" alt="Vehicle">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="single-vehicle-container">
                                                <img src="assets/images/dashboard/vehicle-1.png" alt="Vehicle">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="single-vehicle-container">
                                                <img src="assets/images/dashboard/vehicle-1.png" alt="Vehicle">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="single-vehicle-container">
                                                <img src="assets/images/dashboard/vehicle-1.png" alt="Vehicle">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="single-vehicle-container">
                                                <img src="assets/images/dashboard/vehicle-1.png" alt="Vehicle">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="single-vehicle-container">
                                                <img src="assets/images/dashboard/vehicle-1.png" alt="Vehicle">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="drivers">
                                <div class="drivers-info">
                                    <h4>Drivers</h4>
                                    <div class="row small-section">
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="single-driver">
                                                <div class="card">
                                                    <img class="card-img-top" src="assets/images/dashboard/driver-1.png" alt="Card image cap">
                                                    <div class="card-body">
                                                        <h4 class="card-title">John Smith</h4>
                                                        <p class="card-text">(+1) 123 456 7890</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="single-driver">
                                                <div class="card">
                                                    <img class="card-img-top" src="assets/images/dashboard/driver-1.png" alt="Card image cap">
                                                    <div class="card-body">
                                                        <h4 class="card-title">John Smith</h4>
                                                        <p class="card-text">(+1) 123 456 7890</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="single-driver">
                                                <div class="card">
                                                    <img class="card-img-top" src="assets/images/dashboard/driver-1.png" alt="Card image cap">
                                                    <div class="card-body">
                                                        <h4 class="card-title">John Smith</h4>
                                                        <p class="card-text">(+1) 123 456 7890</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="single-driver">
                                                <div class="card">
                                                    <img class="card-img-top" src="assets/images/dashboard/driver-1.png" alt="Card image cap">
                                                    <div class="card-body">
                                                        <h4 class="card-title">John Smith</h4>
                                                        <p class="card-text">(+1) 123 456 7890</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="single-driver">
                                                <div class="card">
                                                    <img class="card-img-top" src="assets/images/dashboard/driver-1.png" alt="Card image cap">
                                                    <div class="card-body">
                                                        <h4 class="card-title">John Smith</h4>
                                                        <p class="card-text">(+1) 123 456 7890</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="single-driver">
                                                <div class="card">
                                                    <img class="card-img-top" src="assets/images/dashboard/driver-1.png" alt="Card image cap">
                                                    <div class="card-body">
                                                        <h4 class="card-title">John Smith</h4>
                                                        <p class="card-text">(+1) 123 456 7890</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="single-driver">
                                                <div class="card">
                                                    <img class="card-img-top" src="assets/images/dashboard/driver-1.png" alt="Card image cap">
                                                    <div class="card-body">
                                                        <h4 class="card-title">John Smith</h4>
                                                        <p class="card-text">(+1) 123 456 7890</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="single-driver">
                                                <div class="card">
                                                    <img class="card-img-top" src="assets/images/dashboard/driver-1.png" alt="Card image cap">
                                                    <div class="card-body">
                                                        <h4 class="card-title">John Smith</h4>
                                                        <p class="card-text">(+1) 123 456 7890</p>
                                                    </div>
                                                </div>
                                            </div>
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