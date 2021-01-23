<?php
include("koneksi.php");

if(!isset($_GET["code"])) {
    exit("Tidak bisa menemukan halamannya");
}

$code = $_GET["code"];

$getEmailQuery = mysqli_query($koneksi, "SELECT email FROM resetpassword WHERE code='$code'");
if(mysqli_num_rows($getEmailQuery) == 0) {
    exit("Tidak bisa menemukan halamannya");
}

?>
<form method="POST">
<?php include 'header.php'; ?>

<div class="container">

	<div class="row">
		<div class="col-lg-4 mx-auto">

			<div class="pt-4 pb-3">

			<div class="border">
				<center>
					<a href="resetpassword.php"><img src="gambar/sistem/maketan.png" style="width:auto; height:150px; margin-right:auto; margin-left:auto;"></a>
				</center>
				<br>


				<center><h5>Reset Password</h5></center>

                <?php
                if(isset($_POST["password"])) {
                    $pw = $_POST["password"];
                    $pw = md5($pw);
                
                    $row = mysqli_fetch_array($getEmailQuery);
                    $email = $row["email"];
                
                    $query = mysqli_query($koneksi, "UPDATE user SET user_password='$pw' WHERE user_email='$email'");
                
                    if($query) {
                        $query = mysqli_query($koneksi, "DELETE FROM resetpassword WHERE code='$code'");
                        echo'<div class="alert alert-success text-center">';
                        exit("Password telah di update");
                        echo'</div>';
                    }
                    else {
                        echo'<div class="alert alert-danger text-center">';
                        exit("Terdapat sesuatu kesalahan");
                        echo'</div>';
                    }
                
                }
                ?>
					
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control" required='required' name="password" placeholder="Masukkan password baru ..">
					</div>

					<input type="submit" class="btn btn-primary btn-block mt-4" name="submit" value="Perbarui password">

			</div>
			   </div>
			</div>

		</div>

	</div>

</div>

<?php include 'footer.php'; ?>
</form>