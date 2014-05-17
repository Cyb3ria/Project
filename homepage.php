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


	<div id="homeDiv">
		<h1><?= $_SESSION['naam']; ?></h1>
		<img src="upload/<?= $_SESSION['avatar'] ?>"/>

		<ul id="mainMenu">
			<li><a id="wieId" href="wieisdat.php">Wie</a></li>
			<li><a id="watId" href="Notebook.php">Wat</a></li>
			<li><a id="hoeId" href="denk.php">Hoe</a></li>
		</ul>
		<div class="clear">&nbsp;</div>

		<a href="options.php" id="options">options</a>

	</div>
		<div class="clear">&nbsp;</div>


	<div id="footer">
		<h1>&copy; Memoro</h1>
	</div>
	</div><!-- End wrapper -->
	
</body>
</html>