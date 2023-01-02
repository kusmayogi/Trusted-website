<?php
require ('koneksi.php');

// menangkap data id yang di kirim dari url
$id = $_GET['id_pengiriman'];
 
// menghapus data dari database
mysqli_query($koneksi,"DELETE FROM `pengiriman` WHERE id_pengiriman='$id'")or die(mysqli_error($koneksi));
 
// mengalihkan halaman kembali ke index.php

echo "<script>
eval(\"parent.location='pengiriman.php '\");
alert (' Data Berhasil Dihapus!');
</script>";


?>