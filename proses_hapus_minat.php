<?php
    // menghubungkan dengan koneksi
    include 'koneksi.php';
    
    // menangkap data yang dikirim dari form
    $nip = $_POST['nip'];
    $seksi = $_POST['seksi'];
    
    // validasi jika
    if(strlen($nip) !== 18){
        echo "nip kurang dari 18 digit";
    }else{
        $query = mysqli_query($connect,"delete from t_minat where nip='$nip';"); 
        header("location:./minat.php"); 
    }
?>