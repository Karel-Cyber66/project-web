<?php
include "../config/koneksi.php";

$id = $_POST['id'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$kelas = $_POST['kelas'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];

$sql = "UPDATE siswa SET
            nis = '$nis',
            nama = '$nama',
            jenis_kelamin = '$jenis_kelamin',
            kelas = '$kelas',
            alamat = '$alamat',
            no_hp = '$no_hp'
        WHERE id = '$id'";

$query = mysqli_query($koneksi, $sql);

if ($query) {
    header("Location: index.php?pesan=update");
    exit;
} else {
    echo "Data gagal diperbarui: " . mysqli_error($koneksi);
}
?>