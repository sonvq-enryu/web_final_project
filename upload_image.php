<?php
    require_once('db.php');
    define('MB', 1048576);
    $valid_exts = array("jpeg", "jpg", "png", "gif");
    $path = './user_img/';
    if (isset($_POST['email']) && !empty($_FILES['upload_img']["name"])) {
        $img = $_FILES["upload_img"]["name"];
        $tmp = $_FILES["upload_img"]["tmp_name"];

        $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));

        
        if ($_FILES['upload_img']["size"] > 20 * MB) {
            $result = array("code" => 2, "Image size not larger than 20MB");
        }
        else if ($_FILES['upload_img']['error']) {
            $result = array("code" => 4, "message" => "Error when uploading");
        }
        else if (in_array($ext, $valid_exts)) {
            $list_images = scandir($path);
            $img_final_name = generate_image_name().$img;
            $img_path = $path.strtolower($img_final_name);
            while (in_array($img_final_name, $list_images)) {
                $img_final_name = generate_image_name().$img;
                $img_path = $path.strtolower($img_final_name);
            }
            if (move_uploaded_file($tmp, $img_path)) {
                $result = replace_new_image($_POST['email'], $img_path);   
            }
            else {
                $result = array("code" => 3, "message" => "Some error has occurred");
            }
        }
        else {
            $result = array("code" => 1, "message" => "Invalid file type");
        }
    }
    else {
        $result = array("code" => 6, "message" => "Please choose an image to upload");
    }
    print_r(json_encode($result));

?>