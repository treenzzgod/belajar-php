<?php
     include "koneksi.php";
     $sql = mysqli_query($koneksi, "SELECT * FROM mahasiswa where id_mahasiswa = '$_GET[id]'");
     $data = mysqli_fetch_array($sql);

?>

<br>
<h3>Edit Mahasiswa</h3>

<form action="update_mahasiswa.php" method="post">
    <table>
        <tr>
            <td>NIM</td>
            <td><input type="text" name="nim" value="<?php echo $data['nim']; ?>"></td>
        </tr>
        <tr>
            <td>Nama Mahasiswa</td>
            <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>
                <select name="jenis_kelamin">
                    <option value="Laki-laki" <?php if($data['jenis_kelamin'] == 'Laki-laki'){echo "selected";} ?>>Laki-laki</option>
                    <option value="Perempuan" <?php if($data['jenis_kelamin'] == 'Perempuan'){echo "selected";} ?>>Perempuan</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><textarea name="alamat"><?php echo $data['alamat']; ?></textarea></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>
                <select name="id_jurusan">
                    <?php
                        $sql_jurusan = mysqli_query($koneksi, "SELECT * FROM jurusan");
                        while($data_jurusan = mysqli_fetch_array($sql_jurusan)){
                            ?>
                                <option value="<?php echo $data_jurusan['id_jurusan']; ?>" <?php if($data['id_jurusan'] == $data_jurusan['id_jurusan']){echo "selected";} ?>><?php echo $data_jurusan['nama_jurusan']; ?></option>
                            <?php
                        }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td><input type="hidden" name="id_mahasiswa" value="<?php echo $data['id_mahasiswa']; ?>"></td>
            <td><input type="submit" name="Submit" value="Submit"></td>
        </tr>
    </table>
</form>