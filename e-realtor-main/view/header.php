<?php
session_start();
?>
<header>
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="header-top-left">
                        <a href="./index.php" class="logo">
                            <h2>
                                Real <br />
                                Home
                            </h2>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 ml-auto">
                    <div class="header-top-left d-flex justify-content-end">
                        <p><i class="fa-regular fa-phone"></i> +880194698856</p>
                        <p><i class="fa-regular fa-envelope"></i> example@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <header>
            <!-- desktop menu -->
            <nav class="navbar navbar-expand-md">
                <div class="container">
                    <div class="menu-ham">
                        <i class="fa-sharp fa-regular fa-bars menu-hem-bar"></i>
                        <i class="fa-regular fa-x menu-close d-none"></i>
                    </div>

                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0 main-menu">
                        <li>
                            <a href="./index.php">Home</a>
                        </li>
                        <!-- <li>
                            <a href="./about.php">About</a>
                        </li> -->
                        <!-- <li>
                    <a href="#">Skill</a>
                  </li> -->
                        <li>
                            <a href="./blogs.php">Blogs</a>
                        </li>
                        <li>
                            <a href="./contact.php">Contact</a>
                        </li>
                        <li><a href="./propertySell.php">For Sell</a></li>
                        <li>
                            <?php
                            if (isset($_SESSION['email'])) {
                                echo '<a href="../controller/logout.php"> Logout ('.($_SESSION["email"]).')</a>';
                            } else {
                                echo '<a href="./login.php"> Login </a>';
                            }
                            ?>
                        </li>
                        <li>
                            <?php
                            if (isset($_SESSION['email'])) {
                                echo '<a href="./editProfile.php">Edit Profile</a>';
                            }
                            ?>
                        </li>
                        <li>
                            <?php
                            if (!isset($_SESSION['email'])) {
                                echo '<a href="./registration.php"> Registration </a>';
                            }
                            ?>
                        </li>
                    </ul>

                </div>
            </nav>
        </header>
    </div>
</header>