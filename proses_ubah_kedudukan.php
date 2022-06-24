<?php
    // menghubungkan dengan koneksi
    include 'koneksi.php';
    
    // menangkap data yang dikirim dari form
    $nip = $_POST['nip'];
    $kedudukan = $_POST['kedudukan'];
    $seksi = $_POST['seksi'];
    $tanggal_awal = $_POST['tanggal_awal'];
    
    // validasi jika
    if(strlen($nip) !== 18){
        echo "nip kurang dari 18 digit";
    }else{
        $query2 = mysqli_query($connect,"update t_kedudukan set aktif = '0',tanggal_akhir='$tanggal_awal' where nip = '$nip' and aktif = '1';");
        $query = mysqli_query($connect,"insert into t_kedudukan (nip,kedudukan,seksi,tanggal_awal,aktif) values ('$nip','$kedudukan','$seksi','$tanggal_awal','1');"); 
        header("location:./kedudukan.php"); 
    }
?>