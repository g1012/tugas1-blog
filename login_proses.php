<?php
include_once "app/Koneksi.php";
include_once "app/Login.php";

$login = new Login();

if ($_POST['btn-login']){
	$login->login();
	header("location:index.php");
}

