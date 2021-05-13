<?php
    require_once('dev_func.php');
    
    $id = $_GET['id'];
        
    $dev_apps = get_pending_apps($id);
    
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


    <title>Developer console</title>
    

</head>

<body>
    <div class='dev-console'>
        <div class="dev-console-header">
            <div class="header-img">
                <a>
                    <img src="./image/googleplayicon.png" alt="" />
                </a>
            </div>
            <div class="header-box">
                <input type="text" id="search-box" name="search-box" placeholder="Search">
                <button class="dev-console-button " type="submit"><i class="fa fa-search"></i></button>
            </div>

            <div class="header-user">
                <div onclick="ClickUserIcon()" class="user-dropdown">
                    <div class="user-profile">
                        <img class="user-img" src="./image/smuge_the_cat.jpg">
                    </div>
                    <div id="user-dropdown-content" class="user-dropdown-content">
                        <h3>Name<br><span>Email</span></h3>
                        <ul>
                            <li><img src="./image/user.svg"><a href="#">My Profile</a></li>
                            <li><img src="./image/edit.svg"><a href="#">Edit Profile</a></li>
                            <li><img src="./image/envelope.svg"><a href="#">Inbox</a></li>
                            <li><img src="./image/settings.svg"><a href="#">Setting</a></li>
                            <li><img src="./image/log-out.svg"><a href="#">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="dev-console-sidebar">
            <div class="dev-console-img">
                <img src="./image/googleplayconsole.png" alt="" />Google Play Console
            </div>
            <a class="fa fa-android" href="developer.php"> All applications</a>
            <a class="fa fa-gamepad" href="#"> Game services</a>
            <a class="fa fa-credit-card"> Order management</a>
            <a class="fa fa-download" href="#"> Download reports</a>
            <a class='fa fa-warning' href="#"> Alerts</a>
            <a class="fa fa-gear" href="#"> Settings</a>
        </div>

        <div class="dev-content">
            <div class="content flex-container">
                <!-- <div class="my-3 container">
                    <div class="app-page-header">
                        <span>
                            <img src="./image/genshin.png"/>
                        </span>
                        <div class="app-page-info">
                            <p>Genshin Impact 2</p>
                            <a href="developer.html">
                                dev name
                            </a>
                            <a href="#category"></a>
                            <p class="rated">
                                Category
                            </p>
                            <div class="rating">
                                rating
                                <span class="fa fa-star checked"></span>
                                <button>Edit</button>
                            </div>
                        </div>
                        <table>
                            <tr>
                                <td>install</td>
                                <td>status</td>
                            </tr>
                            <tr>
                                <td>1000</td>
                                <td>Draft</td>
                            </tr>
                        </table>


                    </div>

                    <div class="app-page-description">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris bibendum, nulla at tincidunt porta, urna quam tempor urna, in convallis enim tellus eget lorem. Sed facilisis aliquam mauris eu ultricies. Fusce velit augue, tempor sit amet sem pulvinar,
                            posuere commodo diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent malesuada massa sed nibh consectetur posuere. Nunc at vulputate nisl. Aenean ac pellentesque tortor, sit amet elementum ipsum. Duis tempor
                            nisl enim, in mollis sapien vulputate aliquet. Nam porttitor quam eget enim bibendum euismod. Fusce at vulputate ante. Nulla ultricies lectus a orci scelerisque, vel dapibus lacus fermentum. Nunc eu gravida quam, vitae sollicitudin
                            urna. Quisque ac nulla blandit, porta eros sit amet, mattis mauris. Sed id nulla vestibulum, gravida mauris eu, tempor turpis. Donec ut volutpat ipsum. Nulla facilisi.

                        </p>
                    </div>

                    <div class="review-rating">
                        <div class="rating row">
                            <div class="col-4 left-rating">
                                <div>REVIEW AND RATING</div>
                                <div class="total-rating my-3">
                                    Overall Rating
                                    <div>><span class="fa fa-star checked"></span></div>
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

                    </div>

                </div> -->
                <div class="my-3 container">
                    <?php
                        foreach($dev_apps['data'] as $item){
                            ?>
                                <div class="app-page-header">
                                    <span>
                                        <img src="<?= $item['image'] ?>" />
                                    </span>
                                    <div class="app-page-info">
                                        <p><?= $item['name'] ?></p>
                                        <a href="#">
                                            <?= $item['developer'] ?>
                                        </a>
                                        <a href="#category"><?= $item['content'] ?></a>
                                        <div class="rating">
                                            rating
                                            <span class="fa fa-star checked"></span>
                                            <button>Edit</button>
                                        </div>
                                    </div>
                                    <table class="stattable">
                                        <tr>
                                            <td>install</td>
                                            <td>status</td>
                                        </tr>
                                        <tr>
                                            <td>1000</td>
                                            <td><?= $item['status'] ?></td>
                                        </tr>
                                    </table>


                                </div>

                                <div class="app-page-description">
                                    <p>
                                    <?= $item['description'] ?>

                                    </p>
                                </div>

                                <div class="review-rating">
                                    <div class="rating row">
                                        <div class="col-4 left-rating">
                                            <div>REVIEW AND RATING</div>
                                            <div class="total-rating my-3">
                                                Overall Rating
                                                <div>><span class="fa fa-star checked"></span></div>
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

                                </div>
                            <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>




    <script src="main.js"></script>
</body>

</html>