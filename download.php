<?php
    session_start();
    require_once 'db.php';

    if(empty($_SESSION['download_file'])){
        die('Không có nội dung để tải');
    }
    if(empty($_GET['fileId'])){
        die('Link download không hợp lệ');
    }

    $id = $_GET['fileId'];
    $filePath = $_SESSION['download_file'][$id];


    if(!file_exists($filePath)){
        die('Tập tin không tồn tại');
    }

    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($filePath).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($filePath));
    flush(); // Flush system output buffer
    readfile($filePath);

    if(isset($_GET['user']) && isset($_GET['app']) ){
        download($_GET['user'],$_GET['app']);
    }

?>