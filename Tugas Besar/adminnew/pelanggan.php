<h2 style="margin-top:-18px; border-bottom: 3px solid;">Data Pelanggan</h2>

<table class="table table-bordered" id="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Email</th>
            <th>Nama Pengguna</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $nomor=1;?>
        <?php $ambil= $koneksi->query("SELECT * FROM user");?>
        <?php while($pecah=$ambil->fetch_assoc()){?>
        <tr>
            <td><?php echo $nomor;?></td>
            <td><?php echo $pecah['user_email']?></td>
            <td><?php echo $pecah['user_nama']?></td>
            <td>
                <img src="../gambar/user/<?php echo $pecah['user_foto'];?>" width="100">
            </td>
            <td>
                <a href="admin.php?halaman=hapuspelanggan&id=<?php echo $pecah['user_id'] ?>"
                    class="btn btn-danger">Hapus</a>

            </td>
        </tr>
        <?php $nomor++;?>
        <?php }?>
    </tbody>
</table>