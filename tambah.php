<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Buku</title>
</head>
<body>
	<br/>
	<a href="admin.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA BUKU</h3>
	<form method="POST" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>Kode Buku</td>
				<td><input type="text" name="kode_buku"></td>
			</tr>
			<tr>
				<td>Nama Buku</td>
				<td><input type="text" name="nama_buku"></td>
			</tr>
			<tr>
				<td>Quantity</td>
				<td><input type="number" name="quantity"></td>
			</tr>
			<tr>
				<td>Genre</td>
				<td><input type="text" name="genre"></td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>