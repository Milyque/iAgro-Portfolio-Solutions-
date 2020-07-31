<?php
// include('dbcon.php');
// include('./funFolder/func.php');
// include("upload.php")
?>
<?php require 'session-user.php'; ?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/forumstyle.css">
		<link rel="stylesheet" href="./css/blogstyle.css">
    <title>Forum Page | i-Agro_solution</title>
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
    </header><hr style="margin-bottom: 3%;">

    <div class="br-modal">
      <div class="breadcramps">
        <a href="home.php">Home</a>
        <a href="forum.php" class="active">Forum</a>
      </div>
    </div>

    <section class="blog-body">
      <div class="container category">
        <label class="heading" style="font-size:17px;">click on the Docket of your interest &nbsp;>>></label>
        <ul>
          <!-- <li><a href="#" class="btn2" style="padding:5px; margin-left: 5px;">ALL</a></li> -->
          <li><a href="animalpost.php" class="btn2" style="padding:5px; margin-left: 5px;">Livestock</a></li>
          <li><a href="plantpost.php" class="btn2" style="padding:5px; margin-left: 5px;">Plants</a></li>
          <li><a href="medipost.php" class="btn2" style="padding:5px; margin-left: 5px;">Medicinal</a></li>
        </ul>
      </div>
      <div class="category-cont" style="overflow-y: none;">

      </div>
    </section><br><br><br><br><br><br><br><br><br>
    <?php include('footer.php'); ?>
