<?php require 'session-user.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="./css/show-plant.css">
    <title>Plants Docket | i-Agro_solution</title>
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
            <tr><td><li class="current"> <a href="home.php">Home</a> </li></td>
            <td><li><a href="forum.php">Forum</a></li></td>
            <td><li><a href="agrovet.php">Agrovet</a></li></td>
            <td><li><a href="vet.php">veterinary</a></li></td>
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

    <div class="br-modal">
      <div class="breadcramps">
        <a href="home.php">Home</a>
        <a href="plants.php" class="active">Plants</a>
      </div>
    </div>

    <section id="container"  style="margin-bottom: 3%;">
      <div class="tile">
        <a href="Crops.php"> <button><img src="./img/plt2.png" alt=""><p>Crops</p></button> </a>
        <a href="forestry.php"> <button><img src="./img/plt.png" alt=""><p>Agro-Foresting</p></button> </a>
        <!-- <a href="cash_crop.php"> <button><img src="./img/meds.png" alt=""><p>Cash-crops</p></button> </a><br><br> -->
        <a href="about.php"> <button id="btn-ex"><img src="./img/abt.png" alt=""><p>About Us</p></button> </a><br><br>
        <a href="forum.php"> <button id="btn-ex"><img src="./img/forum.png" alt=""><p>Go to Forum</p></button> </a>
      </div>
      <div class="pic-livestock"> </div>
    </section>
    <footer>
      <div class="foot" style="padding-top:10px;">
        <p style="color:#ddd; font-size:18px; text-transform:lowercase;">i-AGRO SOLUTION PORTFOLIO | AN AGRICULTURAL INFORMATION HUB <br> CONTACT US THE BELOW PLATFORM <br> COPYRIGHT &copyright 2020 </p>
        <a href="https://www.facebook.com"><img src="./img/agfacebook.png" alt=""></a>
        <a href="https://www.tweeter.com"><img src="./img/agtweeter.png" alt=""></a>
        <a href="https://www.gmail.com"><img src="./img/agemail.png" alt=""></a>
        <a href="#"><img src="./img/agcall.png" alt="" title="0712345678"></a>
      </div>
    </footer>
