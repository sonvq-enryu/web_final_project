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
            overflow-y: hidden;
            overflow-x: hidden;
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


    </style>
</head>
<body class="index">
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
        <div class="container">
            <div class="app-page-header">
                <span>
                    <img src="image/smuge_the_cat.jpg">
                </span>
                <div class="app-page-info">
                    <p>Messenger - nhắn tin và gọi video miễn phí</p>
                    <a href="#developer">Facebook</a>
                    <a href="#category">Social</a>
                    <p class="rated">Mọi người từ 10+</p>
                    <div class="rating">
                        <div>4.5</div>
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
                <div class="rating">
                    <div>REVIEW AND RATING</div>
                    <div class="total-rating">
                        <div>4.5</div>
                    </div>
                    <div class="rating-chart">
                        <div class="star">
                            <span>1</span>
                            <span class="chart chart-s"></span>
                        </div>
                        <div class="star">
                            <span>2</span>
                            <span class="chart chart-s"></span>
                        </div>
                        <div class="star">
                            <span>3</span>
                            <span class="chart chart-s"></span>
                        </div>
                        <div class="star">
                            <span>4</span>
                            <span class="chart chart-s"></span>
                        </div>
                        <div class="star">
                            <span>5</span>
                            <span class="chart chart-s"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="javascript/drivers.js"></script>
</html>