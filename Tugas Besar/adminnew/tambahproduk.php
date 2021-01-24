<h2>Tambah Produk</h2>
<?php
$koneksi = new mysqli("localhost", "root", "", "maketan");

$datakategori=array();
$ambil= $koneksi->query("SELECT * FROM kategori");
while($tiap=$ambil->fetch_assoc())
{
	$datakategori[]=$tiap;
}

?>
<?php 
$datasatuan=array();
$satuan= $koneksi->query("SELECT * FROM satuan");
while($satuanbarang=$satuan->fetch_assoc())
{
	$datasatuan[]=$satuanbarang;
}
?>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>nama</label>
        <input type="text" class="form-control" name="nama" required>
    </div>
    <label>Nama Kategori</label>
    <select class="form-control" name="id_kategori" required>
        <option value="">Pilih Kategori</option>
        <?php foreach ($datakategori as $key => $value): ?>

        <option value="<?php echo $value["id_kategori"] ?>"><?php echo $value["nama_kategori"] ?></option>

        <?php endforeach ?>
    </select>

    <div class="form-group">
        <label>Deskripsi</label>
        <textarea class="form-control" name="deskripsi" id="deskripsi" rows="10" required></textarea>
        <script>
        CKEDITOR.replace('deskripsi');
        </script>
    </div>
    <div class="form-group">
        <label>Harga (Rp)</label>
        <input type="number" class="form-control" name="harga" min="1" max="99999999999" required>
    </div>
    <label>Pilih Satuan</label>
    <select class="form-control" name="id_satuan" required>
        <option value="">Pilih Satuan</option>
        <?php foreach ($datasatuan as $key => $value): ?>

        <option value="<?php echo $value["id_satuan"] ?>"><?php echo $value["nama_satuan"] ?></option>

        <?php endforeach ?>
    </select>
    <div class="form-group">
        <label>Lokasi </label>
        <input type="text" class="form-control" name="map" required>
    </div>
    <div class="form-group">
        <label>Foto</label>
        <input type="file" class="form-control" name="foto" required>
    </div>

    <button class="btn btn-primary" name="save">simpan</button>
</form>
<?php
		if (isset ($_POST['save']))
		{
			$namanamafoto = $_FILES['foto']['name'];
			$lokasilokasifoto =$_FILES['foto']['tmp_name'];
			move_uploaded_file($lokasilokasifoto, "../produk2/produk2/assets/img/produk/".$namanamafoto);
			$koneksi->query("INSERT INTO tb_produk
				(nama_produk,id_kategori, deskripsi_produk,harga,id_satuan,map_link, gbr_produk)
				VALUES('$_POST[nama]','$_POST[id_kategori]','$_POST[deskripsi]','$_POST[harga]','$_POST[id_satuan]','$_POST[map]','$namanamafoto')");
			
		
		
	echo "<div class='alert alert-info'>DATA TERSIMPAN</div>";
    echo "<meta http-equiv='refresh' content='1;url=admin.php?halaman=produk'>";

	
	}

		?>