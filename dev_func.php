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
    function test_upload_app($developer,$appname,$price,$date,$desc,$status){
        $sql = 'insert into pending_application(developer, name, price, date,  description, status) value (?,?,?,?,?,?)';

        $conn = open_database();
        $stm = $conn->prepare($sql);

        $stm->bind_param('ssisss',$developer,$appname,$price,$date,$desc,$status);
        if(!$stm->execute()){
            return array('code' => 2, 'error' => 'Can not execute command');
        }

        return array('code' => 0, 'message' => 'Add successful');
    }
    function test_product($appname,$price,$description){
        $sql = "insert into account (firstname, lastname, email) values (?,?,?);";


        $conn = open_database();
        $stm = $conn->prepare($sql);
        $stm->bind_param('sss',$appname,$price,$description);

        if(!$stm->execute()){
            return array('code' => 2, 'error' => 'Can not execute command');
        }
        return array('code' => 0, 'error' => 'Add successful');
    }
?>