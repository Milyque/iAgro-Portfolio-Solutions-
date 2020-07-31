<?php
include("dbcon.php");
 require 'session-user.php';
 include("./funFolder/func-animal.php");
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="./css/home.css">
		<link rel="stylesheet" href="./css/blogstyle.css">
    <link rel="stylesheet" href="./css/forumstyle.css">
    <link rel="stylesheet" href="./css/viewpost.css">
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <script src="./js/com_sys.js"></script>

    <title>Animals page | i-Agro_solution</title>
  </head>
  <body>
    <header>
      <div class="logo">
        <img src="./img/aglogo.png" alt="">
        <p style="color: lightgreen; position:absolute;left:100%; top: 10px; font-weight: bolder; font-size: 20px;"><span style="color:darkorange;">i</span>AGRO <span style="color: white;">Solution</span></p>
      </div>

      <table id="nav">
        <nav>
          <ul>
            <tr><td><li> <a href="home.php">Home</a> </li></td>
            <td><li class="current"><a href="forum.php">Forum</a></li></td>
            <td><li><a href="agrovet.php">Agrovet</a></li></td>
            <td><li><a href="vet.php">veterinary</a></li></td>
            <td><li> <a href="about.php">About</a> </li></td>
            <td><li> <a href="logout.php">Log-out</a> </li></td></tr>
          </ul>
        </nav>
      </table>
      <style >
        .s-in{
          color:gray;
          font-size: 16px;
          font-style: italic;
        }
        .side-a{
          color: white;
          text-decoration: none;
        }
        .side-a:hover{
          color:darkorange;
          padding: 3px;
          border: 1px solid white;
        }
        .side-li{
          margin: 10px;          
        }
      </style>
      <form class="search" action="animal_search.php" method="post">
        <input class='s-in' type="text" name="s-in" placeholder="Search using title, author or description...">
        <button type="submit" name="search">Search</button>
      </form>


    </header><hr style="margin-bottom: 3%;">

    <div class="br-modal">
      <div class="breadcramps">
        <a href="home.php">Home</a>
        <a href="forum.php">Forum</a>
        <a href="animalpost.php" class="active">Animal Section</a>
      </div>
    </div>

    <section class="sidebar" style="color:#fff; background:green; width:19%; padding: .25% 0% .25% .125%; position:absolute;">
      <nav>
        <ul>
          <p style="color:dodgerblue; background-color: white; padding-left: 5px; font-size: 20px;">NAVIGATE TO:</p>
          <li class="side-li"><a class="side-a" href="animalpost.php">Livestock Related Posts</a> </li>
          <li class="side-li"><a class="side-a" href="plantpost.php">Plants related Posts</a> </li>
          <li class="side-li"><a class="side-a" href="medipost.php">Medicinal Related Posts</a> </li>
        </ul>
      </nav>
    </section>

    <section class="blog-body" style=" position:relative;">
      <div class="page-container">
        <center style="background:#ddd; padding:2px; margin:0px;"><?php
          get_total();
          include('upload.php');
        ?></center>
        <!-- <div class="contain" style="position:absolute;  margin-bottom:10px; position:relative; margin: 0px; height:170px;"> -->
            <form class="main" action="" method="post" enctype="multipart/form-data" style="position:absolute; position:relative; background: white; padding-bottom:5px; height:170px; margin:5px auto; width:96%; border-bottom:2px solid #bbb; border-radius:7px;">

                <?php 
                  $select_name = mysqli_query($con, "select fn from register where email = '$id_session'");
                  $row = mysqli_fetch_array($select_name);
                ?>

              <div class="form-group form" style="position:absolute;">
                <input type="hidden" name="user_id">
                <input type="text" name="author" size="40" placeholder="Author" value="<?php echo $row['fn'] ?>" behavior='inactive'><br>
                <input type="text" name="title" size="40" placeholder="Title"> <br>
                <textarea name="description" id="comment" class="form-text" rows="3" cols="30" placeholder="Description"></textarea><br>
              </div>
              <div class="upload-form" style="position:absolute; left:50%;">
                <h3>Select an image to upload:(though if need be)</h3>
                <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
                <input type="submit" name="post_animal" value="Post" class="btn2 form-submit">
              </div>
            </form>
        <!-- </div> -->
        <br>
        <div >
        <?php
          get_comments();
        ?>
      </div>
      </div>
    </section>

    <?php include('footer.php'); ?>
