<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page - Kelulusan SMK NEGERI 5 KOTA BEKASI</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        .datasiswa{
    position: absolute;
width: 237px;
height: 41px;
left: 1070px;
top: 35px;

font-family: 'Work Sans';
font-style: normal;
font-weight:700;
font-size: 50px;
line-height: 41px;
/* identical to box height */

letter-spacing: -0.02em;

color: #000000;
}
 .datasiswa:hover .dropdown-content {
        display: block;
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
        <div class="main">
            <div class="datang"><span class="kutip" style="color:black;">"</span> Selamat Datang <span class="kutip">“</span></div>
            <div class="hp">HOME PAGE KELULUSAN</div>
            <div class="n5">SMK NEGERI 5 KOTA BEKASI</div>
        </div>
        <div class="page"><img src="../images/pages.png" alt=""></div>
        <div class="btncek">
            <a href="" class="lulus">Cek Kelulusan</a>
            <a href="#bannercek" class="cdata">Cek Data</a>
        </div>
        <div class="check">
            <h2 id="bannercek">Cek Data Siswa SMK Negeri 5 Kota Bekasi</h2>
            <ul>
                <li><p>Periksa data kelulusan :</p></li>
                <li><p>NISN/NIS</p></li>
                <li><p>NAMA</p></li>
                <li><p>JURUSAN</p></li>
                <li><p>TAHUN KELULUSAN</p></li>
            </ul>
            <div class="checking">
                <input type="text" class="nisn" placeholder="NISN/NIS : 00XXXXXXXX/202XXXXX">
                <input type="text" class="nama" placeholder="NAMA : XXXXXX">
                <input type="text" class="jurusan" placeholder="JURUSAN : RPL/TEI/PBS/KA">
                <input type="text" class="thnkel" placeholder="TAHUN KELULUSAN : 20XX/20XX">
                <a href="" class="cekdata">Cek Data</a>
            </div>
        </div>
        <div class="main2">
            <h3 class="kepala">KEPALA SEKOLAH SMKN 5 KOTA BEKASI</h3>
            <img src="../images/kepala.png" alt="" class="kepsek">
            <h4 class="nkepsek">Drs. Sugiyono, M.M.
            </h4>
        </div>
        <div id="footer">
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