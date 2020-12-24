<h2>Data Pengguna</h2>
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
            <th>Email</th>
            <th>Nama Pengguna</th>
            <th>Foto Prngguna</th>
            <th>Aksi</th>

        </tr>
    </thead>
    <tbody>
        <?php $nomor=1; ?>
        <?php $ambil=$koneksi->query("SELECT * FROM user"); ?>
        <?php while($pecah=$ambil->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $pecah['user_email']; ?></td>
            <td><?php echo $pecah['user_nama']; ?></td>
            <td>
                <img src="../gambar/user/<?php echo $pecah['user_foto'];?>" width="100">
            </td>
            <td>
                <a href="admin.php?halamanhapuspengguna&id=<?php echo $pecah['user_id']; ?>" class="btn btn-danger"
                    style="left:20px">hapus</a>
            </td>
        </tr>
        <?php $nomor++; ?>
        <?php } ?>
    </tbody>
</table>