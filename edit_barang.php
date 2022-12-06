<?php
require ('koneksi.php');

    $id = $_GET['id_barang'];
    $ambilData = "SELECT * FROM barang WHERE id_barang='$id'";
    $result = mysqli_query($koneksi, $ambilData) or die(mysqli_error());
    while ($data = mysqli_fetch_array($result)){
      $id = $data['id_barang'];
      $nama_barang = $data['nama'];
      $warna_barang = $data['warna'];
      $ukuran_barang = $data['ukuran'];
      $kategori_barang = $data['kategori'];
      $hargaBeli_barang = $data['harga_beli'];
      $hargaJual_barang = $data['harga_jual'];
      $stok_barang = $data['stok'];
      $deskripsi_barang = $data['deskripsi'];
      $gambar_barang = $data['gambar'];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Edit Data Barang</title>
  </head>
<body>
    <div class="container-fluid mt-4">
  <div class="card" style="width: 50rem;">
  <div class="card-body">
    <h5 class="card-title"><a href="data_barang.php">
  <i class="uil uil-step-backward-circle"></i>
                    </a>Edit Data Barang</h5>
    <h6 class="card-subtitle mb-2 text-muted">Ubahlah data barang kamu pada kolom-kolom dibawah ini</h6>
<form method="POST" action="update_barang.php" enctype="multipart/form-data">
    <div class="container-fluid">
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Ubah Gambar</label>
      <input type="file" name="gbr_produk" class="form-control" id="exampleFormControlInput1" required="" value="<?php echo $data['gambar']; ?>">
      <section class="upload.php"></section>
    </div>
    <!-- <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Id Barang</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="txt_id" value="<?php echo $data['id_barang']; ?>" placeholder="123xxxxxxx" readonly>
    </div> -->

    <input type="hidden" class="form-control" name="txt_idbarang" value="<?php echo $data['id_barang']; ?>">

    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Nama Barang</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="txt_nama" value="<?php echo $data['nama']; ?>" placeholder="Masukkan nama barang...">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Warna</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="txt_warna" value="<?php echo $data['warna']; ?>" placeholder="Masukkan warna...">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Ukuran</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="txt_ukuran" value="<?php echo $data['ukuran']; ?>" placeholder="Masukkan ukuran...">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Kategori</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="txt_kategori" value="<?php echo $data['kategori']; ?>" placeholder="hoodie, kaos, kemeja, etc">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Harga Beli</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="txt_hargaBeli" value="<?php echo $data['harga_beli']; ?>" placeholder="Masukkan harga beli barang">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Harga Jual</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="txt_hargaJual" value="<?php echo $data['harga_jual']; ?>" placeholder="Masukkan harga jual barang">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Stok</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="txt_stok" value="<?php echo $data['stok']; ?>" placeholder="Masukkan stok barang anda">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Deskripsi</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" name="txt_deskripsi" rows="3" value="<?php echo $data['deskripsi']; ?>"></textarea>
    </div>
    <div class="col-4">
    <a href="data_barang.php" class="btn btn-danger mb-3">Batal</a>
    <button type="submit" class="btn btn-success mb-3" name="bupdate">Update</button>
  </div>
  </div>
</div>
</div>
</form>
  <script type="text/javascript" src="js/bootstrap.bundle.min.js>"></script>
</body>
</html>

<?php } ?>

 