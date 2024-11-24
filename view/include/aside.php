<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="../../index3.html" class="brand-link">
        <img src="../../storage/app/rebiclogo.png" alt="Church Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">REBIC Church</span>
    </a>

    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../../storage/app/rebiclogo.png" class="img-box elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?php echo $_SESSION['active']; ?></a>
            </div>
        </div>


        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item menu-open">
                    <a href="../../app/router.php?pageid=<?php echo base64_encode('portal_dashboard');?>" class="nav-link">
                        <i class="nav-icon fas fa-stream"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-church"></i>
                        <p>
                            Assembly Module
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="../../app/router.php?pageid=<?php echo base64_encode('assembly_creator');?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create Assembly</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../app/router.php?pageid=<?php echo base64_encode('manage_assembly');?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Assembly</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../app/router.php?pageid=<?php echo base64_encode('pastoral_assignment');?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pastoral Assignment</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../app/router.php?pageid=<?php echo base64_encode('assembly_report');?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Assembly Report</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-address-card"></i>
                        <p>
                            Membership Module
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="../../app/router.php?pageid=<?php echo base64_encode('member_register');?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Register Member</p>
                            </a>
                        </li>
                        <li class="nav-item">
                        <a href="../../app/router.php?pageid=<?php echo base64_encode('manage_member');?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Members</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../app/router.php?pageid=<?php echo base64_encode('visitors_log');?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Visitors Log</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../app/router.php?pageid=<?php echo base64_encode('manage_visitor');?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Visitors</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../app/router.php?pageid=<?php echo base64_encode('manage_title');?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Title Manager</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../app/router.php?pageid=<?php echo base64_encode('print_all_cards');?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Identity Cards</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../app/router.php?pageid=<?php echo base64_encode('print_meal_ticket');?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Print Tags</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-bible"></i>
                        <p>
                            Sunday School Module
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                        <a href="../../app/router.php?pageid=<?php echo base64_encode('sow_create');?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create Class</p>
                            </a>
                        </li>
                        <li class="nav-item">
                        <a href="../../app/router.php?pageid=<?php echo base64_encode('manage_sow');?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Class</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../charts/inline.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Attendance Module</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-video"></i>
                        <p>
                            WLC
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="../../app/router.php?pageid=<?php echo base64_encode('manage_wlc_participant');?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage WLC Participant</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-sitemap"></i>
                        <p>
                            Workforce Module
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="../UI/general.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Functional Departments</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../UI/icons.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Assign HOD</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../UI/buttons.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Assign </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-video"></i>
                        <p>
                            Church Sermons 
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="../../app/router.php?pageid=<?php echo base64_encode('add_sermon');?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>New Sermon</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../app/router.php?pageid=<?php echo base64_encode('sermon_repo');?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sermon Repository</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../UI/buttons.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Configuration</p>
                            </a>
                        </li>
                    </ul>
                </li>
                
            </ul>
        </nav>

    </div>

</aside>
