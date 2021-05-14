<?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header("Location: loginform.php");
        exit();
    }
    require_once('dev_func.php');
    $id = $_GET['id'];
    $pending_app = get_uploadapp($id);
    $email = $_SESSION['fullname'];
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
    <style>
        .app-del-btn{
            border-radius: 8px;
            padding: 1px;
            margin-top: -2px;
            margin-bottom: 4px;
        }
    </style>
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
             

            </div>

            <div class="header-user">
                <?php
                    if(isset($_SESSION['username']) && isset($_SESSION['fullname'])){
                        $username = $_SESSION['username'];
                        $fullname = $_SESSION['fullname'];
                        ?>
                        <div onclick="ClickUserIcon()" class="user-dropdown">
                            <div class="user-profile">
                                <img class="user-img" src="./image/smuge_the_cat.jpg">
                            </div>
                            <div id="user-dropdown-content" class="user-dropdown-content">
                                <h3><?=$fullname?><br><span><?=$username?></span></h3>
                                <ul>
                                    <li><img src="./image/user.svg"><a href="profile.php">My Profile</a></li>
                                    <li><img src="./image/edit.svg"><a href="profile.php">Edit Infomation</a></li>
                                    <li><img src="./image/settings.svg"><a href="profile.php">Change Password</a></li>
                                    <li><img src="./image/log-out.svg"><a href="logout.php">Logout</a></li>
                                </ul>
                            </div>
                        </div>
                        <?php
                    }
                    else{
                        ?>
                            <div class="login-signup">
                                <a class="btn btn-outline-secondary" href="loginform.php">Login</a>
                            </div>
                        <?php
                    }
                    
                ?>
            </div>
        </div>
        <div class="dev-console-sidebar">
            <div class="dev-console-img">
                <img src="./image/googleplayconsole.png" alt="" />Google Play Console
            </div>
            <a class="fa fa-shopping-bag" href="index.php"> Google Play Store</a>
            <a class="fa fa-android" href="developer.php?id=<?= (string)$id ?>"> All applications</a>
            <a class="fa fa-gamepad" href="#"> Game services</a>
            <a class="fa fa-credit-card"> Order management</a>
            <a class="fa fa-download" href="#"> Download reports</a>
            <a class='fa fa-warning' href="#"> Alerts</a>
            <a class="fa fa-gear" href="#"> Settings</a>
        </div>

        <div class="dev-content">
            <div class="dev-menu">
                <div class="dev-row">
                    <div class="dev-filter">
                        <button class="devdropbtn  "><a class='fa fa-filter'></a>Filter<a class='fa fa-caret-down'></a></button>

                        <div id="devdropdown" class="dev-filter-content">
                            <a>App Name</a>
                            <a>Size</a>
                            <a>Price</a>
                      
                        </div>
                    </div>


                </div>

                <div class="dev-row">
                    <div class="container-fluid" id="dev-console-row">
                        <div class="row" id="dev-properties-row">
                            <div class="col-sm-2"></a> App name</div>
                            <div class="col-sm-2">Price</div>
                            <div class="col-sm-2">Size</div>
                            <div class="col-sm-2">Last update</div>
                            <div class="col-sm-2">Status</div>
                            <div class="col-sm-2">Edit</div>
                        </div>
                        <!-- <div class="row">
                            <div class="col-sm-2"><a href="dev_application.html">Test</a></div>

                            <div class="col-sm-2">-</div>
                            <div class="col-sm-2">
                                <a class='fa fa-star'> </a>
                            </div>
                            <div class="col-sm-2">4 Oct 2017</div>
                            <div class="col-sm-2">Draft</div>
                            <div class="col-sm-2">
                                <a class="fa fa-trash-o"></a>
                            </div>

                        </div> -->
                        
                        <div class="row">
                            <?php
                                if($pending_app['code']!=0){
                                    ?>
                                        <div class="col-sm-2">-</div>

                                        <div class="col-sm-2">-</div>
                                        <div class="col-sm-2">
                                            <a class=''>-</a>
                                        </div>
                                        <div class="col-sm-2">-</div>
                                        <div class="col-sm-2">-</div>
                                        <div class="col-sm-2">
                                            <a >-</a>
                                        </div>
                                    <?php
                                }else{
                                    foreach($pending_app['data'] as $item){
                                        ?>
                                             <div class="col-sm-2"><a href="dev_application.php?id=<?= $item['app_id'] ?>"> <?= $item['name'] ?> </a></div>
                                                <div class="col-sm-2"><?= $item['price'] ?></div>
                                                <div class="col-sm-2"><?= $item['size'] ?></div>
                                                <div class="col-sm-2"><?= $item['date'] ?></div>
                                                <div class="col-sm-2"><?= $item['status'] ?></div>

                                                <div class="col-sm-2">
                                                    <a href="dev_application.php?id=<?= $item['app_id'] ?>"><i class='fa fa-edit'></i></a>
                                            </div>
                                        <?php
                                    }
                                }   
                            
                            ?>
                        </div>
                    </div>
                    <div>
                        <a class='devcreatebtn btn btn-success' href="appsubmit.php?id=<?=$id?>">CREATE APPLICATION</a>
                    </div>
                </div>

            </div>
        </div>

    </div>


    <script src="main.js"></script>
</body>

</html>