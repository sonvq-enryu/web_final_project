<!DOCTYPE html>
<html lang="en">
<?php

    $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->

    <title>SignIn-SignUp</title>

    <link rel='stylesheet' href="./css/css.css">
</head>

<body>
    <form onsubmit="checkLoginInput()" action="#" class='login-form' id='login-form'>
        <h1>Login</h1>
        <div class="txtb">
            <input onclick="clearLoginError()" id="login-email" type="email">
            <span data-placeholder="Email"></span>
        </div>

        <div class="txtb">
            <input onclick="clearLoginError()" id="login-password" type="password">
            <span data-placeholder="Password"></span>
        </div>

        <p id="login-error-messege"></p>

        <input type="submit" class="logbtn" value="Login">

        <div class="bottom-text">
            Don't have account <a href='#' onclick="openForm()">Sign up</a>
        </div>


    </form>

    <form onsubmit="return checkSignupInput()" action="" class='signup-form' id='signup-form'>
        <h1>Sign up</h1>
        <div class="txtb">
            <input onclick="clearSignupError()" id="first-name-sign-up" type="text">
            <span data-placeholder="First name"></span>
        </div>

        <div class="txtb">
            <input onclick="clearSignupError()" id="last-name-sign-up" type="text">
            <span data-placeholder="Last name"></span>
        </div>

        <div class="txtb">
            <input onclick="clearSignupError()" id="email-sign-up" type="email">
            <span data-placeholder="Email"></span>
        </div>

        <div class="txtb">
            <input onclick="clearSignupError()" id="password-sign-up" type="password">
            <span data-placeholder="Password"></span>
        </div>
        <div class="txtb">
            <input onclick="clearSignupError()" id="confirm-password-sign-up" type="password">
            <span data-placeholder="Confirm Password"></span>
        </div>
        <div class="txtb">
            <input onclick="clearSignupError()" id="phone-number-sign-up" type="text">
            <span data-placeholder="Phone number"></span>
        </div>
        <div class='gender'>
            <label>
                <input checked type="radio" name="gender">
                <span class=male>Male</span>
            </label>
            <label>
                <input type="radio" name="gender">
                <span class=male>Female</span>
            </label>
        </div>

        <div class="nationality-selectbox">
            <select class="" id="nationality">
                <option>Country</option>
                <?php
                    for ($i = 0; $i<count($countries); $i++){
                        echo "<option value='$i'>$countries[$i]</option>";
                    }
                ?>
            </select>
        </div>

        <p id="signup-error-messege"></p>

        <input type="submit" class="logbtn" value="Sign in">
        <input type="button" class="logbtn-cancel" value="Cancel" onclick="closeForm()">

    </form>



    <script src="javascript/drivers.js"></script>
</body>

</html>