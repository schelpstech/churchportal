<?php
include 'query.php';



if (isset($_GET['pageid']) && base64_decode($_GET['pageid']) == 'portal_dashboard') {
    $_SESSION['pageid'] = 'portal_dashboard';
    $_SESSION['page_name'] = 'Dashboard';
    $_SESSION['module'] = 'Dashboard';
    $model->redirect('../view/pages/viewer.php');
}

//Assembly Creator
if (isset($_GET['pageid']) && base64_decode($_GET['pageid']) == 'assembly_creator') {
    $_SESSION['pageid'] = 'assembly_creator';
    $_SESSION['page_name'] = 'Create New Assembly';
    $_SESSION['module'] = 'Assembly';
    $model->redirect('../view/pages/viewer.php');
  }elseif(isset($_GET['pageid']) && base64_decode($_GET['pageid']) == 'manage_assembly'){
    $_SESSION['pageid'] = 'manage_assembly';
    $_SESSION['page_name'] = 'Manage Assembly';
    $_SESSION['module'] = 'Assembly';
    $model->redirect('../view/pages/viewer.php'); 
  }elseif(isset($_GET['pageid']) && base64_decode($_GET['pageid']) == 'modify_assembly'){
    $_SESSION['pageid'] = 'modify_assembly';
    $_SESSION['assembly_reference'] = base64_decode($_GET['assembly_reference']);
    $_SESSION['page_name'] = 'Modify Assembly Details';
    $_SESSION['module'] = 'Assembly';
    $model->redirect('../view/pages/viewer.php'); 
  }


//Membership Register
if (isset($_GET['pageid']) && base64_decode($_GET['pageid']) == 'member_register') {
    $_SESSION['pageid'] = 'member_register';
    $_SESSION['page_name'] = 'Register New Member';
    $_SESSION['module'] = 'Membership';
    $model->redirect('../view/pages/viewer.php');
  }
if (isset($_GET['pageid']) && base64_decode($_GET['pageid']) == 'visitors_log') {
    $_SESSION['pageid'] = 'visitors_log';
    $_SESSION['page_name'] = 'Visitors Log';
    $_SESSION['module'] = 'Membership';
    $model->redirect('../view/pages/viewer.php');
  }
if (isset($_GET['pageid']) && base64_decode($_GET['pageid']) == 'manage_visitor') {
    $_SESSION['pageid'] = 'manage_visitor';
    $_SESSION['page_name'] = 'Manage Visitors Records';
    $_SESSION['module'] = 'Membership';
    $model->redirect('../view/pages/viewer.php');
  }

  if (isset($_GET['pageid']) && base64_decode($_GET['pageid']) == 'modify_visitor') {
    $_SESSION['pageid'] = 'modify_visitor';
    $_SESSION['page_name'] = 'Modify Visitor Information';
    $_SESSION['module'] = 'Membership';
    $_SESSION['visitor_reference'] = base64_decode($_GET['visitor_reference']);
    $model->redirect('../view/pages/viewer.php');
  }


  if (isset($_GET['pageid']) && base64_decode($_GET['pageid']) == 'view_visitor') {
    $_SESSION['pageid'] = 'view_visitor';
    $_SESSION['page_name'] = ' Visitor Information Slip';
    $_SESSION['module'] = 'Membership';
    $_SESSION['visitor_reference'] = base64_decode($_GET['visitor_reference']);
    $model->redirect('../view/pages/viewer.php');
  }

  // Title Manager
  if (isset($_GET['pageid']) && base64_decode($_GET['pageid']) == 'manage_title') {
    $_SESSION['pageid'] = 'manage_title';
    $_SESSION['page_name'] = 'Manage Ministers Title';
    $_SESSION['module'] = 'Membership';
    $model->redirect('../view/pages/viewer.php');
  }

  
  if (isset($_GET['pageid']) && base64_decode($_GET['pageid']) == 'modify_title') {
    $_SESSION['pageid'] = 'modify_title';
    $_SESSION['page_name'] = 'Modify Title Record';
    $_SESSION['module'] = 'Membership';
    $_SESSION['title_reference'] = base64_decode($_GET['title_reference']);
    $model->redirect('../view/pages/viewer.php');
  }


  if (isset($_GET['pageid']) && base64_decode($_GET['pageid']) == 'manage_member') {
    $_SESSION['pageid'] = 'manage_member';
    $_SESSION['page_name'] = 'Manage Member Information';
    $_SESSION['module'] = 'Membership';
    $model->redirect('../view/pages/viewer.php');
  }
  if (isset($_GET['pageid']) && base64_decode($_GET['pageid']) == 'view_member') {
    $_SESSION['pageid'] = 'view_member';
    $_SESSION['page_name'] = 'View Member Information';
    $_SESSION['module'] = 'Membership';
    $_SESSION['mem_reference'] = base64_decode($_GET['mem_reference']);
    $model->redirect('../view/pages/viewer.php');
  }
  if (isset($_GET['pageid']) && base64_decode($_GET['pageid']) == 'modify_member') {
    $_SESSION['pageid'] = 'modify_member';
    $_SESSION['page_name'] = 'Modify Member Information';
    $_SESSION['module'] = 'Membership';
    $_SESSION['mem_reference'] = base64_decode($_GET['mem_reference']);
    $model->redirect('../view/pages/viewer.php');
  }
  if(isset($_GET['pageid']) && base64_decode($_GET['pageid']) == 'role_assignment'){
    $_SESSION['pageid'] = 'role_assignment';
    $_SESSION['page_name'] = 'Assign Role to Member';
    $_SESSION['mem_reference'] = base64_decode($_GET['mem_reference']);
    $_SESSION['module'] = 'Membership';
    $model->redirect('../view/pages/viewer.php'); 
  }



