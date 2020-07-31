<?php include('../dbcon.php'); include('../session.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/indexstyle.css">
    <link rel="stylesheet" href="../css/signstyle.css">
    <link rel="stylesheet" href="../css/loginstyle.css">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/admstyle.css">
    <title>Admin Ddd User | i-Agro_solution</title>
  </head>

  <body>
    <header style="background:green;">
      <div class="logo">
        <img src="../img/aglogo.png" alt="">
        <p style="color: lightgreen; position:absolute;left:100%; top: 10px; font-weight: bolder; font-size: 20px;"><span style="color:darkorange;">i</span>AGRO <span style="color: white;">Solution</span></p>

        <li style="position: absolute; width:120px; margin-left: 900px; margin-top:-80%; padding: 10px;list-style:none; border-right:1px solid white; border-left:1px solid white;"> <a href="adm-logout.php" style="padding:20px; color:White; font-size:20px; text-decoration:none;">Log-out</a> </li>
        </div>

      <?php
        include('../dbcon.php');
        $admin = mysqli_query($con, 'select * from admin where adm_id ="$id_session" ');
        $row =mysqli_fetch_array($admin);

       ?>
       <p style="float:right;color: black;"><?php echo $row['un']; ?></p>
    </header><br><br>

    <section class="section">
      <div class="br-modal" style="text-align:left; margin:5px; margin-bottom: 20px;">
        <div class="breadcramps">
          <a href="adm-home.php">Home</a>
          <a href="adm-user.php">Users</a>
          <a href="adm-user.php" class="active">Add User</a>
        </div>
      </div>

      <div class="fetch">
        <div class="add-admin">
          <a href="adm-user.php" id="btn" class="btn2" style="position:absolute; "> Back</a>
        </div><br>
        <div class="fetch-table">
          <?php
            // $query=mysqli_query($con, "select * from admin where adm_id='$id_session'");
            // $row=mysqli_fetch_array($query);
          ?>
          <form method="post" action="#"  class="edit-form">
   					<input class="edit-input" type="text" name="fn" placeholder="First Name"  required ><br>
            <input class="edit-input" type="text" name="ln" placeholder="Last Name"  required ><br>
            <input class="edit-input" type="text" name="un" placeholder="Username"  required ><br>
            <input class="edit-input" type="email" name="email" placeholder="E-mail"  required ><br>
   				  <input class="edit-input" type="Password" name="pwd" placeholder="Password"  required ><br>
   				  <input class="edit-input" type="Password" name="cpwd" placeholder="Confirm Password"  required ><br>
            <select class="edit-input" name="gender">
              <option value="">Male</option>
              <option value="">Female</option>
              <option value="">Intersex</option>
            </select><br>
   					<input type="submit" name="add_user" id="btn" value="Add User">
   				</form>
        </div>




<?php
include('../dbcon.php');

include('../functions.php');

$fn = $ln = $un = $email = $pwd = $cpwd = $gender = "";
$fn_err = $ln_err = $un_err = $email_err = $pwd_err = $cpwd_err = $gender_err = "";

// if(isset($_POST['reg'])){

if ($_SERVER['REQUEST_METHOD']=="POST") {


  if(empty($_POST['fn'])) {$fn_err = "First-name required";}
    else{$fn = test_input($_POST['fn']);
    if (!preg_match("/^[a-zA-Z]*$/",$fn)){
      echo "<script> alert('First Name field should only contain character a-z and A-Z'); window.open('add-user.php','PHP_SELF') </script>";
    } }
  if(empty($_POST['ln'])) {$ln_err = "last-name required";}
    else{$ln = test_input($_POST['ln']);
    if (!preg_match("/^[a-zA-Z]*$/",$ln)) {
      echo "<script> alert('LastName field should only contain character a-z and A-Z'); window.open('add-user.php','PHP_SELF') </script>";
    } }
  if(empty($_POST['un'])) {$un_err = "username required";}
    else{$un = test_input($_POST['un']);
    if (!preg_match("/^[a-zA-Z]*$/",$un)) {
      echo "<script> alert('UserName field should only contain character a-z and A-Z'); window.open('add-user.php','PHP_SELF') </script>";
    } }
  if(empty($_POST['email'])) {$email_err = "email required";}
    else{$email = test_input($_POST['email']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_err = "invalid email format";
    } }$_SESSION['email'] = $email;
  if(empty($_POST['pwd'])) {$pwd_err = "password required";}
    else{$pwd = test_input($_POST['pwd']);
    // if (!preg_match("/^[a-zA-Z]*$/",$pwd)) {
      // $pwd_err = "letters only";   }
     }
  if(empty($_POST['cpwd'])) {$cpwd_err = "confirm password required";}
    else{$cpwd = test_input($_POST['cpwd']);
    // if (!preg_match("/[a-zA-Z]/",$cpwd)) {
      // $cpwd_err = "letters only";}
     }
  if(empty($_POST['gender'])) {$gender_err = "gender is required";}
    else{$gender = test_input($_POST['gender']);
    if (!preg_match("/^[a-zA-Z]*$/",$gender)) {
      $gender_err = "letters only";
    } }

    if (strlen($pwd) >= 8) {
      if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

       if ($pwd === $cpwd) {

        $check_email="select un from register where email='$email'";
        $run_email=mysqli_query($con, $check_email);
        $check=mysqli_num_rows($run_email);

          if (!$check==1) {
            $insert_query= "insert into register(fn,ln,un,email,pwd,cpwd,gender) values('$fn','$ln','$un','$email','$pwd','$cpwd','$gender')";
            $run_query=mysqli_query($con, $insert_query);
               if ($run_query) {
                 echo "<script> alert(' $fn $ln is successfully Registered'); window.open('adm-user.php','_self') </script>";
                 }else {
                   echo "<script> alert('Registration Failed $fn $ln... Please Try Again'); window.open('add-user.php','_self') </script>";
               }
          }else{
             echo "<script> alert('Email Already Registered'); window.open('add-user.php','_self') </script>";
     }

       }else {
        echo "<script> alert('Password Do not match the confirm password'); window.open('add-user.php','_self') </script>";
       }
     }else {
       echo "<script> alert('invalid email format'); window.open('add-user.php','_self') </script>";
     }
     }else{
       echo "<script> alert('Password Should have a minimum of 8 Characters'); window.open('add-user.php','_self') </script>";
     }


}


?>

<?php include('adm-footer.php') ?>
