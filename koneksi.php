<?php
$koneksi = mysqli_connect("localhost","root","","appthrusted1");
if(mysqli_connect_errno()){

    echo "koneksi gagal" . mysqli_connect_errno();
}

?>