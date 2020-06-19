<?php
include_once "app/Koneksi.php";
include_once "app/Post.php";

$post = new Post();

if ($_POST['btn-simpan']) {
	$post->input_post();
	header("location:index.php?page=Tampil_post");
}

if ($_POST['btn-edit']) {
	$post->update_post();
	header("location:index.php?page=Tampil_post");
}

if ($_GET['delete-id']) {
	$post->delete_post($_GET['delete-id']);
	header("location:index.php?page=Tampil_post");
}
