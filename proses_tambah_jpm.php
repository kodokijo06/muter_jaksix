<?php
    // menghubungkan dengan koneksi
    include 'koneksi.php';
    
    // menangkap data yang dikirim dari form
    $nip = $_POST['nip'];
    $jpm = $_POST['jpm'];
    $nilai = $_POST['nilai'];
    
    // validasi jika
$cek_jumlah = mysqli_query ($connect,"select * from t_jpm where nip = '$nip' and jpm = '$jpm';");
$jumlahnya = mysqli_num_rows ($cek_jumlah);
if($jumlahnya > 0){
echo "Data Sudah Ada";
}else{
    if(strlen($nip) !== 18){
        echo "nip kurang dari 18 digit";
    }else{
        $query = mysqli_query($connect,"insert into t_jpm (nip,jpm,nilai) values ('$nip','$jpm','$nilai');"); 
        header("location:./jpm.php"); 
    }
}

?>