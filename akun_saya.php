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
    <title>Akun</title>
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
            <ul class="nav-links nav-link collapsed nav nav-pills">
              <li><a href="home_page.html">
                  <i class="fa fa-solid fa-house" style="font-size:20px;"></i>
                      <span class="link-name">Home</span>
                  </a></li>
              <li><a href="product.html">
                  <i class="fas fa-solid fa-chart-simple" style="font-size:20px;"></i>
                      <span class="link-name">Performa Toko</span>
                  </a></li>
              <li><a href="#">
                  <i class="fas fa-truck" style="font-size:20px;"></i>
                      <span class="link-name">Pengiriman</span>
                  </a></li>
              <li><a href="data_barang.php">
                  <i class="fas fa-solid fa-pen-to-square" style="font-size:20px;"></i>
                      <span class="link-name">Data Barang</span>
                  </a></li>
              <li><a href="#">
                  <i class="fas fa-solid fa-file-lines" style="font-size:20px;"></i>
                      <span class="link-name">Laporan</span>
                  </a></li>
                <li><a href="akun.php">
                  <i class="fas fa-user" style="font-size:20px;"></i>
                      <span class="link-name">Akun</span>
                  </a></li>
              <!-- Nav Item - Akun Collapse Menu -->
              <li class="nav-item">
                <a class="nav-link collapsed rounded-pill" href="akun_saya.php" style="background-color: #C52A81;">
                    <i class="fas fa-user-gear" style="color: white; font-size:20px;"></i>
                    <span class="link-name text-white">Akun Saya</span>
                </a>
              <li class="nav-item">
                <a class="nav-link collapsed" href="tentang_kami.php" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-solid fa-bars" style="font-size:20px;"></i>
                    <span class="link-name">Tentang Kami</span>
                </a>
              <li><a href="login.php">
                  <i class="fa-solid fa-right-from-bracket" style="font-size:20px;"></i>
                      <span class="link-name">Logout</span>
                  </a></li>
            </ul>
        </div>
    </nav>

    <form method="POST" action="akun_saya.php" enctype="multipart/form-data">
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <label for="exampleUsername" class="form-label">Username</label>
                <input type="text" class="form-control form-control-user" id="exampleUsername"
                placeholder="Masukkan username" name="txt_username" value="<?php echo $data['nama']; ?>">
            </div>
            <div class="col-sm-6">
            <label for="exampleNamaJln" class="form-label">Nama Jalan/Desa</label>
            <input type="text" class="form-control form-control-user" id="exampleNamaJln"
                placeholder="e.g. Jl.Merdeka No.5 Rt:/Rw:" name="txt_namaJln" value="<?php echo $data['nama']; ?>">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <label for="examplePassword" class="form-label">Password</label>
                <input type="text" class="form-control form-control-user" id="examplePassword"
                placeholder="Masukkan password" name="txt_password" value="<?php echo $data['nama']; ?>">
            </div>
            <div class="col-sm-6">
            <label for="exampleKec" class="form-label">Kecamatan</label>
            <input type="text" class="form-control form-control-user" id="exampleKec"
                placeholder="e.g. Kertosono, Pace, Baron, etc" name="txt_kecamatan" value="<?php echo $data['nama']; ?>">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <label for="exampleNama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control form-control-user" id="exampleNama"
                placeholder="Masukkan nama lengkap" name="txt_nama" value="<?php echo $data['nama']; ?>">
            </div>
            <div class="col-sm-6">
            <label for="exampleKab" class="form-label">Kabupaten</label>
            <input type="text" class="form-control form-control-user" id="exampleKab"
                placeholder="e.g. Nganjuk, Kediri, Mojokerto, etc" name="txt_kabupaten" value="<?php echo $data['nama']; ?>">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <label for="exampleJK" class="form-label">Jenis Kelamin</label>
                <input type="text" class="form-control form-control-user" id="exampleJK"
                placeholder="e.g. laki-laki/perempuan" name="txt_nama" value="<?php echo $data['nama']; ?>">
            </div>
            <div class="col-sm-6">
            <label for="exampleProv" class="form-label">Provinsi</label>
            <input type="text" class="form-control form-control-user" id="exampleProv"
                placeholder="e.g. Jawa Timur, Yogyakarta, Sulawesi, etc" name="txt_kabupaten" value="<?php echo $data['nama']; ?>">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <label for="exampleNoTelp" class="form-label">No Telepon</label>
                <input type="text" class="form-control form-control-user" id="exampleNoTelp"
                placeholder="Masukan no telepon" name="txt_noTelp" value="<?php echo $data['nama']; ?>">
            </div>
            <div class="col-sm-6">
            <label for="exampleKodePos" class="form-label">Kode Pos</label>
            <input type="text" class="form-control form-control-user" id="exampleKodePos"
                placeholder="Masukkan kode pos" name="txt_kabupaten" value="<?php echo $data['nama']; ?>">
            </div>
        </div>
    </form>

    <script type="text/javascript" src="js/bootstrap.bundle.min.js>"></script>
    </body>
</html>