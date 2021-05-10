<?php
    require_once('db.php');
    session_start();

    if (isset($_POST['email']) && isset($_POST['password'])) {
        $user = $_POST['email'];
        $pwd = $_POST['password'];

        $query = "select * from account where email = ?";
        $conn = open_database();

        $stm = $conn->prepare($query);
        $stm->bind_param('s', $user);
        
        if (!$stm->execute()) {
            $data = array("code" => 1, "message" => "Cannot execute"); # không thể thực thi code
        }
        else {
            $result = $stm->get_result();
            if ($result->num_rows == 0) {
                $data = array("code" => 2, "message" => "Username not exist"); # không tồn tại username này.
            }
            else {
                $row = $result->fetch_assoc();
                $hashed_pwd = $row['password'];
    
                if (!password_verify($pwd, $hashed_pwd)) {
                    $data = array("code" => 3, "message" => "Password not matching"); # sai mật khẩu
                }
                else {
                    $data = array("code" => 0, "message" => "Login successful");

                    $_SESSION['username'] = $user;
                    $_SESSION['fullname'] = $row['firstname'] . $row['lastname'];
                }
            }
            
        }
    }

    print_r(json_encode($data));
?>