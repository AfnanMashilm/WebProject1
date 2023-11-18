<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("location:login.php");
}

// session_unset();
// session_destroy();
?>
<html>

<head>
    <title>
        My 1st Page
    </title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/icons.css">
    <style>
        body {
         
            padding:4px;
            background-image: url('./images/backgroundImg.jpg');
            background-size: cover;
            background-position: top;
            font-size: larger;
        }
        </style>
</head>

<body>
    <div class="row" id="header">
        <div id="dropdown-menu">
            <span><i class="ico burger-ico"></i>MENU</span>
            <div class="dropdown-content">
                <ul>
                <a href="index.php">
                        <li>Main Page</li>
                    </a>
                    <a href="./pages/cvPage.php">
                        <li>CV</li>
                    </a>
                    <a href="./pages/galleryPage.php">
                        <li>Gallery</li>
                    </a>
                    <a href="./pages/contact.php">
                        <li>Contact</li>
                    </a>

                </ul>
            </div>
        </div>
        <div id="user-welcome">Welcome
            <?php echo $_SESSION["username"]; 
            echo '! <a href="../BE/logout.php"> LogOut 🐇</a>' ;
            ?>
        </div>
    </div>
    <div class="content">
        <div id="titlePage">
            Main Page
        </div>
    </div>
</body>

</html>