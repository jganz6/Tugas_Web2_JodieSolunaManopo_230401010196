<?php
include 'config.php';
$id_produk=$_POST['id'];
$nama_produk=$_POST['nama_produk'];
$keterangan=$_POST['keterangan'];
$harga=$_POST['harga'];
$jumlah=$_POST['jumlah'];

$stmt = mysqli_prepare($conn, "UPDATE produk SET keterangan = ?, harga = ?, jumlah = ? WHERE id = ?");
if (!$stmt) {
    die("Gagal mempersiapkan query: " . mysqli_error($conn));
}

if (!mysqli_stmt_bind_param($stmt, "sdii", $keterangan, $harga, $jumlah, $id_produk)){
    die("Gagal bind parameter: " . mysqli_stmt_error($stmt));
}
if(!mysqli_stmt_execute($stmt)){
    die("Gagal mengeksekusi query: " . mysqli_stmt_error($stmt));
}

mysqli_stmt_close($stmt);

header("location:index.php");
?>