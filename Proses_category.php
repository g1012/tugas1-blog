<?php
include_once "app/Koneksi.php";
include_once "app/Category.php";

$cat = new Category();

if ($_POST['btn-simpan']) {
	$cat->input_category();
	header("location:index.php?page=Tampil_category");
}

if ($_POST['btn-edit']) {
	$cat->update_category();
	header("location:index.php?page=Tampil_category");
}

if ($_GET['delete-id']) {
	$cat->delete_category($_GET['delete-id']);
	header("location:index.php?page=Tampil_category");
}
