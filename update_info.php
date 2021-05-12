<?php
    require_once('db.php');

    if (isset($_POST['email']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['phone'])) {
        $email = $_POST['email'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $phone = $_POST['phone'];

        $result = update_user_info($email, $firstname, $lastname, $phone);
    }

    print_r(json_encode($result));
?>