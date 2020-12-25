<h2>Data Pengguna</h2>
<?php

if(!isset($_SESSION['login'])) {
    header("location: login.php");
    exit;
}


//konfigurasi paage


/*$jumlahData = count (query("SELECT * FROM user"));

$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);

$halamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;

$awalData = ( $jumlahDataPerHalaman * $halamanAktif ) - $jumlahDataPerHalaman;*/





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

        <?php 
        $jumlahDataPerHalaman = 3;
        $result= mysqli_query($koneksi,"SELECT * FROM user");
        $jumlahData = mysqli_num_rows($result);

        $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
        
        $halamanAktif= ( isset($_GET["Halaman"]) ) ? $_GET["Halaman"] : 1;
        

        $Data = ( $jumlahDataPerHalaman * $halamanAktif ) - $jumlahDataPerHalaman;

        
        
           $ambil=$koneksi->query("SELECT * FROM user LIMIT $Data, $jumlahDataPerHalaman");
        ?>
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
<!-- navigasi -->


<?php if( $halamanAktif > 1) : ?>
<a href="?Halaman=<?= $halamanAktif - 1; ?>">&laquo;</a>
<?php endif; ?>

<?php for( $i = 1; $i <= $jumlahHalaman; $i++) : ?>
<?php if( $i == $halamanAktif) :  ?>
<a href="?Halaman=<?= $i; ?>" style="font-weight:bold; color: red;"><?= $i; ?></a>
<?php else : ?>
<a href="?Halaman=<?= $i; ?>"><?= $i; ?></a>

<?php endif; ?>
<?php endfor; ?>

<?php if($halamanAktif < $jumlahHalaman) :?>
<a href="?Halaman=<?= $halamanAktif + 1; ?>">&raquo;</a>
<?php endif; ?>