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
    <meta name="viewport" content="width=, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>Recover Password</title>
    <link rel='stylesheet' href="style.css">
</head>

<body>
<?php
    require_once('db.php');

    if (isset($_POST['email'])) {
        $result = reset_password($_POST['email']);
        if ($result['code'] == 0) {
            $msg = "Recovery email has sent";
        }
        else if ($result['code'] == 2) {
            $msg = 'This email has not been used yet';
        }
        else {
            $msg = 'Some error has occured, please try again';
        }
    }
?>
    <form onsubmit="return validate_rcv(this)" action="" class='recover-pwd-form' id='repwd-form' method="POST">
        <h1 class='recover-header'>Recover Password</h1>
        <p class='rcv-p'>Enter the email that you used to sign up</p>
        <div class="txtb">
            <input type="email" name="email">
            <span data-placeholder="Your sign up email"></span>
        </div>


        <p class="rcv-alert">
            <?php
                if (isset($msg)) {
                    echo $msg;
                }
            ?>
        </p>
        <input id="recover-pwd" type="submit" class="recoverbtn" value="Submit">

    </form>

    <script src="main.js"></script>
</body>

</html>