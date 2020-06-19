<?php
include_once "app/Koneksi.php";
include_once "app/Album.php";

$album = new Album();

if ($_POST['btn-simpan']) {
	$album->input_album();
	header("location:index.php?page=Tampil_album");
}

if ($_POST['btn-edit']) {
	$album->update_album();
	header("location:index.php?page=Tampil_album");
}

if ($_GET['delete-id']) {
	$album->delete_album($_GET['delete-id']);
	header("location:index.php?page=Tampil_album");
}
