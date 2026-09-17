<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Guru</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
<div class="container">
    <h2>Tambah Data Guru</h2>
    <form action="simpan.php" method="POST">

        <label>NIP</label>
        <input type="text" name="nip" required>

        <label>Nama Guru</label>
        <input type="text" name="nama_guru" required>

        <label>Jenis Kelamin</label>
        <select name="jenis_kelamin" required>
            <option value="">--Pilih--</option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>

        <label>Mata Pelajaran</label>
        <input type="text" name="mata_pelajaran" placeholder="Contoh : Pemrograman Web" required>

        <label>Alamat</label>
        <textarea name="alamat"></textarea>

        <label>No. HP</label>
        <input type="text" name="no_hp">

        <button type="submit">Simpan</button>

        <a href="index.php">Kembali</a>
    </form>
</div>
</body>
</html>
