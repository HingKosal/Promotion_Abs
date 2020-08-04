
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8" />
    <title>Dashboard | UBold - Responsive Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="https://coderthemes.com/ubold/layouts/assets/images/favicon.ico">

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
    <style>
        .text-muted{
            font-weight: bold;
        }
    </style>

</head>

<body class="loading" data-layout-mode="horizontal" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

<!-- Begin page -->
<!-- Topbar Start -->
<?php include('../layouts/header.html') ?>
<!-- end Topbar -->
<br><b<br><br><b<br><br><b<br><br><b<br>
<div id="wrapper">

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Product Detail</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <!-- view promotion product by id -->
        <div class="card-box">
            <div class="row">
                    <?php require_once 'crud_promotion.php' ?>
                        <div class="col-lg-5">
                            <!-- Product image -->
                            <div class="tab-content pt-0">
                                <div class="tab-pane active show" id="product-1-item">
                                    <img src="../../Backend/images/<?php echo $image_name1?>" alt="" class="img-fluid mx-auto d-block rounded">
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-7">
                            <div class="pl-xl-3 mt-3 mt-xl-0">
                                <h4>Product Code: <?php echo $id;?></h4>
                                <h2 class="mb-3 text-primary"><?php echo $name;?> (Brand <?php echo $bname;?>)</h2>
                                <p class="text-muted float-left mr-3">
                                    <img src="../assets/images/star.png" alt="product-pic" class="img-fluid">
                                    <img src="../assets/images/star.png" alt="product-pic" class="img-fluid">
                                    <img src="../assets/images/star.png" alt="product-pic" class="img-fluid">
                                    <img src="../assets/images/star.png" alt="product-pic" class="img-fluid">
                                    <img src="../assets/images/star.png" alt="product-pic" class="img-fluid">
                                </p>
                                <p class="mb-4"><a href="#" class="text-muted">(Rate Reviews )</a></p>
                                <h2 class="text-danger text-uppercase"><?php echo $discount;?> % Off</h2>
                                <h4 class="mb-4">Price : <span class="text-muted mr-2"><del>$<?php echo $price;?> USD</del></span> <b>$<?php echo ($price-(($price*$discount)/100));?> USD</b></h4>
                                <h4><span class="badge bg-soft-success text-success mb-4">Instock</span></h4>
                                <p class="text-muted mb-4"><?php echo $desc;?></p>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div>
                                            <p class="text-muted"> Size: <?php echo $sizename;?></p>
                                            <p class="text-muted"> Company: <?php echo $companyname;?></p>
                                            <p class="text-muted">Location: <?php echo $location;?></p>
                                            <p class="text-muted">Contact: (+855) <?php echo $phone;?></p>
                                            </div>
                                    </div>
                                </div>
                                <div>
                                </div>
                            </div>
                        </div>
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->

</div>
<!-- END wrapper -->
<br><b<br><br><b<br><br><b<br><br><b<br><br><b<br><br>
<!-- Footer -->
<?php include('../layouts/footer.html') ?>
<!-- end footer -->



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
