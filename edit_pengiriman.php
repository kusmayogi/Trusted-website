<?php
require ('koneksi.php');
    $id = $_GET['id_pengiriman'];
    $ambilData = "SELECT * FROM pengiriman WHERE id_pengiriman='$id'";
    $result = mysqli_query($koneksi, $ambilData) or die(mysqli_error($koneksi));
    while ($data = mysqli_fetch_array($result)){
      $id                   = $data['id_pengiriman'];
      $tanggal_pengiriman   = $data['tanggal'];
      $pelanggan_pengiriman = $data['pelanggan'];
      $ket_sistem_pengiriman= $data['ket_sistem'];
      $no_resi_pengiriman   = $data['no_resi'];
      $keterangan_pengiriman= $data['keterangan'];
      $status_pengiriman    = $data['status'];
      $id_transaksi_pengiriman = $data['id_transaksi'];
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
    <title>Edit Data Pengiriman Barang</title>
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
                            <h4 class="mt-2" style="font-weight: bold;"><a href="pengiriman.php">
                                    <i class="uil uil-step-backward-circle" style="color: black;"></i></a> Edit Data
                            Pengiriman</h4>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="update_pengiriman.php">
                                <div class="form-group mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">ID Pengiriman</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="txt_idPengiriman" 
                                    value="<?php echo $data['id_pengiriman']; ?>" readonly>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Tanggal</label>
                                    <input type="text" class="form-control" id="tgl" name="txt_tanggal" 
                                    value="<?php echo $data['tanggal']; ?>" readonly>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Pelanggan</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="txt_pelanggan" value="<?php echo $data['pelanggan']; ?>" disabled>
                                </div>
                                <div class="form-group row mb-3">
                                    <div class="col"> 
                                        <label for="exampleFormControlInput1" class="form-label">Sistem Pengambilan Barang</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" name="txt_pelanggan" value="<?php echo $data['ket_sistem']; ?>" disabled>
                                    </div>  
                                    <div class="col">
                                        <label for="exampleFormControlInput1" class="form-label">No Resi</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" name="txt_pelanggan" value="<?php echo $data['no_resi']; ?>" disabled>
                                    </div>                               
                                </div>
                                <div class="form-group mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Keterangan</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" name="txt_keterangan" value="<?php echo $data['keterangan']; ?>" required="required">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Status</label>
                                    <select class="form-select text-muted" name="txt_status"
                                        aria-label="Default select example" required="required">
                                        <option value="<?php echo $data['status']; ?>"><?php echo $data['status'];?></option>
                                        <option value="Dikirim">Dikirim</option>
                                        <option value="Diterima">Diterima</option>
                                        <option value="Ditolak">Ditolak</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Id Transaksi</label>
                                    <input type="text" class="form-control" id="txt_idTransaksi" name="txt_idTransaksi" value="<?php echo $data['id_transaksi']; ?>" disabled>
                                </div>

                                <div class="card-footer mt-3">
                                    <a href="pengiriman.php" class="btn btn-danger ml-10">Batal</a>
                                    <button type="submit" class="btn btn-success" name="bupdate_pengiriman">Simpan</button>
                                </div>
                            </form>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </section>

    

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>

</body>
</html>

<?php } ?>