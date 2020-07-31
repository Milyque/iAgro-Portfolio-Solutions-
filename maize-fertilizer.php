<?php require 'session-user.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/plantstyle.css">
    <link rel="stylesheet" href="./css/animalstyle.css">
    <link rel="stylesheet" href="./css/viewpost.css">
    <link rel="stylesheet" href="./css/blogstyle.css">
    <title>Crops | i-Agro_solution</title>
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
        <a href="plants.php">Crop-cultivation</a>
        <a href="Crops.php">Crops</a>
        <a href="maize-fertilizer.php" class="active">maize crop feritlizers</a>
      </div>
    </div>

    <div class="blog-body">
      <div class="category" style="padding-top:20px; padding-left:25px; color:green; text-align: center; font-size: 22px;">>>> Maize Fertilizer <<<</div>
      <div  class="category-content" style="padding: 0px 10px 10px 10px;">
        <p style="font-size: 13px; color:dodgerblue;"><i>article from FarmUp CONNECT</i></p>
        <p><span  style="color: green; font-weight: bold; ">Problem of wrong fertilizer application</span> <br>
          Maize is the most important food crop in Kenya. For you to get a good maize harvest, you need to apply the correct fertilizers in the right way and at the right time. Wrong application of fertilizer leads to low maize yields and losses to the farmer. loss of nutrients, wastage of the fertilizer and can even damage the crop.<br><br>
          <span  style="color: green; font-weight: bold; ">Importance of good fertilizer management</span> <br>
          Maize plants need different amounts of nutrient at different stages of growth. Different fertilizers for example DAP, NPK, and CAN provide the nutrients that maize plants need. For the plants to get the nutrients when they need them, apply fertilizers at the right time. The time you apply fertilizer to your maize will affect how much you will harvest. Good timing of the fertilizer application increases yields, reduces loss of nutrients and prevents damage to the environment.<br><br>
          <span  style="color: green; font-weight: bold; ">Good fertilizer management</span> <br>
          At planting time, apply Di-Ammonium Phosphate (DAP) fertilizer or NPK fertilizer at the rate of 50 kg per acre. When you are planting by hand, place a teaspoonful or soda bottle cap of fertilizer into each planting hole. Mix the fertilizer well with soil and then plant the seed. When using a tractor planter, adjust the fertilizer hoppers to apply the right amount of fertilizer. After 2-3 weeks or or when the crop is about 45cm high, top-dress your maize with Calcium Ammonium Nitrate (CAN) or Urea at the rate of 50 kg per acre if you are farming in a low rainfall area. If you are planting the maize in areas with high rainfall, apply the fertilizer in two splits. Apply the first split six weeks after plating and the second after 2 weeks or just before the maize flowers. Apply the fertilizer when the soil is moist. Apply one teaspoonful of fertilizer at the base of each plant in a circular way or along the row 5cm away from the plants. Always keep the maize farm without weeds until it flowers.
        </p>
      </div>
    </div>
