<header class="topbar" data-navbarbg="skin5">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin6">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="index.php">
                <!-- Logo icon -->

                <!--End Logo icon -->
                <!-- Logo text -->
                <span class="logo-text">
                    <!-- dark Logo text -->
                    <img src="plugins/images/admin.png" alt="homepage" />
                </span>
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
            <li class="nav-item">
                <a class="nav-toggler nav-link waves-effect waves-light text-white" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
            </li>
            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav ms-auto d-flex align-items-center">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-dark show" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <?php
                        if ($myavatar == NULL) {
                            print ' <img class="rounded-circle" width="36" src="../assets/images/' . $mygender . '.png" alt="' . $myfname . '">';
                        } else {
                            echo '<img class="rounded-circle" src="data:image/jpeg;base64,' . base64_encode($myavatar) . '" width="36" alt="' . $myfname . '"/>';
                        }

                        ?>
                        <span class="ms-2 font-weight-medium"> <?php echo "$myfname"; ?></span><span class="fas fa-angle-down ms-2"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end user-dd animated flipInY" data-bs-popper="none">
                        <div class="
                      d-flex
                      no-block
                      align-items-center
                      p-3
                      bg-info
                      text-white
                      mb-2
                    ">
                            <div class="">
                                <?php
                                if ($myavatar == NULL) {
                                    print ' <img class="rounded-circle" width="60" src="../assets/images/' . $mygender . '.png" alt="' . $myfname . '">';
                                } else {
                                    echo '<img  class="rounded-circle" width="60" src="data:image/jpeg;base64,' . base64_encode($myavatar) . '" class="thumb-lg img-circle"  alt="' . $myfname . '"/>';
                                }

                                ?>
                            </div>
                            <div class="ms-2">
                                <h4 class="mb-0 text-white"> <?php echo "$myfname"; ?> <?php echo "$mylname"; ?>
                                </h4>
                                <p class="mb-0"> <?php echo "$myemail"; ?></p>
                            </div>
                        </div>
                        <a class="dropdown-item" href="profile.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user feather-sm text-info me-1 ms-1">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            My Profile</a>
                        <!-- <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="edit-profile.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings feather-sm text-warning me-1 ms-1">
                                <circle cx="12" cy="12" r="3"></circle>
                                <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                </path>
                            </svg>
                            Account Setting</a> -->
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out feather-sm text-danger me-1 ms-1">
                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                <polyline points="16 17 21 12 16 7"></polyline>
                                <line x1="21" y1="12" x2="9" y2="12"></line>
                            </svg>
                            Logout</a>
                        <div class="dropdown-divider"></div>
                        <div class="ps-4 p-2">
                            <a href="#" class="btn d-block w-100 btn-info rounded-pill">View Profile</a>
                        </div>
                    </div>
                </li>
        </div>
    </nav>
</header>>