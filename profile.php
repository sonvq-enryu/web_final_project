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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Profile</title>
</head>

<body class="profile">
    <?php
    require_once('db.php');
    $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");

    $data = get_user_info($_SESSION['username']);
    $topup_body = get_topup_history($_SESSION['username']);
    $card_tbody = get_cards();

    if ($data['code'] == 0) {
        $data = $data['data'];
    } else {
        die("error");
    }
    $_SESSION['role'] = $data['role'];

    if ($card_tbody['code'] == 0) {
        $card_tbody = $card_tbody['data'];
    } else {
        die("error");
    }

    if ($topup_body['code'] == 1) {
        die("error");
    }
    ?>
    <div class="container mt-5">
        <div class="row">
            <div class="side col-3">
                <ul>
                    <li><a onclick="profile_show(this)" href="#">Profile</a></li>
                    <li><a onclick="profile_show(this)" href="#">Password</a></li>
                    <?php
                    if ($_SESSION['role'] == 2) {
                    ?>
                        <li><a onclick="profile_show(this)" href="#">Upgrade</a></li>
                    <?php
                    }
                    if ($_SESSION['role'] == 1) {
                    ?>
                        <li><a href="developer.php?id=<?= $_SESSION['id'] ?>">Developer Console</a></li>
                    <?php
                    }
                    if ($_SESSION['role'] == 0) {
                    ?>
                        <li><a href="admin_check.php?id=<?= $_SESSION['id'] ?>">Admin Console</a></li>
                    <?php
                    }
                    if ($_SESSION['role'] == 0) {
                    ?>
                        <li><a onclick="profile_show(this)" href="#">Create Card</a></li>
                    <?php
                    } else {
                    ?>
                        <li><a onclick="profile_show(this)" href="#">Top up</a></li>
                    <?php
                    }
                    ?>
                    <!-- <li><a onclick="profile_show(this)" href="#">Create Card</a></li> -->
                    <li><a href="index.php">Home Page</a></li>
                </ul>
            </div>
            <div class="col-9">
                <div id="edit-profile">
                    <div class="profile-header">
                        <h2>Your Profile</h2>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 col-sm-auto mb-3">
                            <div class="mx-auto">
                                <div class="d-flex justify-content-center align-items-center rounded">
                                    <img src="<?php
                                                if (empty($data['image'])) {
                                                    echo "./image/smuge_the_cat.jpg";
                                                } else {
                                                    echo $data['image'];
                                                }
                                                ?>" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                            <div class="text-center text-sm-left mb-2 mb-sm-0">
                                <h4 id="usr-email" class="pt-sm-2 pb-1 mb-0 text-nowrap"><?= $data['email'] ?></h4>
                                <p class="mb-0"><?= $data['firstname'] . ' ' . $data['lastname'] ?></p>
                                <div class="mt-1">
                                    <form id="upload_img_form" action="upload_image.php" method="POST" enctype="multipart/form-data">
                                        <input type="hidden" name="email" value="<?= $data['email'] ?>">
                                        <input type="file" name="upload_img" class="form-control-file" accept="image/*" />
                                        <input type="submit" class="btn btn-primary mt-1" value="Save changes">
                                    </form>
                                </div>
                            </div>
                            <div class="text-center text-sm-right mt-3">
                                <span class="badge badge-secondary">
                                    <?php
                                    if ($_SESSION['role'] == 0) {
                                        echo "Administrator";
                                    } else if ($_SESSION['role'] == 1) {
                                        echo "Developer";
                                    } else {
                                        echo "User";
                                    }
                                    ?>
                                </span>
                                <div class="text-muted">
                                    <small>
                                        <?php
                                        echo $countries[$data['national']];
                                        ?>
                                    </small>
                                </div>
                                <div class="text-muted">
                                    <small>
                                        <?php
                                        if ($data['gender'] == 0) {
                                            echo "Male";
                                        } else {
                                            echo "Female";
                                        }
                                        ?>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a href="#" class="active nav-link">Profile</a></li>
                    </ul>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <form id="chg-profile" action="" method="POST">
                                <div class="form-group row">
                                    <div class="col">
                                        <label for="">Firstname</label>
                                        <input class="form-control" type="text" name="firstname" value="<?= $data['firstname'] ?>">
                                    </div>
                                    <div class="col">
                                        <label for="">Lastname</label>
                                        <input class="form-control" type="text" name="lastname" value="<?= $data['lastname'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label for="">Phone</label>
                                        <input class="form-control" type="text" name="phone" value="<?= $data['phone'] ?>">
                                    </div>
                                    <div class="col">
                                        <label for="">National</label>
                                        <!-- <input class="form-control" type="text"> -->
                                        <select name="national" class="form-control">
                                            <?php
                                            for ($i = 0; $i < count($countries); $i++) {
                                                if ($i == $data['national']) {
                                                    echo "<option value='$i' selected>$countries[$i]</option>";
                                                } else {
                                                    echo "<option value='$i'>$countries[$i]</option>";
                                                }
                                                // echo "<option value='$i'>$countries[$i]</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-check row">
                                    <div class="col">
                                        <?php
                                        if ($data['gender'] == 0) {
                                            echo '<input class="form-check-input" type="radio" name="gender" value="male" checked>';
                                        } else {
                                            echo '<input class="form-check-input" type="radio" name="gender" value="male">';
                                        }
                                        ?>
                                        <label class="form-check-label" for="gender-radio">
                                            Male
                                        </label>
                                    </div>
                                    <div class="col">
                                        <?php
                                        if ($data['gender'] == 1) {
                                            echo '<input class="form-check-input" type="radio" name="gender" value="female" checked>';
                                        } else {
                                            echo '<input class="form-check-input" type="radio" name="gender" value="female">';
                                        }
                                        ?>
                                        <!-- <input class="form-check-input" type="radio" name="gender" value="female"> -->
                                        <label class="form-check-label" for="exampleRadios1">
                                            Female
                                        </label>
                                    </div>
                                </div>
                                <div class="row mt-2 justify-content-center">
                                    <div class="col-8">
                                        <div class="alert d-none">

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col d-flex justify-content-end">
                                        <button onclick="update_user_info()" class="btn btn-primary" type="button">Save Changes</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>



                <div id="chg-password">
                    <div class="profile-header">
                        <h2>Change password</h2>
                    </div>
                    <ul class="nav nav-tabs mt-3">
                        <li class="nav-item"><a href="#" class="active nav-link">Password</a></li>
                    </ul>
                    <form action="">
                        <div class="row mt-2 justify-content-center">
                            <div class="col-10 col-sm-10 col-md-10 col-lg-8 col-xl-8">
                                <div class="form-group">
                                    <label for="current-password">Current password</label>
                                    <input id="current-password" class="form-control" type="password" placeholder="Current Password" name="old-password">
                                </div>
                                <div class="form-group">
                                    <label for="new-password">New password</label>
                                    <input id="new-password" class="form-control" type="password" placeholder="New Password" name="new-password">
                                </div>
                                <div class="form-group">
                                    <label for="confirm-password">Confirm password</label>
                                    <input id="confirm-password" class="form-control" type="password" placeholder="Confirm Password" name="confirm-password">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2 justify-content-center">
                            <div class="col-8">
                                <div class="alert d-none">

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-11 col-sm-11 col-md-11 col-lg-10 col-xl-10 d-flex justify-content-end">
                                <button onclick="change_password()" class="btn btn-primary" type="button">Save Changes</button>
                            </div>
                        </div>
                    </form>
                </div>


                <?php
                if ($_SESSION['role'] != 0) {
                ?>
                    <div id="top-up">
                        <div class="profile-header">
                            <h2>Top Up Money</h2>
                        </div>
                        <ul class="nav nav-tabs mt-3">
                            <li class="nav-item"><a href="#" class="active nav-link">Top up</a></li>
                        </ul>
                        <form action="">
                            <div class="row mt-3 justify-content-center">
                                <div class="col-10 col-sm-10 col-md-10 col-lg-8 col-xl-8">
                                    <div class="form-group">
                                        <label for="current-money">Current money</label>
                                        <input class="form-control" id="current-money" type="text" value="<?php echo $data['money'] . ' VND' ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="serial-number">Serial number</label>
                                        <input id="serinal-number" type="text" class="form-control" name="serial" placeholder="Serial number">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2 justify-content-center">
                                <div class="col-8">
                                    <div class="alert d-none">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-11 col-sm-11 col-md-11 col-lg-10 col-xl-10 d-flex justify-content-end">
                                    <button onclick="topup_money()" class="btn btn-primary" type="button">Confirm</button>
                                </div>
                            </div>
                        </form>
                        <ul class="nav nav-tabs mt-3">
                            <li class="nav-item"><a href="#" class="active nav-link">Top up history</a></li>
                        </ul>
                        <div class="row mt-3 justify-content-center">
                            <div class="col-12">
                                <div class="table-wrapper-scroll-y my-custom-scrollbar">

                                    <table class="table table-bordered table-striped mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Serial number</th>
                                                <th scope="col">Denominations</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if ($topup_body['code'] == 0) {
                                                for ($i = 0; $i < count($topup_body['data']); ++$i) {
                                            ?>
                                                    <tr>
                                                        <th scope="row"><?= $i ?></th>
                                                        <td><?= $topup_body['data'][$i][0] ?></td>
                                                        <td><?= $topup_body['data'][$i][1] ?></td>
                                                    </tr>
                                                <?php
                                                }
                                            } else {
                                                ?>
                                                <td class="text-center" colspan="3"><?= $topup_body['message'] ?></td>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>

                <?php
                if ($_SESSION['role'] == 2) {
                ?>
                    <div id="upgrade">
                        <div class="profile-header">
                            <h2>Upgrade to developer</h2>
                        </div>
                        <ul class="nav nav-tabs mt-3">
                            <li class="nav-item"><a href="#" class="active nav-link">Upgrade form</a></li>
                        </ul>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <form action="" method="POST">
                                <input type="hidden" name="email" value="<?= $_SESSION['username'] ?>">
                                    <div class="row mt-2 justify-content-center">
                                        <div class="col-10 col-sm-10 col-md-10 col-lg-8 col-xl-8">
                                            <div class="form-group row">
                                                <label>Your developer name</label>
                                                <input class="form-control" type="text" placeholder="Your developer name" name="developer-name">
                                            </div>
                                            <div class="row">
                                                <div class="col-12 mb-3">
                                                    <div class="mx-auto">
                                                        <p>Front of ID Card</p>
                                                        <div class="d-flex justify-content-center align-items-center rounded">
                                                            <span>200x140</span>
                                                            <img id="front-img" src="#" />
                                                        </div>
                                                        <input onchange="preview_img(this)" type="file" name="front-id-img" class="mt-2 align-items-center form-control-file" accept="image/*" />
                                                    </div>
                                                </div>
                                                <div class="col-12 mb-3">
                                                    <div class="mx-auto">
                                                        <p>The back of ID Card</p>
                                                        <div class="d-flex justify-content-center align-items-center rounded">
                                                            <span>200x140</span>
                                                            <img id="back-img" src="#" />
                                                        </div>
                                                        <input onchange="preview_img(this)" type="file" name="back-id-img" class="mt-2 align-items-center form-control-file" accept="image/*" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-2 justify-content-center">
                                                <div class="col-12">
                                                    <div class="alert d-none">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 d-flex justify-content-end">
                                                    <button class="btn btn-primary" type="submit">Confirm</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>


                <?php
                if ($_SESSION['role'] == 0) {
                ?>
                    <div id="create-cards">
                        <div class="profile-header">
                            <h2>Create Card</h2>
                        </div>
                        <ul class="nav nav-tabs mt-3">
                            <li class="nav-item"><a href="#" class="active nav-link">Cards</a></li>
                        </ul>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <form action="" method="POST">
                                    <div class="form-group row">
                                        <div class="col-12 col-sm">
                                            <label for="">Number of cards</label>
                                            <input class="form-control" type="text" name="number">
                                        </div>
                                        <div class="col-12 col-sm">
                                            <label for="">Denominations</label>
                                            <!-- <input class="form-control" type="text"> -->
                                            <select class="form-control" name="value">
                                                <option value="50000">50.000 VND</option>
                                                <option value="100000">100.000 VND</option>
                                                <option value="200000">200.000 VND</option>
                                                <option value="500000">500.000 VND</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mt-2 justify-content-center">
                                        <div class="col-8">
                                            <div class="alert d-none">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-end">
                                            <button onclick="create_cards()" class="btn btn-primary" type="button">Confirm</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <ul class="nav nav-tabs mt-3">
                            <li class="nav-item"><a href="#" class="active nav-link">Top up</a></li>
                        </ul>
                        <div class="row mt-3 justify-content-center">
                            <div class="col-12">
                                <div class="table-wrapper-scroll-y my-custom-scrollbar">

                                    <table class="table table-bordered table-striped mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Serial number</th>
                                                <th scope="col">Denominations</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            for ($i = 0; $i < count($card_tbody); ++$i) {
                                                if ($card_tbody[$i][3] == 0) {
                                                    $is_used = 'Unused';
                                                } else {
                                                    $is_used = 'Used';
                                                }
                                                echo '<tr><th scope="row">' . $i + 1 . '</th><td>' . $card_tbody[$i][1] . '</td><td>' . $card_tbody[$i][2] . ' VND</td><td>' . $is_used . '</td></tr>';
                                            }
                                            ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>

    <script src="main.js"></script>
</body>

</html>