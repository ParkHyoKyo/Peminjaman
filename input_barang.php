<?php 
	include 'koneksi.php';

	$nama_barang = $_POST['nama_barang'];
	$stok_barang = $_POST['stok_barang'];
	$jumlah_barang = $_POST['jumlah_barang'];

	$data = mysqli_query($koneksi, "INSERT INTO `barang`(`nama_barang`, `stok`, `jumlah`) VALUES ('$nama_barang','$stok_barang','$jumlah_barang ')"); 

	header ('Location: daftar_barang.php');




 ?>