<?php
require ('koneksi.php');

$id_pengiriman  = htmlspecialchars($_POST['txt_idPengiriman']);
$tanggal        = htmlspecialchars($_POST['txt_tanggal']);
$pelanggan      = htmlspecialchars($_POST['txt_pelanggan']);
$ket_sistem     = htmlspecialchars($_POST['txt_sistem']);
$no_resi        = htmlspecialchars($_POST['txt_noResi']);
$keterangan     = htmlspecialchars($_POST['txt_keterangan']);
$status         = htmlspecialchars($_POST['txt_status']);
$id_transaksi   = htmlspecialchars($_POST['txt_idTransaksi']);

if (isset($_POST['bsimpan'])){
    $simpan = mysqli_query($koneksi, "INSERT INTO `pengiriman` (`id_pengiriman`, `tanggal`, `pelanggan`,  `ket_sistem`, `no_resi`, `keterangan`, `status`, `id_transaksi`) 
    VALUES ('$id_pengiriman','$tanggal','$pelanggan','$ket_sistem','$no_resi','$keterangan','$status','$id_transaksi');") or die(mysqli_error($koneksi));
    if ($simpan){
        echo "<script> alert('Data Berhasil Ditambahkan!');
        document.location='pengiriman.php';
        </script>";
    }
}
?>