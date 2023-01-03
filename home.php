<?php
require "koneksi.php"

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Trusted: Login</title>
    <nav>
        <!-- menampilkan logo -->
        <div  class="logo-name">
            <img src="image/gbr_logo1.png" width="200">
        </div>

        <!-- menampilkan navbar -->
        <div class="menu-items">
            <ul class="nav-links nav-link collapsed">
              <li><a href="home.php"  class="rounded-pill" style="background-color: #FF69B4;">
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
            <i></i>
            <i></i>
            <i></i>
            <i></i>
            <i></i>
            <i></i>
            <i></i>
            <button type="button" href="notif.php" class="btn btn-light"> <a href="notif.php"><i class="uil uil-bell"></i></a></button>
            <!-- Button trigger modal -->

            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="lutpi1.png" alt="">
                Launch
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            $query = mysqli_query($koneksi, "SELECT SUM(total_pembayaran) FROM transaksi WHERE year(curdate())");
            $row = mysqli_fetch_array($query);
            $jmlpengguna = $row['SUM(total_pembayaran)'];

            $query1 = mysqli_query($koneksi, "SELECT COUNT(id_barang) FROM barang WHERE year(curdate())");
            $row1 = mysqli_fetch_array($query1);
            $jmlpengguna1 = $row1['COUNT(id_barang)'];

            $query = mysqli_query($koneksi, "SELECT COUNT(id_transaksi) FROM transaksi WHERE year(curdate())");
            $row = mysqli_fetch_array($query);
            $jmlpengguna2 = $row['COUNT(id_transaksi)'];

            $query = mysqli_query($koneksi, "SELECT COUNT(id_barang) FROM transaksi WHERE month(curdate())");
            $row = mysqli_fetch_array($query);
            $jmlpengguna3 = $row['COUNT(id_barang)'];


            ?>

        </div>
        <div class="row">
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Pesanan Hari Ini</h5>
                        <span class="number"><?php echo $jmlpengguna2 ?></span>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Pemasukan Hari Ini</h5>
                        <span class="number"><?php echo $jmlpengguna ?></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Produk Terjual Bulan Ini</h5>
                        <span class="number"><?php echo $jmlpengguna3 ?></span>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Jumlah Produk</h5>
                        <span class="number"><?php echo $jmlpengguna1 ?></span>
                    </div>
                </div>
            </div>
            <div class="col">
                <h6>History</h6>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Tanggal</th>
                        </tr>
                    </thead>
                    <?php
                    $tampil = mysqli_query($koneksi, "SELECT barang.nama, transaksi.tgl_transaksi FROM barang, transaksi WHERE barang.id_barang=transaksi.id_barang;");
                    if (mysqli_num_rows($tampil)) {
                        while ($data = mysqli_fetch_array($tampil)) {
                    ?>
                            <tbody>
                                <tr>
                                    <td><?= $data['nama'] ?></td>
                                    <td><?= $data['tgl_transaksi'] ?></td>
                                </tr>
                        <?php }
                    } else {
                        echo '<tr><td colspan="11">Data Yang Dicari Tidak Ada...</td></tr>';
                    } ?>
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
  <img src="image/hitam.jpg" class="card-img-top" alt="...">
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
  <img src="image/zul_pl_2022-Mercedes-AMG-F1-Lewis-Hamilton-Baseball-Cap-black-18068_2.jpg" class="card-img-top" alt="...">
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
  <img src="image/jaket1.jpeg" class="card-img-top" alt="...">
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
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>

</html>