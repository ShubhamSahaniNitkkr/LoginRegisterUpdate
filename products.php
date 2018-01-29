<?php
include 'connection.php';
if(!isset($_SESSION['user_status']))
{
  header('Location:login.php');
}

include 'includes/header.php';

?>
<link rel="stylesheet" href="css/login.css">
<link rel="stylesheet" href="css/index.css">

<?php include 'navbar.php' ?>


<?php

include 'includes/footer.php';

?>
