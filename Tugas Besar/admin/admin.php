﻿<?php
session_start();
if(!isset($_SESSION['login'])) {
    header("location: login.php");
    exit;
}


//koneksi ke database
$koneksi = new mysqli("localhost", "root", "", "project_chat");

?>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin.php">Binary admin</a>
            </div>
            <span class="city"> ==$0
                <b>Hari ini</b>
                ": senin, 21 Des 2020, "
                <span id="jam">11:50:20</span>
            </span>>
            <span style="color: white;
padding: 15px 50px 5px 50px;
float: right;

font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="#" class="btn btn-danger square-btn-adjust"></a>
            </span>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="assets/img/find_user.png" class="user-image img-responsive" />
                    </li>


                    <li><a href="admin.php"><i class="fa fa-dashboard fa-3x"></i>Home</a></li>
                    <li><a href="admin.php?halaman=produk"><i class="fa fa-dashboard fa-3x"></i>Produk</a></li>
                    <li><a href="admin.php?halaman=pengguna"><i class="fa fa-dashboard fa-3x"></i>Pengguna</a></li>
                    <li><a href="admin.php?halaman=toko"><i class="fa fa-dashboard fa-3x"></i>Toko</a></li>
                    <li><a href="admin.php?halaman=logout"><i class="fa fa-dashboard fa-3x"></i>logout</a></li>

                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <?php
                if (isset($_GET['halaman']))
                {
                    if($_GET['halaman']=="produk")
                {
                    include 'produk.php';
                }
                elseif ($_GET['halaman']=="pengguna")
                {
                    include 'pengguna.php';
                }
                elseif ($_GET['halaman']=="hapuspengguna")
                {
                    include 'hapuspengguna.php';
                }
                elseif ($_GET['halaman']=="hapusproduk")
                {
                    include 'hapusproduk.php';
                }
                elseif ($_GET['halaman']=="ubahproduk")
                {
                    include 'ubahproduk.php';
                }
                elseif ($_GET['halaman']=="logout")
                {
                    include 'logout.php';
                }
                elseif ($_GET['halaman']=="toko")
                {
                    include 'toko.php';
                }
                elseif ($_GET['halaman']=="hapuspengguna")
                {
                    include 'hapuspengguna.php';
                }
            }
            else
            {
                    include 'home.php';  
                }
                ?>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- MORRIS CHART SCRIPTS -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>

</html>