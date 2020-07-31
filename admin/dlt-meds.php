<?php
include('../dbcon.php');
$select = mysqli_query($con, "select id from parents ");
$row = mysqli_fetch_array($select);
// $email=$row['email'];
while ($row = mysqli_fetch_array($select)) {
  $id = $row['id'];

  if(isset($_POST['dlt-meds'])){
    $delete=mysqli_query($con, "DELETE FROM `parents` WHERE `parents`.`id` = '$id' ");
    if($delete){
      echo "<script>alert('deleted successfully'); window.open('adm-meds.php','_self')</script>";
    }else{
      echo "<script>alert('deletion Failed'); window.open('adm-meds.php','_self')</script>";
    }
  }
}

 ?>
