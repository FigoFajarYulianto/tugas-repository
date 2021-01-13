<h2>Ubah Produk</h2>
<?php
$koneksi = new mysqli("localhost", "root", "", "project_chat");

$ambil = $koneksi->query("SELECT * FROM tb_produk WHERE id_produk= '$_GET[id]'");
$pecah= $ambil->fetch_assoc();

$datakategori=array();
$ambil=$koneksi->query("SELECT * FROM kategori");
while($tiap=$ambil->fetch_assoc())
{
    $datakategori[]=$tiap;
}
?>

<form method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama Produk</label>
        <input type="text" name="nama" class="form-control" value="<?php echo $pecah['nama_produk']; ?>">
    </div>
    <div class="form-group">
        <label>Kategori</label>
        <select class="form-control" name="id_kategori">
            <option value="">Pilih Kategori</option>
            <?php foreach ($datakategori as $key => $value): ?>

            <option value="<?php echo $value["id_kategori"] ?>"
                <?php if($pecah["id_kategori"]==$value["id_kategori"]) {echo "selected";}?>>
                <?php echo $value["nama_kategori"] ?></option>

            <?php endforeach ?>
        </select>
    </div>

    <div class="form-group">
        <label>Harga Rp</label>
        <input type="text" name="harga_produk" class="form-control" value="<?php echo $pecah['harga']; ?>">
    </div>
    <div class="form-group">
        <label>Map Lokasi Toko</label>
        <input type="text" name="map" class="form-control" value="<?php echo $pecah['map_link']; ?>">
    </div>
    <div class="form-group">
        <img src="../produk2/produk2/assets/img/produk/<?php echo $pecah['gbr_produk'] ?>" width="100">
    </div>
    <div class="form-group">
        <label>Ganti Foto</label>
        <input type="file" name="foto" class="form-control">
    </div>
    <div class="form-group">
        <label>Deskripsi</label>
        <textarea class="form-control" name="deskripsi" id="deskripsi"
            rows="10"> <?php echo $pecah['deskripsi_produk'];?></textarea>
        <script>
        CKEDITOR.replace('deskripsi');
        </script>
    </div>
    <button class="btn btn-primary" name="ubah">Ubah</button>
</form>

<?php
if (isset($_POST['ubah']))
{
    $namafoto=$_FILES['foto'] ['name']; 
    $lokasifoto = $_FILES['foto'] ['tmp_name'];
    //jika foto dirubah
    if (!empty($lokasifoto))
    {
        move_uploaded_file($lokasifoto, "../produk2/produk2/assets/img/produk/$namafoto");

        $koneksi->query("UPDATE tb_produk SET nama_produk='$_POST[nama]',
        id_kategori='$_POST[id_kategori]',harga='$_POST[harga_produk]',map_link='$_POST[map]',
        gbr_produk='$namafoto',deskripsi_produk='$_POST[deskripsi]'
        WHERE id_produk='$_GET[id]'");
    }
    else
    {
        $koneksi->query("UPDATE tb_produk SET nama_produk='$_POST[nama]',
        id_kategori='$_POST[id_kategori]',harga='$_POST[harga_produk]',map_link='$_POST[map]',
        deskripsi_produk='$_POST[deskripsi]' WHERE id_produk='$_GET[id]'");
    }
    echo "<script>alert('data produk telah diubah' );</script>";
    echo "<script>location='admin.php?halaman=produk';</script>";

}
?>