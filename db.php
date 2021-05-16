<?php

    define('HOST','127.0.0.1');
    define('USER','root');
    define('PASS','');
    define('DB','googleplay');

    function open_database(){
        $conn = new mysqli(HOST, USER, PASS, DB);
        if ($conn->connect_error) die('Connect error: ' . $conn->connect_error);
        return $conn;
    }

    function get_all_apps(){
        $conn = open_database();

        $sql = "SELECT * FROM application where status = ?";
        $status = "Published";
        $stm = $conn->prepare($sql);
        $stm->bind_param('s',$status);
        if (!$stm->execute()) return array('code'=>1, 'error' => 'Can not execute command');
        $result = $stm->get_result();
        $data = array();

        if($result->num_rows == 0) return array('code' => 2, 'error' => "Don't have any app");

        while ($item = $result->fetch_assoc()){
            $data[] = $item;
        }

        return array('code'=>0, 'data'=>$data);
    }

    function get_all_idandname_apps(){
        $conn = open_database();

        $sql = "SELECT id,name FROM application where status = ?";
        $status = "Published";
        $stm = $conn->prepare($sql);
        $stm->bind_param('s',$status);
        if (!$stm->execute()) return array('code'=>1, 'error' => 'Can not execute command');
        $result = $stm->get_result();
        $data = array();

        if($result->num_rows == 0) return array('code' => 2, 'error' => "Don't have any app");

        while ($item = $result->fetch_assoc()){
            $data[] = $item;
        }

        return array('code'=>0, 'data'=>$data);
    }


    // DEVELOPER APPS

    function get_dev_apps($dev){
        $conn = open_database();
        $sql = "SELECT * FROM application WHERE developer = ? and status = ?";
        $status = "Published";
        $stm = $conn->prepare($sql);
        $stm->bind_param("ss",$dev,$status);
        if (!$stm->execute()) return array('code'=>1, 'error' => 'Can not execute command');
        $result = $stm->get_result();
        $data = array();

        if($result->num_rows == 0) return array('code' => 2, 'error' => "Don't have any app");

        while ($item = $result->fetch_assoc()){
            $data[] = $item;
        }

        return array('code'=>0, 'data'=>$data);
    }



    // POPULAR APPS

    function get_popular_top_apps(){
        $conn = open_database();

        $sql = "SELECT * FROM application where status = ? ORDER BY install DESC LIMIT 9";
        $status = "Published";
        $stm = $conn->prepare($sql);
        $stm->bind_param('s',$status);
        if (!$stm->execute()) return array('code'=>1, 'error' => 'Can not execute command');
        $result = $stm->get_result();
        $data = array();

        if($result->num_rows == 0) return array('code' => 2, 'error' => "Don't have any app");

        while ($item = $result->fetch_assoc()){
            $data[] = $item;
        }

        return array('code'=>0, 'data'=>$data);
    }

    function get_popular_apps(){
        $conn = open_database();

        $sql = "SELECT * FROM application where status = ? ORDER BY install DESC LIMIT 50";
        $status = "Published";
        $stm = $conn->prepare($sql);
        $stm->bind_param('s',$status);
        if (!$stm->execute()) return array('code'=>1, 'error' => 'Can not execute command');
        $result = $stm->get_result();
        $data = array();

        if($result->num_rows == 0) return array('code' => 2, 'error' => "Don't have any app");

        while ($item = $result->fetch_assoc()){
            $data[] = $item;
        }

        return array('code'=>0, 'data'=>$data);
    }

    // RECOMMEND APPS

    function get_recommend_top_apps(){
        $conn = open_database();

        $sql = "SELECT * FROM application where status = ? ORDER BY stars DESC LIMIT 9";
        $status = "Published";
        $stm = $conn->prepare($sql);
        $stm->bind_param('s',$status);
        if (!$stm->execute()) return array('code'=>1, 'error' => 'Can not execute command');
        $result = $stm->get_result();
        $data = array();

        if($result->num_rows == 0) return array('code' => 2, 'error' => "Don't have any app");

        while ($item = $result->fetch_assoc()){
            $data[] = $item;
        }

        return array('code'=>0, 'data'=>$data);
    }

    function get_recommend_apps(){
        $conn = open_database();

        $sql = "SELECT * FROM application where status = ? ORDER BY stars DESC LIMIT 50";
        $status = "Published";
        $stm = $conn->prepare($sql);
        $stm->bind_param('s',$status);
        if (!$stm->execute()) return array('code'=>1, 'error' => 'Can not execute command');
        $result = $stm->get_result();
        $data = array();

        if($result->num_rows == 0) return array('code' => 2, 'error' => "Don't have any app");

        while ($item = $result->fetch_assoc()){
            $data[] = $item;
        }

        return array('code'=>0, 'data'=>$data);
    }

    // LASTEST APPS

    function get_lastest_top_apps(){
        $conn = open_database();

        $sql = "SELECT * FROM application where status = ? ORDER BY updated DESC LIMIT 9";
        $status = "Published";
        $stm = $conn->prepare($sql);
        $stm->bind_param('s',$status);
        if (!$stm->execute()) return array('code'=>1, 'error' => 'Can not execute command');
        $result = $stm->get_result();
        $data = array();

        if($result->num_rows == 0) return array('code' => 2, 'error' => "Don't have any app");

        while ($item = $result->fetch_assoc()){
            $data[] = $item;
        }

        return array('code'=>0, 'data'=>$data);
    }

    function get_lastest_apps(){
        $conn = open_database();

        $sql = "SELECT * FROM application where status = ? ORDER BY updated DESC LIMIT 50";
        $status = "Published";
        $stm = $conn->prepare($sql);
        $stm->bind_param('s',$status);
        if (!$stm->execute()) return array('code'=>1, 'error' => 'Can not execute command');
        $result = $stm->get_result();
        $data = array();

        if($result->num_rows == 0) return array('code' => 2, 'error' => "Don't have any app");

        while ($item = $result->fetch_assoc()){
            $data[] = $item;
        }

        return array('code'=>0, 'data'=>$data);
    }

    // PAID APPS

    function get_paid_top_apps(){
        $conn = open_database();

        $sql = "SELECT * FROM application WHERE price <> 0 and status = ? ORDER BY install DESC LIMIT 9";
        $status = "Published";
        $stm = $conn->prepare($sql);
        $stm->bind_param('s',$status);
        if (!$stm->execute()) return array('code'=>1, 'error' => 'Can not execute command');
        $result = $stm->get_result();
        $data = array();

        if($result->num_rows == 0) return array('code' => 2, 'error' => "Don't have any app");

        while ($item = $result->fetch_assoc()){
            $data[] = $item;
        }

        return array('code'=>0, 'data'=>$data);
    }

    function get_paid_apps(){
        $conn = open_database();

        $sql = "SELECT * FROM application WHERE price <> 0 and status = ? ORDER BY install DESC LIMIT 50";
        $status = "Published";
        $stm = $conn->prepare($sql);
        $stm->bind_param('s',$status);
        if (!$stm->execute()) return array('code'=>1, 'error' => 'Can not execute command');
        $result = $stm->get_result();
        $data = array();

        if($result->num_rows == 0) return array('code' => 2, 'error' => "Don't have any app");

        while ($item = $result->fetch_assoc()){
            $data[] = $item;
        }

        return array('code'=>0, 'data'=>$data);
    }

    function get_user_downloaded_apps($user){
        $conn = open_database();
        $sql = "SELECT * FROM application WHERE id in (SELECT app_id FROM downloaded_app where user_id = ?)";
        $stm = $conn->prepare($sql);
        $stm->bind_param("s",$user);
        if (!$stm->execute()) return array('code'=>1, 'error' => 'Can not execute command');
        $result = $stm->get_result();
        $data = array();

        if($result->num_rows == 0) return array('code' => 2, 'error' => "Don't have any app");

        while ($item = $result->fetch_assoc()){
            $data[] = $item;
        }

        return array('code'=>0, 'data'=>$data);
    }

    function get_user_paid_apps($user){
        $conn = open_database();
        $sql = "SELECT * FROM application WHERE id in (SELECT app_id FROM bought_app where user_id = ?)";
        $stm = $conn->prepare($sql);
        $stm->bind_param("s",$user);
        if (!$stm->execute()) return array('code'=>1, 'error' => 'Can not execute command');
        $result = $stm->get_result();
        $data = array();

        if($result->num_rows == 0) return array('code' => 2, 'error' => "Don't have any app");

        while ($item = $result->fetch_assoc()){
            $data[] = $item;
        }

        return array('code'=>0, 'data'=>$data);
    }


    // CONTENT

    function get_content(){
        $content = array();
        $age = array();

        $sql = "select content from application where status = ?";
        $conn = open_database();
        $status = "Published";
        $stm = $conn->prepare($sql);
        $stm->bind_param('s',$status);
        if (!$stm->execute()) return array('code'=>1, 'error' => 'Can not execute command');
        $result = $stm->get_result();
        if($result->num_rows == 0) return array('code' => 2, 'error' => "Don't have any content");
        $final_result = array();
        while ($items = $result->fetch_assoc()){
            $final_result[] = $items;
        }
        foreach($final_result as $array){
            $punc = ("\n");
            $array['content'] = str_replace($punc,",",$array['content']);
            $data   = preg_split('/,/', $array['content']);
            foreach($data as $item){
                $item = preg_replace('/^ /', '', $item);
                if (preg_match('/Rated/', $item)){
                    $age[] = $item;
                }
                else{
                    $content[] = $item;
                }
            }
        }
        sort($content);
        sort($age);
        $data = array(array_unique($content), array_unique($age));
        return array('code'=>0, 'data'=>$data);
    }

    function login($user, $pwd) {
        $query = "select * from account where email = ?";
        $conn = open_database();

        $stm = $conn->prepare($query);
        $stm->bind_param('s', $user);

        if (!$stm->execute()) {
            return array("code" => 1, "message" => "Cannot execute");
        }

        $result = $stm->get_result();
        if ($result->num_rows == 0) {
            return array("code" => 2, "message" => "Username not exist");
        }

        $row = $result->fetch_assoc();
        $hashed_pwd = $row['password'];

        if (!password_verify($pwd, $hashed_pwd)) {
            return array("code" => 3, "message" => "password not matching");
        }


        return array("code" => 0, "message" => "login successful", "data" => $row);
    }

    function search($keyword) {
        $keyword = '%'. $keyword .'%';
        $status = 'Published';
        $query = 'select * from application where name like ? AND status = ?';
        $conn = open_database();
        
        $stm = $conn->prepare($query);
        $stm->bind_param('ss', $keyword,$status);

        if (!$stm->execute()) {
            return array("code" => 1, "message" => "Cannot execute");
        }
        else {
            $result = $stm->get_result();
            if ($result->num_rows == 0) {
                return array("code" => 2, "message" => "Not found");
            }
            else {
                $rows = array();
                for ($i=0; $i<$result->num_rows; ++$i) {
                    $rows[] = $result->fetch_assoc();
                }
                return array("code" => 0, "data" => $rows);
            }
        }
    }

    function get_user_info($email) {
        $query = "select * from account where email = ?";
        $conn = open_database();

        $stm = $conn->prepare($query);
        $stm->bind_param('s', $email);

        if (!$stm->execute()) {
            return array("code" => 1, "message" => "Cannot execute command");
        }
        
        $result = $stm->get_result();
        if ($result->num_rows > 0) {
            return array("code" => 0, "data" => $result->fetch_assoc());
        }
    }


    function update_user_info($email, $fname, $lname, $phone, $national, $gender) {
        $query = "update account set firstname = ?, lastname = ?, phone = ?, gender = ?, national = ? where email = ?";
        $conn = open_database();
        $national = (int)$national;
        $gender = (int)$gender;
        $stm = $conn->prepare($query);
        $stm->bind_param('sssiis', $fname, $lname, $phone, $gender, $national, $email);
        
        if (!$stm->execute()) {
            return array("code" => 1, "message" => $stm->error);
        }
        
        return array("code" => 0, "message" => "Update information successful");
    }

    function is_same_password($email, $old_password) {
        $query = "select password from account where email = ?";
        $conn = open_database();

        $stm = $conn->prepare($query);
        $stm->bind_param('s', $email);

        if (!$stm->execute()) {
            return false;
        }
        
        $result = $stm->get_result();
        $row = $result->fetch_assoc();
        $hashed_pwd = $row['password'];

        if (!password_verify($old_password, $hashed_pwd)) {
            return false;
        }
        return true;
    }


    function change_password($email, $old_password, $new_password) {
        if (!is_same_password($email, $old_password)) {
            return array("code" => 2, "message" => "Password not matching"); 
        }

        $hashed_new_pwd = password_hash($new_password, PASSWORD_DEFAULT);

        $query = "update account set password = ? where email = ?";
        $conn = open_database();

        $stm = $conn->prepare($query);
        $stm->bind_param('ss', $hashed_new_pwd , $email);

        if (!$stm->execute()) {
            return array("code" => 1, "message" => "Cannot execute command");
        }

        return array("code" => 0, "message" => "Change password successful");
    }

    function is_email_exist($email) {
        $query = "select email from account where email = ?";
        $conn = open_database();

        $stm = $conn->prepare($query);
        $stm->bind_param('s', $email);

        if (!$stm->execute()) {
            return true;
        }

        $result = $stm->get_result();
        if ($result->num_rows > 0) {
            return true;
        }

        return false;
    }

    function get_last_user_id() {
        $query = "SELECT id FROM account ORDER BY id DESC LIMIT 1";
        $conn = open_database();

        $result = $conn->query($query);
        return $result->fetch_assoc()['id'];
    }

    function increment($matches) {
        return ++$matches[1];
    }

    function register($email, $password, $firstname, $lastname, $phone, $gender, $national) {
        if (is_email_exist($email)) {
            return array("code" => 2, "message" => "Email existed");
        }
        $last_id = get_last_user_id();
        $last_id = preg_replace_callback( "|(\d+)|", "increment", $last_id);
        $gender = (int)$gender;
        $national = (int)$national;

        
        $hash = password_hash($password, PASSWORD_DEFAULT);
        
        $role_default = 2;
        $money_default = 0;
        $image_default = "./user_img/smuge_the_cat.jpg";
        $sql = "INSERT INTO account(id, firstname, lastname, email, password, phone, gender, national, role, money, image) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $conn = open_database();

        $stm = $conn->prepare($sql); 
        $stm->bind_param("ssssssiiiis", $last_id, $firstname, $lastname, $email, $hash, $phone, $gender, $national, $role_default, $money_default, $image_default);


        if (!$stm->execute()) {
            return array("code" => 1, "message" => "Cannot execute command");
        }

        return array("code" => 0, "message" => "Register successful, using account to login");
    }

    function download($user_id, $app_id){
        $sql = "INSERT INTO downloaded_app values (?,?)";
        $conn = open_database();

        $stm = $conn->prepare($sql);
        $stm->bind_param("ss",$user_id,$app_id);

        if (!$stm->execute()) {
            return array("code" => 1, "message" => "Cannot execute command");
        }

        return array("code" => 0, "message" => "Add sucessfully");

    }

    function is_downloaded($user_id, $app_id){
        $sql = "SELECT * FROM downloaded_app WHERE user_id = ? AND app_id = ?";
        $conn = open_database();

        $stm = $conn->prepare($sql); 
        $stm->bind_param("ss", $user_id, $app_id);

        if (!$stm->execute()) {
            return array("code" => 1, "message" => "Cannot execute command");
        }

        $result = $stm->get_result();
        if($result->num_rows > 0){
            return array("code" => 0, "status" => true);
        }

        return array("code" => 0, "status" => false);
    }


    // REVIEW APP
    function insert_comment_review($user_id, $app_id, $rating, $review){
        $sql = "INSERT INTO comment_rating(user_id, application_id, comment, rating) values (?,?,?,?)";
        $conn = open_database();

        $stm = $conn->prepare($sql);
        $stm->bind_param("sssd",$user_id,$app_id,$review,$rating);

        if (!$stm->execute()) {
            return array("code" => 1, "message" => "Cannot execute command");
        }

        return array("code" => 0, "message" => "Add sucessfully");

    }

    function update_comment_review($user_id, $app_id, $rating, $review){
        $sql = "UPDATE comment_rating SET comment = ?, rating = ? WHERE user_id = ? AND application_id = ?";
        $conn = open_database();

        $stm = $conn->prepare($sql);
        $stm->bind_param("sdss",$review,$rating,$user_id,$app_id);

        if (!$stm->execute()) {
            return array("code" => 1, "message" => "Cannot execute command");
        }

        return array("code" => 0, "message" => "Update sucessfully");

    }

    function select_comment_review($app_id){
        $sql = "SELECT * FROM comment_rating WHERE application_id = ? ORDER BY id DESC";
        $conn = open_database();
        $stm = $conn->prepare($sql);
        $stm->bind_param("s", $app_id);
        if (!$stm->execute()) return array('code'=>1, 'error' => 'Can not execute command');
        $result = $stm->get_result();
        $data = array();

        while ($item = $result->fetch_assoc()){
            $data[] = $item;
        }

        return array('code'=>0, 'data'=>$data);
    }


    // BUY APP

    function buy($user_id, $app_id){
        $conn = open_database();
        $sql = "SELECT * FROM account WHERE id = ?";
        $stm = $conn->prepare($sql);
        $stm->bind_param("s", $user_id);
        if (!$stm->execute()) return array('code'=>1, 'error' => 'Can not execute command');
        $result = $stm->get_result();
        $user = $result->fetch_assoc();

        $sql = "SELECT * FROM application WHERE id = ?";
        $stm = $conn->prepare($sql);
        $stm->bind_param("s", $app_id);
        if (!$stm->execute()) return array('code'=>1, 'error' => 'Can not execute command');
        $result = $stm->get_result();
        $app = $result->fetch_assoc();

        if($app['price'] > $user['money']){
            return array('code'=>2, 'error' => 'Not enough money');
        }
        else{
            $remain = (int)$user['money'] - $app['price'];
            $sql = "UPDATE account SET money = ? WHERE id = ?";
            $stm = $conn->prepare($sql);
            $stm->bind_param("is", $remain, $user_id);
            if (!$stm->execute()) return array('code'=>1, 'error' => 'Can not execute command');

            $sql = "INSERT INTO bought_app values (?,?)";
    
            $stm = $conn->prepare($sql);
            $stm->bind_param("ss",$user_id,$app_id);
    
            if (!$stm->execute()) {
                return array("code" => 1, "error" => "Cannot execute command");
            }
    
        }
        return array('code'=>0, 'message' => 'Buy Successfully');
    }

    function is_bought($user_id, $app_id){
        $sql = "SELECT * FROM bought_app WHERE user_id = ? AND app_id = ?";
        $conn = open_database();

        $stm = $conn->prepare($sql); 
        $stm->bind_param("ss", $user_id, $app_id);

        if (!$stm->execute()) {
            return array("code" => 1, "message" => "Cannot execute command");
        }

        $result = $stm->get_result();
        if($result->num_rows > 0){
            return array("code" => 0, "status" => true);
        }

        return array("code" => 0, "status" => false);
    }


    // REVIEW APP
    if(isset($_POST['action']) && isset($_POST['path']) && isset($_POST['application-id']) && isset($_POST['user-id'])){
        $action = $_POST['action'];
        if($action == 'review-section'){
            $user_id = $_POST['user-id'];
            $app_id = $_POST['application-id'];
            $rating = $_POST['rating'];
            $review = $_POST['user-own-review'];
    
            $sql = "SELECT * FROM comment_rating WHERE user_id = ? AND application_id = ?";
            $conn = open_database();
            $stm = $conn->prepare($sql);
            $stm->bind_param("ss",$user_id,$app_id);
            if(!$stm->execute()) die("Can't find app");
            $result = $stm->get_result();
    
            if($result->num_rows != 0){
                $result = update_comment_review($user_id, $app_id, $rating, $review);
            }
            else{
                $result = insert_comment_review($user_id, $app_id, $rating, $review);
            }
            if($result['code']!=0) die($result['message']);
            else header("Location:".$_POST['path']);
        }
        // else{
        //     $user_id = $_POST['user-id'];
        //     $app_id = $_POST['application-id'];
        //     $result = buy($user_id,$app_id);
        //     if ($result['code']!=0) die($result['error']);
        //     else header("Location:".$_POST['path']);
        // }  
    }

    function is_serial_exist($serial_number) {
        $sql = "select serial from card where serial = ?";
        $conn = open_database();

        $stm = $conn->prepare($sql);
        $stm->bind_param('s', $serial_number);

        if (!$stm->execute()) {
            return true;
        }

        $result = $stm->get_result();
        if ($result->num_rows > 0) {
            return true;
        }

        return false;
    }

    function generate_serial_number() {
        $chars = array(0,1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
        $serial = '';
        $max = count($chars) - 1;
        for ($i=0; $i<15; ++$i) {
            $serial .= $chars[rand(0, $max)];
        }
        return $serial;
    }

    function generate_card($value) {
        $serial = generate_serial_number();

        if (is_serial_exist($serial)) {
            return false;
        }

        $value = (int)$value;
        $default_status = 0;
        $query = 'insert into card(serial, value, status) values (?, ?, ?)';
        $conn = open_database();

        $stm = $conn->prepare($query);
        $stm->bind_param("sii", $serial, $value, $default_status);

        if (!$stm->execute()) {
            return false;
        }

        return true;
    }

    function get_cards() {
        $query = "select * from card";
        $conn = open_database();

        $stm = $conn->prepare($query);
        
        if (!$stm->execute()) {
            return array("code" => 1, "message" => "Cannot execute command");
        }

        $result = $stm->get_result();
        $data = $result->fetch_all();
        
        return array("code" => 0, "data" => $data);
    }

    function is_admin($email) {
        $query = "select * from account where email = ? and role = 0";
        $conn = open_database();

        $stm = $conn->prepare($query);
        $stm->bind_param("s", $email);

        if (!$stm->execute()) {
            return false;
        }

        $result = $stm->get_result();
        if ($result->num_rows == 0) {
            return false;
        }
        return true;
    }

    function is_card_used($serial) {
        $query = "select * from card where serial = ?";
        $conn = open_database();

        $stm = $conn->prepare($query);
        $stm->bind_param("s", $serial);

        if (!$stm->execute()) {
            return 0;
        }

        $result = $stm->get_result();
        $card = $result->fetch_assoc();
        if ($card['status'] == 1) {
            return 1;
        }

        return $card['value'];
    }

    function make_card_used($serial) {
        $query = "update card set status = ? where serial = ?";
        $conn = open_database();

        $used = 1;

        $stm = $conn->prepare($query);
        $stm->bind_param('is', $used, $serial);

        if (!$stm->execute()) {
            return false;
        }
        return true;
    }

    function add_history_topup($email, $serial) {
        $query = "insert into topup values (?, ?)";
        $conn = open_database();

        $stm = $conn->prepare($query);
        $stm->bind_param("ss", $email, $serial);

        if (!$stm->execute()) {
            return false;
        }

        return true;
    }

    function get_current_money($email) {
        $query = 'select money from account where email = ?';
        $conn = open_database();

        $stm = $conn->prepare($query);
        $stm->bind_param("s", $email);

        if (!$stm->execute()) {
            return -1;
        }

        $result = $stm->get_result();
        return $result->fetch_assoc()['money'];
    }

    function add_user_money($email, $current_money, $value) {
        $query = "update account set money = ? where email = ?";
        $conn = open_database();
    
        $new_money = $current_money + $value;

        $stm = $conn->prepare($query);
        $stm->bind_param("is", $new_money, $email);

        if (!$stm->execute()) {
            return false;
        }

        return true;
    }

    function request_topup($email, $serial) {
        if (!is_serial_exist($serial)) {
            return array("code" => 1, "message" => "This serial not existed");
        }
        $value = is_card_used($serial);
        if ($value == 0) {
            return array("code" => 2, "message" => "Some error has occurred");
        }
        else if ($value == 1) {
            return array("code" => 3, "message" => "This serial has been used");
        }

        $current_money = get_current_money($email);
        if ($current_money == -1) {
            return array("code" => 2, "message" => "Some error has occurred");
        }

        $add = add_history_topup($email, $serial);
        if ($add == false) {
            return array("code" => 2, "message" => "Some error has occurred");
        }

        
        $make = make_card_used($serial);
        if ($make == false) {
            return array("code" => 2, "message" => "Some error has occurred");
        }

        if (add_user_money($email, $current_money, $value)) {
            return array("code" => 0, "data" => $current_money + $value, "value" => $value);
        }
        return array("code" => 2, "message" => "Some error has occurred");
    }

    function get_topup_history($email) {
        $query = "select card.serial, card.value from topup, card where email = ? and card.serial = topup.serial";
        $conn = open_database();

        $stm = $conn->prepare($query);
        $stm->bind_param('s', $email);

        if (!$stm->execute()) {
            return array("code" => 1, "message" => "cannot execute command");
        }

        $result = $stm->get_result();
        if ($result->num_rows == 0) {
            return array("code" => 2, "message" => "No top up money history");
        }
        $data = $result->fetch_all();
        return array("code" => 0, "data" => $data);
    }

    function generate_image_name() {
        $chars = array(0,1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
        $serial = '';
        $max = count($chars) - 1;
        for ($i=0; $i<10; ++$i) {
            $serial .= strtolower($chars[rand(0, $max)]);
        }
        return $serial;
    }

    function replace_new_image($email, $img_path) {
        $query = "update account set image = ? where email = ?";
        $conn = open_database();

        $stm = $conn->prepare($query);
        $stm->bind_param('ss', $img_path, $email);

        if (!$stm->execute()) {
            return array("code" => 5, "message" => "Cannot execute command");
        }
        
        return array("code" => 0, "message" => "update image successful", "path" => $img_path);
    }

    function upgrade_to_developer($email, $money, $dev) {
        $query = 'update account set money = ?, dev = ?, role = ? where email = ?';
        $conn = open_database();

        $role = 1;

        $stm = $conn->prepare($query);
        $stm->bind_param("isis", $money, $dev, $role, $email);

        if (!$stm->execute()) {
            return array("code" => 1, "message" => "Some error has occured");
        }

        return array("code" => 0, "message" => "Successful");
    }

    function is_dev_exist($dev) {
        $query = 'select * from account where dev = ?';
        $conn = open_database();

        $stm = $conn->prepare($query);
        $stm->bind_param('s', $dev);

        if (!$stm->execute()) {
            return true;
        }

        $result = $stm->get_result();
        if ($result->num_rows > 0) {
            return true;
        }

        return false;
    }

    
    function reset_password($email) {
        if (!is_email_exist($email)) {
            return array("code" => 2, "message" => "Email not existed");
        }

        $default_status = 0;
        $expire = time() + (3600 *24);
        $token = md5($email . '+' . random_int(1000, 2000));
        $query = 'update reset_token set token = ?, expire = ?, status = ? where email = ?';

        $conn = open_database();
        
        $stm = $conn->prepare($query);
        $stm->bind_param("siis", $token, $expire, $default_status, $email);

        if (!$stm->execute()) {
            return array("code" => 1, "message" => "Command not execute");
        }

        if ($stm->affected_rows == 0) {
            $query = "insert into reset_token(email, token, expire, status) values (?, ?, ?, ?)";
            $stm = $conn->prepare($query);
            $stm->bind_param("ssii", $email, $token, $expire, $default_status);

            if (!$stm->execute()) {
                return array("code" => 1, "message" => "Command not execute");
            }
        }

        send_reset_mail($email, $token);
        return array("code" => 0, "message" => "Send recovery password successful");
    }

    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    //Load Composer's autoloader
    require 'vendor/autoload.php';

    function send_reset_mail($email, $token) {
        $mail = new PHPMailer(true);

        try {
            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                 
            $mail->CharSet = 'UTF-8';                          //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'castlerealestatead@gmail.com';                     //SMTP username
            $mail->Password   = 'realestate123';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom('exp.critical@gmail.com', 'Hệ thống quản lý trang web ứng dụng');
            $mail->addAddress($email, 'Người nhận');     //Add a recipient

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Khôi phục mật khẩu';
            $mail->Body    = "Nhấp vào <a href='http://localhost/web_final_project/recover.php?email=$email&token=$token'>đây</a> để khôi phục mật khẩu của bạn";      

            $mail->send();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

    function send_recepit($email, $app_name, $price) {
        $mail = new PHPMailer(true);

        try {
            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                 
            $mail->CharSet = 'UTF-8';                          //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'castlerealestatead@gmail.com';                     //SMTP username
            $mail->Password   = 'realestate123';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom('castlerealestatead@gmail.com', 'Hệ thống quản lý trang web ứng dụng');
            $mail->addAddress($email, 'Người nhận');     //Add a recipient

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Hóa đơn mua hàng';
            $mail->Body    = "Bạn vừa thanh toán thành công ".$app_name." với giá ".$price."đ";      

            $mail->send();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

    function to_new_password($email, $password) {
        $query = 'update account set password = ? where email =?';
        $conn = open_database();

        $hash = password_hash($password, PASSWORD_DEFAULT);

        $stm = $conn->prepare($query);
        $stm->bind_param("ss", $hash, $email);

        if (!$stm->execute()) {
            return array("code" => 1, "message" => "Wrong");
        }

        return array("code" => 0, "message" => "Reset password successful");
    }

    function set_token_status($email) {
        $query = 'update reset_token set status = ? where email = ?';
        $conn = open_database();

        $status = 1;
        $stm = $conn->prepare($query);
        $stm->bind_param("is", $status, $email);

        if (!$stm->execute()) {
            return array("code" => 1, "message" => "Wrong");
        }

        return array("code" => 0, "message" => "Set token status successful");
    }

    function is_valid_token($email, $token) {
        $query = 'select * from reset_token where email = ?';
        $conn = open_database();

        $stm = $conn->prepare($query);
        $stm->bind_param('s', $email);

        if (!$stm->execute()) {
            return 1;
        }

        $result = $stm->get_result();
        $data = $result->fetch_assoc();

        if ($token != $data['token']) {
            return 2;
        }

        if ($data['expire'] - time() <= 0) {
            return 3;
        }

        if ($data['status'] == 1) {
            return 4;
        }

        return 0;
    }

    function set_id_img($email, $front_img, $back_img) {
        $query = 'insert into id_img(email, front, back) values (?, ?, ?)';
        $conn = open_database();

        $stm = $conn->prepare($query);
        $stm->bind_param("sss", $email, $front_img, $back_img);

        if (!$stm->execute()) {
            return array("code" => 1, "message" => "Some error has occured");
        }

        return array("code" => 0, "message" => "Upload successful");
    }