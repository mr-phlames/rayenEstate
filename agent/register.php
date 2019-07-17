<?php 
    session_start();
    require('php/register.php');
    if (isset($_SESSION['id'])) {
        header('location: dashboard.php');
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
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
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
    <!-- login area start -->
    <div class="login-area">
        <div class="container">
            <div class="login-box ptb--100" style="margin-top: -80px !important;">
                <form action="register.php" method="POST">
                    <div class="login-form-head">
                        <h4>Sign up</h4>
                        <p>Welcome to Rayen Merchant</p>
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <label for="fname">User Name</label>
                            <input type="text" id="fname" name="username" value="<?php echo ($errors['username'] || $errors['email'] || $errors['location'] || $errors['password']) ? $username : ''; ?>">
                            <i class="ti-user"></i>
                        </div>
                        <?php echo $errors['username'] != "" ? $errors['username']." <br><br>" : ""; ?>
                        <div class="form-gp">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" id="exampleInputEmail1" name="email" value="<?php echo ($errors['username'] || $errors['email'] || $errors['location'] || $errors['password']) ? $email : ''; ?>">
                            <i class="ti-email"></i>
                        </div>
                        <?php echo $errors['email'] != "" ? $errors['email']." <br><br>" : ""; ?>
                        <div class="form-gp">
                            <label for="location">Location</label>
                            <input type="text" id="location" name="location" value="<?php echo ($errors['username'] || $errors['email'] || $errors['password']) ? $location : ''; ?>">
                            <i class="ti-map"></i>
                        </div>
                        <?php echo $errors['location'] != "" ? $errors['location']." <br><br>" : ""; ?>
                        
                        <div class="form-gp">
                            <label for="password1">Password</label>
                            <input type="password" id="password1" name="password" value="<?php echo ($errors['username'] || $errors['email'] || $errors['location'] || $errors['password']) ? $password : ''; ?>">
                            <i class="ti-lock"></i>
                        </div>
                        <?php echo $errors['password'] != "" ? $errors['password']." <br><br>" : ""; ?>
                        <div class="form-gp">
                            <label for="password2">Confirm Password</label>
                            <input type="password" id="password2" name="confirm_password" value="<?php echo ($errors['username'] || $errors['email'] || $errors['location'] || $errors['password']) ? $confirm_password : ''; ?>">
                            <i class="ti-lock"></i>
                        </div>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit" name="register_btn">Submit <i class="ti-arrow-right"></i></button>
                        </div>
                        <div class="form-footer text-center mt-5">
                            <p class="text-muted">Don't have an account? <a href="login.php">Sign in</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login area end -->

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