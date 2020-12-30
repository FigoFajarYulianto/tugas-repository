<?php
include 'koneksi.php';
$id = $_POST['id'];
$nama_hewan = $_POST['nama_hewan'];
$tempat_tinggal = $_POST['tempat_tinggal'];


mysqli_query($koneksi,"update user set nama_hewan= '$nama_hewan', tempat_tinggal= '$tempat_tinggal', where id='$id'" );
header("location:index.php?pesan=update");
?>