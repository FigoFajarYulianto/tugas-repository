<h2 style="margin-top:-18px; border-bottom: 3px solid;">DATA TOKO</h2>





<table class="table table-bordered">

    <thead>
        <tr>
            <th>NO</th>
            <th>NAMA TOKO</th>
            <th>LINK TOKO</th>
            <th>KOTA</th>
            <th>KODE POS</th>
            <th>LINK MAP</th>
            <th>AKSI</th>

        </tr>
    </thead>

    <tbody>

        <?php $nomor=1;?>
        <?php $ambil=$koneksi->query("SELECT * FROM buka_toko"); ?>
        <?php while($pecah=$ambil->fetch_assoc()){?>





        <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $pecah['nama_toko']; ?></td>
            <td><?php echo $pecah['link_toko']; ?></td>
            <td><?php echo $pecah['kota']; ?></td>
            <td><?php echo $pecah['kode_pos']; ?></td>
            <td><?php echo $pecah['link_map']; ?></td>
            <td>
                <a href="admin.php?halaman=hapustoko&id=<?php echo $pecah['id'];?>" class=" btn btn-danger">hapus</a>
            </td>
        </tr>
        <?php $nomor++; ?>
        <?php }?>


    </tbody>
</table>