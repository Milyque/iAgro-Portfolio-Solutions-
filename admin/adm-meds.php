<?php include('../dbcon.php'); include('../session.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/indexstyle.css">
    <link rel="stylesheet" href="../css/signstyle.css">
    <link rel="stylesheet" href="../css/loginstyle.css">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/admstyle.css">
    <title>Admin Medicinal Page | i-Agro_solution</title>
  </head>

  <body>
    <header style="background:green;">
      <div class="logo">
        <img src="../img/aglogo.png" alt="">
        <p style="color: lightgreen; position:absolute;left:100%; top: 10px; font-weight: bolder; font-size: 20px;"><span style="color:darkorange;">i</span>AGRO <span style="color: white;">Solution</span></p>

        <li style="position: absolute; width:120px; margin-left: 900px; margin-top:-80%; padding: 10px;list-style:none; border-right:1px solid white; border-left:1px solid white;"> <a href="adm-logout.php" style="padding:20px; color:White; font-size:20px; text-decoration:none;">Log-out</a> </li>
        </div>
      <?php
        include('../dbcon.php');
        $admin = mysqli_query($con, 'select * from admin where adm_id ="$id_session" ');
        $row =mysqli_fetch_array($admin);

       ?>
       <p style="float:right;color: black;"><?php echo $row['un']; ?></p>
    </header><br><br>

    <section class="section">
      <div class="br-modal" style="text-align:left; margin:5px; margin-bottom: 20px;">
        <div class="breadcramps">
          <a href="adm-home.php">Home</a>
          <a href="adm-meds.php" class="active">Med Posts</a>
        </div>
      </div>

      <div class="fetch">
        <div class="add-admin">
          <a href="adm-home.php" class="btn2" style=""> Back</a>
        </div><br>

        <div class="fetch-table">
          <?php
            include('../dbcon.php');
            $result = mysqli_query($con, "select * from meds order by id desc") or die (mysqli_error());
          ?>
            
            <table border='1'>
            
              <thead>
                <tr style='background: black;'>
                  <th>Names</th>
                  <th>Code</th>
                  <th>Comments</th>
                  <th>Image</th>
                  <th>Date Added</th>
                  <th>Checklist</th>
                  <th>Action</th>
                </tr>
              </thead>

            <?php
            while ($row = mysqli_fetch_array($result)) {
              $name = $row['author'];
            ?>
              <tbody>
                <tr>
                  <form method='post' action='' role='form'>
                    <td> <?php echo $row['author']; ?> </td>
                    <td> <?php echo $row['code']; ?> </td>
                    <td> <?php echo $row['description']; ?> </td>
                    <?php echo'<td><img style="width:80px; height:80px" src="../uploads/'.$row['pic_upload'].'"></td>';?>
                    <td> <?php echo $row['date']; ?> </td>
                    <td><input type='checkbox' name='check-dlt' class='btn-del' value="<?php echo $row['id']; ?>" required></td>
                    <td><input type='submit' name='user-delete' class='btn-del' value='Delete'> </td>
                  </form>
                </tr>
            </tbody>
              
            <?php } ?>
            </table>
        </div>
      </div>

    </section>
    <?php include('adm-footer.php') ?>

<?php
include('../dbcon.php');

  if(isset($_POST['user-delete'])){
    $key = $_POST['check-dlt'];

    $check = mysqli_query($con, "select * from meds where id='$key'");
    if (mysqli_num_rows($check)>0) {
      $delete=mysqli_query($con, "DELETE FROM meds WHERE id='$key'");
      if($delete){
        echo "<script>alert('$name (s) post deleted successfully'); window.open('adm-meds.php','_self')</script>";
      }else{
        echo "<script>alert('deletion Failed'); window.open('adm-meds.php','_self')</script>";
      }
    }
  }
?>
    <!-- <div class="bg-modal">
   			<div class="pop-content animate" style="top:1%; height:80%;">
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
  			</script> -->
