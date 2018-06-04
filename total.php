<?php
//harga
$ayamgoreng = 8000;
$nasigoreng = 10000;
$pasta = 7000;
 
//form pembelian
if(!isset($_POST['proses']) && !isset($_POST['bayar'])){
 echo '
 <center>
 <h1>PEMESANAN</h1>
 <form action="" method="POST">
 <table>
 <p><i>harga persatuan</p>
 <tr><td>Ayam Goreng </td><td><input type="text" name="ayamgoreng" value="'.$ayamgoreng.'"></td></tr>
 <tr><td>Nasi Goreng </td><td><input type="text" name="nasigoreng" value="'.$nasigoreng.'"></td></tr>
 <tr><td>Pasta </td><td><input type="text" name="pasta" value="'.$pasta.'"></td></tr>
 </table>
  <p><i>silahkan masukkan jumlah pemesanan</p>
 <table>
 <tr><td>Ayam Goreng </td><td><input type="text" name="p1"></td></tr>
 <tr><td>Nasi Goreng </td><td><input type="text" name="p2"></td></tr>
 <tr><td>Pasta </td><td><input type="text" name="p3"></td></tr>
 <tr><td></td><td><input type="submit" name="proses" value="proses"></td></tr>
 </table>
 </form>
 </center>';
 
//jumlah bayar
}elseif(isset($_POST['proses'])){
 $ayamgoreng = $_POST['p1'] * $ayamgoreng;
 $nasigoreng = $_POST['p2'] * $nasigoreng;
 $pasta = $_POST['p3'] * $pasta;
 $total = $ayamgoreng+$nasigoreng+$pasta;
 
echo '
 <center>
 <h1>JUMLAH BAYAR & KEMBALIAN</h1>
 <p><i>silahkan masukkan uang pembayaran</p>
 <form action="" method="POST">
 <table>
 <tr><td>Ayam Goreng </td><td><input type="text" name="ayamgoreng" value="'.$ayamgoreng.'"></td></tr>
 <tr><td>Nasi Goreng </td><td><input type="text" name="nasigoreng" value="'.$nasigoreng.'"></td></tr>
 <tr><td>Pasta </td><td><input type="text" name="pasta" value="'.$pasta.'"></td></tr>
 <tr><td>Total Bayar</td><td><input type="text" name="totalBayar" value="'.$total.'"></td></tr>
 <tr><td>Jumlah Uang</td><td><input type="text" name="jumlahUang"></td></tr>
 <tr><td></td><td><input type="submit" name="bayar" value="bayar"></td></tr>
 </table>
 </form>
 </center>';
//jumlah bayar,jumlah uang,kembali
}elseif(isset($_POST['bayar'])){
 $totalBayar = $_POST['totalBayar'];
 $jumlahUang = $_POST['jumlahUang'];
 $kembalian = $jumlahUang - $totalBayar;
 echo '
 <center>
 <h1>JUMLAH BAYAR & KEMBALIAN</h1>
 <form action="" method="POST">
 <table>
 <tr><td>Total Bayar</td><td><input type="text" name="totalBayar" value="'.$totalBayar.'" readonly></td></tr>
 <tr><td>Jumlah Uang</td><td><input type="text" name="jumlahuang" value="'.$jumlahUang.'" readonly></td></tr>
 <tr><td>Kembali</td><td><input type="text" name="jumlahuang" value="'.$kembalian.'" readonly></td></tr>
 </table>
 </form>
 </center>';
}
?>