<?php 
$koneksi = mysqli_connect("localhost","root","","maketan");
mysqli_set_charset($koneksi,"utf8mb4");

if(mysqli_connect_errno()) {
    echo "Failed to connect: " . mysqli_connect_errno();
}
?>

