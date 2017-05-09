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
			</ul>
		</div>
		<div class="badan">			
			<div class="sidebar">
				
				
			</div>
			<div class="content">
                
                <h3>Data Pengunjung Hotel Indonesia</h3>

				
                <table border="1">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Usia</th>
		<th>Opsi</th>
	</tr>
	<?php
	$no = 1;
	foreach($db->tampil_data() as $x){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $x['nama']; ?></td>
		<td><?php echo $x['alamat']; ?></td>
		<td><?php echo $x['usia']; ?></td>
		<td>
			<a href="edit.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
			<a href="proses.php?id=<?php echo $x['id']; ?>&aksi=hapus">Hapus</a>			
		</td>
	</tr>
	<?php 
	}
	?>
</table>
                    
			</div>
		</div>
		<div class="clear"></div>
		<div class="footer">
			Hotel Indonesia <br> Jln kalibeber no 34 <br> Wonosobo,Jawa Tengan,Indonesia
		</div>
	</div>
        
</body>
</html>