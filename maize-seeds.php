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
        <a href="maize-seeds.php" class="active">Maize Seeds</a>
      </div>
    </div>

    <div class="blog-body">
      <div class="category" style="padding-top:20px; padding-left:25px; color:green; text-align: center; font-size: 22px;">>>> Tubercrops Fertilizer <<<</div>
      <div  class="category-content" style="padding: 0px 10px 10px 10px; min-height:500px;">
        <p style="font-size: 13px; color:dodgerblue;"><i>article Source: Topfarmer.co.ke </i></p>
        <div class="tbl-container" style="width:100%; margin-bottom:1px;">
          <h4>Drylands Seed Variety</h4>
          <p>Dryland varieties mature within 90-120 days. These perform well in arid and marginal areas with a mean annual rainfall of 200mm – 500mm. The most suitable varieties for these regions are;<br>&nbsp;&nbsp;- DH01, DH02, DH03, and DH04 (Kenya Seed Company).<br>&nbsp;&nbsp;- KDV-1 (OPV), KDV-6 (OPV) (FRESHCO).<br> Areas where the varieties do well include Taita Taveta, Mwatate, Lamu, Mpeketoni, Homa Bay, Rongo, Unguja and Siaya.</p>
      </div>
        <h4>High Altitude Areas seed variaties</h4>
        <div class="tbl-container" style="width:100%; margin-bottom:10px;">
          <center><table class="tbl" border="1"style="width:95%;padding:5px;">
            <thead style="text-align: center;">
              <tr style="background-color: #35734a; color: white;">
                <th>variety</th>
                <th>Company</th>
                <th>Quality</th>
                <th>Suitable Growing Areas</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>ADC 600-23A</td>
                <td>Agriculture Development Corp (ADC)</td>
                <td>Average yield 43- 68 bags per acre. Sweet in taste. It does not fall easily (no lodging).It produces a double cob. It is resistant to rust. Resistance to leaf blight. Resistant to Grey Leaf Spot. Out-yields H614D by 43.3%.</td>
                <td>TransNzoia, Uasin-Gishu, West Pokot, Keiyo, Marakwet Laikipia, Nakuru, Kisii, Kiambu. </td>
              </tr>
              <tr>
                <td>KH600-14E </td>
                <td>Freshco (improved H614D)</td>
                <td>Average yield 45–50 bags. Sweet to taste. Flinty shape (not easily attacked by weevils). Has excellent husk cover (does not open ears, which causes rotting. Tolerant to Grey Leaf spot disease. Heavy (like original H614 variety). Droops at maturity. Out-yields original H614D by 13.3%. Matures earlier than H614D (by 1 week).</td>
                <td>TransNzoia, Uasin-Gishu, West Pokot, Keiyo, Marakwet Laikipia, Nakuru, Kisii, Kiambu.</td>
              </tr>
              <tr>
                <td>KH 600-15A </td>
                <td>East African Seed</td>
                <td>Yields 33–47 bags per acre. Matures in 145–148 days. Has good husk cover. Very good standability. Out yields 614D by 10.1%. Droops (cob faces down) on maturity preventing grain rot. Tolerant to GLS, Maize Streak Virus and blights. Produces double cobs.</td>
                <td>Mt. Elgon slopes, Trans-Nzoia, West Pokot, Uasin Gishu, Nandi, greater Kericho, Taita, Nyeri (upper parts), Laikipia, Lower Nyandarua</td>
              </tr>
              <tr>
                <td>KH600–16A </td>
                <td>Freshco</td>
                <td>Yields 35-50 bags per acre (out yielding H614 D by 16.7%). Matures in 140-180 days. Very good standability. Tolerant top Grey Leaf Spot (GLS), leaf blight. Has a good husk cover (will not rot in heavy rains). Droops when dry (will not rot in heavy rains).</td>
                <td>Trans-Nzoia, Uasin-Gishu, West Pokot, Keiyo, Marakwet, Laikipia, Nakuru, Kisii, Bungoma, Mt Elgon, Kiambu.</td>
              </tr>
              <tr>
                <td>600–15A </td>
                <td>East African Seed</td>
                <td>Yields 35–45 bags per acre. White semi-flint grains. Has very strong stalk and does not fall easily (good standability). Maize cob droops when dry, reducing rotting. Has good husk cover.</td>
                <td>Mt. Elgon slopes, Trans-Nzoia, West Pokot, Uasin Gishu, Nandi, greater Kericho, Taita, Nyeri (upper parts), Laikipia, Lower Nyandarua.</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <br><hr style="color:dodgerblue;"><br>
      <div  class="category-content" style="padding: 0px 10px 10px 10px; min-height:500px;">
          <div class="tbl-container" style="width:100%; margin-bottom:10px;">
            <center><table class="tbl" border="1"style="width:95%;padding:5px;">
              <thead style="text-align: center;">
                <tr style="background-color: #35734a; color: white;">
                  <th>variety</th>
                  <th>Company</th>
                  <th>Quality</th>
                  <th>Suitable Growing Areas</th>
                </tr>
              </thead>
              <tbody>
                <h4>Medium Altitude Areas seed variaties</h4>
                <tr>
                  <td>WH507</td>
                  <td>Western Seed Co.</td>
                  <td>Average yield 35 bags per acre. It matures in 4 months (120-135 days), Good for green maize (remains green longer). It has a big cob.</td>
                  <td>Western Kenya- Kakamega, Bungoma, Busia, Kisii, Nyanza Region- Homa Bay, Suba, Migori Rongo, Siaya, Bondo; South Rift- Tinderet, Nandi, Kericho, Bomet, Narok, Sotik, Trans-Mara; Central Province- Muranga, Kiambu, Kirinyaga; Eastern Province-Embu, Meru, Machakos, Kitui, Mwingi etc.</td>
                </tr>
                <tr>
                  <td>KH 500-33A </td>
                  <td>Freshco</td>
                  <td>Average yield 35–40 bags per acre. Matures in 4 months (120–140 days). Good standability. Resistant to Maize Streak Virus (MSV) and smut disease. Flinty white grain (resists weevil damage) tightly packed Large cob and stalk. Good taste as green maize when roasted.</td>
                  <td>Western Kenya- Kakamega, Bungoma, Busia, Kisii; Nyanza Region- Homa Bay, Suba, Migori Rongo, Siaya, Bondo, South Rift- Tinderet, Nandi, Kericho, Bomet, Narok, Sotik, Trans-Mara; Central Province- Muranga, Kiambu, Kirinyaga; Eastern Province-Embu, Meru, Machakos, Kitui, Mwingi etc.</td>
                </tr>
                <tr>
                  <td>WH505</td>
                  <td>Western Seed Co.</td>
                  <td>Average yield is 30 bags per acre. Maturity is 4 months (120- 150 days). Tolerant to drought. Tolerant to most leaf diseases.</td>
                  <td>Western Kenya- Kakamega, Bungoma, Busia, Kisii; Nyanza Region- Homa Bay, Suba, Migori Rongo, Siaya, Bondo, South Rift- Tinderet, Nandi, Kericho, Bomet, Narok, Sotik, Trans-Mara; Central Province- Muranga, Kiambu, Kirinyaga; Eastern Province-Embu, Meru, Machakos, Kitui, Mwingi etc.</td>
                </tr>
              </tbody>
            </table>
        </div>
      </div>

    <!-- </div><br><hr style="color:dodgerblue;"><br> -->
