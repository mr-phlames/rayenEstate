<?php 
    session_start();
    require "php/add_listing.php";

    if(!isset($_SESSION['id'])) {
        header('location: index.php');
    }
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Rayen Agents: sell your land or apartment">
    <title>Rayen Agents</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css"
        media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="dashboard.php"><b style="color: white; font-size: 20px;"><i>Rayen</i></b></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li><a href="dashboard.php"><i class="ti-home"></i> Dashboard</a></li>
                            <li class="active"><a href="add_listing.php"><i class="ti-plus"></i> Add a listing</a></li>
                            <li><a href="my_listings.php"><i class="ti-layout-sidebar-left"></i> My Listings</a></li>
                            <li><a href="#"><i class="ti-user"></i> Contact User</a></li>
                            <li><a href="invoice.php"><i class="ti-book"></i> Invoices</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                            <form action="#">
                                <input type="text" name="search" placeholder="Search Your Listings..." required>
                                <i class="ti-search"></i>
                            </form>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li id="full-view"><i class="ti-fullscreen"></i></li>
                            <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                            <li class="dropdown">
                                <i class="ti-bell dropdown-toggle" data-toggle="dropdown">
                                    <span>2</span>
                                </i>
                                <div class="dropdown-menu bell-notify-box notify-box">
                                    <span class="notify-title">You have 2 new notifications <a href="#">view
                                            all</a></span>
                                    <div class="nofity-list">
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                                            <div class="notify-text">
                                                <p>New Comment On Post</p>
                                                <span>30 Seconds ago</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                                            <div class="notify-text">
                                                <p>New Comment On Post</p>
                                                <span>1 minute ago</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown">
                                <i class="fa fa-envelope-o dropdown-toggle" data-toggle="dropdown"><span>3</span></i>
                                <div class="dropdown-menu notify-box nt-enveloper-box">
                                    <span class="notify-title">You have 1 new message <a href="#">view all</a></span>
                                    <div class="nofity-list">
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="assets/images/author/author-img1.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Mike dd</p>
                                                <span class="msg">I want to check out the house today</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="settings-btn">
                                <i class="ti-settings"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Add a New Listing</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.php">Home</a></li>
                                <li><span>Add Listing</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">
                                <?php echo $_SESSION['username']; ?><i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Message</a>
                                <a class="dropdown-item" href="#">Settings</a>
                                <a class="dropdown-item" href="php/logout.php">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                    <div class="col-lg-6 col-ml-12">
                        <div class="row">
                            <!-- Textual inputs start -->
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="add_listing.php" method="POST" enctype="multipart/form-data">
                                            <h4 class="header-title">Property Info</h4>
                                            <p class="text-muted font-14 mb-4">Fill this form to create a new listing.
                                            </p>
                                            <label for="property_price" class="col-form-label">Property Price</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">GH¢</span>
                                                </div>
                                                <input type="number" placeholder="30000.00" name="price"
                                                    class="form-control" id="property_price"
                                                    aria-label="Amount (to the nearest cedi)">
                                            </div>
                                            <div class="form-group">
                                                <label for="property_name" class="col-form-label">Property Name</label>
                                                <input class="form-control" type="text" placeholder="3 bedroom house"
                                                    id="property_name" name="name">
                                            </div>
                                            <div class="form-group">
                                                <label for="contact_email" class="col-form-label">Display Email</label>
                                                <input class="form-control" type="email" name="display_email"
                                                    placeholder="name@example.com" id="contact_email">
                                            </div>
                                            <div class="form-group">
                                                <label for="contact_phone" class="col-form-label">Telephone</label>
                                                <input class="form-control" type="tel" placeholder="+23323456789"
                                                    id="contact_phone" name="telephone">
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label">Property Location</label>
                                                <select class="form-control" name="location">
                                                    <option value="Accra">Accra</option>
                                                    <option value="Oyibi">Oyibi</option>
                                                    <option value="Dodowa">Dodowa</option>
                                                    <option value="Lapaz">Lapaz</option>
                                                    <option value="Legon">Legon</option>
                                                    <option value="Abokobi">Abokobi</option>
                                                    <option value="Madina">Madina</option>
                                                    <option value="Afienya">Afienya</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label">Number of Bedrooms</label>
                                                <select class="custom-select" name="bedrooms">
                                                    <option selected="selected">Select Numver of rooms</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label">Number of Bathrooms</label>
                                                <select class="custom-select" name="bathrooms">
                                                    <option selected="selected">Select Numver of rooms</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <br>
                                            <div class="input-group mb-3">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="property_image" name="property_image">
                                                    <label class="custom-file-label" for="property_image">Property
                                                        Image</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="land_measure" class="col-form-label">Land
                                                    Measurement</label>
                                                <input class="form-control" type="text" placeholder="100x100"
                                                    id="land_measure" name="land_dimensions">
                                            </div>
                                            <div class="form-group">
                                                <label for="property_measure" class="col-form-label">Property
                                                    Measurement
                                                </label>
                                                <input class="form-control" type="text" placeholder="60x40"
                                                    id="property_measure" name="property_dimensions">
                                            </div>
                                            <b class="text-muted mb-3 d-block">Sell Status</b>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" checked id="for_sale" name="sell_status"
                                                    class="custom-control-input" value="sell">
                                                <label class="custom-control-label" for="for_sale">For Sale</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="for_rent" name="sell_status"
                                                    class="custom-control-input" value="rent">
                                                <label class="custom-control-label" for="for_rent">For Rent</label>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label for="property_desc" class="col-form-label">Property Description
                                                </label>
                                                <textarea class="form-control" id="property_desc"
                                                    name="description" placeholder="Cool House"></textarea>
                                            </div>
                                            <br>
                                            <button class="btn btn-primary" type="submit" name="add_listings_button">Submit Listing</button>
                                            <button class="btn btn-danger pull-right" type="reset">Cancel
                                                Listing</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- offset area end -->
            <!-- jquery latest version -->
            <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
            <!-- bootstrap 4 js -->
            <script src="assets/js/popper.min.js"></script>
            <script src="assets/js/bootstrap.min.js"></script>
            <script src="assets/js/owl.carousel.min.js"></script>
            <script src="assets/js/metisMenu.min.js"></script>
            <script src="assets/js/jquery.slimscroll.min.js"></script>
            <script src="assets/js/jquery.slicknav.min.js"></script>

            <!-- others plugins -->
            <script src="assets/js/plugins.js"></script>
            <script src="assets/js/scripts.js"></script>
</body>

</html>