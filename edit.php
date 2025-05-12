<html>
<head>
	<title>CRUD UNSIA PRODUK</title>
</head>
<body>
	<h2>CRUD UNSIA PRODUK</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA PRODUK</h3>
    <?php
	include 'config.php';
	$id_produk=$_GET['id'];
    $stmt = mysqli_prepare($conn, "SELECT * FROM produk WHERE id = ?");
	                
	if (!$stmt) {
		die("Gagal menyiapkan query: " . mysqli_error($conn));
	}
	if(!mysqli_stmt_bind_param($stmt, "i", $id_produk)){
		die("Gagal bind parameter: " . mysqli_stmt_error($stmt));
	}
	
	if(!mysqli_stmt_execute($stmt)){
		die("Gagal mengeksekusi query: " . mysqli_stmt_error($stmt));
	}
	
    $result = mysqli_stmt_get_result($stmt);

	while($data = mysqli_fetch_array($result)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>ID Produk</td>
                    <td>
                        <input type="text" name="id" value="<?php echo $data['id']; ?>" readonly>
                    </td>
				</tr>
				<tr>			
					<td>Nama Produk</td>
					<td>
						<input type="text" name="nama_produk" value="<?php echo $data['nama_produk']; ?>">
					</td>
				</tr>
				<tr>
					<td>Keterangan</td>
					<td><input type="text" name="keterangan" value="<?php echo $data['keterangan']; ?>"></td>
				</tr>
				<tr>
					<td>Harga</td>
					<td><input type="text" name="harga" value="<?php echo $data['harga']; ?>"></td>
				</tr>
				<tr>
					<td>Jumlah</td>
					<td><input type="text" name="jumlah" value="<?php echo $data['jumlah']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
</body>	
</html>