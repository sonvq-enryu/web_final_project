<?php
    require_once('db.php');

    // $result = '';
    if (isset($_POST['email'])) {
        if (!is_admin($_POST['email'])) {
            $result = array("code" => 1, "message" => "Wrong or your account is not admin account");
        }
        else {
            $result = get_cards();
        }
        print_r(json_encode($result));
    }

    // print_r(json_encode($result));
?>