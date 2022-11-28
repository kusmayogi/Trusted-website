<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "trusted";
$koneksi = mysqli_connect($server, $username, $password, $db);

if (!$koneksi){
    die("koneksi g".mysqli_connect_error());
}
?>