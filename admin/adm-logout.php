<?php

include('session');
$logout_query=mysqli_query($con, "select * from admin where adm_id=$id_session");
$row=mysqli_fetch_array($logout_query);
$user=$row['fn']." ".$row['ln'];
session_start();
session_destroy();
header('Location: adm-login.php');


?>
