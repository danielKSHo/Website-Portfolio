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
    <link rel="stylesheet" href="css/createBlog.css">
    <link rel="stylesheet" href="css/mobile.css">
    <link rel="stylesheet" href="css/reset.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display&family=Chelsea+Market&family=Roboto+Serif:opsz,wght@8..144,100&display=swap" rel="stylesheet">
    
    <title>Blog</title>
</head>
<body>
    <header>
        <hgroup>
            <h1>Daniel Ka Sing Ho</h1>
            <h4>Computer Science Student</h4>
            <h6>
                Logged in as
                <?php 
                    if (isset($_SESSION["loggedin"])) {
                        echo $_SESSION["email"];
                    }
                ?>
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
                <li><a class="login" href="logout.php">Logout</a></li>
            </ul>
        </h4>
    </nav>
    <article>
        <form action="addEntry.php" method="POST" id="addpost-form">
            <h3>Blog</h3>
            <fieldset>
                <input class="title" type="text" name="title" id="title" placeholder="Title" required>
            </fieldset>
            <fieldset>
                <textarea name="content" rows="7" id="content" placeholder="Enter your text here" required></textarea>
            </fieldset>
            <fieldset>
                <button type="button" id="preview-button">Preview</button>
                <button type="submit" id="addpost-button">Post</button>
                <button type="reset" id="clear-button">Clear</button>
            </fieldset>
        </form>
    </article>
    <aside class="asideInfo">
        <h3>Blog Settings</h3>
        <h5>
            <ul>
                <li><a class="login" href="createBlog.php">Write Blog</a></li>
                <li><a class="login" href="readBlog.php">View Blog</a></li>
            </ul>
        </h5>
    </aside>
    <footer>
        Daniel Ka Sing Ho 2023
    </footer>
    <script src="createBlogButtons.js"></script>
</body>
</html>