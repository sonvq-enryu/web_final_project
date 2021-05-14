<?php
    require_once('dev_func.php');
    session_start();
    if (!isset($_SESSION['username'])) {
        header("Location: loginform.php");
        exit();
    }
    $app_id = $_GET['id'];
    
    $item = get_pending_apps($app_id);
    
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
        .dev_edit_btn {
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
            text-align: center;
        }
    </style>

</head>

<body>
    <?php
        $error = '';
        $user_id = $item['user_id'];
        if (isset($_POST['delete'])){
            $result = delete_pend_app($app_id);
            if($result['code'] == 0){
                header("location:developer.php?id=$user_id");
            }else{
                $error = 'Cannot Delete application';
            }
        }
    ?>
    <div class='dev-console'>
        <div class="dev-console-header">
            <div class="header-img">
                <a>
                    <img src="./image/googleplayicon.png" alt="" />
                </a>
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
            <a class="fa fa-android" href="developer.php?id=<?= $item['user_id'] ?>"> All applications</a>
            <a class="fa fa-gamepad" href="#"> Game services</a>
            <a class="fa fa-credit-card"> Order management</a>
            <a class="fa fa-download" href="#"> Download reports</a>
            <a class='fa fa-warning' href="#"> Alerts</a>
            <a class="fa fa-gear" href="#"> Settings</a>
        </div>

        <div class="dev-content">
            <div class="content flex-container">
                <div class="my-3 container">
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
                                <a href="edit_app.php?id=<?=$item['app_id'] ?>">Edit</a>
                            </div>
                        </div>
                        <table class="stattable">
                            <tr>
                                <td>Price</td>
                                <td>status</td>
                            </tr>
                            <tr>
                                <td><?= $item['price'] ?></td>
                                <td><?= $item['status'] ?></td>
                            </tr>
                        </table>


                    </div>

                    <div class="app-page-description">
                        <p>
                        <?= $item['description'] ?>

                        </p>
                       
                    </div>
                    
                    </br><a class="dev_edit_btn" href="edit_app.php?id=<?=$item['app_id'] ?>">Edit</a>
                    <form method="post">
                        <input class="admin_deny_btn " type="submit" name="delete" value="Delete"/>
                    </form>
                    <?php
                        if (!empty($error)) {
                            echo "<div class='alert alert-danger appsub-input'>$error</div>";
                            
                        }
                        if(strcmp($item['status'],'Published') == 0){
                            ?>
                                <form method="post">
                                    <input class="admin_deny_btn " type="submit" name="unpublished" value="Unpublished"/>
                                </form>
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