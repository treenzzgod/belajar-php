<?php
include "koneksi.php";
if(isset($_POST['Submit'])){
    $id_mahasiswa = $_POST['id_mahasiswa'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $id_jurusan = $_POST['id_jurusan'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $sql = "UPDATE mahasiswa SET nama = '$nama', nim = '$nim', id_jurusan = '$id_jurusan' WHERE id_mahasiswa = '$id_mahasiswa'";
    $query = mysqli_query($koneksi,$sql);
    if($query){
        header('Location: index.php');
    }else{
        echo "Gagal";
    }
}
?>