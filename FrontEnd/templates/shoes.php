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
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="../assets/images/12_Business-Banner.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../assets/images/coverpageproject.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../assets/images/cover%20page%20project.jpg" alt="Third slide">
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
                <!-- end row-->
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <h2>Shoes</h2>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="card-box product-box">
                            <div class="bg-light">
                                <img src="../assets/images/products/shoes/Black-Converse-Shoes-PNG-HD.png" alt="product-pic" class="img-fluid">
                            </div>

                            <div class="product-info">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="font-16 mt-0 sp-line-1"><a href="#" class="text-dark">Black-Converse-Shoes</a> </h5>
                                        <div class="text-warning mb-2 font-13">
                                            <img src="../assets/images/star.png" alt="product-pic" class="img-fluid">
                                            <img src="../assets/images/star.png" alt="product-pic" class="img-fluid">
                                            <img src="../assets/images/star.png" alt="product-pic" class="img-fluid">
                                            <img src="../assets/images/star.png" alt="product-pic" class="img-fluid">
                                            <img src="../assets/images/star.png" alt="product-pic" class="img-fluid">
                                        </div>
                                        <h5 class="m-0"> <span class="text-muted"> Stocks : 98 pcs</span></h5>
                                    </div>
                                    <div class="col-auto">
                                        <h4 class="text-danger text-uppercase">20 % Off</h4>
                                    </div>
                                </div> <!-- end row -->
                            </div> <!-- end product info-->
                        </div> <!-- end card-box-->
                    </div> <!-- end col-->

                    <div class="col-md-6 col-xl-3">
                        <div class="card-box product-box">
                            <div class="bg-light">
                                <img src="../assets/images/products/shoes/Converse-Shoes-PNG-Background-Image.png" alt="product-pic" class="img-fluid">
                            </div>
                            <div class="product-info">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="font-16 mt-0 sp-line-1"><a href="" class="text-dark">Biblio Converse-Shoes</a> </h5>
                                        <div class="text-warning mb-2 font-13">
                                            <img src="../assets/images/star.png" alt="product-pic" class="img-fluid">
                                            <img src="../assets/images/star.png" alt="product-pic" class="img-fluid">
                                            <img src="../assets/images/star.png" alt="product-pic" class="img-fluid">
                                            <img src="../assets/images/star.png" alt="product-pic" class="img-fluid">
                                            <img src="../assets/images/star.png" alt="product-pic" class="img-fluid">
                                        </div>
                                        <h5 class="m-0"> <span class="text-muted"> Stocks : 23 pcs</span></h5>
                                    </div>
                                    <div class="col-auto">
                                        <h4 class="text-danger text-uppercase">40 % Off</h4>
                                    </div>
                                </div> <!-- end row -->
                            </div> <!-- end product info-->
                        </div> <!-- end card-box-->
                    </div> <!-- end col-->

                    <div class="col-md-6 col-xl-3">
                        <div class="card-box product-box">
                            <div class="bg-light">
                                <img src="../assets/images/products/shoes/Converse-Shoes-PNG-Picture.png" alt="product-pic" class="img-fluid">
                            </div>

                            <div class="product-info">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="font-16 mt-0 sp-line-1"><a href="#" class="text-dark">Modern Converse-Shoes</a> </h5>
                                        <div class="text-warning mb-2 font-13">
                                            <img src="../assets/images/star.png" alt="product-pic" class="img-fluid">
                                            <img src="../assets/images/star.png" alt="product-pic" class="img-fluid">
                                            <img src="../assets/images/star.png" alt="product-pic" class="img-fluid">
                                            <img src="../assets/images/star.png" alt="product-pic" class="img-fluid">
                                            <img src="../assets/images/star.png" alt="product-pic" class="img-fluid">
                                        </div>
                                        <h5 class="m-0"> <span class="text-muted"> Stocks : 235 pcs</span></h5>
                                    </div>
                                    <div class="col-auto">
                                        <h4 class="text-danger text-uppercase">50 % Off</h4>
                                    </div>
                                </div> <!-- end row -->
                            </div> <!-- end product info-->
                        </div> <!-- end card-box-->
                    </div> <!-- end col-->

                    <div class="col-md-6 col-xl-3">
                        <div class="card-box product-box">
                            <div class="bg-light">
                                <img src="../assets/images/products/shoes/Converse-Shoes-PNG-Transparent.png" alt="product-pic" class="img-fluid">
                            </div>

                            <div class="product-info">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="font-16 mt-0 sp-line-1"><a href="#" class="text-dark">Designer Converse Awesome</a> </h5>
                                        <div class="text-warning mb-2 font-13">
                                            <img src="../assets/images/star.png" alt="product-pic" class="img-fluid">
                                            <img src="../assets/images/star.png" alt="product-pic" class="img-fluid">
                                            <img src="../assets/images/star.png" alt="product-pic" class="img-fluid">
                                            <img src="../assets/images/star.png" alt="product-pic" class="img-fluid">
                                            <img src="../assets/images/star.png" alt="product-pic" class="img-fluid">
                                        </div>
                                        <h5 class="m-0"> <span class="text-muted"> Stocks : 385 pcs</span></h5>
                                    </div>
                                    <div class="col-auto">
                                        <h4 class="text-danger text-uppercase">30 % Off</h4>
                                    </div>
                                </div> <!-- end row -->
                            </div> <!-- end product info-->
                        </div> <!-- end card-box-->
                    </div> <!-- end col-->
                </div>
                <!-- end row-->
                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="card-box product-box">
                            <div class="bg-light">
                                <img src="../assets/images/products/shoes/Vector-Shoes.png" alt="product-pic" class="img-fluid">
                            </div>

                            <div class="product-info">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="font-16 mt-0 sp-line-1"><a href="#" class="text-dark">Vector-Shoes</a> </h5>
                                        <div class="text-warning mb-2 font-13">
                                            <img src="../assets/images/star.png" alt="product-pic" class="img-fluid">
                                            <img src="../assets/images/star.png" alt="product-pic" class="img-fluid">
                                            <img src="../assets/images/star.png" alt="product-pic" class="img-fluid">
                                            <img src="../assets/images/star.png" alt="product-pic" class="img-fluid">
                                            <img src="../assets/images/star.png" alt="product-pic" class="img-fluid">
                                        </div>
                                        <h5 class="m-0"> <span class="text-muted"> Stocks : 25 pcs</span></h5>
                                    </div>
                                    <div class="col-auto">
                                        <h4 class="text-danger text-uppercase">25 % Off</h4>
                                    </div>
                                </div> <!-- end row -->
                            </div> <!-- end product info-->
                        </div> <!-- end card-box-->
                    </div> <!-- end col-->

                    <div class="col-md-6 col-xl-3">
                        <div class="card-box product-box">
                            <div class="bg-light">
                                <img src="../assets/images/products//shoes/Dance_Shoes.png" alt="product-pic" class="img-fluid">
                            </div>

                            <div class="product-info">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="font-16 mt-0 sp-line-1"><a href="#" class="text-dark">Dining Dance_Shoes</a> </h5>
                                        <div class="text-warning mb-2 font-13">
                                            <img src="../assets/images/star.png" alt="product-pic" class="img-fluid">
                                            <img src="../assets/images/star.png" alt="product-pic" class="img-fluid">
                                            <img src="../assets/images/star.png" alt="product-pic" class="img-fluid">
                                            <img src="../assets/images/star.png" alt="product-pic" class="img-fluid">
                                            <img src="../assets/images/star.png" alt="product-pic" class="img-fluid">
                                        </div>
                                        <h5 class="m-0"> <span class="text-muted"> Stocks : 39 pcs</span></h5>
                                    </div>
                                    <div class="col-auto">
                                        <h4 class="text-danger text-uppercase">35 % Off</h4>
                                    </div>
                                </div> <!-- end row -->
                            </div> <!-- end product info-->
                        </div> <!-- end card-box-->
                    </div> <!-- end col-->

                    <div class="col-md-6 col-xl-3">
                        <div class="card-box product-box">
                            <div class="bg-light">
                                <img src="../assets/images/products/shoes/Dance-Shoes-PNG-File.png" alt="product-pic" class="img-fluid">
                            </div>

                            <div class="product-info">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="font-16 mt-0 sp-line-1"><a href="#" class="text-dark">Plastic Dance-Shoes</a> </h5>
                                        <div class="text-warning mb-2 font-13">
                                            <img src="../assets/images/star.png" alt="product-pic" class="img-fluid">
                                            <img src="../assets/images/star.png" alt="product-pic" class="img-fluid">
                                            <img src="../assets/images/star.png" alt="product-pic" class="img-fluid">
                                            <img src="../assets/images/star.png" alt="product-pic" class="img-fluid">
                                            <img src="../assets/images/star.png" alt="product-pic" class="img-fluid">
                                        </div>
                                        <h5 class="m-0"> <span class="text-muted"> Stocks : 36 pcs</span></h5>
                                    </div>
                                    <div class="col-auto">
                                        <h4 class="text-danger text-uppercase">50 % Off</h4>
                                    </div>
                                </div> <!-- end row -->
                            </div> <!-- end product info-->
                        </div> <!-- end card-box-->
                    </div> <!-- end col-->

                    <div class="col-md-6 col-xl-3">
                        <div class="card-box product-box">
                            <div class="bg-light">
                                <img src="../assets/images/products/shoes/Dance-Shoes.png" alt="product-pic" class="img-fluid">
                            </div>

                            <div class="product-info">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="font-16 mt-0 sp-line-1"><a href="ecommerce-product-detail.html" class="text-dark">Wing Dance</a> </h5>
                                        <div class="text-warning mb-2 font-13">
                                            <img src="../assets/images/star.png" alt="product-pic" class="img-fluid">
                                            <img src="../assets/images/star.png" alt="product-pic" class="img-fluid">
                                            <img src="../assets/images/star.png" alt="product-pic" class="img-fluid">
                                            <img src="../assets/images/star.png" alt="product-pic" class="img-fluid">
                                            <img src="../assets/images/star.png" alt="product-pic" class="img-fluid">
                                        </div>
                                        <h5 class="m-0"> <span class="text-muted"> Stocks : 128 pcs</span></h5>
                                    </div>
                                    <div class="col-auto">
                                        <h4 class="text-danger text-uppercase">70 % Off</h4>
                                    </div>
                                </div> <!-- end row -->
                            </div> <!-- end product info-->
                        </div> <!-- end card-box-->
                    </div> <!-- end col-->
                </div>
                    <!-- end row-->

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
                    </div> <!-- end col-->
                </div>
                <!-- end row-->

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->
        </div>
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

