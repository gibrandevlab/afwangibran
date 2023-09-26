<?php

$conn = mysqli_connect("localhost","root","","kelulusan");


if (mysqli_connect_errno()){
echo "Koneksi database gagal : " .mysqli_connect_error();
}
?>