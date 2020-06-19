<?php
include_once "app/Koneksi.php";
include_once "app/Logout.php";

$logout = new Logout();
	$logout->logout();
	header("location:index.php");

?>