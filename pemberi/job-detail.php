<?php
session_start();
include '../database.php';
$db = new database();
if(!isset($_SESSION['status'])){
    header("location:../index.php?pesan=belumlogin");
}

if(isset($_GET['id'])){
    $job_id = $_GET['id'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/sty.css">
    <title>Detail Pekerjaan - SMKerja</title>
</head>
<body>
<?php include 'nav.php'; ?>
    <article>
        <div class="form" style="height: 500px;">
                //pekerjaan
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
    <script src="assets/js/scr.js"></script>
</body>
</html>
