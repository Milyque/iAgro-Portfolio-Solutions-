<?php
session_start();

if (!isset($_SESSION['email'])){
header('location: loginPage.php');
}
$id_session=$_SESSION['email'];
?>
