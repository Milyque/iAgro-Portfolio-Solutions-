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
        <a href="#" class="active">Cattle</a>
      </div>
    </div>

    <section id="container">
      <aside class="sidebar">
        <ul>
          <li style="border: none;"><a href="#"></a> </li>
          <li><a href="cattle.php">Beef Cattle</a> </li>
          <li class="active-tab"><a href="dairy.php">Dairy Cattle</a> </li>
          <!-- <li><a href="calf.php">Heifers</a> </li> -->
        </ul>
      </aside>
      <section id="content">
        <div class="panel">
          <img src="./img/lactating.jpg" class="img-style" style="width: 300px; height:150px;"></center>
          <p>This are cattle mainly meant for milk production. With proper sanitation, feeds, water and housing the production of milk increases significantly. A dairy cow can give birth to a calf every year. There are factors to consider before starting of with dairy farming, this include:<h4>Dairy Farming Tips</h4><br>&nbsp;~ the breed of dairy cattle you want to keep.<br>&nbsp;~ they climatic conditions that favor the breed.<br>&nbsp;~is the milk produce for commercial or domestic use.<br>&nbsp;~ the specy of dairy cattle in terms of either exotic(e.g. Jersey, Holstein, Guesrnsey, Ayrshire) or indigenous species.<br>&nbsp;~ The space you have ratio to the number of Cattle you want to keep </p>
          <h4>Products from Dairy</h4>
          <p>The dairy products from the dairy cattle is milk obviously. However, with proper value addition on the product [in business oriented mind ;)] the following can be obtained:<br>&nbsp;~ Youghurt<br>&nbsp;~ Cheese<br>&nbsp;~ Butter<br>&nbsp;~ Framented milk(maziwa lala) e.t.c </p>
        </div>
      </section>
    </section>
