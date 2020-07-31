<?php
include('../dbcon.php');

if(isset($_POST['add-adm'])){

  $names = $_POST['names'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $spec = $_POST['vet_spec'];
  $pwd = $_POST['pwd'];

  $file_name = $_FILES['fileToUpload']['name'];
  $tmp_file_name = $_FILES['fileToUpload']['tmp_name'];
  $position = strpos($file_name,".");
  $fileextension = substr($file_name, $position + 1);
  $fileextension = strtolower($fileextension);

  if (isset($file_name)) {
    $path = '../uploads/';
    // if (empty($file_name)) {
    //   echo "Please choose an image";
      if (!empty($file_name)) {
        if (($fileextension !== "jpg") && ($fileextension !== "jpeg") && ($fileextension !== "png") && ($fileextension !== "bmp") && ($fileextension !== "gif")) {
          echo "file extensions must be .jpg, .jpeg, .png, .gif or .bmp for the file to be uploaded";
        }elseif (($fileextension == "jpg") || ($fileextension == "jpeg") || ($fileextension == "png") || ($fileextension == "bmp") || ($fileextension == "gif")) {
          if (move_uploaded_file($tmp_file_name, $path.$file_name)) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $add_adm = mysqli_query($con, "insert into vets(vet_pic,vet_name,vet_email,vet_phone,vet_spec,pwd) values('$file_name','$names','$email','$phone','$spec','$pwd')");
              if ($add_adm) {
                echo "<script>alert('Vet added Successfully'); window.open('adm-adm.php','_self')</script>";
              }else{
                echo "<script>alert('Vet addition failed'); window.open('adm-adm.php','_self')</script>";
              }
            }else{
               echo "<script>alert('Wrong email Format'); window.open('adm-adm.php','_self')</script>";
            }
          }
       }
     }else{
        echo "<script>alert('Please insert an image'); window.open('adm-adm.php','_self')</script>";
      }
    }
  }


?>
