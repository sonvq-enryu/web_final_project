<?php
    require_once('admin_func.php');
    $pending_app = get_all_pending_apps();
    
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
        

        <title>Admin console</title>
        
    </head>

    <body>
        <div class='dev-console'>
            <div class="admin-console-header">
                <div class="header-img">
                    <a>
                        <img src="./image/googleplayicon.png" alt="" />
                    </a>
                </div>
                <div class="header-box">
                   

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
                    <img src="./image/admin_icon.png" alt="" />Google Admin
                </div>
                <a class="fa fa-android" href="admin_check.php"> All applications</a>
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
                                        <a>-</a>
                                    </div>
                                    <?php
                                }else{
                                    foreach($pending_app['data'] as $item){
                                        ?>
                                        <div class="col-sm-2">
                                            <a href="admin_approve.php?id=<?= $item['app_id'] ?>">
                                                <?= $item['name'] ?>
                                            </a>
                                        </div>
                                        <div class="col-sm-2">-</div>
                                        <div class="col-sm-2"><?= $item['size'] ?></div>
                                        <div class="col-sm-2">
                                            <?= $item['date'] ?>
                                        </div>
                                        <div class="col-sm-2">
                                            <?= $item['status'] ?>
                                        </div>
                                        <div class="col-sm-2">
                                            <a class="fa fa-trash-o"></a>
                                        </div>
                                        <?php
                                    }
                                }   
                            
                            ?>
                            </div>
                        </div>
                        <div>
                            <a class='devcreatebtn btn btn-success' href="appsubmit.php">CREATE APPLICATION</a>
                        </div>
                    </div>

                </div>
            </div>

        </div>


        <script src="main.js"></script>
    </body>

    </html>