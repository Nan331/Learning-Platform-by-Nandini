<?php
include 'includes/header.php';
include '../database/config.php';
include 'includes/check_user.php';
include 'includes/fetch_records.php';
?>

<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
    data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <?php include 'includes/header-2.php'; ?>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <?php include 'includes/sidebar.php'; ?>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb bg-white">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Dashboard</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <div class="d-md-flex">
                        <ol class="breadcrumb ms-auto">
                            <li><a href="#" class="fw-normal">Dashboard</a></li>
                        </ol>
                        <a href="#" target="_blank"
                            class="btn btn-danger  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Upgrade
                            to Pro</a>
                    </div>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Three charts -->
            <!-- ============================================================== -->
            <div class="row justify-content-center">


                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Departments</h5>
                                <div class="d-flex align-items-center mb-2 mt-4">
                                    <h2 class="mb-0 display-5">
                                        <i class="fas fa-users text-success"></i>
                                    </h2>
                                    <div class="ms-auto">
                                        <h2 class="mb-0 display-6">
                                            <span class="fw-normal"><?php echo number_format($departments); ?></span>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Quiz</h5>
                                <div class="d-flex align-items-center mb-2 mt-4">
                                    <h2 class="mb-0 display-5">
                                        <i class="fas fa-file-alt text-info"></i>
                                    </h2>
                                    <div class="ms-auto">
                                        <h2 class="mb-0 display-6">
                                            <span class="fw-normal"><?php echo number_format($examination); ?></span>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Students</h5>
                                <div class="d-flex align-items-center mb-2 mt-4">
                                    <h2 class="mb-0 display-5">
                                        <i class="fas fa-book text-primary"></i>
                                    </h2>
                                    <div class="ms-auto">
                                        <h2 class="mb-0 display-6">
                                            <span class="fw-normal"><?php echo number_format($students); ?></span>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Subjects</h5>
                                <div class="d-flex align-items-center mb-2 mt-4">
                                    <h2 class="mb-0 display-5">
                                        <i class="far fa-thumbs-up text-success"></i>
                                    </h2>
                                    <div class="ms-auto">
                                        <h2 class="mb-0 display-6">
                                            <span class="fw-normal"><?php echo number_format($subjects); ?></span>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Announcement</h5>
                                <div class="d-flex align-items-center mb-2 mt-4">
                                    <h2 class="mb-0 display-5">
                                        <i class="fas fa-bullhorn text-primary"></i>
                                    </h2>
                                    <div class="ms-auto">
                                        <h2 class="mb-0 display-6">
                                            <span class="fw-normal"><?php echo number_format($notice); ?></span>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Categories</h5>
                                <div class="d-flex align-items-center mb-2 mt-4">
                                    <h2 class="mb-0 display-5">
                                        <i class="fas fa-th-list text-info"></i>
                                    </h2>
                                    <div class="ms-auto">
                                        <h2 class="mb-0 display-6">
                                            <span class="fw-normal"><?php echo number_format($categories); ?></span>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Questions</h5>
                                <div class="d-flex align-items-center mb-2 mt-4">
                                    <h2 class="mb-0 display-5">
                                        <i class="fas fa-question-circle text-info"></i>
                                    </h2>
                                    <div class="ms-auto">
                                        <h2 class="mb-0 display-6">
                                            <span class="fw-normal"><?php echo number_format($questions); ?></span>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Deactivate Users</h5>
                                <div class="d-flex align-items-center mb-2 mt-4">
                                    <h2 class="mb-0 display-5">
                                        <i class="fas fa-user-times"></i>
                                    </h2>
                                    <div class="ms-auto">
                                        <h2 class="mb-0 display-6">
                                            <span
                                                class="fw-normal"><?php echo number_format($banned_students); ?></span>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- ============================================================== -->
            <!-- PRODUCTS YEARLY SALES -->
            <!-- ============================================================== -->


            <!-- ============================================================== -->
            <!-- RECENT SALES -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Recent Comments -->
            <!-- ============================================================== -->

        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <?php include 'includes/footer.php'; ?>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/app-style-switcher.js"></script>
<script src="plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
<!--Wave Effects -->
<script src="js/waves.js"></script>
<!--Menu sidebar -->
<script src="js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="js/custom.js"></script>
<!--This page JavaScript -->
<!--chartis chart-->
<script src="plugins/bower_components/chartist/dist/chartist.min.js"></script>
<script src="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
<script src="js/pages/dashboards/dashboard1.js"></script>
</body>

</html>