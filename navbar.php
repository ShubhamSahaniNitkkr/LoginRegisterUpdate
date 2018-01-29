<style media="screen">
.open>.dropdown-menu {
    border: 3px solid #3f51b5;
    border-radius: 0px;
    border-top: none;
    font-size: 17px;
}

</style>

<nav class="nav navbar-default animate bounceInDown">
  <a href="index.php" class="navbar-brand">Home </a>
   <ul class="nav navbar-nav">
    <?php if($_SESSION['user_type']='Master'){ ?>
      <li> <a href="users.php">Users</a> </li>
      <li> <a href="category.php">Category</a> </li>
      <li> <a href="brands.php">Brand</a> </li>
      <li> <a href="products.php">Product</a> </li>
    <?php } ?>
    <li> <a href="orders.php">Orders</a> </li>
  </ul>
  <ul class="nav navbar-nav pull-right">
    <li class="dropdown">
      <a href="#" style="min-width: 151px;" class="dropdown-toggle" data-toggle="dropdown"> <span class="label label-pill label-danger"></span> <?=$_SESSION['user_name']?>  </a>
      <ul class="dropdown-menu">
        <li> <a href="profile.php" name="profile" >Your Profile</a> </li>
        <li> <a href="logout.php">Logout</a> </li>
      </ul>
    </li>
  </ul>
  <li class="pull-right"> <img src=<?=$_SESSION['user_image']?> height="50px" width="50px" ></li>
</nav>
