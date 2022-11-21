<?php
    include "koneksi.php";
    $sql = mysqli_query($koneksi, "SELECT * FROM jurusan where id_jurusan = '$_GET[id]'");
    $data = mysqli_fetch_array($sql);

?>
<br>
<h3>Edit Jurusan</h3>
<form action="update_jurusan.php" method="post">
    <table>
        <tr>
            <td>Kode Jurusan</td>
            <td><input type="text" name="kode_jurusan" value="<?php echo $data['kode_jurusan']; ?>"></td>
        </tr>
        <tr>
            <td>Nama Jurusan</td>
            <td><input type="text" name="nama_jurusan" value="<?php echo $data['nama_jurusan']; ?>"></td>
        </tr>
        <tr>
            <td><input type="hidden" name="id_jurusan" value="<?php echo $data['id_jurusan']; ?>"></td>
            <td><input type="submit" name="Submit" value="Submit"></td>
        </tr>
    </table>

