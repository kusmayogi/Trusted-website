<?php
require "koneksi.php"

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <link rel="stylesheet" href="style.css">
  <title>Performa Toko</title>
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
              <li><a href="home.php">
                  <i class="uil uil-estate link"></i>
                      <span class="link-name">Home</span>
                  </a></li>
              <li><a href="performa.php"  class="rounded-pill" style="background-color: #FF69B4;">
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
    <i>*</i>
    <p class="h2">Statistik Penjualan</p>
     <?php
            $query =  mysqli_query($koneksi, "SELECT monthname(tgl_transaksi) AS bulan, SUM(total_pembayaran) AS amount FROM transaksi GROUP BY MONTH(tgl_transaksi)");

            foreach ($query as $data) {
                $month[] = $data['bulan'];
                $amount[] = $data['amount'];
            }
            ?> 

            <div class="chart" style="height: auto; width: auto;">
                <canvas id="barchart"></canvas>
            </div>

            <script>
                const ctx = document.getElementById('barchart');

                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: <?php echo json_encode($month) ?>,
                        datasets: [{
                            label: 'Pedapatan',
                            data: <?php echo json_encode($amount) ?>,
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            </script>
            <?php
            $query1 = mysqli_query($koneksi, "SELECT COUNT(id_transaksi) FROM transaksi WHERE year(curdate())");
            $row1 = mysqli_fetch_array($query1);
            $jmlpengguna1 = $row1['COUNT(id_transaksi)'];
            ?>
             <div class="row mt-2">
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
              <h5 class="card-title">Pesanan Bulan Ini</h5>
              <span class="number"><?php echo $jmlpengguna1 ?></span>
            </div>
        </div>
    </div>
</div>

    </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>