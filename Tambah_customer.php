
<html lang="en">
<head>
<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	  <link rel="stylesheet" href="css1/bootstrap.css">
<title>Form Pemesanan</title>
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
<script language="JavaScript" type="text/javascript">
function jumlah() {
//var myForm = document.form1;
var bakso = 10000 * myForm.order1.value;
var nasgor = 15000 * myForm.order2.value;
var soto = 10000 * myForm.order3.value;
var sate = 5000 * myForm.order4.value;
var campur = 7000 * myForm.order5.value;
var tea = 7000 * myForm.order6.value;
var hasil = bakso+nasgor+soto+sate+campur+tea;
var jumlah = (bakso/10000)+(nasgor/15000)+(soto/10000)+(sate/5000)+(campur/7000)+(tea/7000);

myForm.totalbarang.value = jumlah;

if (hasil > 50000) {
    myForm.total.value = hasil;
    myForm.diskon.value = 20000;
    myForm.bayar.value = hasil - eval(myForm.diskon.value);
 } else {
    myForm.total.value = hasil;
    myForm.diskon.value = 0;
    document.myForm.bayar.value = hasil - eval(myForm.diskon.value);
 }
}
function resetForm(){
document.form1.reset();
}
</script>
<form name="myForm" method="post" action="simpanr.php">
<table border="0">	
<tr>
	<td> Username </td>
	<td> : </td>
	<td> <input type="text" name="nama" placeholder=" Username" required><br></td>
</tr>
<tr>
	<td> Alamat </td>
	<td> : </td>
	<td> <input type="text" name="alamat" placeholder=" Alamat" required></td>
</tr>
<tr>
	<td> Tanggal </td>
	<td> : </td>
	<td> <input type="date" name=" tgl" required ></td>
</tr>
</table>

<table border="2" cellspacing=0 cellpadding=5 >
<colgroup align="center">
<colgroup align="center">
<colgroup align="center">
<thead valign="middle">
<tr>
<th width="35"><font color="black" size="4">No</font>
<th width="200"><font color="black" size="4">Makanan/Minuman</font>
<th width="180"><font color="black" size="4">Harga Satuan</font>
<th width="100"><font color="black" size="4">Pesan</font>
</tr>
<tbody>
<tr>
<td>1<td>Ayam Goreng<td><input type="text" value="10000" disabled="true"/><td>
<input  type="text"  name="order1" placeholder="0" onChange="jumlah()"/>
</tr>
<tr>
<td>2<td>Nasi Goreng<td><input type="text" value="15000" disabled="true"/><td>
<input  type="text"  name="order2" value="0" onChange="jumlah()" />
</tr>
<tr>
<td>3<td>Pasta<td><input  type="text"   value="10000" disabled="true"/> <td>
<input  type="text"  name="order3" value="0" onChange="jumlah()"/>
</tr>
<tr>
<td>4<td>Es Teh<td><input  type="text"   value="5000" disabled="true"/>
<td><input  type="text"  name="order4" value="0" onChange="jumlah()" />
</tr>
<tr>
<td>5<td>Es Jeruk<td><input  type="text"   value="7000" disabled="true"/> <td>
<input  type="text"  name="order5" value="0" onChange="jumlah()"/>
</tr>
<tr>
<td>6<td>jus<td><input  type="text"   value="7000" disabled="true"/> <td>
<input  type="text"  name="order6" value="0" onChange="jumlah()"/>
</tr>
<tr>
<td colspan=3 align="right">Jumlah Total<td><input type="text"  id="total" name="total" value="" />
</tr>
<tr>
<td colspan=3 align="right">Jumlah Total Barang<td><input type="text"  id="totalbarang" name="totalbarang" value="" />
</tr>
</table>
<br/>
<input type="button" value="CANCEL" onClick="resetForm()" />
<input type="submit" value="PESAN" />
</form>

<div>
</body>
</html> 