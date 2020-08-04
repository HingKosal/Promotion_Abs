<?php
    include_once ('../config/connect.php');
    // $query = " select * from manage_promotion where published=1";
    // $result = $conn->query($query);
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
    <div class="container-fluid">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="../assets/images/12_Business-Banner.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../assets/images/coverpageproject.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../assets/images/cover page project.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div id="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-lg-8">
                                    <form class="form-inline">
                                        <div class="form-group">
                                            <label for="inputPassword2" class="sr-only">Search</label>
                                            <input type="search" class="form-control" id="inputPassword2" placeholder="Search...">
                                        </div>
                                        <div class="form-group mx-sm-3">
                                            <label for="status-select" class="mr-2">Sort By</label>
                                            <select class="custom-select" id="status-select">
                                                <option selected="">All</option>
                                                <option value="1">Recent added</option>
                                                <option value="2">Popular</option>
                                                <option value="3">Top promotion</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                            </div> <!-- end row -->
                        </div> <!-- end card-box -->
                    </div> <!-- end col-->
                </div>
            </div>
            <div class="container-fluid">
                <!-- end row-->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <h2>Clothes</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                        $query = " select * from manage_promotion where published=1 and category_id=1";
                        $result = $conn->query($query);
                        if(mysqli_num_rows($result) > 0){
                        while($row=mysqli_fetch_array($result)){
                            echo '<div class="col-md-6 col-xl-3">';
                            echo '<a href="view_promotion.php?view='.$row['promotion_id'].'">';
                                echo '<div class="card-box product-box">';
                                    echo '<div class="bg-light">';
                                        echo '<img src="../../Backend/images/'.$row['image'].'"'.'alt="product-pic" class="img-fluid">';
                                    echo '</div>';

                                    echo '<div class="product-info">';
                                        echo '<div class="row align-items-center">';
                                            echo '<div class="col">';
                                                echo '<h5 class="font-16 mt-0 sp-line-1"><a href="view_promotion.php?view='.$row['promotion_id'].'"'.' class="text-dark">'.$row['product_name'].'</a> </h5>';
                                                echo '<div class="text-warning mb-2 font-13">';
                                                    echo '<img src="../assets/images/star.png" alt="product-pic" class="img-fluid">';
                                                    echo '<img src="../assets/images/star.png" alt="product-pic" class="img-fluid">';
                                                    echo '<img src="../assets/images/star.png" alt="product-pic" class="img-fluid">';
                                                    echo '<img src="../assets/images/star.png" alt="product-pic" class="img-fluid">';
                                                    echo '<img src="../assets/images/star.png" alt="product-pic" class="img-fluid">';
                                                echo '</div>';
                                                echo '<h5 class="m-0"> <span class="text-muted"> Code :'.$row['promotion_id'].'</span></h5>';
                                            echo '</div>';
                                            echo '<div class="col-auto">';
                                                echo '<h4 class="text-danger text-uppercase">'.$row['discount'].' % Off</h4>';
                                            echo '</div>';
                                        echo '</div> <!-- end row -->';
                                    echo '</div> <!-- end product info-->';
                                echo '</div> <!-- end card-box-->';
                            echo '</a>';
                            echo '</div> <!-- end col-->';
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="container-fluid">
                <!-- end row-->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <h2>Shoes</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                        $query = " select * from manage_promotion where published=1 and category_id=2";
                        $result = $conn->query($query);
                        if(mysqli_num_rows($result) > 0){
                        while($row=mysqli_fetch_array($result)){
                            echo '<div class="col-md-6 col-xl-3">';
                            echo '<a href="view_promotion.php?view='.$row['promotion_id'].'">';
                                echo '<div class="card-box product-box">';
                                    echo '<div class="bg-light">';
                                        echo '<img src="../../Backend/images/'.$row['image'].'"'.'alt="product-pic" class="img-fluid">';
                                    echo '</div>';

                                    echo '<div class="product-info">';
                                        echo '<div class="row align-items-center">';
                                            echo '<div class="col">';
                                                echo '<h5 class="font-16 mt-0 sp-line-1"><a href="view_promotion.php?view='.$row['promotion_id'].'"'.' class="text-dark">'.$row['product_name'].'</a> </h5>';
                                                echo '<div class="text-warning mb-2 font-13">';
                                                    echo '<img src="../assets/images/star.png" alt="product-pic" class="img-fluid">';
                                                    echo '<img src="../assets/images/star.png" alt="product-pic" class="img-fluid">';
                                                    echo '<img src="../assets/images/star.png" alt="product-pic" class="img-fluid">';
                                                    echo '<img src="../assets/images/star.png" alt="product-pic" class="img-fluid">';
                                                    echo '<img src="../assets/images/star.png" alt="product-pic" class="img-fluid">';
                                                echo '</div>';
                                                echo '<h5 class="m-0"> <span class="text-muted"> Code :'.$row['promotion_id'].'</span></h5>';
                                            echo '</div>';
                                            echo '<div class="col-auto">';
                                                echo '<h4 class="text-danger text-uppercase">'.$row['discount'].' % Off</h4>';
                                            echo '</div>';
                                        echo '</div> <!-- end row -->';
                                    echo '</div> <!-- end product info-->';
                                echo '</div> <!-- end card-box-->';
                                echo '</a>';
                            echo '</div> <!-- end col-->';
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="container-fluid">
                <!-- end row-->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <h2>Accessories</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                        $query = " select * from manage_promotion where published=1 and category_id=3";
                        $result = $conn->query($query);
                        if(mysqli_num_rows($result) > 0){
                        while($row=mysqli_fetch_array($result)){
                            echo '<a href="view_promotion.php?view='.$row['promotion_id'].'">';
                            echo '<div class="col-md-6 col-xl-3">';
                                echo '<div class="card-box product-box">';
                                    echo '<div class="bg-light">';
                                        echo '<img src="../../Backend/images/'.$row['image'].'"'.'alt="product-pic" class="img-fluid">';
                                    echo '</div>';

                                    echo '<div class="product-info">';
                                        echo '<div class="row align-items-center">';
                                            echo '<div class="col">';
                                                echo '<h5 class="font-16 mt-0 sp-line-1"><a href="view_promotion.php?view='.$row['promotion_id'].'"'.' class="text-dark">'.$row['product_name'].'</a> </h5>';
                                                echo '<div class="text-warning mb-2 font-13">';
                                                    echo '<img src="../assets/images/star.png" alt="product-pic" class="img-fluid">';
                                                    echo '<img src="../assets/images/star.png" alt="product-pic" class="img-fluid">';
                                                    echo '<img src="../assets/images/star.png" alt="product-pic" class="img-fluid">';
                                                    echo '<img src="../assets/images/star.png" alt="product-pic" class="img-fluid">';
                                                    echo '<img src="../assets/images/star.png" alt="product-pic" class="img-fluid">';
                                                echo '</div>';
                                                echo '<h5 class="m-0"> <span class="text-muted"> Code :'.$row['promotion_id'].'</span></h5>';
                                            echo '</div>';
                                            echo '<div class="col-auto">';
                                                echo '<h4 class="text-danger text-uppercase">'.$row['discount'].' % Off</h4>';
                                            echo '</div>';
                                        echo '</div> <!-- end row -->';
                                    echo '</div> <!-- end product info-->';
                                echo '</div> <!-- end card-box-->';
                                echo '</a>';
                            echo '</div> <!-- end col-->';
                        }
                    }
                    ?>
                </div>
                <div class="row">
                    <div class="col-12">
                        <ul class="pagination pagination-rounded justify-content-end mb-3">
                            <li class="page-item">
                                <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                    <span aria-hidden="true">«</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="javascript: void(0);">1</a></li>
                            <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                            <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                            <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                            <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                            <li class="page-item">
                                <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                    <span aria-hidden="true">»</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

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