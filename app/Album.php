<?php

class Album extends Koneksi{
	private $db;
	public function __construct()

	{
	try {
		$this->db=
		new PDO("mysql:host=localhost;dbname=db_utsgarnish", "root", "");
		} catch (PDOException $e) {
		die("Error".$e->getMessage());
		}
	}

public function input_album() {

	$namalbum = $_POST['album_nama'];
	$albumtext = $_POST['album_text'];
	$photossid = $_POST['pothoss_id'];

	$sql = "INSERT INTO tb_album (album_nama, album_text, pothoss_id) VALUES 
									(:album_nama, :album_text, :pothoss_id)";
	$stmt = $this->db->prepare($sql);
	$stmt->bindParam(":album_nama", $namalbum);
	$stmt->bindParam(":album_text", $albumtext);
	$stmt->bindParam(":pothoss_id", $photossid);
	$stmt->execute();

	return false;
}
	public function tampil_album()
	{
		$sql="SELECT*FROM tb_album";
		$stmt=$this->db->prepare($sql);
		$stmt->execute();

		$data=[];
		while ($rows=$stmt->fetch()) {
			$data[]=$rows;
		}
		return $data;
	}

	public function edit_album($id)
	{
		$sql="SELECT*FROM tb_album WHERE album_id=:album_id";
		$stmt=$this->db->prepare($sql);
		$stmt->bindParam(":album_id", $id);
		$stmt->execute();

		$row=$stmt->fetch();
		return $row;
	}
 
 public function update_album()
	{

		$namalbum = $_POST['album_nama'];
		$albumtext = $_POST['album_text'];
		$photossid = $_POST['pothoss_id'];
		$id = $_POST['album_id'];

		$sql="UPDATE tb_album SET album_nama=:album_nama, album_text=:album_text, pothoss_id=:pothoss_id WHERE album_id=:album_id";
		$stmt=$this->db->prepare($sql);
		$stmt->bindParam(":album_nama", $namalbum);
		$stmt->bindParam(":album_text", $albumtext);
		$stmt->bindParam(":pothoss_id", $photossid);
		$stmt->bindParam(":album_id",$id);

		$stmt->execute();

		return false;
	}

	public function delete_album($id) 
	{
		$sql = "DELETE FROM tb_album WHERE album_id=:album_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":album_id", $id);
		$stmt->execute();

		return false;
	}
}

