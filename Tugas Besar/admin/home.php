<h2>Selamat Datang Administrator</h2>
<?php

if(!isset($_SESSION['login'])) {
    header("location: login.php");
    exit;
}
?>