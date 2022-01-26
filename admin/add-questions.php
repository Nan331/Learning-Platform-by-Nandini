<?php
include '../database/config.php';
include 'includes/header.php';
include 'includes/check_user.php';
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
    <div class="page-wrapper" style="min-height: 250px;">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb bg-white">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Add Questions</h4>
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
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <div class="row">
                            <!-- Nav tabs -->
                            <ul class="nav nav-pills" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#navpill-1" role="tab">
                                        <span>Multiple Options</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#navpill-2" role="tab">
                                        <span>Fill in the blanks</span>
                                    </a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content border mt-2">
                                <div class="tab-pane active p-3" id="navpill-1" role="tabpanel">

                                    <form action="pages/add_question.php?type=mc" method="POST">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Question</label>
                                            <input type="text" class="form-control" placeholder="Enter question" name="question" required autocomplete="off">
                                        </div>

                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th width="100">Option No.</th>
                                                    <th>Option</th>
                                                    <th width="100">Answer</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Option 1</label>
                                                            <input type="text" class="form-control" placeholder="Enter option 1" name="opt1" required autocomplete="off">
                                                        </div>
                                                    </td>
                                                    <td><input type="radio" name="answer" value="option1" required></td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Option 2</label>
                                                            <input type="text" class="form-control" placeholder="Enter option 2" name="opt2" required autocomplete="off">
                                                        </div>
                                                    </td>
                                                    <td><input type="radio" name="answer" value="option2" required></td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Option 3</label>
                                                            <input type="text" class="form-control" placeholder="Enter option 3" name="opt3" required autocomplete="off">
                                                        </div>
                                                    </td>
                                                    <td><input type="radio" name="answer" value="option3" required></td>

                                                </tr>

                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Option 4</label>
                                                            <input type="text" class="form-control" placeholder="Enter option 4" name="opt4" required autocomplete="off">
                                                        </div>
                                                    </td>
                                                    <td><input type="radio" name="answer" value="option4" required></td>

                                                </tr>
                                            </tbody>
                                        </table>
                                        <input type="hidden" name="exam_id" value="<?php echo "$exam_id"; ?>">
                                        <button type="submit" class="btn btn-primary">Submit</button>



                                    </form>

                                </div>
                                <div class="tab-pane  p-3" id="navpill-2" role="tabpanel">
                                    <div class="row">
                                        <form action="pages/add_question.php?type=fib" method="POST">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Question</label>
                                                <input type="text" class="form-control" placeholder="Enter question" name="question" required autocomplete="off">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Answer</label>
                                                <input type="text" class="form-control" placeholder="Enter answer" name="answer" required autocomplete="off">
                                            </div>
                                            <input type="hidden" name="exam_id" value="<?php echo "$exam_id"; ?>">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
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