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
    <style>
        .container.mt-5 {
            border-radius: 6px;
            min-width: 520px;
            height: 700px;
            padding-left: 0px;
            background: white;
        }

        .side>ul {
            border-top-left-radius: 6px;
            border-bottom-left-radius: 6px;
            background-color: #7A7A7A;
            height: 700px;
            list-style-type: none;
            text-align: center;
        }

        .side>ul>li {
            height: 55px;
        }

        .side>ul>li:first-child:hover {
            border-top-left-radius: 6px;
        }

        .side>ul>li.li-selected:first-child {
            border-top-left-radius: 6px;
        }

        .side>ul>li:hover {
            background-color: #1DA8C7;
        }

        .side>ul>li>a {
            font-size: 20px;
            font-weight: 550;
            height: 55px;
            display: block;
            color: #f2f2f2;
            padding-top: 12px;
            text-decoration: none;
        }

        .profile-header {
            border-bottom: 1px solid lightgray;
            margin-top: 10px;
        }

        .profile-header>h2 {
            text-align: center;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }

        #edit-profile>.row.mt-3 .mx-auto {
            width: 140px;
        }

        #edit-profile>.row.mt-3 .mx-auto .d-flex {
            height: 140px;
        }

        #edit-profile>.row.mt-3 .mx-auto .d-flex img {
            border-radius: 3px;
            height: 140px;
            width: 140px;
            max-height: 140px;
            max-width: 140px;
        }

        .badge {
            font-size: 15px;
        }

        /* #chg-password>form>.row {
            justify-content: center;
        } */
        .my-custom-scrollbar {
            /* position: relative; */
            height: 200px;
            overflow: auto;
        }

        .table-wrapper-scroll-y {
            display: block;
        }

        #chg-password {
            display: none;
        }

        #top-up {
            display: none;
        }

        #create-cards {
            display: none;
        }

        .alert {
            text-align: center;
        }

        .li-selected {
            background-color: #1DA8C7;
        }

        
    </style>
</head>

<body class="profile">
    <?php
    require_once('db.php');

    $data = get_user_info($_SESSION['username']);

    if ($data['code'] == 0) {
        $data = $data['data'];
    } else {
        die("error");
    }

    // if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['phone'])) {
    //     $result = update_user_info($_SESSION['username'], $_POST['firstname'], $_POST['lastname'], $_POST['phone']);
    //     if ($result['code'] == 0 ) {
    //         $success = "Update your profile successful";
    //     }
    //     else {
    //         $error = $result['message'];
    //     }
    // }
    ?>
    <div class="container mt-5">
        <div class="row">
            <div class="side col-3">
                <ul>
                    <li><a onclick="profile_show(this)" href="#">Profile</a></li>
                    <li><a onclick="profile_show(this)" href="#">Password</a></li>
                    <li><a onclick="profile_show(this)" href="#">Upgrade</a></li>
                    <li><a onclick="profile_show(this)" href="#">Top up</a></li>
                    <li><a onclick="profile_show(this)" href="#">Create Card</a></li>
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
                                    <img src="./image/smuge_the_cat.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                            <div class="text-center text-sm-left mb-2 mb-sm-0">
                                <h4 id="usr-email" class="pt-sm-2 pb-1 mb-0 text-nowrap"><?= $data['email'] ?></h4>
                                <p class="mb-0"><?= $data['firstname'] . ' ' . $data['lastname'] ?></p>
                                <div class="text-muted"><small>Male or Female</small></div>
                                <div class="mt-2">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-fw fa-camera"></i>
                                        <span>Change Photo</span>
                                    </button>
                                </div>
                            </div>
                            <div class="text-center text-sm-right mt-2">
                                <span class="badge badge-secondary">Administrator</span>
                                <div class="text-muted">
                                    <small>National</small>
                                </div>
                                <br>
                                <div>
                                    <button type="button" class="btn btn-primary mt-3">
                                        <span>Save change</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a href="#" class="active nav-link">Profile</a></li>
                    </ul>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <form action="" method="POST">
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
                                        <select class="form-control">
                                            <option value="volvo">Volvo</option>
                                            <option value="saab">Saab</option>
                                            <option value="opel">Opel</option>
                                            <option value="audi">Audi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-check row">
                                    <div class="col">
                                        <input class="form-check-input" type="radio" name="gender" value="male">
                                        <label class="form-check-label" for="gender-radio">
                                            Male
                                        </label>
                                    </div>
                                    <div class="col">
                                        <input class="form-check-input" type="radio" name="gender" value="female">
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
                                    <input class="form-control" id="current-money" type="text" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="serial-number">Serial number</label>
                                    <input id="serinal-number" type="text" class="form-control" name="serial" placeholder="Serial number">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-11 col-sm-11 col-md-11 col-lg-10 col-xl-10 d-flex justify-content-end">
                                <button class="btn btn-primary" type="submit">Confirm</button>
                            </div>
                        </div>
                    </form>
                    <ul class="nav nav-tabs mt-3">
                        <li class="nav-item"><a href="#" class="active nav-link">Previous Top up</a></li>
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
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">6</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>



                <div id="create-cards">
                    <div class="profile-header">
                        <h2>Create Card</h2>
                    </div>
                    <ul class="nav nav-tabs mt-3">
                        <li class="nav-item"><a href="#" class="active nav-link">Top up</a></li>
                    </ul>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <form action="" method="POST">
                                <div class="form-group row">
                                    <div class="col">
                                        <label for="">Number of cards</label>
                                        <!-- <input class="form-control" type="text"> -->
                                        <select class="form-control">
                                            <option value="1">1</option>
                                            <option value="5">5</option>
                                            <option value="10">10</option>
                                            <option value="20">20</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                            <option value="500">500</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="">Valuable</label>
                                        <!-- <input class="form-control" type="text"> -->
                                        <select class="form-control">
                                            <option value="10">10.000 VND</option>
                                            <option value="20">20.000 VND</option>
                                            <option value="50">50.000 VND</option>
                                            <option value="100">100.000 VND</option>
                                            <option value="200">200.000 VND</option>
                                            <option value="500">500.000 VND</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-end">
                                        <button class="btn btn-primary" type="submit">Confirm</button>
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
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">6</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <script src="main.js"></script>
</body>

</html>