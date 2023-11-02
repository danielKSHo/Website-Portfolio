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
    <link rel="stylesheet" href="css/education.css">
    <link rel="stylesheet" href="css/mobile.css">
    <link rel="stylesheet" href="css/reset.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display&family=Chelsea+Market&family=Roboto+Serif:opsz,wght@8..144,100&display=swap" rel="stylesheet">
    <title>Education</title>
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
        <h3>Education</h3>
        <section class="sectionA">
            <h5>Queen Mary University of London</h5>
            <i>Sept 2022 – Jun 2025 | East London</i>
            <p>
                BSc (Hons): Computer Science.
            </p>
            <p>
                Relevent Modules: Procedural Programming, 
                Object-Oriented Programming, 
                Fundamentals of Web Technology.
                Developed <i class="skill">initiative</i> and to be more <i class="skill">risk-taking</i>
                by taking the opportunity to study in a new country.
            </p>
        </section>
        <section class="sectionB">
            <h5>St. David’s Catholic College | WJEC</h5>
            <i>Sept 2020 – Jun 2022 | Cardiff</i>
            <p>
                A Levels: 
                Mathematics (A*), 
                Physics (A), 
                Welsh Baccalaureate (A), 
                Computer Science (B).
            </p>
            <p>
                Improved <i class="skill">time management</i> and <i class="skill">numeracy</i> skills 
                from learning STEM subjects at a higher difficulty.
            </p>   
        </section>
        <section class="sectionC">
            <h5>Primo School of Music | Trinity</h5>
            <i>Sept 2015 – Jul 2022 | Cardiff</i>
            <p>
                Level 2 Certificate: 
                Piano Grade 5 in Graded Examination 
                in Music Performance (Merit).
            </p>
            <p>
                Playing piano sharpened eye-hand <i class="skill">coordination</i> 
                between fingers playing the keys and eyes reading the music notes.
            </p>
            
        </section>
        <section class="sectionD">
            <h5>Cathays High School | WJEC</h5>
            <i>Sept 2015 – Jun 2020 | Cardiff</i>
            <p>
                GCSEs: 14 A* to C including Mathematics (A*), 
                Computer Science (A), 
                English Language (B).
            </p>
            <p>
                Built <i class="skill">tenacity</i> to push through GCSEs during the pandemic.
            </p>
        </section>
    </article>
    <aside class="asideInfo">
        <h3>Skills</h3>
        <h4>
            <ul>
                <li>Initiative</li>
                <li>Risk-taking</li>
                <li>Time management</li>
                <li>Numeracy</li>
                <li>Coordination</li>
                <li>Tenacity</li>
            </ul>
        </h4>
    </aside>
    <footer>
        Daniel Ka Sing Ho 2023
    </footer>
</body>
</html>