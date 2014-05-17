<?php 
session_start();
 include_once("class/login.class.php");
 	$login = new Login();



    $all = $login->getAll();

 ?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Memoro | Login</title>
	<link rel ="stylesheet" href="css/style.css">
	<link rel ="stylesheet" href="css/reset.css">
</head>
<body>

<header>

<img id="logo" src="images/logo3.png"/>

</header>

<h1>NOTEBOOK.PHP</h1>
</div>
<div class="clear">&nbsp;</div>
<div id="footer">
	<h1>&copy; Memoro</h1>

</div>

</body>
</html>

