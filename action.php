<?php
require "koneksi.php";
$gbr_produk = $_FILES['gbr_produk']['name'];
$ganti = $_FILES['gbr_produk']['tmp_name'];
$txt_nama = htmlspecialchars($_POST['txt_nama']);
$txt_warna = htmlspecialchars($_POST['txt_warna']);
$txt_ukuran = htmlspecialchars($_POST['txt_ukuran']);
$txt_kategori = htmlspecialchars($_POST['txt_kategori']);
$txt_hargaBeli = htmlspecialchars($_POST['txt_hargaBeli']);
$txt_hargaJual = htmlspecialchars($_POST['txt_hargaJual']);
$txt_stok = htmlspecialchars($_POST['txt_stok']);
$txt_deskripsi = htmlspecialchars($_POST['txt_deskripsi']);
if (isset($_POST['bsimpan'])){
    $simpan = mysqli_query($koneksi, "INSERT INTO `test` (`gambar`, `nama`, `warna`, `ukuran`, `kategori`, `harga_beli`, `harga_jual`, `stok`, `deskripsi`) 
    VALUES ('$gbr_produk', '$txt_nama', '$txt_warna', '$txt_ukuran', '$txt_kategori', '$txt_hargaBeli', '$txt_hargaJual', '$txt_stok', '$txt_deskripsi');");
    move_uploaded_file($ganti,'TRUSTED-WEBSITE/img/',$gbr_produk);
    if ($simpan){
        echo "<script> alert('gagal');
        document.location='home.html';
        </script>";
    }else{
        echo "eror message";
    }
}

?>
