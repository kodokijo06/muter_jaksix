<?php
    // menghubungkan dengan koneksi
    include 'koneksi.php';
    
    // menangkap data yang dikirim dari form
    $id = $_POST['id'];

    $query = mysqli_query($connect,"delete from t_sertifikat where id = '$id';"); 
    header("location:./sertifikat.php");
?>