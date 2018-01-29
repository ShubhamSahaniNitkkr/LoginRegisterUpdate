<?php
include 'connection.php';
include 'includes/header.php';


?>
<!--Custom Css-->
<link rel="stylesheet" href="css/login.css">

    <div class="container-fluid col-md-6 col-md-offset-3">
      <h3 class="text-center"> </h3>
      <div class="loginPanel animated bounceInLeft">

        <div class="col-md-5 loginPanel_Left">
          <h2>Admin Panel</h2>
          <br>
            <img src="images/common.jpg" alt="" class="image animated bounceIn ">
        </div>


        <div class="col-md-7 loginPanel_Right ">
         <a data-toggle="tab" href="#home" >Login </a>  /  <a data-toggle="tab" href="#signup">Sign Up</a>
        <div class="tab-content">

          <div id="home" class="tab-pane fade in active">
            <br>
            <span id="result"></span>

          <div class="row">
            <form class="form-horizontal" method="post">
              <div class="form-group">
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-10">
                  <button type="button" id="login" name="login" class="btn btn-primary login_Button">LOGIN</button>

                  <a href="https://github.com/ShubhamSahaniNitkkr"  <i class="fa fa-github pull-right"></i>  </a>
                  <a href="https://www.linkedin.com/in/shubham-sunny-09b013129/"  <i class="fa fa-linkedin pull-right"></i>  </a>
                  <a href="https://twitter.com/ShubhamkrSunny"  <i class="fa fa-twitter pull-right"></i>  </a>
                  <a href="https://www.facebook.com/shubham.sahani.902"   <i class="fa fa-facebook pull-right"></i>  </a>
                  <a href="https://www.facebook.com/shubham.sahani.902"   <i class="fa fa-google pull-right"></i>  </a>

                </div>
              </div>
            </form>
          </div>
          <br><br>
          <div class="row">

          </div>
        </div>


        <!-- sign up tab -->
        <div id="signup" class="tab-pane fade in ">

          <br>
          <span id="rresult"></span>

        <div class="row">
          <form class="form-horizontal" method="post">
            <div class="form-group">
              <div class="col-sm-10">
                <input type="text" class="form-control" id="username1" placeholder="Enter Name" name="email" required>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-10">
                <input type="email" class="form-control" id="email1" placeholder="Enter email" name="email" required>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-10">
                <input type="password" class="form-control" id="pwd1" placeholder="Enter password" name="pwd" required>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-10">
                <input type="password" class="form-control" id="cpwd1" placeholder="Enter confirm password" name="pwd" required>
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-10">
                <button type="button" id="register" name="register" class="btn btn-primary login_Button">REGISTER</button>
                <a href="https://github.com/ShubhamSahaniNitkkr"  <i class="fa fa-github pull-right"></i>  </a>
                <a href="https://www.linkedin.com/in/shubham-sunny-09b013129/"  <i class="fa fa-linkedin pull-right"></i>  </a>
                <a href="https://twitter.com/ShubhamkrSunny"  <i class="fa fa-twitter pull-right"></i>  </a>
                <a href="https://www.facebook.com/shubham.sahani.902"   <i class="fa fa-facebook pull-right"></i>  </a>
                <a href="https://www.facebook.com/shubham.sahani.902"  <i class="fa fa-google  pull-right" aria-hidden="true"></i>  </a>

              </div>
            </div>
          </form>
        </div>
        <div class="row">

        </div>

        </div>
      </div>



</div>








        </div>

      </div>
    </div>

    <script type="text/javascript" src="js/login.js"></script>
    <script type="text/javascript" src="js/register.js"></script>


 <?php include 'includes/footer.php'; ?>
