<?php
    // menghubungkan dengan koneksi
    include 'koneksi.php';
    
    // menangkap data yang dikirim dari form
    $nip = $_POST['nip'];
    $minat = $_POST['seksi'];
    
    // validasi jika
$cek_jumlah = mysqli_query ($connect,"select * from t_minat where nip = '$nip';");
$jumlahnya = mysqli_num_rows ($cek_jumlah);
if($jumlahnya > 0){
echo "Data Sudah Ada";
}else{
    if(strlen($nip) !== 18){
        echo "nip kurang dari 18 digit";
    }else{
        $query = mysqli_query($connect,"insert into t_minat (nip,seksi) values ('$nip','$minat');"); 
        header("location:./minat.php"); 
    }
}
?>