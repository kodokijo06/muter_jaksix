<?php
    // mengaktifkan session php
    session_start();
 
    // menghubungkan dengan koneksi
    include 'koneksi.php';
    
    // menangkap data yang dikirim dari form
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // menyeleksi data admin dengan username dan password yang sesuai
    $query = mysqli_query($connect,"select * from t_user where username='$username' and password='$password'");
    
    $cek = mysqli_num_rows($query);
    // menghitung jumlah data yang ditemukan
    // $cek = mysqli_num_rows($query);
    // echo ($cek);
    
    if($cek > 0){
        $_SESSION['username'] = $username;
        $_SESSION['logged_in'] = "true";
        // header("location:../index_dinas.php?pesan=berhasil");
        header("location:./index.php");
    }else{
        header("location:./login.php");
    }
?>