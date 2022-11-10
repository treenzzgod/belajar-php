<?php
include "koneksi.php";
if($_POST['Submit'] == "Submit"){
    $kode_jurusan = $_POST['kode_jurusan'];
    $nama_jurusan = $_POST['nama_jurusan'];
    // cek Id jurusan di database 
 //rollback 
    $sql = "SELECT * FROM jurusan WHERE kode_jurusan = '$kode_jurusan'";
    $sql = "ALTER TABLE jurusan AUTO_INCREMENT = 1";
    $query = mysqli_query($koneksi,$sql1, $sql);
    $jurusan = mysqli_fetch_array($query);
    if($jurusan){
        echo "Kode Jurusan sudah ada";
    }else{
        $sql = "INSERT INTO jurusan (kode_jurusan, nama_jurusan) VALUES ('$kode_jurusan', '$nama_jurusan')";
        $query = mysqli_query($koneksi,$sql1, $sql);
        if($query){
            header('Location: index.php');
        }else{
            echo "Gagal";
        }
    }
}
?>