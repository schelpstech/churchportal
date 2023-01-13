<?php
include 'query.php';
$notification_alert = '';
$notification_icon = '';
$notification_message = '';

//Handle Assembly Module

if (isset($_SESSION['module']) &&  $_SESSION['module'] == 'Sermon Manager') {
    $tblName = 'sermon_repo_tbl';
    // Retrieve form input
    if (isset($_POST["sermon_title"])) {
        if (!isset($_POST["sermon_title"])) {
            $notification_message .= 'Sermon Title field must not be empty!.<br/>';
        } else {
            $sermon_title = htmlspecialchars($_POST["sermon_title"]);
        }
    }
    if (isset($_POST["sermon_preacher"])) {
        if (!isset($_POST["sermon_preacher"])) {
            $notification_message .= 'Sermon Preacher field must not be empty!.<br/>';
        } else {
            $sermon_preacher = htmlspecialchars($_POST["sermon_preacher"]);
        }
    }
    if (isset($_POST["sermon_assembly"])) {
        if (!isset($_POST["sermon_assembly"])) {
            $notification_message .= 'Assembly field must not be empty!.<br/>';
        } else {
            $sermon_assembly = htmlspecialchars($_POST["sermon_assembly"]);
        }
    }
    if (isset($_POST["sermon_type"])) {
        if (!isset($_POST["sermon_type"])) {
            $notification_message .= 'Sermon Type field must not be empty!.<br/>';
        } else {
            $sermon_type = htmlspecialchars($_POST["sermon_type"]);
        }
    }
    if (isset($_POST["sermon_date"])) {
        if (!isset($_POST["sermon_date"])) {
            $notification_message .= 'Sermon Date field must not be empty!.<br/>';
        } else {
            $sermon_date = htmlspecialchars($_POST["sermon_date"]);
        }
    }
    if (isset($_POST["sermon_url"])) {
        if (!isset($_POST["sermon_url"])) {
            $notification_message .= 'Sermon URL field must not be empty!.<br/>';
        } else {
            $sermon_url = $_POST["sermon_url"];
        }
    }
    if (isset($_POST['add_new_sermon']) && base64_decode($_POST['add_new_sermon']) == 'add_new_sermon_form') {
        //check if sermon record exist
        $conditions = array(
            'return_type' => 'count',
            'where' => array(
                'link' => $sermon_url,
            ),
        );
        $check_if_exist = $model->getRows($tblName, $conditions);

        if ($check_if_exist >= 1) {
            $notification_alert = 'alert-danger';
            $notification_icon = 'icon fas fa-ban';
            $notification_message .= 'Duplicate Entry! Sermon record already Exist in selected assembly';
            $_SESSION['msg'] =
                '<div class="alert ' . $notification_alert . ' alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="' . $notification_icon . '"></i> Response!</h5>
            ' . $notification_message . '
        </div>';
            $model->redirect('../view/pages/viewer.php');
            return;
        } else {
            //Delist all other sermons
            $sermon_data = array(
                'sermon_status' => 0,
            );
            $conditions = array(
                'sermon_status ' => 1,
            );
            $update_sermon_data = $model->upDate($tblName, $sermon_data, $conditions);

            //insert sermon record data
            $sermon_data = array(
                'title' => $sermon_title,
                'preacher' => $sermon_preacher,
                'assembly_id' => $sermon_assembly,
                'sermon_type' => $sermon_type,
                'sermon_date' => $sermon_date,
                'link' => $sermon_url,
                'sermon_status' => 1,
            );
            $insert_sermon_data = $model->insert_data($tblName, $sermon_data);
            if ($sermon_data) {
                // Record Log Access
                $tablename = 'log';
                $logdata = array(
                    'user_name' => $_SESSION['active'],
                    'activity' => 'New Sermon Added to Repository',
                    'uip' => $_SERVER['REMOTE_ADDR'],
                    'description' => 'Successful -  new sermon added with title ' . $sermon_title,
                );
                $insert = $model->insert_data($tablename, $logdata);

                $notification_alert = 'alert-success';
                $notification_icon = 'icon fas fa-check';
                $notification_message .= 'You have Successfully added sermon titled : ' . $sermon_title;
                $_SESSION['msg'] =
                    '<div class="alert ' . $notification_alert . ' alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="' . $notification_icon . '"></i> Response!</h5>
            ' . $notification_message . '
        </div>';
                $model->redirect('../view/pages/viewer.php');
            } else {
                $notification_alert = 'alert-danger';
                $notification_icon = 'icon fas fa-ban';
                $notification_message .= 'Oops! Unable add sermon titled ' . $sermon_title;
                $_SESSION['msg'] =
                    '<div class="alert ' . $notification_alert . ' alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="' . $notification_icon . '"></i> Response!</h5>
            ' . $notification_message . '
        </div>';
                $model->redirect("../view/pages/viewer.php");
            }
        }
    } elseif (isset($_POST['modify_added_sermon']) && base64_decode($_POST['modify_added_sermon']) == 'modify_added_sermon_form') {

        //Update Sermon data
        $sermon_data = array(
            'title' => $sermon_title,
            'preacher' => $sermon_preacher,
            'assembly_id' => $sermon_assembly,
            'sermon_type' => $sermon_type,
            'sermon_date' => $sermon_date,
            'link' => $sermon_url,
        );
        $conditions = array(
            'sermon_id ' => $_SESSION['sermon_reference'],
        );
        $update_sermon_data = $model->upDate($tblName, $sermon_data, $conditions);
        if ($update_sermon_data) {
            // Record Log Access
            $tablename = 'log';
            $logdata = array(
                'user_name' => $_SESSION['active'],
                'activity' => 'Sermon Details Modification',
                'uip' => $_SERVER['REMOTE_ADDR'],
                'description' => 'Successful - Modified Details for sermon with title - ' . $sermon_title,
            );
            $insert = $model->insert_data($tablename, $logdata);

            $notification_alert = 'alert-success';
            $notification_icon = 'icon fas fa-check';
            $notification_message .= 'You have Successfully modified details for Sermon with title : ' . $sermon_title;
            $_SESSION['msg'] =
                '<div class="alert ' . $notification_alert . ' alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="' . $notification_icon . '"></i> Response!</h5>
    ' . $notification_message . '
</div>';
            $model->redirect('./router.php?pageid=' . base64_encode("sermon_repo"));
        } else {
            $notification_alert = 'alert-danger';
            $notification_icon = 'icon fas fa-ban';
            $notification_message .= 'Oops! Unable to modify details for  Sermon titled : ' . $sermon_title;
            $_SESSION['msg'] =
                '<div class="alert ' . $notification_alert . ' alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="' . $notification_icon . '"></i> Response!</h5>
    ' . $notification_message . '
</div>';
            $model->redirect("../view/pages/viewer.php");
        }
    } elseif (isset($_POST['delete_sermon']) && base64_decode($_POST['delete_sermon']) == 'delete_sermon_form') {
        $conditions = array(
            'return_type' => 'count',
            'where' => array(
                'sermon_id ' => $_SESSION['sermon_reference'],
            )
        );
        $check_if_exist = $model->getRows($tblName, $conditions);

        $conditions = array(
            'return_type' => 'single',
            'where' => array(
                'sermon_id ' => $_SESSION['sermon_reference'],
            )
        );
        $sermon_data = $model->getRows($tblName, $conditions);


        if ($check_if_exist == 1) {
            $condition = array(
                'sermon_id ' => $_SESSION['sermon_reference'],
            );
            $delete_sermon_data = $model->delete($tblName, $condition);

            if ($delete_sermon_data) {
                // Record Log Access
                $tablename = 'log';
                $logdata = array(
                    'user_name' => $_SESSION['active'],
                    'activity' => 'Sermon Deleted',
                    'uip' => $_SERVER['REMOTE_ADDR'],
                    'description' => 'Successful - Deleted details of sermon titled : ' . $sermon_data['title'] . ' preached by ' . $sermon_data['preacher'],
                );
                $insert = $model->insert_data($tablename, $logdata);

                $notification_alert = 'alert-success';
                $notification_icon = 'icon fas fa-check';
                $notification_message .= 'You have Successfully deleted details of sermon titled : ' . $sermon_data['title'] . ' preached by ' . $sermon_data['preacher'];
                $_SESSION['msg'] =
                    '<div class="alert ' . $notification_alert . ' alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="' . $notification_icon . '"></i> Response!</h5>
            ' . $notification_message . '
        </div>';
                $model->redirect('./router.php?pageid=' . base64_encode("sermon_repo"));
            } else {
                $notification_alert = 'alert-danger';
                $notification_icon = 'icon fas fa-ban';
                $notification_message .= 'Oops! Unable to delete details of sermon titled: ' . $sermon_data['title'];
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
            $notification_message .= 'Sermon Not Found! .<br/>';

            $_SESSION['msg'] =
                '<div class="alert ' . $notification_alert . ' alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="' . $notification_icon . '"></i> Response!</h5>
                        ' . $notification_message . '
                    </div>';
            $model->redirect("../view/pages/viewer.php");
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
