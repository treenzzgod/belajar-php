<?php
 if($_GET['id']){
     include "koneksi.php";
     $id = $_GET['id'];
     $sql = "DELETE FROM jurusan WHERE id_jurusan = '$id'";
     $query = mysqli_query($koneksi,$sql);
     if($query){
         header('Location: index.php');
     }else{
         echo "Gagal";
     }
 }
?>