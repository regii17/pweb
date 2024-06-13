<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/stylelogin.css">
    <title>SMKerja - Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<?php

if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "logout") {
        echo"<script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasi logout',
            text: 'Anda telah berhasil logout dari sistem.',
        });</script>
        ";
    } else if ($_GET['pesan'] == "gagal") {
        echo"<script>
        Swal.fire({
            icon: 'error',
            title: 'Password atau username salah',
            text: 'Silakan coba lagi dengan username dan password yang benar.',
        });</script>
        ";
    } else if ($_GET['pesan'] == "belumlogin") {
        echo '<div class="alert alert-warning alert-dismissible">
        <a href="index.php"><button type="button" class="close">×</button></a>
        <h5><i class="icon fas fa-exclamation-triangle"></i> Gagal!</h5>
        Anda harus login terlebih dahulu!
        </div>';
    }
}
?>
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <div class="container">
        <a href="index.php">
        <img src="assets/img/back.png" alt="" srcset="" id = "back">
        </a>
        <div class="login">
            <div class="col kotak1">
                <img src="assets/img/logo.webp" alt="">
            </div>
            <form action="cek-login.php" method="post">
            <div class="col kotak2">
                <div class="form">
                    <h1>LOGIN</h1>
                    <h5>Username</h5>
                    <input type="text" name="username" placeholder="Username">
                    <h5>Password</h5>
                    <input type="password" name="password" placeholder="Password">
                    <button onclick = "handleLogin(event)" name="btn" type="submit">LOGIN</button>
                </div>
            </div>
            </form>
        </div>
        <h3>Belum memiliki akun? <a href="register.php">Register</a></h3>
    </div>
</body>
<script src="assets/js/2.js"></script>
</html>
