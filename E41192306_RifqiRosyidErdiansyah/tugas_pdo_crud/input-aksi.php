<?php
include 'koneksi.php';
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jurusan = $_POST['jurusan'];
$prodi = $_POST['prodi'];

mysqli_query($koneksi, "insert into user values('','$nim', '$nama', '$alamat', '$jurusan', '$prodi')");

header("Location:index.php?pesan=input");
?>