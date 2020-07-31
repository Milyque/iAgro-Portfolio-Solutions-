<?php
include('../dbcon.php');

  if(isset($_POST['adm-del'])){
    $key = $_POST['key'];

    $check = mysqli_query($con, "SELECT * from vets where vet_id='$key'");
    $check_no = mysqli_num_rows($check);
    if ($check_no>0) {
      $delete=mysqli_query($con, "DELETE FROM vets WHERE vet_id='$key'");
      if($delete){
        echo "<script>alert('deleted successfully'); window.open('adm-adm.php','_self')</script>";
      }else{
        echo "<script>alert('deletion Failed'); window.open('adm-adm.php','_self')</script>";
      }
    }
  }
?>
