<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah data siswa</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
<div class="container">
    <h2>Tambah Data Siswa</h2>
    <form action="simpan.php" method="POST">

        <label>NIS</label>
        <input type="text" name="nis" required>

        <label>Nama</label>
        <input type="text" name="nama" required>

        <label >Jenis Kelamin</label>
        <select name="jenis_kelamin" required>
            <option value="">--Pilih--</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>

        <label>Kelas</label>
        <input type="text" name="kelas" placeholder="Contoh : XI PPLG A"
        required>

        <label>Alamat</label>
        <textarea name="alamat" required></textarea>

        <label>No. HP</label>
        <input type="text" name="no_hp">

        <button type="submit">Simpan</button>

        <a href="index.php">Kembali</a>
    </form>
</div>
</body>
</html>