<?php
    setcookie("TestCookie", '', 1);
    unset($_SESSION['user_id']);
    session_unset();
    session_destroy(); //destroy the session
    header("location: ../index.php"); //to redirect back to "index.php" after logging out
    exit();
?>