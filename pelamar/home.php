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
    <link rel="stylesheet" href="assets/css/style1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Home - SMKerja</title>
</head>
<body style = "height : 550px">
<?php include 'nav.php'; ?>
    <article>
    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "succesUpcv") {
            echo"<script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil Menyimpan CV',
                text: 'Anda telah berhasil menyimpan CV anda.',
            });</script>
            ";
        }
    }
    ?>
        <div class="form">
                <div class="kotak" id="khome">
                    <center>
                        <h2>JUDUL PEKERJAAN</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor eos saepe perspiciatis deserunt fugiat similique minus molestiae suscipit beatae odit,</p>
                    </center>
                    <div class="bawah">
                        <center><p>Learn more</p></center>
                    </div>
                </div><br><br>  
                <div class="kotak" id="khome" style="margin-top: -28px;">
                    <center>
                        <h2>JUDUL PEKERJAAN</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor eos saepe perspiciatis deserunt fugiat similique minus molestiae suscipit beatae odit,</p>
                    </center>
                    <div class="bawah">
                        <center><p>Learn more</p></center>
                    </div>
                </div><br><br>
                <div class="kotak" id="khome" style="margin-top: -65px;">
                    <center>
                        <h2>JUDUL PEKERJAAN </h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor eos saepe perspiciatis deserunt fugiat similique minus molestiae suscipit beatae odit,</p>
                    </center>
                    <div class="bawah">
                        <center><p>Learn more</p></center>
                    </div>
                </div>

        </div>
    </article>
    <?php include 'sidebar.php'; ?>
    <footer>
        <br>
        <strong>Copyright &copy; 2023-2024 <a href="#">Regii AND Udin</a>.</strong>
         All rights reserved.
         <div class="footer-right">
            <b>Version</b> 0.0.1
         </div>
    </footer>
    <script src="assets/js/script.js"></script>  
</body>
</html>