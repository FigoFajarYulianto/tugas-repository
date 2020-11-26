<?php 
	$koneksi = mysqli_connect("localhost","root","","db_web_crud");

	if (mysqli_connect_error()) {
		# code...
		echo "Koneksi database gagal :".mysqli_connect_error();
	}
 ?>