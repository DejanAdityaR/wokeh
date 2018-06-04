<?php

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "restoran";

$db = new mysqli ($servername, $username, $password, $databasename);

if($db->connect_error){
	die("koneksi gagal : " .$db->connect_error);
}

$id = $_GET['nama_customer'];

$sql = "DELETE FROM customer WHERE nama_customer='$nama'";

if($db->query($sql)){
			echo "Data customer berhasil dihapus";
		}
		else {
			echo "Data customer tidak berhasil dihapus karena : " .$db->error;
		}

echo "<a href = 'Tampil_customer.php'>Daftar_customer</a>";

?>