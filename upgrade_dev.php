<?php
    require_once('db.php');

    $upgrade_fee = 500000;
    if (isset($_POST['dev']) && isset($_POST['email'])) {
        $email = $_POST['email'];
        if (is_dev_exist($_POST['dev'])) {
            $result = array("code" => 1, "message" => "This developer name existed, please choose another name");
        }
        else {
            $current = get_current_money($email);
            if ($current == -1) {
                $result = array("code" => 1, "message" => "Some error has occured");
            }
            else {
                $money = $current - $upgrade_fee;
                if ($money < 0) {
                    $result = array("code" => 1, "message" => "Your account not enough money");
                }
                else {
                    $result = upgrade_to_developer($email, $money, $_POST['dev']);
                }
            }
        }
    }
    print_r(json_encode($result));
?>