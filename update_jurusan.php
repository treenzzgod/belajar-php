<?php
include "koneksi.php";
if(isset($_POST['Submit'])){
    $kode_jurusan = $_POST['kode_jurusan'];
    $nama_jurusan = $_POST['nama_jurusan'];
    $id_jurusan = $_POST['id_jurusan'];
    $sql = "UPDATE jurusan SET kode_jurusan = '$kode_jurusan', nama_jurusan = '$nama_jurusan' WHERE id_jurusan = '$id_jurusan'";
    $query = mysqli_query($koneksi,$sql);
    if($query){
        header('Location: index.php');
    }else{
        echo "Gagal";
    }
}
?>