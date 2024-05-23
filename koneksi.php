<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "kedai_kopi";

    $konek = new mysqli($hostname, $username, $password, $database);
    if($konek -> connect_error){
        die('Tidak dapat tersambung' . $konek -> connect_error);
    }
?>