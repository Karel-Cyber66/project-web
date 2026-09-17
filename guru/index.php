<?php

include '../config/koneksi.php';

$sql = "SELECT * FROM guru ORDER BY id";

$query = mysqli_query($koneksi, $sql);

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Guru</title>
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
    <div class="container">
        <h1>Data Guru</h1>

        <a class="btn" href="tambah.php">
            + Tambah Guru
        </a>

        <br><br>
        <table>
            <thead>
            <tr>
                <th>No</th>
                <th>NIP</th>
                <th>Nama Guru</th>
                <th>Jenis Kelamin</th>
                <th>Mata Pelajaran</th>
                <th>Alamat</th>
                <th>No. HP</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
                <?php

                $no = 1;
                while ($data = mysqli_fetch_array($query)):
                ?>
                <tr>
                     <td><?= $no++ ?></td>

                        <td><?= htmlspecialchars($data['nip']); ?></td>
                        <td><?= htmlspecialchars($data['nama_guru']); ?></td>
                        <td><?= htmlspecialchars($data['jenis_kelamin']); ?></td>
                        <td><?= htmlspecialchars($data['mata_pelajaran']); ?></td>
                        <td><?= htmlspecialchars($data['alamat']); ?></td>
                        <td><?= htmlspecialchars($data['no_hp']); ?></td>
                       <td>
                            <a class="btn" href="edit.php?id=<?= $data['id']; ?>">
                                Edit
                            </a>

                            <a class="btn"
                                href="hapus.php?id=<?= $data['id']; ?>"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                Hapus
                            </a>
                        </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

        <br>
        <a href="../index.php">← Kembali ke Beranda</a>
    </div>
    <script src="../js/script.js"></script>
</body>
</html>
