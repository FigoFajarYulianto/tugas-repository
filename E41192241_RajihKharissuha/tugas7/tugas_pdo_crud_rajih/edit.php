<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data</title>
    <link rel="stylesheet" type="text/css" href="css/css_tambahan.css">
</head>

<body>
<div class="judul">
        <h1>Menampilkan Data Hewan</h1>
        <a href="index.php" class="button"> Kembali Ke Menu Utama</a>
	</div>
    <br>

    <h3 class="table table-bordered table-hover table-striped" style=" position: relative; left: 590px; bottom: 20px;">Edit Data</h3>
    <?php
    include "koneksi.php";
    $id = $_GET['id'];
    $query_mysql = mysqli_query($koneksi, "select * from user where id = '$id'");
    $nomor = 1;
    while ($data = mysqli_fetch_array($query_mysql)) {
        ?>
    <form action="update.php" method="POST">
        <table class="table table-bordered table-hover table-striped border" style="position: relative; left: 400px; bottom: 10px;">
            <tr>
                <td>Nama Hewan</td>
            <td><input type="text" name="nama_hewan" value="<?php echo $data['nama_hewan']?>">
                </td>
            </tr>

            <tr>
                <td>Tempat Tinggal</td>
                <td><input type="text" name="tempat_tinggal" value="<?php echo $data['tempat_tinggal']?>">
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <input style="position: relative; left: 50px; bottom: -20px;" type="submit" value="simpan">
                </td>
            </tr>

        </table>
    </form>
    <?php } ?>
</body>

</html>