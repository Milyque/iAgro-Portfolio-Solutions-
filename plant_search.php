<?php require 'session-user.php'; ?>
<?php
 include("dbcon.php");
 include("./funFolder/func-animal.php");
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="./css/home.css">
		<link rel="stylesheet" href="./css/blogstyle.css">
    <link rel="stylesheet" href="./css/forumstyle.css">
    <link rel="stylesheet" href="./css/viewpost.css">
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <script src="./js/com_sys.js"></script>

    <title>Plants page | i-Agro_solution</title>
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
            <tr><td><li> <a href="home.php">Home</a> </li></td>
            <td><li class="current"><a href="forum.php">Forum</a></li></td>
            <td><li><a href="agrovet.php">Agrovet</a></li></td>
            <td><li><a href="vet.php">veterinary</a></li></td>
            <td><li> <a href="about.php">About</a> </li></td>
            <td><li> <a href="logout.php">Log-out</a> </li></td></tr>
          </ul>
        </nav>
      </table>
    </header><br><hr><br><br>

    <div class="br-modal">
      <div class="breadcramps">
        <a href="home.php">Home</a>
        <a href="forum.php">Forum</a>
        <a href="plantpost.php">Plant Section</a>
        <a href="#" class="active">Plants Search Results</a>
      </div>
    </div><br><br>

    <div style='margin: 10px auto; background:white; color: dodgerblue; width: 60%; padding:10px;'>


<?php

if (isset($_POST['psearch'])) {
  $seach_field = mysqli_real_escape_string($con, $_POST['s-in']);

  $search_query = mysqli_query($con, "SELECT * FROM plant_pane WHERE title LIKE '%$seach_field%' OR author LIKE '%$seach_field%' OR description LIKE '%$seach_field%' ");
  $num_search = mysqli_num_rows($search_query);
  echo "<h2 style='margin-left: 20px; background:white;  padding:10px;'>(".$num_search.") results were found.</h2>";
  if ($num_search > 0) {
    while ($row = mysqli_fetch_assoc($search_query)) {
      $par_code = $row['code'];
        echo "
                <div style='margin-bottom: 10px; background:#eee; padding:10px;'>
                  <p>Posted by ".$row['author']."</p>
                  <p>On ".$row['title']."</p>
                  <p>".$row['description']."</p>
                  <img width=200 height=100 src='uploads/".$row['pic_upload']."'><br>
                </div>
              ";
    }
  }
}

?>
</div>

<?php include('footer.php'); ?>
