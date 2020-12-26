<h2 style="margin-top:-18px; border-bottom: 3px solid;">DATA PRODUK</h2>
<?php

if(!isset($_SESSION['login'])) {
    header("location: login.php");
    exit;
}
?>


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
       // $batas = 3;
        //$ambil= mysqli_query($koneksi, "SELECT * FROM tb_produk");
        //$jum = mysqli_num_rows($ambil);
        
       // $halaman = ceil($jum / $batas);
        
        ///$page = ( isset($_GET['page']) ) ? $_GET['page'] : 1;
        
        
       // $posisi = ( $batas * $page ) - $batas;
        


        $ambil=$koneksi->query("SELECT * FROM tb_produk"); ?>
        <?php while ($pecah = $ambil->fetch_assoc()) {?>
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
    <?php

//for($x=1; $x<=$halaman; $x++){
    ?>
    <!--
    <a href="produk.php"><?php //echo $x; ?></a>
    <?php// echo $x; ?>
    <?php// } ?>


</div>