<?php 
$koneksi = new mysqli("localhost", "root", "", "project_chat");


$keyword = $_GET['keyword'];


$semuadata = array();
$ambil = $koneksi->query("SELECT * FROM tb_produk WHERE nama_produk LIKE '%$keyword%'
OR deskripsi_produk LIKE '%$keyword%'"); 
while($pecah = $ambil->fetch_assoc());
{
    $semuadata[] = $pecah;
} 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pencarian</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
</head>

<body>
    <?php include 'produk.php'; ?>
    <div class="container">
        < <h3>Hasil Pencarian : <?php echo $keyword ?></h3>

            <?php if(empty($semuadata)): ?>
            <div class="alert alert-danger"><?php echo $keyword ?> Pencarian Tidak Ditemukan</div>
            <?php endif ?>

            <div class="row">

                <?php foreach ($semuadata as $keyword => $value) : ?>

                <div class="col-md-3">
                    <div class="thumbnail">
                        <img src="foto_produk/<?php echo $value["foto_produk"] ?>" alt="" class=" img-responsive">
                        <div class="caption">
                            <h3><?php echo $value["nama_produk"] ?></h3>
                            <h3><?php echo $value["kategori"] ?></h3>
                            <h3>rp.<?php echo number_format( $value["harga_produk"]) ?></h3>

                        </div>
                    </div>

                </div>
                <?php endforeach ?>
            </div>
    </div>

</body>

</html>