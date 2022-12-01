<?php
$koneksi = mysqli_connect("localhost","root","","appthrusted");
if(mysqli_connect_errno()){

    echo "koneksi gagal" . mysqli_connect_errno();
}

?>