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
  
    function get_all_pending_apps(){
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
    function check_pending_apps($id){
        $conn = open_database();
        $sql = "select * FROM pending_application WHERE app_id = ?";
        $stm = $conn->prepare($sql);
        $stm->bind_param("s",$id);
        if (!$stm->execute()) return array('code'=>1, 'error' => 'Can not execute command');
        $result = $stm->get_result();
        $data = $result;

        // if($result->num_rows == 0) return array('code' => 2, 'error' => "Don't have any app");

        // while ($item = $result->fetch_assoc()){
        //     $data[] = $item;
        // }

        return array('code'=>0, 'data'=>$data);
    }
    function edit_app_status($id,$status){
        $sql = "update pending_application SET status = ?  WHERE app_id = ?";
        $conn = open_database();
        $stm = $conn->prepare($sql);
        $stm->bind_param('ss',$status,$id);
        if(!$stm->execute()){
            return array('code' => 2, 'error' => 'Can not execute command');
        }
        
        return array('code' => 0, 'message' => 'App status changed successful');
    }
    function push_app($app_id,$name,$price,$updated,$size,$developer,$image,$content,$description){
        $sql = "insert into application (id, name, price, updated, size, developer, image, content, description) value (?,?,?,?,?,?,?,?,?) ";
        $conn = open_database();
        $stm = $conn->prepare($sql);
        $stm->bind_param('ssissssss',$app_id,$name,$price,$updated,$size,$developer,$image,$content,$description);
        if(!$stm->execute()){
            return array('code' => 2, 'error' => 'Can not execute command');
        }
        
        return array('code' => 0, 'message' => 'App had been published');
    }
?>