<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'database.php';?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMKerja - Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="assets/css/str.css">
</head>
<body>
    <div class="container">
        <div class="form">
            <h1>REGISTER</h1>
            <div class="role-selection">
                <label>
                    <input type="radio" name="role" value="pelamar" onclick="switchForm('pelamar')" checked> Pelamar
                </label>
                <label>
                    <input type="radio" name="role" value="pemberi" onclick="switchForm('pemberi')"> Pemberi
                </label>
            </div>

            <form id="pelamarForm" style="display: block;" action="proses.php?aksi=pelamarregister" method="post">
                <h5>Nama Lengkap</h5>
                <input type="text" name="pelamar_nama" placeholder="Nama">
                <h5>Username</h5>
                <input type="text" name="pelamar_username" placeholder="Username">
                <h5>Password</h5>
                <input type="password" name="pelamar_password" placeholder="Password">
                <h5>Email</h5>
                <input type="email" name="pelamar_email" placeholder="Email">
                <h5>Nomor Telpon</h5>
                <input type="tel" name="pelamar_notelp" placeholder="Nomor Telpon">
                <h5>Tanggal Lahir</h5>
                <input type="date" name="pelamar_ttl">
                <h5>Provinsi</h5>
                <select id="pelamar_provinsi" name="pelamar_provinsi" onchange="updateCities('pelamar')">
                <option value="">Pilih Provinsi...</option>
                </select>
                <h5>Kota</h5>
                <select id="pelamar_kota" name="pelamar_kota" onchange="updateDistricts('pelamar')">
                <option value="">Pilih Kota...</option>
                </select>
                <h5>Kecamatan</h5>
                <select id="pelamar_kecamatan" name="pelamar_kecamatan">
                <option value="">Pilih Kecamatan...</option>
                </select>
                <h5>Alamat spesifik</h5>
                <input type="text" name="pelamar_alamat" placeholder="Jalan..">
                <h5>Foto Profil</h5>
                <input type="file" name="pelamar_foto" accept="image/*">

                <button type = "submit">REGISTER</button>
            </form>

            <form id="pemberiForm" style="display: none;">
                <h5>Nama Lengkap</h5>
                <input type="text" name="pemberi_nama" placeholder="Nama">
                <h5>Username</h5>
                <input type="text" name="pemberi_username" placeholder="Username">
                <h5>Password</h5>
                <input type="password" name="pemberi_password" placeholder="Password">
                <h5>Email</h5>
                <input type="email" name="pemberi_email" placeholder="Email">
                <h5>Provinsi</h5>
                <select id="pemberi_provinsi" onchange="updateCities('pemberi')">
                <option value="">Pilih Provinsi...</option>
                </select>
                <h5>Kota</h5>
                <select id="pemberi_kota" onchange="updateDistricts('pemberi')">
                <option value="">Pilih Kota...</option>
                </select>
                <h5>Kecamatan</h5>
                <select id="pemberi_kecamatan">
                <option value="">Pilih Kecamatan...</option>
                </select>
                <h5>Alamat spesifik</h5>
                <input type="text" name="pemberi_alamat" placeholder="Jalan...">
                <h5>Asal Perusahaan</h5>
                <input type="text" name="pemberi_perusahaan" placeholder="Asal Perusahaan">
                <button type = "submit">REGISTER</button>
            </form>

            
        </div>
        <h3>Sudah memiliki akun? <a href="login.php">Login</a></h3>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assets/js/2.js"></script>
</body>
</html>
