<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<a href="tambah_barang.php">Tambah Barang</a>
	<table border="1">
		<tr>
			<td>Nama barang</td>
			<td>Stok Barang</td>
			<td>Jumlah Barang</td>
			<td>Aksi</td>
		</tr>
		
		<?php

		include 'koneksi.php'; 
			$data = mysqli_query($koneksi, "SELECT * FROM `barang`");

			foreach ($data as $data){
	
		?>
		<tr>
			<td><?php echo $data['nama_barang'] ?></td>
			<td><?php echo $data['stok'] ?></td>
			<td><?php echo $data['jumlah']; ?></td>
			<td><a href="delete_barang.php?id=<?php echo $data['id']; ?>">Delete</a></td>
		</tr>



		<?php 	
		 	}
		?>

	</table>




</body>
</html>