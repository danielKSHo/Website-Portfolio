<?php

session_start();

// Change these to your login credentials
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "portfolioDB";

// Connect to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Checks connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connection established";
}

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = $_POST['email']; // Gets variables from form
    $pass1 = $_POST['password1'];

    // Searches table for credentials that match
    $query = "SELECT * FROM USERS WHERE email = '$email' AND password1 = '$pass1'";
    $result = $conn->query($query);

    // If one row is found it means credentials match
    if ($result->num_rows == 1) {
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        header("Location: readBlog.php");
        exit();
    } else {
        $error_message = "Invalid username or password";
    }
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Information -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Cascading Style Sheets -->
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/mobile.css">
    <link rel="stylesheet" href="css/reset.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display&family=Chelsea+Market&family=Roboto+Serif:opsz,wght@8..144,100&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <header>
        <hgroup>
            <h1>Daniel Ka Sing Ho</h1>
            <h4>Computer Science Student</h4>
            <?php if (isset($_SESSION['loggedin'])) { ?>
                <h4>Logged in as <?php echo $_SESSION['email']; ?></h4>
            <?php } ?>
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
                <li><a class="login" href="login.php">Login</a></
            </ul>
        </h4>
    </nav>
    <article>
        <form action="login.php" method="POST">
            <h3>Login</h3>
            <?php if (isset($error_message)) { ?>
                <p class="error"><?php echo $error_message; ?></p>
            <?php } ?>
            <fieldset>
                <label for="US">Username:</label>
                <input type="email" id="US" name="email" placeholder="Email" required>
            </fieldset>
            <fieldset>
                <label for="PW">Password:</label>
                <input type="password" id="PW" name="password1" placeholder="Password" required><br>
            </fieldset>
            <fieldset>
                <button type="submit">Submit</button>
            </fieldset>
        </form>
    </article>
    <aside class="asideInfo">
        <h3>Contacts</h3>
        <h5>
            <ul>
                <li><p class="attribute">Location: </p>Mile End, East London</li>
                <li><p class="attribute">Email: </p>danielKSHo@outlook.com</li>
                <li><p class="attribute">Phone Number: </p>+44 7714 586128</li>
                <li><p class="attribute">LinkedIn: </p><a class="link" href="https://www.linkedin.com/in/dan228/">Profile Link</a></li>
                <li><p class="attribute">GitHub: </p><a class="link" href="https://github.com/danielKSHo">Profile Link</a></li>
            </ul>
        </h5>
    </aside>
    <footer>
        Daniel Ka Sing Ho 2023
    </footer>
</body>
</html>