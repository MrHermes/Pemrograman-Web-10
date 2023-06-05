<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Les Komun</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h3>Peserta yang sudah mendaftar</h3>
    </header>

    <div class="list-siswa">
        <div>
            <button style="background-color:#046200; border:transparent;">
                <a href="index.php">
                    <
                </a>
            </button>
            <button style="background-color:#046200; border:transparent;">
                <a href="form-daftar.php">[+]</a>
            </button>
            <button style="background-color:#046200; border:transparent; width:max-content;">
                <a href="download.php" style="font-size: 1rem; margin: auto 0">Unduh</a>
            </button>
        </div>
        

        <br>

        <table>
            <thead>
                <tr>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Sekolah Asal</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "SELECT * FROM calon_siswa";
                $query = mysqli_query($db, $sql);

                while($siswa = mysqli_fetch_array($query)){
                    echo "<tr>";

                    echo "<td class='photo'><img src='images/".$siswa['foto']."' width='100' height='100'></td>";
                    echo "<td>".$siswa['nama']."</td>";
                    echo "<td>".$siswa['alamat']."</td>";
                    echo "<td>".$siswa['jenis_kelamin']."</td>";
                    echo "<td>".$siswa['agama']."</td>";
                    echo "<td>".$siswa['sekolah_asal']."</td>";

                    echo "<td class='tool'>";
                    echo "<a class='tool-edit' href='form-edit.php?id=".$siswa['id']."'>Edit</a>";
                    echo "<a class='tool-hapus' href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
                    echo "</td>";

                    echo "</tr>";
                }
                ?>

            </tbody>
        </table>

        <p id="total">Total: <?php echo mysqli_num_rows($query) ?></p>
    </div>
</body>
</html>
