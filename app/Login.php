<?php

class Login extends Koneksi {

	public function __construct() {
		parent::__construct();
	}
	public function login()
	{
		session_start();
		$username = $_POST['username'];
		$password = $_POST['pass'];
		$sql = "SELECT*FROM tb_user WHERE user_name=:user_name AND user_pass=:user_pass";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam("user_name", $username);
		$stmt->bindParam("user_pass", $password);
		$stmt->execute();

		$data = $stmt->fetch();
	if ($stmt->rowcount() > 0){
		$_SESSION['username'] = $username['username'];
		header("location:index.php");
	}
	else {
		echo "Gagal Masuk";
	}
}
}

?>