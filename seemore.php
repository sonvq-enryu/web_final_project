<?php
    // Start the session at the very top of the file
    session_start();
?>
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

        if($id == 4){
            $app = get_paid_apps();
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

        $app['data'] = $result;
    }

    if (isset($_GET['keyword'])) {
        $keyword = $_GET['keyword'];
        $app = search($keyword);
        
        if ($app['code'] != 0) {
            $message = 'Không tìm thấy';
        }
    }

    if(isset($_GET['user'])){
        $paid_app = get_user_paid_apps($_GET['user']);
        if($paid_app['code']==1){
            die($paid_app['error']);
        }
        $downloaded_app = get_user_downloaded_apps($_GET['user']);
        if($paid_app['code']==1){
            die($paid_app['error']);
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
                <?php
                    if(isset($_SESSION['id'])){
                        ?>
                            <li><a href="seemore.php?user=<?= $_SESSION['id'] ?>">My List</a></li>
                        <?php
                    }
                ?>
                <li><a href="footer.php">Contact</a></li>
                <li><a href="https://github.com/voquocson/web_final_project">About</a></li>
            </ul>
        </div>
        <div class='content seemore'>
            <div class="apps-row">
                <?php
                    if (isset($message)) {
                        echo "<br>";
                        echo "<p>Không tìm thấy ứng dụng</p>";
                    }
                    else{
                        if(isset($_GET['user'])){
                            ?>
                             <?php
                                if($downloaded_app['code'] == 0){
                                    ?>
                                    <div class="apps-menu">
                                        <div class="info-row">
                                            <h2>Downloaded App</h2>
        
                                        </div>
                                        <div class="apps-row">
                                            <?php
                                                foreach($downloaded_app['data'] as $item){
                                                    ?>
                                                        <div class="app-card">
                                                            <div class="app-img">
                                                                <a href="application.php?id=<?= $item['id'] ?>&fileId=<?= $_SESSION['app_id'][$item['id']] ?>"><img src="<?= $item['image'] ?>" /></a>
                                                            </div>
                                                            <div class="app-name">
                                                                <a href="application.php?id=<?= $item['id'] ?>&fileId=<?= $_SESSION['app_id'][$item['id']] ?>"><?= $item['name'] ?></a>
                                                            </div>
                                                            <div class="app-coop">
                                                                <a href="seemore.php?dev=<?= $item['developer'] ?>"><?= $item['developer'] ?></a>
                                                            </div>
                                                            <div class="rating">
                                                                <?= $item['stars'] ?><span class="fa fa-star checked"></span>
                                                                <?php
                                                                    if(isset($_SESSION['id'])){
                                                                        $buy = is_bought($_SESSION['id'],$item['id']);
                                                                        $download = is_downloaded($_SESSION['id'],$item['id']);
                                                                        if($download['code']!=0) die($result['message']);
                                                                        if($buy['code']!=0) die($result['message']);
                                                                        if($download['status']){
                                                                            ?>
                                                                                <p><img src="./image/download.png"></p> 
                                                                            <?php
                                                                        }
                                                                        else if($buy['status']){
                                                                            ?>
                                                                                <p>Đã mua</p> 
                                                                            <?php
                                                                        }
                                                                        else if($item['price'] !== 0 && !$download['status'] && !$buy['status']){
                                                                            ?>
                                                                                <p><?= number_format($item['price'], 0, '.', '.') ?> đ</p> 
                                                                            <?php
                                                                        }
                                                                    }
                                                                    else{
                                                                        if($item['price'] !== 0){
                                                                            ?>
                                                                                <p><?= number_format($item['price'], 0, '.', '.') ?> đ</p> 
                                                                            <?php
                                                                        }
                                                                    }
                                                                ?>
                                                            </div>
                                                        </div>
                                                    <?php
                                                }
                                            ?>
                                        </div>
                                    </div>
                                    <?php
                                }
                                
                                ?>
                                <?php
                                if($paid_app['code'] == 0){
                                    ?>
                                    <div class="apps-menu">
                                        <div class="info-row">
                                            <h2>Paid App</h2>
        
                                        </div>
                                        <div class="apps-row">
                                            <?php
                                                foreach($paid_app['data'] as $item){
                                                    ?>
                                                        <div class="app-card">
                                                            <div class="app-img">
                                                                <a href="application.php?id=<?= $item['id'] ?>&fileId=<?= $_SESSION['app_id'][$item['id']] ?>"><img src="<?= $item['image'] ?>" /></a>
                                                            </div>
                                                            <div class="app-name">
                                                                <a href="application.php?id=<?= $item['id'] ?>&fileId=<?= $_SESSION['app_id'][$item['id']] ?>"><?= $item['name'] ?></a>
                                                            </div>
                                                            <div class="app-coop">
                                                                <a href="seemore.php?dev=<?= $item['developer'] ?>"><?= $item['developer'] ?></a>
                                                            </div>
                                                            <div class="rating">
                                                                <?= $item['stars'] ?><span class="fa fa-star checked"></span>
                                                                <?php
                                                                    if(isset($_SESSION['id'])){
                                                                        $buy = is_bought($_SESSION['id'],$item['id']);
                                                                        $download = is_downloaded($_SESSION['id'],$item['id']);
                                                                        if($download['code']!=0) die($result['message']);
                                                                        if($buy['code']!=0) die($result['message']);
                                                                        if($download['status']){
                                                                            ?>
                                                                                <p><img src="./image/download.png"></p> 
                                                                            <?php
                                                                        }
                                                                        else if($buy['status']){
                                                                            ?>
                                                                                <p>Đã mua</p> 
                                                                            <?php
                                                                        }
                                                                        else if($item['price'] !== 0 && !$download['status'] && !$buy['status']){
                                                                            ?>
                                                                                <p><?= number_format($item['price'], 0, '.', '.') ?> đ</p> 
                                                                            <?php
                                                                        }
                                                                    }
                                                                    else{
                                                                        if($item['price'] !== 0){
                                                                            ?>
                                                                                <p><?= number_format($item['price'], 0, '.', '.') ?> đ</p> 
                                                                            <?php
                                                                        }
                                                                    }
                                                                ?>
                                                            </div>
                                                        </div>
                                                    <?php
                                                }
                                            ?>
                                        </div>
                                    </div>
                                    <?php
                                }
                                
                                ?>
                            <?php
    
                        }
                        else{
                            foreach($app['data'] as $item){
                                ?>
                                    <div class="app-card">
                                        <div class="app-img">
                                            <a href="application.php?id=<?= $item['id'] ?>&fileId=<?= $_SESSION['app_id'][$item['id']] ?>"><img src="<?= $item['image'] ?>" /></a>
                                        </div>
                                        <div class="app-name">
                                            <a href="application.php?id=<?= $item['id'] ?>&fileId=<?= $_SESSION['app_id'][$item['id']] ?>"><?= $item['name'] ?></a>
                                        </div>
                                        <div class="app-coop">
                                            <a href="seemore.php?dev=<?= $item['developer'] ?>"><?= $item['developer'] ?></a>
                                        </div>
                                        <div class="rating">
                                        <?= $item['stars'] ?><span class="fa fa-star checked"></span></p>
                                        <?php
                                                    if(isset($_SESSION['id'])){
                                                        $buy = is_bought($_SESSION['id'],$item['id']);
                                                        $download = is_downloaded($_SESSION['id'],$item['id']);
                                                        if($download['code']!=0) die($result['message']);
                                                        if($buy['code']!=0) die($result['message']);
                                                        if($download['status']){
                                                            ?>
                                                                <p><img src="./image/download.png"></p> 
                                                            <?php
                                                        }
                                                        else if($buy['status']){
                                                            ?>
                                                                <p>Đã mua</p> 
                                                            <?php
                                                        }
                                                        else if($item['price'] !== 0 && !$download['status'] && !$buy['status']){
                                                            ?>
                                                                <p><?= number_format($item['price'], 0, '.', '.') ?> đ</p> 
                                                            <?php
                                                        }
                                                    }
                                                    else{
                                                        if($item['price'] !== 0){
                                                            ?>
                                                                <p><?= number_format($item['price'], 0, '.', '.') ?> đ</p> 
                                                            <?php
                                                        }
                                                    }
                                                ?>
                                        </div>
                                    </div>
                                <?php
                            }
                        }
                    }

                    
                    
                ?>
            </div>
        </div>
    </div>
</body>
<script src="main.js"></script>
</html>