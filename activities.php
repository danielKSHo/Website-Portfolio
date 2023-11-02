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
    <link rel="stylesheet" href="css/activities.css">
    <link rel="stylesheet" href="css/mobile.css">
    <link rel="stylesheet" href="css/reset.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display&family=Chelsea+Market&family=Roboto+Serif:opsz,wght@8..144,100&display=swap" rel="stylesheet">
    <title>Activities</title>
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
        <h3>Activities</h3>
        <section class="sectionA">
            <h5>Muay Thai</h5>
            <i>Jul 2022 – Current</i>
            <p>
                Mediated <i class="skill">discipline</i> 
                to always be ready to fight against opponents 1 on 1.
                Learned how to attack, defend, and counter opponents.
            </p>
        </section>
        <section class="sectionB">
            <h5>Cooking</h5>
            <i>Jan 2023 – Current</i>
            <p>
                Improved <i class="skill">planning</i> abilities 
                from preparing the correct ingredients to 
                following the instructions carefully.
                Learned to keep in mind 
                the 4 C’s – Cleaning, Cooking, Chilling, Cross-contamination.
            </p>
        </section>
        <section class="sectionC">
            <h5>Rugby</h5>
            <i>Feb 2023 – Current</i>
            <p>
                Facilitated <i class="skill">unity</i> and 
                <i class="skill">critical thinking</i> 
                since rugby requires to be in sync with fellow teammates 
                and to act within a quick environment.
                Played with up to 14 other teammates, 
                developing physical endurance and strengthening mindset.
            </p>
        </section>
        <section class="sectionD">
            <h5>Gaming</h5>
            <i>Jan 2018 – Current</i>
            <p>
                Playing games amongst 3.09 billion players increased <i class="skill">problem-solving</i> skills. 
                Games challenge the brain repeatably by allowing the user to overcome many puzzling scenarios.
            </p>
        </section>
    </article>
    <aside class="asideInfo">
        <h3>Skills</h3>
        <h4>
            <ul>
                <li>Discipline</li>
                <li>Planning</li>
                <li>Unity</li>
                <li>Critical Thinking</li>
                <li>Problem-solving</li>
            </ul>
        </h4>
    </aside>
    <footer>
        Daniel Ka Sing Ho 2023
    </footer>
</body>
</html>