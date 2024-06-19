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
    <link rel="stylesheet" href="assets/css/ss.css">
    <title>SMKerja</title>
</head>
<body style = "height : 800px;">
<?php include 'nav.php'; ?>
    <article>
        <div class="form">
            <center>
                <h2>kirim Pekerjaan</h2><br>
                <hr>
            </center>
            <br>
            <div class="text">
                <b>
                    <p>nama pekerjaan       :</p>
                    <p>nama perusahaan      :</p>
                    <p>persyaratan          :</p>
                    <p>fasilitas            :</p>
                    <p>alamat perusahaan    :</p>
                    <p>gaji                 :</p>
                    <p>contac               :</p>
                </b>
            </div>
            <div class="input">
                <input type="text" name="" id=""><br>
                <input type="text"><br>
                <input type="text" name="" id=""><br>
                <input type="text" name="" id=""><br>
                <input type="text" name="" id=""><br>
                <input type="text" name="" id=""><br>
                <input type="text" name="" id=""><br>
            </div>
            <div class="btn">
                <button id="kirim">kirim</button>
                <button id="reset">reset</button>
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

    
    
</body>
</html>