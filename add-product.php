
<?php include('agrovet-header.php'); ?>

	
	<div class="form-container" style="border-radius: 10px;">
		<form enctype="multipart/form-data" action="" method="POST" class="sell-form" >
			<h1 style="color: white">ADD PRODUCT PANE</h1>
			<label class="sign-input" style="color:orange; float: left; text-align: left; margin-left: 13%;">Browse for the product image
			<input class="sign-input" type="file" name="pic" style="border:none;" required="required" autofocus></label><br>
			<input type="hidden" name="p_id" >
			<input class="sign-input" type="text" placeholder="Enter your location" name="location" style="background-color: #eee; opacity: .6;" required="required"><br>
			<input class="sign-input" type="number" placeholder="Phone number (2547***)" name="phone" style="background-color: #eee; opacity: .6;" required="required"><br>
			<input class="sign-input" type="text" placeholder="Enter your name or Business name" name="agrovet" style="background-color: #eee; opacity: .6;" required="required"><br>
			<input class="sign-input" type="text" placeholder="Enter product name" name="nam" style="background-color: #eee; opacity: .6;" required="required"><br>
			<textarea class="sign-input" placeholder="Type the description of the product" name="details" style="width:70%; height: 40px; background-color: #efffee; opacity: .6; border-radius: 10px;" required="required"></textarea><br>
			<input class="sign-input" type="number" placeholder="Enter price" name="price" style="background-color: #eee; opacity: .6;" required="required"><br>
			
			<input class="sign-btn" type="submit" name="sell" value="SELL">
		</form>
	</div>

<?php include('footer.php'); ?>

	<?php 
	include('dbcon.php');

	if (isset($_POST['sell'])) {
		$p_id = mysqli_real_escape_string($con, $_POST['p_id']);
		$details = mysqli_real_escape_string($con, $_POST['details']);
		$price = mysqli_real_escape_string($con, $_POST['price']);
		$agrovet = mysqli_real_escape_string($con, $_POST['agrovet']);
		$name = mysqli_real_escape_string($con, $_POST['nam']);
		$phone = mysqli_real_escape_string($con, $_POST['phone']);
		$location = mysqli_real_escape_string($con, $_POST['location']);

		$file_name = $_FILES['pic']['name'];
		$tmp_file_name = $_FILES['pic']['tmp_name'];
		$position = strpos($file_name,".");
		$fileextension = substr($file_name, $position + 1);
		$fileextension = strtolower($fileextension);

		if (isset($file_name)) {
		  $path = 'uploads/';
		  // if (empty($file_name)) {
		  //   echo "Please choose an image";
		    if (!empty($file_name)) {
		      if (($fileextension !== "jpg") && ($fileextension !== "jpeg") && ($fileextension !== "png") && ($fileextension !== "bmp") && ($fileextension !== "gif")) {
		        echo "file extensions must be .jpg, .jpeg, .png, .gif or .bmp for the file to be uploaded";
		      }elseif (($fileextension == "jpg") || ($fileextension == "jpeg") || ($fileextension == "png") || ($fileextension == "bmp") || ($fileextension == "gif")) {
			        if (move_uploaded_file($tmp_file_name, $path.$file_name)) {
			        	if(strlen($phone)==12 && preg_match("/^[0-9]*$/", $phone)){
			        		if (preg_match("/^[0-9]*$/", $price)) {
								$insert_query = mysqli_query($con, "insert into agrovet(p_id, p_pic, p_details, p_price, p_name, p_location, p_date, p_phone, p_agrovet) values('$p_id','$file_name','$details','$price','$name','$location',Now(),'$phone','$agrovet')");

								if($insert_query){
									echo "<script>alert ('Product posted successifully'); window.open('agrovet.php','_self')</script>";
								}else{
									echo "<script>alert ('Post Failed'); window.open('add-product.php','_self')</script>";
								}
						}else{
							echo "<script>alert ('Price should consist of only digits'); window.open('add-product.php','_self')</script>";
						}
					}else{
						echo "<script>alert ('Phone number shuld be 12 digit starting as (2547...)'); window.open('add-product.php','_self')</script>";
					}

				}
			  }
			}
		  // }
		}
	}

			

?>