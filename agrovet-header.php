<?php require 'session-user.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" type="text/css" href="./css/add.css">
    <title>Agrovet | i-Agro_solution</title>
  </head>
  <body>
    <header>
      <div class="logo" style="position: relative;">
        <img src="./img/aglogo.png" alt="">
        <p style="color: lightgreen; position:absolute;left:100%; top: 10px; font-weight: bolder; font-size: 20px;"><span style="color:darkorange;">i</span>AGRO <span style="color: white;">Solution</span></p>
      </div>

      <table id="nav">
        <nav>
          <ul>
            <tr><td><li> <a href="home.php">Home</a> </li></td>
            <td><li><a href="forum.php">Forum</a></li></td>
            <td><li class="current"><a href="agrovet.php">Agrovet</a></li></td>
            <td><li><a href="vet.php">veterinary</a></li></td>
            <td><li> <a href="about.php">About</a> </li></td>
            <td><li> <a href="logout.php">Log-out</a> </li></td></tr>
          </ul>
        </nav>
      </table>
      <style >
        .s-in{
          color:gray;
          font-size: 16px;
          font-style: italic;
        }
      </style>
      <form class="search" action="search-product.php" method="post">
        <input class='s-in' type="text" name="s-in" placeholder="Search name, price, location or details...">
        <button type="submit" name="search">Search</button>
      </form>


    </header><hr style="margin-bottom: 3%;">