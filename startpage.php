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


<div id="welkomdiv">
	<img id="avatar" src="images/avatar.jpg" alt="">
<div id="loginpicture">loginpic</div>
	<h1 id="welcome">Welkom</h1>
	<h1 id="welcomeNaam"><?=$_SESSION['naam']; ?></h1>

	<!--<form action="POST">

		<input type="text" value = "naam">

		<button type="submit">Doorgaan</button>


	</form>-->


</div>
<div class="clear">&nbsp;</div>
<div id="footer">
	<h1>&copy; Memoro</h1>

</div>
	<script>//setTimeout(function(){window.location.href='homepage.php'},2000);</script>
</body>
</html>

