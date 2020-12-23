<h2>Data Pembelian</h2>
<?php
session_start();
if(!isset($_SESSION['login'])) {
    header("location: login.php");
    exit;
}
?>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama pelanggan</th>
            <th>Tanggal</th>
            <th>Total</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $nomor=1; ?>
        <?php $ambil=$koneksi->query("SELECT * FROM pembelian JOIN pelanggan ON pembelian. 
        id_pelanggan=pelanggan.id_pelanggan");?>
        <?php while($pecah = $ambil->fetch_assoc()){?>
        <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $pecah['nama_pelanggan']; ?></td>
            <td><?php echo $pecah['tanggal_pembelian']; ?></td>
            <td><?php echo $pecah['total_pembelian']; ?></td>
            <td>
                <a href="admin.php?halaman=detail&id=<?php echo $pecah['id_pembelian'];?>"
                    class="btn btn-info">detail</a>
            </td>
        </tr>
        <?php $nomor++; ?>
        <?php } ?>
    </tbody>
</table>