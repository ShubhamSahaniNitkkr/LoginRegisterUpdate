<?php
include 'connection.php';


$message='';
if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['pswd']) && !empty($_POST['pswd']) )
{
  $email=$_POST['email'];
  $pwd=$_POST['pswd'];


  $sql=$db->query("SELECT * FROM user WHERE user_email = '$email'  AND  user_password = '$pwd' ");
  $user = mysqli_fetch_assoc($sql);
  $count=mysqli_affected_rows($db);

  if($count>0)
  {
      $_SESSION['user_status']=$user['user_status'];
      $_SESSION['user_name']=$user['user_name'];

      if($_SESSION['user_status']=='active')
      {
        $_SESSION['user_type']=$user['user_type'];
        $_SESSION['user_id']=$user['user_id'];
        $_SESSION['user_email']=$user['user_email'];
        $_SESSION['user_image']=$user['user_image'];
        $_SESSION['user_pswd']=$user['user_password'];

        echo $message='successs';
      }
      else
      {
        echo $message='<p style="color:mediumvioletred;" class="animated shake">'.$_SESSION['user_name'].' Your Account has Been Declined,Please Contact Master User!</p>';
      }
  }
  else
  {
    echo $message='<p style="color:#ff00b8;" class="animated shake" >Wrong Email or Password !</p>';
  }
}


 ?>
