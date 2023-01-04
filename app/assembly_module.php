<?php
include 'query.php';
$notification_alert = '';
$notification_icon = '';
$notification_message = '';

//Handle Assembly Module

if (isset($_SESSION['module']) &&  $_SESSION['module'] == 'Assembly') {
    $tblName = 'assembly_tbl';
    // Retrieve form input
    if (isset($_POST["assemblyname"])) {
        if (!isset($_POST["assemblyname"])) {
            $notification_message .= 'Assembly name field must not be empty!.<br/>';
        } else {
            $assemblyname = htmlspecialchars($_POST["assemblyname"]);
        }
    }
    if (isset($_POST["assemblyaddress"])) {
        if (!isset($_POST["assemblyaddress"])) {
            $notification_message .= 'Assembly Address field must not be empty!.<br/>';
        } else {
            $assemblyaddress = htmlspecialchars($_POST["assemblyaddress"]);
        }
    }
    if (isset($_POST["assembly_country"])) {
        if (!isset($_POST["assembly_country"])) {
            $notification_message .= 'Assembly Country field must not be empty!.<br/>';
        } else {
            $assembly_country = htmlspecialchars($_POST["assembly_country"]);
        }
    }
    if (isset($_POST["assembly_country"])) {
        if (!isset($_POST["assembly_country"])) {
            $notification_message .= 'Assembly Country field must not be empty!.<br/>';
        } else {
            $assembly_country = htmlspecialchars($_POST["assembly_country"]);
        }
    }
    if (isset($_POST["assembly_state"])) {
        if (!isset($_POST["assembly_state"])) {
            $notification_message .= 'Assembly State field must not be empty!.<br/>';
        } else {
            $assembly_state = htmlspecialchars($_POST["assembly_state"]);
        }
    }
    if (isset($_POST["assembly_lga"])) {
        if (!isset($_POST["assembly_lga"])) {
            $notification_message .= 'Assembly LGA field must not be empty!.<br/>';
        } else {
            $assembly_lga = htmlspecialchars($_POST["assembly_lga"]);
        }
    }
    if (isset($_POST["year_established"])) {
        if (!isset($_POST["year_established"])) {
            $notification_message .= 'Assembly Year Established field must not be empty!.<br/>';
        } else {
            $year_established = htmlspecialchars($_POST["year_established"]);
        }
    }



    if (isset($_POST['create_assembly']) && base64_decode($_POST['create_assembly']) == 'assembly_creator_form') {
        //check if assembly exist
        $conditions = array(
            'return_type' => 'count',
            'where' => array(
                'assembly_name' => $assemblyname,
                'assembly_address' => $assemblyaddress,
                'assembly_country' => $assembly_country,
                'assembly_state' => $assembly_state,
                'assembly_lga' => $assembly_lga,
                'assembly_year' => $year_established,
            )
        );
        $check_if_exist = $model->getRows($tblName, $conditions);
        if ($check_if_exist == 1) {
            $notification_alert = 'alert-danger';
            $notification_icon = 'icon fas fa-ban';
            $notification_message .= 'Duplicate Entry! Assembly Record Exist';
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
            $assembly_data = array(
                'assembly_name' => $assemblyname,
                'assembly_address' => $assemblyaddress,
                'assembly_country' => $assembly_country,
                'assembly_state' => $assembly_state,
                'assembly_lga' => $assembly_lga,
                'assembly_year' => $year_established,
            );
            $insert_assembly_data = $model->insert_data($tblName, $assembly_data);
            if ($insert_assembly_data) {
                // Record Log Access
                $tablename = 'log';
                $logdata = array(
                    'user_name' => $_SESSION['active'],
                    'activity' => 'Assembly Creation',
                    'uip' => $_SERVER['REMOTE_ADDR'],
                    'description' => 'Successful - Assembly account created for ' . $assemblyname,
                );
                $insert = $model->insert_data($tablename, $logdata);

                $notification_alert = 'alert-success';
                $notification_icon = 'icon fas fa-check';
                $notification_message .= 'You have Successfully created assembly account for ' . $assemblyname;
                $_SESSION['msg'] =
                    '<div class="alert ' . $notification_alert . ' alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="' . $notification_icon . '"></i> Response!</h5>
            ' . $notification_message . '
        </div>';
                $model->redirect('./router.php?pageid=' . base64_encode("manage_assembly"));
            } else {
                $notification_alert = 'alert-danger';
                $notification_icon = 'icon fas fa-ban';
                $notification_message .= 'Oops! Unable to create assembly account for ' . $assemblyname;
                $_SESSION['msg'] =
                    '<div class="alert ' . $notification_alert . ' alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="' . $notification_icon . '"></i> Response!</h5>
            ' . $notification_message . '
        </div>';
                $model->redirect("../view/pages/viewer.php");
            }
        }
    } elseif (isset($_POST['modify_assembly']) && base64_decode($_POST['modify_assembly']) == 'modify_assembly_form') {
        //Update Assembly Details
        $conditions = array(
            'return_type' => 'count',
            'where' => array(
                'assembly_id' => $_SESSION['assembly_reference'],
            )
        );
        $check_if_exist = $model->getRows($tblName, $conditions);
        if ($check_if_exist == 1) {
            $assembly_data = array(
                'assembly_name' => $assemblyname,
                'assembly_address' => $assemblyaddress,
                'assembly_country' => $assembly_country,
                'assembly_state' => $assembly_state,
                'assembly_lga' => $assembly_lga,
                'assembly_year' => $year_established,
            );
            $condition = array(
                'assembly_id' => $_SESSION['assembly_reference'],
            );
            $update_assembly_data = $model->upDate($tblName, $assembly_data, $condition);

            if ($update_assembly_data) {
                // Record Log Access
                $tablename = 'log';
                $logdata = array(
                    'user_name' => $_SESSION['active'],
                    'activity' => 'Modification - Assembly',
                    'uip' => $_SERVER['REMOTE_ADDR'],
                    'description' => 'Successful - Modified Details for assembly with ID - ' .$_SESSION['assembly_reference'],
                );
                $insert = $model->insert_data($tablename, $logdata);

                $notification_alert = 'alert-success';
                $notification_icon = 'icon fas fa-check';
                $notification_message .= 'You have Successfully modified details for ' . $assemblyname;
                $_SESSION['msg'] =
                    '<div class="alert ' . $notification_alert . ' alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="' . $notification_icon . '"></i> Response!</h5>
            ' . $notification_message . '
        </div>';
                $model->redirect('./router.php?pageid=' . base64_encode("modify_assembly") . '&assembly_reference=' . base64_encode($_SESSION['assembly_reference']));
            } else {
                $notification_alert = 'alert-danger';
                $notification_icon = 'icon fas fa-ban';
                $notification_message .= 'Oops! Unable to modify details for ' . $assemblyname;
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
    } elseif (isset($_POST['delete_assembly']) && base64_decode($_POST['delete_assembly']) == 'delete_assembly_form') {
        $conditions = array(
            'return_type' => 'count',
            'where' => array(
                'assembly_id' => $_SESSION['assembly_reference'],
            )
        );
        $check_if_exist = $model->getRows($tblName, $conditions);

        $conditions = array(
            'return_type' => 'single',
            'where' => array(
                'assembly_id' => $_SESSION['assembly_reference'],
            )
        );
        $assembly_details = $model->getRows($tblName, $conditions);


        if ($check_if_exist == 1) {
            $condition = array(
                'assembly_id' => $_SESSION['assembly_reference'],
            );
            $delete_assembly_data = $model->delete($tblName, $condition);
            if ($delete_assembly_data) {
                // Record Log Access
                $tablename = 'log';
                $logdata = array(
                    'user_name' => $_SESSION['active'],
                    'activity' => 'Delete - Assembly',
                    'uip' => $_SERVER['REMOTE_ADDR'],
                    'description' => 'Successful - Deleted all records of ' . $assembly_details['assembly_name']. ' with reference '.$_SESSION['assembly_reference'],
                );
                $insert = $model->insert_data($tablename, $logdata);

                $notification_alert = 'alert-success';
                $notification_icon = 'icon fas fa-check';
                $notification_message .= 'You have Successfully deleted details of ' .  $assembly_details['assembly_name'];
                $_SESSION['msg'] =
                    '<div class="alert ' . $notification_alert . ' alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="' . $notification_icon . '"></i> Response!</h5>
            ' . $notification_message . '
        </div>';
                $model->redirect('./router.php?pageid=' . base64_encode("manage_assembly"));
            } else {
                $notification_alert = 'alert-danger';
                $notification_icon = 'icon fas fa-ban';
                $notification_message .= 'Oops! Unable to delete details of ' .  $assembly_details['assembly_name'];
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
