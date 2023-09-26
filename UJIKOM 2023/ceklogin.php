<?php
session_start();
include "koneksi.php";

if(isset($_POST['nis'], $_POST['password'])) {
	$nis = $_POST['nis'];
	$password = $_POST['password'];
	$query = $conn->query("SELECT * FROM user WHERE nis='$nis'");
	$user = $query->fetch_assoc();

	if($user && password_verify($password, $user['password'])) {
		$_SESSION['nis'] = $nis;
		$_SESSION['nama'] = $user['nama'];
		header("Location: index.php");
		exit();
	} else {
		$error = "NIS atau password salah";
	}
}


?>
