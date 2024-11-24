<?php
include 'query.php';
$notification_alert = '';
$notification_icon = '';
$notification_message = '';

//Handle Assembly Module

if (isset($_SESSION['module']) &&  $_SESSION['module'] == 'Sunday School') {
    $tblName = 'sunday_school_tbl';
    // Retrieve form input
    if (isset($_POST["sow_assembly"])) {
        if (!isset($_POST["sow_assembly"])) {
            $notification_message .= 'Assembly name field must not be empty!.<br/>';
        } else {
            $sow_assembly = htmlspecialchars($_POST["sow_assembly"]);
        }
    }
    if (isset($_POST["sow_class_name"])) {
        if (!isset($_POST["sow_class_name"])) {
            $notification_message .= 'Sunday School Class Name field must not be empty!.<br/>';
        } else {
            $sow_class_name = htmlspecialchars($_POST["sow_class_name"]);
        }
    }
    if (isset($_POST["sow_class_description"])) {
        if (!isset($_POST["sow_class_description"])) {
            $notification_message .= 'Sunday School Class Description field must not be empty!.<br/>';
        } else {
            $sow_class_description = htmlspecialchars($_POST["sow_class_description"]);
        }
    }
    if (isset($_POST['create_sow_class']) && base64_decode($_POST['create_sow_class']) == 'create_sow_class_form') {
         //check if assembly exist
         $conditions = array(
            'return_type' => 'count',
            'where' => array(
                'classname' => $sow_class_name,
                'assemblyid' => $sow_assembly,
            ),
        );
        $check_if_exist = $model->getRows($tblName, $conditions);

        if ($check_if_exist >= 1) {
            $notification_alert = 'alert-danger';
            $notification_icon = 'icon fas fa-ban';
            $notification_message .= 'Duplicate Entry! Sunday School Class Name already Exist in selected assembly';
            $_SESSION['msg'] =
                '<div class="alert ' . $notification_alert . ' alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="' . $notification_icon . '"></i> Response!</h5>
            ' . $notification_message . '
        </div>';
            $model->redirect('../view/pages/viewer.php');
            return;
        } else {
            //insert assembly data
            $sow_data = array(
                'classname' => $sow_class_name,
                'assemblyid' => $sow_assembly,
                'description' => $sow_class_description,
            );
            $insert_sow_data = $model->insert_data($tblName, $sow_data);
            if ($insert_sow_data) {
                // Record Log Access
                $tablename = 'log';
                $logdata = array(
                    'user_name' => $_SESSION['active'],
                    'activity' => 'Sunday School Class Creation',
                    'uip' => $_SERVER['REMOTE_ADDR'],
                    'description' => 'Successful -  account created for ' . $sow_class_name,
                );
                $insert = $model->insert_data($tablename, $logdata);

                $notification_alert = 'alert-success';
                $notification_icon = 'icon fas fa-check';
                $notification_message .= 'You have Successfully created Sunday School Class : ' . $sow_class_name;
                $_SESSION['msg'] =
                    '<div class="alert ' . $notification_alert . ' alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="' . $notification_icon . '"></i> Response!</h5>
            ' . $notification_message . '
        </div>';
                $model->redirect('./router.php?pageid=' . base64_encode("manage_sow"));
            } else {
                $notification_alert = 'alert-danger';
                $notification_icon = 'icon fas fa-ban';
                $notification_message .= 'Oops! Unable to create Sunday School Class account for ' . $sow_class_name;
                $_SESSION['msg'] =
                    '<div class="alert ' . $notification_alert . ' alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="' . $notification_icon . '"></i> Response!</h5>
            ' . $notification_message . '
        </div>';
                $model->redirect("../view/pages/viewer.php");
            }
        }
    }elseif (isset($_POST['edit_sow_class']) && base64_decode($_POST['edit_sow_class']) == 'edit_sow_class_form') {

    //insert assembly data
    $sow_data = array(
        'classname' => $sow_class_name,
        'assemblyid' => $sow_assembly,
        'description' => $sow_class_description,
    );
    $conditions = array(
            'classid' => $_SESSION['sow_reference'],
    );
    $update_sow_data = $model->upDate($tblName, $sow_data, $conditions );
    if ($update_sow_data) {
        // Record Log Access
        $tablename = 'log';
        $logdata = array(
            'user_name' => $_SESSION['active'],
            'activity' => 'Sunday School Class Details Modification',
            'uip' => $_SERVER['REMOTE_ADDR'],
            'description' => 'Successful - Modified Details for Class with ID - ' . $_SESSION['sow_reference'] ,
        );
        $insert = $model->insert_data($tablename, $logdata);

        $notification_alert = 'alert-success';
        $notification_icon = 'icon fas fa-check';
        $notification_message .= 'You have Successfully modified details for Sunday School Class : ' . $sow_class_name;
        $_SESSION['msg'] =
            '<div class="alert ' . $notification_alert . ' alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="' . $notification_icon . '"></i> Response!</h5>
    ' . $notification_message . '
</div>';
        $model->redirect('./router.php?pageid=' . base64_encode("manage_sow"));
    } else {
        $notification_alert = 'alert-danger';
        $notification_icon = 'icon fas fa-ban';
        $notification_message .= 'Oops! Unable to modify details for  Sunday School Class : ' . $sow_class_name;
        $_SESSION['msg'] =
            '<div class="alert ' . $notification_alert . ' alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="' . $notification_icon . '"></i> Response!</h5>
    ' . $notification_message . '
</div>';
        $model->redirect("../view/pages/viewer.php");
    }
    }elseif (isset($_POST['delete_sow']) && base64_decode($_POST['delete_sow']) == 'delete_sow_form') {
        $conditions = array(
            'return_type' => 'count',
            'where' => array(
                'classid' => $_SESSION['sow_reference'],
            )
        );
        $check_if_exist = $model->getRows($tblName, $conditions);

        $conditions = array(
            'return_type' => 'single',
            'where' => array(
                'classid' => $_SESSION['sow_reference'],
            )
        );
        $sow_data = $model->getRows($tblName, $conditions);


        if ($check_if_exist == 1) {
            $condition = array(
                'classid' => $_SESSION['sow_reference'],
            );
            $delete_sow_data = $model->delete($tblName, $condition);

            if ($delete_sow_data) {
                // Record Log Access
                $tablename = 'log';
                $logdata = array(
                    'user_name' => $_SESSION['active'],
                    'activity' => 'Delete - Sunday School Class',
                    'uip' => $_SERVER['REMOTE_ADDR'],
                    'description' => 'Successful - Deleted details of ' . $sow_data['classname']. ' with reference '.$_SESSION['sow_reference'],
                );
                $insert = $model->insert_data($tablename, $logdata);

                $notification_alert = 'alert-success';
                $notification_icon = 'icon fas fa-check';
                $notification_message .= 'You have Successfully deleted details of ' . $sow_data['classname'];
                $_SESSION['msg'] =
                    '<div class="alert ' . $notification_alert . ' alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="' . $notification_icon . '"></i> Response!</h5>
            ' . $notification_message . '
        </div>';
                $model->redirect('./router.php?pageid=' . base64_encode("manage_sow"));
            } else {
                $notification_alert = 'alert-danger';
                $notification_icon = 'icon fas fa-ban';
                $notification_message .= 'Oops! Unable to delete details of ' . $sow_data['classname'];
                $_SESSION['msg'] =
                    '<div class="alert ' . $notification_alert . ' alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="' . $notification_icon . '"></i> Response!</h5>
            ' . $notification_message . '
        </div>';
                $model->redirect("../view/pages/viewer.php");
            }
        } else {
            //if assembly not found
            $notification_alert = 'alert-danger';
            $notification_icon = 'icon fas fa-ban';
            $notification_message .= 'Assembly Not Found! .<br/>';

            $_SESSION['msg'] =
                '<div class="alert ' . $notification_alert . ' alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="' . $notification_icon . '"></i> Response!</h5>
                        ' . $notification_message . '
                    </div>';
            $model->redirect("../view/pages/viewer.php");
        }
    } 
    
    else {
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

}else {
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