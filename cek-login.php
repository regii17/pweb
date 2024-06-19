<?php
//session php
session_start();
//koneksi
include 'database.php';
$db = new database();


//tangkap data dari form
$username =$_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi, "SELECT * from pelamar where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

if ($cek > 0) {

	$data = mysqli_fetch_assoc($login);

	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:pelamar/");

} else if ($db->cek_login($username, $password) == "pemberi") {
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:pemberi/");
} else {
	header("location:login.php?pesan=gagal");
}
?>