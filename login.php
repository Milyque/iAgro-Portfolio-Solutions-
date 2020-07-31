<?php

include("dbcon.php");

if (isset($_POST['login'])) {
$email=mysqli_real_escape_string($con, $_POST['email']);
$pwd=mysqli_real_escape_string($con, $_POST['pwd']);

$select_user="select * from register where email='$email' AND pwd='$pwd'";
$query=mysqli_query($con, $select_user);
$check_user=mysqli_num_rows($query);


if ($check_user==1) {
  session_start();
    $_SESSION['email']=$email;
    // $_SESSION['un']=$un;
      echo "<script>alert('Welcome to iAgro Solutions Portfolio'); window.open('home.php','_self') </script>";
}

else {
   	echo "<script> alert('Wrong Email Or Password Try Again') </script>";
    echo "<script> window.open('loginPage.php','_self') </script>";
    }
}
else{
  header('Location: loginPage.php');
}


?>
