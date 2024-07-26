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
    <title>Index</title>
    <style></style>
</head>
<?php
    require_once 'db.php';

    $popular_app = get_popular_top_apps();
    if($popular_app['code']!=0){
        die($popular_app['error']);
    }

    $recommend_app = get_recommend_top_apps();
    if($recommend_app['code']!=0){
        die($recommend_app['error']);
    }

    $lastest_app = get_lastest_top_apps();
    if($lastest_app['code']!=0){
        die($lastest_app['error']);
    }

    $paid_app = get_paid_top_apps();
    if($paid_app['code']!=0){
        die($paid_app['error']);
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
        <?php
            $_SESSION['download_file'] = array();
            $_SESSION['app_id'] = array();
            $path = __DIR__. '/apk/';
            $files = scandir($path);
        
            foreach($files as $f){
                if(strpos($f,'.')===0){
                    continue;
                }
                $uid = uniqid();
                $filePath = $path.$f;
                $app_id = explode(".", $f)[0];
                $_SESSION['app_id'][$app_id] = $uid;
                $_SESSION['download_file'][$uid]  = $filePath;
            }
        ?>  
        <div class="content">
            <div class="apps-menu">
                <div class="info-row">
                    <h2>Popular Apps</h2>
                    <div>
                        <a class='btn btn-success' href="seemore.php?id=1">See more</a>
                    </div>
                </div>
                <div class="apps-row">
                    <?php
                        foreach($popular_app['data'] as $item){
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
            <div class="apps-menu">
                <div class="info-row">
                    <h2>Recommend Apps</h2>
                    <div>
                    <a class='btn btn-success' href="seemore.php?id=2">See more</a>
                    </div>
                </div>
                <div class="apps-row">
                    <?php
                        foreach($recommend_app['data'] as $item){
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
                    ?>
                </div>
            </div>
            <div class="apps-menu">
                <div class="info-row">
                    <h2>Lastest Apps</h2>
                    <div>
                        <a class='btn btn-success' href="seemore.php?id=3">See more</a>
                    </div>
                </div>
                <div class="apps-row">
                <?php
                        foreach($lastest_app['data'] as $item){
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
                    ?>
                </div>
            </div>

            <div class="apps-menu">
                <div class="info-row">
                    <h2>Paid Apps</h2>
                    <div>
                        <a class='btn btn-success' href="seemore.php?id=4">See more</a>
                    </div>
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
            
            <?php include 'footer.php';?>
        </div>
    </div>
    
</body>
<script src="main.js"></script>
</html>