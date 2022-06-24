<?php
    // menghubungkan dengan koneksi
    include 'koneksi.php';
    
    // menangkap data yang dikirim dari form
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $status_kawin = $_POST['status_kawin'];
    
    // validasi jika
$cek_jumlah = mysqli_query ($connect,"select * from t_pegawai where nip = '$nip';");
$jumlahnya = mysqli_num_rows ($cek_jumlah);
if($jumlahnya > 0){
echo "NIP Sudah Ada";
}else{
if(strlen($nip) !== 18){
        echo "nip kurang dari 18 digit";
    }else{
        $query = mysqli_query($connect,"insert into t_pegawai (nip,nama,tanggal_lahir,status_kawin) values ('$nip','$nama','$tanggal_lahir','$status_kawin');"); 
        header("location:./pegawai.php"); 
    }
}

?>
    