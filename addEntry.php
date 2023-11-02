<?php

    // Login details for database
    $servername = "127.0.0.1";
    $username = "root";
    $password = "root";
    $dbname = "portfolioDB";

    // Creates connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Checks connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Checks if post button is used
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        // Stores the values from the entry boxes into a variable
        $title = $_POST['title'];
        $content = $_POST['content'];
        date_default_timezone_set('Europe/London');
        $date = date('Y-m-d');
        $time = date('H:i:s');

        // Insert the variables into the BLOG table 
        $postQuery = "INSERT INTO BLOG (title, content, date, time) VALUES ('$title', '$content', '$date', '$time')";
    
        // Checks if data was successfully stored into the table
        if (mysqli_query($conn, $postQuery)) {
            echo "Post created";
            header("Location: readBlog.php");
            exit();
        } else {
            die('Post could not be added');
        }   

    } else {
        echo "Error: Request method not supported";
    }
    $conn->close();
?>
