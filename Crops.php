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
        <a href="Crops.php" class="active">Crops</a>
      </div>
    </div>

    <div class="blog-body">
      <div class="category" style="padding-top:20px; padding-left:25px; color:green; text-align: center; font-size: 22px;">>>> Crops <<<</div>
      <div  class="category-content" style="padding: 0px 10px 10px 10px;">
        <center>
          <button class="accordion">Maize</button>
          <div class="panel-accordion">
            <p style="font-size: 13px; color:dodgerblue;"><i>article by www.smallstarter.com</i></p>
            <img src="./img/maize.jpg" class="img-style" style='width:300px; height:150px;'>
            <p>Maize is the staple food in Kenya, so there is a ready market for it. Due to it importance and demand not only in Kenya but also in Africa then it is a good idea to venture in maize cultivation. Although maize is used primarily ashuman foodin developing regions of the world, it serves as the most importantraw material for animal feed production and biofuelsin developed counties. The biggest demand for maize in africa is divided int three segment:<br>&nbsp;&nbsp;* Human beings  <br>&nbsp;&nbsp;* Animals <br>&nbsp;&nbsp;* Industries </p>
            <h4>How to start and succeed in maize production business</h4>
            <p><span  style="color: green; font-weight: bold; ">1) Find suitable land:</span>find suitable land: Maize grows best in rich loamy or sandy-loam soils in a well-drained area that has a flat or fairly flat landscape. Maize will not do well in waterlogged land. If the land is not well drained, you could make ridges or mounds to protect the crops from waterlogging. Because the maize plant loves sunlight, the land has to be in the open and free from any kind of shade (such as tall trees or man-made structures) that prevents sunlight from reaching the planted maize. The land has to be cleared and tilled before the rainy season starts and the maize should be planted immediately after the land is prepared. If this is not done, weeds may grow fast and compete with the maize for nutrients and sunlight. <br><br><span  style="color: green; font-weight: bold; ">2) Use the right Varieties:</span>  There are different varieties of maize in the world today and the type you choose to produce will depend on consumer preferences and market demand in your area. In some localities, white corn is more popular than the yellow variety. In some other areas, it is vice-versa. However, the best maize varieties grow fast, are high yielding, mature earlier than the local varieties and are resistant to major pests and diseases. There are now some hybrid varieties that use much less water and can often survive in drought-prone areas.
            <br><br><span  style="color: green; font-weight: bold; ">3) When and how to plant:</span> It’s best to plant after it has rained consecutively for 2 to 3 times. Planting only when the rains have come will help the maize seeds to germinate and grow well. Some maize varieties need between 450 to 600 mm of water per season to grow, most of which it gets from moisture reserves in the soil. According to research, at maturity, it is estimated that each maize plant will have consumed about 250 liters of water.  It is also very important that you pay very close attention to the health of the maize seeds you plant. You should only buy maize seeds for planting from dependable sources. <br><br><span  style="color: green; font-weight: bold; ">4) Watch out for pest, weeds and diseases:</span> There are several types of weeds, pests and diseases that affect maize plants such as stem borers, army worms, grasshoppers, larger grain borers, downy mildew, maize streak virus and Striga among others. Fortunately, there are several herbicides, pesticides and disease control methods you can apply to prevent a breakout on your farm. The manual in the next section contains useful information about these methods and how you can apply them.
          <br><br><span  style="color: green; font-weight: bold; ">5) What harvest can you expect:</span><br><br> <img src="./img/plant5.jpeg" class="img-style" style='width:300px; height:150px;'><br> The amount of maize that can be harvested (per hectare) depends on the variety you planted, amount of rainfall, sunshine and the level of weed, pest and disease control management that was applied. Although Africa has some of the lowest maize yields in the world, it is not uncommon to expect between 2,000 to 4,000 kilograms per hectare. </p>
            <h4>conditions</h4>
            <p>Maize grows best in rich loamy or sandy-loam soils in a well-drained area that has a flat or fairly flat landscape. Maize will not do well in waterlogged land. If the land is not well drained, you could make ridges or mounds to protect the crops from waterlogging.<br> It utilises sunlight very effectively and Africa has sunlight in abundance. Maize can grow on a vast array of soils and can survive in different climatic conditions on our continent. Maize also matures really fast. From the time it is planted, maize requires only between 90 to 120 days (about 4 months) to reach harvest. This allows it to survive in areas with short periods of rainfall and irregular water supplies.
            </p>

            <ul class="link">
              <label>Also see...</label>
              <li><a href="maize-fertilizer.php" class="btn2" >Fertilizers</a> </li>
              <li><a href="maize-seeds.php" class="btn2">Seeds</a> </li>
            </ul>
          </div>
        </center><hr>

        <center>
          <button class="accordion">Legumes</button>
          <div class="panel-accordion">

            <p>Legumes are crops in the family of beans, they are rich in proteins and also increase the amount of nitrogen available to plants through biological fixationsures as . It features as the most grown crop in Kenya during the rainy season and often inter-cropped with the main crop for maximum absorption of nutrients by both plants</p>
            <h4>Why grow/invest in legumes</h4>
            <p>&nbsp;-they are rich in proteins and also increase the amount of nitrogen available to plants through biological fixations <br>&nbsp;-they are seen to be generally beneficial to the enviroment <br>&nbsp;-The reward for diversifying cropping system through the inclusion of legumes is both environment and economic   </p>
            <h4>what to put in mind</h4>
            <p>Legumes come in different types: beans, peas, groundnuts e.t.c <br><br> <img src="./img/Beans.jpg" class="img-style" style='width:300px; height:150px;'><br>To venture into legume farming one mmust have a well defined roadmap for the excellence in the business. Apart from the large export market for the same, there is a good local market of mostly beans. </p>
            <h4>Market</h4>
            <p>The market price of legumes ranges from Ksh.6,000 to Ksh.12,000 depending on the typeof legume yu have ventured in. For example, Rosecoco beans have good maretprice than other types of beans which are plenty in the market. One can reap more the he/she sells not during the harvest season</p>
            <ul class="link">
              <label>Also see...</label>
              <li><a href="legume-fertilizer.php" class="btn2">Fertilizers</a> </li>
            </ul>
          </div>
        </center><hr>

        <center>
          <button class="accordion">Tuber-crops</button>
          <div class="panel-accordion">
            <h4>what to put in mind</h4>
            <p>Root and tuber crops consist of root crops, tuber crops and the leaves of root crops, such as beet tops. Examples of tuber crops cnsists of the following:
            <ul style="margin-left:10px;">  <li>Carrots</li><li>Sweet Potatoes</li><li>Irish Potatoes</li><li>Cassava</li><li>Beets</li><li>Yams</li></ul>
            </p>

            <img src="./img/tuber.jpeg" class="img-style" style='width:300px; height:150px;'>
            <ul class="link">
              <label>Also see...</label>
              <li><a href="tuber-fertilizer.php" class="btn2">Fertilizers</a> </li>
            </ul>
          </div>
        </center><hr>

        <center>
          <button class="accordion">Vegetables</button>
          <div class="panel-accordion">
            <p><i style="font-size: 13px; color:dodgerblue;">According to article by Victor Matara(Jan 23, 2020)</i><br> Vegetable farming is one of the silent money makers in Kenya because the country men are denominated in the use of vegetables both health wise and as a culture. This open doors for a wide market for the same if one decides to venture into farming and profits are optimal. </p>
            <h4>List of most profitable Vegetables to grow in Kenya</h4>
            <img src="./img/veges.jpeg" class="img-style" style='width:300px; height:150px;'>
            <p><span style="color: green; font-weight: bold; ">Mushroom</span> - One fact that I have known for a very long time is that mushrooms are very easy to grow in a small space and expensive to buy in the supermarket. A farmer can sell one kilogram at Sh 600 to consumers and this translates to 1.2 million KSHs in revenue.<br><span style="color: green; font-weight: bold; ">Lettuce</span> - Lettuce is one of the popular vegetables in our country and around the world due to its high nutritional value. It is considered superior because it is high in vitamin C and dietary fibre. One head of Lettuce broccoli goes at Sh70 to Sh100. On a good month, you can make Sh100,000 to Sh150,000 profit from Lettuce farming.<br><span style="color: green; font-weight: bold; ">Corriander</span> - Dania is very easy to grow and it’s in great demand at the moment in Kenya. It contains protein, vitamins, minerals and carbohydrates. It helps reduce coughs, skin disorders, diarrhoea, cholesterol and high blood pressure. Imagine if you buy Ksh 1000 Dania seeds can give a total revenue of KSh 30,000 to 45,000 within 45 days.
              <br><span style="color: green; font-weight: bold; ">Kales/sukumawiki</span> -  is profitable because one harvests for up to five months every week as long as you control pests and apply manure. The crop is easy to grow and manage. You can get between Sh20,000 and Sh36,000 from the about nine sacks.
            <br><span style="color: green; font-weight: bold; ">Cabbage</span> - Cabbage farming in Kenya is very profitable because the vegetables are very popular. An acre of cabbage can hold about 19,000 plants which  translates to a profit of more than Ksh 400,000 on a good season ( 2 months) <br><span style="color: green; font-weight: bold; ">Spinach</span> - is mostly grown because of its succulent edible green leaves. They are rich in vitamin and minerals, especially iron. The crop can be harvested for a period of 6-12 months. After deducting expenses, on a good month, you can make close to 100,000 from spinach farming </p>
            <!-- <h4>conditions</h4> -->

            <!-- <ul class="link">
              <li><a href="#" >Fertilizers</a> </li>
              <li><a href="#" >Seeds</a> </li>
              <li><a href="#" >How To</a> </li>
            </ul> -->
          </div>
        </center>

      </div>
    </div>

    <script type="text/javascript">

      var acc = document.getElementsByClassName("accordion");
      var i;
      for (i = 0; i < acc.length; i++) {
        acc[i].onclick = function(){
         this.classList.toggle("active");
         this.nextElementSibling.classList.toggle("show");
          }
        }
    </script>
