<?php
include 'includes/header.php';
include '../database/config.php';
include 'includes/check_user.php';
include 'includes/check_reply.php';

if (isset($_GET['eid'])) {

    $exam_id = $_GET['eid'];
    $sql = "SELECT * FROM tbl_assessment_records WHERE exam_id = '$exam_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
            $exam_name = $row['exam_name'];
        }
    } else {
    }
    $conn->close();
} else {

    header("location:./");
}
?>
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
        <?php   include 'includes/header-2.php'; ?>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->

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
<div class="page-wrapper" style="min-height: 250px;">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title"><?php echo "$exam_name" ?></h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                        <li><a href="#" class="fw-normal">Dashboard</a></li>
                    </ol>
                    <a href="https://www.wrappixel.com/templates/ampleadmin/" target="_blank"
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
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <div class="table-responsive">
                        <?php
                            include '../database/config.php';
                            $sql = "SELECT * FROM tbl_assessment_records WHERE exam_id = '$exam_id'";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                print '
										<table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                <th>Student Name</th>
												<th>Student ID</th>
												<th>Exam Name</th>
                                                <th>Score</th>
                                                <th>Status</th>
												<th>Date</th>
												<th>Re-Exam</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                      
                                        <tbody>';

                                while ($row = $result->fetch_assoc()) {
                                    print '
										       <tr>
                                                <td>' . $row['student_name'] . '</td>
												<td>' . $row['student_id'] . '</td>
                                                <td>' . $row['exam_name'] . '</td>
                                                <td><b>' . $row['score'] . '%</b></td>
												<td>' . $row['status'] . '</td>
												<td>' . $row['date'] . '</td>
												<td>' . $row['next_retake'] . '</td>
                                                <td class="text-center"><a href="pages/re-activate.php?rid=' . $row['record_id'] . '&eid=' . $exam_id . '"><span class="badge rounded-pill bg-info">re-activate</span></a></td>
												
          
                                            </tr>';
                                                                                                                                                    }

                                                                                                                                                    print '
									   </tbody>
                                       </table>  ';
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

    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
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
<!--Wave Effects -->
<script src="js/waves.js"></script>
<!--Menu sidebar -->
<script src="js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="js/custom.js"></script>
</body>

</html>