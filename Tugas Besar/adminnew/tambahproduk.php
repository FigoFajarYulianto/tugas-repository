<h2>Tambah Produk</h2>
<?php
$koneksi = new mysqli("localhost", "root", "", "project_chat");
?>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>nama</label>
        <input type="text" class="form-control" name="nama">
    </div>
    <div class="form-group">
        <label>kategori</label>
        <input type="text" class="form-control" name="kategori">
    </div>
    <div class="form-group">
        <label>Deskripsi</label>
        <textarea class="form-control" name="deskripsi" id="deskripsi" rows="10"></textarea>
        <script>
        CKEDITOR.replace('deskripsi');
        </script>
    </div>
    <div class="form-group">
        <label>Harga (Rp)</label>
        <input type="number" class="form-control" name="harga">
    </div>
    <div class="form-group">
        <label>Lokasi </label>
        <input type="text" class="form-control" name="map">
    </div>
    <div class="form-group">
        <label>Foto</label>
        <input type="file" class="form-control" name="foto">
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
				(nama_produk,kategori, deskripsi_produk,harga,map_link, gbr_produk)
				VALUES('$_POST[nama]','$_POST[kategori]','$_POST[deskripsi]','$_POST[harga]','$_POST[map]','$namanamafoto')");
			
		
		
	echo "<div class='alert alert-info'>DATA TERSIMPAN</div>";
    echo "<meta http-equiv='refresh' content='1;url=admin.php?halaman=produk'>";

	
	}

		?>