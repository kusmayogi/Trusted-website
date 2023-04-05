<?php
require ('koneksi.php');
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Akun</title>
</head>
<body>
    <!-- tampilan navbar -->
    <nav>
        <!-- menampilkan logo -->
        <div class="logo-name">
            <img src="image/gbr_logo1.png" width="200">
        </div>

        <!-- menampilkan navbar -->
        <div class="menu-items">
            <ul class="nav-links nav-link collapsed">
                <li><a href="home.php">
                        <i class="uil uil-estate link"></i>
                        <span class="link-name">Home</span>
                    </a></li>
                <li><a href="performa.php">
                        <i class="uil uil-chart"></i>
                        <span class="link-name">Performa Toko</span>
                    </a></li>
                <li><a href="pengiriman.php">
                        <i class="uil uil-message"></i>
                        <span class="link-name">Pengiriman</span>
                    </a></li>
                <li><a href="data_barang.php">
                        <i class="uil uil-edit"></i>
                        <span class="link-name">Data Barang</span>
                    </a></li>
                <li><a href="laporan.php" >
                        <i class="uil uil-file-info-alt"></i>
                        <span class="link-name">Laporan</span>
                    </a></li>
                <li><a href="akun.php">
                        <i class="uil uil-user"></i>
                        <span class="link-name">About</span>
                    </a></li>
                    <li><a href="login.php">
                    <i class="uil uil-arrow-right"></i>
                        <span class="link-name">Log Out</span>
                    </a></li>
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
   
       
    </section>
    <h1 class="display-4">This Website Developed By:</h1>
<div class="row mt-3">
    <div class="col">
    <div class="card" style="width: 18rem;">
  <img src="image/WhatsApp Image 2023-01-03 at 23.48.49.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">E41211622</h5>
    <p class="card-text">Mochamad Luthfi Azhar</p>
  </div>
</div>
    </div>
    <div class="col">
    <div class="card" style="width: 18rem;">
  <img src="image/WhatsApp Image 2023-01-04 at 00.27.24.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">E41211493</h5>
    <p class="card-text">Endiening Nur Puspitasari</p>
  </div>
</div>
    </div>
</div>
<div class="row mt-3">
    <div class="col">
    <div class="card" style="width: 18rem;">
  <img src="image/WhatsApp Image 2023-01-04 at 10.54.18.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">E41211992</h5>
    <p class="card-text">Fauzian Aqzal Hafidz</p>
  </div>
</div>
    </div>
    </div>
    <div class="row mt-3">
    <div class="col">
    <div class="card" style="width: 18rem;">
  <img src="image/WhatsApp Image 2023-01-04 at 10.54.19.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">E41211993</h5>
    <p class="card-text">Ratih Dewi Setiani</p>
  </div>
</div>
    </div>
    <div class="col">
    <div class="card" style="width: 18rem;">
  <img src="image/WhatsApp Image 2023-01-04 at 10.55.16.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">E41211296</h5>
    <p class="card-text">Syailendra Kusmayogi Pratrama</p>
  </div>
</div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>