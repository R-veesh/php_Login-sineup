<?php
require_once("includes/functions.inc.php");
section_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blogs</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <!-- NAV -->
  <nav>
    <a href="index.php" class="nav-brand">Blogs</a>
    <ul class="nav-links">
      <li><a href="index.php" class="active">HOME</a></li>
      <li><a href="about.php">ABOUT US</a></li>
      <li><a href="blogs.php">FIND BLOGS</a></li>
      <?php
      if(isset($_SESSION["userid"])) {
        echo '<li><a href="profile.php">PROFILE</a></li>';
        echo '<li><a href="includes/logout.inc.php">LOG OUT</a></li>';
      }
      else {
        echo '<li><a href="signup.php">SIGN UP</a></li>';
        echo '<li><a href="login.php">LOG IN</a></li>';
      }
      ?>
    </ul>
  </nav>


