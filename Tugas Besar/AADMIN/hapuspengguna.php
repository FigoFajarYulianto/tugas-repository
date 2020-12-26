<?php

$ambil = $koneksi->query("SELECT * FROM user WHERE user_id='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$fotouser = $pecah['../gambar/user/'];
if (file_exists("../gambar/user/$fotouser")) {
    unlink("../gambar/user/$fotouser");

}

$koneksi->query("DELETE FROM user WHERE user_id='$_GET[id]'");

echo "<script>alert('apakah anda yakin?');</script>";
echo "<script>location='admin.php?halaman=pengguna';</script>";

?>