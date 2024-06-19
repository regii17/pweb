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
    <title>Profil - SMKerja</title>
</head>
<body>
<?php include 'nav.php'; ?>
    <article>
            <section class="help-container">
                <div class="help-header">
                    <h2>Help desk</h2>
                </div>
                <div class="chat-box">
                    <div class="chat-message user">
                        <p>Halo, saya butuh bantuan mengenai aplikasi ini.</p>
                    </div>
                    <div class="chat-message cs">
                        <p>Selamat datang! Ada yang bisa kami bantu?</p>
                    </div>
                </div>
                <div class="chat-input">
                    <input type="text" placeholder="Tulis pesan...">
                    <button type="button">Kirim</button>
                </div>
            </section>
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