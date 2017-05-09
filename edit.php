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
            <right>
			<ul>
				<li><a href="input.php">Tambah Data Pengunjung	</a></li>	
                <li><a href="index.php">Data Pengunjung</a></li>
			</ul>
                </right>
		</div>
		<div class="badan">			
			<div class="sidebar">
				
				
			</div>
			<div class="content">
                
                <h3>Ubah Data Pengunjung</h3>
                    <br>
                <form action="proses.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['id']) as $d){
?>
<table>
	<tr>
		<td>Nama</td>
		<td>
			<input type="hidden" name="id" value="<?php echo $d['id'] ?>">
			<input type="text" name="nama" value="<?php echo $d['nama'] ?>">
		</td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat" value="<?php echo $d['alamat'] ?>"></td>
	</tr>
	<tr>
		<td>Usia</td>
		<td><input type="text" name="usia" value="<?php echo $d['usia'] ?>"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
<?php } ?>
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
