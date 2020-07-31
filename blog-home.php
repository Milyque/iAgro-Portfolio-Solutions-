<!-- <?php
include('dbcon.php');
include('./funFolder/func.php');
include("upload.php") ?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="./css/home.css">
		<link rel="stylesheet" href="./css/blogstyle.css"> -->
    <!-- <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script> -->
    <!-- <script src="./js/com_sys.js"></script> -->
    <!-- <title>Forum Page | i-Agro_solution</title>
  </head>
  <body>
    <header>
      <div class="logo">
        <img src="./img/aglogo.png" alt="">
      </div>

      <table id="nav">
        <nav>
          <ul>
            <tr><td><li> <a href="home.php">Home</a> </li></td>
            <td><li class="current"><a href="blog-home.php">Forum</a></li></td>
            <td><li> <a href="about.php">About</a> </li></td>
            <td><li> <a href="logout.php">Log-out</a> </li></td></tr>
          </ul>
        </nav>
      </table>
      <form class="search" action="index.html" method="post">
        <input type="text" name="s-in" placeholder="Type your search here...">
        <button type="submit" name="search">Search</button>
      </form>
    </header><hr style="margin-bottom: 3%;">

    <section class="blog-body">
      <div id="category_1" class="category">
        <a href="#" onclick="showDiscussion(1);">
          <div class="contain">
            <div class="left">
              <h2>Livestock docket</h2>
            </div>
            <div class="right">
              <a href="#" onclick="startDiscussion(1);">start discussion</a>
            </div>
          </div>
        </a>
      </div>
      <div id="cat_new_disc_1" class="category-cont">
        <div class="contain">
          <form  action="upload.php" method="post" enctype="multipart/form-data">
            <div class="form-group form">
              <input type="hidden" name="user_id">
              <input type="text" name="author" size="40" placeholder="Author"><br>
              <input type="text" name="title" size="40" placeholder="Title"> <br>
              <textarea name="description" id="comment" class="form-text" rows="3" cols="30" placeholder="Description"></textarea><br>
            </div>
            <div class="upload-form">
              <h3>Select an image to upload:(though if need be)</h3>
              <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
              <input type="submit" name="post_animal" value="Post" class="btn2 form-submit">
            </div>
          </form>
        </div>
      </div>
      <div id="cat_disc_1" class="category-cont" >
        <center> -->
        <?php
        //   $result = mysqli_query($con, "select * from animals_pane");
        //     $numComments = mysqli_num_rows($result);
        // echo '<table class="tbl-cat">
        //   <thead>
        //     <th>discussion titles</th>
        //     <th>author</th>
        //     <th>Posted on</th>
        //   </thead>';
        //   echo $numComments . ' post(s) are found...';
        //   while ($row = mysqli_fetch_array($result)) {
        //     echo'<tbody>
        //       <tr>';
              // echo '<td><a href="#">' . $row['title']. '</a></td>';
        //       echo '<td><a href="#">' . $row['author']. '</a></td>';
        //       echo '<td>' . $row['date']. '</td>';
        //     echo '</tr>
        //     </tbody>';
        //   }
        // echo'</table>';
        // mysqli_close($con);
        ?>
        <!-- </center>
      </div><br>

      <div id="category_2" class="category">
        <a href="#" onclick="showDiscussion(2);">
          <div class="contain">
            <div class="left">
              <h2>Plants docket</h2>
            </div>
            <div class="right">
              <a href="#" onclick="startDiscussion(2);">start discussion</a>
            </div>
          </div>
        </a>
      </div>
      <div id="cat_new_disc_2" class="category-cont">
        <div class="contain">
          <form  action="upload.php" method="post" enctype="multipart/form-data">
            <div class="form-group form">
              <input type="hidden" name="user_id"> -->
              <!-- <input type="hidden" name="descriptionID"> -->
              <!-- <input type="text" name="author" size="40" placeholder="Author"><br>
              <input type="text" name="title" size="40" placeholder="Title"> <br>
              <textarea name="description" rows="3" cols="30" placeholder="Description"></textarea><br>
            </div>
            <div class="upload-form">
              <h3>Select an image to upload:(though if need be)</h3>
              <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
              <input type="submit" name="post_plants" value="Post" class="btn2">
            </div>
          </form>
        </div>
      </div>
      <div id="cat_disc_2" class="category-cont" >
        <center> -->
          <?php
          //   $result = mysqli_query($con, "select * from plant_pane");
          //   $numComments = mysqli_num_rows($result);
          // echo '<table class="tbl-cat">
          //   <thead>
          //     <th>discussion titles</th>
          //     <th>author</th>
          //     <th>Posted on</th>
          //   </thead>';
          //
          //   echo $numComments . ' post(s) are found...';
          //
          //   while ($row = mysqli_fetch_array($result)) {
          //     echo'<tbody>
          //       <tr>';
          //       echo '<td><a href="#">' . $row['title']. '</a></td>';
          //       echo '<td><a href="#">' . $row['author']. '</a></td>';
          //       echo '<td>' . $row['date']. '</td>';
          //     echo '</tr>
          //     </tbody>';
          //   }
          // echo'</table>';
          // mysqli_close($con);
          ?>
        <!-- </center>
      </div><br>

      <div id="category_3" class="category" > -->
        <!-- <a href="#" onclick="showDiscussion(3);"> -->
          <!-- <div class="contain">
            <div class="left">
              <h2>Medicinal docket</h2>
            </div>
            <div class="right">
              <a href="#" class="accordion">start discussion</a>
            </div>
          </div> -->
        <!-- </a> -->
      <!-- </div>

      <div id="cat_new_disc_3" class="category-cont">
        <div class="contain">
          <form  action="upload.php" method="post" enctype="multipart/form-data">
            <div class="form-group form">
              <input type="hidden" name="user_id"> -->
              <!-- <input type="hidden" name="descriptionID"> -->
              <!-- <input type="text" name="author" size="40" placeholder="Author"><br>
              <input type="text" name="title" size="40" placeholder="Title"> <br>
              <textarea name="description" rows="3" cols="30" placeholder="Description"></textarea><br>
            </div>
            <div class="upload-form">
              <h3>Select an image to upload:(though if need be)</h3>
              <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
              <input type="submit" name="post_med" value="Post" class="btn2">
            </div>
          </form>
        </div>
      </div>

      <div id="cat_disc_3" class="category-cont">
        <center> -->
          <?php
          //   $result = mysqli_query($con, "select * from meds");
          //   $numComments = mysqli_num_rows($result);
          //
          // echo '<table class="tbl-cat">
          //   <thead>
          //     <th>discussion titles</th>
          //     <th>author</th>
          //     <th>Posted on</th>
          //   </thead>';
          //
          //   echo $numComments . ' post(s) are found...';
          //
          //   while ($row = mysqli_fetch_array($result)) {
          //     echo'<tbody>
          //       <tr>';
          //       echo '<td><a href="#">' . $row['title']. '</a></td>';
          //       echo '<td><a href="#">' . $row['author']. '</a></td>';
          //       echo '<td>' . $row['date']. '</td>';
          //     echo '</tr>
          //     </tbody>';
          //   }
          // echo'</table>';
          // mysqli_close($con);
          ?>
        <!-- </center>
      </div><br>
		</section>



    <footer>
      <div class="foot">
        <a href="https://www.facebook.com"><img src="./img/agfacebook.png" alt=""></a>
        <a href="https://www.tweeter.com"><img src="./img/agtweeter.png" alt=""></a>
        <a href="https://www.gmail.com"><img src="./img/agemail.png" alt=""></a>
        <a href="#"><img src="./img/agcall.png" alt="" title="0712345678"></a>
      </div>
    </footer> -->
    <?php

    // $file_name = $_FILES['fileToUpload']['name'];
    // $tmp_file_name = $_FILES['fileToUpload']['tmp_name'];
    // $position = strpos($file_name,".");
    // $fileextension = substr($file_name, $position + 1);
    // $fileextension = strtolower($fileextension);
    //
    // if (isset($file_name)) {
    //   $path = './gen/uploads/';
    //   if (empty($file_name)) {
    //     echo "Please choose an image";
    //   }elseif (!empty($file_name)) {
    //     if (($fileextension !== "jpg") && ($fileextension !== "jpeg") && ($fileextension !== "png") && ($fileextension !== "bmp") && ($fileextension !== "gif")) {
    //       echo "file extensions must be .jpg, .jpeg, .png, .gif or .bmp for the file to be uploaded";
    //     }elseif (($fileextension == "jpg") || ($fileextension == "jpeg") || ($fileextension == "png") || ($fileextension == "bmp") || ($fileextension == "gif")) {
    //       if (move_uploaded_file($tmp_file_name, $path.$file_name)) {
    //         echo "uploaded";
    //       }
    //     }
    //   }
    // }

     ?>

     <?php

     // if (($fileextension == "jpg") || ($fileextension == "jpeg") || ($fileextension == "png") || ($fileextension == "bmp") || ($fileextension == "gif")) {
     //   echo "<img src='$path"."$file_name>";
     // }

     ?>


 </body>
