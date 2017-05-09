<?php 
include 'database.php';
$db = new database();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    
	<div class="wrap">
		<div class="header">			
            <center><h1>DATA PENGUNJUNG HOTEL INDONESIA</h1></center>
		</div>
		<div class="menu">
			<ul>
				<li><a href="input.php">Tambah Data Pengunjung	</a></li>	
                <li><a href="index.php">Data Pengunjung</a></li>
			</ul>
		</div>
		<div class="badan">			
			<div class="sidebar">
				
			</div>
			<div class="content">
                
                <h3>Masukkan Data Pengunjung</h3>
                    <br>
                <form action="proses.php?aksi=tambah" method="post">
	
<table>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat"></td>
	</tr>
	<tr>
		<td>Usia</td>
		<td><input type="text" name="usia"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
</form>
                
                 </div>
		</div>
		<div class="clear"></div>
		<div class="footer">
			Hotel Indonesia <br> Jln kalibeber no 34 <br> Wonosobo,Jawa Tengan,Indonesia
		</div>
	</div>
       
</body>
</html>

