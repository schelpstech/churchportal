<?php
include 'query.php';
$notification_alert = '';
$notification_icon = '';
$notification_message = '';


//Handle Assembly Module

$tblName = 'title_records';

if (isset($_POST["selected_title"])) {
    if (!isset($_POST["selected_title"])) {
        $notification_message .= 'Title field must not be empty!.<br/>';
    } else {
        $selected_title = htmlspecialchars($_POST["selected_title"]);
    }
}
if (isset($_POST["selected_minister"])) {
    if (!isset($_POST["selected_minister"])) {
        $notification_message .= 'Minister field must not be empty!.<br/>';
    } else {
        $selected_minister = htmlspecialchars($_POST["selected_minister"]);
    }
}

if (isset($_SESSION['module']) && $_SESSION['module'] == 'Membership' && isset($_POST['add_title']) && base64_decode($_POST['add_title']) == 'add_title_form') {



    if ($notification_message == '') {
        //check if title records already exist
        $conditions = array(
            'return_type' => 'count',
            'where' => array(
                'title_id' => $selected_title,
                'reference_id' => $selected_minister,
            )
        );
        $check_if_exist = $model->getRows($tblName, $conditions);

        if ($check_if_exist == 0) {

            $title_data = array(
                'title_id' => $selected_title,
                'reference_id' => $selected_minister,
                'recorded_by' => $_SESSION['active'],
            );
            $record_title_data = $model->insert_data($tblName, $title_data);


            if ($record_title_data) {
                // Record Log Access
                $tablename = 'log';
                $logdata = array(
                    'user_name' => $_SESSION['active'],
                    'activity' => 'Title Record',
                    'uip' => $_SERVER['REMOTE_ADDR'],
                    'description' => 'Successful - Title appended for - ' . $selected_minister,
                );
                $insert = $model->insert_data($tablename, $logdata);

                $notification_alert = 'alert-success';
                $notification_icon = 'icon fas fa-check';
                $notification_message .= 'You have successfully appended a title to user with form number : ' . $selected_minister;
                $_SESSION['msg'] =
                    '<div class="alert ' . $notification_alert . ' alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="' . $notification_icon . '"></i> Response!</h5>
            ' . $notification_message . '
        </div>';
                $model->redirect('./router.php?pageid=' . base64_encode("manage_title"));
            } else {
                //error submiting form
                $notification_alert = 'alert-danger';
                $notification_icon = 'icon fas fa-ban';
                $notification_message .= 'Oops! Unable to appended a title to user with form number  ' . $selected_minister;
                $_SESSION['msg'] =
                    '<div class="alert ' . $notification_alert . ' alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="' . $notification_icon . '"></i> Response!</h5>
            ' . $notification_message . '
        </div>';
                $model->redirect("../view/pages/viewer.php");
            }
        } else {
            //error submiting form
            $notification_alert = 'alert-danger';
            $notification_icon = 'icon fas fa-ban';
            $notification_message .= 'Oops! There is an existing record of the title ';
            $_SESSION['msg'] =
                '<div class="alert ' . $notification_alert . ' alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="' . $notification_icon . '"></i> Response!</h5>
        ' . $notification_message . '
    </div>';
            $model->redirect("../view/pages/viewer.php");
        }
    } else {
        //Error message for incomplete data
        $notification_alert = 'alert-danger';
        $notification_icon = 'icon fas fa-ban';
        $notification_message .= 'The following errors were discovered -:<br/>';
        $_SESSION['msg'] =
            '<div class="alert ' . $notification_alert . ' alert-dismissible">
                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                 <h5><i class="' . $notification_icon . '"></i> Response!</h5>
                 ' . $notification_message . '
             </div>';
        $model->redirect('../view/pages/viewer.php');
        return;
    }
} elseif (isset($_SESSION['module']) && $_SESSION['module'] == 'Membership' && isset($_POST['modify_title']) && base64_decode($_POST['modify_title']) == 'modify_title_form') {
   
    if ($notification_message == '') {
        //check if title records already exist
        $conditions = array(
            'return_type' => 'count',
            'where' => array(
                'title_id' => $selected_title,
                'reference_id' => $selected_minister,
            )
        );
        $check_if_exist = $model->getRows($tblName, $conditions);

        if ($check_if_exist == 0) {

            $title_data = array(
                'title_id' => $selected_title,
                'reference_id' => $selected_minister,
                'recorded_by' => $_SESSION['active'],
            );
            $condition = array(
                'record_id' => $_SESSION['title_reference'],
            );
            $update_title_data = $model->upDate($tblName, $title_data, $condition);

            if ($update_title_data) {
                // Record Log Access
                $tablename = 'log';
                $logdata = array(
                    'user_name' => $_SESSION['active'],
                    'activity' => 'Title Record',
                    'uip' => $_SERVER['REMOTE_ADDR'],
                    'description' => 'Successful - Title Modified for - ' . $selected_minister,
                );
                $insert = $model->insert_data($tablename, $logdata);

                $notification_alert = 'alert-success';
                $notification_icon = 'icon fas fa-check';
                $notification_message .= 'You have successfully modified title appended to minister with form number : ' . $selected_minister;
                $_SESSION['msg'] =
                    '<div class="alert ' . $notification_alert . ' alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="' . $notification_icon . '"></i> Response!</h5>
            ' . $notification_message . '
        </div>';
                $model->redirect('./router.php?pageid=' . base64_encode("manage_title"));
            } else {
                //error submiting form
                $notification_alert = 'alert-danger';
                $notification_icon = 'icon fas fa-ban';
                $notification_message .= 'Oops! Unable to modfify appended title to minister with form number  ' . $selected_minister;
                $_SESSION['msg'] =
                    '<div class="alert ' . $notification_alert . ' alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="' . $notification_icon . '"></i> Response!</h5>
            ' . $notification_message . '
        </div>';
                $model->redirect("../view/pages/viewer.php");
            }
        } else {
            //error submiting form
            $notification_alert = 'alert-danger';
            $notification_icon = 'icon fas fa-ban';
            $notification_message .= 'Oops! There is an existing record of the title ';
            $_SESSION['msg'] =
                '<div class="alert ' . $notification_alert . ' alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="' . $notification_icon . '"></i> Response!</h5>
        ' . $notification_message . '
    </div>';
            $model->redirect("../view/pages/viewer.php");
        }
    } else {
        //Error message for incomplete data
        $notification_alert = 'alert-danger';
        $notification_icon = 'icon fas fa-ban';
        $notification_message .= 'The following errors were discovered -:<br/>';
        $_SESSION['msg'] =
            '<div class="alert ' . $notification_alert . ' alert-dismissible">
                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                 <h5><i class="' . $notification_icon . '"></i> Response!</h5>
                 ' . $notification_message . '
             </div>';
        $model->redirect('../view/pages/viewer.php');
        return;
    }
}elseif (isset($_SESSION['module']) && $_SESSION['module'] == 'Membership' && isset($_POST['delete_title']) && base64_decode($_POST['delete_title']) == 'delete_title_form') {
   
    if ($notification_message == '') {
        //check if title records already exist
        $conditions = array(
            'return_type' => 'count',
            'where' => array(
                'title_id' => $selected_title,
                'reference_id' => $selected_minister,
            )
        );
        $check_if_exist = $model->getRows($tblName, $conditions);

        if ($check_if_exist == 1) {
            $condition = array(
                'record_id' => $_SESSION['title_reference'],
            );
            $delete_title_data = $model->delete($tblName, $condition);

            if ($delete_title_data) {
                // Record Log Access
                $tablename = 'log';
                $logdata = array(
                    'user_name' => $_SESSION['active'],
                    'activity' => 'Title Record',
                    'uip' => $_SERVER['REMOTE_ADDR'],
                    'description' => 'Successful - Title Deleted for - ' . $selected_minister,
                );
                $insert = $model->insert_data($tablename, $logdata);

                $notification_alert = 'alert-success';
                $notification_icon = 'icon fas fa-check';
                $notification_message .= 'You have successfully deleted title appended to minister with form number : ' . $selected_minister;
                $_SESSION['msg'] =
                    '<div class="alert ' . $notification_alert . ' alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="' . $notification_icon . '"></i> Response!</h5>
            ' . $notification_message . '
        </div>';
                $model->redirect('./router.php?pageid=' . base64_encode("manage_title"));
            } else {
                //error submiting form
                $notification_alert = 'alert-danger';
                $notification_icon = 'icon fas fa-ban';
                $notification_message .= 'Oops! Unable to delete appended title to minister with form number  ' . $selected_minister;
                $_SESSION['msg'] =
                    '<div class="alert ' . $notification_alert . ' alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="' . $notification_icon . '"></i> Response!</h5>
            ' . $notification_message . '
        </div>';
                $model->redirect("../view/pages/viewer.php");
            }
        } else {
            //error submiting form
            $notification_alert = 'alert-danger';
            $notification_icon = 'icon fas fa-ban';
            $notification_message .= 'Oops! There is no existing record of the title ';
            $_SESSION['msg'] =
                '<div class="alert ' . $notification_alert . ' alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="' . $notification_icon . '"></i> Response!</h5>
        ' . $notification_message . '
    </div>';
            $model->redirect("../view/pages/viewer.php");
        }
    } else {
        //Error message for incomplete data
        $notification_alert = 'alert-danger';
        $notification_icon = 'icon fas fa-ban';
        $notification_message .= 'The following errors were discovered -:<br/>';
        $_SESSION['msg'] =
            '<div class="alert ' . $notification_alert . ' alert-dismissible">
                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                 <h5><i class="' . $notification_icon . '"></i> Response!</h5>
                 ' . $notification_message . '
             </div>';
        $model->redirect('../view/pages/viewer.php');
        return;
    }
} else {
    $notification_alert = 'alert-danger';
    $notification_icon = 'icon fas fa-ban';
    $notification_message .= 'Access Denied! .<br/>';

    $_SESSION['msg'] =
        '<div class="alert ' . $notification_alert . ' alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="' . $notification_icon . '"></i> Response!</h5>
                    ' . $notification_message . '
                </div>';
    $model->redirect("../view/index.php");
}
