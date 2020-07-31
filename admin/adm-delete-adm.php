<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/indexstyle.css">
    <link rel="stylesheet" href="../css/signstyle.css">
    <link rel="stylesheet" href="../css/loginstyle.css">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/admstyle.css">
    <title>Admin Delete Page | i-Agro_solution</title>
  </head>

  <body>
    <header style="background:green;">
      <div class="logo">
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
          <a href="adm-adm.php">Admins</a>
          <a href="edit-adm.php" class="active">edit Admin Profile</a>
        </div>
      </div>

      <div class="fetch" id='<?php echo $id; ?>'>
        <div class="add-admin">
          <div class="add-admin">
            <a href="adm-adm.php" id="btn" class="btn2" style="position:absolute; "> Back</a> <label style="position:absolute; left: 20%; padding:10px;border-radius: 10px;margin-top: 3px;color:white; font-size:20px; background:rgba(200, 50, 10, .9);">Here you eligible to only Editing your account</label>
          </div><br>

          <div class="fetch-table">
            <p>Are you  sure you want to delete This admin Account of <?php echo $row['fn']." ".$row['ln']; ?></p>
            <a href="# <?php echo'?adm_id='.$id; ?>" class="btn2">Yes</a>
          </div>


  <?php include('adm-footer.php') ?>



<?php
include('../dbcon.php');
include('../session.php');

$id = $_GET['adm_id'];

mysqli_query($con, "delete from admin where adm_id = '$id'");
header('Location: adm-adm.php');
?>










<?php

// include('../dbcon.php');
// include('../session.php')
//
// $id = $_GET['adm_id'];
//
//
//   $delete = mysqli_query($con, "delete from admin where adm_id='$id'" );
//
//   if ($delete) {
//     echo "<script>alert('Deleted Successfully'); window.open('adm-adm.php','_self')</script>";
//   }else{
//     echo "<script>alert('updated Failed'); window.open('adm-adm.php','_self')</script>";
//   }
//
// }

?>
