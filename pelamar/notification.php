<!DOCTYPE html>
<html lang="en">
<head>
<?php
session_start();
include '../database.php';
$db = new database();
if(!isset($_SESSION['status'])){
	header("location:../index.php?pesan=belumlogin");
}
 ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/sty.css">
    <title>Notifikasi - SMKerja</title>
</head>
<body>
<?php include 'nav.php'; ?>
    <article>
        <div class="form">
            <section class="notification-container">
                <h2>Notifikasi</h2><br>
                <div class="notification-item">
                    <h3>Proses Seleksi</h3>
                    <p>Lamaran Anda untuk posisi Data Analyst di Surabaya sedang dalam proses seleksi.</p>
                    <time>2024-05-28 09:15</time>
                </div>
                <div class="notification-item">
                    <h3>Lamaran Ditolak</h3>
                    <p>Maaf, lamaran Anda untuk posisi UI/UX Designer di Bandung tidak dapat kami terima.</p>
                    <time>2024-05-25 17:45</time>
                </div>
                <div class="notification-item">
                    <h3>Wawancara Dijadwalkan</h3>
                    <p>Wawancara Anda untuk posisi Marketing Manager di Yogyakarta dijadwalkan pada 2024-06-05.</p>
                    <time>2024-05-20 11:00</time>
                </div>
                <div class="notification-item">
                    <h3>Lamaran Diterima</h3>
                    <p>Selamat! Lamaran Anda untuk posisi Software Engineer di Jakarta telah diterima.</p>
                    <time>2024-05-20 08:30</time>
                </div>
                <div class="notification-item">
                    <h3>Akun Berhasil Dibuat</h3>
                    <p>Hii Regiana Hermawan. Selamat, akun anda berhasil dibuat. Selamat berkrir!!</p>
                    <time>2024-05-19 10:00</time>
                </div>
            </section>
    </div>
    </article>
    <?php include 'sidebar.php'; ?>
    <footer>
        <br>
        <strong>Copyright &copy; 2023-2024 <a href="#">Regii</a>.</strong>
         All rights reserved.
         <div class="footer-right">
            <b>Version</b> 0.0.1
         </div>

    </footer>

    
    
</body>
</html>