<?php
include '../database/config.php';
include 'includes/header.php';
include 'includes/check_user.php';
?>
<?php
if (isset($_GET['id'])) {
    include '../database/config.php';
    $exam_id = mysqli_real_escape_string($conn, $_GET['id']);
    $record_found = 0;
    $sql = "SELECT * FROM tbl_examinations WHERE exam_id = '$exam_id' AND category = '$mycategory'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
            $subject = $row['subject'];
            $exam_name = $row['exam_name'];
            $deadline = $row['date'];
            $duration = $row['duration'];
            $passmark = $row['passmark'];
            $reexam = $row['re_exam'];
            $terms = $row['terms'];
            $status = $row['status'];
            $today_date = date('Y/m/d');
            $next_retake = date('m/d/Y', strtotime($today_date . ' + ' . $reexam . ' days'));
            $dcv = date_format(date_create_from_format('m/d/Y', $deadline), 'Y/m/d');


            if ($status == "Inactive") {
                header("location:./");
            }
        }
    } else {
        header("location:./");
    }
    $quest = 0;
    $sql = "SELECT * FROM tbl_questions WHERE exam_id = '$exam_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
            $quest++;
        }
    } else {
    }


    $sql = "SELECT * FROM tbl_assessment_records WHERE student_id = '$myid' AND exam_id = '$exam_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
            $record_found = 1;
            $score = $row['score'];
            $status = $row['status'];
            $take_date = $row['date'];
            $retake_date = $row['next_retake'];
            $today_date = date('Y/m/d');
            $retakeconv = date_format(date_create_from_format('m/d/Y', $retake_date), 'Y/m/d');
            $tc = strtotime($today_date);
            $rc = strtotime($retakeconv);
            $dc = strtotime($dcv);
            $td = ($tc - $rc) / 86400;
            $dcc = ($tc - $dc) / 86400;
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
    <div class="page-wrapper" style="min-height: 250px;">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb bg-white">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Take Assessment</h4>
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
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <div class="row">
                            <div class="row col-md-12">
                                <div class="col-md-6">

                                    <div class="row">
                                        <div class="panel panel-white">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">Examination Properties</h4>
                                            </div>
                                            <div class="panel-body">
                                                <div class="table-responsive project-stats">
                                                    <table class="table">
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>Exam Name</td>
                                                                <td><?php echo "$exam_name"; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">2</th>
                                                                <td>Subject</td>
                                                                <td><?php echo "$subject"; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">3</th>
                                                                <td>Deadline</td>
                                                                <td><?php echo "$deadline"; ?></td>
                                                            </tr>

                                                            <tr>
                                                                <th scope="row">4</th>
                                                                <td>Duration</td>
                                                                <td><?php echo "$duration"; ?> <b>min.</b></td>
                                                            </tr>

                                                            <tr>
                                                                <th scope="row">5</th>
                                                                <td>Next Re-take</td>
                                                                <td><?php 
												   if ($record_found == "1") {
													 echo "$retake_date";  
												   }else{
													 echo "$next_retake";  
												   }
												   
												   ?></td>
                                                            </tr>

                                                            <tr>
                                                                <th scope="row">6</th>
                                                                <td>Passmark</td>
                                                                <td><?php echo "$passmark"; ?>%</td>
                                                            </tr>

                                                            <tr>
                                                                <th scope="row">6</th>
                                                                <td>Questions</td>
                                                                <td><b><?php echo "$quest"; ?></b></td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="panel panel-white">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Terms and conditions</h3>
                                        </div>
                                        <div class="panel-body">
                                            <?php echo "$terms"; ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Take Assessment</h3>
                                        </div>
                                        <div class="panel-body">
                                            <?php
								if ($record_found == "1") {
									
								if ($td >= 0){
									
								if ($dcc > 1){
								print '
								<div class="alert alert-warning" role="alert">
                                The exam is already expired.
                                </div>';
								}else{
								$_SESSION['current_examid'] = $exam_id;
								$_SESSION['student_retake'] = 1;
								print '
                                 <div class="alert alert-success" role="alert">
                                  You are good to go.
                                    </div>

									'; ?>
                                            <a onclick="return confirm('Are you sure you want to begin ?')"
                                                class="btn btn-success" href="assessment.php">Retake Assessment</a>

                                            <?php	
								}
                                
								}else{
                                print '
								<div class="alert alert-warning" role="alert">
                                You will be able to retake this exam on '.$retake_date.'
                                </div>';
								}								
									
								}else{
								$_SESSION['current_examid'] = $exam_id;
								$_SESSION['student_retake'] = 0;
								print '
                                 <div class="alert alert-success" role="alert">
                                  You are good to go.
                                    </div>

									'; ?>
                                            <a onclick="return confirm('Are you sure you want to begin ?')"
                                                class="btn btn-success" href="assessment.php">Begin Assessment</a>

                                            <?php
                  									
									
								}
								
								?>


                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="panel panel-white">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Assessment History</h3>
                                        </div>
                                        <div class="panel-body">
                                            <?php
								if ($record_found == "1") {
								print '
                                 <div class="alert alert-info" role="alert">
                                  You attend this exam on <strong>'.$take_date.'</strong> , your score was <strong>'.$score.'%</strong>
                                    </div>';		
								
								}else{
								print '
                                 <div class="alert alert-info" role="alert">
                                  No records found.
                                    </div>';								
									
								}
								
								?>

                                        </div>
                                    </div>
                                </div>
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