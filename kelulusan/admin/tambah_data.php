<?php
include "../koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data - Alumni SMK Negeri 5 Kota Bekasi</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        .main-registrasi .title {
            position: absolute;
            width: 476px;
            height: 60px;
            left: 10px;
            top: 80px;

            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-size: 40px;
            line-height: 60px;
            /* identical to box height */

            letter-spacing: -0.02em;

            color: #FFFFFF;
        }

        .datasiswa {
            position: absolute;
            width: 237px;
            height: 41px;
            left: 1070px;
            top: 35px;

            font-family: 'Work Sans';
            font-style: normal;
            font-weight: 700;
            font-size: 50px;
            line-height: 41px;
            /* identical to box height */

            letter-spacing: -0.02em;

            color: #000000;
        }

        .datasiswa:hover .dropdown-content {
            display: block;
        }

        table tr td {
            font-family: 'Poppins Extrabold', sans-serif;
        }

        input {
            border-radius: 20px;
            width: 300px;
            height: 29px;
            font-family: 'Poppins Extrabold', sans-serif;
        }

        select {
            border-radius: 20px;
            width: 325px;
            height: 31px;
            font-family: 'Poppins Extrabold', sans-serif;
            font-size: 15px;
        }

        .tonmbol {
            width: 100px;
        }
    </style>
</head>

<body>
    <nav class="navi">
        <img src="../images/smk5.png" alt="" class="smkk5">
        <p class="sekolah">SMK NEGERI 5 <br>
            <span class="wilayah">KOTA BEKASI</span><br>
            <span class="wilayah">Administrasi</span>
        </p>

        <ul class="navigasi">
            <li class="home"><a href="#">Home</a>
                <div class="dropdown-content">
                    <a href="statistik.html">Statistik SMKN 5</a>
                    <a href="#">Postingan</a>
                    <a href="#footer">About Me!</a>
                </div>
            </li>
            <li class="alumni"><a href="#">Data Alumni</a>
                <div class="dropdown-content">
                    <a href="data alumni.php">Data</a>
                    <a href="#">Tahun Angkatan</a>
                    <a href="#">Jurusan</a>
                </div>
            </li>
            <li class="cek"><a href="#">Cek Kelulusan</a>
                <div class="dropdown-content">
                    <a href="#">Cek Kelulusan</a>
                    <a href="infokelulusan.html">Info Kelulusan</a>
                    <a href="#">Jumlah Kelulusan</a>
                </div>
            </li>
            <li class="datasiswa"><a href="#">...</a>
                <div class="dropdown-content">
                    <a href="tambah_data.php">Tambah Data</a>
                    <a href="#">Edit Data</a>
                    <a href="#">Hapus Data</a>
                </div>
            </li>
            <li class="login"><a href="logout.php" class="txtlog">Logout</a></li>
        </ul>
    </nav>
    <div class="main-registrasi">
        <p class="title">Registrasi Data Alumni</p>
    </div>
    <br><br><br><br><br> <br><br><br><br><br><br><br>
    <div class="konten">
        <div id="main">

            <form name="" method="POST" action="tambah_data.php">
                <h2>
                    <table cellspacing="" cellpadding="2">
                        <hr>
                        <tr>
                            <td class="ba" colspan="2">DATA SISWA</td>
                        </tr>
                        <tr>
                            <td class="ab">NIS</td>

                            <td><input class="text" type="text" name="nis"></td>
                        </tr>
                        <tr>
                            <td class="ab">Nama</td>

                            <td><input type="text" name="nama" class="input"></td>
                        </tr>
                        <tr>
                            <td class="ab">Jurusan</td>

                            <td><select name="jurusan" id="">
                                    <Option value="Rekayasa Perangkat Lunak">
                                        Rekayasa Perangkat Lunak
                                    </Option>
                                    <option value="Perbankan Syariah">
                                        Perbankan Syariah
                                    </option>
                                    <option value="Kimia Analis">
                                        Kimia Analis
                                    </option>
                                    <option value="Teknik Elektronika Industri">
                                        Teknik Elektronika Industri
                                    </option>
                                </select></td>
                        </tr>
                        <tr>
                            <td class="ab">Angkatan</td>

                            <td><input type="text" name="angkatan" class="input"></td>
                        </tr>
                        <tr>
                            <td class="ab">Tahun Lulus</td>

                            <td><input type="text" name="tahun_lulus" class="input"></td>
                        </tr>
                        <tr>
                            <td class="ab">Status</td>

                            <td><select name="status" id="">
                                    <option value="Bekerja">Bekerja</option>
                                    <option value="Kuliah">Kuliah</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td class="ab">Selengkapnya</td>

                            <td><input type="text" name="selengkapnya" class="input"></td>
                        </tr>
                        <tr>
                            <td class="ab">Username</td>

                            <td><input type="text" name="username" class="input"></td>
                        </tr>
                        <tr>
                            <td class="ab">Password</td>

                            <td><input type="password" name="password" class="input"></td>
                        </tr>
                        <tr>
                            <td class="ab">Akses</td>

                            <td><input type="text" name="akses" value="user" class="input"></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>
                                <center><input class="tombol" type="submit" name="submit" value="Add"></center>
                            </td>

                        </tr>
                        <tr>
                        </tr>
                </h2>
                </table>
                <div class="page"><img src="../images/dataregis.png" alt=""></div>
                <?php


                $sql = "select*from user";
                $query = mysqli_query($conn, $sql);
                $proses = mysqli_fetch_array($query);
                $nis = $proses['nis'];
                $nama = $proses['nama'];
                $jurusan = $proses['jurusan'];
                $angkatan = $proses['angkatan'];
                $tahun_lulus = $proses['tahun_lulus'];
                $status = $proses['status'];
                $selengkapnya = $proses['selengkapnya'];
                $username = $proses['username'];
                $password = $proses['password'];
                $akses = $proses['akses'];
                ?>
                <div id="footer-info">
                    <div class="kontak">
                        <div class="call">Kontak Kami</div>
                        <div class="sekola">SMK NEGERI 5 KOTA BEKASI Telepon : 021-88986203</div>
                        <div class="email">Email : smkn5kotabekasi@gmail.com</div>
                        <div class="alamat">Villa Indah Permai Blok E27 RT 009/033, Kelurahan Teluk Pucung, <br>
                            Kecamatan Bekasi Utara, Kota Bekasi, Jawa Barat, Indonesia.</div>
                    </div>
                    <h5 class="copy">© 2020 SMK Negeri 5 Kota Bekasi. All Rights Reserved.</h5>
                </div>
</body>

</html>
<?php

if (isset($_POST['submit'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $angkatan = $_POST['angkatan'];
    $tahun_lulus = $_POST['tahun_lulus'];
    $status = $_POST['status'];
    $selengkapnya = $_POST['selengkapnya'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $akses = $_POST['akses'];


    $query = "INSERT into `user`
VALUES ('$nis','$nama','$jurusan','$angkatan','$tahun_lulus','$status','$selengkapnya','$username','$password','$akses')";
    $daftar = mysqli_query($conn, $query);
    header("location:tambah_data.php");
}
?>