
<?php

class Pothos extends Koneksi{
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


public function input_pothos() {

	$datephotos = $_POST['pothos_date'];
	$litlephotos = $_POST['pothos_litle'];
	$textphotos = $_POST['pothos_text'];
	$posttid = $_POST['postt_id'];

	$sql = "INSERT INTO tb_pothos (pothos_date, pothos_litle, pothos_text, postt_id) VALUES 
									(:pothos_date, :pothos_litle, :pothos_text, :postt_id)";
	$stmt = $this->db->prepare($sql);
	$stmt->bindParam(":pothos_date", $datephotos);
	$stmt->bindParam(":pothos_litle", $litlephotos);
	$stmt->bindParam(":pothos_text", $textphotos);
	$stmt->bindParam(":postt_id", $posttid);
	$stmt->execute();

	return false;
}
	public function tampil_pothos()
	{
		$sql="SELECT*FROM tb_pothos";
		$stmt=$this->db->prepare($sql);
		$stmt->execute();

		$data=[];
		while ($rows=$stmt->fetch()) {
			$data[]=$rows;
		}
		return $data;
	}

	public function edit_pothos($id)
	{
		$sql="SELECT*FROM tb_pothos WHERE pothos_id=:pothos_id";
		$stmt=$this->db->prepare($sql);
		$stmt->bindParam(":pothos_id", $id);
		$stmt->execute();

		$row=$stmt->fetch();
		return $row;
	}
 
 public function update_pothos()
	{
		$datephotos = $_POST['pothos_date'];
		$litlephotos = $_POST['pothos_litle'];
		$textphotos = $_POST['pothos_text'];
		$posttid = $_POST['postt_id'];
		$id = $_POST['pothos_id'];

		$sql="UPDATE tb_pothos SET pothos_date=:pothos_date, pothos_litle=:pothos_litle, pothos_text=:pothos_text, postt_id=:postt_id WHERE pothos_id=:pothos_id";
		$stmt=$this->db->prepare($sql);
		$stmt->bindParam(":pothos_date", $datephotos);
		$stmt->bindParam(":pothos_litle", $litlephotos);
		$stmt->bindParam(":pothos_text", $textphotos);
		$stmt->bindParam(":postt_id", $posttid);
		$stmt->bindParam(":pothos_id", $id);

		$stmt->execute();

		return false;
	}

	public function delete_pothos($id) 
	{
		$sql = "DELETE FROM tb_pothos WHERE pothos_id=:pothos_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":pothos_id", $id);
		$stmt->execute();

		return false;
	}
}

