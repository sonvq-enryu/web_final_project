<?php
    session_start();
    require_once 'db.php';
    $app = get_all_idandname_apps();
    $result = array();
    if(isset($_POST['keyword'])){
        $keyword = strtolower($_POST['keyword']);
        foreach($app['data'] as $item){
            $temp = strtolower($item['name']);
            $uid = $_SESSION['app_id'][$item['id']];
            $item['fileId'] = $uid;
            if (strpos($temp,$keyword) !== false){
                $result[] = $item;
            }
        }
        $reponse = array();
        $reponse['code'] = 0;
        $reponse['message'] = "Tìm thấy " . count($result) . ' kết quả';
        $reponse['data'] = $result;


        print_r(json_encode($reponse));

    }
?>