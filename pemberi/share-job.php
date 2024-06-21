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
    <style>

.form-container {
    margin-top : 1000px;
    max-width: 90%;
    margin: 0 auto;
    background-color: white;
    padding: 20px;
}

form {
    display: flex;
    flex-direction: column;
}

.form-group {
    margin-bottom: 15px;
    width: 80%;
    margin-left: 90px;
}

.form-group label {
    font-weight: bold;
    margin-bottom: 5px;
    display: block;
}

.form-group input {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.btn-group {
    display: flex;
    justify-content: space-between;
}

.btn-group button {
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

.btn-group #kirim {
    background-color: #4CAF50;
    color: white;
}

.btn-group #reset {
    background-color: #f44336;
    color: white;
}

    </style>
</head>
<body>
<?php include 'nav.php'; ?>
    <article>
        <div class="form">
        <div class="form-container">
            <center>
                <br>
                <h2>Kirim Pekerjaan</h2><br>
                <hr>
            </center>
            <br>
            <form action="../proses.php?aksi=add_job" method = "post">
                <div class="form-group">
                    <label for="nama-pekerjan">Nama Pekerjaan:</label>
                    <input type="text" id="nama-pekerjaan" name="nama-pekerjaan" required>
                </div>
                <div class="form-group">
                    <label for="jenis-pekerjaan">Jenis Pekerjaan:</label>
                    <select id="jenis-pekerjaan" name="jenis-pekerjaan">
                    <?php foreach($db->tampil_data("jobs","id") as $d){
                            ?>
                        <option value="<?php echo $d['id']; ?>"><?php echo $d['title']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama-perusahaan">Nama Perusahaan:</label>
                    <input type="text" id="nama-perusahaan" name="nama-perusahaan" required>
                </div>
                <div class="form-group">
                    <label for="persyaratan">Persyaratan:</label>
                    <textarea name="persyaratan" cols="99" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label for="fasilitas">Fasilitas:</label>
                    <textarea name="fasilitas" cols="99" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label for="alamat-text">Alamat Perusahaan:</label>
                    <h5>Provinsi</h5>
                <select id="perusahaan_provinsi" name="perusahaan_provinsi" onchange="updateCities('perusahaan')">
                <option value="">Pilih Provinsi...</option>
                </select>
                <h5>Kota</h5>
                <select id="perusahaan_kota" name="perusahaan_kota" onchange="updateDistricts('perusahaan')">
                <option value="">Pilih Kota...</option>
                </select>
                <h5>Kecamatan</h5>
                <select id="perusahaan_kecamatan" name="perusahaan_kecamatan">
                <option value="">Pilih Kecamatan...</option>
                </select>
                        <h5>Alamat spesifik</h5>
                            <input type="text" name="alamat-perusahaan" placeholder="Jalan...">
                </div>
                <div class="form-group">
                    <label for="gaji">Gaji:</label>
                    <input type="text" id="gaji" name="gaji" required>
                </div>
                <div class="form-group">
                    <label for="kontak-perusahaan">Kontak:</label>
                    <input type="text" id="kontak-perusahaan" name="kontak-perusahaan" required>
                </div>
                <div class="btn-group">
                    <button type="submit" id="kirim">Kirim</button>
                    <button type="reset" id="reset">Reset</button>
                </div>
            </form>
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
    <script src="assets/js/sc.js"></script>

</body>
</html>
