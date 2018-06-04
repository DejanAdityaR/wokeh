<?php

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "restoran";

$db = new mysqli ($servername, $username, $password, $databasename);

if($db->connect_error){
	die("koneksi gagal : " .$db->connect_error);
}

$sql = "create table customer(
	nama_customer varchar(50),
	alamat varchar(100),
	tgl varchar(50),
	ayam_goreng varchar(10),
	nasi_goreng varchar(10),
	pasta varchar(10),
	es_teh varchar(10),
	es_jeruk varchar(10),
	jus varchar(10),
	total_bayar varchar(100))";

	if($db->query($sql) == true){
		echo "table berhasil dibuat ";
	}else{
		echo "tabel gagal dibuat : ". $db->error;
	}

?>