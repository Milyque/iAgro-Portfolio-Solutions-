<?php include('registry.php') ?>

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
            <tr><td><li class="current"> <a href="#">Home</a> </li></td>
            <td><li><a href="notify.php" title="You have to sign up first to join our Forum">Forum</a></li></td>
            <td><li> <a href="presign-about.php">About</a> </li></td></tr>
          </ul>
        </nav>
      </table>

    </header><hr >

    <center><section id="contain-index">

      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <div class="form-container" style="float:left; margin-left:2%; margin-top: none;">
   			<h3 color="red">SIGN-UP FORM</h3><br>
        <span class="error"><?php echo $fn_err; ?></span><br>
  	 		<input type="text" name="fn" placeholder="First Name" value="<?php echo $fn; ?>"><br><span class="error"><?php echo $ln_err; ?></span><br>
  	 		<input type="text" name="ln" placeholder="Last Name" value="<?php echo $ln; ?>"><br><span class="error"><?php echo $un_err; ?></span><br>
  	 		<input type="text" name="un" placeholder="UserName" value="<?php echo $un; ?>"><br> <span class="error"><?php echo $email_err; ?></span><br>
  	 		<input type="Email" name="email" placeholder="E-mail" value="<?php echo $email; ?>"><br><span class="error"><?php echo $pwd_err; ?></span><br>
  	 		<input type="Password" id="pass" name="pwd" placeholder="Password" value="<?php echo $pwd; ?>" style='width: 70%;'><i class="showHide-pwd" data-for="pass"><img src="img/eye.png" height=20 width=20></i><br><span class="error"><?php echo $cpwd_err; ?></span><br>
  	 		<input type="Password" name="cpwd" placeholder="Confirm Password" value="<?php echo $cpwd; ?>"><br>
  	 		Gender:  <select name="gender" required>
  				<option name="male"> Male </option>
  				<option name="female"> Female </option>
  				<option name="other"> Intersex </option>
  				</select>	<br><br>

  			<input type="submit" name="reg" value="SUBMIT" id="tuma"> <br><br>

   		</div>
    </form>

    <form class="index-log" method="post" action="login.php">
      <h4 style="color: white;">Log-in pane</h4>
      <input type="email" name="email" placeholder="E-mail" required>
      <input type="Password" id="pass" name="pwd" placeholder="Password" required>
      <input type="submit" name="login" id="btn" value="Login">
      <p style="float: left; margin-left: 16%;">
       &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="admin/adm-login.php" style="color: lightgreen;">Log-in as Admin </a></p>
    </form>


    <div class="lil-info">
      <p>Agriculture, as it is said, it’s the backbone of our country’s economy thus vital for one to indulge in. Agriculture may seem easy but in real sense it needs a lot of commitment to thrive regardless of which aspect or scope you want to dive in, that is, in home backyards, small scale, medium scale or large scale. For a farmer to maneuver in agriculture then he/she should be well educated, committed and/or have a skilled veterinarian to advise him/her on the way to go...</p>
      <a href="presign-about.php" id="btn">Read More</a>
    </div>

  </section></center>
  <script type="text/javascript" src="js/show-pwd.js"></script>

<footer>
  <div class="foot" style="padding-top:10px;">
    <p style="color:#ddd; font-size:18px; text-transform:lowercase;">i-AGRO SOLUTION PORTFOLIO | AN AGRICULTURAL INFORMATION HUB <br> CONTACT US THE BELOW PLATFORM <br> COPYRIGHT &copy2020 </p>
    <a href="https://www.facebook.com"><img src="./img/agfacebook.png" alt=""></a>
    <a href="https://www.tweeter.com"><img src="./img/agtweeter.png" alt=""></a>
    <a href="https://www.gmail.com"><img src="./img/agemail.png" alt=""></a>
    <a href="#"><img src="./img/agcall.png" alt="" title="0712345678"></a>
  </div>
</footer>


  </body>
</html>
