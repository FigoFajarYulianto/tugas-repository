<?php include 'header.php'; ?>

<div class="container">

	<div class="row">
		<div class="col-lg-4 mx-auto">

			<div class="pt-4 pb-3">

			<div class="border">
				<center>
					<a href="login.php"><img src="gambar/sistem/maketan.png" style="width:auto; height:150px; margin-right:auto; margin-left:auto;"></a>
				</center>
				<br>


				<center><h5>Login</h5></center>

				<?php 
				if(isset($_GET['alert'])){
					if($_GET['alert'] == "registered"){
						?>
						<div class="alert alert-success text-center">
							<span class="font-weight-bold">Anda berhasil mendaftar.</span>
							<br>
							<small class="font-weight-light">Selanjutnya silahkan login.</small>
						</div>
						<?php
					}elseif($_GET['alert'] == "logout"){
						?>
						<div class="alert alert-success text-center">
							<span class="font-weight-bold">Anda telah logout.</span>
						</div>
						<?php
					}elseif($_GET['alert'] == "login-dulu"){
						?>
						<div class="alert alert-warning text-center font-weight-bold">Silahkan login untuk melanjutkan.</div>
						<?php
					}elseif($_GET['alert'] == "gagal"){
						?>
						<div class="alert alert-danger text-center">
							<span class="font-weight-bold">Login gagal !</span>
							<br>
							<small class="font-weight-light">Email & password tidak sesuai.</small>
						</div>
						<?php
					}
				}
				?>

				<form action="login_aksi.php" method="post">
					
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" class="form-control" required='required' autocomplete="off" name="user" placeholder="Masukkan email ..">
					</div>

					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control" required='required' name="password" placeholder="Masukkan password ..">
					</div>

					<input type="submit" class="btn btn-primary btn-block mt-4" name="login" value="LOGIN">

					<p class="text-center mt-3">
						Belum punya akun? 
						<br>
						<small><a href="daftar.php">Daftar Sekarang</a></small>
					</p>

				</form>

			</div>
			   </div>
			</div>

		</div>

	</div>

</div>

<!-- Css for background image information -->
<style>
.button {
 background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  font-family: "Fantasy";
}
</style>
<!-- End of background image information -->

<!-- Button for background image information -->
<div class="button">
<a type="button">Diambil oleh Dong Zhang</a>
<div>
<!-- End of button for background image information -->

<?php include 'footer.php'; ?>