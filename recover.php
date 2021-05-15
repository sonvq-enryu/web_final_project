<?php
session_start();
if (isset($_SESSION['username'])) {
    header("Location: index.php");
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
    $display_email = filter_input(INPUT_GET, 'email', FILTER_SANITIZE_EMAIL);
    if (isset($_GET['email']) && isset($_GET['token'])) {
        $email = $_GET['email'];
        $token = $_GET['token'];
        if (isset($_POST['new-password']) && isset($_POST['confirm-password'])) {
            $pwd =$_POST['new-password'];
            if (!is_email_exist($email)) {
                $msg = 'Email not correct';
            }
            else {
                $valid = is_valid_token($email, $token);
                if ($valid == 2) {
                    $msg = 'This token is not correct';
                }
                else if ($valid == 3 || $valid == 4) {
                    echo $valid;
                    $msg = 'This token is expired';
                }
                else if ($valid == 1) {
                    $msg = 'Some error has occured';
                }
                else {
                    if (to_new_password($email, $pwd)['code'] == 0) {
                        $s = set_token_status($email, 1);
                        header("Location: loginform.php");
                        exit();
                    }
                    else {
                        $msg = 'Some error has occured';
                    }
                }
            }
        }
    }

    ?>
    <form action="" class='login-form' id='login-form' onsubmit="return checkchangepwd(this)" method="POST">
        <h1>Reset Password</h1>
        <div class="txtb">
            <input type="text" onclick="clearError()" value="<?= $display_email ?>" readonly>
            <span></span>
        </div>

        <div class="txtb">
            <input type="password" onclick="clearError()" name="new-password">
            <span data-placeholder="Your new password"></span>
        </div>

        <div class="txtb">
            <input type="password" onclick="clearError()" name="confirm-password">
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