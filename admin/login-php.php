
<?php
include('../dbcon.php');

if (isset($_POST['adm_login'])){

$username=$_POST['un'];
$password=$_POST['pwd'];

$login_query=mysqli_query($con, "select * from admin where un='$username' and pwd='$password'");
$count=mysqli_num_rows($login_query);
$row=mysqli_fetch_array($login_query);
// $firstname=$row['fn'];
// $lastname=$row['ln'];

if ($count > 0){
session_start();
$_SESSION['id']=$row['adm_id'];
// $user=$row['firstname']." ".$row['lastname'];


echo "<script>alert('Successfully Login!'); window.location='adm-home.php'</script>";
}else{
	echo "<script>alert('Invalid Username and Password! Try again.'); window.location='adm-login.php'</script>";
?>
<?php }
}else{
  header('Location: ');
}
?>
