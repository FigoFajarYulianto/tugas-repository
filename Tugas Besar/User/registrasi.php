<?php

require 'functions.php';

if(isset($_POST["register"]) ){

    if( registrasi ($_POST) > 0 ){
        echo "<script>
            alert('user baru berhasil ditambahkan');
        </script>";
    } else {
    echo mysqli_error($conn); 
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title Page-->
    <title>REGISTER MAKETAN</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="main (2).css" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">REGISTER MAKETAN</h2>
                    <form action="" method="POST">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nama</label>
                                    <input class="input--style-4" type="text" name="nama" id="nama">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Username</label>
                                    <input class="input--style-4" type="text" name="username" id="username">
                                </div>
                            </div>
                        </div>


                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Tanggal Lahir</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="tgl" id="tgl">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Kelamin</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Pria
                                            <input type="radio" checked="checked" name="kelamin" id="kelamin">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Wanita
                                            <input type="radio" name="kelamin" id="kelamin">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email" id="email">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nomor Telepon</label>
                                    <input class="input--style-4" type="text" name="nomor" id="nomor">
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Password</label>
                            <span class="btn-show-pass">

                            </span>
                            <div class="password">
                                <input class="input--style-4" type="password" name="password" id="password">
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Konfrimasi Password</label>
                            <span class="btn-show-pass">

                            </span>
                            <div class="password">
                                <input class="input--style-4" type="password" name="password2" id="password2">
                            </div>
                        </div>
                        <div class="p-t-15">
                            <a class="btn btn--radius-2 btn--blue" type="submit" name="kembali"
                                href="login.php">Kembali</a>
                            <button class="btn btn--radius-2 btn--blue" type="submit" name="register">Daftar</button>
                        </div>



                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
<!-- end document-->