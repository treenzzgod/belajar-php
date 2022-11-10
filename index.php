<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        table,
        tr,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
    <table>
        <tr>
            <td>ID jurusan</td>
            <td>kode Jurusan</td>
            <td>Nama Jurusan</td>
        </tr>
        <?php
        include "koneksi.php";
        $sql = "SELECT * FROM jurusan order by id_jurusan desc";
        $query = mysqli_query($koneksi, $sql);
        while ($jurusan = mysqli_fetch_array($query)) {
            echo "<tr>";
            echo "<td>" . $jurusan['id_jurusan'] . "</td>";
            echo "<td>" . $jurusan['kode_jurusan'] . "</td>";
            echo "<td>" . $jurusan['nama_jurusan'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <br>
    <table>
        <tr>
            <td>ID Mahasiswa</td>
            <td>ID Jurusan</td>
            <td>NIM</td>
            <td>Nama Mahasiswa</td>
            <td>Jenis Kelamin</td>
            <td>Tempat lahir</td>
            <td>Tanggal Lahir</td>
            <td>Alamat</td>
        </tr>
        <?php
        include "koneksi.php";
        $sql = "SELECT * FROM mahasiswa order by id_mahasiswa asc";
        $query = mysqli_query($koneksi, $sql);
        while ($mahasiswa = mysqli_fetch_array($query)) {
            echo "<tr>";
            echo "<td>" . $mahasiswa['id_mahasiswa'] . "</td>";
            echo "<td>" . $mahasiswa['id_jurusan'] . "</td>";
            echo "<td>" . $mahasiswa['nim'] . "</td>";
            echo "<td>" . $mahasiswa['nama'] . "</td>";
            echo "<td>" . $mahasiswa['jenis_kelamin'] . "</td>";
            echo "<td>" . $mahasiswa['tempat_lahir'] . "</td>";
            echo "<td>" . $mahasiswa['tanggal_lahir'] . "</td>";
            echo "<td>" . $mahasiswa['alamat'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
     
</body>

</html>