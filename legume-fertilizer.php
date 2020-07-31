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
        <a href="legume-fertilizer.php" class="active">Legumes fertilizers</a>
      </div>
    </div>

    <div class="blog-body">
      <div class="category" style="padding-top:20px; padding-left:25px; color:green; text-align: center; font-size: 22px;">>>> Legumes Fertilizer <<<</div>
      <div  class="category-content" style="padding: 0px 10px 10px 10px;">
        <p style="font-size: 13px; color:dodgerblue;"><i>article from homeguides.sfgate.com</i></p>
        <p><span  style="color: green; font-weight: bold; ">Best fertilizer for Legumes</span>The best fertilizer for legumes is one that has approximately half as much nitrogen as phosphorus and potassium, 8-16-16 for example. In sandy soils , a mixture of mulch or compost along with commercial fertilizer may help by adding additional water-holding capacity. If done, the compost should be incorporated weeks ahead of planting to allow for adequate decay. When growing beans, some micronutrient additions may be necessary; however, peas are less sensitive to micronutrients such as iron or manganese. <br><br>
        <span  style="color: green; font-weight: bold; ">Legumes as Plants</span><br>
        The reason fertilization is different with legumes is that legumes are different from any other plants in the garden. Legumes, such as peas, beans, soybeans, peanuts and lentils have developed a relationship with a bacterial group called rhizobia. These soil-borne bacteria invade the roots of legumes and form nodules. Within these nodules, the bacteria convert atmospheric nitrogen into a form that can be used by plants. In a real sense, legumes, with the help of rhizobia, make their own nitrogen. Excess plant-available nitrogen is produced by legumes so that the need for nitrogen application on next season’s garden is reduced.<br><br>
        <span  style="color: green; font-weight: bold; ">Inoculating Legumes</span><br>
        It is usually necessary to provide the rhizobia bacteria to inoculate the roots. Each species of legume is host to a specific type of rhizobia; however, mixtures of these inoculates are sold at the garden store that can be used on all the legumes planted in the garden. The seeds should be dusted or wet with the inoculates just prior to planting. As the roots emerge from the germinating seed and come into contact with the bacteria, nodules form and the process begins.<br><br>
        <span  style="color: green; font-weight: bold; ">Fertilizing Legumes</span><br>
        Pea and bean seeds are sensitive to direct contact with fertilizer but germinating seeds need nutrients, including nitrogen, until the nodules form on the roots. It is best to place fertilizer into a 2- to 4-inch-deep trench approximately 2 to 4 inches to the side of the planting furrow. This allows both the shallow-rooted beans and the deeper-rooted peas access to needed nutrients without risking direct contact. Beans should be fertilized with micronutrients later in the season when they mature toward harvest. Peas may need additional nitrogen because rhizobia may not be active in the early season.<br><br>
        <span  style="color: green; font-weight: bold; ">Best Practice</span><br>
        The way to ensure the best yield from your garden is to provide the soil with decomposing plant material, which releases micronutrients and holds moisture without being too wet. Later in the season, as the crop is maturing, apply micronutrients as needed. In addition to tasting good, legumes are an excellent source of dietary protein; proper fertilizer application and inoculation are vitally important.

        </p>
      </div>
    </div>
