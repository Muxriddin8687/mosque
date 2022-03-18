<?php

// DBConnection class
require ("../db/DBConnect.php");

// DataBase class
require ("../db/DataBase.php");


$db = new DBConnection();

$table = new DataBase($db);

?>