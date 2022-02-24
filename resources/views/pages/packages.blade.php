@extends('layouts.start')
@section('title', 'Our Services')
@section('content')
    <section class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li><a href="#">Deliver with Wuber</a></li>
                    </ol>
                </div>
                <div class="col-6">
                    <div class="text-right">
                        <h2>Our packages</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding our-pakages-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <h2 class="section-title text-center">Our Packages</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-package-item text-center">
                        <div class="package-icon">
                            <span class="icon-wrapper">
                                <img src="../assets/images/icon/package-icon.png" alt="icon">
                            </span>
                        </div>
                        <div class="package-details">
                            <h4 class="section-title text-center">Prime</h4>
                            <h2 class="package-price">
                                <span>Staring Price</span>
                                ₦ 10,000
                            </h2>
                            <ul>
                                <li>Inter City Delivery</li>
                                <li>Vehicle Vans Pick Up</li>
                                <li>Your Choice Vehicle </li>
                                <li>Places</li>
                                <li>Experience Drivers</li>
                                <li>Quality Vehicle</li>
                            </ul>
                            <a href="Wuber-Cus-app-v1.apk" class="button button-dark tiny">Get Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-package-item text-center">
                        <div class="package-icon">
                            <span class="icon-wrapper">
                                <img src="../assets/images/icon/package-icon.png" alt="icon">
                            </span>
                        </div>
                        <div class="package-details">
                            <h4 class="section-title text-center">Superior</h4>
                            <h2 class="package-price">
                                <span>Starting Price</span>
                                ₦ 30,000
                            </h2>
                            <ul>

                                <li>Outstation</li>
                                <li>Any Location Under 400 Km</li>
                                <li>Vehicle Vans Pick Up</li>
                                <li>Your Choice Vehicle </li>
                                <li>Places</li>
                                <li>Experience Drivers</li>
                                <li>Quality Vehicle</li>
                            </ul>
                            <a href="Wuber-Cus-app-v1.apk" class="button button-dark tiny">Get Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-0 col-md-6 offset-md-3">
                    <div class="single-package-item text-center">
                        <div class="package-icon">
                            <span class="icon-wrapper">
                                <img src="../assets/images/icon/package-icon.png" alt="icon">
                            </span>
                        </div>
                        <div class="package-details">
                            <h4 class="section-title text-center">Prime</h4>
                            <h2 class="package-price">
                                <span>Starting Price</span>
                                ₦ 800
                            </h2>
                            <ul>
                                <li>Inter City Delivery</li>
                                <li>Delivery Motor Bikes</li>
                                <li>Your Choice Vehicle </li>
                                <li>Places</li>
                                <li>Experience Riders</li>
                                <li>Quality Vehicle</li>
                            </ul>
                            <a href="Wuber-Cus-app-v1.apk" class="button button-dark tiny">Get Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
