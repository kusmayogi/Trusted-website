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
  <link rel="stylesheet" href="home.css">
  <script src="https://kit.fontawesome.com/5be573901b.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <title>Laporan</title>


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
        <li><a href="laporan.php" class="rounded-pill" style="background-color: #FF69B4;">
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
  <section>
    <h1>Laporan</h1>
    <div class="row mt-4">
      <div class="col">
        <form method="post">
          <input type="date" name="tgl_mulai" class="mulai">
      </div>
      <div class="col">
        <input type="date" name="tgl_selesai" class="selesai">
      </div>
    </div>
    <button class="btn btn-light rounded-pill" name="filter"><i class="uil uil-search"> Cari</i></button>
    </form>

    </div>
    <div class="container-fluid">
      <div class="row align-items-center mt-4">
        <div class="col">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Id Transaksi</th>
                <th scope="col">Tanggal Transaksi</th>
                <th scope="col">Total Barang</th>
                <th scope="col">Total Harga</th>
                <th scope="col">Id Pembeli</th>
              </tr>
            </thead>
            <?php
            if (isset($_POST['filter'])) {
              $tgl_mulai = mysqli_real_escape_string($koneksi, $_POST['tgl_mulai']);
              $tgl_selesai = mysqli_real_escape_string($koneksi, $_POST['tgl_selesai']);
              $tampil = mysqli_query($koneksi, "SELECT * FROM transaksi WHERE tgl_transaksi BETWEEN '$tgl_mulai' AND '$tgl_selesai'");
            } else {
              $tampil = mysqli_query($koneksi, "SELECT * FROM transaksi");
            }
            if (mysqli_num_rows($tampil)) {
              while ($data = mysqli_fetch_array($tampil)) {
            ?>
                <tbody>
                  <tr>
                    <td><?= $data['id_transaksi'] ?></td>
                    <td><?= $data['tgl_transaksi'] ?></td>
                    <td><?= $data['total_barang'] ?></td>
                    <td><?= $data['total_pembayaran'] ?></td>
                    <td><?= $data['id_pembeli'] ?></td>
                  </tr>
              <?php }
            } else {
              echo '<tr><td colspan="11">Data Yang Dicari Tidak Ada...</td></tr>';
            } ?>

                </tbody>
          </table>
        </div>
      </div>
    </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>