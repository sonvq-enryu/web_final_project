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
</head>
<style>
   
</style>
<?php
    require_once 'db.php';
    $content = get_content();
    if($content['code']!=0){
        die($content['error']);
    }

    $content = $content['data'];

    if(isset($_GET['fileId'])){
        $fileID = $_GET['fileId'];
    }
    else{
        die('File ID not found');
    }

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM application WHERE id = ?";
        $conn = open_database();
        $stm = $conn->prepare($sql);
        $stm->bind_param("s",$id);
        if(!$stm->execute()) die("Can't find app");
        $result = $stm->get_result();
        $item_app = $result->fetch_assoc();
        $dev_apps = get_dev_apps($item_app['developer']);

        // SPLIT CONTENT
        $similar = preg_split("/\+/", $item_app['content']);
        $similar[0] = $similar[0].'+';
        // foreach($data as $item){
        //     $item = preg_replace('/^ /', '', $item);
        //     if (preg_match('/Rated/', $item)){
        //         $rate[] = $item;
        //     }
        //     else{
        //         $cate[] = $item;
        //     }
        // }
        //

        if($dev_apps['code']!=0){
            die($dev_apps['error']);
        }

        $dev_app = array();
        $count = 0;
        foreach($dev_apps['data'] as $item){
            if($item['id'] != $id){
                $count += 1;
                $dev_app[] = $item;
            }
            if($count == 3){
                break;
            }
        }

        $apps = get_all_apps();

        $result = array();
        if($apps['code']!=0){
            die($apps['error']);
        }
        $count = 0;
        foreach($apps['data'] as $item){
            if (strpos($item['content'],$item_app['content']) !== false && $id != $item['id']){
                $count += 1;
                $result[] = $item;
            }
            if($count == 4){
                break;
            }
        }

        $similar_app = array();
        $similar_app['data'] = $result;

        $random_app = array();
        for($i=0;$i<4;$i++){
            $random_num = rand(0,175);
            $random_app[] = $apps['data'][$random_num];
        }

    }


    
?>

