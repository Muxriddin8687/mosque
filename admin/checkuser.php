<?php

include('inc/connect.php');

$username = $_POST['username'];
$password = $_POST['password'];

$sql = mysqli_query($link, "SELECT * FROM `admin` WHERE name='{$username}' AND password=MD5('{$password}')");
$res = $sql->fetch_assoc();

if(!empty($res)) {
    session_start();
    $_SESSION['user_id'] = 'al39cn57ha41p0';

    $arr_cookie_options = array (
        'expires' => time() + 10,
        'path' => '/',
        'domain' => '.example.com', // leading dot for compatibility or use subdomain
        'secure' => true,     // or false
        'httponly' => true,    // or false
        'samesite' => 'None' // None || Lax  || Strict
        );
    setcookie("TestCookie", '', $arr_cookie_options);
    echo "true";
} else {
    echo "false";
}


?>
