<?php
require_once 'db.php';
if(isset($_GET['image']) && isset($_GET['name'])){
    if(isset($_GET['user']) && isset($_GET['app'])){
        $user_id = $_GET['user'];
        $app_id = $_GET['app'];
        $download = download($user_id, $app_id);
        if($download['code']!=0) die($download['message']);
    }
    $name = $_GET['name'];
    $image = $_GET['image'];
    $files = array('downloaded.docx',$image);

    # create new zip opbject
    $zip = new ZipArchive();

    # create a temp file & open it
    $tmp_file = tempnam('.','');
    $zip->open($tmp_file, ZipArchive::CREATE);

    # loop through each file
    foreach($files as $file){

        # download file
        $download_file = file_get_contents($file);

        #add it to the zip
        $zip->addFromString(basename($file),$download_file);

    }

    # close zip
    $zip->close();

    # send the file to the browser as a download
    header('Content-disposition: attachment; filename='.$name.'.zip');
    header('Content-type: application/zip');
    readfile($tmp_file);
}
else
echo "App is not defined.";
?>