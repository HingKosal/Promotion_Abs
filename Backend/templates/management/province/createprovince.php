<?php include_once('crud_province.php') ?>

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>Create Province</title>
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
<?php include('../layouts/header.html') ?>
<!--header end-->
<!-- ////////////////////////////////////////////////////////////////////////////-->
<!--sidebars start-->
<?php include('../layouts/sidebars.html') ?>
<!--sidebars end-->
<!--content start-->
<section id="horizontal-form-layouts" style="margin-left: 290px">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Add New Province</h2>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                </div>
                <div class="card-content collpase show">
                    <div class="card-body">
                        <form class="form form-horizontal" action="createprovince.php" novalidate method="post">
                            <div class="form-body">
<!--                                <h4 class="form-section"><i class="ft-user"></i> Personal Info</h4>-->
                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="projectinput1">Province ID: </label>
                                    <div class="col-md-5">
                                        <input type="text" id="projectinput1" class="form-control" placeholder="province" name="province_id">
                                        <?php if (isset($error)){ ?>
                                            <p style="color: red"><?php echo $error?> </p>
                                        <?php } ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="projectinput1">Title: </label>
                                    <div class="col-md-5">
                                        <input type="text" id="projectinput1" class="form-control" placeholder="province title" name="title">
                                        <?php if (isset($error)){ ?>
                                            <p style="color: red"><?php echo $error?> </p>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="button" class="btn btn-warning mr-1">
                                    <a href="provinces.php"><i class="ft-x"></i> Cancel</a>
                                </button>
                                <button type="submit" name="create"  class="btn btn-primary">
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
<?php include('../layouts/footer.html') ?>
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
