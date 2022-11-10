<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form Input Ke Database</h1>
    <form action="action-post.php" method="post">
        <table>
            <tr>
                <td>Kode Jurusan</td>
                <td>:</td>
                <td><input type="text" name="kode_jurusan"></td>
            </tr>
            <tr>
                <td>Nama Jurusan</td>
                <td>:</td>
                <td><input type="text" name="nama_jurusan"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="Submit" value="Submit"></td>
                <td><input type="reset" name="reset" value="Cancel"></td></td>
            </tr>
        </table>
</body>
</html>