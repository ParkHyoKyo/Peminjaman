<?php 
	$koneksi = mysqli_connect("localhost","root","","peminjaman");

	if ($koneksi == true) {
		// code...
		echo "Koneksi Berhasil";
	}else {
		// code...
		echo "Koneksi Gagal";
	}



 ?>