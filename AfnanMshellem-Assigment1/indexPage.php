<?php
session_start();
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
    <!-- <style>
        body {
            margin: 0;
            padding:4px;
            background-image: url('../images/backgroundImg.jpg');
            /* Replace 'path/to/your/image.jpg' with the actual path to your image file */
            background-size: cover;
            background-position: top;
            font-size: larger;
        }
        </style> -->
</head>

<body>
    <div class="row" id="header">
        <div id="dropdown-menu">
            <span><i class="ico burger-ico"></i>MENU</span>
            <div class="dropdown-content">
                <ul>
                    <a href="indexPage.php">
                        <li><i class="ico ico-l gallery-ico"></i>Main Page</li>
                    </a>
                    <a href="./pages/cvPage.php">
                        <li><i class="ico ico-l user-ico"></i>CV</li>
                    </a>
                    <a href="./pages/galleryPage.php">
                        <li><i class="ico ico-l wallet-ico"></i>Gallery</li>
                    </a>
                    <a href="./pages/contact.php">
                        <li><i class="ico ico-l gallery-ico"></i>Contact</li>
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