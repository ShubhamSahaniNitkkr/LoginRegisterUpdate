<?php
include 'connection.php';
if(!isset($_SESSION['user_status']))
{
  header('Location:login.php');
}
include 'includes/header.php';
?>
<link rel="stylesheet" href="css/profile.css">

<div class="container-fluid col-md-6 col-md-offset-3">
  <h3 class="text-center"> </h3>
  <div class="loginPanel animated bounceIn">
    <div class="col-md-12 loginPanel_Left">
        <img src="<?=$_SESSION['user_image']?>" alt="" width="170px" height="170px" class="image animated bounceIn ">

        <h2><?=$_SESSION['user_name']?></h2>
    </div>


    <div class="col-md-12 loginPanel_Right ">
        <p> <a href="#" style="border:2px solid black;padding:8px;">Update Information</a></p>
        <span id="rresult" style="text-align:left;"></span>
      <div class="row">
        <form class="form-horizontal" method="post">

          <div class="form-group">
            <div class="col-sm-12">
              <input type="text" class="form-control" autocomplete="off" id="username1" placeholder="<?=$_SESSION['user_name']?>" name="username" value="" required>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
              <input type="email" class="form-control" autocomplete="off" id="email1" placeholder="<?=$_SESSION['user_email']?>" name="email" value=""required>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
              <input type="password" class="form-control" id="pwd1" placeholder="Password" name="pwd" required>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-12">
              <input type="password" class="form-control" id="cpwd1" placeholder="Confirm Password" name="cpwd" required>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-12">
              <button type="button" id="update" name="login" class="btn btn-primary login_Button">Update</button>
            <a href="index.php"> <button type="button" id="cancel" name="cancel" class="btn btn-danger">Cancel</button></a>

              <br><br>


            </div>
          </div>
        </form>
      </div>

    </div>

  </div>
</div>

<script type="text/javascript" src="js/profile.js"></script>
<?php
include 'includes/footer.php';
?>
