<?php

include('dbcon.php');
include('functions.php');

// if (isset($_POST['ss'])) {
//   $fn = $_POST['fn'];
//   $ln = $_POST['ln'];
//   $un = $_POST['un'];
//   $email = $_POST['email'];
//   $pwd = $_POST['pwd'];
//   $cpwd = $_POST['cpwd'];
//   $gender = $_POST['gender'];

  $fn = $ln = $un = $email = $pwd = $cpwd = $gender = "";
  $fn_err = $ln_err = $un_err = $email_err = $pwd_err = $cpwd_err = $gender_err = "";

  if ($_SERVER['REQUEST_METHOD']=="POST") {

    if(empty($_POST['fn'])) {$fn_err = "First-name required";}
      else{$fn = test_input($_POST['fn']);
      if (!preg_match("/[a-zA-Z]/", $fn)) {
        $un_err = "letters only";
      } }
    if(empty($_POST['ln'])) {$fn_err = "last-name required";}
      else{$fn = test_input($_POST['fn']);
      if (!preg_match("/^[a-zA-Z]*$/", $fn)) {
        $un_err = "letters only";
      } }
    if(empty($_POST['un'])) {$fn_err = "username required";}
      else{$fn = test_input($_POST['fn']);
      if (!preg_match("/^[a-zA-Z]*$/", $fn)) {
        $un_err = "letters only";
      } }
    if(empty($_POST['email'])) {$fn_err = "email required";}
      else{$fn = test_input($_POST['fn']);
      if (!preg_match("/^[a-zA-Z]*$/", $fn)) {
        $un_err = "letters only";
      } }
    if(empty($_POST['pwd'])) {$fn_err = "password required";}
      else{$fn = test_input($_POST['fn']);
      if (!preg_match("/^[a-zA-Z]*$/", $fn)) {
        $un_err = "letters only";
      } }
    if(empty($_POST['cpwd'])) {$fn_err = "confirm password required";}
      else{$fn = test_input($_POST['fn']);
      if (!preg_match("/[a-zA-Z]/", $fn)) {
        $un_err = "letters only";
      } }
    if(empty($_POST['gender'])) {$fn_err = "gender is required";}
      else{$fn = test_input($_POST['fn']);
      if (!preg_match("/^[a-zA-Z]*$/", $fn)) {
        $un_err = "letters only";
      } }

    // $ln = test_input($_POST['ln']);
    // $un = test_input($_POST['un']);
    // $email = test_input($_POST['email']);
    // $pwd = test_input($_POST['pwd']);
    // $cpwd = test_input($_POST['cpwd']);
    // $gender = test_input($_POST['gender']);

}

 ?>
