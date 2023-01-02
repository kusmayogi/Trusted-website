<?php
require ('koneksi.php');

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
    <title>Pengiriman Barang</title>
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
                <li><a href="pengiriman.php" class="rounded-pill" style="background-color: #C52A81;">
                        <i class="uil uil-message" style="color: black ;"></i>
                        <span class="link-name" style="color: black;">Pengiriman</span>
                    </a></li>
                <li><a href="data_barang.php">
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
            </ul>
        </div>
    </nav>

    <!-- <div class="content-wrapper master"> -->
    <div class="top">
        <div class="box box-primary mt-3">
            <div class="notifications" style="text-align: right;">
                <i class="uil uil-bell"></i>
                <a href="login.php"><img src="image/lutpi.png" alt=""><span class="link-name">Toko Bang Lutfi</span></a>
            </div>
        </div>
    </div>

    <section class="content dashboard">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-20">
                    <div class="card">
                        <div class="card-header" style="background-color: #C52A81;">
                            <h4 class="mt-2" style="font-weight: bold;"><a href="tambah_pengiriman.php">
                                <i class="uil uil-step-backward-circle" style="color: black;"></i></a>
                            Tabel Transaksi</h4>
                        </div>
                        <div class="card-body">
                                                            <div class="table-responsive">
                                                                <table class="table" action="">
                                                                    <thead>
                                                                        <tr align="center">
                                                                            <th scope="col" width="100px">Id</th>
                                                                            <th scope="col">Tanggal</th>
                                                                            <th scope="col">Total Barang</th>
                                                                            <th scope="col">Total Pembayaran</th>
                                                                            <th scope="col">Id Barang</th>
                                                                            <th scope="col">Nama Pembeli</th>
                                                                            <th scope="col">Aksi</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php 
                                                                            // $query = mysqli_query($koneksi, "SELECT * FROM transaksi ORDER BY id_transaksi desc");
                                                                            $query = mysqli_query($koneksi, "SELECT transaksi.id_transaksi, transaksi.tgl_transaksi, 
                                                                            transaksi.total_barang, transaksi.total_pembayaran, transaksi.id_barang ,pembeli.nama_pembeli 
                                                                            FROM transaksi
                                                                            INNER JOIN pembeli ON transaksi.id_pembeli=pembeli.id_pembeli ORDER BY id_transaksi DESC");
                                                                            if(mysqli_num_rows($query)){
                                                                                while ($data = mysqli_fetch_array($query)){
                                                                        ?>
                                                                        <tr align="center">
                                                                            <td><?= $data['id_transaksi'] ?></td>
                                                                            <td><?= $data['tgl_transaksi'] ?></td>
                                                                            <td><?= $data['total_barang'] ?></td>
                                                                            <td><?= $data['total_pembayaran'] ?></td>
                                                                            <td><?= $data['id_barang'] ?></td>
                                                                            <td><?= $data['nama_pembeli'] ?></td>
                                                                            <td>
                                                                            <a href="tambah_pengiriman.php">
                                                                                <button id="pilih_transaksi" name="pilih_transaksi" class="btn btn-success mb-3">
                                                                                    Pilih
                                                                                </button>
                                                                            </a>
                                                                            </td>
                                                                        </tr>
                                                                        <?php
                                                                            }}   
                                                                        ?>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                        </div>                      
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script type="text/javascript" src="js/bootstrap.bundle.min.js>"></script>
</body>
</html>
