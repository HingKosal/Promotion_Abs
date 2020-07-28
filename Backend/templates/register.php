<?php
    include_once('../config/connect.php');

    if (isset($_POST['submit'])){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $display_name = $_POST['display_name'];
        $email = $_POST['email'];
        $password = sha1($_POST['password']);
        $checkbox = $_POST['checkbox'];

        if (empty($first_name)){
            $fname_error = "please insert first name";
        }elseif(empty($last_name)){
            $lname_error = "please insert last name";
        }elseif (empty($display_name)){
            $Username_error = "please insert username";
        }elseif(empty($email)){
            $email_error = "please insert email";
        }elseif(empty($password)){
            $password_error = "please insert password";
        }elseif(empty($checkbox)){
            $checkbox_error = "please agree in check me";
        }elseif(!empty($first_name) && !empty($last_name) &&!empty($display_name) &&!empty($email) && !empty($password)&& !empty($checkbox)){
            $query = "INSERT INTO manage_user (first_name,last_name,username,email,password) VALUES ('$first_name','$last_name','$display_name','$email','$password')";
            if (mysqli_query($conn,$query)){
                session_name('mysession');// change default PHPSESSID
                session_start();
                $_SESSION['username'] = $_POST['display_name'];
                $_SESSION['registered'] = time();
                header("location: management/home/home.php");
                exit();
                header("location: home.php");
            } else{
                echo 'query error: ' .mysqli_error($conn);
            }
        }


    }


?>


<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title> promotion ads </title>
    <link rel="apple-touch-icon" href="../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
          rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
          rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/forms/icheck/icheck.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/forms/icheck/custom.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css/app.css">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/pages/login-register.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <!-- END Custom CSS-->
</head>
<body class="vertical-layout vertical-menu 1-column  bg-cyan bg-lighten-2 menu-expanded fixed-navbar"
      data-open="click" data-menu="vertical-menu" data-col="1-column">
<!-- fixed-top-->
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-dark navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                <li class="nav-item">
                    <a class="navbar-brand" href="../../FrontEnd/templates/index.php">
<!--                        <img class="brand-logo" alt="modern admin logo" src="../app-assets/images/logo/logo.png">-->
                        <h3 class="brand-text">Home</h3>
                    </a>
                </li>
                <li class="nav-item d-md-none">
                    <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
                </li>
            </ul>
        </div>
<!--        <div class="navbar-container">-->
<!--            <div class="collapse navbar-collapse justify-content-end" id="navbar-mobile">-->
<!--                <ul class="nav navbar-nav">-->
<!--                    <li class="nav-item"><a class="nav-link mr-2 nav-link-label" href="../../FrontEnd/templates/index.php"><i class="ficon ft-arrow-left"></i></a></li>-->
<!--                    <li class="dropdown nav-item">-->
<!--                        <a class="nav-link mr-2 nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-settings"></i></a>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </div>-->
    </div>
