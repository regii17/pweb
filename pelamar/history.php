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
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Riwayat - SMKerja</title>
</head>
<body>
<?php include 'nav.php'; ?>
    <article>
        <div class="form">
            <section id="apply-history">
                <h2>History Melamar Pekerjaan</h2>
                <select id="sort-options" onchange="sortHistory()">
                    <option value="date">Urutkan berdasarkan tanggal</option>
                    <option value="status">Urutkan berdasarkan status</option>
                </select>
                <ul id="history-list">
                    <li>
                        <h3>Software Engineer - Jakarta</h3>
                        <p>Melamar pada: 2024-01-01</p>
                        <p>Status: Dalam proses</p>
                    </li>
                    <li>
                        <h3>Data Analyst - Surabaya</h3>
                        <p>Melamar pada: 2024-02-15</p>
                        <p>Status: Diterima</p>
                    </li>
                    <li>
                        <h3>UI/UX Designer - Bandung</h3>
                        <p>Melamar pada: 2024-03-20</p>
                        <p>Status: Ditolak</p>
                    </li>
                    <li>
                        <h3>Marketing Manager - Yogyakarta</h3>
                        <p>Melamar pada: 2024-04-05</p>
                        <p>Status: Dalam proses</p>
                    </li>
                </ul>
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
    <script src="assets/js/script.js"></script>

    
    
</body>
</html>