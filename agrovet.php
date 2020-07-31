<?php include('agrovet-header.php'); ?>

<p><a href="add-product.php" style="background-color:dodgerblue; color:white; padding:10px; margin: 10px; text-decoration: none; border-radius: 7px;">ADD PRODUCT</a></p>

<section class="agrovet-main">
	<div class="product-container">
	<?php 

		include('dbcon.php');

				error_reporting();


		$select_query = mysqli_query($con, "select * from agrovet order by p_id desc");
		$num_rows = mysqli_num_rows($select_query);

		if ($num_rows>0) {
			while ($row = mysqli_fetch_assoc($select_query)) {

				$p_id = $row['p_id'];
				
				echo "<div class='product'>

						<center><img style='margin:5px auto;' width=150 height=100 src='uploads/".$row['p_pic']."'><br>
						<p><span style='color:darkorange; text-transform:capitalize;'>".$row['p_name']."</span>  <span style='color:dodgerblue;'>&nbsp; Kshs.".$row['p_price']."</span> <span style='color:#aaa; font-size:13px;'><br>".$row['p_date']."</span><br><div style=' border:1px solid #ccc; padding:3px; text-transform:capitalize;'>
						".$row['p_details']."</div></p>
						<a  href='agrovet.php?p_id=$p_id' >View Details</a></center>
					 </form></div>";
			}
		}

	 ?>
	 </div>

	 <div class="product-info" >
		<h3>Preview Of The Product</h3>
		<p style="color: dodgerblue; font-size: 20px; font-family: papyrus; border: 1px solid dodgerblue; padding: 5px;">For you to buy you have to contact the seller via the following details...</p>

			<?php  


				include('dbcon.php');
				error_reporting(0);
				$p_id = $_GET['p_id'];
					$query = mysqli_query($con, "select * from agrovet where p_id='$p_id' order by p_id desc");
					$num_rows = mysqli_num_rows($query);

					if ($num_rows > 0) {
						while ($row = mysqli_fetch_assoc($query)) {
							$p_id = $row['p_id'];
							
							echo "<div class='selected-product' style='position: relative;' >
									<p style='color: green;'>".$row['p_name']."&nbsp Price: Kshs.".$row['p_price']."</p>
									<img style='margin:5px auto;' width=200 height=100 src='uploads/".$row['p_pic']."'><br>
									<div style='position:relative; position:absolute; top:45%; width:98%;'>
										<table style='width:98%; position:absolute; left:5px; border-collapse:collapse;' border=1>
											<tr><td>Product description:</td><td class='select-detail'> ".$row['p_details']."<t/d></tr>
											<tr><td>Product Owner:</td><td class='select-detail'> ".$row['p_agrovet']."</td></tr>
											<tr><td>Agrovet Location :</td><td class='select-detail'> ".$row['p_location']." </span></td></tr>
											<tr><td>The seller contacts </td><td class='select-detail'> (+254) ".$row['p_phone']."</td></tr>
										</table>
									</div>
								 </div>";
						}
					}

				
				

			?>

	</div>

</section>

<?php include('footer.php'); ?>