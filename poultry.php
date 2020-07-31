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
        <a href="#">Poultry</a>
        <a href="#" class="active">Broilers</a>
      </div>
    </div>

    <section id="container">
      <aside class="sidebar">
        <ul>
          <li style="border: none;"><a href="#"></a> </li>
          <li class="active-tab"><a href="#">Broilers</a> </li>
          <li><a href="layers.php">Layers</a> </li>
          <li><a href="chick.php">Chicks</a> </li>
        </ul>
      </aside>
      <section id="content">
        <div class="panel">
          <img src="./img/cock.jpg" class="img-style" style="width: 300px; height:150px;">
					<p>Broilers are Chicken kept mainly for meat. They dont require much attention as cmpared to the female ones (Layers). As farmer, you can decide on which type of broilers you want to rear, that is, either indeginious breed or exortic breed (grade).<br>The exortic ones require regular vaccination than the indeginous one. <i>See the <a href="poultry-vac.php">Vaccination Table</a> for Poultry</i> </p>
          <p>also see <i><a href="poultry-dwe.php">poultry Housing</a></i> </p>
					<h4 style="text-decoration: underline; color: dodgerblue;">Broiler feeds</h4>
          <div class="tbl-container">
            <table border="1" class="tbl" style="top:0px;">
  						<tr style="background-color: #35734a;"><th>Feeds</th><th>At week(s)...</th><th>Nutritional Value</th><th>Why...</th></tr>
  						<tr><td>Broiler Starter mash & crumps</td><td>1day - 3weeks</td><td>- Proteins and Energy with aminno acids, vitamins and mineral compliment <br>- Probiotis</td><td>- For rapid growth, good muscle formation and skeleton framework <br>- To boost immunity</td></tr>
  						<tr><td>Broiler Finisher mash & pellets</td><td>from week 3</td><td>- Should contain coccidiostat</td><td>- To providebalance energy and protein for faster growth and avoid excessive fat deposition</td></tr>
  					</table><br>
          </div>
				</div>
      </section>
    </section><br><br>
    <?php include("footer.php"); ?>
