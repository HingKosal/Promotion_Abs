<?php
    include_once('../config/connect.php');

    // create data
    if (isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $msg = $_POST['message'];

        if (empty($name) || empty($email)|| empty($msg)){
            $error = "Field is required !";
        }elseif(!empty($name) && !empty($email)&& !empty($msg)){
            $query = "INSERT INTO messages (full_name,email,message) VALUES ('$name','$email','$msg')";
            if (mysqli_query($conn,$query)){
                header("location: contact.php");
            } else{
                echo 'query error: ' .mysqli_error($conn);
            }
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8" />
    <title>Promotion Ads</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--    <script src="https://use.fontawesome.com/50d6220505.js"></script>-->
    <!-- App favicon -->
    <link rel="shortcut icon" href="https://coderthemes.com/ubold/layouts/assets/images/favicon.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/4d485b645e.css">
    <!-- Plugins css -->
    <link href="../assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/libs/selectize/css/selectize.bootstrap3.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="../assets/css/bootstrap-creative.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
    <link href="../assets/css/app-creative.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

    <link href="../assets/css/bootstrap-creative-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
    <link href="../assets/css/app-creative-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />
    <link href="../assets/css/contact.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

<!--    font awesome-->
<!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- icons -->
    <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />

</head>

<body class="loading" data-layout-mode="horizontal" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

<!-- Begin page -->
<div id="wrapper">

    <!-- Topbar Start -->
    <?php include('../layouts/header.html') ?>
    <!-- end Topbar -->
    <br><br><br><br>
    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->
    <div class="container">
        <div class="content">
            <div class="main">
                <h2 class="text-success">Contact Us</h2>
                <p>Feel free to contact us at any time and we will reply as soon as posible.</p>
                <p>We are welcome to serve you!</p>
            </div>
            <hr>
            <div class="contact">
                <h4 class="text-info"><i class='far fa-envelope' > Business Email</i></h4>
                <button class="btn-primary">promotionads2020@gmail.com/kh</button>
                <br>
                <h4 class="text-info"><i class='fas fa-phone'> Business Number</i></h4>
                <button class="btn-danger">(855+) 88 789 987</button>
                <br>
                <h4 class="text-info"><i class='far fa-user-circle'> Business Social Media</i></h4>
                <div class="social-icon">
                    <img src="https://img.icons8.com/fluent/48/000000/facebook-new.png"/>
                    <img src="https://img.icons8.com/fluent/48/000000/twitter.png"/>
                    <img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/>
                </div>
            </div>
            <div class="message">
                <h2 class="text-success">Leave Us A Message</h2>
                <form method="post" action="contact.php">
                    <div class="form-group">
                        <label class="text-info" for="name">Full Name:</label>
                        <input type="text" class="form-control" name="name" value="" placeholder="enter your full name.....">
                        <?php if (isset($error)){ ?>
                            <label style="color: red; margin-left: 300px;"><?php echo $error?> </label>
                        <?php } ?>

                    </div>
                    <div class="form-group">
                        <label class="text-info" for="email">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="enter your email.....">
                            <?php if (isset($error)){ ?>
                                <label style="color: red; margin-left: 300px;"><?php echo $error?> </label>
                            <?php } ?>

                    </div>
                    <div class="form-group">
                        <label class="text-info" for="message">Message</label>
                        <textarea class="text-info" name="message" class="form-control" placeholder="tell us your interest/any issue....." cols="30" rows="4"></textarea>
                        <?php if (isset($error)){ ?>
                            <label style="color: red; margin-left: 300px;"><?php echo $error?> </label>
                        <?php } ?>

                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->
    <br><b<br><br><b<br><br><b<br><br>
    <!-- Footer Start -->
    <?php include('../layouts/footer.html') ?>
    <!-- end Footer -->

</div>
<!-- END wrapper -->


<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- Vendor js -->
<script src="../assets/js/vendor.min.js"></script>

<!-- Plugins js-->
<script src="../assets/libs/flatpickr/flatpickr.min.js"></script>
<script src="../assets/libs/apexcharts/apexcharts.min.js"></script>

<script src="../assets/libs/selectize/js/standalone/selectize.min.js"></script>

<!-- Dashboar 1 init js-->
<script src="../assets/js/pages/dashboard-1.init.js"></script>

<!-- App js-->
<script src="../assets/js/app.min.js"></script>

</body>

<!-- Mirrored from coderthemes.com/ubold/layouts/creative/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jun 2020 05:13:31 GMT -->
</html>
