<!DOCTYPE html>
<html lang="en">
<?php
    session_start();

    if ($_SESSION['id '])
    
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body class="edit-info">
    <form action="" class="edit-form" id="edit-form" method="POST">
        <h1>Information</h1>
        <div class="txtb">
            <label for="user-email">Email</label>
            <input id="user-email" type="email" readonly>
            <span></span>
        </div>
        <div class="txtb">
            <label for="user-fn">Firstname</label>
            <input id="user-fn" type="email" readonly>
            <span></span>
        </div>
        <div class="txtb">
            <label for="user-ln">Lastname</label>
            <input id="user-ln" type="email" readonly>
            <span></span>
        </div>
        <div class="txtb">
            <label for="user-phone">Phone</label>
            <input id="user-phone" type="email" readonly>
            <span></span>
        </div>
        <div class="nationality-selectbox">
            <select class="" id="nationality" disabled>
                  <option>Country</option>
                  <option>Vietnam</option>
                  <option>China</option>
                  <option>Japan</option>
                  <option>Laos</option>
                  <option>Cambodia</option>
            </select>
        </div>
        <input id="e-info-btn" class="logbtn" type="button" value="Edit">
        <input id="s-info-btn" class="logbtn d-none" type="button" value="Confirm">
        <input id="c-info-btn" class="logbtn-cancel d-none" type="button" value="Cancel">
    </form>

    <script src="./javascript/drivers.js"></script>
</body>
</html>