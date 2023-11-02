<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Information -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Cascading Style Sheets -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/mobile.css">
    <link rel="stylesheet" href="css/reset.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display&family=Chelsea+Market&family=Roboto+Serif:opsz,wght@8..144,100&display=swap" rel="stylesheet">
    <title>About</title>
</head>
<body>
    <header>
        <hgroup>
            <h1>Daniel Ka Sing Ho</h1>
            <h4>Computer Science Student</h4>
            <h6>
                <?php if (isset($_SESSION["loggedin"])) { ?>
                        Logged in as
                <?php echo $_SESSION["email"];
                    } ?> 
            </h6>
        </hgroup>
    </header>
    <nav class="navLinks">
        <h4>
            <ul>
                <li><a class="link" href="index.php">About</a></li>
                <li><a class="link" href="education.php">Education</a></li>
                <li><a class="link" href="projects.php">Projects</a></li>
                <li><a class="link" href="experience.php">Experience</a></li>
                <li><a class="link" href="activities.php">Activities</a></li>
                <li><a class="link" href="readBlog.php">Blog</a></li>
                <?php if (isset($_SESSION["loggedin"])) { ?>
                        <li><a class="login" href="logout.php">Logout</a></li>
                <?php } else { ?>
                        <li><a class="login" href="login.php">Login</a></li>
                <?php } ?>
            </ul>
        </h4>
    </nav>
    <article>
        <h3>About</h3>
        <section class="sectionA">
            <div class="content">
                <p>
                    My name is Daniel Ka Sing Ho.
                    Straightforward and down-to-earth mindset. 
                    Determined and self-reliant 
                    that works hard and methodically. 
                    Goal-oriented and enjoys focusing on getting tasks done 
                    and taking on challenges to improve as an individual.
                </p>
            </div>
            <figure class="figure">
                <img src="images/my_profilePicture.png" alt="">
                <figcaption>
                    <i>Daniel Ka Sing Ho</i>
                </figcaption>
            </figure>
        </section>
        <section class="sectionB">
            <div class="content">
                <p>
                    I am a Computer Science Student within
                    the School of Electronic Engineering and Computer Science
                    at Queen Mary University of London. Located by Mile End station, East of London.
                </p>
            </div>
            <figure class="figure">
                <img src="images/QMUL_EECS.png" alt="">
                <figcaption>
                    <i>
                        <p>School of Electrical Engineering</p>
                        <p>and Computer Science</p>
                    </i>
                </figcaption>
            </figure>
        </section>
    </article>
    <aside class="asideInfo">
        <h3>Contacts</h3>
        <h4>
            <ul>
                <li><p class="attribute">Location: </p>Mile End, East London</li>
                <li><p class="attribute">Email: </p>danielKSHo@outlook.com</li>
                <li><p class="attribute">Phone Number: </p>+44 7714 586128</li>
                <li><p class="attribute">LinkedIn: </p><a class="link" href="https://www.linkedin.com/in/dan228/">Profile Link</a></li>
                <li><p class="attribute">GitHub: </p><a class="link" href="https://github.com/danielKSHo">Profile Link</a></li>
            </ul>
        </h4>
    </aside>
    <footer>
        Daniel Ka Sing Ho 2023
    </footer>
</body>
</html>