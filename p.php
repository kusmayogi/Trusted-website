<?php
require "koneksi.php"

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Trusted: Login</title>
    <!-- form start -->
    <form method="POST" action="action.php" enctype="multipart/form-data">
    <div class="container-fluid">
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">tambah gambar</label>
      <input type="file" name="gbr_produk" class="form-control" id="exampleFormControlInput1" required="">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">id Produk</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="txt_idProduk" placeholder="yanto">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">nama</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="txt_nama" placeholder="yanto">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">warna</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="txt_warna" placeholder="lanang">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">ukuran</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="txt_ukuran" placeholder="mnm">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">kategori</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="txt_kategori" placeholder="08xxxxxxxxxxxxx">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">harga beli</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="txt_hargaBeli" placeholder="08xxxxxxxxxxxxx">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">harga jual</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="txt_hargaJual" placeholder="08xxxxxxxxxxxxx">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">stok</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="txt_stok" placeholder="08xxxxxxxxxxxxx">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">deskripsi</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="txt_deskripsi" placeholder="08xxxxxxxxxxxxx">
    </div>
    <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3" name="bsimpan">Confirm identity</button>
  </div>
  </div>
  </form>
<!-- form end -->
        <script type="text/javascript" src="js/bootstrap.bundle.min.js>"></script>
    </body>
    </html>
