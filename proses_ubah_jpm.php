<?php
    // menghubungkan dengan koneksi
    include 'koneksi.php';
    
    // menangkap data yang dikirim dari form
    $nip = $_POST['nip'];
    $kode_jpm = $_POST['kode_jpm'];
    $nilai = $_POST['nilai'];
    
    // validasi jika
    if(strlen($nip) !== 18){
        echo "nip kurang dari 18 digit";
    }else{
        $query = mysqli_query($connect,"update t_jpm set nilai=$nilai where nip='$nip' and jpm='$kode_jpm';"); 
        header("location:./jpm.php"); 
    }
?>