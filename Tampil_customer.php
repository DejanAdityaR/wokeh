<html>
<head>

  <style>
    body{
     font-family: 'Courier New';
    }
    table{
      border-radius: 5px;
      border: #ccc 1px solid;
      background-color: #eaebec;

    }
    table td {
    padding: 10px 10px;
    border-top: 1px solid #ffffff;
    border-bottom: 1px solid #e0e0e0;
    border-left: 1px solid #e0e0e0;
    background: #fafafa;
    background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
    background: -moz-linear-gradient(top, #fbfbfb, #fafafa);
}
    a{

      text-decoration: none;
    }
  </style>
  <link rel="stylesheet" href="css1/bootstrap.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
 
</head>
<body>
<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-8">
						<div class="contactinfo">
							<div class="col-sm-4">
								<div class="logo pull-left">
									<a href="index.html"><img width="70" height="80" src="images/home/logo4.png" alt="" /></a>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div><!--/header_top-->
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.html" class="active">Home</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
		<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<img width="400" height="500" src="images/home/logo4.png" class="girl img-responsive" alt="" />
								</div>
								<div class="col-sm-6">
									<h1>Food n Drink</h1>
									<h2>Restoran Online</h2>
									<p>Terdapat Berbagai Macam Menu Makanan maupun Minuman</p>
								</div>
								
							</div>		
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
 <div class="container">
<center>

<h1>Daftar Pesanan </h1>

<form action="" method="POST">
<input type="date" name="tglawal">
<input type="date" name="tglakhir">
<input type="submit" id="submit" name="submit2" value="Cari">
<input type="submit" id="submit" name="submit1" value="Reset">

<input type="text" name="nama" value="nama customer">
<input type="submit" id="submit" name="submit3" value="Cari">

<input type="text" name="alamat" value="alamat">
<input type="submit" id="submit" name="submit4" value="Cari">
</form>
<table>
<?php
// membuat koneksi
$host = "localhost";
$username = "root";
$password = "";
$db_name = "restoran";

$konek = new mysqli($host, $username, $password, $db_name);

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$sql = "SELECT * FROM customer";

if(isset($_POST['qcari'])){
  $qcari=$_POST['qcari'];
  $sql="SELECT * FROM  customer where nama_customer like '%$qcari%' or tgl like '%$qcari' or alamat like '%$qcari' ";
}
if(isset($_POST['qcari1'])){
  $qcari1=$_POST['qcari1'];
  $sql="SELECT * FROM  customer where tgl like '%$qcari%' or nama_customer like '%$qcari' or alamat like '%$qcari' ";
}
if(isset($_POST['qcari2'])){
  $qcari2=$_POST['qcari2'];
  $sql="SELECT * FROM  customer where nama_customer like '%$qcari%' or alamat like '%$qcari' or tgl like '%$qcari' ";
}

if(isset($_POST['submit2'])){
  $qcari=$_POST['tglawal'];
  $qcari2=$_POST['tglakhir'];
  $sql="SELECT * FROM  customer where tgl between '$qcari' and '$qcari2'";
}

if(isset($_POST['submit3'])){
  $qcari1=$_POST['nama'];
  $sql="SELECT * FROM  customer where nama_customer like '%$qcari1%'";
}

if(isset($_POST['submit4'])){
  $qcari2=$_POST['alamat'];
  $sql="SELECT * FROM  customer where alamat like '%$qcari2%'";
}

if(isset($_POST['submit1'])){
  
  $sql="SELECT * FROM  customer ";
}
$data = $konek->query($sql);

//echo "<a href='index.php'>Kembali ke Menu</a>";
//echo "<h1>Daftar Pesanan</h1>";
//echo "<table>";
//echo "<table border-radius='1'>";
//echo "<table allign='center'>";
echo "<tr><td>no</td>.<td>Nama Customer</td><td>Alamat</td></td><td>Tanggal</td><td>Ayam Goreng</td><td>Nasi Goreng</td><td>Pasta</td><td>Es Teh</td><td>Es Jeruk</td><td>Jus</td><td>Total Bayar</td></tr>";

if ($data->num_rows > 0){
  $no = 1;
  while ($row = $data->fetch_assoc()) {
echo "<tr>";
		echo "<td>".$no++."</td>";
		echo "<td>".$row['nama_customer']."</td>";
		echo "<td>".$row['alamat']."</td>";
		echo "<td>".$row['tgl']."</td>";
		echo "<td>".$row['ayam_goreng']."</td>";
		echo "<td>".$row['nasi_goreng']."</td>";
		echo "<td>".$row['pasta']."</td>";
		echo "<td>".$row['es_teh']."</td>";
		echo "<td>".$row['es_jeruk']."</td>";
		echo "<td>".$row['jus']."</td>";
		echo "<td>".$row['total_bayar']."</td>";
		//echo "<td>".$row['Total']."</td>";
		echo "<td><a href='struck.php?nama_customer=".$row['nama_customer']."'>Cetak</a></td>";
	//	echo "<td><a href='Hapus_data.php?nama_customer=".$row['nama_customer']."'>hapus</a></td>";
		echo "</tr>";
  }
}else{
  echo "Data Kosong!";
}
//echo "</table>";

$konek->close();
?>
</table></center>
</div>
</body>
</html>