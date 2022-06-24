<?php 
    include 'koneksi.php';

    $nip = $_POST['nip'];
    $seksi = $_POST ['seksi'];
    $tmp = $_FILES['nama_file']['tmp_name'];
    $nama_file = $_FILES['nama_file']['name'];
    $tipe_file = $_FILES['nama_file']['type'];
    $ukuran_file = $_FILES['nama_file']['size'];

    $path = "sertifikat/".$nama_file;

    if($tipe_file == "image/jpeg" || $tipe_file == "image/png" || $tipe_file == "image/jpg" || $tipe_file == "application/pdf"){
        if($ukuran_file <= 1000000){
            if(move_uploaded_file($tmp, $path)){
                mysqli_query($connect,"insert into t_sertifikat (nip,seksi,nama_file) values('$nip','$seksi','$nama_file');");
                echo "UPLOAD SUKSES";
            }else{
                echo  "GAGAL UPLOAD";
            }
        }else{
            echo "UKURAN KEBESARAN";
        }
    }else{
        echo "EKSTENSI SALAH";
    }







?>