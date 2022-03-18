<?php
session_start();
if(!isset($_SESSION['user_id'])){
  header("location: ../../logout.php");
} else if($_SESSION['user_id'] == 'al39cn57ha41p0'){
  include "function.php";
} else{
  header("location: ../../logout.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../../assets/css/style.css">
  <script src="https://rawgit.com/abdennour/hijri-date/master/cdn/hijri-date-latest.js" type="text/javascript" ></script>
  <script src="../../../assets/js/Jquery 3.3.1.JS"></script>
  <script src="../../../assets/js/bootstrap.min.js"></script>
  <script src="../../index.js"></script>

</head>
<body>

  <nav class="navbar shadow navbar-expand-md navbar-light bg-light py-1 px-5" style="margin-bottom:20px;border-bottom:1px solid lightgray;">
      <a class="navbar-brand" href="../../">Админ панель</a>
      <button class="navbar-toggler mt-1" type="button" data-toggle="collapse" data-target="#navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars"></i>
      </button>
      <div class="navbar-collapse collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item py-0"><a href="../hours" class="nav-link">Соатлар</a></li>
              <li class="nav-item py-0"><a href="../article" class="nav-link">Мақола</a></li>
              <li class="nav-item py-0"><a href="../galery" class="nav-link">Галерея</a></li>
              <li class="nav-item py-0"><a href="../mosque" class="nav-link">Масжидлар</a></li>
              <li class="nav-item py-0"><a href="../../logout.php" class="nav-link text-danger">Чиқиш</a></li>
          </ul>
      </div>
  </nav>