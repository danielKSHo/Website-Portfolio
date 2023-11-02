<?php
    session_start();

    if (!isset($_SESSION['loggedin'])) {
        // Redirect to login page if user is not logged in
        header("Location: login.php");
        exit();
    }
    
    // Change these to your login credentials
    $servername = "127.0.0.1";
    $username = "root";
    $password = "root";
    $dbname = "portfolioDB";
    
    // Connect to the database
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Searches table for credentials that match
    $query = "SELECT * FROM BLOG";
    $result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Information -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Cascading Style Sheets -->
    <link rel="stylesheet" href="css/readBlog.css">
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
        <h3>Blog</h3>
        <section>
            <?php
                $result = mysqli_query($conn, "SELECT * FROM blog");
                $i = 1;
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="blogDiv" data-blogID="<?php echo $i; ?>">
                        <h5><?php echo $row["title"]; ?></h5>
                        <p class="blogContent"><?php echo $row["content"]; ?><br></p>
                        <h6><?php echo $row["date"]; ?></h6>
                        <h6><?php echo $row["time"]; ?></h6>
                    </div>
                    <?php
                    $i++;
                }
                mysqli_close($conn);
            ?>
            <div id="blogContent" class="blogContent"></div>
        </section>
    </article>
    <aside class="asideInfo">
        <h3>Blog Settings</h3>
        <h5>
            <ul>
                <li><a class="login" href="createBlog.php">Write Blog</a></li>
                <li><a class="login" href="readBlog.php">View Blog</a></li>
            </ul><br>
            
            <p>Current date: <?php echo date('Y-m-d'); ?></p><br>
            <p>Current time: <?php echo date('H:i:s'); ?></p>
        </h5>
    </aside>
    <footer>
        Daniel Ka Sing Ho 2023
    </footer>
    <script src="blogPosts.js"></script>
</body>
</html>