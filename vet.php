<?php include('veten-header.php'); ?>

<section class="box-container">
	<div style="width:98%; margin: 5px auto; border:1px solid black;">
	<div class="title">
		<center><h1 style="color: dodgerblue;">>>>VETERENARIES DOCKET<<<</h1></center>
	</div>

	<?php 

	include('dbcon.php');
	$vets_query = mysqli_query($con, "select * from vets order by vet_id desc");
	$vets_no = mysqli_num_rows($vets_query);

	if ($vets_no > 0) {
		while ($row = mysqli_fetch_assoc($vets_query)) {
			echo 
			'<div class="box">
				<img src="uploads/'.$row['vet_pic'].'" class="box-img">
				<table class="box-tbl" border=1>
					<tr><td>Vetenary Name:</td><td class="select-detail">'.$row['vet_name'].'</td></tr>
					<tr><td>Vetenary specification:</td><td class="select-detail">'.$row['vet_spec'].'</td></tr>
					<tr><td>Vetenary phone:</td><td class="select-detail">(+254) '.$row['vet_phone'].'</td></tr>
					<tr><td>Vetenary email:</td><td class="select-detail">'.$row['vet_email'].'</td></tr>
				</table>
			</div>';
		}
	}
		

	?>		

	</div>
</section>

<?php include('footer.php'); ?>
