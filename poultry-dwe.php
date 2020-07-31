<?php require 'session-user.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/animalstyle.css">
    <link rel="stylesheet" href="./css/blogstyle.css">
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
        <a href="Home.php">Home</a>
        <a href="zoology.php">Animal-Cabinet</a>
        <a href="mediq.php">Medics</a>
        <a href="poultry.php">Poultry</a>
        <a href="poultry-dwe.php" class="active">Poultry Housing</a>
      </div>
    </div>

    <div class="blog-body">
      <div class="category" style="padding-top:20px; padding-left:25px; color:green; text-align: center; font-size: 22px;">>>> POULTRY HOUSING <<<</div>
      <div class="category-content"style="padding: 0px 10px 10px 10px;">
        <h4>Housing</h4>
        <p>This is the main consideration when starting commercial poultry operations. With housing, protection from predators, disease-causing factors and much more that may hinder maximum production of the poultry. Housing serves for two purposes: <br><br> <span class="highlight">&nbsp;&nbsp;&nbsp;~ Concetrates the flock into manageable units</span> <br> <span class="highlight">&nbsp;&nbsp;&nbsp;~ Provide suitable environment for the optimal growth and performance of the birds</span> </p>
        <p>Housing needs and structure change with the age os the birds like ventilation, feeding and drinking space, and protection from air temperatures.</p>
        <h4>Housing Location</h4>
        <p>Locate the Poultry house on the highest ground, not subject to flooringin an east-west orientation to avoid direct sunlight from heating the birds either during sunrise or sunset. Feed room should be centrally sited. Only workers should be allowed in and around the house to avoid spread of diseases from spreading to uninfected birds plus the buildings should be atleast 40feet (about 12m) from each to reduce the same reason of diseases and parasites transfer.</p>
        <center><img src="./img/poultry.png" class="img-style"><figcaption style="font: 12px times; color:dodgerblue;" ><i>cross-section of poultry house prototype for 200 broilers/layers (courtey of sigma feeds)</i></figcaption></center>
      </div>
    </div>
