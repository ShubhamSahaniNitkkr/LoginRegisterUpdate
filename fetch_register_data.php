<?php
include 'connection.php';


$message='';
if(isset($_POST['email']) && isset($_POST['pswd']) )
{
  $email=$_POST['email'];
  $pwd=$_POST['pswd'];
  $uname=$_POST['uname'];

  $sql=$db->query("SELECT * FROM user WHERE user_email = '$email' ");
  $user = mysqli_fetch_assoc($sql);
  $count=mysqli_affected_rows($db);
  if($count>0)
  {
    echo $message='<p style="color:green;" class="animated shake"> This Account is Already Registered !</p>';
  }
else
{
       $sql2 = $db->query("INSERT INTO user (user_email, user_password, user_name) VALUES ('$email', '$pwd', '$uname')");
       $sql3=$db->query("SELECT * FROM user WHERE user_email = '$email' ");
       $ruser = mysqli_fetch_assoc($sql3);
        $_SESSION['user_name']=$ruser['user_name'];
        $_SESSION['user_type']=$ruser['user_type'];
        $_SESSION['user_image']=$ruser['user_image'];
        $_SESSION['user_status']=$ruser['user_status'];
        $_SESSION['user_email']=$ruser['user_email'];
        $_SESSION['user_id']=$ruser['user_id'];
        echo $message='<p style="color:green;"> You Are SuccesFully Registered !</p>';

  }
}


 ?>
