<?php
include 'config.php';
$nama_produk = $_POST['nama_produk'];
$keterangan = $_POST['keterangan'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];

$stmt = mysqli_prepare($conn, "INSERT INTO produk (nama_produk, keterangan, harga, jumlah) VALUES (?, ?, ?, ?)");
if (!$stmt) {
    die("Gagal mempersiapkan query: " . mysqli_error($conn));
}

if(!mysqli_stmt_bind_param($stmt, "ssdi", $nama_produk, $keterangan, $harga, $jumlah)){
    die("Gagal bind parameter: " . mysqli_stmt_error($stmt));
}

if(!mysqli_stmt_execute($stmt)){
    die("Gagal mengeksekusi query: " . mysqli_stmt_error($stmt));
}

mysqli_stmt_close($stmt);

header("location:index.php");
?>