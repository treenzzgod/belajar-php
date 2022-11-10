<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "fakultas";
$koneksi = mysqli_connect($server, $username, $password, $database);
$koneksi_db = mysqli_select_db($koneksi, $database);
// if ($koneksi){
//     echo "Koneksi berhasil<br>";
//     if ($koneksi_db){
//         echo "Database berhasil terhubung<br>";
//     } else {
//         echo "Database gagal terhubung <br>";
//     }
// }else{
//     echo "Koneksi gagal";
// }
?>








