<?php
include "koneksi.php";
if(isset($_POST['Submit'])){
    $kode_jurusan = $_POST['kode_jurusan'];
    $nama_jurusan = $_POST['nama_jurusan'];
    $sql = "INSERT INTO jurusan (kode_jurusan,nama_jurusan) VALUES ('$kode_jurusan','$nama_jurusan')";
    $query = mysqli_query($koneksi,$sql);
    if($query){
        header('Location: index.php');
    }else{
        echo "Gagal";
    }
}
?>

<h3>Tambah data Jurusan</h3>
<form action="tambah_jurusan.php" method="post" name="form1">
    <table width="25%" border="0">
        <tr> 
            <td>Kode Jurusan</td>
            <td><input type="text" name="kode_jurusan"></td>
        </tr>
        <tr> 
            <td>Nama Jurusan</td>
            <td><input type="text" name="nama_jurusan"></td>
        </tr>
        <tr> 
            <td></td>
            <td><input type="submit" name="Submit" value="Submit"></td>
        </tr>
    </table>
