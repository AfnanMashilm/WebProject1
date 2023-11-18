<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("location:login.php");
}
?>
<html>

<head>
    <title>
        Contact Page
    </title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            margin: 0;
            background-color: #8d6e6340;
        }
    </style>
</head>

<body>
    <div class="row" id="header">
        <div id="dropdown-menu">
            <span><i class="ico burger-ico"></i>MENU</span>
            <div class="dropdown-content">
                <ul>
                <a href="../index.php">
                        <li>Main Page</li>
                    </a>
                    <a href="cvPage.php">
                        <li>CV</li>
                    </a>
                    <a href="galleryPage.php">
                        <li>Gallery</li>
                    </a>
                    <a href="contact.php">
                        <li>Contact</li>
                    </a>

                </ul>
            </div>
        </div>
        <div id="user-welcome">Welcome
            <?php echo $_SESSION["username"];
            echo '<a href="../BE/logout.php"> LogOut 🐇 </a>';
            ?>
        </div>
    </div>
    <div class="pageContent">
        <div id="imgPage">
            <img src="../images/contact-us.jpg">
            <p>Contact US</p>
        </div>
        <div id="pageDiv">
            <div class="leftPart">
                <div class="info infoLeft">
                    <p> <i class="fas fa-phone"></i>
                        Phone</p>
                    <p><a href="tel:+123456789">+1 (234) 567-89</a></p>
                </div>
                <div class="infoRight info">
                    <p></p> <i class="fas fa-envelope"></i>
                    Email
                    <p><a href="mailto:info@example.com">info@gmail.com</a></p>
                </div>
            </div>
            <div class="rightPart">

                <div class="info infoLeft">
                    <p></p> <i class="fas fa-fax"></i>
                    Fax
                    </p>
                    <p><a href="tel:+123456789">+1 (234) 567-89</a></p>
                </div>

                <div class="info infoRight">
                    <p>
                        <i class="fab fa-instagram"></i>
                        Follow us on Instagram
                    </p>
                    <p> <a href="https://www.instagram.com/your_username/" target="_blank">@your_username</a></p>
                    </p>
                </div>
            </div>
        </div>
        <div class="location">
            <p>
                <i class="fas fa-map-marker-alt"></i>
                Address
            </p>
            <p>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52991.31173193522!2d35.454974303511236!3d33.89076169357833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151f10cdf86989f9%3A0x920ea62c8299d366!2sLebanese%20American%20University!5e0!3m2!1sen!2slb!4v1699704618205!5m2!1sen!2slb"
                    width="400" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>

            </p>
        </div>
    </div>
    <!-- </div> -->
</body>

</html>