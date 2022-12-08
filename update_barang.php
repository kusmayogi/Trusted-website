<?php
require ('koneksi.php');

if (isset($_POST['bupdate'])){
  $id = $_POST['txt_idbarang'];
  $nama_barang = $_POST['txt_nama'];
  $warna_barang = $_POST['txt_warna'];
  $ukuran_barang = $_POST['txt_ukuran'];
  $kategori_barang = $_POST['txt_kategori'];
  $hargaBeli_barang = $_POST['txt_hargaBeli'];
  $hargaJual_barang = $_POST['txt_hargaJual'];
  $stok_barang = $_POST['txt_stok'];
  $deskripsi_barang = $_POST['txt_deskripsi'];

  $nama_file = $_FILES ['gbr_produk']['name'];
  $source = $_FILES ['gbr_produk']['tmp_name'];
  $folder = 'image/';

  move_uploaded_file($source, $folder.$nama_file);

  $update = mysqli_query($koneksi, "UPDATE barang SET gambar='$nama_file', nama='$nama_barang', 
          warna='$warna_barang', ukuran='$ukuran_barang', kategori='$kategori_barang', 
          harga_beli='$hargaBeli_barang', harga_jual='$hargaJual_barang', stok='$stok_barang', 
          deskripsi='$deskripsi_barang' WHERE id_barang ='$id'");
  if($update){
    echo "<script> alert('Data Berhasil Diupdate!');
    document.location='data_barang.php';
    </script>";
    } else{
    echo "<script> alert('Data Gagal Diupdate!');
    document.location='data_barang.php';
    </script>";
    }
}
?>