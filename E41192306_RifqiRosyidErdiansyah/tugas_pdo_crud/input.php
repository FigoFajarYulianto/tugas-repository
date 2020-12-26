<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Baru</title>
    <link rel="stylesheet" type="text/css" href="css/css_tambahan.css">
</head>

<body>
<div class="judul">
        <h1>Menampilkan Data Dari Mahasiswa</h1>
        <a href="index.php" class="button"> Lihat Semua Data</a>
	</div>

    <br>

    

    <br>
    <h3 style="position: relative; left: 570px; bottom: 20px;">Input Data Baru</h3>
    <form action="input-aksi.php" method="POST">
        <table class="border" style="position: relative; left: 410px; bottom: 20px;">
            <tr>
                <td>Nim</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td><input type="text" name="jurusan"></td>
            </tr>
            <tr>
                <td>Prodi</td>
                <td><input type="text" name="prodi"></td>
            </tr>
            <tr>
                <td></td>
                <td style="position: relative; left: 50px; bottom: -20px;"><input type="submit" value="simpan"></td>
            </tr>
        </table>
    </form>
</body>

</html>