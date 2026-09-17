<?php
include "../config/koneksi.php";

$id             = $_POST['id'];
$nip            = $_POST['nip'];
$nama_guru      = $_POST['nama_guru'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$mata_pelajaran = $_POST['mata_pelajaran'];
$alamat         = $_POST['alamat'];
$no_hp          = $_POST['no_hp'];

$sql = "UPDATE guru SET
            nip = '$nip',
            nama_guru = '$nama_guru',
            jenis_kelamin = '$jenis_kelamin',
            mata_pelajaran = '$mata_pelajaran',
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
