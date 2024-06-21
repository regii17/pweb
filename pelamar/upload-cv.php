<?php
session_start();
include '../database.php';
$db = new database();
if(!isset($_SESSION['status'])){
    header("location:../index.php?pesan=belumlogin");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/sty.css">
    <title>Upload CV - SMKerja</title>
</head>
<body>
<?php include 'nav.php'; ?>
    <article>
        <div class="form">
            <h2>Upload CV</h2>
            <form>
                <br><br>
                <input type="file">
                <a href="upload-cv.php" class="apply-btn">Kirim</a>
            </form>
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
