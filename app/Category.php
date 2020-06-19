<?php

class Category extends Koneksi{
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

public function input_category() {

	$namcat = $_POST['cat_nama'];
	$cattext = $_POST['cat_text'];

	$sql = "INSERT INTO tb_category (cat_nama, cat_text) VALUES 
									(:cat_nama, :cat_text)";
	$stmt = $this->db->prepare($sql);
	$stmt->bindParam(":cat_nama", $namcat);
	$stmt->bindParam(":cat_text", $cattext);
	$stmt->execute();

	return false;
}
	public function tampil_category()
	{
		$sql="SELECT*FROM tb_category";
		$stmt=$this->db->prepare($sql);
		$stmt->execute();

		$data=[];
		while ($rows=$stmt->fetch()) {
			$data[]=$rows;
		}
		return $data;
	}

	public function edit_category($id)
	{
		$sql="SELECT*FROM tb_category WHERE cat_id=:cat_id";
		$stmt=$this->db->prepare($sql);
		$stmt->bindParam(":cat_id", $id);
		$stmt->execute();

		$row=$stmt->fetch();
		return $row;
	}
 
 public function update_category()
	{
		$namcat = $_POST['cat_nama'];
		$cattext = $_POST['cat_text'];
		$id = $_POST['cat_id'];

		$sql="UPDATE tb_category SET cat_nama=:cat_nama, cat_text=:cat_text WHERE cat_id=:cat_id";
		$stmt=$this->db->prepare($sql);
		$stmt->bindParam(":cat_nama",$namcat);
		$stmt->bindParam(":cat_text",$cattext);
		$stmt->bindParam(":cat_id",$id);

		$stmt->execute();

		return false;
	}

	public function delete_category($id) 
	{
		$sql = "DELETE FROM tb_category WHERE cat_id=:cat_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":cat_id", $id);
		$stmt->execute();

		return false;
	}
}

