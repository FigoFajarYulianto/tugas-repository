<?php
//skrip koneksi
session_start();
$koneksi = new mysqli("localhost", "root", "", "project_chat");
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <!-- My Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <!-- My Css -->
  <link rel="stylesheet" href="style_dasboard.css">

  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <title>MAKETAN</title>
</head>

<body>
  <!-- Navbar -->
  <header>
      <class class="item-header-1 d-flex flex-column">
        <div class="d-flex justify-content-between ">
          <a class="navbar-brand" href="Dasboard.php">MAKETAN</a>
          <div class="wrap-search">
            <input type="text" class="form-control" placeholder="cari barang" data-toggle="modal" data-target="#exampleModal">
            <div class="wrap-icon-search">
              <img class="img-search" src="logo/search.png" alt="">
            </div>
          </div>
          <div class="login-navbar">
            <?php if (isset($_SESSION['user_status'])):?>
              <a href="logout.php">logout</a>
              <!-- profil beranda -->
              <div class="profil-pengunjung">
                <nav>
                  <div class="drop-btn">
                    Drop down <span class="fas fa-caret-down"></span>
                  </div>
                  <div class="wrapper">
                    <ul class="menu-bar">
                      <li><a href="#">
                        <div class="icon"><span class="fas fa-home"></span></div>
                        Home
                      </a></li>
                      <li><a href="#">
                        <div class="icon"><span class="fas fa-cog"></span></div>
                        Setting & privacy <i class="fas fa-angle-right"></i>
                      </a></li>
                      <li><a href="#">
                        <div class="icon"><span class="fas fa-question-circle"></span></div>
                        Help & support <i class="fas fa-angle-right"></i>
                      </a></li>
                      <li><a href="#">
                        <div class="icon"><span class="fas fa-user"></span></div>
                        About us 
                      </a></li>
                      <li><a href="#">
                        <div class="icon"><span class="fas fa-comment-alt"></span></div>
                        feedback
                      </a></li>
                    </ul>
                    <!-- setting & privacy Menu-item -->
                    <ul class="setting-drop">
                      <li class="arrow"><span class="fas fa-arrow-left"></span>setting & privacy</li>
                      <li><a href="#">
                        <div class="icon"><span class="fas fa-home"></span></div>
                        Personal info 
                      </a></li>
                      <li><a href="#">
                        <div class="icon"><span class="fas fa-lock"></span></div>
                        Password </a></li>
                      <li><a href="#">
                        <div class="icon"><span class="fas fa-address-book"></span></div>
                        activity</a></li>
                      <li><a href="#">
                        <div class="icon"><span class="fas fa-globe-asia"></span></div>
                        language</a></li>
                      <li><a href="#">
                        <div class="icon"><span class="fas fa-sign-out-alt"></span></div>
                        logout</a></li>
                    </ul>

                    <!-- help & support Menu-item -->
                    <ul class="setting-drop">
                      <li class="arrow"><span class="fas fa-arrow-left"></span>setting & privacy</li>
                      <li><a href="#">
                        <div class="icon"><span class="fas fa-question-circle"></span></div>
                        Help centre </a></li>
                      <li><a href="#">
                        <div class="icon"><span class="fas fa-envelope"></span></div>
                        Support inbox</a></li>
                      <li><a href="#">
                        <div class="icon"><span class="fas fa-comment-alt"></span></div>
                        Send feedback</a></li>
                      <li><a href="#">
                        <div class="icon"><span class="fas fa-globe-asia"></span></div>
                        language</a></li>
                    </ul>
                  </div>
                </nav>
              </div>
            <?php else: ?>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <a href="Login/login.php" class="btn btn-primary" role="button" data-bs-toggle="button">Masuk</a>
              <a href="Login/daftar.php" class="btn btn-primary" role="button" data-bs-toggle="button">Daftar</a>
            </div>
            <?php endif ?>
          </div>
        </div>

        <div class="d-flex justify-content-around mt-2" style="max-width: 100%;">
          <span class"mr-3">
            <h6>Pertanian</h6>
          </span>
          <span class"mr-3">
            <h6>Bibit</h6>
          </span>
          <span class"mr-3">
            <h6>Obat</h6>
          </span>
          <span class"mr-3">
            <h6>Alat</h6>
          </span>
          <span class"mr-3">
            <h6>Perkebunan</h6>
          </span>
        </div>
      </class>
  </header>
  <!-- Akhir navbar -->

  <!-- Carousel -->
  <div class="isi">
    <div id="carouselExampleIndicators" class="carousel slide d-flex flex-column align-items-center" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/img_iklan/Gambar iklan 1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/img_iklan/Gambar iklan 1.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!-- akhir carousel -->

    <!-- Kategori Pilihan -->
    <div class="pilihan-barang">
      <div class="wrapper">
      <?php  $ambil = $koneksi->query("SELECT * FROM produk");?>
        <div class="card">
          <img src="img/img_katalog/pacul.jpg">
          <div class="content">
            <div class="row">
              <div class="details">
                <span>pupuk</span>
                <p>pupuk bergizi</p>
              </div>
              <div class="price">Rp 30.000</div>
            </div>
            <div class="buttons">
              <button>chat</button>
              <button>maps</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row mx-0 mt-5 justify-content-center">
      <button class="btn btn-green"> Tampilkan Lebih banyak</button>
    </div>
    </div>
  </div>

  <!-- footer -->
  <div class="footer-ku">
    <div class="card-footer text-center">
      <div class="card-header" style="font-size: 42px;font-family: Roboto; font-weight: bold; padding: 4px 4px;">
        Follow us
      </div>
      <div class="card-body">
        <a href=" #" class="btn d-flex justify-content-center">
          <img src=" logo/twitter.png" alt="">
          <img src="logo/instagram.png" alt="">
          <img src="logo/facebook.png" alt="">
        </a>
      </div>
    </div>
  </div>
  <!-- penutup footer -->

  <!-- Modal Pencarian -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="top:30px;">
    <div class="modal-dialog">
      <div class="modal-content m-c-head">
        <div class="d-flex justify-content-between">
          <span class="font-weight-bold title"> Pencarian Terakhir</span>
          <span class="font-weight-bold " style="color: #d50000;"> Hapus Semua</span>
        </div>
        <span class="ml-2 mt-2" style="font-size: 14px;">Pupuk</span>
        <span class="ml-2 mt-2" style="font-size: 14px;">Alat Pertanian</span>
      </div>
    </div>
  </div>
  <!-- Penutup Modal Pencarian -->

  <!-- Css Chat -->
  <style>
  .button_message .btn-secondary {
  background-color: rgb(85, 85, 85);
  color: white;
  padding: 5px 0px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
  border-radius: 12px;
  font-size: 30px;
  font-variant: small-caps;
  }
  </style>

  <!-- Chat -->
  <div class="button_message">
    <a class="btn btn-secondary" href="user/index.php" role="button">Chat</a>
  </div>







  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    < src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></>
    < src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></>
    < src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></>
    -->
</body>

</html>