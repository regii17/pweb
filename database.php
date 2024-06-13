<?php
$host = "localhost";
$uname = "root";
$pass = "";
$db = "db_skerja";

$koneksi = mysqli_connect("localhost", "root", "", "db_smkerja");

class Database
{
	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "db_smkerja";
	var $koneksi = "";

    function __construct()
	{
		$this->koneksi = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);

		if (mysqli_connect_errno()) {
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}

    function cek_login($username, $pass)
	{
		$return = false;


		$data = mysqli_query($this->koneksi, "SELECT * from pemberi where username='$username' and password='$pass'");
		if (mysqli_num_rows($data) > 0) {
			$jenis = "pemberi";

		}
		return $jenis;

	}
	function tampil_data($x, $y){
		$data = mysqli_query($this->koneksi, "SELECT * from $x order by $y desc ");
		while ($d = mysqli_fetch_array($data)) {
			$hasil[] = $d;
		}

		return $hasil;
	}
	function update_pelamar($username, $nama, $password, $email, $notelp, $ttl, $prov, $kota, $kec, $alamat ){
		mysqli_query($this->koneksi, "UPDATE pelamar SET username='$username', password='$password', nama='$nama', email='$email', notelp='$notelp', prov='$prov', kota='$kota', kec='$kec', alamat='$alamat', ttl='$ttl' WHERE username='$username'");
	}
	function input_pelamar($username, $nama, $password, $email, $notelp, $ttl, $prov, $kota, $kec, $alamat ){
		mysqli_query($this->koneksi, "INSERT INTO pelamar VALUES ('$username', '$password', '$nama', '$email', '$notelp', '$prov', '$kota', '$kec', '$alamat', '$ttl')");
	}
	function detail_data($id ,$table, $pk){
		$data = mysqli_query($this->koneksi, "SELECT * from $table where $pk='$id'");
		while ($d = mysqli_fetch_array($data)) {
			$hasil[] = $d;
		}
	}

}
?>