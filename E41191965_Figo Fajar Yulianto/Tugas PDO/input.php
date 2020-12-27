<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat CRUD dengan PHP dan MYSQL - Menampilkan dari data Database</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="judul">
        <h1>TUGAS PDO Membuat CRUD dengan PHP dan Mysql</h1>
        <h2>Menampilkan dari database</h2>
    </div>

    <h3 style="text-align: center;">INPUT DATA BARU</h3>
    <form action="input-aksi.php" method="POST">
        <a class="l" href="index.php">Lihat Semua Data</a>

        <table border="1" class="table table-bordered">
            <tr>
                <td>Nama</td>
                <td><input type=" text" name="nama">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td><input type="text" name="pekerjaan"></td>
            </tr>
        </table>
        <div>
            <input type="submit" class="btn" value="simpan">
        </div>

    </form>

</body>

</html>