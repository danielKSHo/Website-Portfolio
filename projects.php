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
    <link rel="stylesheet" href="css/projects.css">
    <link rel="stylesheet" href="css/mobile.css">
    <link rel="stylesheet" href="css/reset.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display&family=Chelsea+Market&family=Roboto+Serif:opsz,wght@8..144,100&display=swap" rel="stylesheet">
    <title>Projects</title>
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
        <h3>Projects</h3>
        <section class="sectionA">
            <h5>Portfolio Website</h5>
            <i>Mar 2022 – Current</i>
            <p>
                Designed a portfolio to showcase all achievements and experiences.
                Learned the fundamentals of front-end programming using 
                the 3 following languages – <i class="skill">HyperText Markup Language</i>, 
                <i class="skill">Cascading Style Sheets</i>, 
                and <i class="skill">JavaScript</i>. 
            </p>
        </section>
        <section class="sectionB">
            <h5>Castle Board Game</h5>
            <i>Oct 2022 – Dec 2022</i>
            <p>
                Created using <i class="skill">Java</i> in a procedural style. 
                The board has 100 spaces and uses a randomiser to move. 
                User has 5 lives and can lose the lives if landed on booby traps.
            </p>
        </section>
        <section class="sectionC">
            <h5>Restaurant Ordering System</h5>
            <i>Sept 2021 – May 2022</i>
            <p>
                Developed using <i class="skill">Python</i> in a procedural programming style 
                with the use of the Tkinter GUI module. 
                Implemented 4 user sections – Login, Customer, Staff, Menu. 
                Can store data in text files and display invoices of orders.
            </p>
        </section>
    </article>
    <aside class="asideInfo">
        <h3>Programming Languages</h3>
        <h4>
            <ul>
                <li>Python</li>
                <li>Java</li>
                <li>HTML - HyperText Markup Language</li>
                <li>CSS - Cascading Style Sheets</li>
                <li>JavaScript</li>
                <li>PHP - Hypertext Preprocessor</li>
            </ul>
        </h4>
    </aside>
    <footer>
        Daniel Ka Sing Ho 2023 | Projects on my GitHub: <a class="link" href="https://github.com/danielKSHo">Here</a>
    </footer>
</body>
</html>