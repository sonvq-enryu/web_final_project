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
    <link rel="stylesheet" href="./css/css.css">
    <title>Index</title>
</head>

<body onresize="resize()" class="index">
    <div id="header" class="header">
        <div class="header-img">
            <a href="index.php">
                <img src="./image/googleplayicon.png" alt="" />
            </a>
        </div>
        <div class="header-box">
            <input type="text" id="search-box" name="search-box" placeholder="Search">
            <button type="submit"><i class="fa fa-search"></i></button>
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
    <div id="navbar" class="select-navbar">
        <div class="nav-element f-e">
            <a href="#app">Apps</a>
        </div>
        <div class="nav-element" onclick="reponsiveCategories()">
            <a class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Categories
            </a>
            <div class="dropdown-menu">
                <div class="dropdown-bar">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div> 
                <div class="dropdown-bar">
                    <strong style="font-weight: bold;" class="dropdown-item">Category</strong>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>          
                <div class="dropdown-bar">
                    <strong style="font-weight: bold;" class="dropdown-item">Category</strong>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
                <div class="dropdown-bar">
                    <strong style="font-weight: bold;" class="dropdown-item">Category</strong>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
                <div class="dropdown-bar">
                    <strong style="font-weight: bold;" class="dropdown-item">Category</strong>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
        <div class="nav-element">
            <a href="#home">Home</a>
        </div>
        <div class="nav-element">
            <a href="#top">Top charts</a>
        </div>
        <div class="nav-element">
            <a href="#new">New release</a>
        </div>
    </div>
    <div class="flex-container">
        <div id="sidebar" class="sidebar">
            <ul class="menu">
                <li><a href="#home">Home</a></li>
                <li><a href="#news">News</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#about">About</a></li>
            </ul>
        </div>
        <div class="content">
            <div class="apps-menu">
                <div class="info-row">
                    <h2>Popular Apps</h2>
                    <div>
                        <button>See more</button>
                    </div>
                </div>
                <div class="apps-row">
                    <div class="app-card">
                        <div class="app-img">
                            <a href="#GameX"><img src="./image/smuge_the_cat.jpg" /></a>
                        </div>
                        <div class="app-name">
                            <a href="#GameX">Game X</a>
                        </div>
                        <div class="app-coop">
                            <a href="#X-Cooporation">X Cooporation</a>
                        </div>
                        <div class="rating">
                            4.5<span class="fa fa-star checked"></span></p>
                        </div>
                    </div>
                    <div class="app-card">
                        <div class="app-img">
                            <a href="#GameX"><img src="./image/smuge_the_cat.jpg" /></a>
                        </div>
                        <div class="app-name">
                            <a href="#GameX">Game X</a>
                        </div>
                        <div class="app-coop">
                            <a href="#X-Cooporation">X Cooporation</a>
                        </div>
                        <div class="rating">
                            4.5<span class="fa fa-star checked"></span></p>
                        </div>
                    </div>
                    <div class="app-card">
                        <div class="app-img">
                            <a href="#GameX"><img src="./image/smuge_the_cat.jpg" /></a>
                        </div>
                        <div class="app-name">
                            <a href="#GameX">Game X</a>
                        </div>
                        <div class="app-coop">
                            <a href="#X-Cooporation">X Cooporation</a>
                        </div>
                        <div class="rating">
                            4.5<span class="fa fa-star checked"></span></p>
                        </div>
                    </div>
                    <div class="app-card">
                        <div class="app-img">
                            <a href="#GameX"><img src="./image/smuge_the_cat.jpg" /></a>
                        </div>
                        <div class="app-name">
                            <a href="#GameX">Game X</a>
                        </div>
                        <div class="app-coop">
                            <a href="#X-Cooporation">X Cooporation</a>
                        </div>
                        <div class="rating">
                            4.5<span class="fa fa-star checked"></span></p>
                        </div>
                    </div>
                    <div class="app-card">
                        <div class="app-img">
                            <a href="#GameX"><img src="./image/smuge_the_cat.jpg" /></a>
                        </div>
                        <div class="app-name">
                            <a href="#GameX">Game X</a>
                        </div>
                        <div class="app-coop">
                            <a href="#X-Cooporation">X Cooporation</a>
                        </div>
                        <div class="rating">
                            4.5<span class="fa fa-star checked"></span></p>
                        </div>
                    </div>
                    <div class="app-card">
                        <div class="app-img">
                            <a href="#GameX"><img src="./image/smuge_the_cat.jpg" /></a>
                        </div>
                        <div class="app-name">
                            <a href="#GameX">Game X</a>
                        </div>
                        <div class="app-coop">
                            <a href="#X-Cooporation">X Cooporation</a>
                        </div>
                        <div class="rating">
                            4.5<span class="fa fa-star checked"></span></p>
                        </div>
                    </div>
                    <div class="app-card">
                        <div class="app-img">
                            <a href="#GameX"><img src="./image/smuge_the_cat.jpg" /></a>
                        </div>
                        <div class="app-name">
                            <a href="#GameX">Game X</a>
                        </div>
                        <div class="app-coop">
                            <a href="#X-Cooporation">X Cooporation</a>
                        </div>
                        <div class="rating">
                            4.5<span class="fa fa-star checked"></span></p>
                        </div>
                    </div>
                    <div class="app-card">
                        <div class="app-img">
                            <a href="#GameX"><img src="./image/smuge_the_cat.jpg" /></a>
                        </div>
                        <div class="app-name">
                            <a href="#GameX">Game X</a>
                        </div>
                        <div class="app-coop">
                            <a href="#X-Cooporation">X Cooporation</a>
                        </div>
                        <div class="rating">
                            4.5<span class="fa fa-star checked"></span></p>
                        </div>
                    </div>
                    <div class="app-card">
                        <div class="app-img">
                            <a href="#GameX"><img src="./image/smuge_the_cat.jpg" /></a>
                        </div>
                        <div class="app-name">
                            <a href="#GameX">Game X</a>
                        </div>
                        <div class="app-coop">
                            <a href="#X-Cooporation">X Cooporation</a>
                        </div>
                        <div class="rating">
                            4.5<span class="fa fa-star checked"></span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="apps-menu">
                <div class="info-row">
                    <h2>Recommend Apps</h2>
                    <div>
                        <button>See more</button>
                    </div>
                </div>
                <div class="apps-row">
                    <div class="app-card">
                        <div class="app-img">
                            <a href="#GameX"><img src="./image/smuge_the_cat.jpg" /></a>
                        </div>
                        <div class="app-name">
                            <a href="#GameX">Game X</a>
                        </div>
                        <div class="app-coop">
                            <a href="#X-Cooporation">X Cooporation</a>
                        </div>
                        <div class="rating">
                            4.5<span class="fa fa-star checked"></span></p>
                        </div>
                    </div>
                    <div class="app-card">
                        <div class="app-img">
                            <a href="#GameX"><img src="./image/smuge_the_cat.jpg" /></a>
                        </div>
                        <div class="app-name">
                            <a href="#GameX">Game X</a>
                        </div>
                        <div class="app-coop">
                            <a href="#X-Cooporation">X Cooporation</a>
                        </div>
                        <div class="rating">
                            4.5<span class="fa fa-star checked"></span></p>
                        </div>
                    </div>
                    <div class="app-card">
                        <div class="app-img">
                            <a href="#GameX"><img src="./image/smuge_the_cat.jpg" /></a>
                        </div>
                        <div class="app-name">
                            <a href="#GameX">Game X</a>
                        </div>
                        <div class="app-coop">
                            <a href="#X-Cooporation">X Cooporation</a>
                        </div>
                        <div class="rating">
                            4.5<span class="fa fa-star checked"></span></p>
                        </div>
                    </div>
                    <div class="app-card">
                        <div class="app-img">
                            <a href="#GameX"><img src="./image/smuge_the_cat.jpg" /></a>
                        </div>
                        <div class="app-name">
                            <a href="#GameX">Game X</a>
                        </div>
                        <div class="app-coop">
                            <a href="#X-Cooporation">X Cooporation</a>
                        </div>
                        <div class="rating">
                            4.5<span class="fa fa-star checked"></span></p>
                        </div>
                    </div>
                    <div class="app-card">
                        <div class="app-img">
                            <a href="#GameX"><img src="./image/smuge_the_cat.jpg" /></a>
                        </div>
                        <div class="app-name">
                            <a href="#GameX">Game X</a>
                        </div>
                        <div class="app-coop">
                            <a href="#X-Cooporation">X Cooporation</a>
                        </div>
                        <div class="rating">
                            4.5<span class="fa fa-star checked"></span></p>
                        </div>
                    </div>
                    <div class="app-card">
                        <div class="app-img">
                            <a href="#GameX"><img src="./image/smuge_the_cat.jpg" /></a>
                        </div>
                        <div class="app-name">
                            <a href="#GameX">Game X</a>
                        </div>
                        <div class="app-coop">
                            <a href="#X-Cooporation">X Cooporation</a>
                        </div>
                        <div class="rating">
                            4.5<span class="fa fa-star checked"></span></p>
                        </div>
                    </div>
                    <div class="app-card">
                        <div class="app-img">
                            <a href="#GameX"><img src="./image/smuge_the_cat.jpg" /></a>
                        </div>
                        <div class="app-name">
                            <a href="#GameX">Game X</a>
                        </div>
                        <div class="app-coop">
                            <a href="#X-Cooporation">X Cooporation</a>
                        </div>
                        <div class="rating">
                            4.5<span class="fa fa-star checked"></span></p>
                        </div>
                    </div>
                    <div class="app-card">
                        <div class="app-img">
                            <a href="#GameX"><img src="./image/smuge_the_cat.jpg" /></a>
                        </div>
                        <div class="app-name">
                            <a href="#GameX">Game X</a>
                        </div>
                        <div class="app-coop">
                            <a href="#X-Cooporation">X Cooporation</a>
                        </div>
                        <div class="rating">
                            4.5<span class="fa fa-star checked"></span></p>
                        </div>
                    </div>
                    <div class="app-card">
                        <div class="app-img">
                            <a href="#GameX"><img src="./image/smuge_the_cat.jpg" /></a>
                        </div>
                        <div class="app-name">
                            <a href="#GameX">Game X</a>
                        </div>
                        <div class="app-coop">
                            <a href="#X-Cooporation">X Cooporation</a>
                        </div>
                        <div class="rating">
                            4.5<span class="fa fa-star checked"></span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="apps-menu">
                <div class="info-row">
                    <h2>Popular Apps</h2>
                    <div>
                        <button>See more</button>
                    </div>
                </div>
                <div class="apps-row">
                    <div class="app-card">
                        <div class="app-img">
                            <a href="#GameX"><img src="./image/smuge_the_cat.jpg" /></a>
                        </div>
                        <div class="app-name">
                            <a href="#GameX">Game X</a>
                        </div>
                        <div class="app-coop">
                            <a href="#X-Cooporation">X Cooporation</a>
                        </div>
                        <div class="rating">
                            4.5<span class="fa fa-star checked"></span></p>
                        </div>
                    </div>
                    <div class="app-card">
                        <div class="app-img">
                            <a href="#GameX"><img src="./image/smuge_the_cat.jpg" /></a>
                        </div>
                        <div class="app-name">
                            <a href="#GameX">Game X</a>
                        </div>
                        <div class="app-coop">
                            <a href="#X-Cooporation">X Cooporation</a>
                        </div>
                        <div class="rating">
                            4.5<span class="fa fa-star checked"></span></p>
                        </div>
                    </div>
                    <div class="app-card">
                        <div class="app-img">
                            <a href="#GameX"><img src="./image/smuge_the_cat.jpg" /></a>
                        </div>
                        <div class="app-name">
                            <a href="#GameX">Game X</a>
                        </div>
                        <div class="app-coop">
                            <a href="#X-Cooporation">X Cooporation</a>
                        </div>
                        <div class="rating">
                            4.5<span class="fa fa-star checked"></span></p>
                        </div>
                    </div>
                    <div class="app-card">
                        <div class="app-img">
                            <a href="#GameX"><img src="./image/smuge_the_cat.jpg" /></a>
                        </div>
                        <div class="app-name">
                            <a href="#GameX">Game X</a>
                        </div>
                        <div class="app-coop">
                            <a href="#X-Cooporation">X Cooporation</a>
                        </div>
                        <div class="rating">
                            4.5<span class="fa fa-star checked"></span></p>
                        </div>
                    </div>
                    <div class="app-card">
                        <div class="app-img">
                            <a href="#GameX"><img src="./image/smuge_the_cat.jpg" /></a>
                        </div>
                        <div class="app-name">
                            <a href="#GameX">Game X</a>
                        </div>
                        <div class="app-coop">
                            <a href="#X-Cooporation">X Cooporation</a>
                        </div>
                        <div class="rating">
                            4.5<span class="fa fa-star checked"></span></p>
                        </div>
                    </div>
                    <div class="app-card">
                        <div class="app-img">
                            <a href="#GameX"><img src="./image/smuge_the_cat.jpg" /></a>
                        </div>
                        <div class="app-name">
                            <a href="#GameX">Game X</a>
                        </div>
                        <div class="app-coop">
                            <a href="#X-Cooporation">X Cooporation</a>
                        </div>
                        <div class="rating">
                            4.5<span class="fa fa-star checked"></span></p>
                        </div>
                    </div>
                    <div class="app-card">
                        <div class="app-img">
                            <a href="#GameX"><img src="./image/smuge_the_cat.jpg" /></a>
                        </div>
                        <div class="app-name">
                            <a href="#GameX">Game X</a>
                        </div>
                        <div class="app-coop">
                            <a href="#X-Cooporation">X Cooporation</a>
                        </div>
                        <div class="rating">
                            4.5<span class="fa fa-star checked"></span></p>
                        </div>
                    </div>
                    <div class="app-card">
                        <div class="app-img">
                            <a href="#GameX"><img src="./image/smuge_the_cat.jpg" /></a>
                        </div>
                        <div class="app-name">
                            <a href="#GameX">Game X</a>
                        </div>
                        <div class="app-coop">
                            <a href="#X-Cooporation">X Cooporation</a>
                        </div>
                        <div class="rating">
                            4.5<span class="fa fa-star checked"></span></p>
                        </div>
                    </div>
                    <div class="app-card">
                        <div class="app-img">
                            <a href="#GameX"><img src="./image/smuge_the_cat.jpg" /></a>
                        </div>
                        <div class="app-name">
                            <a href="#GameX">Game X</a>
                        </div>
                        <div class="app-coop">
                            <a href="#X-Cooporation">X Cooporation</a>
                        </div>
                        <div class="rating">
                            4.5<span class="fa fa-star checked"></span></p>
                        </div>
                    </div>
                    <div class="info-row">
                    <h2>Popular Apps</h2>
                    <div>
                        <button>See more</button>
                    </div>
                </div>
                <div class="apps-row">
                    <div class="app-card">
                        <div class="app-img">
                            <a href="#GameX"><img src="./image/smuge_the_cat.jpg" /></a>
                        </div>
                        <div class="app-name">
                            <a href="#GameX">Game X</a>
                        </div>
                        <div class="app-coop">
                            <a href="#X-Cooporation">X Cooporation</a>
                        </div>
                        <div class="rating">
                            4.5<span class="fa fa-star checked"></span></p>
                        </div>
                    </div>
                    <div class="app-card">
                        <div class="app-img">
                            <a href="#GameX"><img src="./image/smuge_the_cat.jpg" /></a>
                        </div>
                        <div class="app-name">
                            <a href="#GameX">Game X</a>
                        </div>
                        <div class="app-coop">
                            <a href="#X-Cooporation">X Cooporation</a>
                        </div>
                        <div class="rating">
                            4.5<span class="fa fa-star checked"></span></p>
                        </div>
                    </div>
                    <div class="app-card">
                        <div class="app-img">
                            <a href="#GameX"><img src="./image/smuge_the_cat.jpg" /></a>
                        </div>
                        <div class="app-name">
                            <a href="#GameX">Game X</a>
                        </div>
                        <div class="app-coop">
                            <a href="#X-Cooporation">X Cooporation</a>
                        </div>
                        <div class="rating">
                            4.5<span class="fa fa-star checked"></span></p>
                        </div>
                    </div>
                    <div class="app-card">
                        <div class="app-img">
                            <a href="#GameX"><img src="./image/smuge_the_cat.jpg" /></a>
                        </div>
                        <div class="app-name">
                            <a href="#GameX">Game X</a>
                        </div>
                        <div class="app-coop">
                            <a href="#X-Cooporation">X Cooporation</a>
                        </div>
                        <div class="rating">
                            4.5<span class="fa fa-star checked"></span></p>
                        </div>
                    </div>
                    <div class="app-card">
                        <div class="app-img">
                            <a href="#GameX"><img src="./image/smuge_the_cat.jpg" /></a>
                        </div>
                        <div class="app-name">
                            <a href="#GameX">Game X</a>
                        </div>
                        <div class="app-coop">
                            <a href="#X-Cooporation">X Cooporation</a>
                        </div>
                        <div class="rating">
                            4.5<span class="fa fa-star checked"></span></p>
                        </div>
                    </div>
                    <div class="app-card">
                        <div class="app-img">
                            <a href="#GameX"><img src="./image/smuge_the_cat.jpg" /></a>
                        </div>
                        <div class="app-name">
                            <a href="#GameX">Game X</a>
                        </div>
                        <div class="app-coop">
                            <a href="#X-Cooporation">X Cooporation</a>
                        </div>
                        <div class="rating">
                            4.5<span class="fa fa-star checked"></span></p>
                        </div>
                    </div>
                    <div class="app-card">
                        <div class="app-img">
                            <a href="#GameX"><img src="./image/smuge_the_cat.jpg" /></a>
                        </div>
                        <div class="app-name">
                            <a href="#GameX">Game X</a>
                        </div>
                        <div class="app-coop">
                            <a href="#X-Cooporation">X Cooporation</a>
                        </div>
                        <div class="rating">
                            4.5<span class="fa fa-star checked"></span></p>
                        </div>
                    </div>
                    <div class="app-card">
                        <div class="app-img">
                            <a href="#GameX"><img src="./image/smuge_the_cat.jpg" /></a>
                        </div>
                        <div class="app-name">
                            <a href="#GameX">Game X</a>
                        </div>
                        <div class="app-coop">
                            <a href="#X-Cooporation">X Cooporation</a>
                        </div>
                        <div class="rating">
                            4.5<span class="fa fa-star checked"></span></p>
                        </div>
                    </div>
                    <div class="app-card">
                        <div class="app-img">
                            <a href="#GameX"><img src="./image/smuge_the_cat.jpg" /></a>
                        </div>
                        <div class="app-name">
                            <a href="#GameX">Game X</a>
                        </div>
                        <div class="app-coop">
                            <a href="#X-Cooporation">X Cooporation</a>
                        </div>
                        <div class="rating">
                            4.5<span class="fa fa-star checked"></span></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="application-box">
                <div class="col popular">
                    <h2 class="font-header">Popular Games</h2>
                    <div class="row-1">
                        <div class='item'>
                            <div class='card-header'>
                                <div class='item-banner'><img class='banner-source' src="./image/genshin.png"></div>
                            </div>
                            <div class='card-body'>
                                <a href="#">Game 1</a>
                                <h3>Game 1</h3>
                                <p>X Coporation</p>
                                <p class='rating'>4.5<span class="fa fa-star checked"></span></p>
                            </div>
                        </div> 
                        <div class='item'>
                            <div class='card-header'>
                                <div class='item-banner'><img class='banner-source' src="./image/genshin.png"></div>
                            </div>
                            <div class='card-body'>
                                <h3>Game 1</h3>
                                <p>X Coporation</p>
                                <p class='rating'>4.5<span class="fa fa-star checked"></span></p>
                            </div>
                        </div> 
                        <div class='item'>
                            <div class='card-header'>
                                <div class='item-banner'><img class='banner-source' src="./image/genshin.png"></div>
                            </div>
                            <div class='card-body'>
                                <h3>Game 1</h3>
                                <p>X Coporation</p>
                                <p class='rating'>4.5<span class="fa fa-star checked"></span></p>
                            </div>
                        </div> 
                        <div class='item'>
                            <div class='card-header'>
                                <div class='item-banner'><img class='banner-source' src="./image/genshin.png"></div>
                            </div>
                            <div class='card-body'>
                                <h3>Game 1</h3>
                                <p>X Coporation</p>
                                <p class='rating'>4.5<span class="fa fa-star checked"></span></p>
                            </div>
                        </div> 
                        <div class='item'>
                            <div class='card-header'>
                                <div class='item-banner'><img class='banner-source' src="./image/genshin.png"></div>
                            </div>
                            <div class='card-body'>
                                <h3>Game 1</h3>
                                <p>X Coporation</p>
                                <p class='rating'>4.5<span class="fa fa-star checked"></span></p>
                            </div>
                        </div> 
                        <div class='item'>
                            <div class='card-header'>
                                <div class='item-banner'><img class='banner-source' src="./image/genshin.png"></div>
                            </div>
                            <div class='card-body'>
                                <h3>Game 1</h3>
                                <p>X Coporation</p>
                                <p class='rating'>4.5<span class="fa fa-star checked"></span></p>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="col recommend">
                    <h2 class="font-header">Recommend Games</h2>
                    <div class="row-1">
                        <div class='item'>
                            <div class='card-header'>
                                <div class='item-banner'><img class='banner-source' src="./image/genshin.png"></div>
                            </div>
                            <div class='card-body'>
                                <h3>Game 1</h3>
                                <p>X Coporation</p>
                                <p class='rating'>4.5<span class="fa fa-star checked"></span></p>
                            </div>
                        </div> 
                        <div class='item'>
                            <div class='card-header'>
                                <div class='item-banner'><img class='banner-source' src="./image/genshin.png"></div>
                            </div>
                            <div class='card-body'>
                                <h3>Game 1</h3>
                                <p>X Coporation</p>
                                <p class='rating'>4.5<span class="fa fa-star checked"></span></p>
                            </div>
                        </div> 
                        <div class='item'>
                            <div class='card-header'>
                                <div class='item-banner'><img class='banner-source' src="./image/genshin.png"></div>
                            </div>
                            <div class='card-body'>
                                <h3>Game 1</h3>
                                <p>X Coporation</p>
                                <p class='rating'>4.5<span class="fa fa-star checked"></span></p>
                            </div>
                        </div> 
                        <div class='item'>
                            <div class='card-header'>
                                <div class='item-banner'><img class='banner-source' src="./image/genshin.png"></div>
                            </div>
                            <div class='card-body'>
                                <h3>Game 1</h3>
                                <p>X Coporation</p>
                                <p class='rating'>4.5<span class="fa fa-star checked"></span></p>
                            </div>
                        </div> 
                        <div class='item'>
                            <div class='card-header'>
                                <div class='item-banner'><img class='banner-source' src="./image/genshin.png"></div>
                            </div>
                            <div class='card-body'>
                                <h3>Game 1</h3>
                                <p>X Coporation</p>
                                <p class='rating'>4.5<span class="fa fa-star checked"></span></p>
                            </div>
                        </div> 
                        <div class='item'>
                            <div class='card-header'>
                                <div class='item-banner'><img class='banner-source' src="./image/genshin.png"></div>
                            </div>
                            <div class='card-body'>
                                <h3>Game 1</h3>
                                <p>X Coporation</p>
                                <p class='rating'>4.5<span class="fa fa-star checked"></span></p>
                            </div>
                        </div> 
                    </div>
                </div>

                <div class="col recommend">
                    <h2 class="font-header">Recommend Games</h2>
                    <div class="row-1">
                        <div class='item'>
                            <div class='card-header'>
                                <div class='item-banner'><img class='banner-source' src="./image/genshin.png"></div>
                            </div>
                            <div class='card-body'>
                                <h3>Game 1</h3>
                                <p>X Coporation</p>
                                <p class='rating'>4.5<span class="fa fa-star checked"></span></p>
                            </div>
                        </div> 
                        <div class='item'>
                            <div class='card-header'>
                                <div class='item-banner'><img class='banner-source' src="./image/genshin.png"></div>
                            </div>
                            <div class='card-body'>
                                <h3>Game 1</h3>
                                <p>X Coporation</p>
                                <p class='rating'>4.5<span class="fa fa-star checked"></span></p>
                            </div>
                        </div> 
                        <div class='item'>
                            <div class='card-header'>
                                <div class='item-banner'><img class='banner-source' src="./image/genshin.png"></div>
                            </div>
                            <div class='card-body'>
                                <h3>Game 1</h3>
                                <p>X Coporation</p>
                                <p class='rating'>4.5<span class="fa fa-star checked"></span></p>
                            </div>
                        </div> 
                        <div class='item'>
                            <div class='card-header'>
                                <div class='item-banner'><img class='banner-source' src="./image/genshin.png"></div>
                            </div>
                            <div class='card-body'>
                                <h3>Game 1</h3>
                                <p>X Coporation</p>
                                <p class='rating'>4.5<span class="fa fa-star checked"></span></p>
                            </div>
                        </div> 
                        <div class='item'>
                            <div class='card-header'>
                                <div class='item-banner'><img class='banner-source' src="./image/genshin.png"></div>
                            </div>
                            <div class='card-body'>
                                <h3>Game 1</h3>
                                <p>X Coporation</p>
                                <p class='rating'>4.5<span class="fa fa-star checked"></span></p>
                            </div>
                        </div> 
                        <div class='item'>
                            <div class='card-header'>
                                <div class='item-banner'><img class='banner-source' src="./image/genshin.png"></div>
                            </div>
                            <div class='card-body'>
                                <h3>Game 1</h3>
                                <p>X Coporation</p>
                                <p class='rating'>4.5<span class="fa fa-star checked"></span></p>
                            </div>
                        </div> 
                    </div>
                </div>
            </div> -->
        </div>
    </div>

    <script src="javascript/drivers.js"></script>
</body>
</html>