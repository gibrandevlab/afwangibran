<?php
session_start();

// Include koneksi database
include 'koneksi.php';

// Cek apakah user sudah login
if (!isset($_SESSION['nis'])) {
    header('Location: login.php');
    exit;
}

// Ambil data user berdasarkan nis dari session
$nis = $_SESSION['nis'];
$query = $conn->prepare("SELECT nis, nama, password, alamat FROM user WHERE nis = ?");
$query->bind_param("s", $nis);
$query->execute();
$result = $query->get_result();

// Tampilkan data dalam tabel
echo "<table>";
echo "<tr><th>NIS</th><th>Nama</th><th>Password</th><th>Alamat</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['nis'] . "</td>";
    echo "<td>" . $row['nama'] . "</td>";
    echo "<td>" . $row['password'] . "</td>";
    echo "<td>" . $row['alamat'] . "</td>";
    echo "</tr>";
}
echo "</table>";

// Tutup koneksi database
$conn->close();
?>
