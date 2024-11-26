<?php
    $host="localhost";
    $user ="root";
    $pass ="";
    $db="perpusku";

//memberi alamat koneksi
$koneksi = mysqli_connect($host,$user,$pass,$db);

//cek koneksi
if(mysqli_connect_errno()){
    echo "Koneksi ke database gagal : ".mysqli_connect_error();
}

?>