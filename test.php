<?php

require_once 'db.php';
// buy('1','A171');
send_recepit('lnmtuan1702@gmail.com','Freefire',350);
// define('HOST','127.0.0.1');
// define('USER','root');
// define('PASS','');
// define('DB','googleplay');
// $string = file_get_contents("ggplay3.json");
// $json = json_decode($string, true);

// // print_r($json);

// function open_database(){
//     $conn = new mysqli(HOST, USER, PASS, DB);
//     if ($conn->connect_error) die('Connect error: ' . $conn->connect_error);
//     return $conn;
// }

// $conn = open_database();

// foreach($json as $array){
//     echo $array['Updated'];
//     $install = $array['Installs'];
//     $punc = array(",","+");
//     $install = intval(str_replace($punc, "",  $install));
//     $id = "A".$array['#untitled'];
//     $size = $array['Size'];
//     $date = $array['Updated'];
//     $date = strtotime($date); 
//     $date = strval($date);
//     if (!preg_match('/[0-9]+[MG]$/', $size)){
//         $size = '69M';
//     }
//     if ($date == ''){
//         $date = '1616968800';
//     }
//     $sql = "insert into aplication(id,name,price,stars,updated,size,install,developer,image,content) values (?,?,?,?,?,?,?,?,?,?)";
//     $stm = $conn->prepare($sql);
//     $stm->bind_param('ssidssisss',$id, $array['Name'], $array['Price'],  $array['Stars'], $date ,$size, $install, $array['Offered By'], $array['Image'],$array['Content Rating']);
//     $stm->execute();
// }

// print_r($json);
// foreach($json as $array){
//     $id = $array['#untitled'];
//     $date = $array['Updated'];
//     $date = strtotime($date); 
//     $date = strval($date);
//     // echo date('m/d/Y', $date)."\n";
//     $sql = 'update aplication set updated = ? where id = ?';
//     $stm = $conn->prepare($sql);
//     $stm->bind_param('ss', $date, $id);
//     $stm->execute();
// }


// $jsonIterator = new RecursiveIteratorIterator(
//     new RecursiveArrayIterator(json_decode($json, TRUE)),
//     RecursiveIteratorIterator::SELF_FIRST);

// foreach ($jsonIterator as $key => $val) {
//     if(is_array($val)) {
//         echo "$key:\n";
//     } else {
//         echo "$key => $val\n";
//     }
// }
// $myfile = fopen(, "r") or die("Unable to open file!");
// echo fread($myfile,filesize("ggplay2.json"));
// fclose($myfile);
?>