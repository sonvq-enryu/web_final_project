<?php
    require_once('dev_func.php');

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


    <title>Create New app</title>
    <style>
        .dev-console-sidebar {
            height: 100%;
            width: 220px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: white;
            overflow-x: hidden;
            padding-top: 8px;
            font-family: "Lato", sans-serif;
            border-right: 1px solid grey;
        }
        
        .dev-console-sidebar a {
            padding: 6px 10px 6px 16px;
            margin-bottom: 10px;
            text-decoration: none;
            font-size: 18px;
            color: black;
            display: block;
        }
        
        .dev-console-sidebar img {
            width: 18%;
            padding-bottom: 15px;
            margin-left: 5px;
        }
        
        .dev-console-img {
            margin-top: -5px;
            border-bottom: 1px solid black;
        }
        
        .dev-console-sidebar a:hover {
            color: #2d4e78;
        }
        
        @media screen and (max-height: 450px) {
            .dev-console-sidebar {
                padding-top: 15px;
            }
            .dev-console-sidebar a {
                font-size: 18px;
            }
        }
        
        .dev-console-header {
            background-color: #55717f;
            display: flex;
            height: 60px;
        }
        
        .dev-content {
            height: 1000px;
            margin-left: 220px;
            background-color: #d9d9d9;
            overflow-x: hidden;
            font-family: montserrat;
        }
        
        .devdropbtn {
            background-color: #d9d9d9;
            font-size: 16px;
            border: none;
            cursor: pointer;
            margin: 10px;
            border-bottom: 1px black solid;
        }
        
        .devdropbtn a {
            margin-left: 10px;
            margin-right: 10px;
            color: black;
        }
        /* Dropdown button on hover & focus */
        
        .devdropbtn:hover,
        .devdropbtn:focus {
            background-color: #55717f;
        }
        
        .dev-filter {
            position: relative;
            display: inline-block;
        }
        
        .dev-filter-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }
        /* Links inside the dropdown */
        
        .dev-filter-content a {
            color: black;
            padding: 5px 5px;
            text-decoration: none;
            margin: 5px;
            display: block;
        }
        /* Change color of dropdown links on hover */
        
        .dev-filter-content a:hover {
            background-color: #ddd
        }
        
        .dev-filter:hover .dev-filter-content {
            display: block;
        }
        
        .devcreatebtn {
            position: relative;
            left: 45%;
            margin-top: 20px;
            background-color: #026cba;
            color: white;
            line-height: 30px;
            border-radius: 2px;
            outline: none;
            border: 1px;
            cursor: pointer;
        }
        
        #dev-console-row {
            margin: 20px;
            margin-right: 20px;
        }
        
        #dev-console-row .row {
            background-color: white;
            border-bottom: 1px solid black;
            padding: 10px;
        }
        /**/
        
        .dev-content-app {
            height: 1000px;
            margin-left: 220px;
            background-color: white;
            overflow-x: hidden;
        }
        
        .app-title {
            border-bottom: 1px solid gray;
        }
        
        .appsub-input {
            margin-left: 20%;
            height: 40px;
            width: 50%;
        }
        
        .appsub-price {
            margin-left: 20%;
            height: 40px;
            width: 50%;
        }
        
        .appsub-label {
            margin-left: 18%;
        }
        
        .appsub-input:focus {
            border: 3px solid rgb(57, 129, 187);
        }
        
        .appsub-textarea {
            margin-left: 20%;
            height: 150px;
            width: 50%;
        }
        
        .appsubmit-label {
            display: flex;
            flex-direction: row;
            justify-content: flex-end;
            text-align: right;
            width: 75%;
            line-height: 26px;
            margin-bottom: 10px;
        }
        
        .appsub-radio {
            margin-left: 20%;
            transform: scale(2);
        }
    </style>

</head>

