<?php

include '../database/config.php';
include 'includes/header.php';
include 'includes/check_user.php';

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
                    <h4 class="page-title">Manage Departments</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <div class="d-md-flex">
                        <ol class="breadcrumb ms-auto">
                            <li><a href="#" class="fw-normal">Dashboard</a></li>
                        </ol>
                        <a href="#" target="_blank" class="btn btn-danger  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Upgrade
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
                                        <span>Departments</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#navpill-2" role="tab">
                                        <span>Add Departments</span>
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
                                                <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
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
                                                            $limit = 5;

                                                            if (isset($_GET['page'])) {
                                                                $page = $_GET['page'];
                                                            } else {
                                                                $page = 1;
                                                            }
                                                            $offset = ($page - 1) * $limit;
                                                            $dep_query = "SELECT * FROM `tbl_departments` ORDER BY department_id DESC LIMIT $offset, $limit";
                                                            $result = mysqli_query($conn, $dep_query) or die("query failed..");

                                                            if (mysqli_num_rows($result) > 0) {




                                                            ?>
                                                                <table id="zero_config" class="table table-striped table-bordered dataTable" role="grid" aria-describedby="zero_config_info">
                                                                    <thead>
                                                                        <tr role="row">
                                                                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 0px;">Name</th>
                                                                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 0px;">Status</th>
                                                                            <th class="sorting_desc" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 0px;" aria-sort="descending">Department ID</th>
                                                                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 0px;">Date Registered</th>
                                                                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 0px;"></th>
                                                                            <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 0px;"></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php while ($row = mysqli_fetch_assoc($result)) {

                                                                        ?>
                                                                            <tr role="row" class="odd">
                                                                                <td class=""><?php echo $row['name']; ?></td>
                                                                                <td class=""><?php echo $row['status']; ?></td>
                                                                                <td class="sorting_1"><?php echo $row['department_id']; ?></td>
                                                                                <td><?php echo $row['date_registered']; ?></td>
                                                                                <?php if ($row['status'] == "Active") { ?>
                                                                                    <td><a href="pages/make_dp_in.php?id=<?php echo $row['department_id']; ?>"><span class="badge rounded-pill bg-warning">deactivate</span></a></td>
                                                                                <?php } elseif ($row['status'] == "Inactive") { ?>
                                                                                    <td><a href="pages/make_dp_ac.php?id=<?php echo $row['department_id']; ?>"><span class="badge rounded-pill bg-success">activate</span></a></td>
                                                                                <?php } else { ?>
                                                                                    <td><?php echo 'No Status'; ?></td>
                                                                                <?php } ?>
                                                                                <td class="text-center"><a href="pages/drop_dep.php?id=<?php echo $row['department_id']; ?>"><span class="badge rounded-pill bg-danger">delete</span></a></td>
                                                                                

                                                                            </tr>
                                                                        <?php } ?>
                                                                    </tbody>
                                                                    <!-- <tfoot>
                                                                        <tr>
                                                                            <th rowspan="1" colspan="1">Name</th>
                                                                            <th rowspan="1" colspan="1">Status</th>
                                                                            <th rowspan="1" colspan="1">Department ID</th>
                                                                            <th rowspan="1" colspan="1">Date Registered</th>
                                                                            <th rowspan="1" colspan="1">Action</th>
                                                                        </tr>
                                                                    </tfoot> -->
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
                                                            <div class="dataTables_info" id="zero_config_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-7">
                                                            <div class="dataTables_paginate paging_simple_numbers" id="zero_config_paginate">
                                                                <?php

                                                                $dep_query1 = "SELECT * FROM `tbl_departments`";
                                                                $result1 = mysqli_query($conn, $dep_query1) or die("query failed..");

                                                                if (mysqli_num_rows($result1) > 0) {

                                                                    $total_records = mysqli_num_rows($result1);
                                                                    $total_pages = ceil($total_records / $limit);
                                                                    echo '  <ul class="pagination">';
                                                                    if ($page > 1) {
                                                                        echo '<li class="paginate_button page-item previous" id="zero_config_previous"><a href="departments.php?page=' . ($page - 1) . '" aria-controls="zero_config" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>';
                                                                    }
                                                                    for ($i = 1; $i < $total_pages; $i++) {
                                                                        if ($i == $page) {
                                                                            $active = "active";
                                                                        } else {
                                                                            $active = "";
                                                                        }
                                                                        echo '<li class="paginate_button page-item ' . $active . '"><a href="departments.php?page=' . $i . '" aria-controls="zero_config"  class="page-link">' . $i . '</a></li>';
                                                                    }
                                                                    if ($total_pages > $page) {
                                                                        echo '<li class="paginate_button page-item next" id="zero_config_next"><a href="departments.php?page=' . ($page + 1) . '" aria-controls="zero_config" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>';
                                                                    }
                                                                    echo '</ul>';

                                                                ?>

                                                                <?php } ?>
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
                                        <form class="mt-3" action="pages/add_department.php" method="POST">
                                            <div class="input-group mb-3">
                                                <input type="text" name="department" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                                                <button class="btn btn-light-info text-info font-weight-medium" type="submit" name="submit" value="Submit">Go!</button>
                                            </div>
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