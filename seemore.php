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

    $popular_app = get_popular_apps();
    if($popular_app['code']!=0){
        die($popular_app['error']);
    }

    $recommend_app = get_recommend_apps();
    if($recommend_app['code']!=0){
        die($recommend_app['error']);
    }

    $lastest_app = get_lastest_apps();
    if($lastest_app['code']!=0){
        die($lastest_app['error']);
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
        <div class="apps-row">
            <div class="app-card">
                <div class="app-img">
                    <a href="#GameX"><img src="./image/smuge_the_cat.jpg" /></a>
                </div>
                <div class="app-name">
                    <a href="#GameX">Game X</a>
                </div>
                <div class="app-coop">
                    <a href="#X-Cooporation">X Cooporation</a>
                </div>
                <div class="rating">
                    4.5<span class="fa fa-star checked"></span></p>
                </div>
            </div>
            <div class="app-card">
                <div class="app-img">
                    <a href="#GameX"><img src="./image/smuge_the_cat.jpg" /></a>
                </div>
                <div class="app-name">
                    <a href="#GameX">Game X</a>
                </div>
                <div class="app-coop">
                    <a href="#X-Cooporation">X Cooporation</a>
                </div>
                <div class="rating">
                    4.5<span class="fa fa-star checked"></span></p>
                </div>
            </div>
            <div class="app-card">
                <div class="app-img">
                    <a href="#GameX"><img src="./image/smuge_the_cat.jpg" /></a>
                </div>
                <div class="app-name">
                    <a href="#GameX">Game X</a>
                </div>
                <div class="app-coop">
                    <a href="#X-Cooporation">X Cooporation</a>
                </div>
                <div class="rating">
                    4.5<span class="fa fa-star checked"></span></p>
                </div>
            </div>
            <div class="app-card">
                <div class="app-img">
                    <a href="#GameX"><img src="./image/smuge_the_cat.jpg" /></a>
                </div>
                <div class="app-name">
                    <a href="#GameX">Game X</a>
                </div>
                <div class="app-coop">
                    <a href="#X-Cooporation">X Cooporation</a>
                </div>
                <div class="rating">
                    4.5<span class="fa fa-star checked"></span></p>
                </div>
            </div>
            <div class="app-card">
                <div class="app-img">
                    <a href="#GameX"><img src="./image/smuge_the_cat.jpg" /></a>
                </div>
                <div class="app-name">
                    <a href="#GameX">Game X</a>
                </div>
                <div class="app-coop">
                    <a href="#X-Cooporation">X Cooporation</a>
                </div>
                <div class="rating">
                    4.5<span class="fa fa-star checked"></span></p>
                </div>
            </div>
            <div class="app-card">
                <div class="app-img">
                    <a href="#GameX"><img src="./image/smuge_the_cat.jpg" /></a>
                </div>
                <div class="app-name">
                    <a href="#GameX">Game X</a>
                </div>
                <div class="app-coop">
                    <a href="#X-Cooporation">X Cooporation</a>
                </div>
                <div class="rating">
                    4.5<span class="fa fa-star checked"></span></p>
                </div>
            </div>
            <div class="app-card">
                <div class="app-img">
                    <a href="#GameX"><img src="./image/smuge_the_cat.jpg" /></a>
                </div>
                <div class="app-name">
                    <a href="#GameX">Game X</a>
                </div>
                <div class="app-coop">
                    <a href="#X-Cooporation">X Cooporation</a>
                </div>
                <div class="rating">
                    4.5<span class="fa fa-star checked"></span></p>
                </div>
            </div>
            <div class="app-card">
                <div class="app-img">
                    <a href="#GameX"><img src="./image/smuge_the_cat.jpg" /></a>
                </div>
                <div class="app-name">
                    <a href="#GameX">Game X</a>
                </div>
                <div class="app-coop">
                    <a href="#X-Cooporation">X Cooporation</a>
                </div>
                <div class="rating">
                    4.5<span class="fa fa-star checked"></span></p>
                </div>
            </div>
            <div class="app-card">
                <div class="app-img">
                    <a href="#GameX"><img src="./image/smuge_the_cat.jpg" /></a>
                </div>
                <div class="app-name">
                    <a href="#GameX">Game X</a>
                </div>
                <div class="app-coop">
                    <a href="#X-Cooporation">X Cooporation</a>
                </div>
                <div class="rating">
                    4.5<span class="fa fa-star checked"></span></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>