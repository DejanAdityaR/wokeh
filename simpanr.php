<?php

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "restoran";

$db = new mysqli ($servername, $username, $password, $databasename);

if($db->connect_error){
	die("koneksi gagal : " .$db->connect_error);
}

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tgl = $_POST['tgl'];
$order1 = $_POST['order1'];
$order2 = $_POST['order2'];
$order3 = $_POST['order3'];
$order4 = $_POST['order4'];
$order5 = $_POST['order5'];	
$order6 = $_POST['order6'];
$bayar = $_POST['total'];
$sql = "INSERT INTO customer(nama_customer,alamat,tgl,ayam_goreng,nasi_goreng,pasta,es_teh,es_jeruk,jus,total_bayar) VALUES ('$nama','$alamat','$tgl','$order1','$order2','$order3','$order4','$order5','$order6','$bayar')";

		if($db->query($sql)){
			echo "Data customer berhasil ditambahkan";
		}
		else {
			echo "Data customer tidak berhasil ditambahkan karena : " .$db->error;
		}

 require_once("Tampil_customer.php");
?>