<?php
    require_once('db.php');

    if (isset($_GET['email'])) {
        $result = get_user_info($_GET['email']);
    }
    print_r(json_encode($result));
?>