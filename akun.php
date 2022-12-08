<?php
require ('koneksi.php');
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="https://kit.fontawesome.com/5be573901b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Akun</title>
</head>
<body>
<nav>
        <!-- Logo Navbar-->
        <div class="logo-image">
            <img src="image/gbr_logo.png" width="200">
        </div>

        <!-- navbar -->
        <div class="menu-items">
            <ul class="nav-links nav-link collapsed nav-pills">
            <li><a href="home.php">
                    <i class="uil uil-estate"></i>
                        <span class="link-name">Home</span>
                    </a></li>
                <li><a href="product.html">
                    <i class="uil uil-chart"></i>
                        <span class="link-name">Performa Toko</span>
                    </a></li>
                <li><a href="pengiriman.php">
                    <i class="uil uil-message"></i>
                        <span class="link-name">Pengiriman</span>
                    </a></li>
                <li><a href="">
                    <i class="uil uil-edit"></i>
                        <span class="link-name">Data Barang</span>
                    </a></li>
                <li><a href="laporan.php">
                    <i class="uil uil-file-info-alt"></i>
                        <span class="link-name">Laporan</span>
                    </a></li>
                <li><a href="akun.php">
                    <i class="uil uil-user"></i>
                        <span class="link-name">Akun</span>
                    </a></li>
                    <!-- Nav Item - Akun Collapse Menu -->
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#">
                            <i class="fas fa-user-gear" style="font-size:20px;"></i>
                            <span class="link-name">Akun Saya</span>
                        </a>
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#">
                            <i class="fas fa-solid fa-bars" style="font-size:20px;"></i>
                            <span class="link-name">Tentang Kami</span>
                        </a>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i></i>

            <!-- <div class="notifications">
                <i class="fas fa-regular fa-bell" style="font-size:20px;"></i>
            </div>
            <a href="#"><img src="image/lutpi.png" alt=""><span class="link-name">Toko Bang Lutfi</span></a>
        </div> -->
            <div class="information container-start">
                <i class="fas fa-regular fa-bell" style="font-size:20px;"></i>
                <a>Toko Bang Luthfi</a>
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"> <?php?></span>
                <img class="img-profile rounded-circle" src="image/gbr_profile.png">
            </div>
        </div>

        <!-- <div class="container-fluid"> -->
            <div class="container-fluid mt-3">
              <!-- <div class="row"> -->
                <!-- <div class="col mb-3"> -->
                    
                    <p class="fs-1 fw-bold">&emsp;&emsp;Hai, Klien Trustedvers!</p>
                    <p class="fs-6 fw-normal">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        Yuk lengkapi isi data akun kamu, apabila terjadi kendala pada website ini</p>
                    <p class="fs-6 fw-normal">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        kamu dapat menghubungi kami dengan mengikuti berbagai sosial media</p>
                    <p class="fs-6 fw-normal">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        kami. Jangan sampai ketinggalan!!</p>
                
                    <div class="container text-center">
                        <div class="col mt-3">
                            <img src="image/gbr_akun.png" class="img-fluid" width="700px">
                        </div>
                    </div>
                </div>
              </div>
            <!-- </div>    -->
        </div>
    </section>

    <script type="text/javascript" src="js/bootstrap.bundle.min.js>"></script>
</body>
</html>