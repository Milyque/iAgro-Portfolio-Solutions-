<?php include('agrovet-header.php'); ?>

<div class="br-modal">
      <div class="breadcramps">
        <a href="agrovet.php">Agrovet</a>
        <a href="#" class="active">Product Search Results</a>
      </div>
    </div>

<?php
include('dbcon.php');
if (isset($_POST['search'])) {
  $seach_field = mysqli_real_escape_string($con, $_POST['s-in']);


  $search_query = mysqli_query($con, "SELECT * FROM agrovet WHERE p_name LIKE '%$seach_field%' OR p_price LIKE '%$seach_field%' OR p_details LIKE '%$seach_field%' OR p_location LIKE '%$seach_field%' ");
  $num_search = mysqli_num_rows($search_query);
  echo "<h2 style='text-align:center; background:white; width:30%; padding:10px; margin-left: 10px;'>(".$num_search.") results were found.</h2>";
  echo "<div style='width:97%; border:1px solid white; padding:10px; position:relative;'>";
  if ($num_search > 0) {
    while ($row = mysqli_fetch_assoc($search_query)) {
      // $par_code = $row['code'];
        
        echo "
                
	                <div style='display:inline-grid; margin-bottom: 10px;margin-top: 10px; background:#eee; padding:13px; width:30%; color:dodgerblue;'>
	                  <img width=200 height=100 src='uploads/".$row['p_pic']."'>
	                  <p>Posted by ".$row['p_name']." at Kshs.".$row['p_price']." <br>
	                  Contact seller on (+254) ".$row['p_phone']." <br>
	                  Product Description: ".$row['p_details']."<br>
                    Agrovet Name is: ".$row['p_agrovet']." located in ".$row['p_location']."</p>
	                </div>
                
              ";
        
    }
  }echo "</div>";
}

?>
<br><br>

<?php include('footer.php'); ?>