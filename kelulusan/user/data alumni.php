<?
include '../koneksi.php';
if (isset($_POST['search'])) {
    $valueSearch = $_POST['valueSearch'];
    $query = "SELECT * FROM `user` WHERE CONCAT(`nis`, `nama`, `jurusan`, `angkatan`, `tahun_lulus`, `status`, `selengkapnya`) LIKE '%" . $valueSearch . "%'";
    $search_result = filterTable($query);
} else {
    $query = "SELECT * FROM `user`";
    $search_result = filterTable($query);
}

function filterTable($query)
{
    $conn = mysqli_connect("localhost", "root", "", "kelulusan");
    $filter_Result = mysqli_query($conn, $query);
    return $filter_Result;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Alumni</title>
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
            font-family: 'Poppins Extrabold', sans-serif;
        }

        .rpl a{

            position: absolute;
            width: 476px;
            height: 60px;
            left: 62px;
            top: 600px;

            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-size: 20px;
            line-height: 60px;
            /* identical to box height */

            letter-spacing: -0.02em;

            color: #FFFFFF;
        }

        .tei a{

            position: absolute;
            width: 476px;
            height: 60px;
            left: 850px;
            top: 600px;

            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-size: 20px;
            line-height: 60px;
            /* identical to box height */

            letter-spacing: -0.02em;

            color: #FFFFFF;
        }

        .rplimg {
            position: absolute;
            top: 270px;
            left: -10px;
        }
        .pbsimg {
            position: absolute;
            top: 270px;
            left: 450px;
            
        }

        .pbs a {

            position: absolute;
            width: 476px;
            height: 60px;
            left: 500px;
            top: 600px;

            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-size: 20px;
            line-height: 60px;
            /* identical to box height */

            letter-spacing: -0.02em;

            color: #FFFFFF;
        }

        .ka a{

            position: absolute;
            width: 476px;
            height: 60px;
            left: 1250px;
            top: 600px;

            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-size: 20px;
            line-height: 60px;
            /* identical to box height */

            letter-spacing: -0.02em;

            color: #FFFFFF;
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
                    <a href="#">Data</a>
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
    <div class="main-statistik">
        <p class="title">Data Alumni Kelulusan</p>
    </div>
<img src="../images/rplimg.png" alt="" class="rplimg" width="400px">
<div class="rpl">
    <a href="rpl.php">Rekayasa Perangkat Lunak</a>
</div>
<img src="../images/pbs.png" alt="" class="pbsimg" width="300px">
<div class="pbs">
    <img src="pbs.png" alt="" class="rplimg">
    <a href="rpldata.php">Perbankan Syariah</a>
</div>
<div class="tei">
    <img src="tei.png" alt="" class="rplimg">
    <a href="rpldata.php">Teknik Elektronika Industri</a>
</div>
<div class="ka">
    <img src="ka.png" alt="" class="rplimg">
    <a href="rpldata.php">Kimia Analis</a>
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