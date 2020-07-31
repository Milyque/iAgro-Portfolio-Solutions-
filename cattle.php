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
          <li class="active-tab"><a href="#">Beef Cattle</a> </li>
          <li><a href="dairy.php">Dairy Cattle</a> </li>
          <!-- <li><a href="calf.php">Heifers</a> </li> -->
        </ul>
      </aside>
      <section id="content">
        <div class="panel">
          <img src="./img/cattle2.jpg" class="img-style" style="width: 300px; height:150px;">
          <p>Beef cattle farming is concerned with rearing male cows for other purposes away from milk produce. these other purposes include for meat (mainly), ploughing and also bullfighting as money importing activity. They are not that hard to maintain and obtain high produce in the long run given feeding, shedding and regular health issues are observed</p>
          <h4>Beef Farming Tips</h4>
          <p>&nbsp;~ The route to prosperity is across green pastures with livestock grazing them thus planning and fertilizing the land. <br>&nbsp;~ Beef cattle can stand cold and hot weathers. but wet and cod rain are hard on them thus shedding will be appropriate. <br>&nbsp;~ The space you have ratio to the number of Cattle you want to keep </p>
          <p style=" font-size:12px; color:#aaa;"><i>courtesy of countryside Editorial Feb 2019</i></p>
          <h4>what to put in mind</h4>
          <p>The type of operation:-&nbsp; either production of weaner calves for sale or fattening young stock for slaughte. the choice depends on the resources you've got.<br>Breeding Practices:-&nbsp; concerned with either improving the local breed or pure breed beef cattle of exotic lineage.<br>Feeding Programme:-&nbsp; should embark in stocking your farm when you have a good feeding regime, best practice is pasture-based balanced in terms of nutrient provision.<br>Animal Health:-&nbsp; Vaccinate you animals as recommended as this is the key to prudent disease control</p>
          <p style=" font-size:12px; color:#aaa;"><i>courtesy of Daily Nation Jan 20, 2017</i></p>
          <h4>Benefits From beef cattle</h4>
          <p>Beef cattle are good for business, though in the long run. investing in your beef cattle reap a fortune on the its sale:<br>&nbsp;~ Help in ploughing whilst in the farm<br>&nbsp;~ on it sale can earn upto ksh.100,000 and above<br>&nbsp;~ Not expensive to maintain provided enough feeds, water and its health care is prioritized. </p>
        </div>
      </section>
    </section>
  </body>

    <!-- <?php include("footer.php"); ?> -->
