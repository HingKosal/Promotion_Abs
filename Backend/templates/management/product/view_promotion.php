<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>View Promotion</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
          rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
          rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/vendors.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/app.css">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/colors/palette-gradient.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END Custom CSS-->
</head>
<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar"
      data-open="click" data-menu="vertical-menu" data-col="2-columns">
<!-- fixed-top-->
<!--header start-->
<?php include('../../../layouts/header.html') ?>
<!--header end-->
<!-- ////////////////////////////////////////////////////////////////////////////-->
<!--sidebars start-->
<?php include('../../../layouts/sidebars.html') ?>
<!--sidebars end-->
<!--content start-->
<div class="content-body" style="margin-left: 280px">
    <!-- Base style table -->
    <section id="base-style">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 >View Promotion</h2>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                            </ul>
                        </div>
                    </div>
                </div>
                <div style="margin-left: 15px;">
                    <a href="manage_promotion.php" type="button" class="btn btn-primary"> Back </a>
                </div>
                <!-- view promotion product by id -->
                <div class="card-box">
                    <div class="row">
                        <div class="col-lg-5">
                            <!-- Product image -->
                            <div class="tab-content pt-0">
                                <div class="tab-pane active show" id="product-1-item">
                                    <img src="../../../../FrontEnd/assets/images/products/clothes/product-1.png" alt="" class="img-fluid mx-auto d-block rounded">
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-7">
                            <div class="pl-xl-3 mt-3 mt-xl-0">
                                <?php require_once 'crud_promotion.php' ?>
                                <h4>Product Code: <?php echo $id;?></h4>
                                <h2 class="mb-3 text-primary"><?php echo $name;?> (Brand <?php echo $bname;?>)</h2>
                                <p class="text-muted float-left mr-3">
                                    <img src="../../../../FrontEnd/assets/images/star.png" alt="product-pic" class="img-fluid">
                                    <img src="../../../../FrontEnd/assets/images/star.png" alt="product-pic" class="img-fluid">
                                    <img src="../../../../FrontEnd/assets/images/star.png" alt="product-pic" class="img-fluid">
                                    <img src="../../../../FrontEnd/assets/images/star.png" alt="product-pic" class="img-fluid">
                                    <img src="../../../../FrontEnd/assets/images/star.png" alt="product-pic" class="img-fluid">
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
                                            <p class="text-muted">Contact: <?php echo $phone;?></p>
                                            </div>
                                    </div>
                                </div>
                                <div>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div>
        <!-- end row-->
    </section>
    <!--/ Base style table -->
</div>

<!--content end-->
<!-- ////////////////////////////////////////////////////////////////////////////-->
<!--footer start-->
<?php include('../../../layouts/footer.html') ?>
<!--footer end-->
<!-- BEGIN VENDOR JS-->
<script src="../../../app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<!-- END PAGE VENDOR JS-->
<!-- BEGIN MODERN JS-->
<script src="../../../app-assets/js/core/app-menu.js" type="text/javascript"></script>
<script src="../../../app-assets/js/core/app.js" type="text/javascript"></script>
<script src="../../../app-assets/js/scripts/customizer.js" type="text/javascript"></script>
<!-- END MODERN JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="../../../app-assets/js/scripts/extensions/block-ui.js" type="text/javascript"></script>
<!-- END PAGE LEVEL JS-->
</body>
</html>
