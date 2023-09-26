<?php
include "../koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Alumni SMK Negeri 5 Kota Bekasi</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        .table-line {
            width: 100%;
            border-collapse: collapse;
            left: 60px;
            position: absolute;
        }

        .table-line th {
            background: #850785;
            color: #FFFFFF;
            padding: 1em;
            text-align: left;
            text-transform: uppercase;
        }

        .table-line td {
            border-bottom: 1px solid #DDDDDD;
            color: white;
            text-shadow: 2px 2px black;
            padding: 1em;
            font-family: 'Poppins Extrabold',sans-serif;
        }
    </style>
</head>

<body>
    <nav class="navi">
        <img src="../images/smk5.png" alt="" class="smkk5">
        <p class="sekolah">SMK NEGERI 5 <br>
            <span class="wilayah">KOTA BEKASI</span>
            <br><span class="wilayah">Siswa Alumni</span>
        </p>
        <ul class="navigasi">
            <li class="home"><a href="#">Home</a>
                <div class="dropdown-content">
                    <a href="profil.php">Profile</a>
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
            <li class="login"><a href="logout.php" class="txtlog">Logout</a></li>
        </ul>
    </nav>
    <?php
    session_start();
    $tampilUser    = mysqli_query($conn, "SELECT * FROM user WHERE nis='$_SESSION[nis]'");
    $user          = mysqli_fetch_array($tampilUser);
    ?>
    <div class="main-statistik">
        <p class="title">Profile Account Alumni</p>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="main">
        <table border="0" cellpadding="4" class="table-line">
            <tr>
                <td width="140" rowspan="7"><img src="../images/<?= $user['foto'] ?>" width="100" height="120" /></td>
                <td width="390" colspan="2"><b>Your Account</b></td>
            </tr>
            <tr>
                <td width="90">NIS</td>
                <td width="300">:<?php echo $user['nis'] ?> </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>: <?php echo $user['nama'] ?></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>: <?php echo $user['jurusan'] ?></td>
            </tr>
            <tr>
                <td>Angkatan</td>
                <td>: <?= $user['angkatan'] ?></td>
            </tr>
            <tr>
                <td>Tahun Lulus</td>
                <td>: <?= $user['tahun_lulus'] ?></td>
            </tr>
            <tr>
                <td>Status</td>
                <td>: <?= $user['status'] ?></td>
            </tr>
    </div>
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