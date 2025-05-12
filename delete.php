<?php
include 'config.php';
$id_produk=$_GET['id'];
$stmt = mysqli_prepare($conn, "DELETE FROM produk WHERE id = ?");
if (!$stmt) {
    die("Gagal mempersiapkan query: " . mysqli_error($conn));
}

if(!mysqli_stmt_bind_param($stmt, "i", $id_produk)){
    die("Gagal bind parameter: " . mysqli_stmt_error($stmt));
}

if(!mysqli_stmt_execute($stmt)){
    die("Gagal mengeksekusi query: " . mysqli_stmt_error($stmt));
}

mysqli_stmt_close($stmt);

header("location:index.php");
?>

