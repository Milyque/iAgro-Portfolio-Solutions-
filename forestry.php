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
        <a href="#" class="active">Agro-Foresty</a>
      </div>
    </div>

    <div class="blog-body">
      <div class="category" style="padding-top:20px; padding-left:25px; color:green; text-align: center; font-size: 22px;">>>> About Agro-Foresty <<<</div>
      <div  class="category-content" style="padding: 0px 10px 10px 10px;">
        <p style="font-size: 13px; color:dodgerblue;"><i>article from www.aftaweb.org</i></p>
        <h4>What is Agroforestry?</h4>
        <p>
            AFTA defines agroforestry as an intensive land management system that optimizes the benefits from the biological interactions created when trees and/or shrubs are deliberately combined with crops and/or livestock. There are five basic types of agroforestry practices today in the North America: windbreaks, alley cropping, silvopasture, riparian buffers and forest farming. Within each agroforestry practice, there is a continuum of options available to landowners depending o­n their own goals (e.g., whether to maximize the production of interplanted crops, animal forage, or trees).<br><br>
            <img src="./img/forest.jpg" class="img-style" style="width: 300px; height:150px;"><br>
            <h4>Benefits of Agroforestry</h4>
            The benefits created by agroforestry practices are both economic and environmental. Agroforestry can increase farm profitability in several ways:
            <ol>
              <li>the total output per unit area of tree/ crop/livestock combinations is greater than any single component alone</li>
              <li>crops and livestock protected from the damaging effects of wind are more productive</li>
              <li>new products add to the financial diversity and flexibility of the farming enterprise.</li>
            </ol>
            Agroforestry helps to conserve and protect natural resources by, for example, mitigating non-point source pollution, controlling soil erosion, and creating wildlife habitat. The benefits of agroforestry add up to a substantial improvement of the economic and resource sustainability of agriculture.<br>
            <h4>Key Traits of Agroforestry Practices:</h4>
            Agroforestry practices are intentional combinations of trees with crops and/or livestock which involve intensive management of the interactions between the components as an integrated agroecosystem. These four key characteristics - intentional, intensive, interactive and integrated - are the essence of agroforestry and are what distinguish it from other farming or forestry practices. To be called agroforestry, a land use practice must satisfy all of the following four criteria:
            <ul>
              <li><span  style="color: green; font-weight: bold; ">Intentional:</span> <br> Combinations of trees, crops and/or animals are intentionally designed and managed as a whole unit, rather than as individual elements which may occur in close proximity but are controlled separately.</li>
              <li><span  style="color: green; font-weight: bold; ">Intensive:</span> <br> Agroforestry practices are intensively managed to maintain their productive and protective functions, and often involve annual operations such as cultivation, fertilization and irrigation.</li>
              <li><span  style="color: green; font-weight: bold; ">Interactive:</span> <br> Agroforestry management seeks to actively manipulate the biological and physical interactions between the tree, crop and animal components. The goal is to enhance the production of more than o­ne harvestable component at a time, while also providing conservation benefits such as non-point source water pollution control or wildlife habitat.</li>
              <li><span  style="color: green; font-weight: bold; "> Integrated:</span> <br> The tree, crop and/or animal components are structurally and functionally combined into a single, integrated management unit. Integration may be horizontal or vertical, and above- or below-ground. Such integration utilizes more of the productive capacity of the land and helps to balance economic production with resource  conservation.</li>
            </ul>
        </p>
      </div>
    </div>
