<?php
    session_start();

    // Removes session variables
    session_unset(); 
    
    // Ends session
    session_destroy();

    // Go back to the login.php page
    header("Location: login.php");
?>
