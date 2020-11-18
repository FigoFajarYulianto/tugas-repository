<?php
$email = $_POST['email'];
$password = $_POST['password'];
$email_saya = "figofajar25@gmail.com";
$password_saya = "asolole1";
if((strcasecmp($email_saya,$email) == 0)&&($password_saya==$password)){
 session_start();
    $_SESSION['email'] = $email;
header("location: index.php?pesan=berhasil");}
else{
header("location:login.php?pesan=gagal");}
?>
