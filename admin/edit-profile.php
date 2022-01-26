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
                    <h4 class="page-title">Edit Student - <?php echo "$myfname"; ?> <?php echo "$mylname"; ?></h4>
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
            <div class="row">
                <!-- Column -->
                <div class="col-lg-4 col-xlg-3 col-md-12">
                    <div class="white-box">
                        <div class="user-bg"> <img width="100%" alt="user" src="plugins/images/large/img1.jpg">
                            <div class="overlay-box">
                                <div class="user-content">
                                    <a href="javascript:void(0)"><?php
                                                                    if ($myavatar == NULL) {
                                                                        print ' <img class="thumb-lg img-circle" src="../assets/images/' . $sdgender . '.png" alt="' . $myfname . '">';
                                                                    } else {
                                                                        echo '<img src="data:image/jpeg;base64,' . base64_encode($myavatar) . '" class="thumb-lg img-circle"  alt="' . $myfname . '"/>';
                                                                    }

                                                                    ?> </a>
                                    <h4 class="text-white mt-2"><?php echo "$myfname"; ?> <?php echo "$mylname"; ?></h4>
                                    <h5 class="text-white mt-2"><?php echo "$myemail"; ?></h5>
                                </div>
                            </div>
                        </div>
                        <div class="user-btm-box mt-5 d-md-flex">
                            <div class="text-center">
                                <h1><?php echo "$myphone"; ?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="white-box">
                        <h3>Update display picture</h3>
                        <form action="pages/new_dp.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Select image to upload</label>
                                <input type="file" name="image" accept="image/*" required autocomplete="off">
                            </div>
                            <button type="submit" class="btn btn-primary">Upload</button>
                            <?php
                            if ($myavatar == NULL) {
                            } else {
                                print '<a'; ?> onclick="return confirm('Delete image ?')" <?php print ' class="btn btn-danger" href="pages/drop_dp.php">Delete Image</a>';
                                                                                        }

                                                                                            ?>
                        </form>
                    </div>
                    <div class="white-box">

                        <h3>Update login password</h3>
                        <form action="pages/new_pw.php" method="POST">
                            <div class="form-group">
                                
                                <input type="password" id="password" class="form-control" name="pass1" required placeholder="Enter new password">
                            </div>

                            <div class="form-group">
                            
                                <input type="password" id="confirm_password" class="form-control" name="pass2" required placeholder="Confirm new password">
                            </div>
                            <button type="submit" class="btn btn-primary">Change Password</button>
                            <script>
                                var password = document.getElementById("password"),
                                    confirm_password = document.getElementById("confirm_password");

                                function validatePassword() {
                                    if (password.value != confirm_password.value) {
                                        confirm_password.setCustomValidity("Passwords Don't Match");
                                    } else {
                                        confirm_password.setCustomValidity('');
                                    }
                                }

                                password.onchange = validatePassword;
                                confirm_password.onkeyup = validatePassword;
                            </script>
                        </form>



                    </div>
                </div>

                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-8 col-xlg-9 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="pages/update_profile.php" method="POST" class="form-horizontal form-material">
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">First Name</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" value="<?php echo "$myfname"; ?>" name="fname" class="form-control p-0 border-0">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Last Name</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" value="<?php echo "$mylname"; ?>" name="lname" class="form-control p-0 border-0">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="exampleInputEmail1">Male</label>
                                    <input type="radio" <?php if ($mygender == "Male") {
                                                            print ' checked ';
                                                        } ?> name="gender" value="Male" required>
                                    <label for="exampleInputEmail1">Female</label>
                                    <input type="radio" <?php if ($mygender == "Female") {
                                                            print ' checked ';
                                                        } ?> name="gender" value="Female" required>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="example-email" class="col-md-12 p-0">Email</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="email" value="<?php echo "$myemail"; ?>" name="email" class="form-control p-0 border-0" name="example-email" id="example-email">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Phone No</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" value="<?php echo "$myphone"; ?>" name="phone" class="form-control p-0 border-0">
                                    </div>
                                </div>



                                <div class="form-group mb-4">
                                    <label>Date of Birth</label>
                                    <input value="<?php echo "$mydob"; ?>" name="dob" type="text" class="form-control p-0 border-0" name="dob" required autocomplete="off" placeholder="Select date of birth">
                                </div>
                                <div class="form-group mb-4">
                                    <div class="col-sm-12">
                                        <button type="submit" value="submit" class="btn btn-success">Update
                                            <?php echo "$sdfname"; ?></button>
                                    </div>
                                </div>
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