<?php
    include 'koneksi.php';
    $query = $db->prepare("SELECT * FROM tbl_siswa");
    $query->execute();
    $data = $query->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>CRUD PDO THE GIFTED </title>
</head>
<body bgcolor="#DEB887">
<h2><strong><p align="center">Data Siswa The Gifted</p></strong></h2>
<table width="807" border="1" cellpadding="0" cellspacing="0" align="center">
  <tr>
    <td width="115" height="30" align="center" valign="middle" bgcolor="#8FBC8F">NIS</td>
    <td width="175" align="center" valign="middle" bgcolor="#8FBC8F">Nama</td>
    <td width="250" align="center" valign="middle" bgcolor="#8FBC8F">Alamat</td>
    <td width="100" align="center" valign="middle" bgcolor="#8FBC8F">Kelas</td>
    <td width="135" align="center" valign="middle" bgcolor="#8FBC8F"><a href="create.php">TAMBAH</a></td></tr>
            <?php foreach ($data as $value): ?>
                <tr>
                    <td p align="center" bgcolor="#E9967A"><?php echo $value['nis'] ?></td>
                    <td p align="left" bgcolor="#E9967A"><?php echo $value['nama'] ?></td>
                    <td p align="left" bgcolor="#E9967A"><?php echo $value['alamat'] ?></td>
                    <td p align="center" bgcolor="#E9967A"><?php echo $value['kelas'] ?></td>
                    <td p align="center" bgcolor="#E9967A">
                        <a href="edit.php?nis=<?php echo $value['nis']?>">Edit</a>
                        <a href="hapus.php?nis=<?php echo $value['nis']?>">Hapus</a>
                    </td>
                </tr>
 </td>
  </tr>
<?php endforeach; ?>
</table>
<p align="center"><a href=http://www.thegifted.com>www.thegifted.com</a></p>
</body>
</html>