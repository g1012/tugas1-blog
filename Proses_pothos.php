<?php
include_once "app/Koneksi.php";
include_once "app/Pothos.php";

$pothos = new Pothos();

if ($_POST['btn-simpan']) {
	$pothos->input_pothos();
	header("location:index.php?page=Tampil_pothos");
}

if ($_POST['btn-edit']) {
	$pothos->update_pothos();
	header("location:index.php?page=Tampil_pothos");
}

if ($_GET['delete-id']) {
	$pothos->delete_pothos($_GET['delete-id']);
	header("location:index.php?page=Tampil_pothos");
}
