<?php
    // menghubungkan dengan koneksi
    include 'koneksi.php';
    
    // menangkap data yang dikirim dari form
    $nip = $_POST['nip'];
    $kedudukan = $_POST['kedudukan'];
    $seksi = $_POST['seksi'];
    $tanggal_awal = $_POST['tanggal_awal'];
    
    // validasi jika
$cek_jumlah = mysqli_query ($connect,"select * from t_kedudukan where nip = '$nip' and aktif = '1';");
$jumlahnya = mysqli_num_rows ($cek_jumlah);
if($jumlahnya > 0){
echo "Data Sudah Ada";
}else{
    if(strlen($nip) !== 18){
        echo "nip kurang dari 18 digit";
    }else{
        $query = mysqli_query($connect,"insert into t_kedudukan (nip,kedudukan,seksi,tanggal_awal,aktif) values ('$nip','$kedudukan','$seksi','$tanggal_awal','1');"); 
        header("location:./kedudukan.php"); 
    }
}

?>