<?php
include 'query.php';
$notification_alert = '';
$notification_icon = '';
$notification_message = '';


//Handle Assembly Module

if (isset($_SESSION['module']) &&  $_SESSION['module'] == 'Membership') {
    $tblName = 'visitors_log';
    $formnumber = ucfirst($utility->generateRandomString(10));

    if (isset($_POST["surname"])) {
        if (!isset($_POST["surname"])) {
            $notification_message .= 'Surname field must not be empty!.<br/>';
        } else {
            $surname = ucfirst(htmlspecialchars($_POST["surname"])) ;
        }
    }
    if (isset($_POST["firstname"])) {
        if (!isset($_POST["firstname"])) {
            $notification_message .= 'Firstname field must not be empty!.<br/>';
        } else {
            $firstname = ucfirst(htmlspecialchars($_POST["firstname"]));
        }
    }
    if (isset($_POST["othername"])) {
            $othername = ucfirst(htmlspecialchars($_POST["othername"]));
    }else{
        $othername = "";
    }

    if (isset($_POST["gender"])) {
        if (!isset($_POST["gender"])) {
            $notification_message .= 'Gender field must not be empty!.<br/>';
        } else {
            $gender = ucfirst(htmlspecialchars($_POST["gender"]));
        }
    }
    if (isset($_POST["marital_status"])) {
        if (!isset($_POST["marital_status"])) {
            $notification_message .= 'Marital Status field must not be empty!.<br/>';
        } else {
            $marital_status = ucfirst(htmlspecialchars($_POST["marital_status"]));
        }
    }
    if (isset($_POST["occupation"])) {
        if (!isset($_POST["occupation"])) {
            $notification_message .= 'Occupation field must not be empty!.<br/>';
        } else {
            $occupation = htmlspecialchars($_POST["occupation"]);
        }
    }
    if (isset($_POST["phonenumber"])) {
        if (!isset($_POST["phonenumber"])) {
            $notification_message .= 'Phone number field must not be empty!.<br/>';
        } else {
            $phonenumber = htmlspecialchars($_POST["phonenumber"]);
        }
    }
    if (isset($_POST["alt_phonenumber"])) {
        $alt_phonenumber = htmlspecialchars($_POST["alt_phonenumber"]);
    } else {
        $alt_phonenumber = "";
    }
    if (isset($_POST["emailaddress"])) {
        $emailaddress = strtolower(htmlspecialchars($_POST["emailaddress"]));
    } else {
        $emailaddress = "";
    }
    if (isset($_POST["nearest_busstop"])) {
        if (!isset($_POST["nearest_busstop"])) {
            $notification_message .= 'Nearest Bus Stop field must not be empty!.<br/>';
        } else {
            $nearest_busstop = ucfirst(htmlspecialchars($_POST["nearest_busstop"]));
        }
    }
    if (isset($_POST["full_address"])) {
        if (!isset($_POST["full_address"])) {
            $notification_message .= 'Full Address field must not be empty!.<br/>';
        } else {
            $full_address = ucfirst(htmlspecialchars($_POST["full_address"]));
        }
    }
    if (isset($_POST["town"])) {
        if (!isset($_POST["town"])) {
            $notification_message .= 'Town field must not be empty!.<br/>';
        } else {
            $town = ucfirst(htmlspecialchars($_POST["town"]));
        }
    }
    if (isset($_POST["residence_country"])) {
        if (!isset($_POST["residence_country"])) {
            $notification_message .= 'Country of Residence field must not be empty!.<br/>';
        } else {
            $residence_country = ucfirst(htmlspecialchars($_POST["residence_country"]));
        }
    }
    if (isset($_POST["residence_state"])) {
        if (!isset($_POST["residence_state"])) {
            $notification_message .= 'State of Residence field must not be empty!.<br/>';
        } else {
            $residence_state = ucfirst(htmlspecialchars($_POST["residence_state"]));
        }
    }
    if (isset($_POST["residence_lga"])) {
        if (!isset($_POST["residence_lga"])) {
            $notification_message .= 'LGA of Residence field must not be empty!.<br/>';
        } else {
            $residence_lga = ucfirst(htmlspecialchars($_POST["residence_lga"]));
        }
    }
    if (isset($_POST["invited_by"])) {
        if (!isset($_POST["invited_by"])) {
            $notification_message .= 'Invited by field must not be empty!.<br/>';
        } else {
            $invited_by = ucfirst(htmlspecialchars($_POST["invited_by"]));
        }
    }
    if (isset($_POST["service_date"])) {
        if (!isset($_POST["service_date"])) {
            $notification_message .= 'Service Date field must not be empty!.<br/>';
        } else {
            $service_date = ucfirst(htmlspecialchars($_POST["service_date"]));
        }
    }
    if (isset($_POST["department"])) {
        if (!isset($_POST["department"])) {
            $notification_message .= 'Department field must not be empty!.<br/>';
        } else {
            $department = htmlspecialchars($_POST["department"]);
        }
    }
    if (isset($_POST["current_assembly"])) {
        if (!isset($_POST["current_assembly"])) {
            $notification_message .= 'Current Assembly field must not be empty!.<br/>';
        } else {
            $current_assembly = htmlspecialchars($_POST["current_assembly"]);
        }
    }
    if (isset($_POST["service_type"])) {
        if (!isset($_POST["service_type"])) {
            $notification_message .= 'Service Type field must not be empty!.<br/>';
        } else {
            $service_type = htmlspecialchars($_POST["service_type"]);
        }
    }



    if (isset($_POST['visitors_register']) && base64_decode($_POST['visitors_register']) == 'visitors_register_form') {

        if ($notification_message == '') {
            //check if member details already exist
            $conditions = array(
                'return_type' => 'count',
                'where' => array(
                    'surname' => $surname,
                    'firstname' => $firstname,
                    'gender' => $gender,
                    'phone' => $phonenumber,
                )
            );
            $check_if_exist = $model->getRows($tblName, $conditions);
            if ($check_if_exist == 0){
                    //insert member data
                    $visitor_data = array(
                        'ref_number' => $formnumber,
                        'surname' => $surname,
                        'firstname' => $firstname,
                        'othername' => $othername,
                        'gender' => $gender,
                        'marital_status' => $marital_status,
                        'occupation_id' => $occupation,

                        'phone' => $phonenumber,
                        'phone_alt' => $alt_phonenumber,
                        'email' => $emailaddress,

                        'landmark' => $nearest_busstop,
                        'address' => $full_address,
                        'town' => $town,
                        'country' => $residence_country,
                        'state' => $residence_state,
                        'lga' => $residence_lga,

                        'invited_by' => $invited_by,
                        'church' => $current_assembly,
                        'date' => $service_date,
                        'service' => $service_type,
                        'dept_id' => $department,
                        'enrolled_by' => $_SESSION['active'],
                    );
                    $insert_visitor_data = $model->insert_data($tblName, $visitor_data);


                    if ($insert_visitor_data) {
                        // Record Log Access
                        $tablename = 'log';
                        $logdata = array(
                            'user_name' => $_SESSION['active'],
                            'activity' => 'Visitor Records',
                            'uip' => $_SERVER['REMOTE_ADDR'],
                            'description' => 'Successful - logged visitor record number :  ' . $formnumber,
                        );
                        $insert = $model->insert_data($tablename, $logdata);

                        $notification_alert = 'alert-success';
                        $notification_icon = 'icon fas fa-check';
                        $notification_message .= 'You have successfully submitted information for  ' . $surname . " " . $firstname . " with form number : " . $formnumber;
                        $_SESSION['msg'] =
                            '<div class="alert ' . $notification_alert . ' alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="' . $notification_icon . '"></i> Response!</h5>
            ' . $notification_message . '
        </div>';
                        $model->redirect('./router.php?pageid=' . base64_encode("visitors_log"));
                    } else {
                        //error submiting form
                        $notification_alert = 'alert-danger';
                        $notification_icon = 'icon fas fa-ban';
                        $notification_message .= 'Oops! Unable to submit form for  '  . $surname . " " . $firstname;
                        $_SESSION['msg'] =
                            '<div class="alert ' . $notification_alert . ' alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="' . $notification_icon . '"></i> Response!</h5>
            ' . $notification_message . '
        </div>';
                        $model->redirect("../view/pages/viewer.php");
                    }
            } else {
                //Error Message for duplicate entry
                $notification_alert = 'alert-danger';
                $notification_icon = 'icon fas fa-ban';
                $notification_message .= 'Duplicate Entry! Visitor Record Already Exist';
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
    }elseif (isset($_POST['visitors_modify']) && base64_decode($_POST['visitors_modify']) == 'visitors_modify_form') {
        if ($notification_message == '') {
            //check if member details already exist
            $conditions = array(
                'return_type' => 'count',
                'where' => array(
                    'ref_number' => $_SESSION['visitor_reference'],
                )
            );
            $check_if_exist = $model->getRows($tblName, $conditions);
            if ($check_if_exist == 1){
                    //insert member data
                    $visitor_data = array(
                        'surname' => $surname,
                        'firstname' => $firstname,
                        'othername' => $othername,
                        'gender' => $gender,
                        'marital_status' => $marital_status,
                        'occupation_id' => $occupation,

                        'phone' => $phonenumber,
                        'phone_alt' => $alt_phonenumber,
                        'email' => $emailaddress,

                        'landmark' => $nearest_busstop,
                        'address' => $full_address,
                        'town' => $town,
                        'country' => $residence_country,
                        'state' => $residence_state,
                        'lga' => $residence_lga,

                        'invited_by' => $invited_by,
                        'church' => $current_assembly,
                        'date' => $service_date,
                        'service' => $service_type,
                        'dept_id' => $department,
                        'enrolled_by' => $_SESSION['active'],
                    );
                    $conditions = array(
                        'ref_number' => $_SESSION['visitor_reference'],
                    );
                    $update_visitor_data = $model->upDate($tblName, $visitor_data, $conditions);
                    $formnumber =$_SESSION['visitor_reference'];
                    if ($update_visitor_data) {
                        // Record Log Access
                        $tablename = 'log';
                        $logdata = array(
                            'user_name' => $_SESSION['active'],
                            'activity' => 'Modify Visitor Records',
                            'uip' => $_SERVER['REMOTE_ADDR'],
                            'description' => 'Successful - Modified visitor record number :  ' . $formnumber,
                        );
                        $insert = $model->insert_data($tablename, $logdata);

                        $notification_alert = 'alert-success';
                        $notification_icon = 'icon fas fa-check';
                        $notification_message .= 'You have successfully modified information for  ' . $surname . " " . $firstname . " with form number : " . $formnumber;
                        $_SESSION['msg'] =
                            '<div class="alert ' . $notification_alert . ' alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="' . $notification_icon . '"></i> Response!</h5>
            ' . $notification_message . '
        </div>';
                        $model->redirect('./router.php?pageid=' . base64_encode("visitors_log"));
                    } else {
                        //error submiting form
                        $notification_alert = 'alert-danger';
                        $notification_icon = 'icon fas fa-ban';
                        $notification_message .= 'Oops! Unable to modify form for  '  . $surname . " " . $firstname;
                        $_SESSION['msg'] =
                            '<div class="alert ' . $notification_alert . ' alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="' . $notification_icon . '"></i> Response!</h5>
            ' . $notification_message . '
        </div>';
                        $model->redirect("../view/pages/viewer.php");
                    }
            } else {
                //Error Message for duplicate entry
                $notification_alert = 'alert-danger';
                $notification_icon = 'icon fas fa-ban';
                $notification_message .= 'Invalid Reference Number! Visitor Record Not Found';
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
    }else {
        //Error message for invalid access
        $notification_alert = 'alert-danger';
        $notification_icon = 'icon fas fa-ban';
        $notification_message .= 'Unathorised Access -:<br/>';
        $_SESSION['msg'] =
            '<div class="alert ' . $notification_alert . ' alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="' . $notification_icon . '"></i> Response!</h5>
                ' . $notification_message . '
            </div>';
        $model->redirect('../view/index.php');
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
