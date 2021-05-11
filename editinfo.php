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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="edit-info">
<?php
    require_once('db.php');
    $data = get_user_info($_SESSION['username'])['data'];

    print_r($_POST);
    if (isset($_POST['email']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['phone'])) {
        $result = update_user_info($_POST['email'], $_POST['firstname'], $_POST['lastname'], $_POST['phone']);
        if ($result['code'] == 0) {
            header('Location: editinfo.php');
            exit();
        }
        else {
            $msg = $result['message'];
        }
    }
?>
    <form action="" class="edit-form" id="edit-form" method="POST">
        <h1>Information</h1>
        <div class="txtb">
            <label for="user-email">Email</label>
            <input id="user-email" type="email" name="email" value="<?php echo $data['email'] ?>" readonly>
            <span></span>
        </div>
        <div class="txtb">
            <label for="user-fn">Firstname</label>
            <input id="user-fn" type="text" name="firstname" value="<?= $data['firstname'] ?>" readonly>
            <span></span>
        </div>
        <div class="txtb">
            <label for="user-ln">Lastname</label>
            <input id="user-ln" type="text" name="lastname" value="<?= $data['lastname'] ?>" readonly>
            <span></span>
        </div>
        <div class="txtb">
            <label for="user-phone">Phone</label>
            <input id="user-phone" type="text" name="phone" value="<?= $data['phone'] ?>" readonly>
            <span></span>
        </div>
        <div class="nationality-selectbox">
            <select class="" id="nationality" disabled>
                <?php

                ?>
                  <option>Country</option>
                  <option>Vietnam</option>
                  <option>China</option>
                  <option>Japan</option>
                  <option>Laos</option>
                  <option>Cambodia</option>
            </select>
        </div>
        <p id="update-error-message">
            <?php
                if (isset($msg)) {
                    echo $msg;
                }
            ?>
        </p>
        <input onclick="editformBtn(true)" id="e-info-btn" class="logbtn" type="button" value="Edit">
        <input onclick="editformBtn(false)" id="s-info-btn" class="logbtn d-none" type="submit" value="Confirm">
        <input onclick="editformBtn(false)" id="c-info-btn" class="logbtn-cancel d-none" type="button" value="Cancel">
    </form>

    <script src="./main.js"></script>
</body>
</html>