//School of Wisdom
  if (isset($_GET['pageid']) && base64_decode($_GET['pageid']) == 'sow_create') {
    $_SESSION['pageid'] = 'sow_create';
    $_SESSION['page_name'] = 'Create Sunday School Class';
    $_SESSION['module'] = 'Sunday School';
    $model->redirect('../view/pages/viewer.php');
  }

  if (isset($_GET['pageid']) && base64_decode($_GET['pageid']) == 'manage_sow') {
    $_SESSION['pageid'] = 'manage_sow';
    $_SESSION['page_name'] = 'Manage Sunday School Class Detail';
    $_SESSION['module'] = 'Sunday School';
    $model->redirect('../view/pages/viewer.php');
  }

  if (isset($_GET['pageid']) && base64_decode($_GET['pageid']) == 'modify_sow') {
    $_SESSION['pageid'] = 'modify_sow';
    $_SESSION['page_name'] = 'Modify Sunday School Class Detail';
    $_SESSION['module'] = 'Sunday School';
    $_SESSION['sow_reference'] = base64_decode($_GET['sow_reference']);
    $model->redirect('../view/pages/viewer.php');
  }
  if (isset($_GET['pageid']) && base64_decode($_GET['pageid']) == 'print_all_cards') {
    $_SESSION['pageid'] = 'print_all_cards';
    $_SESSION['page_name'] = 'Member Data Repository';
    $_SESSION['module'] = 'Membership';
    $model->redirect('../view/pages/viewer.php');
  }
  if (isset($_GET['pageid']) && base64_decode($_GET['pageid']) == 'print_meal_ticket') {
    $_SESSION['pageid'] = 'print_meal_ticket';
    $_SESSION['page_name'] = 'Member Ticket Factory';
    $_SESSION['module'] = 'Membership';
    $model->redirect('../view/pages/viewer.php');
  }
  if (isset($_GET['pageid']) && base64_decode($_GET['pageid']) == 'card_member') {
    $_SESSION['pageid'] = 'card_member';
    $_SESSION['page_name'] = 'Print Card';
    $_SESSION['module'] = 'Membership';
    $_SESSION['mem_reference'] = base64_decode($_GET['mem_reference']);
    $model->redirect('../view/pages/viewer.php');
  }

  //Sermon Manager

  if (isset($_GET['pageid']) && base64_decode($_GET['pageid']) == 'add_sermon') {
    $_SESSION['pageid'] = 'add_sermon';
    $_SESSION['page_name'] = 'Add New Sermon ';
    $_SESSION['module'] = 'Sermon Manager';
    $model->redirect('../view/pages/viewer.php');
  }
  if (isset($_GET['pageid']) && base64_decode($_GET['pageid']) == 'sermon_repo') {
    $_SESSION['pageid'] = 'sermon_repo';
    $_SESSION['page_name'] = 'Sermon Repository ';
    $_SESSION['module'] = 'Sermon Manager';
    $model->redirect('../view/pages/viewer.php');
  }
if (isset($_GET['pageid']) && base64_decode($_GET['pageid']) == 'modify_sermon') {
  $_SESSION['pageid'] = 'modify_sermon';
  $_SESSION['page_name'] = 'Modify Sermon Details';
  $_SESSION['module'] = 'Sermon Manager';
  $_SESSION['sermon_reference'] = base64_decode($_GET['sermon_reference']);
  $model->redirect('../view/pages/viewer.php');
}


//WLC Registration

if (isset($_GET['pageid']) && base64_decode($_GET['pageid']) == 'manage_wlc_participant') {
  $_SESSION['pageid'] = 'manage_wlc_participant';
  $_SESSION['page_name'] = 'Manage WLC Participants Information';
  $_SESSION['module'] = 'WLC';
  $model->redirect('../view/pages/viewer.php');
}

?>
