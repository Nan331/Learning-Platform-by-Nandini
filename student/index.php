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

            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Students</h5>
                            <div class="d-flex align-items-center mb-2 mt-4">
                                <h2 class="mb-0 display-5">
                                <i class="fas fa-users text-success"></i>
                                </h2>
                                <div class="ms-auto">
                                    <h2 class="mb-0 display-6">
                                        <span class="fw-normal"><?php echo number_format($students_in_my_class); ?></span>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Active Quiz</h5>
                            <div class="d-flex align-items-center mb-2 mt-4">
                                <h2 class="mb-0 display-5">
                                <i class="fas fa-file-alt text-info"></i>
                                </h2>
                                <div class="ms-auto">
                                    <h2 class="mb-0 display-6">
                                        <span class="fw-normal"><?php echo number_format($active_examinations); ?></span>
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
                                <i class="fas fa-book text-primary"></i>
                                </h2>
                                <div class="ms-auto">
                                    <h2 class="mb-0 display-6">
                                        <span class="fw-normal"><?php echo number_format($my_subjects); ?></span>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Achivements</h5>
                            <div class="d-flex align-items-center mb-2 mt-4">
                                <h2 class="mb-0 display-5">
                                <i class="far fa-thumbs-up text-success"></i>
                                </h2>
                                <div class="ms-auto">
                                    <h2 class="mb-0 display-6">
                                        <span class="fw-normal"><?php echo number_format($passed_exam); ?></span>
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
                            <h5 class="card-title">Notice</h5>
                            <div class="d-flex align-items-center mb-2 mt-4">
                                <h2 class="mb-0 display-5">
                                <i class="fas fa-th-list text-info"></i>
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
                            <h5 class="card-title">Failed Quiz</h5>
                            <div class="d-flex align-items-center mb-2 mt-4">
                                <h2 class="mb-0 display-5">
                                <i class="fas fa-thumbs-down text-danger"></i>
                                </h2>
                                <div class="ms-auto">
                                    <h2 class="mb-0 display-6">
                                        <span class="fw-normal"><?php echo number_format($failed_exam); ?></span>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Locked Quiz</h5>
                            <div class="d-flex align-items-center mb-2 mt-4">
                                <h2 class="mb-0 display-5">
                                <i class="fas fa-lock text-warning"></i>
                                </h2>
                                <div class="ms-auto">
                                    <h2 class="mb-0 display-6">
                                        <span class="fw-normal"><?php echo number_format($locked_exams); ?></span>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Attended Quiz</h5>
                            <div class="d-flex align-items-center mb-2 mt-4">
                                <h2 class="mb-0 display-5">
                                <i class="far fa-check-circle text-success"></i>
                                </h2>
                                <div class="ms-auto">
                                    <h2 class="mb-0 display-6">
                                        <span class="fw-normal"><?php echo number_format($attended_exams); ?></span>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <!-- ============================================================== -->
            <!-- PRODUCTS YEARLY SALES -->
            <!-- ============================================================== -->
            <div class="white-box">
                <div class="col-lg-12 col-md-12">
                    <div class="panel panel-white">
                        <div class="panel-heading">
                            <h5 class="panel-title">Notice</h5>
                            <br>
                        </div>
                        <div class="panel-body">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                                <?php
							include '../database/config.php';
							$sql = "SELECT * FROM tbl_notice ORDER by id DESC";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                           $tabno = 1;
                            while($row = $result->fetch_assoc()) {
                            print '
							<div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading'.$tabno.'">
                            <h5 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse'.$tabno.'" aria-expanded="false" aria-controls="collapse'.$tabno.'">
                            '.$row['title'].'
                            </a>
                            </h5>
                            </div>
                            <div id="collapse'.$tabno.'" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading'.$tabno.'">
                            <div class="panel-body">
                            '.$row['description'].'
							<hr><i class="fa fa-calendar"></i> '.$row['post_date'].' | <i class="fa fa-refresh"></i> '.$row['last_update'].'
                            </div>
                            </div>
                            </div>';
					       $tabno++;
                             }
                            } else {
                        print '
						<div class="alert alert-info" role="alert">
                          Nothing was found in database.
                        </div>';
                             }
                             $conn->close();
							
							?>

                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <div class="card w-100">
                <div class="card-body">
                    <h5 class="card-title">Feeds</h5>
                    <ul class="feeds ps-0 mt-3">


                        <div class="feed-item mb-2 py-2 pe-4 pr-3">
                            <div class="
                          border-start border-2 border-danger
                          d-md-flex
                          align-items-center
                        ">
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0)" class="
                              ms-3
                              btn btn-light-danger
                              text-danger
                              btn-circle
                              fs-5
                              d-flex
                              align-items-center
                              justify-content-center
                              flex-shrink-0
                            "><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-users feather-sm">
                                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="9" cy="7" r="4"></circle>
                                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                        </svg></a>
                                    <div class="ms-3 text-truncate">
                                        <span class="fw-normal fs-4">New user registered.</span>
                                    </div>
                                </div>
                                <div class="
                            justify-content-end
                            text-truncate
                            ms-5 ms-md-auto
                            ps-4 ps-md-0
                          ">
                                    <span class="fs-2 text-muted">30 May</span>
                                </div>
                            </div>
                        </div>

                        <div class="feed-item mb-2 py-2 pe-4 pr-3">
                            <div class="
                          border-start border-2 border-info
                          d-md-flex
                          align-items-center
                        ">
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0)" class="
                              ms-3
                              btn btn-light-info
                              text-info
                              btn-circle
                              fs-5
                              d-flex
                              align-items-center
                              justify-content-center
                              flex-shrink-0
                            "><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-bell feather-sm">
                                            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                            <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                        </svg></a>
                                    <div class="ms-3 text-truncate">
                                        <span class="fw-normal fs-4">You have 4 pending tasks.</span>
                                    </div>
                                </div>
                                <div class="
                            justify-content-end
                            text-truncate
                            ms-5 ms-md-auto
                            ps-4 ps-md-0
                          ">
                                    <span class="fs-2 text-muted">Just Now</span>
                                </div>
                            </div>
                        </div>



                    </ul>
                </div>
            </div>
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