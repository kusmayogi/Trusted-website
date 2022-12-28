<?php
require "koneksi.php";
$gbr_produk = $_FILES['gbr_produk']['name'];
$ganti = $_FILES['gbr_produk']['tmp_name'];
$txt_id = htmlspecialchars($_POST['txt_id']);
$txt_nama = htmlspecialchars($_POST['txt_nama']);
$txt_warna = htmlspecialchars($_POST['txt_warna']);
$txt_ukuran = htmlspecialchars($_POST['txt_ukuran']);
$txt_kategori = htmlspecialchars($_POST['txt_kategori']);
$txt_hargaBeli = htmlspecialchars($_POST['txt_hargaBeli']);
$txt_hargaJual = htmlspecialchars($_POST['txt_hargaJual']);
$txt_stok = htmlspecialchars($_POST['txt_stok']);
$txt_deskripsi = htmlspecialchars($_POST['txt_deskripsi']);
if (isset($_POST['bsimpan'])){
    $simpan = mysqli_query($koneksi, "INSERT INTO `barang` (`gambar`, `id_barang`, `nama`, `warna`, `ukuran`, `kategori`, `harga_beli`, `harga_jual`, `stok`, `deskripsi`) 
    VALUES ('$gbr_produk', '$txt_id', '$txt_nama', '$txt_warna', '$txt_ukuran', '$txt_kategori', '$txt_hargaBeli', '$txt_hargaJual', '$txt_stok', '$txt_deskripsi');");
    move_uploaded_file($ganti,'image/'.$gbr_produk);
    if ($simpan){
        echo "<script> alert('Data Berhasil Ditambahkan!');
        document.location='data_barang.php';
        </script>";
    } else if ($_GET['hal'] == "hapus"){
        $hapus = mysqli_query($koneksi, "DELETE FROM `barang` WHERE `barang`.`id_barang` = '$_GET[id_barang]'");
    }
        if($hapus){
            echo "<script> alert('berhasil');
            document.location='data_barang.php';
            </script>"; 
        }else{
            echo "<script> alert('gagal');
        document.location='data_barang.php';
        </script>";
        }
    }
    
?>
