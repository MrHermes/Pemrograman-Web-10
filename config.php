<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "pendaftaran_siswa";
$db = mysqli_connect($server, $user, $password, $nama_database);

$pdo = new PDO('mysql:host='.$server.';dbname='.$nama_database, $user, $password);

?>