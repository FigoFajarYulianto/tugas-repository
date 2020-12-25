<!DOCTYPE html>
<html lang="en">
<head>
	<title>Menampilkan Data Mahasiswa</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/css_tambahan.css">
<!--===============================================================================================-->

</head>
<body>
	<div class="judul">
		<h1>Menampilkan Data Dari Mahasiswa</h1>
		<a href="input.php" class="button"> Tambah Data Baru</a>
	</div>
	<div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped" style=" position: relative; left: 400px; bottom: -50px;">
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Alamat</th>
							<th>Pekerjaan</th>
							<th>Opsi</th>
						</tr>
						<?php
        include "koneksi.php";
        $query_mysql = mysqli_query($koneksi, "select * from user");
        $nomor = 1;
        while ($data = mysqli_fetch_array($query_mysql)) { 
            ?>
        <tr>
            <td><?php echo $nomor++; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><?php echo $data['pekerjaan']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $data['id']; ?>" class="edit">Edit</a>
                <a href="hapus.php?id=<?php echo $data['id']; ?>" class="hapus">Hapus</a>
            </td>
        </tr>
        <?php  } ?>
                    </table>
                </div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>