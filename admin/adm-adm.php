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
    <title>Admin veterenary Page | i-Agro_solution</title>
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

    <div class="br-modal" style="text-align:left; margin:5px; margin-left: 9%; margin-bottom: 20px;">
        <div class="breadcramps">
          <a href="adm-home.php">Home</a>
          <a href="adm-adm.php" class="active">Veterenary</a>
        </div>
      </div>

    <section class="section">
      

      <div class="fetch">
        <div class="add-admin">
          <a href="#" id="btn2" class="btn2" style=""> Add veterenary</a>
        </div><br>
        <div class="fetch-table">
          <?php
          include('../dbcon.php');
            $result = mysqli_query($con, "select * from vets order by vet_id desc") or die (mysqli_error());
            ?>
            <table border='1'>
              <thead>
                <tr style='background: black;'>
                  <th>Profile Pic</th>
                  <th>Names</th>
                  <th>Email</th>
                  <th>Phone Number</th>
                  <th>Specification</th>
                  <th>Checklist</th>
                  <th>Action</th>
                </tr>
              </thead>
           <?php
            while ($row = mysqli_fetch_array($result)) {
              $id = $row['vet_id'];
              ?>
              <tbody>
              <tr>
               <form action='adm-del.php' method='post'>
                <?php echo'<td><img style="width:80px; height:80px" src="../uploads/' .$row['vet_pic']. '"></td>';?>
               <td><?php echo $row['vet_name']; ?></td>
               <td><?php echo $row['vet_email']; ?></td>
               <td>(+254) <?php echo $row['vet_phone']; ?></td>
               <td><?php echo $row['vet_spec'];?></td>
               <td><input type='checkbox' name='key' value="<?php echo $row['vet_id'];?>" required>&nbsp;  </td>
               <td><input type='submit' name='adm-del' class='btn-del' value='Delete'>&nbsp;  </td>
              </form></tr>
            </tbody>
            
            <?php }
          ?>
        </table> 
        </div>
      </div>

    </section>

    <?php include('adm-footer.php') ?>
    
    <div class="bg-modal">
   			<div class="pop-content animate" style="top:1%; height:80%;">
   				<div class="close" title="ClosePopUp">+</div>
   				<img src="../img/loginAvatar.png" style="height:20%">
   				<form method="post" action="adm-add-adm.php" enctype="multipart/form-data">
            <label style="display: inline-grid;">Browse for profile Pic<input type="file" name="fileToUpload"></label>
   					<input type="text" name="names" placeholder="Full Names" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="number" name="phone" placeholder="Phone" required>
            <textarea style="width:74%;" placeholder="type the vets specifications" name="vet_spec" required></textarea>
   					<input type="Password" name="pwd" placeholder="Password" required>
   					<input type="submit" name="add-adm" id="btn" value="Add Vets">
   				</form>
   			</div>
   		</div>
   		<script type="text/javascript">

  					document.getElementById('btn2').addEventListener('click', function(){
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
