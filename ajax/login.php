<?php  
//AJAX
	session_start();
	include_once("class/login.class.php");



$_SESSION['naam']=$_POST['log'];
$_SESSION['avatar']=$_POST['avatar'];


header('Location: ../welcomesplash.php');


?>