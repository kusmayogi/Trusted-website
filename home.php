<?php
error_reporting(0);
require "koneksi.php"

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="card.css">

    <script src="https://kit.fontawesome.com/5be573901b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Data Barang</title>
  
  </head>
  <body>
    <!-- tampilan navbar -->
    <nav>
        <!-- menampilkan logo -->
        <div  class="logo-name">
            <img src="image/gbr_logo1.png" width="200">
        </div>

        <!-- menampilkan navbar -->
        <div class="menu-items">
            <ul class="nav-links nav-link collapsed">
              <li><a href="home.php" class="rounded-pill" style="background-color: #FF69B4;">
                  <i class="uil uil-estate link"></i>
                      <span class="link-name">Home</span>
                  </a></li>
              <li><a href="performa.php">
                  <i class="uil uil-chart"></i>
                      <span class="link-name">Performa Toko</span>
                  </a></li>
              <li><a href="#">
                  <i class="uil uil-message"></i>
                      <span class="link-name">Pengiriman</span>
                  </a></li>
              <li><a href="data_barang.php" >
                  <i class="uil uil-edit"></i>
                      <span class="link-name">Data Barang</span>
                  </a></li>
              <li><a href="#">
                  <i class="uil uil-file-info-alt"></i>
                      <span class="link-name">Laporan</span>
                  </a></li>
              <li><a href="akun.php">
                  <i class="uil uil-user"></i>
                      <span class="link-name">Akun</span>
                  </a></li>
              <li><a href="login.php">
                  <i class="uil uil-sign-out-alt"></i>
                      <span class="link-name">Logout</span>
                  </a></li>
            </ul>
        </div>
    </nav>
    <section class="dashboard">
        <div class="top">
            <i></i>
                <i></i>
                <i></i>
                <i></i>
                <i></i>
                <i></i>
                <i></i>
                <i></i>
                <button type="button"  href="notif.php" class="btn btn-light"> <a href="notif.php"><i class="uil uil-bell"></i></a></button>
            <button type="button" class="btn btn-light"><img src="lutpi1.png" alt="">  Toko Bang Lutfi</button>
        </div>
        <div class="row">
        <div class="col-4">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Pesanan Hari Ini</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Pemasukan Hari Ini</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            </div>
        </div>
    </div>
</div>
<div class="row mt-3">
        <div class="col-4">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Produk Terjual Bulan Ini</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Jumlah Produk</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            </div>
        </div>
        </div>
        <div class="col">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Nama Produk</th>
      <th scope="col">Tanggal</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Mark</td>
      <td>Otto</td>
    </tr>
    </tbody>
</table>
    </div>
    
</div>
<div class="row mt-4">
    <div class="col-6 text-center">
<p class="h5">Produk Unggulan Tokomu</p>
</div>
</div>
<div class="row mt-2">
    <div class="col-2">
    <div class="card mt-3" style="width: 10rem;">
  <img src="beigge.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">An item</li>
    <li class="list-group-item">A second item</li>
    <li class="list-group-item">A third item</li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
    </div>
    <div class="col-2">
    <div class="card mt-3" style="width: 10rem;">
  <img src="hitam1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">An item</li>
    <li class="list-group-item">A second item</li>
    <li class="list-group-item">A third item</li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
    </div>
    <div class="col-3">
    <div class="card mt-3" style="width: 10rem;">
  <img src="hitam2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">An item</li>
    <li class="list-group-item">A second item</li>
    <li class="list-group-item">A third item</li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
    </div>
</div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
    </html>