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
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Upload Barang</title>
  </head>
  <body>
    <div class="container-fluid mt-4">
  <div class="card" style="width: 50rem;">
  <div class="card-body">
    <h5 class="card-title"><a href="data_barang.php">
  <i class="uil uil-step-backward-circle"></i>
                    </a>Upload Barang</h5>
    <h6 class="card-subtitle mb-2 text-muted">Masukan data barang kamu pada kolom kolom dibawah ini</h6>
<form method="POST" action="action.php" enctype="multipart/form-data">
    <div class="container-fluid">
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Tambah Gambar</label>
      <input type="file" name="gbr_produk" class="form-control" id="exampleFormControlInput1" required="">
      <section class="upload.php"></section>
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Id Barang</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="txt_id" placeholder="123xxxxxxx">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Nama Barang</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="txt_nama" placeholder="masukan nama barang...">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Warna</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="txt_warna" placeholder="masukan warna...">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Ukuran</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="txt_ukuran" placeholder="masukan ukuran...">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Kategori</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="txt_kategori" placeholder="baju, hoodie, sepatu, etc">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Harga Beli</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="txt_hargaBeli" placeholder="masukan harga beli barang">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Harga Jual</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="txt_hargaJual" placeholder="masukan harga jual barang">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Stok</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="txt_stok" placeholder="stok barang anda">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Deskripsi</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" name="txt_deskripsi" rows="3"></textarea>
    </div>
    <div class="col-4">
    <button type="reset" class="btn btn-danger mb-3">Kosongkan</button>
    <button type="submit" class="btn btn-success mb-3" name="bsimpan">Simpan</button>
  </div>
  </div>
</div>
</div>
</form>
  <script type="text/javascript" src="js/bootstrap.bundle.min.js>"></script>
    </body>
    </html>
    </body>
