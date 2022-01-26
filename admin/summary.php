<?php
include '../database/config.php';
include 'includes/header.php';
include 'includes/check_user.php';
include 'includes/check_reply.php';
include 'includes/check_user.php';
if (isset($_GET['eid'])) {

    $exam_id = mysqli_real_escape_string($conn, $_GET['eid']);
    $sql = "SELECT * FROM tbl_examinations WHERE exam_id = '$exam_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
            $excate = $row['category'];
            $exsubject = $row['subject'];
            $exname = $row['exam_name'];
            $exdate = $row['date'];
            $exduration = $row['duration'];
            $expassmark = $row['passmark'];
            $exreex = $row['re_exam'];
            $exterms = $row['terms'];
        }
    } else {
        header("location:./");
    }

    $stdpass = 0;
    $stdfail = 0;

    $sql = "SELECT * FROM tbl_assessment_records WHERE exam_id = '$exam_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
            $status = $row['status'];
            if ($status == "PASS") {
                $stdpass++;
            } else {
                $stdfail++;
            }
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
                <h4 class="page-title">Results Summary - <?php echo "$exname"; ?></h4>
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
        <!-- Row -->
        <div class="row bg-white">
            <div class="col-md-12">
                <table class="table">
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Exam Name</td>
                            <td><?php echo "$exname"; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Subject</td>
                            <td><?php echo "$exsubject"; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Deadline</td>
                            <td><?php echo "$exdate"; ?></td>
                        </tr>

                        <tr>
                            <th scope="row">4</th>
                            <td>Duration</td>
                            <td><?php echo "$exduration"; ?> <b>min.</b></td>
                        </tr>


                        <tr>
                            <th scope="row">5</th>
                            <td>Passmark</td>
                            <td><?php echo "$expassmark"; ?>%</td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>
    </div>


</div>
<!-- Column -->
</div>
<!-- Row -->
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
<?php include 'footer.php'; ?>
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