<body class="index">
    <?php include 'index-template.php';?>
    <div class="content flex-container">
        <div id="sidebar" class="sidebar">
            <ul class="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="#news">News</a></li>
                <li><a href="footer.php">Contact</a></li>
                <li><a href="#about">About</a></li>
            </ul>
        </div>
        <?php
        if(count($dev_app) != 0){
            ?>
            <div class="my-3 developer-apps">
                <div class="apps-menu">
                    <div class="info-row">
                        <h3>Same developer</h3>
                    </div>
                    <div class="apps-row">
                        <?php
                            foreach($dev_app as $item){
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
                                            $result = is_downloaded($_SESSION['id'],$item['id']);
                                            if($result['code']!=0) die($result['message']);
                                            if($result['status']){
                                                ?>
                                                    <p><img src="./image/download.png"></p> 
                                                <?php
                                            }
                                            if($item['price'] !== 0 && !$result['status']){
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
            </div>
            <?php
        }
        ?>

        <div class="my-3 container">
            <div class="app-page-header">
                <?php
                    ?>
                    <span>
                        <img src="<?= $item_app['image'] ?>"/>
                    </span>
                    <div class="app-page-info">
                        <p><?= $item_app['name'] ?></p>
                        <a href="seemore.php?dev=<?= $item_app['developer'] ?>"><?= $item_app['developer'] ?></a>
                        <a href="#category"></a>
                        <p class="rated"><?= $item_app['content'] ?></p>
                        <div class="rating">
                            <div><?= $item_app['stars'] ?></div>
                            <span class="fa fa-star checked"></span>
                            <?php
                                if(isset($_SESSION['id'])){
                                    $result = is_downloaded($_SESSION['id'],$item_app['id']);
                                    if($result['code']!=0) die($result['message']);
                                    ?>
                                        <?php
                                        if($result['status']){
                                            ?>
                                                <a href="<?='download.php?fileId='. $fileID?>">Đã được cài đặt</a> 
                                            <?php 
                                        }
                                        else if($item_app['price'] !== 0 && !$result['status']){
                                            ?>
                                                <a class="buy-to-download"><?= number_format($item_app['price'], 0, '.', '.') ?> đ</a> 
                                            <?php   
                                        }
                                        else{
                                            ?><a href="<?='download.php?fileId='. $fileID.'&user='.$_SESSION['id'].'&app='.$id?>">Download</a><?php
                                        }
                                        ?>
                                    <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="app-page-description">
                    <p>
                        Tụ họp bên nhau mọi lúc bằng ứng dụng giao tiếp đa năng, miễn phí* của chúng tôi, hoàn chỉnh với các tính năng nhắn tin, gọi thoại, gọi video và nhóm chat video không giới hạn. Dễ dàng đồng bộ tin nhắn và danh bạ với điện thoại Android, đồng thời kết nối với mọi người ở mọi nơi.
                        <br>
                        GỌI ĐIỆN VÀ NHẮN TIN LIÊN ỨNG DỤNG
                        <br>
                        Kết nối với bạn bè trên Instagram ngay từ Messenger. Chỉ cần tìm kiếm họ theo tên hoặc tên người dùng để nhắn tin hay gọi điện.
                    </p>
                </div>
                <div class="review-rating">
                    <div class="rating row">
                        <div class="col-4 left-rating">
                            <div>REVIEW AND RATING</div>
                            <div class="total-rating my-3">
                                Overall Rating
                                <div><?= $item_app['stars'] ?><span class="fa fa-star checked"></span></div>
                            </div>
                        </div>
                    
                        <div class="col-8 rating-chart">
                            <div class="row my-2">
                                <span class="col-1">1</span>
                                <div class="col-11 star star-1">
                                    <div class="chart chart-1"></div>
                                </div>
                            </div>
                            <div class="row my-2">
                                <span class="col-1">2</span>
                                <div class="col-11 star star-2">
                                    <div class="chart chart-1"></div>
                                </div>
                            </div>
                            <div class="row my-2">
                                <span class="col-1">3</span>
                                <div class="col-11 star star-3">
                                    <div class="chart chart-1"></div>
                                </div>
                            </div>
                            <div class="row my-2">
                                <span class="col-1">4</span>
                                <div class="col-11 star star-4">
                                    <div class="chart chart-1"></div>
                                </div>
                            </div>
                            <div class="row my-2">
                                <span class="col-1">5</span>
                                <div class="col-11 star star-5">
                                    <div class="chart chart-1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="review">
                        <br></br>
                        <?php
                            if(isset($_SESSION['id'])){
                                $result = is_downloaded($_SESSION['id'],$item_app['id']);
                                if($result['code']!=0) die($result['message']);
                                if($result['status']){
                                    ?>
                                        <a class="write-review btn btn-outline-secondary" href="#" data-toggle="modal" data-target="#review-section">Write a review</a>
                                    <?php
                                }
                            }
                        ?>
                        <br></br>
                        <?php
                        $comment_rating = select_comment_review($item_app['id']);
                        if($comment_rating['code']!=0) die($comment_rating['error']);
                        foreach($comment_rating['data'] as $item){
                            $sql = "SELECT firstname, lastname, image FROM account WHERE id = ?";
                            $conn = open_database();
                            $stm = $conn->prepare($sql);
                            $stm->bind_param("s",$item['user_id']);
                            if(!$stm->execute()) die("Can't find user");
                            $result = $stm->get_result();
                            $user = $result->fetch_assoc();
                            $fullname = $user['firstname']." ".$user['lastname'];
                            ?>
                            <div class="user-review row">
                                <div class="user-profile col-2">
                                    <img class="user-img" src="<?= $user['image'] ?>">
                                </div>
                                <div class="user-name col-10">
                                    <h6 style="font-weight: bold"><?=$fullname?><h6>
                                    <div class="user-rating">
                                        <?php
                                        for($i=0;$i<$item['rating'];$i++){
                                            ?>
                                                <span class="fa fa-star checked"></span>
                                            <?php
                                        }
                                        for($i=0;$i<5-$item['rating'];$i++){
                                            ?>
                                                <span class="fa fa-star"></span>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                    <p><?= $item['comment'] ?></p>
                                </div>
                            </div>
                            <?php
                        }
                        
                        ?>
                    </div>
                </div>
                    <?php
                ?>
        </div>
        <div class="recommend-app">
            <div class="apps-menu">
                <div class="info-row">
                    <h2>Similar</h2>
                    <div>
                    <?php
                        $link = "seemore.php?Rated=".$similar[0];
                        if(isset($similar[1])){
                            $link = $link."&cate=".$similar[1];
                        }
                        ?>
                            <a class='btn btn-success' href="<?= $link ?>">See more</a>
                        <?php
                    ?>
                    </div>
                </div>
                <div class="apps-row">
                    <?php
                        foreach($similar_app['data']  as $item){
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
                                            $result = is_downloaded($_SESSION['id'],$item['id']);
                                            if($result['code']!=0) die($result['message']);
                                            if($result['status']){
                                                ?>
                                                    <p><img src="./image/download.png"></p> 
                                                <?php
                                            }
                                            if($item['price'] !== 0 && !$result['status']){
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
                    <h2>Maybe you might like</h2>
                    <div>
                    <a class='btn btn-success' href="seemore.php">See more</a>
                    </div>
                </div>
                <div class="apps-row">
                <?php
                        foreach($random_app as $item){
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
                                            $result = is_downloaded($_SESSION['id'],$item['id']);
                                            if($result['code']!=0) die($result['message']);
                                            if($result['status']){
                                                ?>
                                                    <p><img src="./image/download.png"></p> 
                                                <?php
                                            }
                                            if($item['price'] !== 0 && !$result['status']){
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
        </div>
    </div>
    
<?php
if(isset($_SESSION['fullname'])){
    ?>
    <div class="modal fade" id="review-section">
        <div class="modal-dialog">
            <div class="modal-content">
                <form onchange="checkReviewInput()" method="post" action="db.php">
                    <div class="modal-header">
                        <h4 class="modal-title">Bài đánh giá của <?= $_SESSION['fullname'] ?></h4>
                    </div>
                    <div class="modal-body">
                    <div class="form-group">
                        <p>Đây là những bài đánh giá công khai và có thể chỉnh sửa. Mọi người có thể xem được ảnh và tên Tài khoản của bạn. Nhà phát triển có thể xem được thông tin về quốc gia và thiết bị của bạn (chẳng hạn như ngôn ngữ, kiểu máy và phiên bản hệ điều hành). Họ cũng có thể dùng những thông tin này để trả lời bạn.</p>
                    </div>
                    <div class="form-group row">
                        <div class="apps-img col-3">
                            <img  src="<?= $item_app['image'] ?>">
                            <div><?= $item_app['name'] ?></div>
                        </div>
                        <div class="apps-cmt col-9">
                            <textarea rows="10" name="user-own-review" id="user-own-review" class="form-control" placeholder="Hãy cho người khác biết cảm nhận của bạn về ứng dụng này. Bạn có đề xuất ứng dụng này không và vì sao?"></textarea>
                            <div class="small-alert">
                                Phần lớn các bài đánh giá hữu ích đều có từ 100 từ trở lên
                            </div>
                            <br></br>
                            <div id="rating">
                                <input type="radio" id="star5" name="rating" value="5" />
                                <label class = "full" for="star5" title="Awesome - 5 stars"></label>
                            
                                <input type="radio" id="star4" name="rating" value="4" />
                                <label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                            
                                <input type="radio" id="star3" name="rating" value="3" />
                                <label class = "full" for="star3" title="Meh - 3 stars"></label>
                            
                                <input type="radio" id="star2" name="rating" value="2" />
                                <label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                            
                                <input type="radio" id="star1" name="rating" value="1" />
                                <label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="path" value="application.php?id=<?=$item_app['id']?>">
                        <input type="hidden" name="user-id" value="<?= $_SESSION['id'] ?>">
                        <input type="hidden" name="application-id" value="<?=$item_app['id']?>">
                        <button onclick="restoreDefault()" type="button" class="btn" data-dismiss="modal">Hủy</button>
                        <button type="submit" id="review-submit" class="btn btn-success" disabled>Gửi</button>
                    </div>            
                </form>
            </div>
        </div>
    </div>
        <?php
    }
    ?>
    
 
    
</body>
<script src="main.js"></script>
</html>