<?php

include("dbcon.php");
// include('./funFolder/func-animal.php');

if(isset($_POST['post_med'])) {
$title = $_POST['title'];
$author = $_POST['author'];
$date = date('Y-m-d H:i:s');
$postCode = generateRandomStrings();
$description = $_POST['description'];
// $user_id = $_POST['user_id'];

$file_name = $_FILES['fileToUpload']['name'];
$tmp_file_name = $_FILES['fileToUpload']['tmp_name'];
$position = strpos($file_name,".");
$fileextension = substr($file_name, $position + 1);
$fileextension = strtolower($fileextension);

if (isset($file_name)) {
  $path = 'uploads/';
  // if (empty($file_name)) {
  //   echo "Please choose an image";
    if (!empty($file_name)) {
      if (($fileextension !== "jpg") && ($fileextension !== "jpeg") && ($fileextension !== "png") && ($fileextension !== "bmp") && ($fileextension !== "gif")) {
        echo "file extensions must be .jpg, .jpeg, .png, .gif or .bmp for the file to be uploaded";
      }elseif (($fileextension == "jpg") || ($fileextension == "jpeg") || ($fileextension == "png") || ($fileextension == "bmp") || ($fileextension == "gif")) {
        if (move_uploaded_file($tmp_file_name, $path.$file_name) && $description) {
          $sendToDb = "insert into meds(code,title,author,description,pic_upload,date) values('$postCode','$title','$author','$description','$file_name','$date') ";
          $query = mysqli_query($con, $sendToDb);
          if ($query) {
            echo "<script>alert('uploaded successfully')</script>";
            echo "<script>window.open('medipost.php','_self')</script>";
          }else {
            echo "<script>alert('upload not successful')</script>";
            echo "<script>window.open('medipost.php','_self')</script>";
        }
      }
    }
  }
}

}
//new reply
if(isset($_POST['new_reply'])){
  $rauthor = $_SESSION['author'];
  $rdescription = $_POST['new-reply'];
  $rdate = date('Y-m-d H:i:s');
  $par_code = $_POST['code'];

  if(isset($rdescription)){
    mysqli_query($con, "insert into medreply(par_code,descripton,date,author) values('$par_code','$rdescription','$rdate','$rauthor')");
  }
  header("Location: ");
}

?>
