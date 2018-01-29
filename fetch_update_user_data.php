<?php
include 'connection.php';

  $email1=$_POST['email'];
  $sql6=$db->query("SELECT * FROM user WHERE user_email = '$email1' ");
  $count1=mysqli_affected_rows($db);
  if($count1>0)
  {
    if($email1!=$_SESSION['user_email'])
    echo $message='<p style="color:red;" > Email not Available !</p>';
  }
  else {
    echo $message='';
  }








if(isset($_POST['email']) && isset($_POST['pswd']) && isset($_POST['pswd']) )
{
  $email=$_POST['email'];
  $pwd=$_POST['pswd'];
  $uid=$_SESSION['user_id'];
  $uname=$_POST['uname'];


    $sql2=$db->query("SELECT * FROM user WHERE user_id = '$uid' ");
    $ruser = mysqli_fetch_assoc($sql2);
    $count=mysqli_affected_rows($db);
    if($count>1)
    {
      echo $message='';
      echo $message='<p style="color:green;" class="animated shake"> Email Already Registered Please Try Some Other Email!</p>';

    }
    else {
      $sql = $db->query("UPDATE user SET user_email= '$email' , user_password='$pwd', user_name='$uname' WHERE user_id= '$uid'");
      $sql3=$db->query("SELECT * FROM user WHERE user_id = '$uid' ");
      $ruser = mysqli_fetch_assoc($sql3);
       $_SESSION['user_name']=$ruser['user_name'];
       $_SESSION['user_type']=$ruser['user_type'];
       $_SESSION['user_image']=$ruser['user_image'];
       $_SESSION['user_email']=$ruser['user_email'];

       echo $message='<p style="color:green;" class="animated shake"> Your Information Updated !</p>';
    }
  }
 ?>
