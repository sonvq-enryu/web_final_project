<?php
    require_once('db.php');

    if (isset($_POST['email']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['phone'])) {
        $email = $_POST['email'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $phone = $_POST['phone'];
        $result = update_user_info($email, $firstname, $lastname, $phone, $_POST['national'], $_POST['gender']);
        // print_r(json_encode($_POST));
    }

    print_r(json_encode($result));
?>