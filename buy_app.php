<?php
    require_once('db.php');

    if (isset($_POST['app_id']) && isset($_POST['user_id'])) {
        $app_id = $_POST['app_id'];
        $user_id = $_POST['user_id'];

        $result = buy($user_id, $app_id);

       
    }
    print_r(json_encode($result));
?> 