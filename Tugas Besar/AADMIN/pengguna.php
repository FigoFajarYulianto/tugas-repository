<h2 style="margin-top:-18px; border-bottom: 3px solid;">DATA PENGGUNA</h2>
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


//$batas = 6;
//$ambil= mysqli_query($koneksi, "SELECT * FROM user");
//$jum = mysqli_num_rows($ambil);

//$halaman = ceil($jum / $batas);

//$page =  (isset($_GET["page"]))  ? $_GET["page"] : 1;


//$posisi = ( $page - 1 ) * $batas;



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
     
        
        
           $ambil= mysqli_query($koneksi, "SELECT * FROM user");
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
                <a href="admin.php?halaman=pengguna&id=<?php echo $pecah['user_id']; ?>" class="btn btn-danger"
                    style="left:20px">HAPUS</a>
            </td>
        </tr>
        <?php $nomor++; ?>
        <?php } ?>
    </tbody>
</table>
<!-- navigasi -->

<div class="paging">
    <?php
//for($x=1; $x<=$halaman; $x++){
    ?>
    <!--    <a <?php // if($x==$page){echo"class='active'";} ?> href="?pengguna.php= <?php// echo $x; ?>">
        <?php //echo $x; ?>
    </a>
    <?php
  //  }
?>


</div>