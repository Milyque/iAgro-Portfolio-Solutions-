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
        <a href="tuber-fertilizer.php" class="active">Tubercrops Fertilizer</a>
      </div>
    </div>

    <div class="blog-body">
      <div class="category" style="padding-top:20px; padding-left:25px; color:green; text-align: center; font-size: 22px;">>>> Tubercrops Fertilizer <<<</div>
      <div  class="category-content" style="padding: 0px 10px 10px 10px;">
        <p style="font-size: 13px; color:dodgerblue;"><i>article from homeguides.sfgate.com</i></p>
        <img src="./img/tuber2.jpeg" class="img-style" style="width: 300px; height:150px;">
        <p><span  style="color: green; font-weight: bold; ">Compost</span> <br> - Digging 2 to 4 inches of well-decomposed compost into the top foot of the garden bed provides the organically rich soil that root vegetables need to thrive. Compost is the equivalent of a 5-10-10 fertilizer. Raking and breaking up the dirt clods to make a smooth surface helps when planting the tiny seeds. Add a handful of compost next to each seedling when it reaches 3 to 4 inches tall for additional nutrients through the growing season.<br><span  style="color: green; font-weight: bold; ">Nitrgen</span> <br> - While nitrogen is necessary for vigorous plant growth, an excess stimulates foliage growth at the expense of roots and flowers. When using commercial fertilizers, root vegetables are generally fertilized with 1/4 to 1/2 cup of nitrogen, or 1 1/2 pounds of a 5-10-10 fertilizer per 100 square feet when planting the seeds. An additional application of 5-10-10 fertilizer is used as a side dressing to most vegetables when the seedlings are 3 to 4 inches tall. Because of their rapid growth, radishes and turnips don't need a side dressing of fertilizer.
        <br><span  style="color: green; font-weight: bold; ">Phosphorus and Potassium</span> <br> - Fertilizing with a 5-10-10 fertilizer provides the smaller amount of nitrogen needed for root crops while supporting root and stem growth. Phosphorus and potassium both encourage the strong, healthy root system necessary when growing root vegetables. If soil testing after planting reveals that your garden needs additional phosphorus, you can add bone meal as a side dressing. If your soil needs additional potassium, you can also apply a kelp meal and fish emulsion fertilizer or granite meal.<br><span  style="color: green; font-weight: bold; ">Water</span> <br> - While organic and commercially prepared fertilizers nourish your root vegetables, without water they'll wither and die. Keep the soil moist, but not waterlogged, until the seeds germinate and the seedlings appear. Once established, root vegetables need an evenly moist soil to develop sweet, tender roots. Generally, vegetable gardens require at least 1 inch of water per week. In addition, the soil should be watered thoroughly both before and after applying any fertilizer so the tender roots aren't burned
        </p>
      </div>
    </div>
