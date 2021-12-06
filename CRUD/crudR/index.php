<?php

require 'functions.php';

$rows = query("SELECT * FROM tb_mahasiswa")
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
    <h1> Data Mahasiswa</h1>
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
        <?php foreach($rows as $row) :?>
            <tr>
                <td><?php echo $row["id"] ?> </td>
                <td><?php echo $row["nim"]?></td>
                <td><?php echo $row["nama"]?></td>
                <td><?php echo $row["email"]?></td>
                <td><?php echo $row["jurusan"]?></td>
                <td>
                    <a href="">Ubah | </a>
                    <a href="">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
           
        </tbody>
    </table>
</body>

</html>