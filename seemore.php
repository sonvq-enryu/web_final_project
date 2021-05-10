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
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<?php
    require_once 'db.php';

    $app = array();

    $app =  get_all_apps();
    if($app['code']!=0){
        die($app['error']);
    }


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

    if(isset($_GET['dev'])){
        $dev = $_GET['dev'];
        $app = get_dev_apps($dev);
        if($app['code']!=0){
            die($app['error']);
        }
    }

    if(isset($_GET['cate'])){
        $cate = $_GET['cate'];
        $apps = get_all_apps();

        $result = array();
        if($apps['code']!=0){
            die($apps['error']);
        }

        foreach($apps['data'] as $item){
            if (strpos($item['content'],$cate) !== false){
                $result[] = $item;
            }
        }

        $app = array();
        $app['data'] = $result;
    }

    if(isset($_GET['rated'])){
        $rated = $_GET['rated'];
        $rated = rtrim($rated," ")."+";
        $apps = get_all_apps();

        $result = array();
        if($apps['code']!=0){
            die($apps['error']);
        }

        foreach($apps['data'] as $item){
            if (strpos($item['content'],$rated) !== false){
                $result[] = $item;
            }
        }

        $app = array();
        $app['data'] = $result;
    }

    if (isset($_GET['keyword'])) {
        $keyword = $_GET['keyword'];
        $app = search($keyword);
        
        if ($app['code'] != 0) {
            $message = 'Không tìm thấy';
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
                <li><a href="index.php">Home</a></li>
                <li><a href="#news">News</a></li>
                <li><a href="footer.php">Contact</a></li>
                <li><a href="#about">About</a></li>
            </ul>
        </div>
        <div class='content seemore'>
            <div class="apps-row">
                <?php
                    if (isset($message)) {
                        echo "<p>Không tìm thấy ứng dụng</p>";
                    }
                    foreach($app['data'] as $item){
                        ?>
                            <div class="app-card">
                                <div class="app-img">
                                    <a href="application.php?id=<?= $item['id'] ?>"><img src="<?= $item['image'] ?>" /></a>
                                </div>
                                <div class="app-name">
                                    <a href="application.php?id=<?= $item['id'] ?>"><?= $item['name'] ?></a>
                                </div>
                                <div class="app-coop">
                                    <a href="seemore.php?dev=<?= $item['developer'] ?>"><?= $item['developer'] ?></a>
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
<script src="main.js"></script>
</html>