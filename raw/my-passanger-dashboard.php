<?php require_once('layouts/header.php'); ?>

    <section class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="my-driver-dashboard.php">My dashboard</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding driver-dashboard-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="passanger-name">
                        <div class="media">
                            <img class="mr-3" src="assets/images/partner-img.png" alt="partner-img">
                            <div class="media-body">
                                <h2 class="mt-0">Johnson Smith</h2>
                                <p>ID 1234567890</p>
                                <a href="#">Edit Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 text-right">
                    <h2>Passanger</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-dashboard">
                        <ul class="nav nav-tabs tab-navigation" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#dashboard" aria-controls="dashboard" class="active" role="tab" data-toggle="tab">Dashboard</a>
                            </li>
                            <li role="presentation" class="active">
                                <a href="#info" aria-controls="info" role="tab" data-toggle="tab">Personal Information</a>
                            </li>
                            <li role="presentation">
                                <a href="#message" aria-controls="message" role="tab" data-toggle="tab">Message</a>
                            </li>
                            <li role="presentation">
                                <a href="#rides" aria-controls="rides" role="tab" data-toggle="tab">Rides</a>
                            </li>
                            <li role="presentation">
                                <a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a>
                            </li>
                        </ul>
                        
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="dashboard">
                                <div class="dashboard-info">
                                    <div class="ride-chart small-section">
                                        <h4>Ride From the day</h4>
                                        <div class="small-section-item">
                                            <div id="ride-chart-passanger"></div>
                                        </div>
                                    </div>
                                    <div class="overview-counter small-section">
                                        <h4>Overview</h4>
                                        <div class="counter-wrapper bg-gray small-section-item">
                                            <div class="single-counter-box">
                                                <h2 class="counter-number">18445</h2>
                                                <p class="counter-text">Total Rides</p>
                                            </div>
                                            <div class="single-counter-box">
                                                <h2 class="counter-number">21785</h2>
                                                <p class="counter-text">Total Passengers</p>
                                            </div>
                                            <div class="single-counter-box">
                                                <h2 class="counter-number">150</h2>
                                                <p class="counter-text">Drivers</p>
                                            </div>
                                            <div class="single-counter-box">
                                                <h2 class="counter-number">75</h2>
                                                <p class="counter-text">Today Rides</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="earning-details small-section">
                                        <h4>Total earnings of last month</h4>
                                        <div class="total-earning-table table-responsive small-section-item">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                    <th scope="col">Name of Cabs</th>
                                                    <th scope="col">Earnigns</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Drivers</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">BMW 5 <small>“4976ART RU”</small></th>
                                                        <td>$337.29</td>
                                                        <td>May 11, 2018</td>
                                                        <td>Johnson Smith</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Audi <small>“4876ORT AU”</small></th>
                                                        <td>$856.56</td>
                                                        <td>May 11, 2018</td>
                                                        <td>John Doe</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Alto XL <small>“4865ART KU”</small></th>
                                                        <td>$186.00</td>
                                                        <td>May 11, 2018</td>
                                                        <td>Rock William</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Swift Dezire <small>“9856BRU PO”</small></th>
                                                        <td>$847.25</td>
                                                        <td>May 11, 2018</td>
                                                        <td>Jassica</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">BMW 5 <small>“4976ART RU”</small></th>
                                                        <td>$1337.29</td>
                                                        <td>May 11, 2018</td>
                                                        <td>Elly Smith</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Tesia  <small>“68946KUY UK”</small></th>
                                                        <td>$869.29</td>
                                                        <td>May 11, 2018</td>
                                                        <td>Stone Gold</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Audi 8 <small>“4976ART RU”</small></th>
                                                        <td>$537.29</td>
                                                        <td>May 11, 2018</td>
                                                        <td>Rock</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Honda City XL <small>“8766ART TU”</small></th>
                                                        <td>$225.50</td>
                                                        <td>May 11, 2018</td>
                                                        <td>Johnson Doe</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Alto XL <small>“3589PMT MB”</small></th>
                                                        <td>$100.00</td>
                                                        <td>May 11, 2018</td>
                                                        <td>John William</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <a href="#" class="button button-dark tiny">View More</a>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="info">
                                <div class="personal-info small-section">
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
                            <div role="tabpanel" class="tab-pane" id="message">
                                <div class="message-box small-section">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h4>Messages</h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-4">
                                            <div class="event-msg-left">
                                                <ul class="list-group">
                                                    <li class="list-group-item msg-single ">
                                                        <div class="sidebar-heading">
                                                            <h4>Messages</h4>
                                                        </div>
                                                        <div class="event-sideber-search">
                                                            <form action="#" method="post" class="search-form">
                                                                <input type="text" class="form-control" placeholder="Search Location">
                                                                <i class="fa fa-search"></i>
                                                            </form>
                                                        </div>
                        
                                                    </li>
                                                    <li class="list-group-item msg-single">
                                                        <div class="media">
                                                            <img class="mr-3 img-fluid" src="assets/images/messenger/1.png" alt="placeholder image">
                                                            <div class="media-body">
                                                                <h5 class="mt-0">John</h5>
                                                                <p class="mb-0">Cras sed sodales enim...</p>
                                                                <p>
                                                                    <small>4 Hour ago</small>
                                                                </p>
                                                            </div>
                                                            <div class="dropdown custom-dropdown">
                                                                <div data-toggle="dropdown">
                                                                    <i class="fa fa-ellipsis-v msg-btn"></i>
                                                                </div>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#">Option 1</a>
                                                                    <a class="dropdown-item" href="#">Option 2</a>
                                                                    <a class="dropdown-item" href="#">Option 3</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item msg-single">
                                                        <div class="media">
                                                            <img class="mr-3 img-fluid" src="assets/images/messenger/1.png" alt="placeholder image">
                                                            <div class="media-body">
                                                                <h5 class="mt-0">Rock</h5>
                                                                <p class="mb-0">Cras sed sodales enim...</p>
                                                                <p>
                                                                    <small>4 Hour ago</small>
                                                                </p>
                                                            </div>
                                                            <div class="dropdown custom-dropdown">
                                                                <div data-toggle="dropdown">
                                                                    <i class="fa fa-ellipsis-v msg-btn"></i>
                                                                </div>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#">Option 1</a>
                                                                    <a class="dropdown-item" href="#">Option 2</a>
                                                                    <a class="dropdown-item" href="#">Option 3</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item msg-single">
                                                        <div class="media">
                                                            <img class="mr-3 img-fluid" src="assets/images/messenger/1.png" alt="placeholder image">
                                                            <div class="media-body">
                                                                <h5 class="mt-0">Johnson</h5>
                                                                <p class="mb-0">Cras sed sodales enim...</p>
                                                                <p>
                                                                    <small>4 Hour ago</small>
                                                                </p>
                                                            </div>
                                                            <div class="dropdown custom-dropdown">
                                                                <div data-toggle="dropdown">
                                                                    <i class="fa fa-ellipsis-v msg-btn"></i>
                                                                </div>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#">Option 1</a>
                                                                    <a class="dropdown-item" href="#">Option 2</a>
                                                                    <a class="dropdown-item" href="#">Option 3</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item msg-single">
                                                        <div class="media">
                                                            <img class="mr-3 img-fluid" src="assets/images/messenger/1.png" alt="placeholder image">
                                                            <div class="media-body">
                                                                <h5 class="mt-0">Smith</h5>
                                                                <p class="mb-0">Cras sed sodales enim...</p>
                                                                <p>
                                                                    <small>4 Hour ago</small>
                                                                </p>
                                                            </div>
                                                            <div class="dropdown custom-dropdown">
                                                                <div data-toggle="dropdown">
                                                                    <i class="fa fa-ellipsis-v msg-btn"></i>
                                                                </div>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#">Option 1</a>
                                                                    <a class="dropdown-item" href="#">Option 2</a>
                                                                    <a class="dropdown-item" href="#">Option 3</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item msg-single">
                                                        <div class="media">
                                                            <img class="mr-3 img-fluid" src="assets/images/messenger/1.png" alt="placeholder image">
                                                            <div class="media-body">
                                                                <h5 class="mt-0">Akash</h5>
                                                                <p class="mb-0">Cras sed sodales enim...</p>
                                                                <p>
                                                                    <small>4 Hour ago</small>
                                                                </p>
                                                            </div>
                                                            <div class="dropdown custom-dropdown">
                                                                <div data-toggle="dropdown">
                                                                    <i class="fa fa-ellipsis-v msg-btn"></i>
                                                                </div>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#">Option 1</a>
                                                                    <a class="dropdown-item" href="#">Option 2</a>
                                                                    <a class="dropdown-item" href="#">Option 3</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item msg-single">
                                                        <div class="media">
                                                            <img class="mr-3 img-fluid" src="assets/images/messenger/1.png" alt="placeholder image">
                                                            <div class="media-body">
                                                                <h5 class="mt-0">Akash</h5>
                                                                <p class="mb-0">Cras sed sodales enim...</p>
                                                                <p>
                                                                    <small>4 Hour ago</small>
                                                                </p>
                                                            </div>
                                                            <div class="dropdown custom-dropdown">
                                                                <div data-toggle="dropdown">
                                                                    <i class="fa fa-ellipsis-v msg-btn"></i>
                                                                </div>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#">Option 1</a>
                                                                    <a class="dropdown-item" href="#">Option 2</a>
                                                                    <a class="dropdown-item" href="#">Option 3</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                        
                                            </div>
                                        </div>
                        
                                        <div class="col-xl-8">
                                            <div class="event-chat-ryt"> 
                        
                                                <ul class="list-group">
                                                    <li class="list-group-item">
                                                        <div class="media">
                                                            <div class="media-img">
                                                                <img class="mr-3 img-fluid" src="assets/images/messenger/1.png" alt="placeholder image">
                                                            </div>                                
                                                            <div class="media-body">
                                                                <h3 class="mb-0">John</h3>
                                                                <p>Online</p>
                                                            </div>
                                                            <div class="phone-icon">
                                                                <a href="#"><i class="fas fa-phone"></i></a>
                                                            </div>
                                                            <div class="dropdown custom-dropdown">
                                                                <div data-toggle="dropdown">
                                                                    <i class="fa fa-ellipsis-v msg-btn"></i>
                                                                </div>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a class="dropdown-item" href="#">Option 1</a>
                                                                    <a class="dropdown-item" href="#">Option 2</a>
                                                                    <a class="dropdown-item" href="#">Option 3</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="char-area">
                                                            <div class="chat-reciver">
                                                                <div class="media">
                                                                    <div class="media-body">
                                                                        <p>Lorem ipsum dolor sit amet.</p>
                                                                    </div>
                                                                    <img class="ml-3" src="assets/images/messenger/1.png" alt="user">
                                                                </div>
                                                            </div>
                                                            <div class="chat-sender">
                                                                <div class="media">
                                                                    <img class="ml-3" src="assets/images/messenger/1.png" alt="user">
                                                                    <div class="media-body">
                                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, saepe.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="chat-reciver">
                                                                <div class="media">
                                                                    <div class="media-body">
                                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, aperiam.</p>
                                                                    </div>
                                                                    <img class="ml-3" src="assets/images/messenger/1.png" alt="user">
                                                                </div>
                                                            </div>
                                                            <div class="chat-sender">
                                                                <div class="media">
                                                                    <img class="ml-3" src="assets/images/messenger/1.png" alt="user">
                                                                    <div class="media-body">
                                                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium, sequi aliquid saepe hic alias optio?</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="chat-reciver">
                                                                <div class="media">
                                                                    <div class="media-body">
                                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, aperiam.</p>
                                                                    </div>
                                                                    <img class="ml-3" src="assets/images/messenger/1.png" alt="user">
                                                                </div>
                                                            </div>
                                                            <div class="chat-sender">
                                                                <div class="media">
                                                                    <img class="ml-3" src="assets/images/messenger/1.png" alt="user">
                                                                    <div class="media-body">
                                                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium, sequi aliquid saepe hic alias optio?</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="chat-reciver">
                                                                <div class="media">
                                                                    <div class="media-body">
                                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, aperiam.</p>
                                                                    </div>
                                                                    <img class="ml-3" src="assets/images/messenger/1.png" alt="user">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="char-type">
                                                            <form class="d-flex justify-content-center" action="#" method="post">
                                                                <input type="text" class="form-control" placeholder="Type Here...">
                                                                <button class="button button-dark">SEND</button>
                                                            </form>
                                                        </div>
                        
                                                    </li>
                        
                                                </ul>
                        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="rides">
                                <div class="rides-details small-section">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h4>Rides</h4>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="rides-filter">
                                                <ul>
                                                    <li>
                                                        <a href="#">Yesterday</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Last Week</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Last Month</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Last 6 Month</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Last Year</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="total-earning-table small-section table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                        <th scope="col">Name of Cabs</th>
                                                        <th scope="col">Earnigns</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Passengers</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">BMW 5 <small>“4976ART RU”</small></th>
                                                            <td>$337.29</td>
                                                            <td>May 11, 2018</td>
                                                            <td>Johnson Smith</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Audi <small>“4876ORT AU”</small></th>
                                                            <td>$856.56</td>
                                                            <td>May 11, 2018</td>
                                                            <td>John Doe</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Alto XL <small>“4865ART KU”</small></th>
                                                            <td>$186.00</td>
                                                            <td>May 11, 2018</td>
                                                            <td>Rock William</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Swift Dezire <small>“9856BRU PO”</small></th>
                                                            <td>$847.25</td>
                                                            <td>May 11, 2018</td>
                                                            <td>Jassica</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">BMW 5 <small>“4976ART RU”</small></th>
                                                            <td>$1337.29</td>
                                                            <td>May 11, 2018</td>
                                                            <td>Elly Smith</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Tesia  <small>“68946KUY UK”</small></th>
                                                            <td>$869.29</td>
                                                            <td>May 11, 2018</td>
                                                            <td>Stone Gold</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Audi 8 <small>“4976ART RU”</small></th>
                                                            <td>$537.29</td>
                                                            <td>May 11, 2018</td>
                                                            <td>Rock</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Honda City XL <small>“8766ART TU”</small></th>
                                                            <td>$225.50</td>
                                                            <td>May 11, 2018</td>
                                                            <td>Johnson Doe</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Alto XL <small>“3589PMT MB”</small></th>
                                                            <td>$100.00</td>
                                                            <td>May 11, 2018</td>
                                                            <td>John William</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="text-center">
                                                <a href="#" class="button button-dark">View More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="settings">
                                <div class="personal-info">
                                    <h4>Personal Information</h4>
                                    <div class="personal-details small-section">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">First Name</label>
                                                    <input type="text" class="form-control text-muted" value="John">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Last Name</label>
                                                    <input type="text" class="form-control text-muted" value="Doe">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Your Email</label>
                                                    <input type="text" class="form-control text-muted" value="johndoe@gmail.com">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Your Website</label>
                                                    <input type="text" class="form-control text-muted" value="www.johndoe.com">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Your Birthday</label>
                                                    <input type="text" class="form-control text-muted" value="01 June 1984">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Your Phone Number</label>
                                                    <input type="text" class="form-control text-muted" value="+91 - 123 456 7890">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Your Gender</label>
                                                    <input type="text" class="form-control text-muted" value="Male">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Status</label>
                                                    <input type="text" class="form-control text-muted" value="Married">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="">Write a little description about you</label>
                                                    <textarea class="form-control text-muted">Vestibulum suscipit faucibus dolor, vitae mollis justo consequat vel. Vestibulum in nisi ut neque tristique accumsan vel eu eros. Quisque pellentesque urna et hendrerit lacinia. Mauris vitae tellus neque. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec in placerat tortor, sit amet dictum sem. Donec et orci condimentum eros pulvinar maximus. Suspendisse accumsan imperdiet mauris vitae tincidunt. Donec imperdiet purus eget diam tristique vestibulum. Vestibulum posuere placerat lacus commodo sollicitudin. Nullam eget justo fermentum, rhoncus leo eget, viverra augue. Fusce odio odio, egestas id turpis at, faucibus consectetur nulla. Sed vel volutpat ligula, quis vulputate odio. Sed condimentum, neque nec aliquam sodales, dolor erat euismod erat, porta venenatis odio leo non dolor. Donec ut lacus non quam convallis sodales.</textarea>
                                                </div>
                                                <a href="#" class="button button-dark tiny">Save</a>
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

    <script src="assets/plugins/MorrisChart/morris.min.js"></script>
    <script src="assets/plugins/MorrisChart/raphael-min.js"></script>
    <script>
        
        // Ride chart
        Morris.Area({
            element: 'ride-chart-passanger',
            data: [{
                time: '2001',
                days: 0
            }, {
                time: '2002',
                days: 90
            }, {
                time: '2003',
                days: 40
            }, {
                time: '2004',
                days: 30
            }, {
                time: '2005',
                days: 150
            }, {
                time: '2006',
                days: 25
            }, {
                time: '2007',
                days: 10
            }],
            lineColors: ['#F7BC00'],
            xkey: 'time',
            ykeys: ['days'], 
            pointSize: 0,
            lineWidth: 0,
            resize: true,
            fillOpacity: 0.8,
            behaveLikeLine: true,
            gridLineColor: 'transparent',
            hideHover: 'auto'

        });
    </script>


</body>

</html>