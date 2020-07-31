<?php include('veten-header.php'); ?>

<div class="br-modal">
      <div class="breadcramps">
        <a href="vet.php">Veterenary</a>
        <a href="#" class="active">Vets Search Results</a>
      </div>
    </div>

<?php
include('dbcon.php');
if (isset($_POST['search'])) {
  $seach_field = mysqli_real_escape_string($con, $_POST['s-in']);


  $search_query = mysqli_query($con, "SELECT * FROM vets WHERE vet_name LIKE '%$seach_field%' OR vet_spec LIKE '%$seach_field%' OR vet_phone LIKE '%$seach_field%' ");
  $num_search = mysqli_num_rows($search_query);
  echo "<h2 style='text-align:center; background:white; width:30%; padding:10px; margin-left: 10px;'>(".$num_search.") results were found.</h2>";
  echo "<div style='width:97%; border:1px solid white; padding:10px; position:relative;'>";
  if ($num_search > 0) {
    while ($row = mysqli_fetch_assoc($search_query)) {
      // $par_code = $row['code'];
        echo "
                
	                <div style='display:inline-grid; margin-bottom: 10px;margin-top: 10px; background:#eee; padding:10px; width:30%;'>
	                  <img width=200 height=100 src='uploads/".$row['vet_pic']."'>
	                  <p>Vet Names: ".$row['vet_name']."</p>
	                  <p>Vet Specs: ".$row['vet_spec']."</p>
	                  <p>Vet phone: ".$row['vet_phone']."</p>
	                </div>
                
              ";
    }
  }echo "</div>";
}

?>

<br><br>

<?php include('footer.php'); ?>