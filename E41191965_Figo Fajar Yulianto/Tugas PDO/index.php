<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> TUGAS POD Membuat CRUD dengan PHP dan Mysql - Menampilkan data dari Database</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="judul">
        <h1> TUGAS PDO Membuat CRUD dengan PHP dan Mysql</h1>
        <h2>Menampilkan data dari Database</h2>
    </div>
    <?php
    if (isset($_GET['pesan'])) {
        $pesan = $_GET['pesan'];
        if ($pesan == "input") {
            echo "Data berhasil di input";
        }elseif ($pesan == "update") {
            echo "Data berhasil di update";
        }elseif ($pesan == "hapus"){
            echo "Data berhasil di hapus";
        }
        
        
    }

    ?>


    <div class="teks-able">
        <h3 style="text-align: center;">DATA USER</h3>
        <a class=" b" href="input.php"> Tambah Data Baru</a>
        <table border="1" class="table table-bordered" <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Opsi</th>
            <th>Aksi</th>
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
                    <a href="edit.php?id=<?php echo $data['id']; ?>" class="edit">Edit</a><br><br>

                    <a href="hapus.php?id=<?php echo $data['id']; ?>" class="hapus">Hapus</a>
                </td>
            </tr>
            <?php  } ?>


        </table>
    </div>
</body>

</html>