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
</head>
<body>
<?php include 'nav.php'; ?>
    <article >
    <div class="form" style="height: 90%;">
            <div class="search_box">
            <form action="find-seeker.php" method="get">
                <input type="text" name = "cari" class="search" placeholder="Cari Pelamar Pekerjaan">
                <button class="search_btn" type = "submit">
                    <img class="search_img" src="assets/img/search.png" alt="">
                </button>
            </form>
            </div>
            <br><br><br>
            <div class="job" id="jobContainer">
            <?php
                if(isset($_GET['cari'])){
                    $cari = $_GET['cari'];
                    $hasil = $db->cari_job($cari);
                    if (empty($hasil)) {
                        echo "<i><h4>Pencarian tidak ditemukan.</h4></i>";
                    } else {
                        foreach($hasil as $d){
                        ?>
                    <div class="kotak">
                    <h2><?php echo $d['title']; ?></h2>
                    <p><?php echo $d['description']; ?></p>
                    <div class="bawah">
                        <a href="job-detail.php?id=<?php echo $d['id']; ?>">View Details</a>
                    </div>
                </div>
                <?php
                    }};        
                }else{
                    foreach($db->tampil_data("jobs","id") as $d){
                        ?>
                    <div class="kotak">
                    <h2><?php echo $d['title']; ?></h2>
                    <p><?php echo $d['description']; ?></p>
                    <div class="bawah">
                        <a href="job-detail.php?id=<?php echo $d['id']; ?>">View Details</a>
                    </div>
                </div>
                <?php
                    };
                }
            ?>

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
         <?php include 'nav.php'; ?>
    </footer>

    
    
</body>
</html>