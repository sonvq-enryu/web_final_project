<?php
    require_once('db.php');

    if (isset($_POST['email']) && isset($_POST['serial'])) {
        $result = request_topup($_POST['email'], $_POST['serial']);        
    }

    print_r(json_encode($result));
?>