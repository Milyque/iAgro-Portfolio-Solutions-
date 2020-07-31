<?php
  // date_default_timezone_get('Africa/Nairobi');
  $host="localhost";
  $db="agrodb";
  $password="";
  $user="root";

  $con=mysqli_connect($host,$user,$password,$db) or die(mysqli_error($con));


?>
