<?php
    require_once 'db.php';
    $app = get_all_apps();
    $result = array();
    if(isset($_POST['keyword'])){
        $keyword = strtolower($_POST['keyword']);
        foreach($app['data'] as $item){
            $temp = strtolower($item['name']);
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