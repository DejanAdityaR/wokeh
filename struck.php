<html>
<head>
  <link href ="struk.css" rel = "stylesheet" type="text/css" media = "all" />
	<script type="text/javascript">
		
	</script>
</head>
<body>
<center>
	 <div class="container">
		<h1> BILL PEMBAYARAN </h1>
		<h2> ==================== </h2>	

<?php
$tgl_skrg = date("d-m-Y");

$host = "localhost";
$username = "root";
$password = "";
$databasename = "restoran";

$db = new mysqli($host, $username, $password , $databasename);


if($db->connect_error){
  die("Koneksi Gagal Karena : ". $db->connect_error);
}else {

$nama_customer = $_GET['nama_customer'];

$sql = "select * from customer where nama_customer = '$nama_customer' ";
$data = $db->query($sql);
echo "<table border='0'>";

if ($data->num_rows > 0){
	while ($row = $data->fetch_assoc()) {
		echo "<tr>";
		echo "<td>TANGGAL </td>";
		echo "<td> : </td>";
		echo "<td> $tgl_skrg </td>";
		echo "</tr>";
		echo "<td></td>";
		echo "<tr>";
		echo "<td> NAMA PEMESAN </td>";
		echo "<td> : </td>";
		echo "<td>".$row['nama_customer']."</td>";
		echo "</tr>";
		echo "<td></td>";
		echo "<tr>";
		echo "<td> AYAM GORENG </td>";
		echo "<td> : </td>";
		echo "<td>".$row['ayam_goreng']*10000;
		echo "</td>";
		echo "<td>".$row['ayam_goreng']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> NASI GORENG </td>";
		echo "<td> : </td>";
		echo "<td>".$row['nasi_goreng']*15000;
		echo "</td>";
		echo "<td>".$row['nasi_goreng']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> PASTA </td>";
		echo "<td> : </td>";
		echo "<td>".$row['pasta']*10000;
		echo "</td>";
		echo "<td>".$row['pasta']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> ES TEH </td>";
		echo "<td> : </td>";
		echo "<td>".$row['es_teh']*5000;
		echo "</td>";
		echo "<td>".$row['es_teh']."</td>";
		echo "</tr>";

		echo "<tr>";
		echo "<td> ES JERUK </td>";
		echo "<td> : </td>";
		echo "<td>".$row['es_jeruk']*7000;
		echo "</td>";
		echo "<td>".$row['es_jeruk']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> JUS </td>";
		echo "<td> : </td>";
		echo "<td>".$row['jus']*7000;
		echo "</td>";
		echo "<td>".$row['jus']."</td>";
		echo "</tr>";

		echo "<tr>";
		echo "<td><b> TOTAL HARGA </td>";
		echo "<td><b> : </td>";
		echo "<td></td>";
		echo "<td><b>".$row['total_bayar'];
		echo "</td>";
		echo "</tr>";
		echo "</table>";

	}	
}else{
	echo"Tidak dapat di cetak";
}


}
$db->close();
?>
</div>
<h3><a href="#" onclick="window.print()"> Print </a> </h3>	
</center>
</body>
</html>