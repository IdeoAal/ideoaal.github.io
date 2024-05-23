<?php
    session_start();
    include("koneksi.php");

    $username = $_POST['username'];
    $password = $_POST['password'];
    var_dump($username);
    var_dump($password);
    $data = mysqli_query($konek, "SELECT * FROM pengguna WHERE username='$username' AND password='$password'")
            or die(mysqli_error($konek));

    $cek = mysqli_num_rows($data);
    if($cek > 0){
        $_SESSION['username'] = $username;
        $_SESSION['status']= $login;
        header("location: index.php");
    }else{
        header("location: login.php?pesan=gagal");
    }
?>