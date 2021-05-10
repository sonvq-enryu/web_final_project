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




?>