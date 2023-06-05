<?php

include("config.php");

if(isset($_POST['daftar'])){
    
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];

    $fotobaru = date('dmYHis').$foto;

    $path = "images/".$fotobaru;

    if(move_uploaded_file($tmp, $path)){ 
        $sql = "INSERT INTO calon_siswa (foto, nama, alamat, jenis_kelamin, agama, sekolah_asal) VALUE ('$fotobaru', '$nama', '$alamat', '$jk', '$agama', '$sekolah')";
        $query = mysqli_query($db, $sql);    
    
      if($query){ 
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }
    }

} else {
    die("Akses dilarang...");
}

?>