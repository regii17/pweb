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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Profil - SMKerja</title>
    <style>

    </style>
</head>
<body>
<?php include 'nav.php'; ?>
    <article>
    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "updateberhasil") {
            echo"<script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasi Ubah Data',
                text: 'Anda telah berhasil mengubah data.',
            });</script>
            ";
        }
    }
    ?>
        <div class="form">
            <section class="profile-container">
                <div class="profile-header">
                    <img src="assets/img/user.jpg" alt="Foto Profil">
                    <?php
                    $username = $_SESSION['username'];
                    foreach ($db->detail_data($username, "pelamar", "username") as $x) {
                    ?>
                    <div>
                        <h2><?php echo $x['nama']; ?></h2>
                        <p><?php echo $x['email']; ?></p>
                    </div>
                </div>
                <div class="profile-body">
                    <div>
                        <label>Nama Lengkap</label>
                        <p><?php echo $x['nama']; ?></p>
                    </div>
                    <div>
                        <label>Username</label>
                        <p><?php echo $x['username']; ?></p>
                    </div>
                    <div>
                        <label>Password</label>
                        <p><?php echo $x['password']; ?></p>
                    </div>
                    <div>
                        <label>Email</label>
                        <p><?php echo $x['email']; ?></p>
                    </div>
                    <div>
                        <label>Nomor Telepon</label>
                        <p><?php echo $x['notelp']; ?></p>
                    </div>
                    <div>
                        <label>Alamat</label>
                        <p><?php echo $x['alamat'] ;  echo ", kecamatan "; echo $x['kec'];echo " Kabupaten / Kota "; echo $x['kota']; echo " Provinsi "; echo $x['prov']; ?></p>
                    </div>
                    <div>
                        <label>Tanggal Lahir</label>
                        <p><?php echo $x['ttl']; ?></p>
                    </div>

                    <div>
                        <button type="button" onclick="showEditForm()">Edit Profil</button>
                    </div>
                </div>

                <form class="edit-profile-form" action="../proses.php" method="post">
                    <div>
                        <h5>Nama Lengkap</h5>
                        <input type="text" name="nama" value="<?php echo $x['nama']; ?>">
                    </div>
                    <div>
                        <h5>Username</h5>
                        <input type="text" name="uname" value="<?php echo $x['username']; ?>" disabled>
                        <input type="hidden" name="username" value="<?php echo $x['username']; ?>">
                    </div>
                    <div>
                        <h5>Password</h5>
                        <input type="password" name="password" value="<?php echo $x['password']; ?>">
                    </div>
                    <div>
                        <h5>Email</h5>
                        <input type="email" name="email" value="<?php echo $x['email']; ?>">
                    </div>
                    <div>
                        <h5>Nomor Telepon</h5>
                        <input type="tel" name="notelp" value="<?php echo $x['notelp']; ?>">
                    </div>
                    <div>
                        <h5>Tanggal Lahir</h5>
                        <input type="date" name="ttl" value="<?php echo $x['ttl']; ?>">
                    </div>
                    <h5>Provinsi</h5>
                    <select id="pelamar_provinsi" name="prov" onchange="updateCities('pelamar')">
                    <option value="<?php echo $x['prov']; ?>"><?php echo $x['prov']; ?></option>
                    </select>
                    <h5>Kota</h5>
                    <select id="pelamar_kota" name="kota" onchange="updateDistricts('pelamar')">
                    <option value="<?php echo $x['kota']; ?>"><?php echo $x['kota']; ?></option>
                    </select>
                    <h5>Kecamatan</h5>
                    <select id="pelamar_kecamatan" name="kec">
                    <option value="<?php echo $x['kec']; ?>"><?php echo $x['kec']; ?></option>
                    </select>
                    <div>
                        <h5>Alamat</h5>
                        <input type="text" name="alamat" value="<?php echo $x['alamat']; ?>">
                    </div>
                    <div>
                        <button type="submit" name="aksi" value="update_pelamar">Simpan Perubahan</button>
                        <button type="button" onclick="hideEditForm()">Batal</button>
                    </div>
                    <?php } ?>
                </form>
            </section>
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
