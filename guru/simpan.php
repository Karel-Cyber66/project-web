<?php

include "../config/koneksi.php";

$nip           = $_POST["nip"];
$nama_guru     = $_POST["nama_guru"];
$jenis_kelamin = $_POST["jenis_kelamin"];
$mata_pelajaran = $_POST["mata_pelajaran"];
$alamat        = $_POST["alamat"];
$no_hp         = $_POST["no_hp"];

$sql = "INSERT INTO guru
    (nip, nama_guru, jenis_kelamin, mata_pelajaran, alamat, no_hp)
    VALUES
    ('$nip', '$nama_guru', '$jenis_kelamin', '$mata_pelajaran', '$alamat', '$no_hp')";

$query = mysqli_query($koneksi, $sql);

if ($query) {
    header("Location: index.php?pesan=sukses");
    exit;
} else {
    echo "Data gagal disimpan: " . mysqli_error($koneksi);
}
?>
