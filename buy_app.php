<?php
    require_once('db.php');

    if (isset($_POST['user_email']) && isset($_POST['app_name']) && isset($_POST['app_price']) && isset($_POST['app_id']) && isset($_POST['user_id'])) {
        $app_id = $_POST['app_id'];
        $user_id = $_POST['user_id'];
        $user_email = $_POST['user_email'];
        $app_price = $_POST['app_price'];
        $app_name = $_POST['app_name'];
        send_recepit($user_email,$app_name,$app_price);
        $result = buy($user_id, $app_id);
        
        
       
    }
    print_r(json_encode($result));
    
?> 