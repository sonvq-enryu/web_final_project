<?php
    define('HOST','localhost');
    define('USER','root');
    define('PASS','');
    define('DB','googleplay');

    function open_database(){
        $conn = new mysqli(HOST, USER, PASS, DB);
        if ($conn->connect_error) die('Connect error: ' . $conn->connect_error);
        return $conn; 
    }
    function upload_app($developer,$appname,$price,$date,$size,$icon,$appcategory,$desc,$status,$file){
        $sql = 'insert into pending_application (developer, name, price, date, size, image, content, description, status, file) value (?,?,?,?,?,?,?,?,?,?)';

        $conn = open_database();
        $stm = $conn->prepare($sql);

        $stm->bind_param('ssisisssss',$developer,$appname,$price,$date,$size,$icon,$appcategory,$desc,$status,$file);
        if(!$stm->execute()){
            return array('code' => 2, 'error' => 'Can not execute command');
        }

        return array('code' => 0, 'message' => 'Add successful');
    }
   
    function get_uploadapp(){
        $sql = 'select * from pending_application';

        $conn = open_database();
        $stm = $conn->prepare($sql);
        if(!$stm->execute()){
            return array('code' => 2,'error'=> 'Can not execute command');
        }

        $result = $stm->get_result();
        if ($result->num_rows == 0){
            return array('code'=> 1, 'error'=> 'No app');
        }
        $data = array();
        while($row = $result->fetch_assoc()){
            $data[] = $row;
        }
        return array('code' => 0,'message'=> 'success','data'=>$data);
    }
    function get_pending_apps($id){
        $conn = open_database();
        $sql = "select * FROM pending_application WHERE app_id = ?";
        $stm = $conn->prepare($sql);
        $stm->bind_param("i",$id);
        if (!$stm->execute()) return array('code'=>1, 'error' => 'Can not execute command');
        $result = $stm->get_result();
        $data = array();

        if($result->num_rows == 0) return array('code' => 2, 'error' => "Don't have any app");

        while ($item = $result->fetch_assoc()){
            $data[] = $item;
        }

        return array('code'=>0, 'data'=>$data);
    }
?>