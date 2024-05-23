<?php
    include "koneksi.php";

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = mysqli_query($konek, "INSERT INTO pengguna
            VALUES('','$nama','$alamat','$email','$telepon','$username','$password')")
            or die(mysqli_error($konek));

    if($query){
        header("location: login.php?pesan=berhasil");
    }else{
        header("location: login.php?pesan=gagal_d");
    }
?>