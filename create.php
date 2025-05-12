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
	<h3>TAMBAH DATA PRODUK</h3>
	<form method="POST" action="create_aksi.php">
		<table>
			<tr>			
				<td>Nama Produk</td>
				<td><input type="text" name="nama_produk" id="nama_produk"></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td><input type="text" name="keterangan" id="keterangan"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="text" name="harga" id="harga"></td>
			</tr>
            <tr>
				<td>Jumlah</td>
				<td><input type="text" name="jumlah" id="jumlah"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="SUBMIT" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>
