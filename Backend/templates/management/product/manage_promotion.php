<?php
include_once('../../../config/connect.php');
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
    <title>manage promotion</title>
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
                        <h2 >Products List</h2>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body card-dashboard">
                            <div style="margin-left: 15px;">
                                <a href="createpromotion.php" type="button" class="btn btn-primary"> Add New </a>
                            </div>
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6"><div id="DataTables_Table_0_filter" class="dataTables_filter">
                                            <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                    <?php
                                    $sql = "SELECT * FROM categories c,manage_promotion m where c.category_id = m.category_id";
                                    if($result = mysqli_query($conn, $sql)){
                                        if(mysqli_num_rows($result) > 0){
                                            echo"<table class='table table-striped table-bordered base-style dataTable' id='DataTables_Table_0' role='grid' aria-describedby='DataTables_Table_0_info'>";
                                            echo "<thead>";
                                            echo "<tr role='row'>";
                                            echo"<th class='sorting' tabindex='0' aria-controls='DataTables_Table_0' rowspan='1' colspan='1' aria-label='Salary: activate to sort column ascending' style='width: 15%;'>Promotion ID</th>";
                                            echo"<th class='sorting' tabindex='0' aria-controls='DataTables_Table_0' rowspan='1' colspan='1' aria-label='Salary: activate to sort column ascending' style='width: 20%;'>Product name</th>";
                                            echo"<th class='sorting' tabindex='0' aria-controls='DataTables_Table_0' rowspan='1' colspan='1' aria-label='Salary: activate to sort column ascending' style='width: 15%;'>Price</th>";
                                            echo"<th class='sorting' tabindex='0' aria-controls='DataTables_Table_0' rowspan='1' colspan='1' aria-label='Salary: activate to sort column ascending' style='width: 15%;'>Discount</th>";
                                            echo"<th class='sorting' tabindex='0' aria-controls='DataTables_Table_0' rowspan='1' colspan='1' aria-label='Salary: activate to sort column ascending' style='width: 15%;'>Category</th>";
                                            echo"<th class='sorting' tabindex='0' aria-controls='DataTables_Table_0' rowspan='1' colspan='1' aria-label='Salary: activate to sort column ascending' style='width: 15%;'>Action</th>";
                                            echo "</thead>";
                                            echo"<tbody>";
                                            while($row=mysqli_fetch_array($result)){
                                                echo"<tr>";
                                                echo "<td>" . $row['promotion_id'] . "</td>";
                                                echo "<td>" . $row['product_name'] . "</td>";
                                                echo "<td>" . $row['price'] . "</td>";
                                                echo "<td>" . $row['discount'] . "</td>";
                                                echo "<td>" . $row['title'] . "</td>";
                                               
                                                echo"<td>";
                                                echo"<a href = 'edit_promotion.php?edit=". $row['promotion_id'] ."' class='btn btn-sm btn-info'><i class='la la-pencil'></i></a>";
                                                echo"<a href = 'crud_promotion.php?delete=". $row['promotion_id'] ."' class='btn btn-sm btn-danger'><i class='la la-trash-o'></i></a>";
                                                echo"<a href = 'view_promotion.php?view=". $row['promotion_id'] ."' class='btn btn-sm btn-light'><i class='la la-eye'></i></a></td>";
                                             echo"</td>";
                                         echo"</tr>";
                                         }
                                         echo"<tbody>";
                                       
                                     echo"</table>";
                                      // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                    }
 
                    // Close connection
                    mysqli_close($conn);
                    ?>
                    </div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
