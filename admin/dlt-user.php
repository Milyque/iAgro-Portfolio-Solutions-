<?php
 include('../dbcon.php');
 $select = mysqli_query($con, "select id from animals_pane ");
 $row = mysqli_fetch_array($select);
 // $email=$row['email'];
 while ($row = mysqli_fetch_array($select)) {
   $id = $row['id'];
 
   if(isset($_POST['dlt-anm'])){
     $delete=mysqli_query($con, "DELETE FROM `animals_pane` WHERE `animals_pane`.`id` = '$id' ");
     if($delete){
       echo "<script>alert('deleted successfully'); window.open('adm-anm.php','_self')</script>";
     }else{
       echo "<script>alert('deletion Failed'); window.open('adm-anm.php','_self')</script>";
     }
   }
 }

?>
