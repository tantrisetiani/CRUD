<?php

require 'functions.php';

$rows = query("SELECT * FROM tb_mahasiswa");

if (isset($_POST["cari"])){
    $keyword = $_POST["keyword"];
    $rows = cari($keyword);
    }
?>

<!DOCTYPE html>
<html>

<head>
    <title>Data Mahasiswa</title>
</head>

<body>
    <h1>Data Mahasiswa</h1>
    <a href="tambah.php">Tambah data</a>
    <br>
    <br>
    <form action="" method="post">
        <input type="text" name="keyword" id="keyword" placeholder="masukkan keyword..." autofocus autocomplete="off">
        <button type="submit" name="cari">Cari</button>
    </form>
    <br>
    <br>
    <table border="1" cellspacing=0 cellpadding=10>
        <thead>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php foreach ($rows as $row) : ?>
                <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["nim"]; ?></td>
                    <td><?php echo $row["nama"]; ?></td>
                    <td><?php echo $row["email"]; ?></td>
                    <td><?php echo $row["jurusan"]; ?></td>
                    <td>
                        <a href="ubah.php?id= <?php echo $row["id"] ?>">Ubah | </a>
                        <a href="hapus.php?id= <?php echo $row["id"] ?>">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>