<?php
require ('koneksi.php');

if ( isset($_POST['bupdate_pengiriman']) ){
  $id = $_POST['txt_idPengiriman'];
  // $tanggal_pengiriman = $_POST['txt_tanggal'];
  // $pelanggan_pengiriman = $_POST['txt_pelanggan'];
  // $ket_sistem_pengiriman = $_POST['txt_sistem'];
  // $no_resi_pengiriman = $_POST['txt_noResi'];
  $keterangan_pengiriman = $_POST['txt_keterangan'];
  $status_pengiriman = $_POST['txt_status'];
  // $id_transaksi_pengiriman = $_POST['txt_idTransaksi'];

  $update = mysqli_query($koneksi, "UPDATE `pengiriman` SET keterangan='$keterangan_pengiriman', status='$status_pengiriman' 
  WHERE id_pengiriman='$id'");
  if($update){
    echo "<script> alert('Data Berhasil Diupdate!');
    document.location='pengiriman.php';
    </script>";
    } else{
    echo "<script> alert('Data Gagal Diupdate!');
    document.location='pengiriman.php';
    </script>";
    }
}
?>