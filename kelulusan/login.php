<?php
include 'koneksi.php';
error_reporting(0);

session_start();

if (isset($_SESSION['nama'])) {
    header("Location: user/index.php");
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['nis'] = $row['nis'];
        $_SESSION['nama'] = $row['nama'];
        header("Location: user/index.php");
    } else {
        echo "<script>alert('Username atau password Anda salah. Silahkan coba lagi!')</script>";
    }
} 

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['id'] = $row['id'];
        $_SESSION['nama_admin'] = $row['nama_admin'];
        header("Location: admin/index.php");
    } else {
        echo "<script>alert('Username atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Kelulusan SMK Negeri 5 Kota Bekasi</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="alert alert-warning" role="alert">
        <?php echo $_SESSION['error'] ?>
    </div>
    <ul>
        <li><img src="images/TUT WURI 1.png" alt="" class="tut"></li>
        <li>
            <h3>DATA KELULUSAN SISWA/I SMK NEGERI 5 KOTA BEKASI</h3>
        </li>
        <li><img src="images/belajar.png" alt="" class="belajar"></li>
    </ul>
    <img src="images/smk5.png" alt="" class="smk5">
    <form action="" method="POST">
        <div class="input">
            <input type="text" name="username" value="<?php echo $username; ?>" class="username" placeholder="Username">
            <input type="password" name="password" value="<?php echo $password ?>" class="pass" placeholder="*******">
        </div>
        <button name="submit" class="loginbtn"><a>Login</a></button>
        <button class="batalbtn"><a href="index.html">Back</a></button>
    </form>
</body>

</html>