<?php include('../dbcon.php');  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/indexstyle.css">
    <link rel="stylesheet" href="../css/signstyle.css">
    <link rel="stylesheet" href="../css/loginstyle.css">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/admstyle.css">
    <title>Admin Home Page | i-Agro_solution</title>
  </head>

  <body>
    <header style="background:green;">
      <div class="logo">
        <img src="../img/aglogo.png" alt="">
        <p style="color: lightgreen; position:absolute;left:100%; top: 10px; font-weight: bolder; font-size: 20px;"><span style="color:darkorange;">i</span>AGRO <span style="color: white;">Solution</span></p>

        <li style="position: absolute; width:120px; margin-left: 900px; margin-top:-80%; padding: 10px;list-style:none; border-right:1px solid white; border-left:1px solid white;"> <a href="adm-logout.php" style="padding:20px; color:White; font-size:20px; text-decoration:none;">Log-out</a> </li>
        </div>
      </div>
        
      <?php
        include('../dbcon.php');
        include('../session.php');
        $admin = mysqli_query($con, 'select * from admin where adm_id ="$id_session" ');
        $row =mysqli_fetch_array($admin);
        
        echo'<p style="float:right;color: black;">'. $row['fn'].'</p>'?>

    </header><br><br>

    <section class="section" style="height: 400px;">

      <div class="linker">
        <div class="br-modal" style="text-align:left; margin:5px; margin-bottom: 20px;">
          <div class="breadcramps">
            <a href="adm-home.php" class="active">Home</a>
          </div>
        </div>

        <label style="font-size:24px; color:dodgerblue; text-transform:uppercase;"> >>>Activity Panels<<< </label> <br><br>

        <div class="linker-btn">
          <center><a href="adm-adm.php">
            <img src="../img/forum.png" alt="" style="width:80px; height:80px;"><br>
            <?php
              $result = mysqli_query($con, "select * from vets");
              $num_rows = mysqli_num_rows($result);
              echo "<p style='font-size:20px;'>(".$num_rows.") Veterenary</p>";
            ?>
          </a></center>
        </div>

        <div class="linker-btn">
          <center><a href="adm-user.php">
            <img src="../img/subs.png" alt="" style="width:80px; height:80px;"><br>
            <?php
              $result = mysqli_query($con, "select * from register");
              $num_rows = mysqli_num_rows($result);
              echo "<p style='font-size:20px;'>(".$num_rows.") Users</p>";
            ?>
          </a></center>
        </div>

        <div class="linker-btn">
          <center><a href="adm-anm.php">
            <img src="../img/b-anim.png" alt="" style="width:80px; height:80px;"><br>
            <?php
              $result = mysqli_query($con, "select * from animals_pane");
              $num_rows = mysqli_num_rows($result);
              echo "<p style='font-size:20px;'>(".$num_rows.") animal Posts</p>";
            ?>
          </a></center>
        </div>

        <div class="linker-btn">
          <center><a href="adm-plt.php">
            <img src="../img/plt.png" alt="" style="width:80px; height:80px;"><br>
            <?php
              $result = mysqli_query($con, "select * from plant_pane");
              $num_rows = mysqli_num_rows($result);
              echo "<p style='font-size:20px;'>(".$num_rows.") Plants Posts</p>";
            ?>
          </a></center>
        </div>

        <div class="linker-btn">
          <center><a href="adm-meds.php">
            <img src="../img/doc.png" alt="" style="width:80px; height:80px;"><br>
            <?php
              $result = mysqli_query($con, "select * from meds");
              $num_rows = mysqli_num_rows($result);
              echo "<p style='font-size:20px;'>(".$num_rows.") Med Posts</p>";
            ?>
          </a></center>
        </div>

        <div class="linker-btn">
          <center><a href="adm-agrovet.php">
            <img src="../img/price.png" alt="" style="width:80px; height:80px;"><br>
            <?php
              $result = mysqli_query($con, "select * from agrovet");
              $num_rows = mysqli_num_rows($result);
              echo "<p style='font-size:20px;'>(".$num_rows.") Product Posts</p>";
            ?>
          </a></center>
        </div>
      </div>
    </section><br><br>

    <?php include('adm-footer.php') ?>

  </body>
