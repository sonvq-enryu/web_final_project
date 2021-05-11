<?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header("Location: loginform.php");
        exit();
    }
    $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
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
                <option>Country</option>
                <?php
                    for ($i = 0; $i<count($countries); $i++){
                        echo "<option value='$i'>$countries[$i]</option>";
                    }
                ?>
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