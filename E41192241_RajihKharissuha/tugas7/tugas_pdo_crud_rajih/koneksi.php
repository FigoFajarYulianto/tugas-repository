<?php
$koneksi = mysqli_connect("localhost", "root", "", "pdo_crud");

if(mysqli_connect_error()){
    echo "Koneksi database gagal : " , mysqli_connect_error();
}