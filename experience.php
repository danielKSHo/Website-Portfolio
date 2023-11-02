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
    <link rel="stylesheet" href="css/experience.css">
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
        <h3>Experience</h3>
        <section class="sectionA">
            <h5>Sales Ambassators | Retail</h5>
            <i>Apr 2023 – Current | London</i>
            <p>
                Retail Sales Assistant: 
                Going to 150 doors pitching a product helped develop my <a class="skill">communication</a>. 
                Facing lots of rejection reinforced my <a class="skill">perseverance</a>.
            </p>
        </section>
        <section class="sectionB">
            <h5>Moreton Bay Regional Council | Technology</h5>
            <i>Apr 2023 – Apr 2023 | Watford</i>
            <p>
                Forage virtual work experience:
                Enterpreneurship & Innovation: Web Development
                Planned out a website, structuring the navigation 
                and usability of the website using a user flow diagram.
                By utilising <a class="skill">HTML</a> and 
                <a class="skill">CSS</a> I was able to design a website.
            </p>
        </section>
        <section class="sectionC">
            <h5>Institute of Grocery Distribution | Retail</h5>
            <i>Jul 2021 – Jul 2021 | Watford</i>
            <p>
                IGD virtual work experience:
                Joined 500+ people to pitch an idea 
                for an IT and Digital project. 
                Used <a class="skill">enterprising</a> and 
                <a class="skill">innovation</a> skills to combat 
                the slow pace of shopping in large stores.
            </p>
        </section>
        <section class="sectionD">
            <h5>Good Fortune | Hospitality</h5>
            <i>Nov 2020 – Mar 2021 | Cardiff</i>
            <p>
                Temporary Catering Assistant: 
                Supporting 2 co-workers 
                to complete packaging orders enhanced my <a class="skill">preparation</a>. 
                Maintaining a clean workspace 
                and replenishing stock for 16 hours supported <a class="skill">dependency</a>.
            </p>
        </section>
    </article>
    <aside class="asideInfo">
        <h3>Skills</h3>
        <h4>
            <ul>
                <li>Communication</li>
                <li>Perseverance</li>
                <li>Enterprising</li>
                <li>Innovation</li>
                <li>Communication</li>
                <li>Dependency</li>
            </ul>
        </h4>
    </aside>
    <footer>
        Daniel Ka Sing Ho 2023
    </footer>
</body>
</html>