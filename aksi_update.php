<?php 
include 'koneksi.php';

 
$kode_buku = $_POST['kode_buku'];
$nama_buku = $_POST['nama_buku'];
$Quantity = $_POST['Quantity'];
$genre = $_POST['genre'];
 

mysqli_query($koneksi,"UPDATE buku SET nama_buku='$nama_buku', Quantity='$Quantity', genre='$genre' WHERE kode_buku='$kode_buku'");

header("location:admin.php");
 
?>