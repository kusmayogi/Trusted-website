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
    <!-- <style type="text/css">
       a button{
        background-color: salmon;
        color: $fff;
        padding: 10px;
        font-size: 12px;
       }
    </style> -->
  </head>
  <body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="image/TRST.png" width="200">
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
                <input type="text" placeholder="Cari disini..">
            </div>
            <div class="notifications">
                <i class="uil uil-bell"></i>
            </div>
            
            <a href="login.php"><img src="image/lutpi.png" alt=""><span class="link-name">Toko Bang Lutfi</span></a>
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
      <button href="test.php" type="button" class="btn btn-light"><i class="uil uil-plus-square"></i></button>
      <a href="test.php">
                        <span class="link-name">Upload Barang</span>
                    </a>
  <table class="table" action="action.php">
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
      $tampil = mysqli_query($koneksi, "SELECT * FROM barang order by id_barang asc");
      while ($data = mysqli_fetch_array($tampil)):
      ?>
      <tr>
        <td><img src="image/<?php echo $data['gambar'];?>"width="70px"></td>
        <td><?= $data['id_barang']?></td>
        <td><?= $data['nama']?></td>
        <td><?= $data['warna']?></td>
        <td><?= $data['ukuran']?></td>
        <td><?= $data['kategori']?></td>
        <td><?= $data['harga_beli']?></td>
        <td><?= $data['harga_jual']?></td>
        <td><?= $data['stok']?></td>
        <td><?= $data['deskripsi']?></td>
        <!-- <td><button type="submit" class="btn btn-danger mb-3" name="hal">hapus</button></td> -->
        <td>
           <a href="edit_barang.php?id_barang=<?php echo $data['id_barang']; ?>" name="bupdate" class="btn btn-warning mb-3">Edit</a> 
           <a href="hapus_barang.php?id_barang=<?php echo $data['id_barang']; ?>" name="bhapus"class="btn btn-danger mb-3">Hapus</a> 
        </td>
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
