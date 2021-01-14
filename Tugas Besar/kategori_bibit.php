<?php
include 'koneksi.php'; 
session_start();
$semuadata=array();
// $ambil = $koneksi->query("SELECT * FROM tb_produk  JOIN kategori ON tb_produk.id_kategori=kategori.id_kategori"); 
// $ambil1 = "SELECT * FROM tb_produk WHERE id_kategori LIKE '1'";
// $query = mysqli_query($koneksi, $ambil1);
// while($pecah = $query->fetch_assoc())
// {
//     $semuadata[] = $pecah;
// }
// echo "<pre>";
// print_r ($semuadata);
// echo "</pre>";
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- My Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!-- My Css -->
    <!-- <link rel="stylesheet" href="style_dasboard.css"> -->

    <!-- My Css Card -->
    <link rel="stylesheet" href="style_Card_pencarian.css">
    <link rel="stylesheet" href="style_dasboard.css">
    <link rel="stylesheet" href="style.css">
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>MAKETAN</title>
</head>

<body style="background-color: #F3F3F3;">
    <!-- Navbar -->
    <header style="position: fixed;">
        <div class="container" style="margin-top: -20px;">
            <input type="checkbox" name="" id="check">

            <div class="logo-container">
                <a href="index.php" type="button" style="text-decoration:none">
                    <h3 class="logo">MAKE<span>TAN</span></h3>
                </a>
            </div>

            <div class="nav-btn">
                <div class="nav-links">
                    <form action="pencarian.php" method="get">
                        <div class="wrapper">
                            <div class="search-input">
                                <a href="" target="_blank" hidden></a>
                                <input type="text" class="form-control" name="keyword" placeholder="Cari Produk..">
                                <div class="autocom-box">
                                    <!-- here list are inserted from javascript -->
                                </div>
                                <div class="icon"><i class="fas fa-search"></i></div>
                            </div>
                        </div>
                    </form>
                    <ul style="padding-bottom: -20px;">
                        <li class="nav-link" style="--i: .6s">
                            <a href="kategori_pertanian.php">Pertanian</a>
                        </li>
                        <li class="nav-link" style="--i: .85s">
                            <a href="kategori_alat.php">Alat</a>
                        </li>
                        <li class="nav-link" style="--i: 1.1s">
                            <a href="kategori_pupuk.php">Pupuk</a>
                        </li>
                        <li class="nav-link" style="--i: 1.35s">
                            <a href="kategori_bibit.php">Bibit</a>
                        </li>
                        <li class="nav-link" style="--i: 1.8s">
                            <a href="kategori_obat.php" method="get" name="obat">Obat</a>
                        </li>
                    </ul>
                </div>
                <div class="login-navbar">
                    <?php if (isset($_SESSION['user_status'])):?>
                    <?php $id_user = $_SESSION['user_id'];
                    $s = mysqli_query($koneksi,"select * from user where user_id='$id_user'");
                    $saya = mysqli_fetch_assoc($s); ?>
                    <div class="nav_right">
                        <ul>
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" s
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="small"
                                        style="margin-right: -80px; font-size:1rem; font-weight: bold;"><?php echo $saya['user_nama']; ?></span>
                                    <img class="rounded-circle" src="gambar/user/<?php echo $saya['user_foto']; ?>">
                                </a>

                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="profil.php" data-toggle="modal"
                                        data-target="#profilModal">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a>
                                    <?php $sql = mysqli_query($koneksi, "SELECT * FROM buka_toko WHERE user_id ='$_SESSION[user_id]'");?>
                                    <?php $cek = mysqli_num_rows($sql); ?>
                                    <?php if(isset($_SESSION['user_id'])) { ?>
                                    <?php if ($cek > 0) { ?>
                                    <a class="dropdown-item" href="profil_toko.php">
                                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                        profil toko
                                    </a>
                                    <?php }else{ ?>
                                    <a class="dropdown-item" href="buka_toko2/buka_toko.php">
                                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                        buat toko
                                    </a>
                                    <?php } ?>
                                    <?php } ?>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <?php else: ?>

                <div class="log-sign" style="--i: 1.8s">
                    <a href="Login/login.php" class="btn transparent">Masuk</a>
                    <a href="Login/daftar.php" class="btn solid">Daftar</a>
                </div>
            </div>
        </div>
        <?php endif ?>
        <div class="hamburger-menu-container">
            <div class="hamburger-menu">
                <div></div>
            </div>
        </div>
        </div>
    </header>

    <style type="text/css">
    header .img-search {
        width: 18px;
    }

    header .wrap-search {
        position: relative;
        background-color: #ffffff;
        width: 100%;
        height: 40px;
        margin-top: 20px;
        margin-bottom: auto;
        border-radius: 20px;
    }

    header .container .nav-btn .nav-links .wrap-search .form-control {
        background-color: transparent;
        position: absolute;
        width: 100%;
        height: 100%;
        overflow: hidden;
        border: 1px solid #cdcdcd;
        z-index: 1;
        padding: 9px;
        display: flex;
        justify-content: center;
        align-items: center;
        padding-left: 20px;
    }

    header .wrap-search .form-control ::placeholder {
        color: #cdcdcd;
        font-size: 14px;
        padding-left: 10px;
    }

    header .wrap-search .form-control:focus {
        box-shadow: none;
        border: 1px solid #0673f0;
    }

    header .wrap-search .wrap-icon-search {
        background-color: #f3f4f5;
        position: absolute;
        right: 0;
        height: 100%;
        width: 4%;
    }

    header .wrap-search img {
        float: right;
        margin-right: 15px;
        margin-top: 10px;

    }
    </style>
    <!-- Akhir navbar -->


    <!-- Hasil kategori -->
    <div class="isi">
        <div class="wrapper">
            <div class="row" style="margin-top: 30px; width:80%; margin-right: auto; margin-left: auto; ">
                <?php 
          $ambil1 = "SELECT * FROM tb_produk WHERE id_kategori LIKE '5'"; 
          $query = mysqli_query($koneksi, $ambil1);?>
                <?php 
            // pagination
            $batas = 20;
            $halaman = isset($_GET["halaman"]) ? $_GET["halaman"]: 1;
            $halaman_awal = $halaman>1 ? ($halaman*$batas) - $batas : 0;
            
            $next = $halaman  + 1;
            $previous = $halaman - 1;

            $total_data = mysqli_num_rows($query);
            $total_halaman = ceil($total_data / $batas);

            $sql = "SELECT * FROM tb_produk  WHERE id_kategori LIKE '5' LIMIT $halaman_awal, $batas";
            $query = mysqli_query($koneksi, $sql);
            $nomor = $halaman_awal + 1;

            ?>
                <?php
            // ($semuadata as $key => $value):
            while($kategori = $query->fetch_assoc()) {
            ?>

                <div class="card">
                    <img src="produk2/produk2/assets/img/produk/<?php echo $kategori['gbr_produk'] ?>" alt=""
                        class="img-responsive">
                    <div class="content">
                        <div class="row">
                            <div class="details">
                                <span><?php echo substr($kategori['nama_produk'], 0, 13)?></span>
                            </div>
                        </div>
                        <div><span><?php echo substr($kategori['map_link'], 0, 13)?></span></div>
                        <div class="price">Rp.<?php echo ($kategori['harga'])?></div>
                        <hr id="hrdown" style="height:1px;border:none;color:#333;background-color:#333;">
                        <div class="buttons">
                            <button><a href="https://bit.ly/3ooyooh"
                                    style="text-decoration:none; color:white;">Chat</a></button>
                            <button><a href="detail.php?id=<?php echo $kategori['id_produk']?>"
                                    style="text-decoration:none; color:white;">Detail</a></button>
                        </div>
                    </div>
                </div>
                <?php 
              }
              // endforeach ?>
            </div>
        </div>
    </div>

    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-md-center">
            <?php 
          if($halaman == 1){

            echo "<li class='page-item disabled '><a class='page-link' href='#'>Previous</a></li>";

          }else{
            echo "<li class='page-item'><a class='page-link' href='kategori_pertanian.php?halaman=$previous'>Previous</a></li>";
          }
        ?>
            <?php 
          for($i=1; $i<=$total_halaman; $i++){
            echo "<li class='page-item'><a class='page-link' href='kategori_pertanian.php?halaman=$i'>$i</a></li>";
          }
        ?>
            <?php 
        if($halaman == $total_halaman){

          echo "<li class='page-item disabled '><a class='page-link' href='#'>next</a></li>";

        }else{
          echo "<li class='page-item'><a class='page-link' href='kategori_pertanian.php?halaman=$next'>next</a></li>";
        }
        ?>
        </ul>
    </nav>
    </div>
    </div>

    <!-- Akhir kategori -->

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>








    <!-- footer -->
    <?php include 'footer.php'?>
    <!-- // footer -->

    <!-- Modal Pencarian -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
        style="top:30px;">
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








    <!-- My JS -->
    <!-- <script src="script_Card.js"></script> -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    < src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></>
    < src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></>
    < src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></>
    -->
</body>

</html>