<?php
    ?>
    <div id="header" class="header">
        <div class="header-img">
            <a href="index.php">
                <img src="./image/googleplayicon.png" alt="" />
            </a>
        </div>
        <div class="header-search">
            <div class="header-box">
                <input oninput="suggest(this.value)" type="text" id="search-box" name="search-box" placeholder="Search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </div>
            <ul id="suggestions"  class="list-group my-0">
                <!-- <li class="list-group-item">Vietnam</li>
                <li class="list-group-item">Lao</li>
                <li class="list-group-item">Cambodia</li>
                <li class="list-group-item">Singapore</li> -->
            </ul>
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
                        <li><img src="./image/log-out.svg"><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="navbar" class="select-navbar">
        <div class="nav-element f-e">
            <a href="seemore.php">Apps</a>
        </div>
        <div class="nav-element" onclick="reponsiveCategories()">
            <a class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Categories
            </a>
            <div class="dropdown-menu">
                <div class="dropdown-bar">
                    <strong style="font-weight: bold;" class="dropdown-item">Rated</strong>
                    <div class="dropdown-divider"></div>
                    <?php
                        foreach($content[1] as $item){
                            ?>
                                <a class="dropdown-item" href="seemore.php?rated=<?= $item ?>"><?= $item ?></a>
                            <?php
                        }
                    ?>
                </div>          
                <div class="dropdown-bar">
                    <strong style="font-weight: bold;" class="dropdown-item">Category</strong>
                    <div class="dropdown-divider"></div>
                    <?php
                        foreach($content[0] as $item){
                            ?>
                                <a class="dropdown-item" href="seemore.php?cate=<?= $item ?>"><?= $item ?></a>
                            <?php
                        }
                    ?>
                    </div>
            </div>
        </div>
        <div class="nav-element">
            <a href="index.php">Home</a>
        </div>
        <div class="nav-element">
            <a href="#top">Top charts</a>
        </div>
        <div class="nav-element">
            <a href="#new">New release</a>
        </div>
    </div>
    <?php
?>