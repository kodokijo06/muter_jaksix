<?php 
    // menghubungkan dengan koneksi
    include 'koneksi.php';
    
    // menangkap data yang dikirim dari form
    $nip = $_POST['nip'];
    
    // validasi jika
    if(strlen($nip) !== 18){
        echo "nip kurang dari 18 digit";
    }else{
        $query = mysqli_query($connect,"select a.nip,b.nama,c.keterangan,a.tanggal_awal,a.tanggal_akhir,d.keterangan as seksi from t_kedudukan a left join t_pegawai b on a.nip=b.nip left join t_ref_kedudukan c on a.kedudukan=c.kode left join t_seksi d on a.seksi=d.kode where a.nip = '$nip';");
        if(mysqli_num_rows($query) > 0){
            include 'histori_mutasi_isi2.php';
        }else{
            echo "Tidak Ada Data";
        }
    }
?>