<?php
include '../include/header.php';
include '../include/nav.php';
include '../include/aside.php';

?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h6>Form :: <?php echo $_SESSION['page_name']?> </h6>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><strong>Active Module</strong></li>
                        <li class="breadcrumb-item active"><?php echo $_SESSION['module']?></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">

        <?php
        //Assembly Module
            if ($_SESSION['pageid'] == 'assembly_creator') {
                include './forms/assembly_create.php';
            }elseif ($_SESSION['pageid'] == 'manage_assembly') {
                include './report/manage_assembly.php';
            }elseif ($_SESSION['pageid'] == 'modify_assembly') {
                include './forms/modify_assembly.php';
            }


            
           //Members Module 
            elseif($_SESSION['pageid'] == 'member_register') {
                include './forms/member_create.php';
            }elseif ($_SESSION['pageid'] == 'manage_member') {
                include './report/manage_members.php';
            }
            elseif ($_SESSION['pageid'] == 'modify_member') {
                include './forms/modify_member.php';
            }
            elseif($_SESSION['pageid'] == 'view_member') {
                    include './report/view_member.php';
            }elseif ($_SESSION['pageid'] == 'print_all_cards') {
                include './report/print_card.php';
            }elseif ($_SESSION['pageid'] == 'card_member') {
                include './report/card_member.php';
            }elseif ($_SESSION['pageid'] == 'print_meal_ticket') {
                include './report/print_pass.php';
            }elseif ($_SESSION['pageid'] == 'role_assignment') {
                include './forms/role_assignment.php';
            }

            //Visitors 
            elseif($_SESSION['pageid'] == 'visitors_log') {
                include './forms/visitors_log.php';
            }elseif($_SESSION['pageid'] == 'manage_visitor') {
            include './report/manage_visitors.php';
            }elseif($_SESSION['pageid'] == 'modify_visitor') {
            include './forms/modify_visitors.php';
            }elseif($_SESSION['pageid'] == 'view_visitor') {
            include './report/visitor_report.php';
            }
            
            //Ministers Title
            elseif($_SESSION['pageid'] == 'manage_title') {
                include './forms/manage_title.php';
            }elseif ($_SESSION['pageid'] == 'modify_title') {
                include './forms/modify_title.php';
            }


            //Sunday School
            elseif ($_SESSION['pageid'] == 'sow_create') {
                include './forms/sow_create.php';
            }elseif ($_SESSION['pageid'] == 'manage_sow') {
                include './report/manage_sow.php';
            }elseif ($_SESSION['pageid'] == 'modify_sow') {
                include './forms/modify_sow.php';
            }
            elseif ($_SESSION['pageid'] == 'portal_dashboard') {
                include './dashboard.php';
            }


            //Sermon Manager
            elseif ($_SESSION['pageid'] == 'add_sermon') {
                include './forms/add_sermon.php';
            }elseif ($_SESSION['pageid'] == 'sermon_repo') {
                include './report/sermon_manager.php';
            }elseif ($_SESSION['pageid'] == 'modify_sermon') {
                include './forms/modify_sermon.php';
            }

            //WLC Participant
            elseif ($_SESSION['pageid'] == 'manage_wlc_participant') {
                include './report/manage_wlc_participant.php';
            }
        ?>
        </div>
    </section>
</div>
<?php
include '../include/footer.php';
?>