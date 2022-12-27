<?php
require ('koneksi.php');

// menangkap data id yang di kirim dari url
$id = $_GET['id_barang'];
 
// menghapus data dari database
mysqli_query($koneksi,"DELETE FROM `barang` WHERE `barang`.'id_barang'=$id");
 
// mengalihkan halaman kembali ke index.php
echo "<script>
eval(\"parent.location='data_barang.php '\");
alert (' Data Berhasil Dihapus!');
</script>";

?>