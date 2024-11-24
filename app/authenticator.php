<?php
include 'query.php';

$tblName = 'book_of_life';
$tablename = 'log';

// Check if log-in form is submitted from website
if (isset($_POST['login_button']) && $_POST['login_button'] === 'do_login') {

    // Retrieve form input
    if (isset($_POST["username"])) {
        if (!isset($_POST["username"])) {
            $notification_message .= 'Username field must not be empty!.<br/>';
        } else {
            $userid = htmlspecialchars($_POST["username"]);
        }
    }

    if (isset($_POST["password"])) {
        if (!isset($_POST["password"])) {
            $notification_message .= 'Password field must not be empty!.<br/>';
        } else {
            $userpwd = htmlspecialchars($_POST["password"]);
        }
    }

    //check if username exist 

    $conditions = array(
        'return_type' => 'count',
        'where' => array(
            'user_name' => $userid,
        )
    );
    $confirm_user = $model->getRows($tblName, $conditions);


    if ($confirm_user == 1) {

        //select password 
        $conditions = array(
            'return_type' => 'single',
            'where' => array(
                'user_name' => $userid,
            )
        );
        $login_details = $model->getRows($tblName, $conditions);

        //Check Password


        if (isset($login_details['user_password'])) {
            $password = $login_details['user_password'];
        }
        if (base64_decode($password) === $userpwd) {
            //Check Active Status
            if (isset($login_details['access_status']) && $login_details['access_status'] == 1) {

                // Record Log Access
                $logdata = array(
                    'user_name' => $userid,
                    'activity' => 'Login Attempt',
                    'uip' => $_SERVER['REMOTE_ADDR'],
                    'description' => 'Successful - Access Granted',
                );
                $insert = $model->insert_data($tablename, $logdata);

                $notification_alert = 'alert-success';
                $notification_icon = 'icon fas fa-check';
                $notification_message .= 'You have been Successfully Logged in';
                $_SESSION['msg'] =
                    '<div class="alert ' . $notification_alert . ' alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="' . $notification_icon . '"></i> Response!</h5>
                    ' . $notification_message . '
                </div>';
                $_SESSION['active'] = $userid;
                $model->redirect('./router.php?pageid='.base64_encode('portal_dashboard'));
            } else {
                $logdata = array(
                    'user_name' => $userid,
                    'activity' => 'Login Attempt',
                    'uip' => $_SERVER['REMOTE_ADDR'],
                    'description' => 'Unsuccessful - Access Denied',
                );
                $insert = $model->insert_data($tablename, $logdata);
                $notification_alert = 'alert-danger';
                $notification_icon = 'icon fas fa-ban';
                $notification_message .= 'Access Denied! Contact administrator.<br/>';

                $_SESSION['msg'] =
                    '<div class="alert ' . $notification_alert . ' alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="' . $notification_icon . '"></i> Response!</h5>
                    ' . $notification_message . '
                </div>';
                $model->redirect('../view/index.php');
            }
        } else {
            // Record Log Access for incorrect password

            $logdata = array(
                'user_name' => $userid,
                'activity' => 'Login Attempt',
                'uip' => $_SERVER['REMOTE_ADDR'],
                'description' => 'Unsuccessful - Wrong Password',
            );
            $insert = $model->insert_data($tablename, $logdata);
            $notification_alert = 'alert-danger';
            $notification_icon = 'icon fas fa-ban';
            $notification_message .= 'Access Denied! Invalid Login Credentials!.<br/>';

            $_SESSION['msg'] =
                '<div class="alert ' . $notification_alert . ' alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="' . $notification_icon . '"></i> Response!</h5>
                    ' . $notification_message . '
                </div>';
            $model->redirect('../view/index.php');
        }
    } else {

        //invalid Username

        $logdata = array(
            'user_name' => $userid,
            'activity' => 'Login Attempt',
            'uip' => $_SERVER['REMOTE_ADDR'],
            'description' => 'Unsuccessful - Invalid Username',
        );
        $insert = $model->insert_data($tablename, $logdata);
        $notification_alert = 'alert-danger';
        $notification_icon = 'icon fas fa-ban';
        $notification_message .= 'Invalid Login Credentials!';

        $_SESSION['msg'] =
            '<div class="alert ' . $notification_alert . ' alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="' . $notification_icon . '"></i> Response!</h5>
                    ' . $notification_message . '
                </div>';
        $model->redirect('../view/index.php');
    }
}elseif(isset($_POST['log_out_user']) && base64_decode($_POST['log_out_user']) == 'log_out_user_form') {
    $model->log_out_user();
    session_start();
    $notification_alert = 'alert-success';
    $notification_icon = 'icon fas fa-ban';
    $notification_message .= 'Logged out successfully.<br/>';

    $_SESSION['msg'] =
        '<div class="alert ' . $notification_alert . ' alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="' . $notification_icon . '"></i> Response!</h5>
                    ' . $notification_message . '
                </div>';
    $model->redirect('../view/index.php');
}else {
    $notification_alert = 'alert-danger';
    $notification_icon = 'icon fas fa-ban';
    $notification_message .= 'Access Denied! You are attempting login from an unsecured page.<br/>';

    $_SESSION['msg'] =
        '<div class="alert ' . $notification_alert . ' alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="' . $notification_icon . '"></i> Response!</h5>
                    ' . $notification_message . '
                </div>';
    $model->redirect('../view/index.php');
}
