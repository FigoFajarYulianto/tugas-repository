<?php 
	$koneksi = mysqli_connect("localhost","root","","project_chat");

	if (mysqli_connect_error()) {
		echo "Koneksi database gagal :".mysqli_connect_error();
	}
 ?>