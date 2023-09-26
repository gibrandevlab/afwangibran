<?php
$servername = "localhost"; // host database
$username = "root"; // username default MySQL
$password = ""; // password default MySQL
$dbname = "ujikom_2023"; // nama database

// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil!";
?>
