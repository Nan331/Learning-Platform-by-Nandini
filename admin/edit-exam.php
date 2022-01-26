<?php
include 'includes/header.php';
include '../database/config.php';
include 'includes/check_user.php';
include 'includes/check_reply.php';
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
    $conn->close();
} else {
    header("location:./");
}
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
                    <h4 class="page-title">Edit Exam - <?php echo "$exname"; ?></h4>
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
            <div class="row">
                <!-- Column -->
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-8 col-xlg-9 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="pages/update_exam.php" method="POST" class="form-horizontal form-material">
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0" for="exampleInputEmail1">Exam Name</label>
                                    <input type="text" class="form-control" value="<?php echo "$exname"; ?>"
                                        placeholder="Enter exam name" name="exam" required autocomplete="off">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="exampleInputEmail1">Exam Duration (Minutes)</label>
                                    <input type="number" class="form-control" value="<?php echo "$exduration"; ?>"
                                        placeholder="Enter exam duration" name="duration" required autocomplete="off">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="exampleInputEmail1">Passmark (%)</label>
                                    <input type="number" class="form-control" value="<?php echo "$expassmark"; ?>"
                                        placeholder="Enter passmark" name="passmark" required autocomplete="off">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="exampleInputEmail1">RE exam (if you take exam then show it again after
                                        some days)</label>
                                    <input type="number" class="form-control" value="<?php echo "$exreex"; ?>"
                                        placeholder="Enter days to attempt" name="attempts" required autocomplete="off">
                                </div>
                                <div class="form-group mb-4">
                                    <label>Deadline</label>
                                    <input type="text" class="form-control date-picker" value="<?php echo "$exdate"; ?>"
                                        name="date" required autocomplete="off" placeholder="Select deadline">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="exampleInputEmail1">Select Subject</label>
                                    <select class="form-control" name="subject" required>
                                        <option value="" selected disabled>-Select subject</option>
                                        <?php
                                        include '../database/config.php';
                                        $sql = "SELECT * FROM tbl_subjects WHERE status = 'Active' ORDER BY name";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {

                                            while ($row = $result->fetch_assoc()) {
                                                if ($exsubject == $row['name']) {
                                                    print '<option selected value="' . $row['name'] . '">' . $row['name'] . '</option>';
                                                } else {
                                                    print '<option value="' . $row['name'] . '">' . $row['name'] . '</option>';
                                                }
                                            }
                                        } else {
                                        }
                                        $conn->close();
                                        ?>

                                    </select>
                                </div>

                                <div class="form-group mb-4">
                                    <label for="exampleInputEmail1">Select Category</label>
                                    <select class="form-control" name="category" required>
                                        <option value="" selected disabled>-Select category-</option>
                                        <?php
                                        include '../database/config.php';
                                        $sql = "SELECT * FROM tbl_categories WHERE status = 'Active' ORDER BY name";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {

                                            while ($row = $result->fetch_assoc()) {
                                                if ($excate == $row['name']) {
                                                    print '<option selected value="' . $row['name'] . '">' . $row['name'] . '</option>';
                                                } else {
                                                    print '<option value="' . $row['name'] . '">' . $row['name'] . '</option>';
                                                }
                                            }
                                        } else {
                                        }
                                        $conn->close();
                                        ?>

                                    </select>
                                </div>


                                <div class="form-group mb-4">
                                    <label for="exampleInputEmail1">Terms and conditions</label>
                                    <textarea style="resize: none;" rows="6" class="form-control"
                                        placeholder="Enter Terms and conditions" name="instructions" required
                                        autocomplete="off"><?php echo "$exterms"; ?></textarea>
                                </div>
                                <input type="hidden" name="examid" value="<?php echo "$exam_id"; ?>">


                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
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