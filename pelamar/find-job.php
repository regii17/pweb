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
    <title>Daftar Pekerjaan - SMKerja</title>
</head>
<body>
<?php include 'nav.php'; ?>
    <article>
        <div class="form" style="height: 90%;">
            <div class="search_box">
                <input type="text" class="search" placeholder="Cari Pekerjaan" onkeyup="searchJobs()">
                <button class="search_btn">
                    <img class="search_img" src="assets/img/search.png" alt="">
                </button>
            </div>
            <br><br><br>
            <div class="job" id="jobContainer">
            </div>
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
