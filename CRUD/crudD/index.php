<?php

require 'functions.php';


$rows = query("SELECT * FROM tb_mahasiswa");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Data Mahasiswa</h1>
    <a href="tambah.php">Tambah Data</a>
    <br>
    <br>
    <table border="1" cellpadding=10 cellspacing=0>
        <thead>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </thead>
        <tbody>
        <?php $i = 1; ?>
            <?php foreach ($rows as $row) : ?>
                <tr>
                <td><?php echo $i ?></td>
                    <td><?php echo $row["nim"] ?></td>
                    <td><?php echo $row["nama"] ?></td>
                    <td><?php echo $row["email"] ?></td>
                    <td><?php echo $row["jurusan"] ?></td>
                    <td>
                        <a href="">ubah |</a>
                        <a href="hapus.php?id=<?php echo $row["id"] ?>" 
                        onclick="return confirm('Apakah anda yakin akan menghapus data?')">hapus </a>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>