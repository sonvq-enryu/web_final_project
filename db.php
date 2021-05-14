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

        $sql = "SELECT * FROM application";
        $stm = $conn->prepare($sql);
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

        $sql = "SELECT id,name FROM application";
        $stm = $conn->prepare($sql);
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
        $sql = "SELECT * FROM application WHERE developer = ?";
        $stm = $conn->prepare($sql);
        $stm->bind_param("s",$dev);
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

        $sql = "SELECT * FROM application ORDER BY install DESC LIMIT 9";
        $stm = $conn->prepare($sql);
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

        $sql = "SELECT * FROM application ORDER BY install DESC LIMIT 50";
        $stm = $conn->prepare($sql);
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

        $sql = "SELECT * FROM application ORDER BY stars DESC LIMIT 9";
        $stm = $conn->prepare($sql);
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

        $sql = "SELECT * FROM application ORDER BY stars DESC LIMIT 50";
        $stm = $conn->prepare($sql);
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

        $sql = "SELECT * FROM application ORDER BY updated DESC LIMIT 9";
        $stm = $conn->prepare($sql);
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

        $sql = "SELECT * FROM application ORDER BY updated DESC LIMIT 50";
        $stm = $conn->prepare($sql);
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

        $sql = "SELECT * FROM application WHERE price <> 0 ORDER BY install DESC LIMIT 9";
        $stm = $conn->prepare($sql);
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

        $sql = "SELECT * FROM application WHERE price <> 0 ORDER BY install DESC LIMIT 50";
        $stm = $conn->prepare($sql);
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

        $sql = "select content from application";
        $conn = open_database();
        $stm = $conn->prepare($sql);
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
        
        $query = 'select * from application where name like ?';
        $conn = open_database();

        $stm = $conn->prepare($query);
        $stm->bind_param('s', $keyword);

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
        $sql = "INSERT INTO account(id, firstname, lastname, email, password, phone, gender, national, role, money) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $conn = open_database();

        $stm = $conn->prepare($sql); 
        $stm->bind_param("ssssssiiii", $last_id, $firstname, $lastname, $email, $hash, $phone, $gender, $national, $role_default, $money_default);


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
        $sql = "SELECT * FROM comment_rating WHERE application_id = ?";
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


    // REVIEW APP
    if(isset($_POST['path']) && isset($_POST['application-id']) && isset($_POST['user-id']) && isset($_POST['rating']) && isset($_POST['user-own-review'])){
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
?>