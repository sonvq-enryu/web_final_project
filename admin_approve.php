<?php
    require_once('admin_func.php');
    
    $id = $_GET['id'];
        
    $dev_apps = check_pending_apps($id);
    
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
    <style> 
        .admin-console-header {
            background-color: #4285F4;
            display: flex;
            height: 60px;
        }

        .admin_approve_btn {
            margin-left: 10px;
            margin-bottom: 25px;
            display: inline-block;
            background: white;
            color: #444;
            width: 150px;
            height: 25.5px;
            border-radius: 5px;
            border: thin solid #888;
            box-shadow: 1px 1px 1px grey;
            white-space: nowrap;
        }

        .admin_deny_btn {
            margin-left: 10px;
            margin-bottom: 25px;
            display: inline-block;
            background: white;
            color: #444;
            width: 150px;
            height: 25px;
            border-radius: 5px;
            border: thin solid #888;
            box-shadow: 1px 1px 1px grey;
            white-space: nowrap;
        }

        .admin_approve_btn:hover {
            cursor: pointer;
        }

        .admin_deny_btn:hover {
            cursor: pointer;
        }
    </style>

    <title>Developer console</title>


</head>

<body>
<?php
    $id = $_GET['id'];
    $id = (string) $id;
    if(isset($_POST['published'])) {
        $status = 'Published';
        $published = edit_app_status($id,$status);
        foreach($dev_apps['data'] as $item){
            $app_id = $item['app_id'];
            $name = $item['name'];
            $price = $item['price'];
            $updated = $item['date'];
            $size = $item['size'];
            $developer = $item['developer'];
            $image = $item['image'];
            $content = $item['content'];
            $description = $item['description'];
        }
        $result = push_app($app_id,$name,$price,$updated,$size,$developer,$image,$content,$description);
       
        header("location:admin_approve.php?id=$id");
    }
    if(isset($_POST['deny'])) {
        $status = 'Deny';
        $result = edit_app_status($id,$status);
        header("location:admin_approve.php?id=$id");
    }
?>
    <div class='dev-console'>
        <div class="admin-console-header">
            <div class="header-img">
                <a>
                    <img src="./image/googleplayicon.png" alt="" />
                </a>
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
            <a class="fa fa-gamepad" href="#"> Game services</a>
            <a class="fa fa-credit-card"> Order management</a>
            <a class="fa fa-download" href="#"> Download reports</a>
            <a class='fa fa-warning' href="#"> Alerts</a>
            <a class="fa fa-gear" href="#"> Settings</a>
        </div>

        <div class="dev-content">
            <div class="content flex-container">
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
                                            
                                        </div>
                                    </div>
                                    <table class="stattable">
                                        <tr>
                                            <td>install</td>
                                            <td>status</td>
                                        </tr>
                                        <tr>
                                            <td>0</td>
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
                                    
                                    <form method="post" onsubmit="approve_click()">
                                        <input class="admin_approve_btn " type="submit" name="published" value="Published"  /><br>
                                        
                                    </form>
                                    <form method="post" onsubmit="deny_click()">
                                       
                                        <input class="admin_deny_btn " type="submit" name="deny" value="Denied"/>
                                    </form>
                                    
                                  
                                       
                                    
                                    
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