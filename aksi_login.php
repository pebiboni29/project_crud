<?php
    include 'koneksi.php';

    $username = $_POST['user'];
    $password = $_POST['password'];

    $data = mysqli_query($koneksi,"SELECT * FROM anggota WHERE username='$username' AND password='$password'");

    $cek = mysqli_num_rows($data);

    if($cek > 0){
        header("location:admin.php");
    }else{
        header("location:login.php");
    }
    
?>