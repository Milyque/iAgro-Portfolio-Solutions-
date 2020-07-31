<?php
session_start();

if (!isset($_SESSION['id'])){
header('location:adm-login.php');
}
$id_session=$_SESSION['id'];
?>
