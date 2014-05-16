<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Memoro | Login</title>
	<link rel ="stylesheet" href="css/style.css">
	<link rel ="stylesheet" href="css/reset.css">
</head>
<body>
	<div id="wrapper">
	<header id="headerHome">

		<img id="logoHomepage" src="images/logo2.png"/>

	</header>
	<h1><?= $_SESSION['naam']; ?></h1>

	<div id="homeDiv">

		<p>dfdsf</p>

	</div>
		<div class="clear">&nbsp;</div>


	<div id="footer">
		<h1>&copy; Memoro</h1>
	</div>
	</div><!-- End wrapper -->
	
</body>
	<script src="js/ScalingBg.js"></script>
</html>

