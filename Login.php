<?php 
	session_start();
	include_once("class/login.class.php");
	$login = new Login();
	if  (!empty($_POST))
	{
		$login->Naam = $_POST['naam'];
		$name = $_FILES["file"]["name"];
		$login->Image = $name;
		$tmp_name = $_FILES['file']['tmp_name'];
		$error = $_FILES['file']['error'];
		if (isset ($name)) 
		{
			if (!empty($name)) 
			{
				$location = 'upload/';
				if  (move_uploaded_file($tmp_name, $location.$name))
				{
					echo 'Uploaded';    
				}
			} 
				else 
				{
					echo 'please choose a file';
				}
		}
		$login->save();
		
	}
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
		<div id="loginDiv">
			<h1>Hoe heet ik?</h1>
			<form action="" id="loginForm" method="POST" enctype="multipart/form-data">
				<input name="naam" type="text" placeholder="John Snow"/>
				<input accept="image/jpeg" name="file" type="file"/>
				<button name="submit" type="submit">Doorgaan</button>
			</form>
			<?php 
			if (!empty($all)) 
			{
				foreach($all as $a) { ?>    
					<h4><strong>Profile:</strong></h4>
					<a href="WelcomeSplash.php?naam=<?= $a['naam']?>">Naam: <?= $a['naam'] ?></br></a>       
					<!--  <p>avatar: <img src="upload/<?= $a['avatar'] ?>"/></br></p>     -->        
			<?php } 
			}
			?> 
		</div>
		<div class="clear">&nbsp;</div>
		<div id="footer">
			<h1>&copy; Memoro</h1>
		</div>	
	</body>
</html>

