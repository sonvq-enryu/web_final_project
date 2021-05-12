<?php
    require_once('db.php');

    if (isset($_POST['old-password']) && isset($_POST['new-password']) && isset($_POST['email'])) {
        $result = change_password($_POST['email'], $_POST['old-password'], $_POST['new-password']);
    }
    print_r(json_encode($result));
?>