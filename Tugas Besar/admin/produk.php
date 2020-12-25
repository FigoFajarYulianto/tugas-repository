<h2>Data Produk</h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Kategori</th>
            <th>Deskripsi Produk</th>
            <th>Harga</th>
            <th>Map_Link</th>
            <th>Gambar</th>
            <th>aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $nomor=1; ?>
        <?php $ambil=$koneksi->query("SELECT * FROM tb_produk"); ?>
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