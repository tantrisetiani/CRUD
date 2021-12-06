<?php
require 'functions.php';

$id = $_GET["id"];

$rows = query("SELECT * FROM tb_mahasiswa WHERE id=$id");

    if (isset($_POST["submit"])) {
        if (ubah($_POST) > 0) {
        echo "
        <script>
        alert('data berhasil diubah');
        document.location.href = 'index.php';
        </script>
        ";
        } else {
        echo "
        <script>
        alert('data gagal diubah');
        document.location.href = 'index.php';
        </script>
        ";
        }
    }

?>

<html>
<head>
<title>Ubah Data</title>
</head>
<body>
    <h1>Form Ubah Data Mahasiswa</h1>
    <form action="" method="post">
    <?php foreach ($rows as $row): ?>
    <table>
    <input type="hidden" name="id" id="id" value="<?php echo $row["id"]?>">
    <tr>    
        <td>NIM</td>
        <td><input type="text" name="nim" id="nim" value="<?php echo $row["nim"]; ?>"></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td><input type="text" name="nama" value="<?php echo $row["nama"]; ?>"></td>
        
    </tr>
    <tr>
        <td>Email</td>
        <td><input type="text" name="email" value="<?php echo $row["email"]; ?>"></td>
       
    </tr>
    <tr>
        <td>Jurusan</td>
        <td><input type="text" name="jurusan" value="<?php echo $row["jurusan"]; ?>"></td>
       
    </tr>
    <tr>
        <td></td>
        <td><button type="submit" name="submit">Simpan</button></td>
    </tr>
    </table>
    <?php endforeach; ?> 
    </form>

</body>
</html>