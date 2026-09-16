<?php

include '../config/koneksi.php';

$sql = "SELECT * FROM siswa ORDER BY id";

$query = mysqli_query($koneksi, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
    <div class="container">
        <h1>Data Siswa</h1>

        <a class="btn" href="tambah.php">
            + Tambah Siswa
        </a>

        <br><br>
        <table>
            <thead>
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Kelas</th>
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

                        <td><?= htmlspecialchars($data['nis']); ?></td>
                        <td><?= htmlspecialchars($data['nama']); ?></td>
                        <td><?= htmlspecialchars($data['jenis_kelamin']); ?></td>
                        <td><?= htmlspecialchars($data['kelas']); ?></td>
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
    </div>
    <script src="../js/script.js"></script>
</body>
</html>