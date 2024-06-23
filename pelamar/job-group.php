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
    <title>Daftar Pekerjaan - SMKerja</title>
    <style>
        p{
            text-align: left;
        }
        </style>
</head>
<body>
<?php include 'nav.php'; ?>
    <article>
        <div class="form">
            <div class="search_box">
            <form action="find-job.php" method="get">
                <input type="text" name="cari" class="search" placeholder="Cari Pekerjaan">
                <button class="search_btn" type="submit">
                    <img class="search_img" src="assets/img/search.png" alt="">
                </button>
            </form>
            </div>
            <br><br><br>
            <div class="job" id="jobContainer">
            <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                
                foreach($db->detail_data("jenis_pekerjaan","jobs_f", $id) as $d){
            ?>
                    <div class="kotak">
                    <h2><?php echo $d['nama_pekerjaan']; ?></h2>
                    
                    <p>Nama perusahaan : <?php echo $d['nama_perusahaan']; ?></p>
                    <p>Gaji &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; :<?php echo $d['gaji']; ?></p><br>
                    <p>Alamat : <br><?php echo $d['alamat_perusahaan'] ;  echo ", kecamatan "; echo $d['kec_perusahaan'];echo " Kabupaten / Kota "; echo $d['kota_perusahaan']; echo " Provinsi "; echo $d['prov_perusahaan']; ?></p>
                    <div class="bawah">
                        <a href="job-detail.php?id=<?php echo $d['id']; ?>">View Details</a>
                    </div>
                    </div>

                    <?php }} ?>
                </div>
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
    <script src="assets/js/scr.js"></script>
</body>
</html>
