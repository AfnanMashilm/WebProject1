<?php
    session_start();
    if (!isset($_SESSION["username"])){
        header("location:login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/icons.css">

</head>

<body>
  
    <div class="row" id="header">
        <div id="dropdown-menu">
            <span><i class="ico burger-ico"></i>MENU</span>
            <div class="dropdown-content">
                <ul>
                    <a href="../index.php">
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
            <?php echo $_SESSION["username"];
            
            echo '! <a href="../BE/logout.php"> LogOut 🐇</a>' ;
            ?>
        </div>
    </div>


    <div class="container">
        <div id="start-header">
            <div class="first-half">
                <img src="../images/profile.jpg">
            </div>
            <div class="second-half">
                <b>Afnan Mshellem </b>
            </div>
        </div>
        <div id="page-content">
            <div id="part30">
                <h2 class="titles"> Contact</h2>
                <ul>
                    <li><i class="fa fa-envelope"></i>
                        afnan.mashilm@lau.edu
                    </li>
                    <li><i class="fa fa-phone"></i>
                        78855867</li>


                    <li><i class="fa fa-home">
                        </i>Lebanon,Saida</li>
                </ul>
                <h2 class="titles"> Skills</h2>
                <ul>
                    <li>Time Management</li>
                    <li>Communication</li>
                    <li>Creative design</li>
                    <li>Teamwork</li>
                </ul>

                <h2 class="titles">Computer skills</h2>
                <ul>
                    <li>Java </li>
                    <div class="progress-container">
                        <div class="progress-bar" style=" width:90%;"></div>
                    </div>
                    <li> C</li>
                    <div class="progress-container">
                        <div class="progress-bar" style=" width:70%;"></div>
                    </div>
                    <li>SQL</li>
                    <div class="progress-container">
                        <div class="progress-bar" style=" width:80%;"></div>
                    </div>
                    <li>PHP</li>
                    <div class="progress-container">
                        <div class="progress-bar" style=" width:70%;"></div>
                    </div>
                    <li>HTML</li>
                    <div class="progress-container">
                        <div class="progress-bar" style=" width:85%;"></div>
                    </div>
                    <li>CSS</li>
                    <div class="progress-container">
                        <div class="progress-bar" style=" width:80%;"></div>
                    </div>
                </ul>
                <h2 class="titles">Languages</h2>
                <ul>
                    <li> English</li>
                    <li>Arabic</li>
                </ul>
            </div>
            <div id="part70">
                <h2 class="titles"> Objective</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni perferendis ea possimus consequuntur,
                    odit eum dolor similique dolorum, earum quam voluptatum reiciendis doloremque nihil! Deleniti
                    voluptas facere ad ut autem expedita error inventore nostrum necessitatibus maiores. Quisquam
                    tenetur eius, possimus error, rerum inventore, numquam accusamus ipsum unde officiis aliquid vero?
                </p>
                <h2 class="titles"> Education</h2>
                <h3 class="subtitle">Lebanese American University, Beirut, Lebanon </h3>
                <p class="date">09/2021 to present</p>
                <ul>
                    <li>Expected Date of Graduation in June 2024 </li>
                    <li>Bachelor of Science in Computer Science</li>
                    <li>Enrolled on a full merit and leadership scholarship funded by USAID</li>
                </ul>
                <h2 class="titles"> Experience</h2>
                <h3 class="subtitle">OpenTech Company, Saida, Lebanon </h3>
                <p class="date">07/2023 to present</p>

                <ul>
                    <li>Position: Full Stuck Web Development </li>
                    <ul>
                        <li class="subtitle">
                            Responsibilities:
                        </li>
                        <li>Working with HTML, CSS, PHP,and MySql </li>
                        <li>Implementation of a full e-commerce website </li>

                    </ul>

                </ul>
                <h2 class="titles"> Extracurricular Activities</h2>
                <h3 class="subtitle">Lebanese American University, Beirut, Lebanon</h3>
                <p class="date">2021 to present</p>
                <ul>
                    <li>Member of the Computer Science Club, 2021-Present </li>
                    <li>Member of the Photography Club, 2021-2022 </li>
                    <li>Member of the Red Cross Club, 2022-2023 </li>
                </ul>
                <hr>
                <h3 class="subtitle">	Volunteered with various NGOs:</h3>
                <p class="date">2021 to present</p>
                <ul>
                    <p>Several volunteering programs (Data entry, Food distribution, and Interviewing beneficiaries) at: </p>
                    <li>Al Reaya</li>
                    <li> Grassroots </li>
                    <li>Food Blessed</li>
                    <li>Lebanese Vegans Social Hub</li>
                </ul>
                
            </div>
        </div>
    </div>
    <div id="footer">
        
    </div>
</body>

</html>
