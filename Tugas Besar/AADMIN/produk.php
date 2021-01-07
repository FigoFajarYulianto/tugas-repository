<h2 style="margin-top:-18px; border-bottom: 3px solid;">DATA PRODUK</h2>
<?php
$koneksi = new mysqli("localhost", "root", "", "project_chat");

if(!isset($_SESSION['login'])) {
    header("location: login.php");
    exit;
}
?>

<div style="margin-bottom: 15px;" align="right">
    <form action="" method="POST" class="navbar-form navbar-right">
        <input type="text" class="form-control" name="inputan_pencarian" placeholder="Nama produk..."
            style="width: 200px; padding:5px;" />
        <input type="submit" name="cari_produk" value="cari" style="padding: 3px;" </form>
</div>


<table class="table table-bordered">
    <thead>
        <tr>
            <th>NO</th>
            <th>NAMA PRODUK</th>
            <th>KATEGORI</th>
            <th>DESKRIPSI</th>
            <th>HARGA</th>
            <th>MAP LINK</th>
            <th>GAMBAR</th>
            <th>AKSI</th>

        </tr>
    </thead>
    <tbody>
        <?php $nomor=1; ?>
        <?php 
        $inputan_pencarian = @$_POST['inputan pencarian'];
        $cari_produk = @$_POST['cari_produk'];
        if($cari_produk){
            if($inputan_pencarian != ""){   
            $ambil= mysqli_query($koneksi," SELECT * FROM tb_produk where nama_produk like '%$inputan_pencarian%' or type like '%$inputan_pencarian%' ") or die (mysql_error());
            } else {
                $ambil= mysqli_query((" SELECT * FROM tb_produk") or die (mysqli_error()));
            }
        } else {
          $ambil= mysqli_query((" SELECT * FROM tb_produk") or die (mysqli_error())); 
        }
        while ($data = mysqli_fetch_array($ambil)) { 
        ?>
        <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $pecah['nama_produk'];?></td>
            <td><?php echo $pecah['kategori'];?></td>
            <td><?php echo $pecah['deskripsi_produk'];?></td>
            <td><?php echo $pecah['harga'];?></td>
            <td><?php echo $pecah['map_link'];?></td>
            <td>
                <img src="../produk2/assets/img/produk/<?php echo $pecah['gbr_produk'];?>" width="100">
            </td>
            <td>

                <a href="admin.php?halaman=hapusproduk&id=<?php echo $pecah['id_produk'];?>" class="btn-danger btn"
                    style="font-size: 1.5rem;">Hapus</a>
                <a href="admin.php?halaman=ubahproduk&id=<?php echo $pecah['id_produk'];?>" class=" btn btn-warning"
                    style="font-size: 1.5rem; margin-top:15px; padding-right:20px;">Ubah</a>
            </td>
        </tr>
        <?php $nomor++; ?>
        <?php } ?>
    </tbody>

</table>

<div class="paging">