<?php

$dsn = 'mysql:host=localhost;dbname=restoran';
$username = 'root';
$password = '';

try{
    
    $con = new PDO($dsn, $username, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (Exception $ex) {

    echo 'Not Connected '.$ex->getMessage();
}

$tableContent = '';
$start ='';
$selectStmt = $con->prepare('SELECT * FROM customer');
$selectStmt->execute();
$customer = $selectStmt->fetchAll();

foreach ($customer as $customer)
{
    $tableContent = $tableContent.'<tr>'.
            '<td>'.$customer['nama_customer'].'</td>'
			.'<td>'.$customer['alamat'].'</td>'
			.'<td>'.$customer['tgl'].'</td>'
			.'<td>'.$customer['ayam_goreng'].'</td>'
            .'<td>'.$customer['nasi_goreng'].'</td>'
			.'<td>'.$customer['pasta'].'</td>'
			.'<td>'.$customer['es_teh'].'</td>'
			.'<td>'.$customer['es_jeruk'].'</td>'
			.'<td>'.$customer['jus'].'</td>'
			.'<td>'.$customer['total_bayar'].'</td>';
			
        
}

if(isset($_POST['search']))
{
$start = $_POST['start'];
$tableContent = '';
$selectStmt = $con->prepare('SELECT * FROM customer WHERE alamat like :start');
$selectStmt->execute(array(
        
         ':start'=>$start.'%'
    
));
$customer = $selectStmt->fetchAll();

foreach ($customer as $customer)
{
    $tableContent = $tableContent.'<tr>'.
            '<td>'.$customer['nama_customer'].'</td>'
			.'<td>'.$customer['alamat'].'</td>'
			.'<td>'.$customer['tgl'].'</td>'
			.'<td>'.$customer['ayam_goreng'].'</td>'
            .'<td>'.$customer['nasi_goreng'].'</td>'
			.'<td>'.$customer['pasta'].'</td>'
			.'<td>'.$customer['es_teh'].'</td>'
			.'<td>'.$customer['es_jeruk'].'</td>'
			.'<td>'.$customer['jus'].'</td>'
			.'<td>'.$customer['total_bayar'].'</td>';
}
    
}

?>

<!DOCTYPE html>
<html>
    <head>
	<link rel="stylesheet" href="css1/bootstrap.css">
        <title>Filter</title>  
        <style>
            table,tr,td
            {
               border: 1px solid #000; 
            }
            
            td{
                background-color: #ddd;
            }
        </style>   
    </head>
    <body>
	  <div class="container">
        
        <form action="filter.php" method="POST">           
                <input type="text" name=" alamat" required >
            <input type="submit" name="search" value="Cari">            
            <table>
                <tr>          
                    <td>Nama Pembeli</td> 
					<td>Alamat</td>
					<td>Tanggal</td>
					<td>Ayam Goreng</td>
					<td>Nasi Goreng</td>
					<td>Pasta</td>	
					<td>Es Teh</td>	
					<td>Es Jeruk</td>
					<td>Jus</td>					
					<td>Total Bayar</td>
                </tr>                
                <?php                
                echo $tableContent;               
                ?>
            </table>
        </form>     
		<div>
    </body>    
</html>