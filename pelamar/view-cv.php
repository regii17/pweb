<?php
session_start();
include '../database.php';
$db = new database();
if(!isset($_SESSION['status'])){
    header("location:../index.php?pesan=belumlogin");
}

$welcome = isset($_GET['pesan']) && $_GET['pesan'] === 'welcome';
$edit = isset($_GET['pesan']) && $_GET['pesan'] === 'edit';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/sty.css">
    <title>Share CV - SMKerja</title>
</head>
<body>
<?php include 'nav.php'; ?>
    <article style="margin-right: 120px;">
        <div class="form">
            <?php if ($welcome): ?>
                <center><h2>Selamat Datang Di SMKerja</h2></center>
            <?php endif; ?>
            <h2>CV Anda</h2>
            <br>
            <p>Bagikan CV (Curriculum vitae) atau daftar riwayat hidup anda agar perusahaan dapat mengenali potensi diri anda dan dapat bekerjasama untuk merekrut anda sebagai karyawan mereka.</p>
            <br>
            <p>Daftar riwayat hidup atau CV adalah dokumen yang memberi informasi tentang kualifikasi seorang pencari kerja. Informasi yang disebutkan dalam sebuah daftar riwayat hidup mencakup data pribadi, latar belakang pendidikan, prestasi, keterampilan, pengalaman profesional, dan lain-lain.</p>
            <br>
            <strong><i><label>Contoh sebuah CV :</label></i></strong>
            <br><br>
            <img src="assets/img/cv.jpeg" alt="">
            <form action="upload-cv.php" method="post" enctype="multipart/form-data">
                <br><br>
            <?php if ($welcome): ?>
                <input type="file" id="cv" name="cv" required>
                <button type="button" id="back" class="apply-btn" onclick="window.location.href='home.php?pesan=succesUpcv'">Submit</button>
                <button type="button" id="edit" class="apply-btn" onclick="window.location.href='home.php'">Lewati</button>
            <?php endif;
            if ($edit): ?>
                <input type="file" id="cv" name="cv" style="display:none;" accept="application/pdf" required>
                <button type="button" id="back" class="apply-btn" onclick="window.location.href='profile.php'">Kembali</button>
                <button type="button" id="edit" class="apply-btn" onclick="showFileInput()">Edit CV</button>
                <button type="button" id="reset" class="apply-btn" onclick="hideFileInput()" style="display:none;">Batal</button>
                <button type="submit" class="apply-btn" id="submitBtn" style="display:none;">Submit</button>
            <?php endif; ?>
            </form>
        </div>
    </article>

    <footer style="width: 100%;">
        <br>
        <strong>Copyright &copy; 2023-2024 <a href="#">Regii</a>.</strong>
         All rights reserved.
         <div class="footer-right">
            <b>Version</b> 0.0.1
         </div>
    </footer>
    <script>
        function showFileInput() {
            document.getElementById('cv').style.display = 'block';
            document.getElementById('submitBtn').style.display = 'block';
            document.getElementById('back').style.display = 'none';
            document.getElementById('reset').style.display = 'block';
            document.getElementById('edit').style.display = 'none';
        }
        function hideFileInput() {
            document.getElementById('cv').style.display = 'none';
            document.getElementById('submitBtn').style.display = 'none';
            document.getElementById('back').style.display = 'block';
            document.getElementById('reset').style.display = 'none';
            document.getElementById('edit').style.display = 'block';
        }
    </script>
</body>
</html>
