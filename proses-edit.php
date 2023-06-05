<?php

include("config.php");

if(isset($_POST['simpan'])){

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];

    $fotobaru = date('dmYHis').$foto;
    $path = "images/".$fotobaru;
    if(move_uploaded_file($tmp, $path)){
        if(is_file("images/".$data['foto'])) 
        unlink("images/".$data['foto']); 
    $sql = "UPDATE calon_siswa SET foto='$fotobaru', nama='$nama', alamat='$alamat', jenis_kelamin='$jk', agama='$agama', sekolah_asal='$sekolah' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: index.php?status=suksesedit');
    } else {
        header('Location: index.php?status=gagal');
    }
    }

} else {
    die("Akses dilarang...");
}
?>