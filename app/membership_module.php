<?php
include 'query.php';
$notification_alert = '';
$notification_icon = '';
$notification_message = '';


//Handle Assembly Module

if (isset($_SESSION['module']) && $_SESSION['module'] == 'Membership') {
    $tblName = 'member_list';
    $formnumber = $utility->generateRandomString(16);
    $allowedTypes = array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF);

    if (isset($_POST["surname"])) {
        if (!isset($_POST["surname"])) {
            $notification_message .= 'Surname field must not be empty!.<br/>';
        } else {
            $surname = ucfirst(htmlspecialchars($_POST["surname"]));
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
        if (!isset($_POST["othername"])) {
            $notification_message .= 'Othername field must not be empty!.<br/>';
        } else {
            $othername = ucfirst(htmlspecialchars($_POST["othername"]));
        }
    }
    if (isset($_POST["gender"])) {
        if (!isset($_POST["gender"])) {
            $notification_message .= 'Gender field must not be empty!.<br/>';
        } else {
            $gender = ucfirst(htmlspecialchars($_POST["gender"]));
        }
    }
    if (isset($_POST["dateofbirth"])) {
        if (!isset($_POST["dateofbirth"])) {
            $notification_message .= 'Date of Birth field must not be empty!.<br/>';
        } else {
            $dateofbirth = htmlspecialchars($_POST["dateofbirth"]);
        }
    }
    if (isset($_POST["marital_status"])) {
        if (!isset($_POST["marital_status"])) {
            $notification_message .= 'Marital Status field must not be empty!.<br/>';
        } else {
            $marital_status = ucfirst(htmlspecialchars($_POST["marital_status"]));
        }
    }
    if (isset($_POST["language"])) {
        if (!isset($_POST["language"])) {
            $notification_message .= 'Language field must not be empty!.<br/>';
        } else {
            $language = implode(", ", $_POST["language"]);
        }
    }
    if (isset($_POST["nationality"])) {
        if (!isset($_POST["nationality"])) {
            $notification_message .= 'Nationality field must not be empty!.<br/>';
        } else {
            $nationality = ucfirst(htmlspecialchars($_POST["nationality"]));
        }
    }
    if (isset($_POST["state_of_origin"])) {
        if (!isset($_POST["state_of_origin"])) {
            $notification_message .= 'State of Origin field must not be empty!.<br/>';
        } else {
            $state_of_origin = ucfirst(htmlspecialchars($_POST["state_of_origin"]));
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
        $emailaddress = htmlspecialchars($_POST["emailaddress"]);
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
    if (isset($_POST["year_joined"])) {
        if (!isset($_POST["year_joined"])) {
            $notification_message .= 'Year Joined field must not be empty!.<br/>';
        } else {
            $year_joined = htmlspecialchars($_POST["year_joined"]);
        }
    }
    if (isset($_POST["member_status"])) {
        if (!isset($_POST["member_status"])) {
            $notification_message .= 'Membership Status field must not be empty!.<br/>';
        } else {
            $member_status = ucfirst(htmlspecialchars($_POST["member_status"]));
        }
    }
    if (isset($_POST["current_assembly"])) {
        if (!isset($_POST["current_assembly"])) {
            $notification_message .= 'Current Assembly field must not be empty!.<br/>';
        } else {
            $current_assembly = htmlspecialchars($_POST["current_assembly"]);
        }
    }
    if (isset($_POST["occupation"])) {
        if (!isset($_POST["occupation"])) {
            $notification_message .= 'Occupation field must not be empty!.<br/>';
        } else {
            $occupation = ucfirst(htmlspecialchars($_POST["occupation"]));
        }
    }
    if (isset($_POST["department"])) {
        if (!isset($_POST["department"])) {
            $notification_message .= 'Department field must not be empty!.<br/>';
        } else {
            $department = htmlspecialchars($_POST["department"]);
        }
    }
    if (isset($_POST["sunday_school"])) {
        if (!isset($_POST["sunday_school"])) {
            $notification_message .= 'Sunday School field must not be empty!.<br/>';
        } else {
            $sunday_school = htmlspecialchars($_POST["sunday_school"]);
        }
    }



    if (isset($_POST['create_new_member']) && base64_decode($_POST['create_new_member']) == 'create_new_member_form') {
        if (isset($_FILES['passport']) && $_FILES['passport']['error'] === UPLOAD_ERR_OK && in_array(exif_imagetype($_FILES['passport']['tmp_name']), $allowedTypes)) {
            //passportdata
            $fileTmpPath = $_FILES['passport']['tmp_name'];
            $fileName = $_FILES['passport']['name'];
            $fileNameCmps = explode(".", $fileName);
            $fileExtension = strtolower(end($fileNameCmps));

            //Check file extension
            $allowedfileExtensions = array('png', 'jpeg', 'jpg');
            if (!in_array($fileExtension, $allowedfileExtensions)) {
                $notification_message .= ' Invalid File format. Only JPG, JPEG and PNG files allowed. <br/>';
            }
            $passport = $formnumber . "." . $fileExtension;
            // directory in which the uploaded file will be moved
            $dir = '../storage/passport/';
            $dest_path = $dir . $passport;
        } else {
            $notification_message .= ' Invalid Passport File format. Only JPG, JPEG and PNG files allowed. <br/>';
        }
        if ($notification_message == '') {
            //check if member details already exist
            $conditions = array(
                'return_type' => 'count',
                'where' => array(
                    'lastname' => $surname,
                    'firstname' => $firstname,
                    'gender' => $gender,
                    'phone' => $phonenumber,
                )
            );
            $check_if_exist = $model->getRows($tblName, $conditions);
            if ($check_if_exist == 0) {

                //Save Passport
                if (move_uploaded_file($fileTmpPath, $dest_path)) {
                    //insert member data
                    $member_data = array(
                        'form_number' => $formnumber,
                        'lastname' => $surname,
                        'firstname' => $firstname,
                        'othername' => $othername,
                        'gender' => $gender,
                        'dateofbirth' => $dateofbirth,
                        'marital_status' => $marital_status,
                        'nationality' => $nationality,
                        'state_of_origin' => $state_of_origin,
                        'language' => $language,
                        'phone' => $phonenumber,
                        'phone_alt' => $alt_phonenumber,
                        'email_address' => $emailaddress,
                        'landmark' => $nearest_busstop,
                        'address' => $full_address,
                        'area' => $town,
                        'residence_country' => $residence_country,
                        'residence_state' => $residence_state,
                        'residence_lga' => $residence_lga,
                        'membership_status' => $member_status,
                        'assemblyid' => $current_assembly,
                        'year_joined' => $year_joined,
                        'classid' => $sunday_school,
                        'department_id' => $department,
                        'occupation_id' => $occupation,
                        'enrolled_by' => $_SESSION['active'],
                        'enroll_date' => date("Y-m-d"),
                        'passport' => $passport,
                    );
                    $insert_member_data = $model->insert_data($tblName, $member_data);


                    if ($insert_member_data) {
                        // Record Log Access
                        $tablename = 'log';
                        $logdata = array(
                            'user_name' => $_SESSION['active'],
                            'activity' => 'Member Registration',
                            'uip' => $_SERVER['REMOTE_ADDR'],
                            'description' => 'Successful - Member account created for ' . $formnumber,
                        );
                        $insert = $model->insert_data($tablename, $logdata);

                        $notification_alert = 'alert-success';
                        $notification_icon = 'icon fas fa-check';
                        $notification_message .= 'You have Successfully submitted information for  ' . $surname . " " . $firstname . " with form number : " . $formnumber;
                        $_SESSION['msg'] =
                            '<div class="alert ' . $notification_alert . ' alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="' . $notification_icon . '"></i> Response!</h5>
            ' . $notification_message . '
        </div>';
                        $model->redirect('./router.php?pageid=' . base64_encode("member_register"));
                    } else {
                        //error submiting form
                        $notification_alert = 'alert-danger';
                        $notification_icon = 'icon fas fa-ban';
                        $notification_message .= 'Oops! Unable to submit form for  ' . $surname . " " . $firstname;
                        $_SESSION['msg'] =
                            '<div class="alert ' . $notification_alert . ' alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="' . $notification_icon . '"></i> Response!</h5>
            ' . $notification_message . '
        </div>';
                        $model->redirect("../view/pages/viewer.php");
                    }
                } else {
                    //Error Message for not saving passport
                    $notification_alert = 'alert-danger';
                    $notification_icon = 'icon fas fa-ban';
                    $notification_message .= 'Ooops! File server unreacheable. Please try again later.';
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
                //Error Message for duplicate entry
                $notification_alert = 'alert-danger';
                $notification_icon = 'icon fas fa-ban';
                $notification_message .= 'Duplicate Entry! Member Record Already Exist';
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
    } elseif (isset($_POST['data_validation']) && base64_decode($_POST['data_validation']) == 'data_validation_form') {
        $notification_message == '';
        // Generate Membership ID - RBC-YEAR-SERIAL_NUMBER
        $year = base64_decode($_GET['hook']);

        $conditions = array(
            'return_type' => 'count',
            'where' => array(
                'year_joined' => $year,
            )
        );
        $count_year_joined = $model->getRows($tblName, $conditions);

        $population = intval($count_year_joined);

        if ($population == 1) {
            $prefix = "000";
            $mem_id = "RBC" . $year . $prefix . $population;
        } elseif ($population > 1 && $population < 10) {
            $prefix = '000';
            $mem_id = "RBC" . $year . $prefix . ($population + 1);
        } elseif ($population > 10 && $population < 100) {
            $prefix = "00";
            $mem_id = "RBC" . $year . $prefix . ($population + 1);
        } elseif ($population > 100 && $population < 1000) {
            $prefix = 0;
            $mem_id = "RBC" . $year . $prefix . ($population + 1);
        }


        //Crosscheck Membership ID

        $conditions = array(
            'return_type' => 'count',
            'where' => array(
                'membership_number' => $mem_id,
            )
        );
        $check_mem_id = $model->getRows($tblName, $conditions);

        if ($check_mem_id == 0) {
            $membership_number = $mem_id;
        } else {
            $prefix = $utility->generateRandomDigits(8);
            $membership_number = "RBC" . $prefix;
        }

        //Data Validation Change
        $member_data = array(
            'membership_number' => $membership_number,
        );
        $condition = array(
            'form_number' => $_SESSION['mem_reference'],
        );
        $validate_data = $model->upDate($tblName, $member_data, $condition);

        if ($validate_data) {
            // Record Log Access
            $tablename = 'log';
            $logdata = array(
                'user_name' => $_SESSION['active'],
                'activity' => 'Data Validation',
                'uip' => $_SERVER['REMOTE_ADDR'],
                'description' => 'Successful - Membership ID ' . $membership_number . ' has been created for form ' . $_SESSION['mem_reference'],
            );
            $insert = $model->insert_data($tablename, $logdata);

            $notification_alert = 'alert-success';
            $notification_icon = 'icon fas fa-check';
            $notification_message .= 'You have Successfully generate Membership ID ' . $membership_number . ' has been created for form ' . $_SESSION['mem_reference'];
            $_SESSION['msg'] =
                '<div class="alert ' . $notification_alert . ' alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="' . $notification_icon . '"></i> Response!</h5>
    ' . $notification_message . '
</div>';
            $model->redirect('./router.php?pageid=' . base64_encode("view_member") . '&mem_reference=' . base64_encode($_SESSION['mem_reference']));
        } else {
            //Error Message when membership ID cannot be updated
            $notification_alert = 'alert-danger';
            $notification_icon = 'icon fas fa-ban';
            $notification_message .= 'Ooops! This operation failed. Kindly try again';
            $_SESSION['msg'] =
                '<div class="alert ' . $notification_alert . ' alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="' . $notification_icon . '"></i> Response!</h5>
    ' . $notification_message . '
</div>';
            $model->redirect('../view/pages/viewer.php');
            return;
        }
    } elseif (isset($_POST['modify_member_passport']) && base64_decode($_POST['modify_member_passport']) == 'modify_member_passport_form') {
        if (isset($_FILES['passport']) && $_FILES['passport']['error'] === UPLOAD_ERR_OK && in_array(exif_imagetype($_FILES['passport']['tmp_name']), $allowedTypes)) {
            //passportdata
            $fileTmpPath = $_FILES['passport']['tmp_name'];
            $fileName = $_FILES['passport']['name'];
            $fileNameCmps = explode(".", $fileName);
            $fileExtension = strtolower(end($fileNameCmps));

            //Check file extension
            $allowedfileExtensions = array('png', 'jpeg', 'jpg');
            if (!in_array($fileExtension, $allowedfileExtensions)) {
                $notification_message .= ' Invalid File format. Only JPG, JPEG and PNG files allowed. <br/>';
            }

            $passport = $_SESSION['mem_reference'].$utility->generateRandomString(6). "." . $fileExtension;
            // directory in which the uploaded file will be moved
            $dir = '../storage/passport/';
            $dest_path = $dir . $passport;
        } else {
            $notification_message .= ' Invalid Passport File format. Only JPG, JPEG and PNG files allowed. <br/>';
        }

        if (move_uploaded_file($fileTmpPath, $dest_path)) {
            $new_passport = base64_encode($_FILES['passport']);
            //Update new Passport Name
            $member_data = array(
                'passport' => $passport,
            );
            $condition = array(
                'form_number' => $_SESSION['mem_reference'],
            );
            $update_data = $model->upDate($tblName, $member_data, $condition);

            if ($update_data) {
                // Record Log Access
                $tablename = 'log';
                $logdata = array(
                    'user_name' => $_SESSION['active'],
                    'activity' => 'Passport Modification',
                    'uip' => $_SERVER['REMOTE_ADDR'],
                    'description' => 'Successful - Passport Modification for ' . $_SESSION['mem_reference'],
                );
                $insert = $model->insert_data($tablename, $logdata);

                $notification_alert = 'alert-success';
                $notification_icon = 'icon fas fa-check';
                $notification_message .= 'Passport has been updated for user with form number ' . $_SESSION['mem_reference'];
                $_SESSION['msg'] =
                    '<div class="alert ' . $notification_alert . ' alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="' . $notification_icon . '"></i> Response!</h5>
    ' . $notification_message . '
</div>';
                $model->redirect('./router.php?pageid=' . base64_encode("view_member") . '&mem_reference=' . base64_encode($_SESSION['mem_reference']));
            } else {
                //Error Message when membership ID cannot be updated
                $notification_alert = 'alert-danger';
                $notification_icon = 'icon fas fa-ban';
                $notification_message .= 'Ooops! This operation failed. Kindly try again';
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
            //Error Message for not saving passport
            $notification_alert = 'alert-danger';
            $notification_icon = 'icon fas fa-ban';
            $notification_message .= 'Ooops! File server unreacheable. Please try again later.';
            $_SESSION['msg'] =
                '<div class="alert ' . $notification_alert . ' alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="' . $notification_icon . '"></i> Response!</h5>
        ' . $notification_message . '
    </div>';
            $model->redirect('../view/pages/viewer.php');
            return;
        }
    } elseif (isset($_POST['modify_member_biodata']) && base64_decode($_POST['modify_member_biodata']) == 'modify_member_biodata_form') {
        //Update Biodata
        $member_data = array(
            'lastname' => $surname,
            'firstname' => $firstname,
            'othername' => $othername,
            'gender' => $gender,
            'dateofbirth' => $dateofbirth,
            'marital_status' => $marital_status,
            'nationality' => $nationality,
            'state_of_origin' => $state_of_origin,
            'language' => $language,
        );
        $condition = array(
            'form_number' => $_SESSION['mem_reference'],
        );
        $update_data = $model->upDate($tblName, $member_data, $condition);

        if ($update_data) {
            // Record Log Access
            $tablename = 'log';
            $logdata = array(
                'user_name' => $_SESSION['active'],
                'activity' => 'Biodata Modification',
                'uip' => $_SERVER['REMOTE_ADDR'],
                'description' => 'Successful - Biodata Modification for ' . $_SESSION['mem_reference'],
            );
            $insert = $model->insert_data($tablename, $logdata);

            $notification_alert = 'alert-success';
            $notification_icon = 'icon fas fa-check';
            $notification_message .= 'Biodata has been updated for user with form number ' . $_SESSION['mem_reference'];
            $_SESSION['msg'] =
                '<div class="alert ' . $notification_alert . ' alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<h5><i class="' . $notification_icon . '"></i> Response!</h5>
' . $notification_message . '
</div>';
            $model->redirect('./router.php?pageid=' . base64_encode("modify_member") . '&mem_reference=' . base64_encode($_SESSION['mem_reference']));
        } else {
            //Error Message when  Biodata cannot be updated
            $notification_alert = 'alert-danger';
            $notification_icon = 'icon fas fa-ban';
            $notification_message .= 'Ooops! This operation failed. Kindly try again';
            $_SESSION['msg'] =
                '<div class="alert ' . $notification_alert . ' alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<h5><i class="' . $notification_icon . '"></i> Response!</h5>
' . $notification_message . '
</div>';
            $model->redirect('../view/pages/viewer.php');
            return;
        }
    } elseif (isset($_POST['modify_member_contact']) && base64_decode($_POST['modify_member_contact']) == 'modify_member_contact_form') {
        //Update Contact
        $member_data = array(
            'phone' => $phonenumber,
            'phone_alt' => $alt_phonenumber,
            'email_address' => $emailaddress,
            'landmark' => $nearest_busstop,
            'address' => $full_address,
            'area' => $town,
            'residence_country' => $residence_country,
            'residence_state' => $residence_state,
            'residence_lga' => $residence_lga,
        );
        $condition = array(
            'form_number' => $_SESSION['mem_reference'],
        );
        $update_data = $model->upDate($tblName, $member_data, $condition);

        if ($update_data) {
            // Record Log Access
            $tablename = 'log';
            $logdata = array(
                'user_name' => $_SESSION['active'],
                'activity' => 'Contact Modification',
                'uip' => $_SERVER['REMOTE_ADDR'],
                'description' => 'Successful - Contact Modification for ' . $_SESSION['mem_reference'],
            );
            $insert = $model->insert_data($tablename, $logdata);

            $notification_alert = 'alert-success';
            $notification_icon = 'icon fas fa-check';
            $notification_message .= 'Contact has been updated for user with form number ' . $_SESSION['mem_reference'];
            $_SESSION['msg'] =
                '<div class="alert ' . $notification_alert . ' alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<h5><i class="' . $notification_icon . '"></i> Response!</h5>
' . $notification_message . '
</div>';
            $model->redirect('./router.php?pageid=' . base64_encode("modify_member") . '&mem_reference=' . base64_encode($_SESSION['mem_reference']));
        } else {
            //Error Message when  Biodata cannot be updated
            $notification_alert = 'alert-danger';
            $notification_icon = 'icon fas fa-ban';
            $notification_message .= 'Ooops! This operation failed. Kindly try again';
            $_SESSION['msg'] =
                '<div class="alert ' . $notification_alert . ' alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<h5><i class="' . $notification_icon . '"></i> Response!</h5>
' . $notification_message . '
</div>';
            $model->redirect('../view/pages/viewer.php');
            return;
        }
    } elseif (isset($_POST['modify_member_church_data']) && base64_decode($_POST['modify_member_church_data']) == 'modify_member_church_data_form') {
        //Update Contact
        $member_data = array(
            'membership_status' => $member_status,
            'assemblyid' => $current_assembly,
            'year_joined' => $year_joined,
            'classid' => $sunday_school,
            'department_id' => $department,
            'occupation_id' => $occupation,
        );
        $condition = array(
            'form_number' => $_SESSION['mem_reference'],
        );
        $update_data = $model->upDate($tblName, $member_data, $condition);

        if ($update_data) {
            // Record Log Access
            $tablename = 'log';
            $logdata = array(
                'user_name' => $_SESSION['active'],
                'activity' => 'Church-Data Modification',
                'uip' => $_SERVER['REMOTE_ADDR'],
                'description' => 'Successful - Church Data Modification for ' . $_SESSION['mem_reference'],
            );
            $insert = $model->insert_data($tablename, $logdata);

            $notification_alert = 'alert-success';
            $notification_icon = 'icon fas fa-check';
            $notification_message .= 'Church Data has been updated for user with form number ' . $_SESSION['mem_reference'];
            $_SESSION['msg'] =
                '<div class="alert ' . $notification_alert . ' alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<h5><i class="' . $notification_icon . '"></i> Response!</h5>
' . $notification_message . '
</div>';
            $model->redirect('./router.php?pageid=' . base64_encode("modify_member") . '&mem_reference=' . base64_encode($_SESSION['mem_reference']));
        } else {
            //Error Message when  Biodata cannot be updated
            $notification_alert = 'alert-danger';
            $notification_icon = 'icon fas fa-ban';
            $notification_message .= 'Ooops! This operation failed. Kindly try again';
            $_SESSION['msg'] =
                '<div class="alert ' . $notification_alert . ' alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<h5><i class="' . $notification_icon . '"></i> Response!</h5>
' . $notification_message . '
</div>';
            $model->redirect('../view/pages/viewer.php');
            return;
        }
    } elseif (isset($_POST['search_member']) && base64_decode($_POST['search_member']) == 'search_member_form') {
        //Search Member
        $condition = array(
            'return_type' => 'single',
            'where' => array(
                'form_number' => htmlspecialchars($_POST['search_index']),
            )
        );
        $search_data = $model->getRows($tblName, $condition);
        if (!empty($search_data)) {
            if (!is_null($search_data['membership_number'])) {

                $notification_alert = 'alert-success';
                $notification_icon = 'icon fas fa-check';
                $notification_message .= 'Record found for form number :: ' . $_POST['search_index'];
                $_SESSION['msg'] =
                    '<div class="alert ' . $notification_alert . ' alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="' . $notification_icon . '"></i> Response!</h5>
                        ' . $notification_message . '
                </div>';
                $model->redirect('./router.php?pageid=' . base64_encode("card_member") . '&mem_reference=' . base64_encode($_POST['search_index']));
            } else {
                //Error Message when  Form is not yet validated
                $notification_alert = 'alert-danger';
                $notification_icon = 'icon fas fa-ban';
                $notification_message .= 'Member Data has not been validated';
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
            //Error Message when  Form number is incorrect
            $notification_alert = 'alert-danger';
            $notification_icon = 'icon fas fa-ban';
            $notification_message .= $_POST['search_index'] . ' is an incorrect Form Number';
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