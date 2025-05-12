<?php
    include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS UNSIA</title>
    <style>
        th {
            background-color: #FCB371;
        }
    </style>
</head>
<body>
    <center>
        <h1>CRUD UNSIA TABLE PRODUK</h1>

        <a href="create.php">
            <button style="width:37%;padding:10px;background:blue;color:white;">Insert Data</button>
        </a>
        <br><br>

        <table border="1" cellpadding="10">
            <tr>
                <th>Nama Produk</th>
                <th>Keterangan</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Aksi</th>
            </tr>
            <?php
                $sql = "SELECT * FROM produk";
                $stmt = mysqli_prepare($conn, $sql);
                
                if (!$stmt) {
                    die("Gagal menyiapkan query: " . mysqli_error($conn));
                }

                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);

                while ($data = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?= htmlspecialchars($data['nama_produk']) ?></td>
                <td><?= htmlspecialchars($data['keterangan']) ?></td>
                <td><?= $data['harga'] ?></td>
                <td><?= $data['jumlah'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $data['id'] ?>"><button>Edit</button></a>
                    <a href="delete.php?id=<?= $data['id'] ?>" onclick="return confirm('Yakin ingin menghapus?')"><button>Delete</button></a>
                </td>
            </tr>
            <?php
                }

                mysqli_stmt_close($stmt);
            ?>
        </table>
    </center>
</body>
</html>
