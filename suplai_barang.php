<?php
require "koneksi.php"

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Upload Barang</title>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col mt-4">
                    <div><i class="uil uil-step-backward-circle" width="200"></i></div>
                   
                </div>
            </div>
        </div>
        <div class="container-fluid" id="tambah" data-target="#tambah">
            <div class="row">
                <div class="col">
                    <tr>
                        <div class="form-group align-text-center mt-4">
                        <label class="control-label" for="gbr_barang">+ Tambah Gambar</label>
                  <input type="file" name="gbr_barang" class="form-control" id="gbr_barang" required="">
                        </div>
                    </tr>
                </div>
                <div class="col">
                    <tr>
                        <div class="form-group align-text-center mt-4">
                        <td><input type="text" placeholder="Nama" class="form-control rounded-pill" name="txt_nama"></td>
                        </div>
                    </tr>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <tr>
                        <div class="form-group align-text-center mt-4">
                        <td><input type="text" placeholder="Id Produk" class="form-control rounded-pill" name="txt_idProduk"></td>
                        </div>
                    </tr>
                </div>
                <div class="col">
                    <tr>
                        <div class="form-group align-text-center mt-4">
                        <td><input type="text" placeholder="Kategori" class="form-control rounded-pill" name="txt_kategori"></td>
                        </div>
                    </tr>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <tr>
                        <div class="form-group align-text-center mt-4">
                        <td><input type="text" placeholder="Warna" class="form-control rounded-pill" name="txt_warna"></td>
                        </div>
                    </tr>
                </div>
                <div class="col">
                    <tr>
                        <div class="form-group align-text-center mt-4">
                        <td><input type="text" placeholder="Ukuran" class="form-control rounded-pill" name="txt_ukuran"></td>
                        </div>
                    </tr>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <tr>
                        <div class="form-group align-text-center mt-4">
                        <td><input type="text" placeholder="Harga Jual" class="form-control rounded-pill" name="txt_hargaJual"></td>
                        </div>
                    </tr>
                </div>
                <div class="col">
                    <tr>
                        <div class="form-group align-text-center mt-4">
                        <td><input type="text" placeholder="Harga Beli" class="form-control rounded-pill" name="txt_hargaBeli"></td>
                        </div>
                    </tr>
                </div>
                <div class="row mt-4">
                <div class="col">
                        <td><input type="text" placeholder="stok" class="form-control rounded-pill" name="txt_stok"></td>
                
                </div>
                <div class="col">
                    <tr>
                        <div class="form-group align-text-center mt-4">
                        </div>
                    </tr>
                </div>
            </div>
            <div class="container mt-4">
                <div class="row">
                    <div class="col">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="reset" class="btn btn-danger">Reset</button>
                  <input type="submit" class="btn btn-success" name="tambah" value="simpan">
                          </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Launch static backdrop modal
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>

        <?php
        if(@$_POST['tambah']){
            $gbr_barang = $koneksi->conn->real_escape_string($POST['gbr_barang']);
            $txt_nama = $koneksi->conn->real_escape_string($POST['nama_barang']);
            $txt_idProduk = $koneksi->conn->real_escape_string($POST['id_barang']);
            $txt_kategori = $koneksi->conn->real_escape_string($POST['kategori']);
            $txt_warna = $koneksi->conn->real_escape_string($POST['warna']);
            $txt_ukuran = $koneksi->conn->real_escape_string($POST['ukuran']);
            $txt_hargaJual = $koneksi->conn->real_escape_string($POST['harga_jual']);
            $txt_hargaBeli = $koneksi->conn->real_escape_string($POST['harga_beli']);
            $txt_stok = $koneksi->conn->real_escape_string($POST['stok']);
            $txt_deskripsi = $koneksi->conn->real_escape_string($POST['deskripsi']);
            
            $extensi = explode(".", $_FILES['gbr_barang']['name']);
            $gbr_barang = "barang-".round(microtime(true)).".".end($extensi);
            $sumber = $_FILES['gbr_barang']['tmp_name'];
            $upload = move_uploaded_file($sumber,"A1_Project/img/").$gbr_barang;

            if($upload){
                // $query =  mysqli_query("INSERT INTO `barang` (`gbr_produk`, `id_barang`, `nama_barang`, `warna`, `ukuran`, `kategori`, `harga_beli`, `harga_jual`, `stok`, `deskripsi_barang`) VALUES ('$gbr_barang', '$txt_idProduk', '$txt_nama', '$txt_warna', '$txt_ukuran', '$txt_kategori', '$txt_hargaBeli', '$txt_hargaJual', '$txt_stok', '$txt_deskripsi');") or die ($db->error()); 
                // header("location: ?page=data_barang.php");
            }else{
                echo"<script>alert('upload gambar gagal')</script>";
            }
        }
        ?>

        <script type="text/javascript" src="js/bootstrap.bundle.min.js>"></script>
    </body>
    </html>
