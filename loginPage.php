<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/indexstyle.css">
    <link rel="stylesheet" href="./css/loginstyle.css">
    <link rel="stylesheet" href="./css/home.css">
    <title>Log-In Page | i-Agro_solution</title>
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
            <td><li><a href="#" title="You have to sign up first to join our Forum">Forum</a></li></td>
            <td><li> <a href="presign-about.php">About</a> </li></td></tr>
          </ul>
        </nav>
      </table>

    </header><hr>

    <center><section id="contain-index" style="padding-top:5%; height:450px;">

    <form class="log" method="post" action="login.php">
      <h4 style="color: white;">Log-in pane</h4>
      <input type="email" name="email" placeholder="E-mail" >
      <input type="Password" id="pass" name="pwd" placeholder="Password"> <p style="color: white;">Show password: <i class="showHide-pwd" data-for="pass" style='background-color: white; position: relative;' height=30><img src="img/eye.png" height=30 width=30 style="position: absolute; top:0px;"></i></p></input>
      <input type="submit" name="login" id="btn" value="Login">
      <p style="float: left; margin-left: 16%;">
      <a href="./admin/adm-login.php" style="color: lightgreen;">Log-in as Admin </a></p>
    </form>

  </section></center>
  <script type="text/javascript" src="js/show-pwd.js"></script>

  <footer>
    <div class="foot">
      <a href="https://www.facebook.com"><img src="./img/agfacebook.png" alt=""></a>
      <a href="https://www.tweeter.com"><img src="./img/agtweeter.png" alt=""></a>
      <a href="https://www.gmail.com"><img src="./img/agemail.png" alt=""></a>
      <a href="#"><img src="./img/agcall.png" alt="" title="0712345678"></a>
    </div>
  </footer>

  </body>
</html>
