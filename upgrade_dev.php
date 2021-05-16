<?php
    require_once('db.php');

    // $upgrade_fee = 500000;
    // if (isset($_POST['dev']) && isset($_POST['email'])) {
    //     $email = $_POST['email'];
    //     if (is_dev_exist($_POST['dev'])) {
    //         $result = array("code" => 1, "message" => "This developer name existed, please choose another name");
    //     }
    //     else {
    //         $current = get_current_money($email);
    //         if ($current == -1) {
    //             $result = array("code" => 1, "message" => "Some error has occured");
    //         }
    //         else {
    //             $money = $current - $upgrade_fee;
    //             if ($money < 0) {
    //                 $result = array("code" => 1, "message" => "Your account not enough money");
    //             }
    //             else {
    //                 $result = upgrade_to_developer($email, $money, $_POST['dev']);
    //             }
    //         }
    //     }
    // }
    // print_r(json_encode($result));
    require_once('db.php');
    define('MB', 1048576);
    $valid_exts = array("jpeg", "jpg", "png", "gif");
    $path = './id_card_img/';
    $upgrade_fee = 500000;
    if (isset($_POST['email']) && isset($_POST['developer-name'])) {
        if (empty($_FILES['front-id-img']['name'])) {
            $result = array("code" => 1, "message" => "Please upload your front of id card image");
        }
        else if (empty($_FILES['back-id-img']['name'])) {
            $result = array("code" => 1, "message" => "Please upload your back of id card image");
        }
        else if (is_dev_exist($_POST['developer-name'])) {
            $result = array("code" => 1, "message" => "This developer name existed, please choose another name");
        }
        else if ($_FILES['front-id-img']["size"] > 20 * MB || $_FILES['front-id-img']["size"] > 20 * MB) {
            $result = array("code" => 2, "Image size not larger than 20MB");
        }
        else if ($_FILES['front-id-img']['error'] || $_FILES['back-id-img']['error']) {
            $result = array("code" => 4, "message" => "Error when uploading");
        }
        else {    
            $current = get_current_money($_POST['email']);
            if ($current == -1) {
                $result = array("code" => 1, "message" => "Some error has occured");
            }
            else {
                $money = $current - $upgrade_fee;
                if ($money < 0) {
                    $result = array("code" => 1, "message" => "Your account not enough money");
                }
                else {
                    $result = upgrade_to_developer($_POST['email'], $money, $_POST['developer-name']);
                    if ($result['code'] == 0) {
                        $front_img = $_FILES['front-id-img']['name'];
                        $back_img = $_FILES['back-id-img']['name'];
            
                        $front_ext = strtolower(pathinfo($front_img, PATHINFO_EXTENSION));
                        $back_ext = strtolower(pathinfo($back_img, PATHINFO_EXTENSION));
                        if (!in_array($front_ext, $valid_exts) || !in_array($back_ext, $valid_exts)) {
                            $result = array("code" => 1, "message" => "Invalid file type");
                        }
                        else {
                            $front_img = $_FILES['front-id-img']['name'];
                            $front_tmp = $_FILES['front-id-img']['tmp_name'];
                            $back_img = $_FILES['back-id-img']['name'];
                            $back_tmp = $_FILES['back-id-img']['tmp_name'];
            
                            $list_imgs = scandir($path);
                            $final_front_img = generate_image_name().$front_img;
                            $front_path = $path.strtolower($final_front_img);
                            $final_back_img = generate_image_name().$back_img;
                            $back_path = $path.strtolower($final_back_img);
                            while (in_array($final_front_img, $list_imgs)) {
                                $final_front_img = generate_image_name().$front_img;
                                $front_path = $path.strtolower($final_front_img);
                            }
            
                            while (in_array($final_back_img, $list_imgs)) {
                                $final_back_img = generate_image_name().$back_img;
                                $back_path = $path.strtolower($final_back_img);
                            }
                            
                            if (move_uploaded_file($front_tmp, $front_path) && move_uploaded_file($back_tmp, $back_path)) {
                                $result = set_id_img($_POST['email'], $front_path, $back_path);
                            }
                            else {
                                $result = array("code" => 1, "message" => "Some error has occured");
                            }
                        }
                    }
                }
            }
        }
        print_r(json_encode($result));
    }
