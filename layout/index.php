<?php

	session_start();
	if(!isset($_SESSION['username'])) {
		header("location:login_tampil.php");
		exit();
	} else {
		$username =  $_SESSION['username'];
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>SISTEM INFORMASI</title>
	<link rel="stylesheet" type="text/css" href="layout/assets/css/template.css">
</head>
<body>
<div class="utama">
	<div class="kepala">
		<img src="layout/assets/images/headerr.png">
	</div>

	<div class="menu">
		<a href="index.php">Home</a>
		<a href="index.php?page=Tampil_category">Category</a>
		<a href="index.php?page=Tampil_post">Post</a>
		<a href="index.php?page=Tampil_pothos">Photos</a>
		<a href="index.php?page=Tampil_album">Album</a>
		<a href="logout_proses.php" name="btn-logout">Logout</a>
	</div>

	<div class="isi">
		<?php
			if (isset($_GET['page'])) {
				include $_GET['page'] . ".php";
			} else {
				include "main.php";
			}
		?>
	</div>
	<div class="footer">
		copyright 2020 created by Garnish Ayu Andini Wijaya
	</div>
</div>
</body>
</html>