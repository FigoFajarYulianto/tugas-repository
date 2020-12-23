<h2>Data Toko</h2>
<?php

if(!isset($_SESSION['login'])) {
    header("location: login.php");
    exit;
}
?>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Toko</th>
            <th>Link Toko</th>
            <th>Kota</th>
            <th>Kode Pos</th>
            <th>Link Map</th>
            <th>Aksi</th>

        </tr>
    </thead>
    <tbody>
        <?php $nomor=1; ?>
        <?php $ambil=$koneksi->query("SELECT * FROM buka_toko"); ?>
        <?php while($pecah=$ambil->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $pecah['nama_toko']; ?></td>
            <td><?php echo $pecah['link_toko']; ?></td>
            <td><?php echo $pecah['kota']; ?></td>
            <td><?php echo $pecah['kode_pos']; ?></td>
            <td><?php echo $pecah['link map']; ?></td>
            <td>
                <a href="" class="btn btn-danger">hapus</a>
            </td>
        </tr>
        <?php $nomor++; ?>
        <?php } ?>
    </tbody>
</table>