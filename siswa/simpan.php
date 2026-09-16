<?php

include "../config/koneksi.php";

$nis = $_POST["nis"];
$nama = $_POST["nama"];
$jenis_kelamin = $_POST["jenis_kelamin"];
$kelas = $_POST["kelas"];
$alamat = $_POST["alamat"];
$no_hp = $_POST["no_hp"];

$sql = "INSERT INTO siswa
    (nis, nama, jenis_kelamin, kelas, alamat, no_hp)
    VALUES
    ('$nis', '$nama', '$jenis_kelamin', '$kelas', '$alamat', '$no_hp')";

$query = mysqli_query($koneksi, $sql);

if ($query) {
    header("Location: index.php?pesan=sukses");
    exit;
} else {
    echo "Data gagal disimpan: " . mysqli_error($koneksi);
}
?>
