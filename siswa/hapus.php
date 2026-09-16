<?php
include "../config/koneksi.php";

$id = $_GET['id'];

$sql = "DELETE FROM siswa WHERE id = '$id'";
$query = mysqli_query($koneksi, $sql);

if ($query) {
    header("Location: index.php?pesan=hapus");
    exit;
} else {
    echo "Data gagal dihapus: " . mysqli_error($koneksi);
}
?>