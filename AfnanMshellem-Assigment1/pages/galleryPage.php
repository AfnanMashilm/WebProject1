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
        <?php $count = 0; ?>
        <?php foreach ($imageNames as $index => $imageName) : ?>
            <div class="imgs">
                <a href="#zoom_img<?= $index + 1 ?>">
                    <img src="../images/<?= $imageName ?>">
             
                </a>
            </div>
            <?php $count++; ?>
            <?php if ($count % 3 == 0) : ?>
                </div>
                <div class="gallery">
            <?php endif; ?>
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

    <!-- <div id="container">
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
    <?php endforeach; ?> -->
</body>

</html>
