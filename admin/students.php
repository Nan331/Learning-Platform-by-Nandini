<?php
include '../database/config.php';
include 'includes/header.php';
include 'includes/check_user.php';
include 'includes/check_reply.php';
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
    <div class="page-wrapper" style="min-height: 250px;">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb bg-white">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Manage Students</h4>
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
                            <!-- Nav tabs -->
                            <ul class="nav nav-pills" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#navpill-1" role="tab">
                                        <span>Students</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#navpill-2" role="tab">
                                        <span>Add Student</span>
                                    </a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content border mt-2">
                                <div class="tab-pane active p-3" id="navpill-1" role="tabpanel">
                                    <div class="row">
                                        <!-- <div class="card"> -->
                                        <div class="">
                                            <div class="table-responsive">
                                                <div id="zero_config_wrapper"
                                                    class="dataTables_wrapper container-fluid dt-bootstrap4">
                                                    <div class="row">
                                                        <!-- <div class="col-sm-12 col-md-6">
                                                                <div class="dataTables_length" id="zero_config_length"><label>Show <select name="zero_config_length" aria-controls="zero_config" class="form-select form-select-sm mb-2">
                                                                            <option value="10">10</option>
                                                                            <option value="25">25</option>
                                                                            <option value="50">50</option>
                                                                            <option value="100">100</option>
                                                                        </select> entries</label></div>
                                                            </div> -->
                                                        <!-- <div class="col-sm-12 col-md-6">
                                                            <div id="zero_config_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control mb-2 form-control-sm" placeholder="" aria-controls="zero_config"></label></div>
                                                        </div> -->
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <?php
                                                            $dep_query = "SELECT * FROM tbl_users WHERE `role` = 'student'";
                                                            $result = mysqli_query($conn, $dep_query) or die("query failed..");

                                                            if (mysqli_num_rows($result) > 0) {




                                                            ?>
                                                            <table id="zero_config"
                                                                class="table table-striped table-bordered dataTable"
                                                                role="grid" aria-describedby="zero_config_info">
                                                                <thead>
                                                                    <tr role="row">
                                                                        <th class="sorting" tabindex="0"
                                                                            aria-controls="zero_config" rowspan="1"
                                                                            colspan="1"
                                                                            aria-label="Name: activate to sort column ascending"
                                                                            style="width: 0px;">Name</th>
                                                                        <th class="sorting" tabindex="0"
                                                                            aria-controls="zero_config" rowspan="1"
                                                                            colspan="1"
                                                                            aria-label="Position: activate to sort column ascending"
                                                                            style="width: 0px;">Gender</th>
                                                                        <th class="sorting_desc" tabindex="0"
                                                                            aria-controls="zero_config" rowspan="1"
                                                                            colspan="1"
                                                                            aria-label="Office: activate to sort column ascending"
                                                                            style="width: 0px;" aria-sort="descending">
                                                                            Category</th>

                                                                        <th class="sorting" tabindex="0"
                                                                            aria-controls="zero_config" rowspan="1"
                                                                            colspan="1"
                                                                            aria-label="Start date: activate to sort column ascending"
                                                                            style="width: 0px;">DOB</th>
                                                                        <th class="sorting" tabindex="0"
                                                                            aria-controls="zero_config" rowspan="1"
                                                                            colspan="1"
                                                                            aria-label="Salary: activate to sort column ascending"
                                                                            style="width: 0px;"></th>
                                                                        <th class="sorting" tabindex="0"
                                                                            aria-controls="zero_config" rowspan="1"
                                                                            colspan="1"
                                                                            aria-label="Salary: activate to sort column ascending"
                                                                            style="width: 0px;"></th>
                                                                        <th class="sorting" tabindex="0"
                                                                            aria-controls="zero_config" rowspan="1"
                                                                            colspan="1"
                                                                            aria-label="Salary: activate to sort column ascending"
                                                                            style="width: 0px;"></th>
                                                                        <th class="sorting" tabindex="0"
                                                                            aria-controls="zero_config" rowspan="1"
                                                                            colspan="1"
                                                                            aria-label="Salary: activate to sort column ascending"
                                                                            style="width: 0px;"></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php while ($row = mysqli_fetch_assoc($result)) {

                                                                        ?>
                                                                    <tr role="row" class="odd">
                                                                        <td class=""><?php echo $row['first_name']; ?>
                                                                            <?php echo $row['last_name']; ?></td>
                                                                        <td class=""><?php echo $row['gender']; ?>
                                                                        </td>
                                                                        <td class="sorting_1">
                                                                            <?php echo $row['category']; ?></td>

                                                                        <td><?php echo $row['dob']; ?></td>
                                                                        <?php if ($row['acc_stat'] == "1") { ?>
                                                                        <td><a
                                                                                href="pages/make_sd_in.php?id=<?php echo $row['user_id']; ?>"><span
                                                                                    class="badge rounded-pill bg-warning">deactivate</span></a></a>
                                                                        </td>
                                                                        <?php } elseif ($row['acc_stat'] == "0") { ?>
                                                                        <td><a
                                                                                href="pages/make_sd_ac.php?id=<?php echo $row['user_id']; ?>"><span
                                                                                    class="badge rounded-pill bg-success">activate</span></a></a>
                                                                        </td>
                                                                        <?php } else { ?>
                                                                        <td><?php echo 'No Status'; ?></td>
                                                                        <?php } ?>
                                                                        <td><a
                                                                                href="edit-student.php?sid=<?php echo $row['user_id']; ?>"><span
                                                                                    class="badge rounded-pill bg-warning">Edit</span></a></a>
                                                                        </td>
                                                                        <td><a
                                                                                href="view-student.php?sid=<?php echo $row['user_id']; ?>"><span
                                                                                    class="badge rounded-pill bg-info">View</span></a></a>
                                                                        </td>
                                                                        <td><a
                                                                                href="pages/drop_sd.php?id=<?php echo $row['user_id']; ?>"><span
                                                                                    class="badge rounded-pill bg-danger">delete</span></a></a>
                                                                        </td>

                                                                    </tr>
                                                                    <?php } ?>
                                                                </tbody>

                                                            </table>
                                                            <?php   } else {

                                                                echo '
                                                                        <div class="alert alert-info" role="alert">
                                                                        Nothing found.
                                                                        </div>';
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-5">
                                                            <div class="dataTables_info" id="zero_config_info"
                                                                role="status" aria-live="polite">Showing 1 to 10 of 57
                                                                entries</div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-7">
                                                            <div class="dataTables_paginate paging_simple_numbers"
                                                                id="zero_config_paginate">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- </div> -->
                                    </div>
                                </div>
                                <div class="tab-pane  p-3" id="navpill-2" role="tabpanel">
                                    <div class="row">
                                        <form action="pages/add_student.php" method="POST">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">First Name</label>
                                                <input type="text" class="form-control" placeholder="Enter first name"
                                                    name="fname" required autocomplete="off">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Last Name</label>
                                                <input type="text" class="form-control" placeholder="Enter last name"
                                                    name="lname" required autocomplete="off">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Male</label>
                                                <input type="radio" name="gender" value="Male" required>
                                                <label for="exampleInputEmail1">Female</label>
                                                <input type="radio" name="gender" value="Female" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email Address</label>
                                                <input type="email" class="form-control"
                                                    placeholder="Enter email address" name="email" required
                                                    autocomplete="off">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Phone</label>
                                                <input type="text" class="form-control" placeholder="Enter phone"
                                                    name="phone" required autocomplete="off">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Select Department</label>
                                                <select class="form-control" name="department" required>
                                                    <option value="" selected disabled>-Select department-</option>
                                                    <?php
											include '../database/config.php';
											$sql = "SELECT * FROM tbl_departments WHERE status = 'Active' ORDER BY name";
                                            $result = $conn->query($sql);

                                            if ($result->num_rows > 0) {
    
                                            while($row = $result->fetch_assoc()) {
                                            print '<option value="'.$row['name'].'">'.$row['name'].'</option>';
                                            }
                                           } else {
                          
                                            }
                                             $conn->close();
											 ?>

                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Select Category</label>
                                                <select class="form-control" name="category" required>
                                                    <option value="" selected disabled>-Select category-</option>
                                                    <?php
											include '../database/config.php';
											$sql = "SELECT * FROM tbl_categories WHERE status = 'Active' ORDER BY name";
                                            $result = $conn->query($sql);

                                            if ($result->num_rows > 0) {
    
                                            while($row = $result->fetch_assoc()) {
                                            print '<option value="'.$row['name'].'">'.$row['name'].'</option>';
                                            }
                                           } else {
                          
                                            }
                                             $conn->close();
											 ?>

                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label>Date of Birth</label>
                                                <input type="text" class="form-control date-picker" name="dob" required
                                                    autocomplete="off" placeholder="Select date of birth">
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Address</label>
                                                <textarea style="resize: none;" rows="4" class="form-control"
                                                    placeholder="Enter address" name="address" required
                                                    autocomplete="off"></textarea>
                                            </div>


                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
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