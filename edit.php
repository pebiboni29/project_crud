<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <h2>EDIT DATA BUKU</h2>
   
   <?php
        include 'koneksi.php';
        $kode_buku = $_GET['kode_buku'];
        $data1 = mysqli_query($koneksi,"SELECT * FROM buku WHERE kode_buku ='$kode_buku' ");
        while($d = mysqli_fetch_array($data1)){  
	?>
        <form method="POST" action="aksi_update.php">
		<table>			
			<tr>
				<td>Nama Buku</td>
				<td>
					<input type="hidden" name="kode_buku" value="<?php echo $d['kode_buku']; ?>">
					<input type="text" name="nama_buku" value="<?php echo $d['nama_buku']; ?>">
				</td>
			</tr>
			<tr>
				<td>Quantity</td>
				<td><input type="number" name="Quantity" value="<?php echo $d['Quantity']; ?>"></td>
			</tr>
			<tr>
				<td>Genre</td>
				<td><input type="text" name="genre" value="<?php echo $d['genre']; ?>"></td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
    <?php
        }
    ?>
</body>
</html>