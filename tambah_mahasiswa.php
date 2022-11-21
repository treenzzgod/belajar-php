<?php
include "koneksi.php";
if(isset($_POST['Submit'])){
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $id_jurusan = $_POST['id_jurusan'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $sql = "INSERT INTO mahasiswa (nama,nim,id_jurusan,jenis_kelamin,tempat_lahir,tanggal_lahir,alamat) VALUES ('$nama','$nim','$id_jurusan','$jenis_kelamin','$tempat_lahir','$tanggal_lahir','$alamat')";
    $query = mysqli_query($koneksi,$sql);
    if($query){
        header('Location: index.php');
    }else{
        echo "Gagal";
    }
}
?>

<h3>Tambah Data Mahasiswa</h3>

<form action="tambah_mahasiswa.php" method="post" name="form1">
    <table width="25%" border="0">
        <tr> 
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr> 
            <td>NIM</td>
            <td><input type="text" name="nim"></td>
        </tr>
        <tr> 
            <td>Jurusan</td>
            <td>
                <select name="id_jurusan">
                    <?php
                    include "koneksi.php";
                    $sql = "SELECT * FROM jurusan";
                    $query = mysqli_query($koneksi,$sql);
                    while($data = mysqli_fetch_array($query)){
                        echo "<option value='$data[id_jurusan]'>$data[nama_jurusan]</option>";
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr> 
            <td>Jenis Kelamin</td>
            <td>
                <select name="jenis_kelamin">
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td><input type="text" name="tempat_lahir"></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td><input type="date" name="tanggal_lahir"></td>

        </tr>
        <tr> 
            <td>Alamat</td>
            <td><input type="text" name="alamat"></td>
        </tr>
        <tr> 
            <td></td>
            <td><input type="submit" name="Submit" value="Submit"></td>
        </tr>
    </table>