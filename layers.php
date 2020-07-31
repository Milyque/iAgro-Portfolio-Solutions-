<?php require 'session-user.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/animalstyle.css">
    <title>cattle | i-Agro_solution</title>
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
        <a href="animal.php">Livestock</a>
        <a href="poultry.php">Poultry</a>
        <a href="#" class="active">Layers</a>
      </div>
    </div>

    <section id="container">
      <aside class="sidebar">
        <ul>
          <li style="border: none;"><a href="#"></a> </li>
          <li><a href="poultry.php">Broilers</a> </li>
          <li class="active-tab"><a href="layers.php">Layers</a> </li>
          <li><a href="chick.php">Chicks</a> </li>
        </ul>
      </aside>
      <section id="content">
        <div class="panel">
          <img src="./img/layer2.jpg" class="img-style" style="width: 300px; height:150px;">
					<p>Layers are the female chicken in simple terms, and mainly kept for reproduction of Eggs and they can also serve as dinner. Proper vaccination, friendly-comfortable and proper feeding of Layer ensures good produce of eggs. As a farmer you should ensure that you chicken are not stresed in any way be it the <a href="poultry-dwe.php">Poultry house</a> or even the disease the may arise due poor maintainance.</p>
          <p>also see <i><a href="poultry-vac.php">poultry Vaccination Table.</a></i> </p>
					<h4 style="text-decoration: underline; color: dodgerblue;">Layers feeds</h4>
          <div class="tbl-container">
            <table border="1" class="tbl" style="top:0px;">
  						<tr style="background-color: #35734a;"><th>Feeds</th><th>At week(s)...</th><th>Nutritional Value</th><th>Why...</th></tr>
  						<tr><td>Chick Mash</td><td>Day 1 - 8Weeks</td><td>Energy, ammino acid and Proteins</td><td>To gain better nutrient for general body immunity</td></tr>
  						<tr><td>Growers Mash</td><td>8Weeks - 18weeks</td><td>Vitamins, Energy and Proteins</td><td>For Optimal growth and achieving good body weight for first egg</td></tr>
  						<tr><td>Layers Mash</td><td>From 18Weeks</td><td>Extra amount Energy, ammino acid, proteins, vitamins and minerals</td><td>High nutrients to trigger good quality egg production & sustain high laying rate</td></tr>
  					</table><br>
          </div>
				</div>
      </section>
    </section><br><br>
    <?php include("footer.php"); ?>
