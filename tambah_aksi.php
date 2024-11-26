<?php 
// koneksi database
include 'koneksi.php';

$kode_buku = $_POST['kode_buku'];
$nama_buku = $_POST['nama_buku'];
$quantity = $_POST['quantity'];
$genre = $_POST['genre'];


mysqli_query($koneksi,"insert into buku values('$kode_buku','$nama_buku','$quantity','$genre')");
 
header("location:admin.php");
 
?>