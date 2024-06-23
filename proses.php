<?php 
require_once 'database.php';
$db = new Database();
if ($db->koneksi->connect_error) {
    die("Connection failed: " . $db->koneksi->connect_error);
}
if(!isset($_POST['aksi'])){
	$aksi = $_GET['aksi'];
	if(isset($_GET['table'])){
		$hal=$_GET['table'];	
	}
}else{
	$aksi = $_POST['aksi'];
} 
    if($aksi == "update_pelamar"){
        $db->update_pelamar(
            $_POST['username'],
            $_POST['nama'],
            $_POST['password'],
            $_POST['email'],
            $_POST['notelp'],
            $_POST['ttl'],
            $_POST['prov'],
            $_POST['kota'],
            $_POST['kec'],
            $_POST['alamat']);
            header("location:pelamar/profile.php?pesan=updateberhasil");
    }
    else if($aksi == "pelamarregister"){
        $db->input_pelamar(
            $_POST['pelamar_username'],
            $_POST['pelamar_nama'],
            $_POST['pelamar_password'],
            $_POST['pelamar_email'],
            $_POST['pelamar_notelp'],
            $_POST['pelamar_ttl'],
            $_POST['pelamar_provisi'],
            $_POST['pelamar_kota'],
            $_POST['pelamar_kecamatan'],
            $_POST['pelamar_alamat']
        );
        header("location:login.php?pesan=berhasilregister");
    }
    else if($aksi == "pemberiregister"){
        $db->input_pemberi(
            $_POST['pemberi_username'],
            $_POST['pemberi_password'],
            $_POST['pemberi_nama'],
            $_POST['pemberi_provisi'],
            $_POST['pemberi_kota'],
            $_POST['pemberi_kecamatan'],
            $_POST['pemberi_alamat'],
            $_POST['pemberi_perusahaan'],
            $_POST['pemberi_email']
        );
        header("location:login.php?pesan=berhasilregister");
    }
    else if($aksi == "update_pemberi"){
        $db->update_pemberi(
            $_POST['username'],
            $_POST['nama'],
            $_POST['password'],
            $_POST['email'],
            $_POST['perusahaan'],
            $_POST['ttl'],
            $_POST['prov'],
            $_POST['kota'],
            $_POST['kec'],
            $_POST['alamat']);
            header("location:pemberi/profile.php?pesan=updateberhasil");
    }
    else if($aksi == "add_job"){
        $db->input_job(
            $_POST['nama-pekerjaan'],
            $_POST['jenis-pekerjaan'],
            $_POST['nama-perusahaan'],
            $_POST['persyaratan'],
            $_POST['fasilitas'],
            $_POST['perusahaan_provisi'],
            $_POST['perusahaan_kota'],
            $_POST['perusahaan_kecamatan'],
            $_POST['alamat-perusahaan'],
            $_POST['gaji'],
            $_POST['kontak-perusahaan'],
        );
        header("location:pemberi/share-job.php?pesan=success");
    }




