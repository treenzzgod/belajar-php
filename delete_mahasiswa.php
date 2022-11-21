<?php
 if($_GET['id']){
     include "koneksi.php";
     $id = $_GET['id'];
     $sql = "DELETE FROM mahasiswa WHERE id_mahasiswa = '$id'";
     $query = mysqli_query($koneksi,$sql);
     if($query){
         header('Location: index.php');
     }else{
         echo "Gagal";
     }
 }
?>