<body>
<?php
    $error = '';
    $appname = '';
    $desc = '';
    $price = '';
    $appcategory = '';
    $date = date("dmy");
    $status = '';
    
    $developer = 'aaaaa';
    $message ='';
    if (isset($_POST['appname']) && isset($_POST['price']) && isset($_POST['desc']) ){
        $appname = $_POST['appname'];
        $price = $_POST['price'];
        $desc = $_POST['desc'];
        $appcategory = $_POST['appcategory'];
        $size = (($_FILES['apk']['size']/1024)/1024);
        $status = 'Draft';
        if (empty($appname)) {
            $error = 'Hãy nhập tên ứng dụng';
        }
        else if (intval($price) < 0) {
            $error = 'Giá của sản phẩm không hợp lệ';
        }
        else if (intval($price) % 10000 != 0) {
            $error = 'Giá ứng dụng là bội số của 10,000 đ';
        }
        else if (empty($desc)) {
            $error = 'Hãy nhập mô tả của ứng dụng';
        }else if (empty($appcategory)) {
            $error = 'Hãy chọn thể loại của ứng dụng';
        }
        else if ($_FILES["icon"]["error"] != UPLOAD_ERR_OK) {
            $error = 'Vui lòng upload ảnh của sản phẩm';
        }else if ($_FILES["apk"]["error"] != UPLOAD_ERR_OK) {
            $error = 'Vui lòng upload apk của ứng dụng';
        }
        else {
            $result = upload_app($developer,$appname,$price,$date,$size, $_FILES['icon']['name'],$appcategory,$desc,$status, $_FILES['apk']['name']);
            if($result['code'] == 0){
                $message = 'Add product success';
                $name = '';
                $price = '';
                $desc = '';
                $appcategory = '';
                
            }
            else{
                $error = 'An error occured. Please try again later';
            }
            
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
            <a class="fa fa-android" href="developer.html"> All applications</a>
            <a class="fa fa-gamepad" href="#"> Game services</a>
            <a class="fa fa-credit-card"> Order management</a>
            <a class="fa fa-download" href="#"> Download reports</a>
            <a class='fa fa-warning' href="#"> Alerts</a>
            <a class="fa fa-gear" href="#"> Settings</a>
        </div>
        
        <div class="dev-content-app">
            <div class="dev-menu">
                <div class="dev-row">
                    <h2 class="app-title">Create app</h2>
                    <h3>App details</h3>
                    <form method="POST" action="" novalidate enctype="multipart/form-data">
                        <label class="appsubmit-label">
                            App Name <input class="appsub-input" type="text" id="appname" name="appname" />
                          </label>

                        <label class="appsubmit-label">
                            Description <textarea class="appsub-textarea" name="desc"></textarea>
                          </label>

                        <label class="appsubmit-label">
                            Price <input class="appsub-price" type="number" id="price" name="price" placeholder="0">
                          </label>

                        <label class="appsubmit-label">
                            App Icon <input name="icon" type="file" class="appsub-input" id="icon" accept="image/gif, image/jpeg, image/png, image/bmp">
                        </label>
                        
                        <label class="appsubmit-label">
                            Categories
                            <select class="appsub-input" name="appcategory" id="appcategory">
                                <option value="Extreme Violence">Extreme Violence</option>
                                <option value="Fear">Fear</option>
                                <option value="Gambling">Gambling</option>
                                <option value="Horror">Horror</option>
                                <option value="Implied Violence">Implied Violence</option>
                                <option value="Mild Swearing">Mild Swearing</option>
                                <option value="Mild Violence">Mild Violence</option>
                                <option value="Moderate Violence">Moderate Violence</option>
                                <option value="Nudity">Nudity</option>
                                <option value="Sex">Sex</option>
                                <option value="Sexual Innuendo">Sexual Innuendo</option>
                                <option value="Simulated Gambling">Simulated Gambling</option>
                                <option value="Strong Violence">Strong Violence</option>
                                <option value="Varies with device">Varies with device</option>
                                
                            </select>
                        </label>

                        <label class="appsubmit-label">
                            App Apk <input name="apk" type="file" class="appsub-input" id="apk" accept=".zip, .rar" onchange="Filevalidation()">
                        </label>
                        <?php
                            if (!empty($error)) {
                                echo "<div class='alert alert-danger appsub-input'>$error</div>";
                            }
                            if (!empty($message)){
                                echo "<div class='alert alert-success appsub-input'>$message</div>";
                            }
                        ?>
                        <button type="submit" class="devcreatebtn">Submit Application</button>
                    </form>
                </div>


            </div>
        </div>

    </div>


    <script src="main.js"></script>

</body>

</html>