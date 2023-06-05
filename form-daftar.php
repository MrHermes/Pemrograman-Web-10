<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Peserta | Les Komun</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h3>Formulir Pendaftaran Peserta</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST" enctype="multipart/form-data">

        <fieldset>
        <button>
            <a href="index.php">
                <
            </a>
        </button>
        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="Nama Lengkap" />
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat"></textarea>
        </p>
        <p >
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
        </p>
        <p>
            <label for="agama">Agama: </label>
            <select name="agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Atheis</option>
            </select>
        </p>
        <p>
            <label for="sekolah_asal">Sekolah Asal: </label>
            <input type="text" name="sekolah_asal" placeholder="Nama Sekolah" />
        </p>
        <p>
            <label for="foto">Foto Diri:</label>
            <input type="file" name="foto" id="foto" />
        </p>
        <p class="submit">
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>