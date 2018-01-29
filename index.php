<?php
  include 'connection.php';
  if(!isset($_SESSION['user_status']))
  {
    header('Location:login.php');
  }
  include 'includes/header.php';
  ?>
<link rel="stylesheet" href="css/index.css">

  <div class="container-fluid">
    <?php include 'navbar.php' ?>
  </div>

  <?php  include 'includes/footer.php'; ?>
