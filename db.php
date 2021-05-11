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

        $sql = "SELECT * FROM aplication";
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

        $sql = "SELECT id,name FROM aplication";
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
        $sql = "SELECT * FROM aplication WHERE developer = ?";
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

        $sql = "SELECT * FROM aplication ORDER BY install DESC LIMIT 9";
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

        $sql = "SELECT * FROM aplication ORDER BY install DESC LIMIT 50";
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

        $sql = "SELECT * FROM aplication ORDER BY stars DESC LIMIT 9";
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

        $sql = "SELECT * FROM aplication ORDER BY stars DESC LIMIT 50";
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

        $sql = "SELECT * FROM aplication ORDER BY updated DESC LIMIT 9";
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

        $sql = "SELECT * FROM aplication ORDER BY updated DESC LIMIT 50";
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

        $sql = "select content from aplication";
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
        
        $query = 'select * from aplication where name like ?';
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


    function update_user_info($email, $fname, $lname, $phone) {
        $query = "update account set firstname = ?, lastname = ?, phone = ? where email = ?";
        $conn = open_database();

        $stm = $conn->prepare($query);
        $stm->bind_param('ssss', $fname, $lname, $phone, $email);

        if (!$stm->execute()) {
            return array("code" => 1, "message" => "Cannot execute command");
        }
        
        return array("code" => 0, "message" => "Update information successful");
    }

?>