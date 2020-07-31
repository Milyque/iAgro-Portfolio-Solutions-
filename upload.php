<?php
// $target_dir = "./uploads/";
// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
//
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

//to check if the file is actual image

// if (isset($_POST['uploader'])) {
//   $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//   if ($check !== false) {
//     echo "<img src='./uploads/'> ";
//     echo "file is an image " . $check['mime'] ;
//     $uploadOk = 1;
//   }else{
//     echo "file is not an image";
//     $uploadOk = 0;
//   }
// }

 ?>

<?php

include("dbcon.php");
// include('./funFolder/func-animal.php');

if(isset($_POST['post_animal'])) {
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
          $sendToDb = "insert into animals_pane(code,title,author,description,pic_upload,date) values('$postCode','$title','$author','$description','$file_name','$date') ";
          $query = mysqli_query($con, $sendToDb);
          if ($query) {
            echo "<script>alert('uploaded successfully')</script>";
            echo "<script>window.open('animalpost.php','_self')</script>";
          }else {
            echo "<script>alert('upload not successful')</script>";
            echo "<script>window.open('animalpost.php','_self')</script>";
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
  $rpostCode = $_POST['code'];

  if(isset($rdescription)){
    mysqli_query($con, "insert into animalreply(par_code,description,date,author) values('$rpostCode','$rdescription','$rdate','$rauthor')");
  }
  header("Location: ");
}




 ?>






 <?php

//  include("dbcon.php");
//
//  if(isset($_POST['post_plants'])) {
//  $title = $_POST['title'];
//  $author = $_POST['author'];
//  $description = $_POST['description'];
//  // $descriptionID = $_POST['descriptionID'];
//  $user_id = $_POST['user_id'];
//  $file_name = $_FILES['fileToUpload']['name'];
//  $tmp_file_name = $_FILES['fileToUpload']['tmp_name'];
//  $position = strpos($file_name,".");
//  $fileextension = substr($file_name, $position + 1);
//  $fileextension = strtolower($fileextension);
//
//  if (isset($file_name)) {
//    $path = 'uploads/';
//    // if (empty($file_name)) {
//    //   echo "Please choose an image";
//      if (!empty($file_name)) {
//        if (($fileextension !== "jpg") && ($fileextension !== "jpeg") && ($fileextension !== "png") && ($fileextension !== "bmp") && ($fileextension !== "gif")) {
//          echo "file extensions must be .jpg, .jpeg, .png, .gif or .bmp for the file to be uploaded";
//        }elseif (($fileextension == "jpg") || ($fileextension == "jpeg") || ($fileextension == "png") || ($fileextension == "bmp") || ($fileextension == "gif")) {
//          if (move_uploaded_file($tmp_file_name, $path.$file_name)) {
//            $sendToDb = "insert into plant_pane(title,author,description,pic_upload,user_id,date) values('$title','$author','$description','$file_name','$user_id',NOW()) ";
//            $query = mysqli_query($con, $sendToDb);
//            if ($query) {
//              echo "<script>alert('uploaded successfully')</script>";
//              echo "<script>window.open('viewposts.php','_self')</script>";
//            }else {
//              echo "<script>alert('upload not successful')</script>";
//              echo "<script>window.open('blog-home.php','_self')</script>";
//          }
//        }
//      }
//    }
//  }
// }
  ?>

  <?php
//
//   include("dbcon.php");
//
//   if(isset($_POST['post_med'])) {
//   $title = $_POST['title'];
//   $author = $_POST['author'];
//   $description = $_POST['description'];
//   // $descriptionID = $_POST['descriptionID'];
//   $user_id = $_POST['user_id'];
//   $file_name = $_FILES['fileToUpload']['name'];
//   $tmp_file_name = $_FILES['fileToUpload']['tmp_name'];
//   $position = strpos($file_name,".");
//   $fileextension = substr($file_name, $position + 1);
//   $fileextension = strtolower($fileextension);
//
//   if (isset($file_name)) {
//     $path = 'uploads/';
//     // if (empty($file_name)) {
//     //   echo "Please choose an image";
//     if (!empty($file_name)) {
//       if (($fileextension !== "jpg") && ($fileextension !== "jpeg") && ($fileextension !== "png") && ($fileextension !== "bmp") && ($fileextension !== "gif")) {
//         echo "file extensions must be .jpg, .jpeg, .png, .gif or .bmp for the file to be uploaded";
//       }elseif (($fileextension == "jpg") || ($fileextension == "jpeg") || ($fileextension == "png") || ($fileextension == "bmp") || ($fileextension == "gif")) {
//         if (move_uploaded_file($tmp_file_name, $path.$file_name)) {
//           $sendToDb = "insert into meds(title,author,description,pic_upload,user_id,date) values('$title','$author','$description','$file_name','$user_id',NOW()) ";
//           $query = mysqli_query($con, $sendToDb);
//           if ($query) {
//             echo "<script>alert('uploaded successfully')</script>";
//             echo "<script>window.open('viewposts.php','_self')</script>";
//           }else {
//             echo "<script>alert('upload not successful')</script>";
//             echo "<script>window.open('blog-home.php','_self')</script>";
//         }
//       }
//     }
//   }
// }
// }

    // $sendToDb = "insert into medicinal(title,author,description,pic_upload) values('$title','$author','$description','$file_name')";
    // $query = mysqli_query($con, $sendToDb);

   ?>






<?php

// if (($fileextension == "jpg") || ($fileextension == "jpeg") || ($fileextension == "png") || ($fileextension == "bmp") || ($fileextension == "gif")) {
//   echo "<img src='$path"."$file_name>";
// }

?>
