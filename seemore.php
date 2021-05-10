<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/css.css">
    <title>Document</title>
</head>
<?php
    require_once 'db.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        if($id == 1){
            $app = get_popular_apps();
            if($app['code']!=0){
                die($app['error']);
            }
        }
        if($id == 2){
            $app = get_recommend_apps();
            if($app['code']!=0){
                die($app['error']);
            }
        }
        if($id == 3){
            $app = get_lastest_apps();
            if($app['code']!=0){
                die($app['error']);
            }
        }
    }
    
    $content = get_content();
    if($content['code']!=0){
        die($content['error']);
    }
    $content = $content['data'];

?>
<body onresize="resize()" class="index">
    <?php include 'index-template.php';?>
    <div class="flex-container">
        <div id="sidebar" class="sidebar">
            <ul class="menu">
                <li><a href="#home">Home</a></li>
                <li><a href="#news">News</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#about">About</a></li>
            </ul>
        </div>
        <div class='content'>
            <div class="apps-row">
                <?php
                    foreach($app['data'] as $item){
                        ?>
                            <div class="app-card">
                                <div class="app-img">
                                    <a href="#GameX"><img src="<?= $item['image'] ?>" /></a>
                                </div>
                                <div class="app-name">
                                    <a href="#GameX"><?= $item['name'] ?></a>
                                </div>
                                <div class="app-coop">
                                    <a href="#X-Cooporation"><?= $item['developer'] ?></a>
                                </div>
                                <div class="rating">
                                <?= $item['stars'] ?><span class="fa fa-star checked"></span></p>
                                </div>
                            </div>
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>
</body>
<script src="javascript/drivers.js"></script>
</html>