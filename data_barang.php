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
    <script src="https://kit.fontawesome.com/5be573901b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Data Barang</title>

  </head>
  <body>
    <nav>
        <!-- <div class="logo-name"> -->
            <div class="logo-image">
                <img src="image/TRST.png" width="200">
            </div>
        <!-- </div> -->
        <div class="menu-items">
            <ul class="nav-links nav-link collapsed">
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
            </ul>
        </div>
    </nav>
    <section class="dashboard">
        <div class="top">
            <i></i>
            <form action="" method="POST" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" name="query" class="form-control bg-light border-o" placeholder="Search">
                    <div class="input-group-append">
                        <button type="submit" name="cari" class="btn btn-primary">Cari
                            <!-- <i class="uil-search"></i> -->
                        </button>
                    </div>
                </div>
            </form>

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
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php 
     $query = $_POST['query'];
      if ($query != ''){  
            $tampil = mysqli_query($koneksi, "SELECT * FROM barang WHERE nama LIKE '%$query%' OR kategori LIKE '%$query%' OR ukuran LIKE '%$query%' ");
      } else{
            $tampil = mysqli_query($koneksi, "SELECT * FROM barang order by id_barang asc");
      }

      if(mysqli_num_rows($tampil)){
      while ($data = mysqli_fetch_array($tampil)){
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
           <a href="edit_barang.php?id_barang=<?php echo $data['id_barang']; ?>" name="bupdate" class="btn btn-light mb-3"><i class="uil uil-edit-alt"></i></a> 
           <a href="hapus_barang.php?id_barang=<?php echo $data['id_barang']; ?>" name="bhapus"class="btn btn-danger mb-3"><i class="uil uil-trash-alt"></i></a> 
        </td>
      </tr>
      <?php }} else{
          echo'<tr><td colspan="11">Data Yang Dicari Tidak Ada...</td></tr>';
      }?>
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
