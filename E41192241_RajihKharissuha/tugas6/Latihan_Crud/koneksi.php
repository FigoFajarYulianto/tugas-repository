<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_crud_web_Rajih");

if(mysqli_connect_error()){
    echo "Koneksi database gagal : " , mysqli_connect_error();
}