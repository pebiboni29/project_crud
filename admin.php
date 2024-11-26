<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <h2>SELAMAT DATANG ADMIN</h2>
    <a href="tambah.php">Tambah data</a>
    <br>
    <br>
    <table border="1">
        <tr>
            <th>Nomor</th>
            <th>Nama Buku</th>
            <th>Quantity</th>
            <th>Genre</th>
            <th>Opsi</th>
        </tr>

        <?php 
		include 'koneksi.php';
        $no = 1;
		$data1 = mysqli_query($koneksi,"SELECT * FROM buku");
		while($d = mysqli_fetch_array($data1)){  
			?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $d['nama_buku']; ?></td>
				<td><?php echo $d['Quantity']; ?></td>
                <td><?php echo $d['genre']; ?></td>
                <td>
                    <a href="edit.php?kode_buku=<?php echo $d['kode_buku']; ?>">Edit</a>
                    <a href="">Hapus</a>
                </td>
			</tr>
			<?php 
		    }
           ?>
</table>
</body>
</html>