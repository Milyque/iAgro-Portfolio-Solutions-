<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/indexstyle.css">
    <link rel="stylesheet" href="../css/loginstyle.css">
    <link rel="stylesheet" href="../css/home.css">
    <title>Log-In Page | i-Agro_solution</title>
  </head>
  <body>

    <header>
      <div class="logo">
        <img src="../img/aglogo.png" alt="">
        <p style="color: lightgreen; position:absolute;left:100%; top: 10px; font-weight: bolder; font-size: 20px;"><span style="color:darkorange;">i</span>AGRO <span style="color: white;">Solution</span></p>

      </div>
    </header>

    <center><section id="contain-index" style="padding-top:5%; height:450px;">

    <form class="log" method="post" action="login-php.php">
      <h4 style="color: white;">Log-in pane</h4>
      <input type="text" name="un" placeholder="Your Username" required focus>
      <input type="Password" name="pwd" placeholder="Password" required>
      <input type="submit" name="adm_login" id="btn" value="Login" style="width: 30%; float: left; margin-left: 25%; border: none;font-size: 15px;" ><br>
      <a href="../index.php" id="btn" style="color: white; background:red;">Cancel </a>
      
    </form>

  </section></center>

  <?php include('adm-footer.php') ?>

  </body>
</html>


<?php

//   include("../dbcon.php");
//
//   if (isset($_POST['adm_login'])) {
//   $un=mysqli_real_escape_string($con, $_POST['un']);
//   $pwd=mysqli_real_escape_string($con, $_POST['pwd']);
//
//   $select_user="select * from admin where un='$un' AND pwd='$pwd'";
//   $query=mysqli_query($con, $select_user);
//   $check_user=mysqli_num_rows($query);
//   $row=mysqli_fetch_array($query);
//
//   if ($check_user==1) {
//     echo "<script>alert('Welcome'); window.open('adm-home.php','_self') </script>";
//     session_start();
//   }
//
//   else {
//       echo "<script> alert('Wrong Email Or Password Try Again'); window.open('adm-login.php','_self') </script>";
//   }
// }


?>
