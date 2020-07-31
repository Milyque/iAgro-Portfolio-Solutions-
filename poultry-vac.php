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
				<a href="Home.php">Home</a>
				<a href="animal.php">Animal-Cabinet</a>
				<!-- <a href="meds.php">Medics</a> -->
				<a href="poultry.php">Poultry</a>
				<a href="poultry-vac.php" class="active">Poultry Vaccination Plan</a>
			</div>
		</div>
		<div style="padding:0px;">
      <center> <div class="tbl-container">
  			<table class="tbl" border="1" style="background: lightgray;"><br>
  				<tr style="background-color: #35734a; color: white;"><th>AGE</th><th>VACCINE</th><th>METHOD</th></tr>
  				<tr><td>DAY 1</td><td>Mareks</td><td>Intramuscular (Done at Hatcherry)</td></tr>
  				<tr><td>DAY 7-8</td><td>New Castle Disease</td><td>Eyes/Nasal drop/oral</td></tr>
  				<tr><td>DAY 14</td><td>Gumboro</td><td>Drinking Water</td></tr>
  				<tr><td>DAY 18-21</td><td>New Castle Disease and infectious Bronchitis</td><td>Eyes/Nasal drop/oral</td></tr>
  				<tr><td>DAY 24-28</td><td>Gumboro GM 97</td><td>Drinking water</td></tr>
  				<tr><td>WEEK 8</td><td>Fowl Pox & Fowl Typhoid</td><td>Intramuscular and Wing Slab</td></tr>
  				<tr><td>WEEK 16</td><td>New Castle Disease</td><td>Eyes/Nasal drop/oral</td></tr>
  			</table>
      </div></center>
      <br><br><br><br>
			<h4 style="text-decoration: underline; color: lime; font-family: cursive; margin-left:20px;">NOTE:</h4>
			<p style="color: lime; margin-left:20px;">* Repeat New castle Disease vaccination and Typhoid every six months.</p>
			<p style="color: lime; margin-left:20px;">* This programme is as per the Splendid Africa suppliers and enterprises.</p>
		</div>
        </section>
