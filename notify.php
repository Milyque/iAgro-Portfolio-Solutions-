<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/indexstyle.css">
    <link rel="stylesheet" href="./css/home.css">
    <title>Welcome Page | i-Agro_solution</title>
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
            <tr><td><li class="current"> <a href="index.php">Home</a> </li></td>
            <td><li><a href="#">Forum</a></li></td>
            <td><li> <a href="presign-about.php">About</a> </li></td></tr>
          </ul>
        </nav>
      </table>

    </header><hr >

    <center><div class="notify" style="width: 40%; height: 250px; padding: 10px; margin: 20px; border:2px solid red; color: dodgerblue; border-radius: 10px;background-color: #ccc;">
    	<h1 style="color: red; font-weight: bolder;">Access denied..!!</h1><br>
    	<h2>You have not log in yet... </h2>
    	<h3>Please log first to access the page</h3>
    	<a href="loginPage.php">click here to login</a>
    </div></center>

    <?php include('footer.php'); ?>