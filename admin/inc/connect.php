<?php

$link = new mysqli('p:localhost','root', '', 'diyonatu_mosque');
$link->set_charset('utf8');

// test input text
function test_input($data)
{
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = filter_var($data, FILTER_SANITIZE_STRING);

    return $data;
}

?>