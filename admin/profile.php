<?php
include 'includes/header.php';
include '../database/config.php';
include 'includes/check_user.php';
include 'includes/check_reply.php';

if (isset($_GET['sid'])) {
    $student_id = mysqli_real_escape_string($conn, $_GET['sid']);
    $sql = "SELECT * FROM tbl_users WHERE user_id = '$student_id'";
    $result = $conn->query($sql) or die("failed");

    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {
            $sdfname = $row['first_name'];
            $sdlname = $row['last_name'];
            $sdgender = $row['gender'];
            $sddob = $row['dob'];
            $sdaddress = $row['address'];
            $sdemail = $row['email'];
            $sdphone = $row['phone'];
            $sddepartment = $row['department'];
            $sdcategory = $row['category'];
            $sdavatar = $row['avatar'];
            $sdstat = $row['acc_stat'];
        }
    }
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
<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
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
                    <h4 class="page-title">View Profile - <?php echo "$sdfname"; ?> <?php echo "$sdlname"; ?></h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <div class="d-md-flex">
                        <ol class="breadcrumb ms-auto">
                            <li><a href="#" class="fw-normal">Dashboard</a></li>
                        </ol>
                        <a href="https://www.wrappixel.com/templates/ampleadmin/" target="_blank" class="btn btn-danger  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Upgrade
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
            <div class="card">
                <div class="card-body">
                    <center class="mt-4">
                        <?php
                        if ($myavatar == NULL) {
                            print '  <img class="rounded-circle" width="150" src="../assets/images/' . $mygender . '.png" alt="' . $myfname . '">';
                        } else {
                            echo '<img class="rounded-circle" src="data:image/jpeg;base64,' . base64_encode($myavatar) . '" width="150" alt="' . $myfname . '"/>';
                        }

                        ?>
                        <!-- <img src="../../assets/images/users/5.jpg" class="rounded-circle" width="150"> -->
                        <h4 class="card-title mt-2"><?php echo "$myfname"; ?> <?php echo "$mylname"; ?></h4>
                        <h6 class="card-subtitle">Adminstratior </h6>
                        <div class="row text-center justify-content-md-center">
                            <div class="col-4">
                                <a href="javascript:void(0)" class="link"><i class="icon-people"></i>
                                    <font class="font-weight-medium">Role :<?php echo "$myrole"; ?></font>
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="javascript:void(0)" class="link"><i class="icon-picture"></i>
                                    <font class="font-weight-medium">DOB :<?php echo "$mydob"; ?></font>
                                </a>
                            </div>
                        </div>
                    </center>
                </div>
                <div>
                    <hr>
                </div>
                <div class="card-body">
                    <small class="text-muted">Email address </small>
                    <h6><?php echo "$myemail"; ?></h6>
                    <small class="text-muted pt-4 db">Phone</small>
                    <h6><?php echo "$myphone"; ?></h6>
                    <small class="text-muted pt-4 db">Address</small>
                    <h6><?php echo "$myaddress"; ?></h6>
                    <div class="panel panel-white">
                        
                    </div>
                    <div class="map-box">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58667.97110080624!2d77.3249245245206!3d23.215845588865324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397c428f8fd68fbd%3A0x2155716d572d4f8!2sBhopal%2C%20Madhya%20Pradesh!5e0!3m2!1sen!2sin!4v1639498937703!5m2!1sen!2sin" width="100%" height="150" frameborder="0" style="border: 0" allowfullscreen=""></iframe>
                    </div>
                    <small class="text-muted pt-4 db">Social Profile</small>
                    <br>
                    <button class="btn btn-circle btn-secondary">
                        <i class="fab fa-facebook-f"></i>
                    </button>
                    <button class="btn btn-circle btn-secondary">
                        <i class="fab fa-twitter"></i>
                    </button>
                    <button class="btn btn-circle btn-secondary">
                        <i class="fab fa-youtube"></i>
                    </button>
                </div>
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