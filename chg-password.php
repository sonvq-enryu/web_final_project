<?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header("Location: loginform.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <title>Change password</title>
    <link rel='stylesheet' href="style.css">
</head>

<body>
<?php
    require_once('db.php');

    if (isset($_POST['old-password']) && isset($_POST['new-password']) && isset($_POST['confirm-password'])) {
        $result = change_password($_SESSION['username'], $_POST['old-password'], $_POST['new-password']);
        $msg = '';
        if ($result['code'] == 0) {
            $msg = 'Change password successful';
        }
        else {
            $msg = $result['message'];
        }
    }
?>
    <form action="" class='login-form' id='login-form' onsubmit="return checkchangepwd()" method="POST">
        <h1>Change Password</h1>
        <div class="txtb">
            <input id="crtpwd" type="password" onclick="clearError()" name="old-password">
            <span data-placeholder="Your current password"></span>
        </div>

        <div class="txtb">
            <input id="newpwd" type="password" onclick="clearError()" name="new-password">
            <span data-placeholder="Your new password"></span>
        </div>

        <div class="txtb">
            <input id="confirmpwd" type="password" onclick="clearError()" name="confirm-password">
            <span data-placeholder="Confirm new password"></span>
        </div>
        <div id="errorMessage" class="errorMessage my-3">
        <?php
            if (isset($msg)) {
                echo $msg;
            }
        ?>
        </div>
        <input type="submit" class="logbtn" value="Change password">
    </form>

    <script src="main.js"></script>
</body>

</html>