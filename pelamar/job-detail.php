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
                <?php foreach($db->detail_data("id", "jobs", $job_id) as $d){ ?>
                <div class="job-img">
                    <img src="assets/img/job.png" alt="" srcset="">
                </div>
                <div class="job-detail">
                    <h1><?php echo $d['title']; ?></h1>
                    <p><?php echo $d['description']; ?></p>
                    <p><strong>Alamat :</strong> <?php echo $d['alamat'] ;  echo ", kecamatan "; echo $d['kec'];echo " Kabupaten / Kota "; echo $d['kota']; echo " Provinsi "; echo $d['prov']; ?></p>
                    <p><strong>Gaji:</strong> <?php echo $d['gaji']; ?></p>
                    <a href="upload-cv.php" class="apply-btn">Ajukan lamaran pekerjaan</a>
                </div>
                <?php } ?>
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
