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
    <title>Admin Agrovet Page | i-Agro_solution</title>
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

    <div class="br-modal" style="text-align:left; margin-left: 30px; margin:5px; margin-bottom: 20px;">
        <div class="breadcramps">
          <a href="adm-home.php">Home</a>
          <a href="adm-anm.php" class="active">Agrovet Posts</a>
        </div>
      </div>

    <section class="section">
      

      <div class="fetch">
        <div class="add-admin">
          <a href="adm-home.php"  class="btn2" style=""> Back</a>
        </div><br>
        <div class="fetch-table">
          <?php
          include('../dbcon.php');
            $result = mysqli_query($con, "select * from agrovet order by p_id desc") or die (mysqli_error());
          ?>
            
            <table border='1'>
            
              <thead>
                <tr style='background: black;'>
                  <th>Product Image</th>
                  <th>Product Name</th>
                  <th>Details</th>
                  <th>Product's Owner</th>
                  <th>Owner's contact</th>
                  <th>Location</th>
                  <th>Date Added</th>
                  <th>Select</th>
                  <th>Action</th>
                </tr>
              </thead>

            <?php
            while ($row = mysqli_fetch_array($result)) {
              $name = $row['p_name'];
            ?>
              <tbody>
                <tr>
                  <form method='post' action='' role='form'>
                    <?php echo'<td><img style="width:80px; height:80px" src="../uploads/' .$row['p_pic']. '"></td>';?>
                    <td style="text-transform: capitalize; color: dodgerblue;"> <?php echo $row['p_name']; ?></td>
                    <td style="text-transform: capitalize; color: green;"> <?php echo $row['p_details']; ?></td>
                    <td style="text-transform: capitalize; color: dodgerblue;"> <?php echo $row['p_agrovet']; ?></td>
                    <td style="color: green;">0<?php echo $row['p_phone']; ?></td>
                    <td style="text-transform: capitalize; color: dodgerblue;"> <?php echo $row['p_location']; ?></td>
                    <td style="text-transform: capitalize; color: green;"> <?php echo $row['p_date']; ?> </td>
                    <td><input type='checkbox' name='check-dlt' class='btn-del' value="<?php echo $row['p_id']; ?>" required></td>
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

    $check = mysqli_query($con, "select * from agrovet where p_id='$key'");
    if (mysqli_num_rows($check)>0) {
      $delete=mysqli_query($con, "DELETE FROM agrovet WHERE p_id='$key'");
      if($delete){
        echo "<script>alert('$name deleted successfully'); window.open('adm-agrovet.php','_self')</script>";
      }else{
        echo "<script>alert('deletion Failed'); window.open('adm-agrovet.php','_self')</script>";
      }
    }
  }
?>