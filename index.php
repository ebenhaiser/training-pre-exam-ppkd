<?php 
session_start();
require_once 'controller/connection.php';
include 'controller/login-validation.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'inc/style.php' ?>
</head>
<body>
    <div class="wrapper">
        <?php include 'inc/navbar.php' ?>
    </div>


    <?php
  if (isset($_GET['pg'])) {
    if (file_exists('content/' . $_GET['pg'] . '.php')) {
        include 'content/' . $_GET['pg'] . '.php';
    }
  } else {
        include 'content/profile.php';
  }
  ?>
    <?php include 'inc/script.php' ?>
</body>
</html>