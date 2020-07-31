<?php include('registry.php') ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/signstyle.css">
    <title>Register | i-Agro_solution</title>
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
            <tr><td><li> <a href="index.php">Home</a> </li></td>
            <td><li><a href="#" title="You have to sign up first to join our Forum">Forum</a></li></td>
            <td><li> <a href="presign-about.php">About</a> </li></td>
            <td><li class="current"> <a href="sign.php">Sign Up</a> </li></td></tr>
          </ul>
        </nav>
      </table>

      <form class="search" action="index.html" method="post">
        <input type="text" name="s-in" placeholder="Type your search here...">
        <button type="submit" name="search">Search</button>
      </form>
    </header><hr style="margin-bottom: 3%;">

    <center><section id="contain-index">

      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" style='margin-left:35%; width: 80%; margin-top: -30px;'>
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

			<p>Already registered...? <a href="#" id="btn" class="btn" onclick="document.getElementById('id01').style.display='block'">Log In</a></p>
 		</div>
  </form></section>
  <script type="text/javascript" src="js/show-pwd.js"></script>
</center>

 	<div class="bg-modal">
 			<div class="pop-content animate">
 				<div class="close" title="ClosePopUp">+</div>
 				<img src="img/loginAvatar.png">
 				<form method="post" action="login.php">
 					<input type="email" name="email" placeholder="Email" required>
 					<input type="Password" name="pwd" placeholder="Password" required><br>
 					<input type="submit" name="login" id="btn" value="Login">
 					<p style="float: left; margin-left: 16%;"><span class="psw">Forgot <a href="#">password? </a></span></p>
 				</form>
 			</div>
 		</div>
 		<script type="text/javascript">

					document.getElementById('btn').addEventListener('click', function(){
					document.querySelector('.bg-modal').style.display = 'flex';
					});

					document.querySelector('.close').addEventListener('click', function(){
					document.querySelector('.bg-modal').style.display = 'none';
					});

					// Get the modal
					var bg_modal = document.getElementById('id01');

					// When the user clicks anywhere	outside of the modal, close it
					window.onclick = function(event) {
				    if (event.target == bg_modal) {
				    	bg_modal.style.display = "none";
				    	}
					}
			</script>
    </form>
