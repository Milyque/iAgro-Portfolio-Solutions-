<!-- <?php

  include("dbcon.php");
  include("functions.php");

  if (isset($_POST['ss'])){
    $fn=mysqli_real_escape_string($con,$_POST['fn']);
    $ln=mysqli_real_escape_string($con,$_POST['ln']);
    $un=mysqli_real_escape_string($con,$_POST['un']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $pwd=mysqli_real_escape_string($con,$_POST['pwd']);
    $cpwd=mysqli_real_escape_string($con,$_POST['cpwd']);
    $gender=mysqli_real_escape_string($con,$_POST['gender']); -->

    // $min_length = 8;
    //
    // checks if fields are empty
    // if ($email == "" || $pwd == "" || $cpwd == "" || $gender == "" || $fn == "" || $ln == "" || $un == "") {
    //   echo "all the fields must be filled inorder to proceed";
    // }else{
    //   //check for invalid characters in the fields
    //   if (invalidChar($fn)){
    //     echo "firstname must only contain letters a-z, A-Z and/or 0-9 ";
    //     }if (invalidChar($ln)) {
    //       echo "lastname must only contain letters a-z, A-Z and/or 0-9 ";
    //     }
    //       }if (invalidChar($un)) {
    //         echo "Username must only contain letters a-z, A-Z and/or 0-9 ";
    //       }
    //   else{
    //     if ($email == "" || $pwd == "" || $cpwd == "" || $gender == "" || $fn == "" || $ln == "" || $un == "") {
    //     }else {
    //       echo "make sure all the field are filled...";
    //     }
    //       if (strlen($pwd) >= $min_length) {
    //         if ($pwd === $cpwd) {
    //
    //
    //         }else {
    //           echo "your password does not match you confirm password. please try again.";
    //         }
    //     }else{
    //       echo "Password must not contain character less that 8";
    //     }
    // }


 //    if ($pwd === $cpwd) {
 //
 //      }else {
 //        echo "your password does not match you confirm password. please try again.";
 //      }
 //
 //  $check_username="select un from users where email='$email'";
	// $run_username=mysqli_query($con, $check_username);
	// if (strlen($pwd) < 8) {
	// 	echo "<script> alert('Password Should have a minimum of 8 Characters') </script>";
 //    echo "<script>window.open('index.php','_self') </script>";
	// 	exit();
 //  }
 //  $check_email="select u from register where email='$email'";
 //  $run_email=mysqli_query($con, $check_email);
 //  $check=mysqli_num_rows($run_email);
 //  if ($check==1) {
 //  	echo "<script> alert('Email Already Registered') </script>";
 //  	exit();
 //  }
 //    $insert_query= "insert into register(fn,ln,un,email,pwd,cpwd,gender) values('$fn','$ln','$un','$email','$pwd','$cpwd','$gender')";
 //       $run_query=mysqli_query($con, $insert_query);
 //
 //           if ($run_query) {
 //             echo "<script> alert('You just successfully Registered $fn $ln you can now Log In') </script>";
 //             echo "<script>window.open('loginPage.php','_self') </script>";
 //             }
 //            else {
 //             echo "<script> alert('Registration Failed $fn $ln Try Again') </script>";
 //             echo "<script>window.open('signup.php','_self') </script>";
 //           }
 //
 //  }
 //
 // ?>
