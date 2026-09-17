<?php
include "../config/koneksi.php";

$id = $_GET['id'];

$sql = "SELECT * FROM guru WHERE id = '$id'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Edit Data Guru</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

<div class="container">

    <h1>Edit Data Guru</h1>

    <form action="update.php" method="POST">

        <input
            type="hidden"
            name="id"
            value="<?= $data['id']; ?>"
        >

        <label>NIP</label>
        <input
            type="text"
            name="nip"
            value="<?= htmlspecialchars($data['nip']); ?>"
            required
        >

        <label>Nama Guru</label>
        <input
            type="text"
            name="nama_guru"
            value="<?= htmlspecialchars($data['nama_guru']); ?>"
            required
        >

        <label>Jenis Kelamin</label>
        <select name="jenis_kelamin">

            <option
                value="L"
                <?= $data['jenis_kelamin'] == 'L' ? 'selected' : ''; ?>
            >
                Laki-laki
            </option>

            <option
                value="P"
                <?= $data['jenis_kelamin'] == 'P' ? 'selected' : ''; ?>
            >
                Perempuan
            </option>

        </select>

        <label>Mata Pelajaran</label>
        <input
            type="text"
            name="mata_pelajaran"
            value="<?= htmlspecialchars($data['mata_pelajaran']); ?>"
            required
        >

        <label>Alamat</label>
        <textarea name="alamat"><?= htmlspecialchars($data['alamat']); ?></textarea>

        <label>No HP</label>
        <input
            type="text"
            name="no_hp"
            value="<?= htmlspecialchars($data['no_hp']); ?>"
        >

        <button type="submit">
            Update Data
        </button>

        <a href="index.php">
            Kembali
        </a>

    </form>

</div>

</body>
</html>
