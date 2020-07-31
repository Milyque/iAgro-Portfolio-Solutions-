<?php

include('dbcon.php');
include('functions.php');

$fn = $ln = $un = $email = $pwd = $cpwd = $gender = "";
$fn_err = $ln_err = $un_err = $email_err = $pwd_err = $cpwd_err = $gender_err = "";

// if(isset($_POST['reg'])){

if ($_SERVER['REQUEST_METHOD']=="POST") {


  if(empty($_POST['fn'])) {$fn_err = "First-name required";}
    else{$fn = test_input($_POST['fn']);
    if (!preg_match("/^[a-zA-Z]*$/",$fn)){
      $fn_err = "letters only";
    } }
  if(empty($_POST['ln'])) {$ln_err = "last-name required";}
    else{$ln = test_input($_POST['ln']);
    if (!preg_match("/^[a-zA-Z]*$/",$ln)) {
      $ln_err = "letters only";
    } }
  if(empty($_POST['un'])) {$un_err = "username required";}
    else{$un = test_input($_POST['un']);
    if (!preg_match("/^[a-zA-Z]*$/",$un)) {
      $un_err = "letters only";
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
       if ($pwd === $cpwd) {

        $check_email="select un from register where email='$email'";
        $run_email=mysqli_query($con, $check_email);
        $check=mysqli_num_rows($run_email);

        if (!$check==1) {
          $insert_query= "insert into register(fn,ln,un,email,pwd,cpwd,gender) values('$fn','$ln','$un','$email','$pwd','$cpwd','$gender')";
          $run_query=mysqli_query($con, $insert_query);
             if ($run_query) {
               echo "<script> alert('You just successfully Registered... You can now Log In') </script>";
               echo "<script>window.open('login.php','_self') </script>";
               }else {
                 echo "<script> alert('Registration Failed $fn $ln... Please Try Again') </script>";
                 echo "<script>window.open('index.php','_self') </script>";
             }
        }else{
           echo "<script> alert('Email Already Registered') </script>";
           echo "<script>window.open('index.php','PHP_SELF') </script>";
            // exit();
      }
       }else {
        echo "<script> alert('Password Do not match the confirm password') </script>";
        echo "<script>window.open('index.php','PHP_SELF') </script>";
       }
     }else{
       echo "<script> alert('Password Should have a minimum of 8 Characters') </script>";
        echo "<script>window.open('index.php','PHP_SELF') </script>";
     }


}


//
// $fname = "";
// $lname = "";
// $uname = "";
// $pass = "";
// $cpass = "";
// $email = "";
// $sign_date = "";
// $gender = "";
// $error_array = array();
//
// if (isset($_POST['reg'])) {
//
//   // first name
//   $fname = strip_tags($_POST['fn']); //removes html tags
//   $fname = str_replace(' ','', $fname); //remove spaces
//   $fname = ucfirst(strtolower($fname)); //capitalises the first leter in the db
//   $_SESSION['fn'] = $fname;
//
//   // last name
//   $lname = strip_tags($_POST['ln']);
//   $lname = str_replace(' ','', $lname);
//   $lname = ucfirst(strtolower($lname));
//   $_SESSION['ln'] = $lname;
//
//   // username
//   $uname = strip_tags($_POST['un']);
//   $uname = str_replace(' ','', $uname);
//   $uname = ucfirst(strtolower($uname));
//   $_SESSION['un'] = $uname;
//
//   // email
//   $email = strip_tags($_POST['email']);
//   $email = str_replace(' ','', $email);
//   $email = ucfirst(strtolower($email));
//   $_SESSION['email'] = $email;
//
//   // password
//   $pass = strip_tags($_POST['pwd']);
//   $pass = str_replace(' ','', $pass);
//   $pass = ucfirst(strtolower($pass));
//   $_SESSION['pwd'] = $pass;
//
//   // confirm password
//   $cpass = strip_tags($_POST['cpwd']);
//   $cpass = str_replace(' ','', $cpass);
//   $cpass = ucfirst(strtolower($cpass));
//   $_SESSION['cpwd'] = $cpass;
//
//   $gender = $_POST['gender'];
//
//   $sign_date = date("Y-m-d");
//
//   //email validation
//
//   if ($email) {
//     if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
//       $email = filter_var($email, FILTER_VALIDATE_EMAIL);
//       $email_query = "select email from register where email='$email'";
//       $email_check = mysqli_query($con, $email_query);
//       $num_rows = mysqli_num_rows($email_check);
//         if ($num_rows > 0) {
//           array_push($error_array, "Email already exist");
//         }else {
//           array_push($error_array, "The email is invalid");
//         }
//       }
//   }else{
//     array_push($error_array, "Email does not exist");
//   }
//
// }
//
// $user_check = mysqli_query($con, "select un from register where un='$uname'");
 ?>
