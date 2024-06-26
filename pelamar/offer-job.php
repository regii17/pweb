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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Tawaran Pekerjaan - SMKerja</title>
</head>
<body>
<?php include 'nav.php'; ?>
    <article>
        <div class="form">
            <h1 style="margin-left: 250px;">Tawaran Pekerjaan Kepada Anda</h1>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Perusahaan</th>
                        <th>Alamat Perusahaan</th>
                        <th>Gaji</th>
                        <th>Tanggal</th>
                        <th colspan="2">Tindakan</th>
                    </tr>
                </thead>
                <tbody id="jobOffers">
                    <tr>
                        <td>1</td>
                        <td>PT.Mencari cinta sejati</td>
                        <td>Jl.Harimau Desa Macan Kecamatan Banguntapan Kab/Kota Bantul - DIY</td>
                        <td>4.200.000</td>
                        <td>16 - 2 - 2024</td>
                        <td><button class="contact">Contact</button></td>
                        <td><button class="delete">Hapus</button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>PT.Maju Terus</td>
                        <td>Jl.Sadboy Desa Kucing Kecamatan Biru Kab/Kota Bandung - Jawa Barat</td>
                        <td>3.100.000</td>
                        <td>12 - 4 - 2023</td>
                        <td><button class="contact">Contact</button></td>
                        <td><button class="delete">Hapus</button></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>PT.Dua Abadi</td>
                        <td>Jl.Genteng Desa Boom Kecamatan Mie Kab/Kota Subang - Jawa Barat</td>
                        <td>4.850.000</td>
                        <td>3 - 1 - 2024</td>
                        <td><button class="contact">Contact</button></td>
                        <td><button class="delete">Hapus</button></td>
                    </tr>
                </tbody>
            </table>
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