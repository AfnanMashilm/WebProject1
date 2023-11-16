<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("location:login.php");
}

// Read the JSON file
$jsonFile = file_get_contents('../dynamicData/gallery.json');
$imageData = json_decode($jsonFile, true);
$imageNames = $imageData['images'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleGallery.css">
    <link rel="stylesheet" href="../css/icons.css">

    <title>Gallery</title>
    <style>
        body {
            margin: 0;
            background-color: #8d6e6388;
        }

        #container {
            text-align: center;
            margin-top: 160px;
        }

        .gallery {
            margin: 0 -10px; /* Add margin to the gallery to create space between images */
        }

        .gallery img {
            width: 320px;
            height: 320px;
            object-fit: cover;
            border-radius: 10%;
            margin: 0 10px; /* Adjust margin to create space between images */
        }

        .gallery img:hover {
            width: 380px;
            height: 380px;
            box-shadow: 23px 4px 78px 38px rgb(109 76 76 / 82%);
        }

        .imgs {
            display: inline-block;
            width: 320px; /* Adjust the width to control the number of images in a row */
            height: 402px;
            background-color: #8d6e63ab;
            margin-bottom: 10px;
            border-radius: 10%;
            position: relative;
        }

        .imgs p {
            margin-top: 2px;
            cursor: zoom-in;
            transition: transform 2s ease;
        }

        input[type=checkbox] {
            display: none;
        }

        input[type=checkbox]:checked~label>img {
            transform: scale(2);
            cursor: zoom-out;
        }

        .row {
            display: block;
            width: 100%;
        }

        #header {
            background: #a1887fe0;
            height: 50px;
            position: fixed;
            top: 0;
            left: 0;
        }

        #dropdown-menu {
            cursor: pointer;
            display: inline-block;
            height: 50px;
            line-height: 50px;
            width: 90px;
            vertical-align: middle;
            color: white;
            background: #a1887fe0;
            font-family: 'Courier New', Courier, monospace;
            font-weight: bold;
            font-size: x-large;
            text-align: center;
        }

        .dropdown-content {
            cursor: pointer;
            display: none;
            background: #a1887ffd;
            position: relative;
            min-width: 160px;
            z-index: 1;
            left: 0;
            font-weight: normal;
            font-size: medium;
        }

        #dropdown-menu li {
            font-family: 'Courier New', Courier, monospace;
            text-align: center;
            list-style-type: none;
        }

        #dropdown-menu ul {
            margin: 0;
            padding: 0;
        }

        #dropdown-menu:hover .dropdown-content {
            display: block;
        }

        #dropdown-menu li:hover {
            background: #94786e;
        }

        .dropdown-content.menu-rtl {
            float: right;
        }

        .dropdown-content a {
            color: white;
            text-decoration: none;
        }

        .content {
            padding-top: 10px;
        }

        #body p {
            text-align: center;
            background: #b8ccf4;
            font-size: xx-large;
            font-family: monospace;
        }

        #body li {
            text-decoration: none;
            color: black;
            list-style-type: none;
            align-items: center;
            display: block;
            padding-bottom: 10px;
        }

        #body li a {
            text-decoration: none;
            color: black;
        }

        #body li a:hover {
            text-decoration: none;
            background-color: #101010;
            font-size: larger;
            color: black;
        }

        #user-welcome {
            display: inline;
            float: right;
            color: white;
            padding: 13px;
            font-family: 'Courier New', Courier, monospace;
            font-weight: bold;
            font-size: large;
        }

        #user-welcome a {
            color: white;
            padding-left: 2px;
            text-decoration: none;
            font-weight: bold;
        }

        #user-welcome a:hover {
            color: rgb(9, 9, 9);
            font-size: larger;
        }

        /* Enlarged Image Sections */
        .enlarged-img-section {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            z-index: 999;
            visibility: hidden;
            opacity: 0;
            transition: visibility 0s, opacity 0.5s linear;
        }

        .enlarged-img-section:target {
            visibility: visible;
            opacity: 1;
        }

        .enlarged-img {
            max-width: 80%;
            max-height: 80%;
            border-radius: 10px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            color: white;
            text-decoration: none;
            font-size: 18px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="row" id="header">
        <div id="dropdown-menu">
            <span><i class="ico burger-ico"></i>MENU</span>
            <div class="dropdown-content">
                <ul>
                    <a href="../indexPage.php">
                        <li><i class="ico ico-l gallery-ico"></i>Main Page</li>
                    </a>
                    <a href="cvPage.php">
                        <li><i class="ico ico-l user-ico"></i>CV</li>
                    </a>
                    <a href="galleryPage.php">
                        <li><i class="ico ico-l wallet-ico"></i>Gallery</li>
                    </a>
                    <a href="contact.php">
                        <li><i class="ico ico-l gallery-ico"></i>Contact</li>
                    </a>
                </ul>
            </div>
        </div>
        <div id="user-welcome">Welcome
            <?php echo $_SESSION["username"]; ?>
            ! <a href="../BE/logout.php"> LogOut 🐇 </a>
        </div>
    </div>

    <div id="container">
        <div class="gallery">
            <?php foreach ($imageNames as $index => $imageName) : ?>
                <div class="imgs">
                    <a href="#zoom_img<?= $index + 1 ?>">
                        <img src="../images/<?= $imageName ?>">
                        <p>----</p>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Enlarged Image Sections -->
    <?php foreach ($imageNames as $index => $imageName) : ?>
        <div id="zoom_img<?= $index + 1 ?>" class="enlarged-img-section">
            <a href="#" class="close-btn">Close</a>
            <img src="../images/<?= $imageName ?>" class="enlarged-img">
        </div>
    <?php endforeach; ?>
</body>

</html>
