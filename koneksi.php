<?php
    /* database : prakom_coba, user = root, pass = tidak ada */
    $hostname = "localhost";
    $user = "root";
    $password = "";
    $database = "dbmuter";
    $connect = mysqli_connect($hostname,$user,$password,$database);
    
    //Check connection
    if(!$connect){
        echo ("ERROR: Tidak dapat terkoneksi dengan database. " . mysqli_connect_error());
    }else{
        // echo "berhasil bos";
    }
?>