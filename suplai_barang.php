<?php
require "koneksi.php"

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Upload Barang</title>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col mt-4">
                    <div> <a href="/bootstrap/bootstrap-5.0.2-dist/data_barang.php" class="btn btn-light-dark"> <img src="kembali.png" class="img-fluid img-thumbnail" width="30">Upload Barang</a></div>
                   
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <tr>
                        <div class="form-group align-text-center mt-4">
                        <td><input type="text" placeholder="Nama" class="form-control rounded-pill" name="txt_nama"></td>
                        </div>
                    </tr>
                </div>
                <div class="col">
                    <tr>
                        <div class="form-group align-text-center mt-4">
                        <td><input type="text" placeholder="Id Produk" class="form-control rounded-pill" name="txt_idProduk"></td>
                        </div>
                    </tr>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <tr>
                        <div class="form-group align-text-center mt-4">
                        <td><input type="text" placeholder="Kategori" class="form-control rounded-pill" name="txt_kategori"></td>
                        </div>
                    </tr>
                </div>
                <div class="col">
                    <tr>
                        <div class="form-group align-text-center mt-4">
                        <td><input type="text" placeholder="Warna" class="form-control rounded-pill" name="txt_warna"></td>
                        </div>
                    </tr>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <tr>
                        <div class="form-group align-text-center mt-4">
                        <td><input type="text" placeholder="Ukuran" class="form-control rounded-pill" name="txt_ukuran"></td>
                        </div>
                    </tr>
                </div>
                <div class="col">
                    <tr>
                        <div class="form-group align-text-center mt-4">
                        <td><input type="text" placeholder="Harga Jual" class="form-control rounded-pill" name="txt_hargaJual"></td>
                        </div>
                    </tr>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <tr>
                        <div class="form-group align-text-center mt-4">
                        <td><input type="text" placeholder="Harga Beli" class="form-control rounded-pill" name="txt_hargaBeli"></td>
                        </div>
                    </tr>
                </div>
                <div class="col">
                    <tr>
                        <div class="form-group align-text-center mt-4">
                        <td><input type="text" placeholder="Deskripsi Produk" class="form-control rounded-pill" name="txt_deskripsi"></td>
                        </div>
                    </tr>
                </div>
                <div class="row mt-4">
                <div class="col">
                <label class="control-label" for="gbr_barang">+ Tambah Gambar</label>
                  <input type="file" name="gbr_barang" class="form-control" id="gbr_barang" required="">
                </div>
                <div class="col mt-4">
                <!-- <button type="reset" class="btn btn-danger">Reset</button>
                  <input type="submit" class="btn btn-success" name="tambah" value="simpan"> -->
                </div>
                </div>
            </div>
            <div class="container mt-4">
                <div class="row">
                    <div class="col">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="reset" class="btn btn-danger" a href="suplai_barang.php">Reset</button>
                  <input type="submit" class="btn btn-success" name="tambah" value="simpan" a href="data_barang.php">
                          </div>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="js/bootstrap.bundle.min.js>"></script>
    </body>
    </html>
