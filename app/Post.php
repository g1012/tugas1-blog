
<?php

class Post extends Koneksi{
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


public function input_post() {

	$datepost = $_POST['post_date'];
	$slugpost = $_POST['post_slug'];
	$litlepost = $_POST['post_litle'];
	$textpost = $_POST['post_text'];
	$cattid = $_POST['catt_id'];

	$sql = "INSERT INTO tb_post (post_date, post_slug, post_litle, post_text, catt_id) VALUES 
									(:post_date, :post_slug, :post_litle, :post_text, :catt_id)";
	$stmt = $this->db->prepare($sql);
	$stmt->bindParam(":post_date", $datepost);
	$stmt->bindParam(":post_slug", $slugpost);
	$stmt->bindParam(":post_litle", $litlepost);
	$stmt->bindParam(":post_text", $textpost);
	$stmt->bindParam(":catt_id", $cattid);
	$stmt->execute();

	return false;
}
	public function tampil_post()
	{
		$sql="SELECT*FROM tb_post";
		$stmt=$this->db->prepare($sql);
		$stmt->execute();

		$data=[];
		while ($rows=$stmt->fetch()) {
			$data[]=$rows;
		}
		return $data;
	}

	public function edit_post($id)
	{
		$sql="SELECT*FROM tb_post WHERE post_id=:post_id";
		$stmt=$this->db->prepare($sql);
		$stmt->bindParam(":post_id", $id);
		$stmt->execute();

		$row=$stmt->fetch();
		return $row;
	}
 
 public function update_post()
	{
		$datepost = $_POST['post_date'];
		$slugpost = $_POST['post_slug'];
		$litlepost = $_POST['post_litle'];
		$textpost = $_POST['post_text'];
		$cattid = $_POST['catt_id'];
		$id = $_POST['post_id'];

		$sql="UPDATE tb_post SET post_date=:post_date, post_slug=:post_slug, post_litle=:post_litle, post_text=:post_text, catt_id=:catt_id WHERE post_id=:post_id";
		$stmt=$this->db->prepare($sql);
		$stmt->bindParam(":post_date", $datepost);
		$stmt->bindParam(":post_slug", $slugpost);
		$stmt->bindParam(":post_litle", $litlepost);
		$stmt->bindParam(":post_text", $textpost);
		$stmt->bindParam(":catt_id", $cattid);
		$stmt->bindParam(":post_id",$id);

		$stmt->execute();

		return false;
	}

	public function delete_post($id) 
	{
		$sql = "DELETE FROM tb_post WHERE post_id=:post_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":post_id", $id);
		$stmt->execute();

		return false;
	}
}

