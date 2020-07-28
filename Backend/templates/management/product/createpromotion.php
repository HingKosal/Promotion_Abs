<?php include_once('crud_promotion.php') ?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>Create Company</title>
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
<section id="horizontal-form-layouts" style="margin-left: 290px">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Add New Promotion</h2>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                </div>
                <div class="card-content collpase show">
                    <div class="card-body">
                        <form class="form form-horizontal" action="createpromotion.php" novalidate method="POST">
                            <div class="form-body">
                            <div class="form-group row">
                                    <label class="col-md-3 label-control" for="projectinput1">Promotion ID: </label>
                                    <div class="col-md-5">
                                        <input type="text" id="projectinput1" class="form-control" placeholder="Promotion id" name="promotion_id">
                                        <?php if (isset($error)){ ?>
                                            <p style="color: red"><?php echo $error?> </p>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="projectinput1">Product Name: </label>
                                    <div class="col-md-5">
                                        <input type="text" id="projectinput1" class="form-control" placeholder="Product Name" name="product_name">
                                        <?php if (isset($error)){ ?>
                                            <p style="color: red"><?php echo $error?> </p>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="form-group row" >
                                    <label class="col-md-3 label-control" for="projectinput1">Category: </label>
                                        <select class="custom-select col-md-2" id="" style="margin-left:15px;" name="category_id">
                                            <?php
                                                include_once('../../../config/connect.php');
                                                $query = "select * from categories";
                                                $result = mysqli_query($conn, $query);
                                                while($row = mysqli_fetch_array($result)){
                                            ?>
                                            <option value="<?=$row["category_id"];?>"><?=$row["title"];?></option>
                                            <?php } 
                                            ?>
                                        </select>
                                </div>
                                <div class="form-group row" >
                                    <label class="col-md-3 label-control" for="projectinput1">Brand: </label>
                                        <select class="custom-select col-md-2" id="" style="margin-left:15px;" name="brand_id">
                                            <?php
                                                include_once('../../../config/connect.php');
                                                $query = "select * from brands";
                                                $result = mysqli_query($conn, $query);
                                                while($row = mysqli_fetch_array($result)){
                                            ?>
                                            <option value="<?=$row["brand_id"];?>"><?=$row["brand_name"];?></option>
                                            <?php } 
                                            ?>
                                        </select>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="projectinput1">Price: </label>
                                    <div class="col-md-5">
                                        <input type="text" id="projectinput1" class="form-control" placeholder="Price" name="price">
                                        <?php if (isset($error)){ ?>
                                            <p style="color: red"><?php echo $error?> </p>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="projectinput1">Discount: </label>
                                    <div class="col-md-5">
                                        <input type="text" id="projectinput1" class="form-control" placeholder="Discount" name="discount">
                                        <?php if (isset($error)){ ?>
                                            <p style="color: red"><?php echo $error?> </p>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="projectinput1">Description: </label>
                                    <div class="col-md-5">
                                        <textarea name="description" id="projectinput1" cols="70" rows="4" name="description"></textarea>  
                                    </div>
                                </div>
                                <div class="form-group row" >
                                    <label class="col-md-3 label-control" for="projectinput1">Size: </label>
                                        <select class="custom-select col-md-2" id="" style="margin-left:15px;" name="size_id">
                                            <?php
                                                include_once('../../../config/connect.php');
                                                $query = "select * from size";
                                                $result = mysqli_query($conn, $query);
                                                while($row = mysqli_fetch_array($result)){
                                            ?>
                                            <option value="<?=$row["size_id"];?>"><?=$row["name"];?></option>
                                            <?php } 
                                            ?>
                                        </select>
                                </div>
                                <div class="form-group row" >
                                    <label class="col-md-3 label-control" for="projectinput1">Company Name: </label>
                                        <select class="custom-select col-md-2" id="" style="margin-left:15px;" name="user_id">
                                            <?php
                                                include_once('../../../config/connect.php');
                                                $query = "select * from companies";
                                                $result = mysqli_query($conn, $query);
                                                while($row = mysqli_fetch_array($result)){
                                            ?>
                                            <option value="<?=$row["user_id"];?>"><?=$row["company_name"];?></option>
                                            <?php } 
                                            ?>
                                        </select>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="projectinput1">Location: </label>
                                    <div class="col-md-5">
                                        <input type="text" id="projectinput1" class="form-control" placeholder="Location" name="location">
                                        <?php if (isset($error)){ ?>
                                            <p style="color: red"><?php echo $error?> </p>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="projectinput1">Phone: </label>
                                    <div class="col-md-5">
                                        <input type="text" id="projectinput1" class="form-control" placeholder="Phone" name="phone">
                                        <?php if (isset($error)){ ?>
                                            <p style="color: red"><?php echo $error?> </p>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="button" class="btn btn-warning mr-1">
                                    <a href="manage_promotion.php"><i class="ft-x"></i> Cancel</a>
                                </button>
                                <button type="submit" name="create_promotion" class="btn btn-primary">
                                    <i class="la la-check-square-o"></i> Create
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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