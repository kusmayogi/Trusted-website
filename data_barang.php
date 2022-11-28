<?php
require "koneksi.php"

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="style.css">
    <title>Data Barang</title>
  </head>
  <body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="TRST.png" width="200">
            </div>
        </div>
        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="home_page.html">
                    <i class="uil uil-estate"></i>
                        <span class="link-name">Home</span>
                    </a></li>
                <li><a href="product.html">
                    <i class="uil uil-chart"></i>
                        <span class="link-name">Performa Toko</span>
                    </a></li>
                <li><a href="#">
                    <i class="uil uil-message"></i>
                        <span class="link-name">Pengiriman</span>
                    </a></li>
                <li><a href="#">
                    <i class="uil uil-edit"></i>
                        <span class="link-name">Data Barang</span>
                    </a></li>
                <li><a href="#">
                    <i class="uil uil-file-info-alt"></i>
                        <span class="link-name">Laporan</span>
                    </a></li>
                <li><a href="#">
                    <i class="uil uil-user"></i>
                        <span class="link-name">Akun</span>
                    </a></li>
            </ul>
        </div>
    </nav>
    <section class="dashboard">
        <div class="top">
            <i></i>
            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" name="tcari" value="<?= $_POST['tcari']?>" class="form-control" placeholder="Cari disini..">
            </div>
            <div class="notifications">
                <i class="uil uil-bell"></i>
            </div>
            <img src="lutpi1.png" alt="">
        </div>
        <div class="row">
      <div class="col mb-3">
      <button type="button" class="btn btn-primary">Primary</button>
      </div>
      </div>  
  <div class="tabel">
    <div class="mt-2">
      <div class="row-2">
      <div class="col">
      <a class="btn btn-light" href="test.php" role="button"><i class="uil uil-plus-square"></i> Tambah Barang</a>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Gambar</th>
        <th scope="col">Id Barang</th>
        <th scope="col">Nama</th>
        <th scope="col">Warna</th>
        <th scope="col">Ukuran</th>
        <th scope="col">Kategori</th>
        <th scope="col">Harga Beli</th>
        <th scope="col">Harga Jual</th>
        <th scope="col">Stok</th>
        <th scope="col">Deskripsi</th>
        <th scope="col"></th>
      </tr>
   
    </thead>
    <tbody>
      <?php 
      $tampil = mysqli_query($koneksi, "SELECT * FROM test order by id_barang asc");
      while ($data = mysqli_fetch_array($tampil)):
      ?>
      <tr>
        <td><img src="A1_Project/img/<?php echo $test->gambar;?>"width="70px"></td>
        <td><?= $data['id_barang']?></td>
        <td><?= $data['nama']?></td>
        <td><?= $data['warna']?></td>
        <td><?= $data['ukuran']?></td>
        <td><?= $data['kategori']?></td>
        <td><?= $data['harga_beli']?></td>
        <td><?= $data['harga_jual']?></td>
        <td><?= $data['stok']?></td>
        <td><?= $data['deskripsi']?></td>
       <td><a href="?page-data-barang&hapus-<?php echo $data['id_barang'];?>" class="btn-btndanger btn-sm">
       <i class="uil uil-trash-alt"></i>
       <a href="product.html">
       <i class="uil uil-edit"></i>
                    </a></td>
      </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
</div>
</div>
</div>
</div>
    </section>
        <script type="text/javascript" src="js/bootstrap.bundle.min.js>"></script>
    </body>
    </html>
