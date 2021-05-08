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
    <title>Index</title>
    <style>
        body {
            box-sizing: border-box;
        }

        .container {
            width: 720px;
            height: 100%;
            background-color: #ffffff;
            /* overflow-y: hidden;
            overflow-x: hidden; */
            box-shadow: 0 4px 8px 0 rgb(0 0 0 / 30%);
        }

        .app-page-header {
            display: flex;
            width: 100%;
            height: 250px;
            padding: 25px;
        }

        .app-page-header span {
            width: 180px;
            height: 180px;
        }

        .app-page-header span img {
            width: 100%;
            height: 100%;
        }

        .container .app-page-header .app-page-info {
            width: 490px;
            padding-left: 15px;
        }

        .container .app-page-header .app-page-info p {
            font-size: 28px;
            font-weight: 500;
            margin-bottom: 0;
            width: 100%;
        }

        .container .app-page-header .app-page-info a {
            color: #3d6b00;
            font-size: 16px;
            font-weight: 700;
            padding-right: 14px;
        }

        .container .app-page-header .app-page-info p.rated {
            font-size: 15px;
            font-weight: 500;
        }

        .container .app-page-header .app-page-info .rating {
            height: 70px;
            padding-top: 10px;
        }

        .container .app-page-header .app-page-info .rating div {
            display: inline-block;
            font-weight: 600;
        }
        .container .app-page-header .app-page-info .rating span {
            display: inline-block;
            height: 20px;
            width: 20px;
        }

        .container .app-page-header .app-page-info .rating button {
            /* position: absolute; */
            left: 600px;
            top: 150px;
            display: inline-block;
            background-color: #689f38;
            color: white;
            width: 80px;
            height: 40px;
            outline: none;
            border: none;
            border-radius: 2px;
            font-weight: 550;
        }

        .container .app-page-header .app-page-info .rating button:hover {
            background-color: #397702;
        }

        .app-page-description {
            padding: 0 25px;
            border-bottom: 1px solid #d6d6d6;
        }

        .review-rating {
            padding: 10px 25px;
        }

        .review-rating .total-rating {
            display: inline-block;
            width: 160px;
            text-align: center;
            vertical-align: top;
        }

        .review-rating .rating .total-rating div {
            font-size: 64px;
            font-weight: 100;
            line-height: 64px;
        }

        .rating-chart {
            display: inline-block;
            width: 425px;
        }

        .star {
            width: 100%;
        }

        .star span:first-child {
            margin-right: 5px;
            display: inline-block;
        }

        .chart {
            background: #57bb8a;
        }

        .star span.chart-s {
            display: inline-block;
            transition: width .25s ease;
            height: 100%;
            opacity: .8;
        }

        .user-profile img {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 50%
        }

        .user-review.row{
            margin: 8px;
        }

        .checked{
            color: orange;
            /* width: 60%; */
        }

        .chart-1{
            background-color:#57bb8a;
            width: 100%;
        }

        /* .star-e{
            display: inline;
        } */

        .star{
            height: 30px;
            /* display: inline-block; */
        }

        .star-1{
            width: 50%;
            background-color: #ff6f31;
        }
        .star-2{
            width: 22%;
            background-color: #ff9f02;
        }
        .star-3{
            width: 25%;
            background-color: #ffcf02;
        }
        .star-4{
            width: 70%;
            background-color: #9ace6a;
        }
        .star-5{
            width: 100%;
            background-color: #57bb8a;
        }

        .col-11{
            flex: none;
        }

        .col-1{
            margin-top:auto;
            margin-bottom:auto;
        }

        .left-rating{
            text-align:center;
        }

        .content{
            background-color: #f1f1f1;
        }

        .user-review{
            border-bottom: 1px solid #d6d6d6;
        }

    </style>
</head>
<?php
    require_once 'db.php';
    $content = get_content();
    if($content['code']!=0){
        die($content['error']);
    }

    $content = $content['data'];

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM aplication WHERE id = ?";
        $conn = open_database();
        $stm = $conn->prepare($sql);
        $stm->bind_param("s",$id);
        if(!$stm->execute()) die("Can't find app");
        $result = $stm->get_result();
        $item_app = $result->fetch_assoc();
    }
?>
<body class="index">
    <?php include 'index-template.php';?>
    <div class="content flex-container">
        <div id="sidebar" class="sidebar">
            <ul class="menu">
                <li><a href="#home">Home</a></li>
                <li><a href="#news">News</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#about">About</a></li>
            </ul>
        </div>
        <div class="my-3 container">
            <div class="app-page-header">
                <?php
                    ?>
                    <span>
                        <img src="<?= $item_app['image'] ?>"/>
                    </span>
                    <div class="app-page-info">
                        <p><?= $item_app['name'] ?></p>
                        <a href="#developer"><?= $item_app['developer'] ?></a>
                        <a href="#category"></a>
                        <p class="rated"><?= $item_app['content'] ?></p>
                        <div class="rating">
                            <div><?= $item_app['stars'] ?></div>
                            <span class="fa fa-star checked"></span>
                            <button>Download</button>
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
                        <div class="user-review row">
                            <div class="user-profile col-2">
                                <img class="user-img" src="./image/smuge_the_cat.jpg">
                            </div>
                            <div class="user-name col-10">
                                <h6 style="font-weight: bold">Lê Nguyễn Minh Tuấn<h6>
                                <div class="user-rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <p>Tạm</p>
                            </div>
                        </div>
                        <div class="user-review row">
                            <div class="user-profile col-2">
                                <img class="user-img" src="./image/smuge_the_cat.jpg">
                            </div>
                            <div class="user-name col-10">
                                <h6 style="font-weight: bold">Lê Nguyễn Minh Tuấn<h6>
                                <div class="user-rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <p>Như lồn</p>
                            </div>
                        </div>
                        <div class="user-review row">
                            <div class="user-profile col-2">
                                <img class="user-img" src="./image/smuge_the_cat.jpg">
                            </div>
                            <div class="user-name col-10">
                                <h6 style="font-weight: bold">Lê Nguyễn Minh Tuấn<h6>
                                <div class="user-rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <p>Tuyệt vời</p>
                            </div>
                        </div>
                        <div class="user-review row">
                            <div class="user-profile col-2">
                                <img class="user-img" src="./image/smuge_the_cat.jpg">
                            </div>
                            <div class="user-name col-10">
                                <h6 style="font-weight: bold">Lê Nguyễn Minh Tuấn<h6>
                                <div class="user-rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <p>Như cái buồi đầu</p>
                            </div>
                        </div>
                    </div>
                </div>
                    <?php
                ?>
        </div>
        
    </div>
</body>
<script src="javascript/drivers.js"></script>
</html>