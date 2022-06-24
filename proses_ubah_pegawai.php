<?php
    // menghubungkan dengan koneksi
    include 'koneksi.php';
    
    // menangkap data yang dikirim dari form
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $status_kawin = $_POST['status_kawin'];
    
    // validasi jika
    if(strlen($nip) !== 18){
        echo "nip kurang dari 18 digit";
    }else{
        $query = mysqli_query($connect,"update t_pegawai set nama='$nama', tanggal_lahir='$tanggal_lahir', status_kawin='$status_kawin' where nip = '$nip';"); 
        header("location:./pegawai.php"); 
    }
?>