</nav>
<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-md-4 col-10 box-shadow-2 p-0">
                        <div class="card border-grey border-lighten-3 m-0">
                            <div class="card-header border-0 pb-0">
                                <div class="card-title text-center">
                                    <img src="../app-assets/images/logo/logo.png" alt="branding logo" height="50">
                                </div>
                                <h6 class="card-subtitle line-on-side text-muted text-center font-large-1 pt-2">
                                    <span>Please Sign Up</span>
                                </h6>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form class="form-horizontal" action="register.php" novalidate method="post">
                                        <div class="row">
                                            <div class="col-12 col-sm-6 col-md-6">
                                                <fieldset class="form-group position-relative has-icon-left">
                                                    <input type="text" name="first_name" id="first_name" class="form-control input-lg"
                                                           placeholder="First Name" tabindex="1"> <br>
                                                    <?php if (isset($fname_error)){ ?>
                                                        <p style="color: red"><?php echo $fname_error?> </p>
                                                    <?php } ?>
                                                    <div class="form-control-position">
                                                        <i class="ft-user"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-6">
                                                <fieldset class="form-group position-relative has-icon-left">
                                                    <input type="text" name="last_name" id="last_name" class="form-control input-lg"
                                                           placeholder="Last Name" tabindex="2"> <br>
                                                    <?php if (isset($lname_error)){ ?>
                                                        <p style="color: red"><?php echo $lname_error?> </p>
                                                    <?php } ?>
                                                    <div class="form-control-position">
                                                        <i class="ft-user"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="text" name="display_name" id="display_name" class="form-control input-lg"
                                                   placeholder="Username" tabindex="3" required data-validation-required-message="Please enter display name."> <br>
                                            <?php if (isset($Username_error)){ ?>
                                                <p style="color: red"><?php echo $Username_error?> </p>
                                            <?php } ?>
                                            <div class="form-control-position">
                                                <i class="ft-user"></i>
                                            </div>
                                            <div class="help-block font-small-3"></div>
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address"
                                                   tabindex="4" required data-validation-required-message="Please enter email address."> <br>
                                            <?php if (isset($email_error)){ ?>
                                                <p style="color: red"><?php echo $email_error?> </p>
                                            <?php } ?>
                                            <div class="form-control-position">
                                                <i class="ft-mail"></i>
                                            </div>
                                            <div class="help-block font-small-3"></div>
                                        </fieldset>
                                        <div class="row">
                                            <div class="col-12 col-sm-6 col-md-12">
                                                <fieldset class="form-group position-relative has-icon-left">
                                                    <input type="password" name="password" id="password" class="form-control input-lg"
                                                           placeholder="Password" tabindex="5" required> <br>
                                                    <?php if (isset($password_error)){ ?>
                                                        <p style="color: red"><?php echo $password_error?> </p>
                                                    <?php } ?>
                                                    <div class="form-control-position">
                                                        <i class="la la-key"></i>
                                                    </div>
                                                    <div class="help-block font-small-3"></div>
                                                </fieldset>
                                            </div>
<!--                                            <div class="col-12 col-sm-6 col-md-6">-->
<!--                                                <fieldset class="form-group position-relative has-icon-left">-->
<!--                                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg"-->
<!--                                                           placeholder="Confirm Password" tabindex="6" data-validation-matches-match="password"-->
<!--                                                           data-validation-matches-message="Password & Confirm Password must be the same.">-->
<!--                                                    <div class="form-control-position">-->
<!--                                                        <i class="la la-key"></i>-->
<!--                                                    </div>-->
<!--                                                    <div class="help-block font-small-3"></div>-->
<!--                                                </fieldset>-->
<!--                                            </div>-->
                                        </div>
                                        <div class="row mb-1">
                                            <div class="col-4 col-sm-3 col-md-3">
                                                <fieldset>
                                                    <input type="checkbox" id="remember-me" name="checkbox" class="chk-remember">
                                                    <label for="remember-me"> I Agree</label>
                                                </fieldset>
                                            </div>
                                            <div class="col-8 col-sm-9 col-md-9">
                                                <p class="font-small-3">By clicking Register, you agree to the <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a> set out by this site, including our Cookie Use.</p>
                                                <br>
                                                <?php if (isset($checkbox_error)){ ?>
                                                    <p style="color: red"><?php echo $checkbox_error?> </p>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-sm-6 col-md-6">
                                                <button <a href="" type="submit" name="submit" class="btn btn-info btn-lg btn-block"><i class="ft-user"></i> Register </a></button>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-6">
                                                <a href="index.php" class="btn btn-danger btn-lg btn-block"><i class="ft-unlock"></i> Login</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->
<footer class="footer fixed-bottom footer-dark navbar-border navbar-shadow">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
      <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2020 <a class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent"
                                                                                     target="_blank">Promotion Ads </a>, All rights reserved. </span>
        <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Version 1.3.1 Alpha </span>
    </p>
</footer>
<!-- BEGIN VENDOR JS-->
<script src="../app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<!--<script src="../app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"-->
<!--        type="text/javascript"></script>-->
<script src="../app-assets/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN MODERN JS-->
<script src="../app-assets/js/core/app-menu.js" type="text/javascript"></script>
<script src="../app-assets/js/core/app.js" type="text/javascript"></script>
<script src="../app-assets/js/scripts/customizer.js" type="text/javascript"></script>
<!-- END MODERN JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="../app-assets/js/scripts/forms/form-login-register.js" type="text/javascript"></script>
<!-- END PAGE LEVEL JS-->
</body>
</html>
